<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

$ALLOW_RICH_HTML = true;

function predecode_minimal_html(string $s): string {
    $s = html_entity_decode($s, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $s = preg_replace('~<\s*br\s*/?\s*>~i', '<br>', $s) ?? $s;
    return $s;
}

function sanitize_html(?string $html): string {
    $html = (string)$html;
    if ($html === '') return '';

    libxml_use_internal_errors(true);
    $doc = new DOMDocument();
    $prefix = '<?xml encoding="utf-8" ?>';
    $loaded = $doc->loadHTML($prefix . $html, LIBXML_HTML_NODEFDTD | LIBXML_HTML_NOIMPLIED);
    if (!$loaded) return htmlspecialchars($html, ENT_QUOTES, 'UTF-8');

    $allowed = [
        'p' => [], 'br' => [], 'hr' => [],
        'b' => [], 'strong' => [], 'i' => [], 'em' => [], 'u' => [], 's' => [], 'span' => [],
        'ul' => [], 'ol' => [], 'li' => [], 'blockquote' => [], 'code' => [], 'pre' => [],
        'h1' => [], 'h2' => [], 'h3' => [], 'h4' => [],
        'a' => ['href', 'title', 'target', 'rel'],
        'img' => ['src', 'alt', 'title', 'width', 'height']
    ];

    $isAllowedTag = function (string $name) use ($allowed): bool {
        return array_key_exists(strtolower($name), $allowed);
    };
    $allowedAttrs = function (string $name) use ($allowed): array {
        return $allowed[strtolower($name)] ?? [];
    };

    $nodes = [];
    foreach ($doc->getElementsByTagName('*') as $el) { $nodes[] = $el; }

    foreach ($nodes as $el) {
        $tag = strtolower($el->nodeName);
        if (!$isAllowedTag($tag)) {
            $parent = $el->parentNode;
            if ($parent) {
                while ($el->firstChild) { $parent->insertBefore($el->firstChild, $el); }
                $parent->removeChild($el);
            }
            continue;
        }

        $keep = $allowedAttrs($tag);
        if ($el->hasAttributes()) {
            $attrs = [];
            foreach ($el->attributes as $attr) { $attrs[] = $attr; }

            foreach ($attrs as $attr) {
                $name = strtolower($attr->nodeName);
                $value = (string)$attr->nodeValue;

                if ($name === 'style' || str_starts_with($name, 'on')) { $el->removeAttribute($name); continue; }
                if (!in_array($name, $keep, true)) { $el->removeAttribute($name); continue; }

                if ($tag === 'a' && $name === 'href') {
                    $v = trim($value);
                    $ok = preg_match('#^(https?:|mailto:|/)#i', $v) === 1;
                    if (!$ok) { $el->removeAttribute('href'); }
                }
                if ($tag === 'a' && $name === 'target') {
                    if (!in_array(strtolower($value), ['_blank', '_self'], true)) { $el->setAttribute('target', '_self'); }
                }
                if ($tag === 'a' && $el->getAttribute('target') === '_blank') {
                    if (!$el->hasAttribute('rel')) { $el->setAttribute('rel', 'noopener noreferrer'); }
                }
                if ($tag === 'img' && $name === 'src') {
                    $v = trim($value);
                    $ok = preg_match('#^(https?:|/)#i', $v) === 1;
                    if (!$ok) { $el->removeAttribute('src'); }
                }
                if ($tag === 'img' && in_array($name, ['width','height'], true)) {
                    if (!preg_match('/^\d{1,4}$/', $value)) { $el->removeAttribute($name); }
                }
            }
        }
    }

    $out = $doc->saveHTML();
    if (str_starts_with($out, $prefix)) { $out = substr($out, strlen($prefix)); }
    return $out;
}

$allowedModes = [
    'latest' => [ 'label' => 'Latest', 'description' => 'Fresh updates right off the press.', 'order' => 'news.creation_date DESC, news.id DESC' ],
    'trending' => [ 'label' => 'Trending', 'description' => 'Stories classmates are bookmarking the most.', 'order' => 'COALESCE(favorite_counts.bookmark_count, 0) DESC, news.creation_date DESC, news.id DESC' ],
    'spotlight' => [ 'label' => 'Spotlight', 'description' => 'Hidden gems and classroom highlights.', 'order' => 'news.id DESC' ],
];

$modeKey = strtolower($_GET['m'] ?? 'latest');
if (!array_key_exists($modeKey, $allowedModes)) { $modeKey = 'latest'; }
$currentMode = $allowedModes[$modeKey];

$resultsPerPage = 12;

try {
    $countRow = Cache::rememberForRequest('news_total_count', function () use ($db) {
        return $db->selectOne('SELECT COUNT(*) AS total FROM games', '', [], ['total' => 'int']);
    });
    $totalArticles = (int)($countRow['total'] ?? 0);
} catch (Throwable $e) { error_log('[NEWS_TOTAL] ' . $e->getMessage()); $totalArticles = 0; }

$numberOfPages = max(1, (int)ceil($totalArticles / $resultsPerPage));
$page = filter_input(INPUT_GET, 'p', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]) ?? 1;
if ($page > $numberOfPages) { $page = $numberOfPages; }
$offset = ($page - 1) * $resultsPerPage;

