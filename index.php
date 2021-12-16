<?php 
  include "includes/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<h>
  <meta charset="utf-8">
  <title>UD. SATU 7AN</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link rel="icon" href="LOGO 1.9.png" type="image/png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap');
  </style>

  <!-- Bootstrap CSS File -->
  <link href="landingPage/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="landingPage/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="landingPage/lib/animate/animate.min.css" rel="stylesheet">
  <link href="landingPage/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="landingPage/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="landingPage/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="landingPage/css/style.css" rel="stylesheet">

  <!-- Anggota -->
  <link href="landingPage/css/dataAnggota.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700" rel="stylesheet" type="text/css">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/ea49b1189f.js" crossorigin="anonymous"></script>

  <!-- Card Testimoni -->
  <link rel="stylesheet" href="landingPage/css/styleTestimoni.css">

  <!-- Intro Slider -->
	<link href="landingPage/css/normalize.css" rel="stylesheet" type="text/css">
	<link href="landingPage/css/demo.css" rel="stylesheet" type="text/css">
	<link href="landingPage/css/slideshow.css" rel="stylesheet" type="text/css">
	<link href="landingPage/css/slideshow_layouts.css" rel="stylesheet" type="text/css">
  
  <script>document.documentElement.className = 'js';</script>

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">UD. SATU 7AN</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#portfolio">Barang Kami</a></li>
          <li><a href="#team">Anggota</a></li>
          <li><a type="button" href="pages/register.php" target="_blank">Daftar</a></li>
          <li><a type="button" href="pages/login.php" target="_blank">Masuk</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!--==========================
    Intro Section
  ============================-->
  <svg class="hidden">
    <defs>
      <symbol id="icon-arrow" viewBox="0 0 24 24">
        <title>arrow</title>
        <polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
      </symbol>
      <symbol id="icon-drop" viewBox="0 0 24 24">
        <title>drop</title>
        <path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
      </symbol>
      <symbol id="icon-prev" viewBox="0 0 100 50">
        <title>prev</title>
        <polygon points="5.4,25 18.7,38.2 22.6,34.2 16.2,27.8 94.6,27.8 94.6,22.2 16.2,22.2 22.6,15.8 18.7,11.8"/>
      </symbol>
      <symbol id="icon-next" viewBox="0 0 100 50">
        <title>next</title>
        <polygon points="81.3,11.8 77.4,15.8 83.8,22.2 5.4,22.2 5.4,27.8 83.8,27.8 77.4,34.2 81.3,38.2 94.6,25 "/>
      </symbol>
      <symbol id="icon-octicon" viewBox="0 0 24 24">
        <title>octicon</title>
        <path d="M12,2.2C6.4,2.2,1.9,6.7,1.9,12.2c0,4.4,2.9,8.2,6.9,9.6c0.5,0.1,0.7-0.2,0.7-0.5c0-0.2,0-0.9,0-1.7c-2.8,0.6-3.4-1.4-3.4-1.4C5.6,17.1,5,16.8,5,16.8C4.1,16.2,5,16.2,5,16.2c1,0.1,1.5,1,1.5,1c0.9,1.5,2.4,1.1,2.9,0.8c0.1-0.7,0.4-1.1,0.6-1.3c-2.2-0.3-4.6-1.1-4.6-5c0-1.1,0.4-2,1-2.7C6.5,8.8,6.2,7.7,6.7,6.4c0,0,0.8-0.3,2.8,1C10.3,7.2,11.1,7.1,12,7c0.9,0,1.7,0.1,2.5,0.3c1.9-1.3,2.8-1,2.8-1c0.5,1.4,0.2,2.4,0.1,2.7c0.6,0.7,1,1.6,1,2.7c0,3.9-2.4,4.7-4.6,5c0.4,0.3,0.7,0.9,0.7,1.9c0,1.3,0,2.4,0,2.8c0,0.3,0.2,0.6,0.7,0.5c4-1.3,6.9-5.1,6.9-9.6C22.1,6.7,17.6,2.2,12,2.2z" />
      </symbol>
      <clipPath id="polygon-clip-rhomboid" clipPathUnits="objectBoundingBox">
        <polygon points="0 1, 0.3 0, 1 0, 0.7 1" />
      </clipPath>
    </defs>
  </svg>

  <main>
    <div class="slideshow" tabindex="0">
      <div class="slide slide--layout-1" data-layout="layout1">
        <div class="slide-imgwrap">
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/1.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/2.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/3.jpg);"></div></div>
        </div>
        <div class="slide__title">
          <h3 class="slide__title-main">Daftar Sekarang !</h3>
          <p class="slide__title-sub">Kami menawarkan jasa stok barang berbasis web</p>
        </div>
      </div>

      <div class="slide slide--layout-2" data-layout="layout2">
        <div class="slide-imgwrap">
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/6.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/5.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/6.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/7.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/9.jpg);"><h4 class="slide__img-caption">UD. SATU 7AN</h4></div></div>
        </div>
        <div class="slide__title">
          <h3 class="slide__title-main">Cepat</h3>
          <p class="slide__title-sub"></p>
        </div>
      </div>

      <div class="slide slide--layout-3" data-layout="layout3">
        <div class="slide-imgwrap">
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/9.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/10.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/11.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/15.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/13.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/14.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/12.jpg);"></div></div>
        </div>
        <div class="slide__title">
          <h3 class="slide__title-main">Aman</h3>
          <p class="slide__title-sub"></p>
        </div>
      </div>

      <div class="slide slide--layout-4" data-layout="layout4">
        <div class="slide-imgwrap">
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/10.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/8.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/11.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/13.jpg);"></div></div>
        </div>
        <div class="slide__title">
          <h3 class="slide__title-main">Terpecaya</h3>
          <p class="slide__title-sub"></p>
        </div>
      </div>

      <div class="slide slide--layout-5" data-layout="layout5">
        <div class="slide-imgwrap">
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/1.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/2.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/3.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/4.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/5.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/6.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/7.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/8.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/9.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/10.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/11.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/12.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/13.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/14.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/15.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/16.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/17.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/small/18.jpg);"></div></div>
        </div>
        <div class="slide__title">
          <h3 class="slide__title-main">Terstruktur</h3>
          <p class="slide__title-sub"></p>
        </div>
      </div>

      <div class="slide slide--layout-6" data-layout="layout6">
        <div class="slide-imgwrap">
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/14.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/11.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/3.jpg);"></div></div>
        </div>
        <div class="slide__title">
          <h3 class="slide__title-main">Up to Date</h3>
          <p class="slide__title-sub"></p>
        </div>
      </div>

      <div class="slide slide--layout-7" data-layout="layout7">
        <div class="slide-imgwrap">
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/16.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/1.jpg);"></div></div>
          <div class="slide__img"><div class="slide__img-inner" style="background-image: url(landingPage/img/4.jpg);"></div></div>
        </div>
        <div class="slide__title">
          <h3 class="slide__title-main">Now or Never</h3>
          <p class="slide__title-sub"><a href="#">Daftar</a></p>
        </div>
      </div>

      <nav class="slideshow__nav slideshow__nav--arrows">
        <button id="prev-slide" class="btn btn--arrow" aria-label="Previous slide"><svg class="icon icon--prev"><use xlink:href="#icon-prev"></use></svg></button>
        <button id="next-slide" class="btn btn--arrow" aria-label="Next slide"><svg class="icon icon--next"><use xlink:href="#icon-next"></use></svg></button>
      </nav>
    </div>
  </main>



  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Data Kami selalu lengkap</a></h4>
            <p class="description">Kami jamin data-data yang ada di warehouse kami selalu tepat dan selalu akurat dalam jumlahnya.</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Selalu Update perkembangan barang</a></h4>
            <p class="description">Kami jamin tidak ada kesalahan update jumlah barang masuk dan barang keluar.</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Melayani dengan sepenuh hati</a></h4>
            <p class="description">Kami selalu melayani pelanggan dengan sepenuh hati</p>
          </div>

        </div>
      </div>
    </section>

    <!--==========================
      Tentang Kami About Us Section
    ============================-->

    <section id="about">

        <div class="container h-100">
          <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
              <h1 class="display-3">UD. SATU 7AN</h1>
              <p class="lead mb-0">Proses Website Stock Barang</p>
            </div>
          </div>
        </div>
        
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="landingPage/img/warehouse.mp4" frameborder="0" allowfullscreen></iframe>
        </div>

    </section>

    <!--==========================
      Layanan Services Section
    ============================-->

      <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Layanan</h3>
          <p></p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Cepat</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Akurat</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Aman</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Up to Date</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Terstruktur</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Dikerjakan oleh Profesional</a></h4>
            <p class="description"></p>
          </div>

        </div>

      </div>
    </section>

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Our Skills</h3>
          <p>Kemampuan Kami dalam melayani pelanggan</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Keramahan<i class="val">99%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Kesopanan<i class="val">95%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Kebajikan<i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Kebaikan<i class="val">80%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts" class="wow fadeIn">
      <div class="container mx-auto">

      <header class="section-header">
        <h3>Jenis Barang Berdasarkan Kategori</h3>
      </header>

        <div class="row counters">

        <?php
          $sql = "SELECT kategori,COUNT(*) AS 'total' FROM data_produk GROUP BY kategori";
          $hasil = mysqli_query($koneksi, $sql);
          foreach($hasil as $data) {
        ?>

          <div class="col-lg-2 col-4 text-center">
            <span data-toggle="counter-up"><?php echo $data['total']; ?></span>
            <p><?php echo $data['kategori']; ?></p>
          </div>

        <?php 
          }
        ?>

        </div>

        <div class="facts-img">
          <img src="landingPage/img/facts-img.jpg" alt="" class="img-fluid">
        </div>

      </div>
    </section>

    <!--==========================
      Daftar Barang Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Barang Kami sementara</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-air">Air Mineral</li>
              <li data-filter=".filter-beras">Beras</li>
              <li data-filter=".filter-makanan">Makanan</li>
              <li data-filter=".filter-detergen">Detergen</li>
              <li data-filter=".filter-mie">Mie</li>
              <li data-filter=".filter-minyak">Minyak Goreng</li>
              <li data-filter=".filter-sabun">Sabun</li>
              <li data-filter=".filter-shampoo">Shampoo</li>
              <li data-filter=".filter-sekolah">Peralatan Sekolah</li>
              <li data-filter=".filter-susu">Susu</li>
              <li data-filter=".filter-tepung">Tepung</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-air wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/air/aqua.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/air/aqua.jpg" data-lightbox="portfolio" data-title="Air Mineral" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Aqua</a></h4>
                <p>Air Mineral</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-beras wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/beras/bfortune.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/beras/bfortune.jpg" class="link-preview" data-lightbox="portfolio" data-title="Beras" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Fortune</a></h4>
                <p>Beras</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-makanan wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/cemilan/kitkat.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/cemilan/kitkat.jpg" class="link-preview" data-lightbox="portfolio" data-title="Makanan" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">KitKat</a></h4>
                <p>Makanan</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-detergen wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/detergen/boom.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/detergen/boom.jpg" class="link-preview" data-lightbox="portfolio" data-title="Detergen" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Boom</a></h4>
                <p>Detergen</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-mie wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/mie/inter.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/mie/inter.jpg" class="link-preview" data-lightbox="portfolio" data-title="Mie" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Intermie</a></h4>
                <p>Mie</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-minyak wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/minyak/bimoli.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/minyak/bimoli.jpg" class="link-preview" data-lightbox="portfolio" data-title="Minyak Goreng" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Bimoli</a></h4>
                <p>Minyak Goreng</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sabun wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/sabun/citra.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/sabun/citra.jpg" class="link-preview" data-lightbox="portfolio" data-title="Sabun" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Citra</a></h4>
                <p>Sabun</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-shampoo wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/shampoo/head.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/shampoo/head.jpg" class="link-preview" data-lightbox="portfolio" data-title="Shampoo" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Head & Shoulders</a></h4>
                <p>Shampoo</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sekolah wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/sekolah/buku.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/sekolah/buku.jpg" class="link-preview" data-lightbox="portfolio" data-title="Peralatan Sekolah" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Buku</a></h4>
                <p>Peralatan Sekolah</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-susu wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/susu/anlene.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/susu/anlene.jpg" data-lightbox="portfolio" data-title="Susu" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Anlene</a></h4>
                <p>Susu</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tepung wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/tepung/golden.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/tepung/golden.jpg" class="link-preview" data-lightbox="portfolio" data-title="Tepung" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Golden Eagle</a></h4>
                <p>Tepung</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-air wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/air/le.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/air/le.jpg" data-lightbox="portfolio" data-title="Air Mineral" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Le Minarale</a></h4>
                <p>Air Mineral</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-beras wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/beras/bpandan.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/beras/bpandan.jpg" class="link-preview" data-lightbox="portfolio" data-title="Beras" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Pandan Wangi</a></h4>
                <p>Beras</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-makanan wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/cemilan/nextar.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/cemilan/nextar.jpg" class="link-preview" data-lightbox="portfolio" data-title="Makanan" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Nextar</a></h4>
                <p>Makanan</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-detergen wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/detergen/rinso.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/detergen/rinso.jpg" class="link-preview" data-lightbox="portfolio" data-title="Detergen" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Rinso</a></h4>
                <p>Detergen</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-mie wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/mie/supermie.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/mie/supermie.jpg" class="link-preview" data-lightbox="portfolio" data-title="Mie" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Supermie</a></h4>
                <p>Mie</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-minyak wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/minyak/tropical.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/minyak/tropical.jpg" class="link-preview" data-lightbox="portfolio" data-title="Minyak Goreng" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Tropical</a></h4>
                <p>Minyak Goreng</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sabun wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/sabun/lux.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/sabun/lux.jpg" class="link-preview" data-lightbox="portfolio" data-title="Sabun" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Lux</a></h4>
                <p>Sabun</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-shampoo wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/shampoo/tresemme.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/shampoo/tresemme.jpg" class="link-preview" data-lightbox="portfolio" data-title="Shampoo" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Tresemme</a></h4>
                <p>Shampoo</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sekolah wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/sekolah/pulpen.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/sekolah/pulpen.jpg" class="link-preview" data-lightbox="portfolio" data-title="Peralatan Sekolah" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Pena</a></h4>
                <p>Peralatan Sekolah</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-susu wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/susu/milo.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/susu/milo.jpg" data-lightbox="portfolio" data-title="Susu" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Milo</a></h4>
                <p>Susu</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tepung wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/tepung/tulip.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/tepung/tulip.jpg" class="link-preview" data-lightbox="portfolio" data-title="Tepung" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Tulip</a></h4>
                <p>Tepung</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-air wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/air/evian.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/air/aevian.jpg" data-lightbox="portfolio" data-title="Air Mineral" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Evian</a></h4>
                <p>Air Mineral</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-beras wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/beras/bmaknyus.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/beras/bmaknyus.jpg" class="link-preview" data-lightbox="portfolio" data-title="Beras" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Maknyus</a></h4>
                <p>Beras</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-makanan wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/cemilan/lays.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/cemilan/lays.jpg" class="link-preview" data-lightbox="portfolio" data-title="Makanan" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Lays</a></h4>
                <p>Makanan</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-detergen wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/detergen/daia.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/detergen/daia.jpg" class="link-preview" data-lightbox="portfolio" data-title="Detergen" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Daia</a></h4>
                <p>Detergen</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-mie wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/mie/sedap.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/mie/sedap.jpg" class="link-preview" data-lightbox="portfolio" data-title="Mie" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Sedap</a></h4>
                <p>Mie</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-minyak wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/minyak/filma.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/minyak/filma.jpg" class="link-preview" data-lightbox="portfolio" data-title="Minyak Goreng" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Filma</a></h4>
                <p>Minyak Goreng</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sabun wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/sabun/lifebuoy.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/sabun/lifebuoy.jpg" class="link-preview" data-lightbox="portfolio" data-title="Sabun" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Lifebuoy</a></h4>
                <p>Sabun</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-shampoo wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/shampoo/rejoice.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/shampoo/rejoice.jpg" class="link-preview" data-lightbox="portfolio" data-title="Shampoo" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Rejoice</a></h4>
                <p>Shampoo</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sekolah wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/sekolah/pensil.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/sekolah/pensil.jpg" class="link-preview" data-lightbox="portfolio" data-title="Peralatan Sekolah" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Pensil</a></h4>
                <p>Peralatan Sekolah</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-susu wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/susu/enfagrow.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/susu/enfagrow.jpg" data-lightbox="portfolio" data-title="Susu" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Enfagrow</a></h4>
                <p>Susu</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tepung wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingPage/img/portfolio/tepung/segitiga.jpg" width="100%" class="img-fluid" alt="">
                <a href="landingPage/img/portfolio/tepung/segitiga.jpg" class="link-preview" data-lightbox="portfolio" data-title="Tepung" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Segitiga Biru</a></h4>
                <p>Tepung</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>


    <!--==========================
      Clients Section Testimonial
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimoni</h3>
        </header>


        <?php 
            $query = "SELECT * FROM komentar";
            $hasil = mysqli_query($koneksi, $query);
            foreach($hasil as $data) {
          ?>

          <div class="section_our_solution">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="our_solution_category">
                  <div class="solution_cards_box">
                    <div class="solution_card">
                      <div class="hover_color_bubble"></div>
                      <div class="solu_title">
                        <h3>
                          <?php echo $data['nama']; ?>
                        </h3>
                        <h6>
                          <?php echo $data['email']; ?> |
                          <?php echo strftime("%A, %d %B %Y", strtotime($data['tanggal'])) ?>
                        </h6>
                        <hr>
                      </div>
                      <div class="solu_description mt-4">
                        <p>
                          <?php echo $data['comment']; ?>
                        </p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
            
        <?php 
          }
        ?>



        <!-- <div class="row">
          <?php 
            $query = "SELECT * FROM komentar";
            $hasil = mysqli_query($koneksi, $query);
            foreach($hasil as $data) {
          ?>

            
            <div class="col-4 mx-auto">

              <div class="card bg-light border-dark mb-3" style="max-width: 100rem;">
                <div class="card-header"><b><?php echo $data['nama']; ?></b> <br> <?php echo $data['email']; ?></div>
                <div class="card-body">
                  <div class="card-text"><?php echo $data['comment']; ?></div>
                </div>
                <div class="card-footer"><?php echo $data['tanggal']; ?></div>
              </div>

            </div>

          <?php 
              }
          ?>
        </div> -->
            


      </div>
    </section>


    <!--==========================
      ANGGOTA TEAM
    ============================-->

    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Anggota</h3>
          <p>Tim Penyusun Seluruh Website</p>
        </div>

        <div class="row">
          <section class="container">

            <div class="row active-with-click">
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
                    <article class="material-card Red">
                        <h2>
                            <span>Donny Adithya</span>
                            <strong>
                                <i class="fa fa-fw fa-star"></i>
                                211402006
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" width="100%" src="landingPage/img/anggota/donny.jpeg">
                            </div>
                            <div class="mc-description">
                                Holaa, Perkenalkan nama saya Donny Adithya. Saya merupakan founder dari UD. SATU  7AN. Segala sesuatu yang berada disini merupakan tanggung jawab saya.
                            </div>
                        </div>
                        <a class="mc-btn-action">
                          <i class="fas fa-stream"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                Social
                            </h4>
                            <a class="fa fa-fw fa-envelope" href="mailto:donny.adithyaciok@gmail.com" target="_blank"></a>
                            <a class="fa fa-fw fa-instagram" href="https://www.instagram.com/adithyargh" target="__blank"></a>
                        </div>
                    </article>
                </div>
        
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.1s">
                    <article class="material-card Pink">
                        <h2>
                            <span>Talitha Syafiyah</span>
                            <strong>
                                <i class="fa fa-fw fa-star"></i>
                                211402018
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" width="100%" src="landingPage/img/anggota/talitha.jpg">
                            </div>
                            <div class="mc-description">
                                Assalamualaikum semua, perkenalkan saya Talitha Syafiyah merupakan direktur utama UD. SATU 7AN. Segala laporan yang masuk akan disampaikan kepada saya terlebih dahulu.
                            </div>
                        </div>
                        <a class="mc-btn-action">
                          <i class="fas fa-stream"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                Social
                            </h4>
                            <a class="fa fa-fw fa-envelope" href="mailto:talithasyafiyah1112@gmail.com " target="_blank"></a>
                            <a class="fa fa-fw fa-instagram" href="https://www.instagram.com/talithasfyh" target="_blank"></a>
                        </div>
                    </article>
                </div>
        
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
                    <article class="material-card Purple">
                        <h2>
                            <span>Caesto Marco</span>
                            <strong>
                                <i class="fa fa-fw fa-star"></i>
                                211402084
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" width="100%" src="landingPage/img/anggota/caesto.jpeg">
                            </div>
                            <div class="mc-description">
                              Haii All, perkenalkan saya Caesto Marco Tampubolon selaku direktur bagian pengiriman di UD. SATU 7AN ini.
                            </div>
                        </div>
                        <a class="mc-btn-action">
                          <i class="fas fa-stream"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                Social
                            </h4>
                            <a class="fa fa-fw fa-envelope" href="mailto:marcocaesto@gmail.com" target="_blank"></a>
                            <a class="fa fa-fw fa-instagram" href="https://www.instagram.com/marc_esto" target="_blank"></a>
                        </div>
                    </article>
                </div>
        
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                    <article class="material-card Brown">
                        <h2>
                            <span>Erli Gurning</span>
                            <strong>
                                <i class="fa fa-fw fa-star"></i>
                                211402123
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" width="100%" src="landingPage/img/anggota/erli.jpeg">
                            </div>
                            <div class="mc-description">
                              Horas ! Nama saya Erli Gurning, disini saya sebagai manager bagian ekspedisi di UD. SATU 7AN ini. Laporan saya akan diteruskan ke direktur bagian dari UD. SATU 7AN.
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fas fa-stream"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                Social
                            </h4>
                            <a class="fa fa-fw fa-envelope" href="mailto:erligurning03@gmail.com" target="_blank"></a>
                            <a class="fa fa-fw fa-instagram" href="https://www.instagram.com/erligurning13" target="_blank"></a>
                        </div>
                    </article>
                </div>
        
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                    <article class="material-card Orange">
                        <h2>
                            <span>Febri Zuladhari</span>
                            <strong>
                                <i class="fa fa-fw fa-star"></i>
                                211402126
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" width="100%" src="landingPage/img/anggota/febri.jpg">
                            </div>
                            <div class="mc-description">
                              Salam Sukses, nama saya Febri Zuladhari Bangun. Di UD. SATU 7AN ini saya menjabat sebagai manager bagian operator serta penghubung antar interaksi pengguna.
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fas fa-stream"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                Social
                            </h4>
                            <a class="fa fa-fw fa-envelope" href="mailto:febrizuladhari12345@gmail.com" target="_blank"></a>
                            <a class="fa fa-fw fa-instagram" href="https://www.instagram.com/febri_zuladhari" target="_blank"></a>
                        </div>
                    </article>
                </div>
        
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                    <article class="material-card Indigo">
                        <h2>
                            <span>Rayhan Abrar</span>
                            <strong>
                                <i class="fa fa-fw fa-star"></i>
                                211402138
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" width="100%" src="landingPage/img/anggota/abrar.jpeg">
                            </div>
                            <div class="mc-description">
                              Salam Toleransi ! Nama saya Rayhan Abrar Siregar. Saya menjabat sebagai manager bagian security di UD. SATU 7AN ini. Segala keamanan data menjadi tanggung jawab saya.
                            </div>
                        </div>
                        <a class="mc-btn-action">
                          <i class="fas fa-stream"></i>
                        </a>
                        <div class="mc-footer">
                            <h4>
                                Social
                            </h4>
                            <a class="fa fa-fw fa-envelope" href="mailto:rayhanabrar4@gmail.com" target="_blank"></a>
                            <a class="fa fa-fw fa-instagram" href="https://www.instagram.com/reyhanabrarr" target="_blank"></a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
      </div>

      </div>
    </section>

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>UD. SATU 7AN</h3>
            <img width="100%"src="landingPage/img/logo.jpg" alt="LOGO">
            <p></p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Akses</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Layanan</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#team">Anggota</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Daftar</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Masuk</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Kontak Kami</h4>
            <p>
              USU <br>
              Sumatera Utara<br>
              Indonesia <br>
              <strong>Email : </strong><a href="mailto:udsatu7an@gmail.com">udsatu7an@gmail.com</a><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Terimakasih</h4>
            <p>Terimakasih banyak telah berkunjung dan semoga tertarik untuk bergabung : )</p>
            <!-- <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>UD. SATU 7AN</strong>. All Rights Reserved
      </div>
    </div>
  </footer>

  <!-- Button Naik Ke Atas -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>



  <!-- JavaScript Libraries -->
  <script src="landingPage/lib/jquery/jquery.min.js"></script>
  <script src="landingPage/lib/jquery/jquery-migrate.min.js"></script>
  <script src="landingPage/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="landingPage/lib/easing/easing.min.js"></script>
  <script src="landingPage/lib/superfish/hoverIntent.js"></script>
  <script src="landingPage/lib/superfish/superfish.min.js"></script>
  <script src="landingPage/lib/wow/wow.min.js"></script>
  <script src="landingPage/lib/waypoints/waypoints.min.js"></script>
  <script src="landingPage/lib/counterup/counterup.min.js"></script>
  <script src="landingPage/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="landingPage/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="landingPage/lib/lightbox/js/lightbox.min.js"></script>
  <script src="landingPage/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  
  
  <!-- Main Javascript File -->
  <script src="landingPage/js/main.js"></script>

  <!-- Intro Slider Javascript -->
  <script src="landingPage/js/imagesloaded.pkgd.min.js"></script>
	<script src="landingPage/js/anime.min.js"></script>
	<script src="landingPage/js/mainSlider.js"></script>
  
  <!-- Anggota JavaScript -->
  <script src="landingPage/js/anggota.js"></script>


</body>
</html>
