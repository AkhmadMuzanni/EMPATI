<?php 	
	session_start();
	$time_start = microtime(true);	
    // $pyscript = 'C:\\xampp\\htdocs\\SVM\\training_SVR.py';
	// $python = 'C:\\Users\\USER\\Anaconda2\\python.exe';
	// $cmd = "$python $pyscript";
	ini_set('max_execution_time', 180);
	$str_komoditas = strtolower($_POST['komoditas']);
	if($_POST['komoditas'] == "BAWANG MERAH"){      
      $str_komoditas = "bawang_merah";
    } elseif($_POST['komoditas'] == "CABE BESAR"){
      $str_komoditas = "cabe_besar";
    } else{
      $str_komoditas = "cabe_rawit";
    }
	$str_input = "python -c \"import training_SVR; print training_SVR.main('".$str_komoditas."')\"";
	// shell_exec("python -c \"import training_SVR; print training_SVR.main('jagung')\"");	
	shell_exec($str_input);
	$time_end = microtime(true);
	$time = $time_end - $time_start;	
	$_SESSION['training'] = "0";
	$_SESSION['komoditas'] = $_POST['komoditas'];
?>
<script type="text/javascript">
	window.location.href = 'data.php';
</script>