<?php
/* 
	include("logica_login.php");
	
	$nume_fisier="../../utilizatori/produse/".$_SESSION['utilizator'].".txt";
	$identificator=fopen($nume_fisier,"ab") or die("can't open file");
	$nr_cuv=fwrite($identificator,"test!");
	//$url=$_POST['link'];
	//$variabila=$_POST['adresa'];
	fclose($identificator);
	//header("Location: ../../login/cos.php");
	*/
?>

<?php
	$cantitate=$_POST['cantitate'];
	$url=$_POST['link'];
	$produs=$_POST['produs'];
	
	if(isset($cantitate))
	{
		$_SESSION['cos'] = array();
		array_push($_SESSION['cos'], $url);
		array_push($_SESSION['cos'], $produs);
		array_push($_SESSION['cos'], $cantitate);
	}
	
?>
