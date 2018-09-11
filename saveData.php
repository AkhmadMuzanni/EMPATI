<?php
	session_start();
	require_once('db.php');
	// echo $_POST["komoditas"]; 
	// echo $_POST["new_data"]; 

	if($_POST['komoditas'] == "BERAS"){		
      $_SESSION['komoditas'] = "BERAS";
      $query_delete = "DELETE FROM `beras`";
    } elseif($_POST['komoditas'] == "JAGUNG"){
      $_SESSION['komoditas'] = "JAGUNG";
      $query_delete = "DELETE FROM `jagung`";
    } elseif($_POST['komoditas'] == "KEDELAI"){
      $_SESSION['komoditas'] = "KEDELAI";
      $query_delete = "DELETE FROM `kedelai`";
    } elseif($_POST['komoditas'] == "BAWANG MERAH"){
      $_SESSION['komoditas'] = "BAWANG MERAH";
      $query_delete = "DELETE FROM `bawang_merah`";
    } elseif($_POST['komoditas'] == "CABE BESAR"){
      $_SESSION['komoditas'] = "CABE BESAR";
      $query_delete = "DELETE FROM `cabe_besar`";
    } else{
      $_SESSION["komoditas"] = "CABE RAWIT";
      $query_delete = "DELETE FROM `cabe_rawit`";
    } 

	mysqli_query($link,$query_delete);
	$new_data = json_decode($_POST["new_data"]);
	// print_r($new_data);
	foreach ($new_data as $item) {
		$item = get_object_vars($item);
		// echo $item->['tahun'];
		if($_POST["komoditas"] == "BERAS"){
	      mysqli_query($link,"INSERT INTO `beras` VALUES ('".$item['tahun']."', '".$item['luas tanam (ha)']."', '".$item['jumlah penduduk (jiwa)']."', '".$item['luas lahan (ha)']."', '".$item['produksi (ton)']."')");
	    } elseif($_POST["komoditas"] == "JAGUNG"){
	      mysqli_query($link,"INSERT INTO `jagung` VALUES ('".$item['tahun']."', '".$item['luas tanam (ha)']."', '".$item['jumlah penduduk (jiwa)']."', '".$item['luas lahan (ha)']."', '".$item['produksi (ton)']."')");
	    } elseif($_POST["komoditas"] == "KEDELAI"){
	      mysqli_query($link,"INSERT INTO `kedelai` VALUES ('".$item['tahun']."', '".$item['luas tanam (ha)']."', '".$item['jumlah penduduk (jiwa)']."', '".$item['luas lahan (ha)']."', '".$item['produksi (ton)']."')");
	    } elseif($_POST["komoditas"] == "BAWANG MERAH"){
	      mysqli_query($link,"INSERT INTO `bawang_merah` VALUES ('".$item['tahun']."', '".$item['luas tanam (ha)']."', '".$item['jumlah penduduk (jiwa)']."', '".$item['luas lahan (ha)']."', '".$item['produksi (ton)']."')");
	    } elseif($_POST["komoditas"] == "CABE BESAR"){
	      mysqli_query($link,"INSERT INTO `cabe_besar` VALUES ('".$item['tahun']."', '".$item['luas tanam (ha)']."', '".$item['jumlah penduduk (jiwa)']."', '".$item['luas lahan (ha)']."', '".$item['produksi (ton)']."')");
	    } else{
	      mysqli_query($link,"INSERT INTO `cabe_rawit` VALUES ('".$item['tahun']."', '".$item['luas tanam (ha)']."', '".$item['jumlah penduduk (jiwa)']."', '".$item['luas lahan (ha)']."', '".$item['produksi (ton)']."')");
	    } 		
	}
	mysqli_close($link);		
?>
<script type="text/javascript">
	window.location.href = 'data.php';
</script>