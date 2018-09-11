<?php
  if(!isset($_POST["luas_tanam"])){
    header("Location: index.php");
  } else {
    require_once('db.php');   
    $sigma = 0.3;
    $lambda = 0.1;
    $max_value = 2576596;
    $min_value = 45888;
    $alpha_padi = array(
      14.09446540328213, 
      -14.042057438070751, 
      -18.925819110730693, 
      -37.95596242115745, 
      9.638000052365264, 
      59.49678021347974, 
      38.80248875602943, 
      7.503831726226875, 
      -73.9223889057608, 
      11.98775314182274, 
      3.2600614453296224);

    if($_POST["komoditas"] == "BERAS"){
      $sql_alpha="SELECT * FROM alpha_beras";      
    } elseif($_POST["komoditas"] == "JAGUNG"){
      $sql_alpha="SELECT * FROM alpha_jagung";
    } elseif($_POST["komoditas"] == "KEDELAI"){
      $sql_alpha="SELECT * FROM alpha_kedelai";
    } elseif($_POST["komoditas"] == "BAWANG MERAH"){
      $sql_alpha="SELECT * FROM alpha_bawang_merah";
    } elseif($_POST["komoditas"] == "CABE BESAR"){
      $sql_alpha="SELECT * FROM alpha_cabe_besar";
    } else{
      $sql_alpha="SELECT * FROM alpha_cabe_rawit";
    }

    $alpha = array();
    if ($result=mysqli_query($link,$sql_alpha)){    
      while ($row=mysqli_fetch_row($result)){
        array_push($alpha, $row[0]);
      }
    }
    // print_r($alpha);


    // $alpha = $alpha_padi;
    // print_r($alpha); 

    // echo "<br>";
    

    $sql="SELECT luas_tanam,jml_penduduk,luas_sawah FROM beras";
    $data_training = array(); 

    if ($result=mysqli_query($link,$sql)){
      while ($row=mysqli_fetch_row($result)){
        $luas_tanam_norm = ($row[0] - $min_value) / ($max_value - $min_value);
        $jml_penduduk_norm = ($row[1] - $min_value) / ($max_value - $min_value);
        $luas_lahan_norm = ($row[2] - $min_value) / ($max_value - $min_value);
        array_push($data_training, array($luas_tanam_norm, $jml_penduduk_norm, $luas_lahan_norm));       
      }
    }

    // $data_test = array(70289,2544315,45888);
    $data_test_asli = array($_POST["luas_tanam"],$_POST["jml_penduduk"],$_POST["luas_lahan"]);

    $data_test = array();
    foreach ($data_test_asli as $test) {
      array_push($data_test, ($test - $min_value) / ($max_value - $min_value));
    }
    // print_r($data_test);

    // add data testing
    // $data_test = array(0.009641966, 0.987244281, 0);   
    // print_r($data_test); 

    mysqli_close($link);
    
    // count distance for data testing
    // echo "jarak";
    $jarak_test = array();
    for ($i=0; $i < count($data_training) ; $i++) { 
      $jarak_test[$i] = 0;
      for ($j=0; $j < count($data_training[0]); $j++) {
        $jarak_test[$i] += pow(($data_training[$i][$j] - $data_test[$j]), 2);
      }
    }

    // count kernel for data testing
    $kernel_test = array();
    for($i=0 ; $i < count($jarak_test) ; $i++){
      $kernel_test[$i] = exp(-($jarak_test[$i]/(2*pow($sigma,2))));
    }

    // count hessian for data testing
    $hessian_test = array();
    for($i=0 ; $i < count($kernel_test) ; $i++){
      $hessian_test[$i] = $kernel_test[$i]+pow($lambda,2);
    }
    // print_r($jarak_test);

    // count estimation
    $estimasi = 0;
    for($i=0 ; $i < count($hessian_test) ; $i++){
      $estimasi += $alpha[$i]*$hessian_test[$i];
    }

    $estimasi_denorm = ($estimasi*($max_value - $min_value)) + $min_value;
    $txt_estimasi = number_format((float)$estimasi_denorm,2,'.','');

    // echo "<br>";
    // echo "Luas Tanam = ".$_POST["luas_tanam"]."<br>";
    // echo "Jumlah Penduduk = ".$_POST["jml_penduduk"]."<br>";
    // echo "Luas Lahan (Sawah) = ".$_POST["luas_lahan"]."<br>";
    // echo "HASIL ESTIMASI = ".$estimasi;
    // echo "<br>";
  }
  // echo $_POST["luas_tanam"];
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
  <main id="main">

    <!--==========================
      Estimasi Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>HASIL ESTIMASI</h3>
          <p>Berikut adalah hasil perhitungan estimasi produksi berdasarkan nilai dari faktor-faktor yang telah ditentukan sebelumnya</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src=
                <?php 
                  if ($_POST["komoditas"] == "BERAS") {
                    echo "\"img/1.png\"";
                  } elseif ($_POST["komoditas"] == "JAGUNG") {
                    echo "\"img/2.png\"";
                  } elseif ($_POST["komoditas"] == "KEDELAI") {
                    echo "\"img/3.png\"";
                  } elseif ($_POST["komoditas"] == "BAWANG MERAH") {
                    echo "\"img/4.png\"";
                  } elseif ($_POST["komoditas"] == "CABE BESAR") {
                    echo "\"img/5.png\"";
                  } else {
                    echo "\"img/cabe_kecil.png\"";
                  }
                ?>
                "img/1.png"
                 alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#" data-toggle="modal" data-target="#modalInput" id="btn_padi">
                <?php                   
                    echo $_POST["komoditas"];
                ?>                
              </a></h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>

          <div class="col-md-8 wow fadeInUp">
            <div class="about-col">
              <p>
                <form action="index.php">
                  <div class="form-group row">
                    <div class="col-sm-1"> </div>
                    <label for="staticEmail" class="col-sm-3 col-form-label">Komoditas</label>
                    <div class="col-sm-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=<?php echo "\"$_POST[komoditas]\"";?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-1"> </div>
                    <label for="staticEmail" class="col-sm-3 col-form-label">Luas Tanam</label>
                    <div class="col-sm-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=<?php echo "\"$_POST[luas_tanam]"." hektar\"";?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-1"> </div>
                    <label for="staticEmail" class="col-sm-3 col-form-label">Jumlah Penduduk</label>
                    <div class="col-sm-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=<?php echo "\"$_POST[jml_penduduk]"." hektar\"";?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-1"> </div>
                    <label for="staticEmail" class="col-sm-3 col-form-label">Luas Lahan (Sawah)</label>
                    <div class="col-sm-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=<?php echo "\"$_POST[luas_lahan]"." hektar\"";?>>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-1"> </div>
                    <label for="staticEmail" class="col-sm-3 col-form-label">Estimasi Produksi</label>
                    <div class="col-sm-8">
                      <strong><input type="text" readonly class="form-control-plaintext" id="staticEmail" value=<?php echo "\"$txt_estimasi ton\"";?>></strong>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-1"> </div>
                    <button class="btn btn-primary" type="submit">Kembali ke Halaman Utama</button>                  
                  </div>                
                </form>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>BizPage</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
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
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
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


</body>
</html>
