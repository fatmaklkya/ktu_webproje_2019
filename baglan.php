<?php

$user = "root"; //veritabanı kullanıcı adı
$pwd = ""; //veritabanı şifresi
$host = "localhost"; //mysql server
$db = "site"; //veritabanı adı


$conn = mysqli_connect($host,$user,$pwd,$db) or die("MySQL sunucusuna baglanilamadi!!!".mysqli_error());
$conn->set_charset("utf8");

?>