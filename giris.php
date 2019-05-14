<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="icerik/css/giris.css">
	<title>Giriş Paneli</title>
</head>
<body>
<div class="wrap">
	<form method="POST" action="kontrol.php">
		<h2> Giriş Paneli </h2>
		<?php if(isset($_GET["hata"]) && $_GET["hata"] == "1"){ ?>
			<p class="hata"> Kullanıcı adı veya şifreyi yanlış girdiniz! </p>
		<?php }elseif (isset($_GET["hata"]) && $_GET["hata"] == "2") { ?>
			<p class="hata"> SQL Injection koruması var! </p>
		<?php } ?>
		<input class="input" type="text" placeholder="Kullanıcı Adı" name="kadi"><br>
		<input class="input" type="password" placeholder="Şifre" name="sifre"><br>
		<button type="submit">Giriş Yap</button>
	</form>
</div>
</body>
</html>