$orderClause = $currentMode['order'];

$newsQuery = <<<SQL
WITH favorite_counts AS (
    SELECT game AS news_id, COUNT(*) AS bookmark_count
    FROM games_favorites
    GROUP BY game
),
comment_counts AS (
    SELECT item_id AS news_id, COUNT(*) AS comment_count
    FROM games_comments
    GROUP BY item_id
)
SELECT
    news.id,
    news.name,
    news.description,
    news.creation_date,
    news.creator_id,
    u.username AS creator_username,
    COALESCE(favorite_counts.bookmark_count, 0) AS bookmark_count,
    COALESCE(comment_counts.comment_count, 0) AS comment_count
FROM games AS news
INNER JOIN users u ON u.id = news.creator_id
LEFT JOIN favorite_counts ON favorite_counts.news_id = news.id
LEFT JOIN comment_counts ON comment_counts.news_id = news.id
ORDER BY {$orderClause}
LIMIT ?
OFFSET ?
SQL;

try {
    $newsArticles = $db->select($newsQuery, 'ii', [$resultsPerPage, $offset], [ 'id' => 'int', 'creator_id' => 'int', 'bookmark_count' => 'int', 'comment_count' => 'int' ]);
} catch (Throwable $e) {
    error_log('[NEWS_LIST] ' . $e->getMessage());
    try {
        $fallbackQuery = <<<SQL
WITH favorite_counts AS (
    SELECT game AS news_id, COUNT(*) AS bookmark_count
    FROM games_favorites
    GROUP BY game
)
SELECT
    news.id,
    news.name,
    news.description,
    news.creation_date,
    news.creator_id,
    u.username AS creator_username,
    COALESCE(favorite_counts.bookmark_count, 0) AS bookmark_count,
    0 AS comment_count
FROM games AS news
INNER JOIN users u ON u.id = news.creator_id
LEFT JOIN favorite_counts ON favorite_counts.news_id = news.id
ORDER BY {$orderClause}
LIMIT ?
OFFSET ?
SQL;
        $newsArticles = $db->select($fallbackQuery, 'ii', [$resultsPerPage, $offset], [ 'id' => 'int', 'creator_id' => 'int', 'bookmark_count' => 'int', 'comment_count' => 'int' ]);
    } catch (Throwable $fallbackError) { error_log('[NEWS_LIST_FALLBACK] ' . $fallbackError->getMessage()); $newsArticles = []; }
}

if (!is_array($newsArticles)) { $newsArticles = []; }

$modeQuerySuffix = $modeKey !== 'latest' ? '&m=' . urlencode($modeKey) : '';
$paginationBase = '/News.aspx?p=';

$excerpt = static function (?string $text, int $limit = 170): string {
    $clean = trim((string)$text);
    if ($clean === '') { return 'No summary has been added yet - open the article to read the full update.'; }
    $clean = preg_replace('/\s+/', ' ', $clean) ?? $clean;
    $lengthFunc = function_exists('mb_strlen') ? 'mb_strlen' : 'strlen';
    $substrFunc = function_exists('mb_substr') ? 'mb_substr' : 'substr';
    if ($lengthFunc($clean) <= $limit) { return $clean; }
    return rtrim($substrFunc($clean, 0, max(0, $limit - 1))) . '...';
};
?>

<style>
/* default black text sitewide on this page */
#Body, #Body * { color: #000 !important; }
#Body a { color: #000 !important; }

/* override to white for the hero area and its children */
#Body .news-hero, #Body .news-hero * { color: #fff !important; }
#Body .news-hero__badge { color: #fff !important; }

/* filters/buttons inside the controls area inherit default styling */

/* pagination text and links inherit default styling */

/* render rich HTML excerpts safely without overflow issues */
.news-article-card__excerpt.is-html { max-height: 9rem; overflow: hidden; }
.news-article-card__excerpt.is-html img { max-width: 100%; height: auto; display: inline-block; }
.news-article-card__excerpt.is-html pre { white-space: pre-wrap; }
</style>

