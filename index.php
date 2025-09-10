<?php include 'sendEmail.php'; ?>

<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    
    <meta charset="utf-8">
    <!--- Basic Page Needs
   ================================================== -->
    <title>Sekolah Kemurnian</title>
    <meta name="description" content="Home Page - Sckolah Kemurnian">
    <meta name="author" content="">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <!-- Mobile Specific Metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css?ver=1.1" type="text/css">
    <link rel="stylesheet" href="css/main.css?ver=1.4" type="text/css">
    <link
      rel="preload"
      fetchpriority="high"
      as="image"
      href="images/logo KMN png.webp"
      type="image/webp"
    />
    <link
      rel="preload"
      fetchpriority="high"
      as="image"
      href="images/ibadah-waisak-tk-sd-kmn2-2023/ibadah-waisak-tk-sd-kmn2-0.webp"
      type="image/webp"
    />
    <link rel="stylesheet" href="css/media-queries.css?ver=1.5" type="text/css">
    <link rel="preconnect" href="https://maps.gstatic.com/" crossorigin="anonymous">
    <link rel="preconnect" href="https://maps.googleapis.com" crossorigin="anonymous">

    <!-- Script
   =================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- Favicons
	=================================================== -->
    <link rel="shortcut icon" href="logo.ico">

</head>

