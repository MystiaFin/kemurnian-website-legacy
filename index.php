<?php
include 'sendEmail.php';
include 'includes/header.php';
include 'includes/footer.php';
include 'components/news-card.php';
include 'includes/home/lokasi.php';
include 'includes/home/hero.php';
include 'includes/home/ppdb.php';

$newsArticles = include 'data/news-articles.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>Sekolah Kemurnian</title>
    <meta name="description" content="Home Page - Sekolah Kemurnian">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/base.css?ver=1.1" type="text/css">
    <link rel="stylesheet" href="css/main.css?ver=1.4" type="text/css">
    <link rel="stylesheet" href="css/media-queries.css?ver=1.5" type="text/css">
    
    <link rel="preload" fetchpriority="high" as="image" href="images/logo KMN png.webp" type="image/webp" />
    <link rel="preconnect" href="https://maps.gstatic.com/" crossorigin="anonymous">
    
    <script src="js/modernizr.js"></script>
    <link rel="shortcut icon" href="logo.ico">
</head>

<body class="homepage">

    <div id="preloader">
        <div id="status">
            <img src="images/loader.gif" height="60" width="60" alt="" loading="lazy">
            <div class="loader">Loading...</div>
        </div>
    </div>

    <?php renderHeader('home'); ?>
    <?php renderHero(); ?>
    <?php renderLokasi(); ?>

    <!-- About Section -->
    <section id="about">
        <div class="row section-head">
            <div class="twelve columns">
                <h1>Tentang Kami</h1>
                <hr />
                <br>
                <p>Sekolah Kemurnian pertama didirikan dengan nama TK Kemurnian, pada tanggal 2 Januari 1978 di Jalan
                    Kemurnian V No. 209, Jakarta Barat. Sampai saat ini, Sekolah Kemurnian telah berkembang sehingga
                    mendirikan jenjang pendidikan dari Sekolah Dasar (SD), Sekolah Menengah Pertama (SMP), sampai pada
                    Sekolah Menengah Atas (SMA) dan berekspansi hingga mendirikan 2 unit cabang sekolah, yaitu Sekolah
                    Kemurnian II di Greenville dan Sekolah Kemurnian III di Citra.
                </p>
            </div>
        </div>
        <br>
        <div class="row about-content">
            <a class="button stroke" href="about.html">Read On</a>
        </div>
    </section>

    <!-- News Section (REFACTORED) -->
    <section id="journal">
        <div class="row section-head">
            <div class="twelve columns">
                <h1>News and Events</h1>
                <hr />
            </div>
        </div>

        <div class="row">
            <div class="twelve columns">
                <div id="blog-wrapper" class="bgrid-third tab-bgrid-half mob-bgrid-half group">
                    <?php foreach ($newsArticles as $article): ?>
                        <?php renderNewsCard($article); ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <a class="button stroke" href="news.html">More News</a>
    </section>

    <?php renderPPDB(); ?>

    <!-- Contact Section ================================================== -->
    <section id="contact">
        <div class="row section-head">
            <div class="twelve columns">
                <h1>Come Get Closer With Us</h1>

                <div>
                    <a href="https://linktr.ee/sekolahkemurnian">
                        <button>Whatsapp</button>
                    </a>

                    <a href="https://www.instagram.com/accounts/login/?next=%2Fsekolah.kemurnian%2F&source=omni_redirect">
                        <button>Instagram</button>
                    </a>

                    <a href="https://www.youtube.com/@SekolahKemurnian">
                        <button>Youtube</button>
                    </a>
                </div>

                <hr />
            </div>
        </div>
    </section>

    <?php renderFooter(); ?>

    <!-- Scripts -->
    <script async src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>');</script>
    <script defer type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script defer src="js/jquery.fittext.js"></script>
    <script defer src="js/backstretch.js"></script>
    <script defer src="js/waypoints.js"></script>
    <script defer src="js/main.js"></script>
    <script defer src="js/autocomplete.js?ver=1.2"></script>
    <script defer src="js/autocompletemobile.js?ver=1.1"></script>
    <script defer>
        var audio = document.getElementById("mars");
        audio.volume = 0.75;
    </script>

</body>
</html>
