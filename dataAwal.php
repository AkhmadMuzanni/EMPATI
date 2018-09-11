<?php  
  // if(!isset($_POST["luas_tanam"])){
  //   header("Location: index.php");
  // } else {
    require_once('db.php');      
    // $sigma = 0.3;
    // $lambda = 0.1;
    // $max_value = 2576596;
    // $min_value = 45888;
    // $alpha_padi = array(
    //   14.09446540328213, 
    //   -14.042057438070751, 
    //   -18.925819110730693, 
    //   -37.95596242115745, 
    //   9.638000052365264, 
    //   59.49678021347974, 
    //   38.80248875602943, 
    //   7.503831726226875, 
    //   -73.9223889057608, 
    //   11.98775314182274, 
    //   3.2600614453296224);
    // $alpha = $alpha_padi;

    // print_r($alpha); 

    // echo "<br>";
    
    if($_POST["komoditas"] == "BERAS"){
      $sql="SELECT * FROM beras";
    } elseif($_POST["komoditas"] == "JAGUNG"){
      $sql="SELECT * FROM jagung";
    } elseif($_POST["komoditas"] == "KEDELAI"){
      $sql="SELECT * FROM kedelai";
    } elseif($_POST["komoditas"] == "BAWANG MERAH"){
      $sql="SELECT * FROM bawang_merah";
    } elseif($_POST["komoditas"] == "CABE BESAR"){
      $sql="SELECT * FROM cabe_besar";
    } else{
      $sql="SELECT * FROM cabe_rawit";
    } 
    
    $data_training = array(); 

    if ($result=mysqli_query($link,$sql)){
      while ($row=mysqli_fetch_row($result)){
        array_push($data_training, array($row[0], $row[1], $row[2], $row[3], $row[4]));
      }
    }

    // // $data_test = array(70289,2544315,45888);
    // $data_test_asli = array($_POST["luas_tanam"],$_POST["jml_penduduk"],$_POST["luas_lahan"]);

    // $data_test = array();
    // foreach ($data_test_asli as $test) {
    //   array_push($data_test, ($test - $min_value) / ($max_value - $min_value));
    // }
    // // print_r($data_test);

    // add data testing
    // $data_test = array(0.009641966, 0.987244281, 0);   
    // print_r($data_test); 

    mysqli_close($link);
    
    // // count distance for data testing
    // // echo "jarak";
    // $jarak_test = array();
    // for ($i=0; $i < count($data_training) ; $i++) { 
    //   $jarak_test[$i] = 0;
    //   for ($j=0; $j < count($data_training[0]); $j++) {
    //     $jarak_test[$i] += pow(($data_training[$i][$j] - $data_test[$j]), 2);
    //   }
    // }

    // // count kernel for data testing
    // $kernel_test = array();
    // for($i=0 ; $i < count($jarak_test) ; $i++){
    //   $kernel_test[$i] = exp(-($jarak_test[$i]/(2*pow($sigma,2))));
    // }

    // // count hessian for data testing
    // $hessian_test = array();
    // for($i=0 ; $i < count($kernel_test) ; $i++){
    //   $hessian_test[$i] = $kernel_test[$i]+pow($lambda,2);
    // }
    // // print_r($jarak_test);

    // // count estimation
    // $estimasi = 0;
    // for($i=0 ; $i < count($hessian_test) ; $i++){
    //   $estimasi += $alpha[$i]*($hessian_test[$i]+pow($lambda,2));
    // }

    // $estimasi_denorm = ($estimasi*($max_value - $min_value)) + $min_value;
    // $txt_estimasi = number_format((float)$estimasi_denorm,2,'.','');

    // echo "<br>";
    // echo "Luas Tanam = ".$_POST["luas_tanam"]."<br>";
    // echo "Jumlah Penduduk = ".$_POST["jml_penduduk"]."<br>";
    // echo "Luas Lahan (Sawah) = ".$_POST["luas_lahan"]."<br>";
    // echo "HASIL ESTIMASI = ".$estimasi;
    // echo "<br>";
  // }
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
  <link href="css/editable_table.css" rel="stylesheet">

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
          <h3 id="judul">DATA LATIH KOMODITAS <?php echo $_POST["komoditas"];?> </h3>
          <p>Berikut adalah data komoditas beras mulai tahun 2004 - 2017 yang digunakan sebagai data latih pada proses estimasi</p>
        </header>

        <div class="row about-cols">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tahun</th>
                <th scope="col">Luas Tanam (ha)</th>
                <th scope="col">Jumlah Penduduk (jiwa)</th>
                <th scope="col">Luas Lahan Sawah (ha)</th>
                <th scope="col">Produksi (ton)</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $x = 1;
                foreach ($data_training as $data) {
                  echo "<tr>";
                    echo "<th scope=\"row\">$x</th>";
                    echo "<td>".$data[0]."</td>";
                    echo "<td>".$data[1]."</td>";
                    echo "<td>".$data[2]."</td>";
                    echo "<td>".$data[3]."</td>";
                    echo "<td>".$data[4]."</td>";
                  echo "</tr>";
                  $x += 1;
                }
              ?>
              
            </tbody>
          </table>
          <div class="col-sm-3">
            <a href="index.php"><button class="btn btn-success" type="button"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Kembali ke Halaman Utama</button></a>            
          </div>
          <button class="btn btn-info col-sm-2" type="button" data-toggle="modal" data-target="#modalInputData" id="btn_tambah_data">Tambah Data Latih</button>
        </div>

      </div>
    </section><!-- #about -->

    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Editable table</h3>
        <div class="card-body">
            <div id="table" class="table-editable">
                <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a></span>
                <table class="table table-bordered table-responsive-md table-striped text-center">
                  <thead class="thead-dark">
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Tahun</th>
                        <th class="text-center">Luas Tanam (ha)</th>
                        <th class="text-center">Jumlah Penduduk (jiwa)</th>
                        <th class="text-center">Luas Lahan (ha)</th>
                        <th class="text-center">Produksi (ton)</th>
                        <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td class="pt-3-half" contenteditable="false">1</td>
                        <td class="pt-3-half" contenteditable="true">2004</td>
                        <td class="pt-3-half" contenteditable="true">211212121</td>
                        <td class="pt-3-half" contenteditable="true">21212121</td>
                        <td class="pt-3-half" contenteditable="true">122121212</td>
                        <td class="pt-3-half" contenteditable="true">21212122</td>
                        <td>
                            <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Hapus</button></span>
                        </td>
                    </tr>
                    
                    <!-- This is our clonable table line -->
                    <tr class="hide">
                        <td class="pt-3-half" contenteditable="false">1</td>
                        <td class="pt-3-half" contenteditable="true">2004</td>
                        <td class="pt-3-half" contenteditable="true">211212121</td>
                        <td class="pt-3-half" contenteditable="true">21212121</td>
                        <td class="pt-3-half" contenteditable="true">122121212</td>
                        <td class="pt-3-half" contenteditable="true">21212122</td>
                        <td>
                            <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Hapus</button></span>
                        </td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </div>



  </main>


    <!--==========================
      MODAL 
    ============================-->

    <div class="modal fade features-modal" id="modalInputData" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form class="form-horizontal" method="post" action="result.php">
              <div class="modal-header">
                <h5 class="modal-title">TAMBAH DATA KOMODITAS</h5>
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
                  <label class="col-form-label col-sm-5">Tahun:</label>
                  <div class="col-sm-7">
                    <input type="number" class="form-control" placeholder="Tahun" id="tahun" name="tahun">
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
                  <label class="col-form-label col-sm-5">Luas Lahan (Sawah):</label>
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
  <script src="js/editable_table.js"></script>

</body>
</html>