<body class="homepage">

    <div id="preloader">
        <div id="status">
            <img src="images/loader.gif" height="60" width="60" alt=""
            loading="lazy">
            <div class="loader">Loading...</div>
        </div>
    </div>


    <!-- Header
   =================================================== -->
    <header id="main-header">

        <div class="row header-inner">

            <div class="logo">
                <a title="Home Page" class="smoothscroll" href="#hero"></a>
            </div>

            <nav id="nav-wrap">

                <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
                    <span class='menu-text'>Show Menu</span>
                    <span class="menu-icon"></span>
                </a>
                <a class="mobile-btn" href="#" title="Hide navigation">
                    <span class='menu-text'>Hide Menu</span>
                    <span class="menu-icon"></span>
                </a>

                <ul id="nav" class="nav">

                    <form class="desktop-hidden" autocomplete="off" action="">
                        <div class="autocomplete" style="display: inline-block; position: relative;">
                            <input id="myInputMob" type="search" placeholder="Search">
                        </div>
                        <button title="mobile search button" id="search-button-mob" type="button" onclick="openPageMob()">
                        <img src="./images/search.png" alt="search"></button>
                    </form>

                    <li class="current"><a title="Home" class="smoothscroll" href="#hero">Home</a></li>
                    <li><a title="School" class="smoothscroll" href="#services">School</a></li>
                    <li><a title="PPDB" class="smoothscroll" href="#ppdb">PPDB</a></li>
                    <li><a title="Kurikulum" class="smoothscroll" href="#kurikulum">Kurikulum</a></li>
                    <li><a title="About" class="smoothscroll" href="#about">About</a></li>
                    <li><a title="News" class="smoothscroll" href="#journal">News</a></li>
                    <li><a title="Contact" class="smoothscroll" href="#contact">Contact</a></li>

                    <form class="mobile-hidden" autocomplete="off" action="">
                        <div class="autocomplete" style="display: inline-block; position: relative;">
                            <input id="myInput" type="search" placeholder="Search">
                        </div>
                        <button title="search button" id="search-button" type="button" onclick="openPage()">
                            <img src="./images/search.png" alt="search"
                            loading="lazy"
                                width="51"
                                height="51"
                                title="search">
                        </button>
                    </form>

                </ul>

            </nav> <!-- /nav-wrap -->

        </div> <!-- /header-inner -->

    </header>


    <!-- Hero
   =================================================== -->
    <section id="hero">
        <div class="row hero-content">
            <div class="twelve flex-container">
                <div id="hero-slider" class="flexslider">
                    <ul class="slides">
                        <?php
                        // HERO IMAGES GO HERE
                        // kalo mau tambahin gambar baru, tambahinnya di file
                        // main.css & media-queries.css
                        ?>

                           <!-- Slide -->
                        <li class="slide-1">
                            <div class="flex-caption">
                                <h1>
                                   
                                </h1>
                                <p>
                                    
                                </p>
                            </div>
                        </li>

                        <!-- Slide -->
                        <li class="slide-2">
                            <div class="flex-caption">
                                <h1>
                                   
                                </h1>
                                <p>
                                    
                                </p>
                            </div>
						</li>


						<!-- Slide -->
						<li class="slide-3">
							<div class=" flex-caption flex-3">
								<h1>Berita dan Event terbaru dari Sekolah Kemurnian</h1>
								<p><a title="Baca Berita" class="button stroke smoothscroll" href="#journal">News and Event</a></p>
							</div>
						</li>
					

						<!-- Slide -->
						<li class="slide-4">

						</li>

		
						 <!-- Slide -->
                        <li class="slide-5">
							<div class=" flex-caption flex-3">
								<h1>Sekolah Kemurnian Sudah Berdiri Sejah Tahun 1978</h1>
								<p><a title="Baca Berita" class="button stroke smoothscroll" href="#about">Tentang Kami</a></p>
							</div>
                        </li>
					</ul>

                </div> <!-- .flexslider -->

            </div> <!-- .flex-container -->

        </div> <!-- .hero-content -->

    </section> <!-- #hero -->

    <!-- Services Section
   ================================================== -->
    <section id="services">

        <div class="row section-head">

            <div class="twelve columns">

                <h1>Lokasi Sekolah</h1>

                <hr />

            </div>

        </div>

        <div class="row">

            <div class="twelve columns">

                <div class="service-list bgrid-third s-bgrid-half mob-bgrid-whole">

                    <div class="bgrid">

                        <a href="sekolah-kemurnian-1.html">
                            <picture>
                                <source
                                    srcset="images/Qmur_1.avif 1476w,
                                            images/Qmur_1.avif 738w"
                                    sizes="(max-width: 600px) 100vw, 738px"
                                    type="image/avif"
                                />
                                <img src="images/qmur_1.webp"
                                    alt="kemurnian1"
                                    width="1476"
                                    height="832"
                                    loading="lazy"
                                    decoding="async" />
                            </picture>
                        </a>

                        <h3><a href="sekolah-kemurnian-1.html">Sekolah Kemurnian I</a></h3>

                        <div class="service-content">
                            <p>Jl. Kemurnian V No. 209 Glodok, <br> Kecamatan Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibu Kota Jakarta 11120
                            </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8820921547413!2d106.81105261396955!3d-6.146534761961614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f608a1000aab%3A0x92f0ffb2c218f403!2sSekolah%20Kemurnian%20I!5e0!3m2!1sid!2sid!4v1660379395894!5m2!1sid!2sid"
                                title="kemurnian 1 location"
                                width="300" height="300"
                                style="border:0;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="iframe1">
                            </iframe>
                        </div>

                    </div> <!-- /bgrid -->

                    <div class="bgrid">

                        <a href="sekolah-kemurnian-2.html">
                            <picture>
                                <source
                                srcset="images/Qmur_2.avif 1476w,
                                            images/Qmur_2.avif 738w"
                                    sizes="(max-width: 600px) 100vw, 738px"
                                    type="image/avif"
                                />
                                <img src="images/qmur_2.webp"
                                    alt="kemurnian2"
                                    width="1476"
                                    height="832"
                                    loading="lazy"
                                    decoding="async" />
                            </picture>
                        </a>

                        <h3><a href="sekolah-kemurnian-2.html">Sekolah Kemurnian II</a></h3>

                        <div class="service-content">
                            <p>Komplek Green Ville Blok Q No. 209, Duri Kepa, Kec. Kebon Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11510 
                            </p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63467.48240572489!2d106.71308693124999!3d-6.168550499999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f651cef9a1c9%3A0xeff64c79506e34c2!2sSekolah%20Kemurnian%20II!5e0!3m2!1sid!2sid!4v1660379724754!5m2!1sid!2sid"
                                title="kemurnian 1 location"
                                width="300" height="300"
                                style="border:0;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="iframe2"></iframe>
                        </div>

                    </div> <!-- /bgrid -->

                    <div class="bgrid">

                        <div class="icon-part">
                            <a href="sekolah-kemurnian-3.html">
                                <picture>
                                    <source
                                    srcset="images/qmurrr_3.webp 1476w,
                                            images/qmurrr_3.webp 738w"
                                        sizes="(max-width: 600px) 100vw, 738px"
                                        type="image/webp" />
                                    <img src="images/qmurrr_3.webp"
                                        alt="kemurnian3"
                                        width="1476"
                                        height="832"
                                        loading="lazy"
                                        decoding="async" />
                                </picture>
                            </a>
                        </div>

                        <h3><a href="sekolah-kemurnian-3.html">Sekolah Kemurnian III</a></h3>

                        <div class="service-content">
                            <p>Perumahan Citra 2 Jl. Keharmonisan No.Blok A3, RT.1/RW.19, Pegadungan, Kec. Kalideres, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11830
                            </p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9522476009074!2d106.70160087360107!3d-6.1371182938497455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a03362119f0c5%3A0x7d52db1e3186ceb0!2sSekolah%20Kemurnian%20III!5e0!3m2!1sid!2sid!4v1733725394023!5m2!1sid!2sid" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                        </div>

                    </div> <!-- /bgrid -->

                </div> <!-- /service-list -->

            </div> <!-- /twelve -->

        </div> <!-- /row -->

    </section> <!-- /services -->

    <!-- ppdb Section
   ================================================== -->
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
        </div> <!-- /row -->
    </section>
    
    <!-- Kurikulum Section
   ================================================== -->
    <section id="kurikulum">

        <div class="row section-head">

            <div class="twelve columns">

                <h1>Kurikulum</h1>

                <hr />

            </div>

        </div>

        <br>

        <div class="row kurikulum-content">

            <div class="mob-whole six columns left">

                <a title="Kurikulum TK" href="kurikulum-tk.html"><i class="fa fa-book fa-3x"></i></a>

                <h3>Kurikulum TK</h3>

                <p>Berpedoman pada Kurikulum Nasional 2013 yang disempurnakan yaitu pembelajaran tematik
                    dipadukan dengan Kurikulum Merdeka berisikan nilai-nilai agama dan budi pekerti, jati diri,
                    literasi dan juga profil pelajar Pancasila.
                </p>
                <p><a class="button stroke" href="kurikulum-tk.html">Read On</a></p>

            </div> <!-- /left -->

            <div class="mob-whole six columns right">

                <a title="Kurikulum TK Bilingual" href="kurikulum-tkbil.html"><i class="fa fa-book fa-3x"></i></a>

                <h3>Kurikulum TK Bilingual</h3>

                <p>Berpedoman pada Kurikulum Nasional 2013 PAUD yang Berbasis Kompetensi. Proses Pembelajaran yang
                    dilakukan diarahkan untuk tercapainya kompetensi sikap spiritual <br><br>
                </p>
                <p><a class="button stroke" href="kurikulum-tkbil.html">Read On</a></p>

            </div> <!-- /left -->

        </div> <!-- /row -->

        <div class="row kurikulum-content">

            <div class="mob-whole six columns left">

                <a title="Kurikulum SD" href="kurikulum-sd.html"><i class="fa fa-book fa-3x"></i></a>

                <h3>Kurikulum SD</h3>

                <p>Kurikulum Tingkat Satuan Pendidikan adalah kurikulum operasional yang disusun oleh dan
                    dilaksanakan di masing-masing satuan pendidikan. Sesuai dengan aturan amanat Peraturan Pemerintah ...
                </p>
                <p><a class="button stroke" href="kurikulum-sd.html">Read On</a></p>

            </div> <!-- /right -->

            <div class="mob-whole six columns right">

                <a title="Kurikulum SMP" href="kurikulum-smp.html"><i class="fa fa-book fa-3x"></i></a>

                <h3>Kurikulum SMP</h3>

                <p>Kurikulum ini disusun untuk mewujudkan visi sekolah dengan mengakomodasi potensi yang ada untuk
                    meningkatkan kualitas sekolah, baik dalam aspek akademis maupun non akademis. Dalam…
                </p>
                <p><a class="button stroke" href="kurikulum-smp.html">Read On</a></p>

            </div> <!-- /left -->

        </div> <!-- /row -->

        <div class="row kurikulum-content">

            <div class="mob-whole six columns left">

                <a title="Kurikulum SMA" href="kurikulum-sma.html"><i class="fa fa-book fa-3x"></i></a>

                <h3>Kurikulum SMA</h3>

                <p>SMA Kemurnian II menerapkan kurikulum merdeka belajar, yang mengedepankan pada Profil Pelajar Pancasila
                    untuk mendorong peserta didik menjadi pelajar sepanjang hidup…
                </p>
                <p><a class="button stroke" href="kurikulum-sma.html">Read On</a></p>

            </div> <!-- /right -->

            <div class="mob-whole six columns right">

                <a title="Kurikulum English" href="kurikulum-english.html"><i class="fa fa-book fa-3x"></i></a>

                <h3>Kemurnian School English Program</h3>

                <p>Sekolah Kemurnian juga mengembangkan program Bahasa Inggris yang berkualitas dan juga mempunyai
                    sumber daya yang mumpuni di bidangnya. <br><br>
                </p>
                <p><a class="button stroke" href="kurikulum-english.html">Read On</a></p>

            </div> <!-- /left -->

        </div> <!-- /row -->

    </section>

    <!-- About Section
   ================================================== -->
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
                     
                                          <article class="bgrid sk2">
                        <a href="news/2025/9_maulid.html">
                            <picture>
                                <source
                                srcset="
                                  ./images/news/2025/maulid.jpeg 1080w,
                                  ./images/news/2025/maulid.jpeg 1080w,
                                "
                                sizes="(max-width: 600px) 100vw, 540px"
                                type="image/webp"
                                />
                                <img
                                    src="./images/news/2025/maulid.jpeg"
                                    alt="maulid.jpeg"
                                    loading="lazy"
                                    decoding="async"
                                    width="1080"
                                    height="1080"
                                />
                            </picture>
                        </a>
                        <h5>3 September 2025</h5>
                        <h3>
                            <a href="news/2025/9_maulid.html">
                              Hari Maulid Nabi Muhammad SAW 12 Rabiul Awal 1447 H
                            </a>
                        </h3>
                        <p>
                              🌙 Selamat memperingati Maulid Nabi Muhammad SAW...
                        </p>
                    </article>
                      <article class="bgrid sk2">
                        <a href="news/2025/8_pameran_ite.html">
                            <picture>
                                <source
                                srcset="
                                    ./images/news/2025/pameran_ite.webp   1080w,
                                    ./images/news/2025/pameran_ite.webp   1080w,
                                "
                                sizes="(max-width: 600px) 100vw, 540px"
                                type="image/webp"
                                />
                                <img
                                    src="./images/news/2025/pameran_ite.webp"
                                    alt="pameran ite"
                                    loading="lazy"
                                    decoding="async"
                                    width="1080"
                                    height="1080"
                                />
                            </picture>
                        </a>
                        <h5>11 Agustus 2025</h5>
                        <h3>
                            <a href="news/2025/8_pameran_ite.html">
                                Pameran ITE26
                            </a>
                        </h3>
                        <p>
                            Mulai pukul 08.00 WIB 📍 Sekolah Kemurnian I, I...
                        </p>
                    </article>
                     
                     <article class="bgrid sk2">
                        <a href="pelatihan2.html">
                            <picture>
                                <source
                                srcset="
                                    ./images/hfecs.webp   1080w,
                                    ./images/hfecs.webp  1080w
                                "
                                sizes="(max-width: 600px) 100vw, 540px"
                                type="image/webp"
                                />
                                <img
                                src="./images/hfecs.webp"
                                alt="Seminar-kasih-sd-00"
                                loading="lazy"
                                decoding="async"
                                width="1080"
                                height="1080"
                                />
                            </picture>
                        </a>
                        <h5>15 Juli 2025</h5>
                        <h3>
                        <a href="pelatihan2.html">
                             HAFECS with Kemurnian School Jakarta
                            
                        </a>
                        </h3>

                        <p>
                               HAFECS with Kemurnian School Jakarta.....
                        </p>
                    </article>
                     
                     
                     <article class="bgrid sk2">
                        <a href="ajaranbaru.html">
                            <picture>
                                <source
                                srcset="
                                    ./images/ajaranbaru.webp   1080w,
                                    ./images/ajaranbaru.webp  1080w
                                "
                                sizes="(max-width: 600px) 100vw, 540px"
                                type="image/webp"
                                />
                                <img
                                src="./images/ajaranbaru.webp"
                                alt="Seminar-kasih-sd-00"
                                loading="lazy"
                                decoding="async"
                                width="1080"
                                height="1080"
                                />
                            </picture>
                        </a>
                        <h5>14 Juli 2025</h5>
                        <h3>
                        <a href="ajaranbaru.html">
                            Welcome back, Kemurnian Students!🤗
                            
                        </a>
                        </h3>

                        <p>
                              Tahun ajaran baru 2025/2026 resmi dimulai .....
                        </p>
                    </article>
                     
                       
                     <article class="bgrid sk2">
                        <a href="open25.html">
                            <picture>
                                <source
                                srcset="
                                    ./images/open25.webp   1080w,
                                    ./images/open25.webp  1080w
                                "
                                sizes="(max-width: 600px) 100vw, 540px"
                                type="image/webp"
                                />
                                <img
                                src="./images/open25.webp"
                                alt="Seminar-kasih-sd-00"
                                loading="lazy"
                                decoding="async"
                                width="1080"
                                height="1080"
                                />
                            </picture>
                        </a>
                        <h5>09 Juli 2025</h5>
                        <h3>
                        <a href="open25.html">
                            𝐎𝐏𝐄𝐍 𝐄𝐍𝐑𝐎𝐋𝐋𝐌𝐄𝐍𝐓 𝟐𝟎𝟐𝟔/𝟐𝟎𝟐𝟕 𝐒𝐔𝐃𝐀𝐇 𝐃𝐈𝐁𝐔𝐊𝐀!
                            
                        </a>
                        </h3>

                        <p>
                              Untuk orang tua yang sedang mencari sekolah .....
                        </p>
                    </article>
                     
                     
                     
                     <article class="bgrid sk2">
                        <a href="O2sn1.html">
                            <picture>
                                <source
                                srcset="
                                    ./images/Kathleen2.webp   1080w,
                                    ./images/Kathleen2.webp  1080w
                                "
                                sizes="(max-width: 600px) 100vw, 540px"
                                type="image/webp"
                                />
                                <img
                                src="./images/Kathleen2.webp"
                                alt="Seminar-kasih-sd-00"
                                loading="lazy"
                                decoding="async"
                                width="1080"
                                height="1080"
                                />
                            </picture>
                        </a>
                        <h5>26 Juni 2025</h5>
                        <h3>
                        <a href="O2sn1.html">
                            Festival Lomba Seni & Sastra Siswa Nasional (FLS3N) 
                            
                        </a>
                        </h3>

                        <p>
                              Congratulations for Kathleen Sherice Hendry .....
                        </p>
                    </article>
                     
                       
                     <article class="bgrid sk2">
                        <a href="o2sn.html">
                            <picture>
                                <source
                                srcset="
                                    ./images/Luvinia1.webp   1080w,
                                    ./images/Luvinia1.webp  1080w
                                "
                                sizes="(max-width: 600px) 100vw, 540px"
                                type="image/webp"
                                />
                                <img
                                src="./images/Luvinia1.webp"
                                alt="Seminar-kasih-sd-00"
                                loading="lazy"
                                decoding="async"
                                width="1080"
                                height="1080"
                                />
                            </picture>
                        </a>
                        <h5>26 Juni 2025</h5>
                        <h3>
                        <a href="o2sn.html">
                            Olimpiade Olahraga Siswa Nasional (O2SN)
                            
                        </a>
                        </h3>

                        <p>
                              Congratulations for Luvinia Reiko Visoka .....
                        </p>
                    </article>
                     
                     
                     
                     <article class="bgrid sk2">
                        <a href="pelatihan1.html">
                            <picture>
                                <source
                                srcset="
                                    ./images/pelatihan2.webp   1080w,
                                    ./images/pelatihan2.webp  1080w
                                "
                                sizes="(max-width: 600px) 100vw, 540px"
                                type="image/webp"
                                />
                                <img
                                src="./images/pelatihan2.webp"
                                alt="Seminar-kasih-sd-00"
                                loading="lazy"
                                decoding="async"
                                width="1080"
                                height="1080"
                                />
                            </picture>
                        </a>
                        <h5>23 Juni 2025</h5>
                        <h3>
                        <a href="pelatihan1.html">
                            In House Training by HAFECS
                            
                        </a>
                        </h3>

                        <p>
                              Hari kedua pelatihan berlanjut dengan .....
                        </p>
                    </article>
                     
                     
                     
                        <article class="bgrid sk2">
                        <a href="pelatihan.html">
                            <picture>
                                <source
                                srcset="
                                    ./images/pelatihand1.webp   1080w,
                                    ./images/pelatihand1.webp  1080w
                                "
                                sizes="(max-width: 600px) 100vw, 540px"
                                type="image/webp"
                                />
                                <img
                                src="./images/pelatihand1.webp"
                                alt="Seminar-kasih-sd-00"
                                loading="lazy"
                                decoding="async"
                                width="1080"
                                height="1080"
                                />
                            </picture>
                        </a>
                        <h5>23 Juni 2025</h5>
                        <h3>
                        <a href="pelatihan.html">
                            In House Training by HAFECS
                            
                        </a>
                        </h3>

                        <p>
                              Hari pertama In House Training.....
                        </p>
                    </article> 
                     
                    
                    
                    </a>
                     
                     
                    </a>
                     
                     

                    </a>
                     
                    </a>
                     
                    </a>
                     
                     
                    </a>
              
                    </a>
                    
                 
                    </a>
                    </a>
                    
                    
                    </a>
                </div>
                <!-- /blog-wrapper -->
            </div> <!-- /twelve -->

        </div> <!-- /row -->

        <a class="button stroke" href="news.html">More News</a>

    </section> <!-- /blog -->

    <!-- journal
   =================================================== -->
   <section id="ppdb">

        <div class="row section-head">

            <div class="twelve columns">

                <h1>Penerimaan Peserta Didik Baru</h1>

                <hr />

            </div>

        </div>
        
        

		<div class="row section-head">

            <div class="twelve columns">
			    	<br>
			         <picture>
                    <source
                    srcset="images/open25.avif 640w,
                            images/open25.avif 320w"
                        sizes="(max-width: 600px) 100vw, 640px"
                        type="image/avif" />
                    <img src="images/open320.avif"
                        alt="openhouse-TA-2024-2025"
                        width="500"
                        height="500"
                        loading="lazy"
                        decoding="async" />
                </picture>   
                <div class="center">
 <a href="promo-open-24.html"><button>Pelajari Selengkapnya</button></a>
                             
 
