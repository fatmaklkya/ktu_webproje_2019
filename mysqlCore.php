<?php 
session_start();
if(isset($_SESSION['oturum']) && $_SESSION['oturum']){
require_once('baglan.php');

	if(isset($_GET['p']) && $_GET['p']=='ders'){
		if(isset($_GET['id'])){
			$sql = "DELETE FROM program WHERE ID=".$_GET['id'];

			if ($conn->query($sql) === TRUE) {
			    echo "<!-- DERS SİLİNDİ -->";
			    header('Location: panel.php');
			} else{
			    echo "<!-- HATA -->";
			}
		}


	}
	if(isset($_GET['p']) && $_GET['p']=='duyuru'){
		if(isset($_GET['id'])){
			$sql = "DELETE FROM duyurular WHERE ID=".$_GET['id'];

			if ($conn->query($sql) === TRUE) {
			    echo "<!-- DUYURU SİLİNDİ -->";
			    header('Location: panel.php');
			} else{
			    echo "<!-- HATA -->";
			}
		}
	}
	if(isset($_GET['p']) && $_GET['p']=='etkinlik'){
		if(isset($_GET['id'])){
			$sql = "DELETE FROM etkinlik WHERE ID=".$_GET['id'];

			if ($conn->query($sql) === TRUE) {
			    echo "<!-- ETKİNLİK SİLİNDİ -->";
			    header('Location: panel.php');
			} else{
			    echo "<!-- HATA -->";
			}
		}
	}

	if(isset($_GET['link'])){
		$videoKodu = substr($_GET['link'], strpos($_GET['link'], "=") + 1); 
		$embedLink = 'https://www.youtube.com/embed/'.$videoKodu;

		$sql = "UPDATE site SET VIDEO=\"".$embedLink."\"";  
			if ($conn->query($sql) === TRUE) {
			    echo "<!-- VIDEO DEĞİŞTİRİLDİ -->";
			    header('Location: panel.php');
			} else{
			    echo "<!-- HATA -->";
			}
	}
	if(isset($_GET['kod']) && isset($_GET['ad']) && isset($_GET['derslik']) && isset($_GET['gun'])){
		$sql = 'INSERT INTO program(D_KOD,D_ADI,DERSLIK,GUN) VALUES("'.$_GET['kod'].'","'.$_GET['ad'].'","'.$_GET['derslik'].'","'.$_GET['gun'].'")';

			if ($conn->query($sql) === TRUE) {
			    echo "<!-- DERS EKLENDİ -->";
			    header('Location: panel.php');
			} else{
			    echo "<!-- HATA -->";
			}
	}
	if(isset($_GET['duyuru']) && isset($_GET['tarih'])){
		$sql = 'INSERT INTO duyurular(DUYURU,TARIH) VALUES("'.$_GET['duyuru'].'","'.$_GET['tarih'].'")';

			if ($conn->query($sql) === TRUE) {
			    echo "<!-- DERS EKLENDİ -->";
			    header('Location: panel.php');
			} else{
			    echo "<!-- HATA -->";
			}
	}
	if(isset($_GET['etkinlik']) && isset($_GET['aciklama'])){
		$sql = 'INSERT INTO etkinlik(ETK,ETK_A) VALUES("'.$_GET['etkinlik'].'","'.$_GET['aciklama'].'")';

			if ($conn->query($sql) === TRUE) {
			    echo "<!-- ETKİNLİK EKLENDİ -->";
			    header('Location: panel.php');
			} else{
			    echo "<!-- HATA -->";
			}
	}
	if(isset($_GET['p']) && $_GET['p'] == "cikis"){
		$_SESSION['oturum'] = false;
		session_unset();
		session_destroy();
		header('Location: giris.php');
	}
}

?>