<div id="Body">
    <div id="NewsContainer" class="news-container">
        <section class="news-hero">
            <div class="news-hero__content">
                <h1 class="news-hero__title">Classroom News</h1>
                <p class="news-hero__subtitle">
                    Stay on top of updates, events, and stories from 6 Emerald. Every post is curated by classmates for classmates.
                </p>
            </div>
            <div class="news-hero__aside" aria-hidden="true">
                <span class="news-hero__badge">📰 Daily Brief</span>
                <span class="news-hero__badge">✨ Community Picks</span>
                <span class="news-hero__badge">📌 Class Highlights</span>
            </div>
        </section>

        <section class="news-controls" aria-label="News filters">
            <h2 class="news-controls__title">Browse the news</h2>
            <div class="news-controls__filters">
                <?php foreach ($allowedModes as $key => $meta): ?>
                    <?php $isActive = ($key === $modeKey); ?>
                    <a class="news-filter<?= $isActive ? ' news-filter--active' : '' ?>" href="/News.aspx?m=<?= urlencode($key) ?>" <?php if ($isActive): ?>aria-current="page"<?php endif; ?>>
                        <span class="news-filter__label"><?= htmlspecialchars($meta['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                        <span class="news-filter__description"><?= htmlspecialchars($meta['description'], ENT_QUOTES, 'UTF-8'); ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <nav class="news-pagination" aria-label="News pagination">
            <span class="news-pagination__label">Page <?= $page ?> of <?= $numberOfPages ?></span>
            <div class="news-pagination__actions">
                <?php if ($page > 1): ?>
                    <a class="news-pagination__link news-pagination__link--prev" href="<?= $paginationBase . ($page - 1) ?><?= $modeQuerySuffix ?>">
                        <span aria-hidden="true">&larr;</span> Newer
                    </a>
                <?php endif; ?>
                <?php if ($page < $numberOfPages): ?>
                    <a class="news-pagination__link news-pagination__link--next" href="<?= $paginationBase . ($page + 1) ?><?= $modeQuerySuffix ?>">
                        Older <span aria-hidden="true">&rarr;</span>
                    </a>
                <?php endif; ?>
            </div>
        </nav>

        <section class="news-grid" aria-live="polite">
            <?php if (!empty($newsArticles)): ?>
                <?php foreach ($newsArticles as $article): ?>
                    <?php
                        $articleId = (int)$article['id'];
                        $rawTitle = (string)$article['name'];
                        $title = $ep->remove($rawTitle);
                        $rawDescription = (string)($article['description'] ?? '');
                        $decodedHtml = predecode_minimal_html($rawDescription);
                        $descHtml = $ALLOW_RICH_HTML ? sanitize_html($decodedHtml) : nl2br(htmlspecialchars($rawDescription, ENT_QUOTES, 'UTF-8'));
                        if (trim(strip_tags($descHtml)) === '' && trim($rawDescription) !== '') {
                            $descHtml = nl2br(htmlspecialchars($rawDescription, ENT_QUOTES, 'UTF-8'));
                        }
                        $authorId = (int)$article['creator_id'];
                        $authorName = $ep->remove($article['creator_username'] ?? 'Unknown reporter');
                        $published = context::updated($article['creation_date']);
                        $bookmarks = max(0, (int)$article['bookmark_count']);
                        $comments = max(0, (int)$article['comment_count']);
                    ?>
                    <article class="news-article-card">
                        <a class="news-article-card__cover" href="/PlaceItem.aspx?ID=<?= $articleId ?>">
                            <img src="/Thumbs/PlaceAsset.ashx?assetId=<?= $articleId ?>&isSmall=1" alt="Cover for <?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>">
                        </a>
                        <div class="news-article-card__body">
                            <p class="news-article-card__meta">
                                <span><?= htmlspecialchars($published, ENT_QUOTES, 'UTF-8'); ?></span>
                                <span aria-hidden="true">•</span>
                                <a href="/User.aspx?ID=<?= $authorId ?>" class="news-article-card__author"><?= htmlspecialchars($authorName, ENT_QUOTES, 'UTF-8'); ?></a>
                            </p>
                            <h3 class="news-article-card__title">
                                <a href="/PlaceItem.aspx?ID=<?= $articleId ?>"><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></a>
                            </h3>
                            <div class="news-article-card__excerpt is-html"><?= $descHtml ?></div>
                            <div class="news-article-card__footer">
                                <span class="news-article-card__stat" title="Bookmarked by classmates">🔖 <?= number_format($bookmarks) ?></span>
                                <span class="news-article-card__stat" title="Discussion count">💬 <?= number_format($comments) ?></span>
                                <a class="news-article-card__cta" href="/PlaceItem.aspx?ID=<?= $articleId ?>">Read story</a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="news-grid__empty">No news has been published yet. Once classmates start posting, the latest updates will appear here.</p>
            <?php endif; ?>
        </section>

        <?php if ($numberOfPages > 1): ?>
            <nav class="news-pagination news-pagination--bottom" aria-label="News pagination">
                <span class="news-pagination__label">Page <?= $page ?> of <?= $numberOfPages ?></span>
                <div class="news-pagination__actions">
                    <?php if ($page > 1): ?>
                        <a class="news-pagination__link news-pagination__link--prev" href="<?= $paginationBase . ($page - 1) ?><?= $modeQuerySuffix ?>">
                            <span aria-hidden="true">&larr;</span> Newer
                        </a>
                    <?php endif; ?>
                    <?php if ($page < $numberOfPages): ?>
                        <a class="news-pagination__link news-pagination__link--next" href="<?= $paginationBase . ($page + 1) ?><?= $modeQuerySuffix ?>">
                            Older <span aria-hidden="true">&rarr;</span>
                        </a>
                    <?php endif; ?>
                </div>
            </nav>
        <?php endif; ?>
    </div>
</div>

<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
