<?php
// easy configuration
$pageTitle = "The Dissing Docs - Official Website";
$videos = [
    [
        "title" => "Marcus Diss",
        "url" => "https://www.youtube.com/embed/5eu4Bu7mnJs",
        "description" => "the marcus diss, made by juin kai."
    ],
    [
        "title" => "Vernon Diss",
        "url" => "https://www.youtube.com/embed/ZgpnFF8yJtQ",
        "description" => "vernon, the dude who drinks jusTEA!!!!!!!!!!!!"
    ],
    [
        "title" => "Moses Diss v2",
        "url" => "https://www.youtube.com/embed/lOJ71TRVz1k",
        "description" => "cannot meh... upgraded version of the moses diss"
    ],
    [
        "title" => "Jerson Diss",
        "url" => "https://www.youtube.com/embed/OXTRLGjpBXg",
        "description" => "jerson really dont like this diss. moses leaked it and thats why we made moses diss v2"
    ],
    [
        "title" => "Moses Diss",
        "url" => "https://www.youtube.com/embed/doT-XHhOpj4",
        "description" => "the moses diss. the gayest person alive."
    ],
    [
        "title" => "Manfred diss",
        "url" => "https://www.youtube.com/embed/aeDdxDcgD0M",
        "description" => "manfred diss, the most.... i dont know bro."
    ],
    [
        "title" => "Moses Music Diss",
        "url" => "https://www.youtube.com/embed/ff3Rh1XcBYw",
        "description" => "the moses music diss because cannot meh!!!"
    ],
    [
        "title" => "Manfred diss v3",
        "url" => "https://www.youtube.com/embed/meuqJXinTuc",
        "description" => "his search history goes up, his fall goes down"
    ],
    [
        "title" => "Lai Hong Yue diss",
        "url" => "https://www.youtube.com/embed/dn_EBOmZK1A",
        "description" => "for context, he sent this penis to a girl. and he is not in our class so this is a special one."
    ]
  ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="https://ycb.glados.pro/Finobe_files/style.css">
    <meta content="The dissing docs" property="og:title" />
<meta content="the dissing docs, we diss studnets, cannot nehh" property="og:description" />
<meta content="https://emeraldolds.glados.pro/thedissingdocs/index.php" property="og:url" />
<meta content="https://media.discordapp.net/attachments/1365869738252697641/1369966763181084722/New_Project_55.png?ex=6832e079&is=68318ef9&hm=fb5f83b5f80eeac833be854f87c1cb8f69d157c8bceea65148f0d273e2c5f2ab&=&format=webp&quality=lossless&width=1458&height=1458" property="og:image" />
<meta content="#11b0ff" data-react-helmet="true" name="theme-color" />
  <style>
    .about-section {
  background-color: #1e1e1e;
  padding: 40px;
  border-radius: 8px;
  margin-bottom: 40px;
}

.about-section h2 {
  color: #ff5252;
  font-size: 2rem;
  margin-top: 0;
}

.about-section p {
  color: #cccccc;
  font-size: 1.1rem;
  line-height: 1.6;
    }
    .video-section {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 30px;
  margin-bottom: 40px;
}

.video-card {
  background-color: #1e1e1e;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
  transition: transform 0.3s ease;
}

.video-card:hover {
  transform: translateY(-10px);
}

.video-container {
  position: relative;
  padding-bottom: 56.25%; 
  height: 0;
  overflow: hidden;
}

.video-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: none;
}

.video-info {
  padding: 15px;
}

.video-info h3 {
  margin-top: 0;
  color: #ff5252;
  font-size: 1.4rem;
}

.video-info p {
  color: #cccccc;
  font-size: 1rem;
  line-height: 1.5;
}
h1, h2, h3, h4, h5, h6, p{
    color: #11b0ff; /*i like it blue!! */
}
</style>
</head>
<body>
    <div class="container">
        <header class="animated fadeInDown">
            <h1>the dissing docs</h1>
            <p>dropping beats and dissing students since 2025 😱😱😱</p>
        </header>

        <section class="about-section animated fadeIn">
            <h2>about us</h2>
            <p>
                Welcome... to the DISSING DOCS!!!
            </p>
            <p>
                the dissing docs disses people ok? yeah thats it bro
            </p>
            <img src="https://i.ibb.co/9kXJJRk2/Screenshot-2025-05-24-212613-removebg-preview.png" alt="" style="width:70%">
        </section>
        <div class="about-section">
        <h2 style="color: #ff5252; text-align: center; margin: 40px 0 20px;">our diss tracks</h2>
        
        <section class="video-section">
            <?php 
            $animations = ["fadeInLeft", "fadeInUp", "fadeInRight", "fadeInLeft", "fadeInUp"];
            foreach($videos as $index => $video): 
            ?>
                <div class="video-card animated <?php echo $animations[$index % count($animations)]; ?>">
                    <div class="video-container">
                        <iframe 
                            src="<?php echo $video['url']; ?>" 
                            title="<?php echo $video['title']; ?>" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowFullScreen>
                        </iframe>
                    </div>
                    <div class="video-info">
                        <h3><?php echo $video['title']; ?></h3>
                        <p><?php echo $video['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
            </div>
        <footer>
            <p>© <?php echo date('Y'); ?> the dissing docs, no students were harmed (well physically i guess)</p>
        </footer>
    </div>
</body>
</html>
