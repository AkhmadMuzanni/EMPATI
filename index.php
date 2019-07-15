<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EMPATI</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">EMPATI</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">Estimasi</a></li>          
          <li><a href="#portfolio">Data</a></li>
          <li><a href="#team">Pengembang</a></li>          
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/Agriculture.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">                
                <h2>Estimasi Produksi Pangan dan Hortikultura</h2>
                <p>EMPATI merupakan Sistem Estimasi Produksi Pangan dan Hortikultura yang dikembangkan oleh Dinas Tanaman Pangan, Hortikultura dan Perkebunan Kabupaten Malang bekerjasama dengan Universitas Brawijaya </p>
                <a href="#about" class="btn-get-started scrollto">MULAI</a>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Estimasi Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>ESTIMASI</h3>
          <p>Pilih salah satu menu di bawah ini untuk melakukan estimasi pada komoditas bahan pangan / hortikultura tertentu.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/port_1.png" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#" data-toggle="modal" data-target="#modalInput" id="btn_beras">BERAS</a></h2>
              <p>
                Produksi dari tanaman padi di dunia menempati urutan ke-3 setelah jagung dan gandum. Namun, padi merupakan sumber karbohidrat utama untuk mayoritas penduduk di dunia. 
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/port_2.png" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#" data-toggle="modal" data-target="#modalInput" id="btn_jagung">JAGUNG</a></h2>
              <p>
                Penduduk Amerika tengah dan Amerika selatan biasanya menggunakan bulir jagung sebagai makanan pokok, begitu juga bagi sebagian penduduk di Kawasan Afrika dan beberapa daerah di Indonesia.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/port_3.png" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#" data-toggle="modal" data-target="#modalInput" id="btn_kedelai">KEDELAI</a></h2>
              <p>
                Kedelai atau yang sering disebut kacang kedelai merupakan salah satu bagian dari tanaman polong-polongan yang digunakan sebagai bahan dasar berbagai macam olahannya seperti tahu, tempe, dan kecap.
              </p>
            </div>
          </div>

        </div>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/port_4.png" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#" data-toggle="modal" data-target="#modalInput" id="btn_bawang_merah">BAWANG MERAH</a></h2>
              <p>
                Bawang merah dapat dikonsumsi secara mentah. Selain itu bawang merah biasa digunakan untuk campuran bumbu masakan, acar dan obat-obatan tradisional. Kulit umbinya dapat dijadikan zat pewarna alami.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/port_5.png" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#" data-toggle="modal" data-target="#modalInput" id="btn_cabe_besar">CABE BESAR</a></h2>
              <p>
                Cabai merah besar merupakan jenis cabai yang memiliki ciri dengan warna merah menyala dan bentuk yang besar, gemuk, panjang, dan memiliki ujung yang lancip. Biasa diproses dengan cara diulek atau diblender.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/port_6.png" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#" data-toggle="modal" data-target="#modalInput" id="btn_cabe_rawit">CABE RAWIT</a></h2>
              <p>
                Cabai rawit merupakan salah satu jenis cabai yang memiliki ukuran lebih kecil dan lebih pendek dari jenis cabai lainnya, namun cabai jenis ini mempunyai rasa yang lebih pedas dan tajam. 
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->


    <!--==========================
      MODAL 
    ============================-->

    <div class="modal fade features-modal" id="modalInput" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form class="form-horizontal" method="post" action="result.php">
              <div class="modal-header">
                <h5 class="modal-title">ESTIMASI PRODUKSI</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>            
              <div class="modal-body">                
                <div class="form-group row">
                  <label class="col-form-label col-sm-5">Komoditas:</label>
                  <div class="col-sm-7">
                    <input type="text" readonly class="form-control" id="komoditas" name="komoditas">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-sm-5">Luas Tanam:</label>
                  <div class="col-sm-7">
                    <input type="number" class="form-control" placeholder="Luas Tanam" id="tanam_padi" name="luas_tanam">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-sm-5">Jumlah Penduduk:</label>
                  <div class="col-sm-7">
                    <input type="number" class="form-control" placeholder="Jumlah Penduduk" id="penduduk" name="jml_penduduk">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-sm-5" id="labelModal">Luas Lahan (Sawah):</label>
                  <div class="col-sm-7">
                    <input type="number" class="form-control" placeholder="Luas Lahan (Sawah)" id="luas_lahan" name="luas_lahan">
                  </div>
                </div>              
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-default">ESTIMASI</button>
              </div>
            </form>
          </div>
        </div>
      </div>








    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">DATA</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Tanaman Pangan</li>
              <li data-filter=".filter-card">Hortikultura</li>              
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/port_1.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <form method="post" action="data.php" id="form_beras">
                  <input type="hidden" value="BERAS" name="komoditas">
                  <h4><a href="javascript:{}" onclick="document.getElementById('form_beras').submit();">DATA BERAS</a></h4>
                  <p>2004 - 2017</p>                
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/port_2.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <form method="post" action="data.php" id="form_jagung">
                  <input type="hidden" value="JAGUNG" name="komoditas">
                  <h4><a href="javascript:{}" onclick="document.getElementById('form_jagung').submit();">DATA JAGUNG</a></h4>
                  <p>2004 - 2017</p>
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/port_3.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <form method="post" action="data.php" id="form_kedelai">
                  <input type="hidden" value="KEDELAI" name="komoditas">
                  <h4><a href="javascript:{}" onclick="document.getElementById('form_kedelai').submit();">DATA KEDELAI</a></h4>
                  <p>2004 - 2017</p>                
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/port_4.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <form method="post" action="data.php" id="form_bawang_merah">
                  <input type="hidden" value="BAWANG MERAH" name="komoditas">
                  <h4><a href="javascript:{}" onclick="document.getElementById('form_bawang_merah').submit();">DATA BAWANG MERAH</a></h4>
                  <p>2004 - 2017</p>                
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/port_5.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <form method="post" action="data.php" id="form_cabe_besar">
                  <input type="hidden" value="CABE BESAR" name="komoditas">
                  <h4><a href="javascript:{}" onclick="document.getElementById('form_cabe_besar').submit();">DATA CABE BESAR</a></h4>
                  <p>2004 - 2017</p>                
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/port_6.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <form method="post" action="data.php" id="form_cabe_rawit">
                  <input type="hidden" value="CABE RAWIT" name="komoditas">
                  <h4><a href="javascript:{}" onclick="document.getElementById('form_cabe_rawit').submit();">DATA CABE RAWIT</a></h4>
                  <p>2004 - 2017</p>                
                </form>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>TIM PENGEMBANG</h3>
          <p>Berikut adalah tim pengembang EMPATI</p>
        </div>

        <div class="row">          

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Shinta Widyaning Cipta, S.TP, M.Si</h4>
                  <span>Pembimbing Lapangan</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
         

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Putri Rahma Iriani</h4>
                  <span>Project Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Anak Agung Bagus Ari Setiawan</h4>
                  <span>Documentation</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Akhmad Muzanni Safi'i</h4>
                  <span>Programmer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>EMPATI</h3>
            <p>EMPATI merupakan Sistem Estimasi Produksi Pangan dan Hortikultura yang dikembangkan oleh Dinas Tanaman Pangan, Hortikultura dan Perkebunan Kabupaten Malang bekerjasama dengan Universitas Brawijaya</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Link Terkait</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="http://tanaman-pangan.malangkab.go.id/">Dinas TPHP</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="http://ub.ac.id/">Universitas Brawijaya</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="http://filkom.ub.ac.id/">Fakultas Ilmu Komputer UB</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Kontak Kami</h4>
            <p>
              Jalan Sumedang No. 28 Cokoleo <br>
              Desa Cepokomulyo, Kecamatan Kepanjen<br>
              Kabupaten Malang, Jawa Timur <br>
              <strong>Telp:</strong>(0341) 396893<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Lokasi</h4>
            <a target="_blank" rel="noopener noreferrer" href="https://www.google.com/maps/place/Dinas+Tanaman+Pangan,+Hortikultura+dan+Perkebunan/@-8.1364637,112.5646613,17z/data=!4m5!3m4!1s0x2e789f06b6619d21:0xcaf474037089b3e3!8m2!3d-8.136469!4d112.56685"><img src="img/rsz_maps1.png"></a>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3YfpZ3r9BuJiAR1oD2AQqRWIcrcK88wA&language=ja&region=JP">
            </script>
            <script type="text/javascript">              
              function initialize() {
                var position = new google.maps.LatLng(-34.397, 150.644);
                var myOptions = {
                  zoom: 10,
                  center: position,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
              }
              google.maps.event.addDomListener(window, "load", initialize);
            </script>
            <div id="map_canvas"></div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

  <script type="text/javascript">    
    $('#btn_beras').on('click',function(){
      document.getElementById("komoditas").value = "BERAS";
      document.getElementById("labelModal").value = "Luas Lahan (Sawah)";
      document.getElementById("luas_lahan").placeholder = "Luas Lahan (Sawah)";
    });
    $('#btn_jagung').on('click',function(){
      document.getElementById("komoditas").value = "JAGUNG";
      document.getElementById("labelModal").innerHTML = "Luas Lahan (Sawah)";
      document.getElementById("luas_lahan").placeholder = "Luas Lahan (Sawah)";
    });
    $('#btn_kedelai').on('click',function(){
      document.getElementById("komoditas").value = "KEDELAI";
      document.getElementById("labelModal").innerHTML = "Luas Lahan (Sawah)";
      document.getElementById("luas_lahan").placeholder = "Luas Lahan (Sawah)";
    });
    $('#btn_bawang_merah').on('click',function(){
      document.getElementById("komoditas").value = "BAWANG MERAH";
      document.getElementById("labelModal").innerHTML = "Luas Lahan (Ladang)";
      document.getElementById("luas_lahan").placeholder = "Luas Lahan (Ladang)";
    });
    $('#btn_cabe_besar').on('click',function(){
      document.getElementById("komoditas").value = "CABE BESAR";
      document.getElementById("labelModal").innerHTML = "Luas Lahan (Ladang)";
      document.getElementById("luas_lahan").placeholder = "Luas Lahan (Ladang)";
    });
    $('#btn_cabe_rawit').on('click',function(){
      document.getElementById("komoditas").value = "CABE RAWIT";
      document.getElementById("labelModal").innerHTML = "Luas Lahan (Ladang)";
      document.getElementById("luas_lahan").placeholder = "Luas Lahan (Ladang)";
    });
    
  </script>

</body>
</html>