</div>
                
				<br> 

               
			</div> <!-- /left -->

		


			</div> <!-- /right -->

		</div> <!-- /row -->

    </section> <!-- /ppdb -->
  

    <!-- Contact Section
   ================================================== -->
    <section id="contact">

        <div class="row section-head">

            <div class="twelve columns">

                <h1>Come Get Closer With Us</h1>
                 
                 <div>
                     
                             <a href="https://linktr.ee/sekolahkemurnian"><button>Whatsapp</button></a>
                             
                             <a href="https://www.instagram.com/accounts/login/?next=%2Fsekolah.kemurnian%2F&source=omni_redirect"><button>Instagram</button></a>
                             
                             
                             <a href="https://www.youtube.com/@SekolahKemurnian"><button>Youtube</button></a>
                             
                           
                        </div>
                  	
                  	

                <hr />

            </div>

        </div>


            </div> <!-- /contact-form -->

        </div> <!-- /form-section -->

    </section> <!-- /contact-->


    <!-- Footer
   ================================================== -->
    <footer>

        <div class="row">

            <br>

            <div class="mob-whole six columns left">

                <picture>
                    <source
                        srcset="./images/cambridge.avif 2089w,
                        ./images/cambridge-small.avif 1045w"
                        sizes="(max-width: 540px) 100vw, 540px"
                        type="image/avif" />
                    <img
                        src="./images/cambridge.webp"
                        alt="cambridge"
                        width="2089"
                        height="728"
                        loading="lazy"
                        decoding="async" />
                </picture>

            </div> <!-- /left -->

            <div class="mob-whole six columns right">

                <h3 class="contact">Follow Us</h3>

                <ul class="footer-links-soi">
                    <li><a title="Facebook" href="https://web.facebook.com/sekolah.kemurnian?_rdc=1&_rdr" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a title="Instagram" href="https://www.instagram.com/sekolah.kemurnian/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a title="YouTube" href="https://www.youtube.com/results?search_query=sekolah+kemurnian" target="_blank"><i class="fa fa-youtube"></i></a></li>
                </ul>

            </div> <!-- /right -->

            <div id="go-top">
                <a class="smoothscroll" title="Back to Top" href="#hero"><span>Top</span><i class="fa fa-long-arrow-up"></i></a>
            </div>

            <div id="contact">
                <a title="Linktree" href="https://linktr.ee/sekolahkemurnian" target="_blank">
                    <picture>
                        <source
                            srcset="./images/whatsapp.avif"
                            type="image/avif" />
                        <img
                            src="./images/whatsapp.webp"
                            alt="whatsapp"
                            width="1000"
                            height="1000"
                            loading="lazy"
                            decoding="async" />
                    </picture>
                </a>
            </div>

            <div id="aimsis-home">
                
                </a>
            </div>

            <div id="sound">
                <audio id="mars" controls>
                    <source src="mars-kemurnian-jaya.mp3" type="audio/mp3">
                </audio>
            </div>

        </div> <!-- /row -->

        <div class="row">
            <div class="twelve columns">
                <p>Copyright © <?php echo date("Y");?> Sekolah Kemurnian. All rights reserved. | Design & development by Digital One</p>
            </div>
        </div>

    </footer> <!-- /footer -->


    <!-- Java Script
   ================================================== -->
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script async src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>');
    </script>
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