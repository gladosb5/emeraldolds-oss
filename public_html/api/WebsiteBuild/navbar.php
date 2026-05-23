<?php
    $dataSavingModeEnabled = isset($_COOKIE['data_saving_mode']) && $_COOKIE['data_saving_mode'] === '1';

    if ($dataSavingModeEnabled) {
?>
<div class="Navigation data-saving">
    <nav class="data-saving-nav">
        <a class="nav-link" href="/News.aspx">news</a>
        <?php if ($logged == 'yes') { ?>
            <a class="nav-link" href="/User.aspx?toggleDataSaving=off">turn off data saving</a>
        <?php } ?>
    </nav>
</div>
<style>
.data-saving-nav {
    display: flex;
    gap: 1rem;
    align-items: center;
    justify-content: center;
    padding: 0.75rem 1rem;
    background: #0c3c78;
}
.data-saving-nav .nav-link {
    color: #000;
    text-decoration: none;
    font-weight: bold;
}
.data-saving-nav .nav-link:hover {
    text-decoration: underline;
}
</style>
<?php
        return;
    }

    try {
        $banners = Cache::remember('navbar_banners', 60, function () use ($db) {
            return $db->select(
                'SELECT text, textcolor FROM banners ORDER BY id DESC',
                '',
                [],
                ['textcolor' => 'int']
            );
        });
    } catch (Throwable $e) {
        error_log('[BANNERS] ' . $e->getMessage());
        $banners = [];
    }

    if (!is_array($banners)) {
        $banners = [];
    }
?>

<div class="Navigation"> 
    <?php if($logged == 'yes') { ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-nav d-flex flex-row w-100 justify-content-start">
                    <a class="nav-link px-3" href="/User.aspx">me</a>
                    <a class="nav-link px-3" href="/News.aspx">news</a>
                    <a class="nav-link px-3" href="/Browse.aspx">people</a>
                    <a class="nav-link px-3" href="/highlights.aspx">S.O.T.W</a>
                    <a class="nav-link px-3" href="/Forum/">forum</a>
                    <a class="nav-link px-3" href="/Awards/Default.aspx">awards</a>
                    <!-- <a class="nav-link px-3" href="/like.aspx">C.D</a> -->
                    <a class="nav-link px-3" href="/archive/index.php">archive</a>
                    <a class="nav-link px-3" href="/classgames.php">class games</a>
                    <a class="nav-link px-3" href="/slangs.php">slangs</a>
                    <a class="nav-link px-3" href="/origins.php">origins</a>
                    <?php if($_USER['administrator'] == "yes"){ ?>
                        <a class="nav-link px-3 admin-link" href="/Admin/Default.aspx">admin</a>
                    <?php } ?>
                </div>
            </div>
        </nav>
    <?php } else { ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-nav d-flex flex-row w-100 justify-content-start">
                    <a class="nav-link px-3" href="/Login/Default.aspx">login</a>
                    <a class="nav-link px-3" href="/Login/New.aspx">register</a>
                </div>
            </div>
        </nav>
    <?php } ?>
</div>

<!-- Banner Section -->
<?php if (!empty($banners)): ?>
    <?php foreach ($banners as $row): ?>
        <?php $textColor = ((int) $row['textcolor'] === 1) ? 'black' : 'white'; ?>
        <div class="text-center alert alert-success alert-logged text-white banner-alert" role="alert">
            <div class="container success-container" style="color: <?=$textColor?>;">
                <h1><?=htmlspecialchars($row['text'], ENT_QUOTES, 'UTF-8')?></h1>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<style>
/* Force horizontal navbar layout */
.navbar {
    padding: 0.5rem 1rem;
    white-space: nowrap;
}

.navbar-nav {
    flex-wrap: nowrap !important;
}

.navbar-nav.d-flex.flex-row {
    display: flex !important;
    flex-direction: row !important;
    align-items: center;
}

.navbar-nav .nav-link {
    padding: 0.5rem 1rem !important;
    margin: 0 0.25rem;
    border-radius: 0.25rem;
    transition: background-color 0.3s ease;
    white-space: nowrap;
    color: #fff !important;
}

.navbar-nav .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

.navbar-brand {
    font-weight: bold;
    color: #fff !important;
    flex-shrink: 0;
}

/* Prevent text overflow */
.container-fluid {
    overflow-x: auto;
    display: flex;
    align-items: center;
}

/* Admin link styling */
.admin-link {
    color: #ffc107 !important; /* Yellow color to make it stand out */
    font-weight: bold;
}

.admin-link:hover {
    background-color: rgba(255, 193, 7, 0.1) !important;
}

.badge-warning {
    background-color: #dc3545;
    color: white;
    font-size: 0.75rem;
    padding: 0.25rem 0.5rem;
    border-radius: 0.5rem;
    margin-left: 0.25rem;
}

/* Banner styles */
.banner-alert {
    margin-bottom: 0;
    border: 0;
    border-radius: 0;
    padding: 0.75rem 1.25rem;
    background-color: orange !important;
    z-index: 1;
    position: relative;
}

.success-container h1 {
    margin: 0;
    font-size: 1.5rem;
}

/* Responsive - allow horizontal scrolling on small screens */
@media (max-width: 991px) {
    .container-fluid {
        overflow-x: auto;
        flex-wrap: nowrap;
    }
    
    .navbar-nav {
        min-width: max-content;
    }
}
</style>
