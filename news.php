<?php
include 'components/news-card.php';
include 'includes/header.php';
include 'includes/footer.php';

$newsArticles = include 'data/news-articles.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <title>News</title>
    <meta name="description" content="Kemurnian School News and Events" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta
      http-equiv="Cache-Control"
      content="no-cache, no-store, must-revalidate"
    />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/base.css?ver=1.1" type="text/css" />
    <link rel="stylesheet" href="css/main.css?ver=1.4" type="text/css" />
    <link
      rel="preload"
      fetchpriority="high"
      as="image"
      href="../images/bgn1.webp"
      type="image/webp"
    />
    <link
      rel="stylesheet"
      href="css/media-queries.css?ver=1.5"
      type="text/css"
    />

    <!-- Script -->
    <script src="js/modernizr.js"></script>
    <script async src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script defer src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- Favicons -->
    <link rel="shortcut icon" href="logo.png" />
  </head>

  <body>
    <div id="top"></div>

    <div id="preloader">
      <div id="status">
        <img src="images/loader.gif" height="60" width="60" alt="" />
        <div class="loader">Loading...</div>
      </div>
    </div>

    <?php renderHeader('news'); ?>

    <!-- Page Title -->
    <section id="page-title-news">
      <div class="row">
        <div class="twelve columns">
          <h1>NEWS AND EVENTS</h1>
        </div>
      </div>
    </section>

    <!-- Content -->
    <section id="news-page">
      <div class="content">
        <div class="row category">
          <h1>Kategori Berita</h1>
          <select
            title="Choose school branch"
            name="links"
            size="1"
            onchange="window.location.href=this.value"
          >
            <option value="news.html">General</option>
            <option value="news-sk1.html">Sekolah Kemurnian I</option>
            <option value="news-sk2.html">Sekolah Kemurnian II</option>
            <option value="news-sk3.html">Sekolah Kemurnian III</option>
          </select>
        </div>

        <br />

        <div class="row">
          <div class="twelve columns">
            <div
              id="blog-wrapper"
              class="bgrid-third tab-bgrid-half mob-bgrid-half group"
            >
              <?php foreach ($newsArticles as $article): ?> <?php
              renderNewsCard($article); ?> <?php endforeach; ?>
            </div>
          </div>
        </div>

        <br />

        <a class="button stroke">Load More</a>
        <script defer src="js/button.js"></script>
      </div>
    </section>

    <?php renderFooter(); ?>

    <!-- Scripts -->
    <script>
      window.jQuery ||
        document.write('<script src="js/jquery-1.10.2.min.js"><\/script>');
    </script>
    <script
      defer
      type="text/javascript"
      src="js/jquery-migrate-1.2.1.min.js"
    ></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script defer src="js/jquery.fittext.js"></script>
    <script defer src="js/backstretch.js"></script>
    <script defer src="js/waypoints.js"></script>
    <script defer src="js/main.js"></script>
    <script defer src="js/pageshow.js"></script>
    <script defer src="js/autocomplete.js"></script>
    <script defer src="js/autocompletemobile.js"></script>
    <script defer>
      var audio = document.getElementById("mars");
      if (audio) audio.volume = 0.75;
    </script>
  </body>
</html>
