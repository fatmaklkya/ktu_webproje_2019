<?php 
$kadi=$_POST["kadi"];
$sifre=$_POST["sifre"];
require_once('baglan.php');
// SQL INJECTION KORUMASI
  if($kadi!='" OR ""="' || strpos($kadi, '=') === true || strpos($kadi, ' ') === true || strpos($kadi, '"') === true){ 
	  $sonuc = mysqli_query($conn, 'select * from kullanici where KADI="'.$kadi.'" and SIFRE="'.$sifre.'"');
	  if(mysqli_num_rows($sonuc)!=0) //KULLANICI SORGUSU
	  {
	  	session_start();//OTURUMUN BAŞLATILMASI
	  	$_SESSION['oturum']=true;
	  	header('Location: panel.php'); //PANELE YÖNLENDİRME
	  }else{
	 	header('Location: giris.php?hata=1');
	  }
  }else{
  	header('Location: giris.php?hata=2');
  }

?>