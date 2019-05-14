<?php

$url = "https://www.mgm.gov.tr/FTPDATA/bolgesel/trabzon/sonSOA.xml"; 
$veri =  file_get_contents($url); 

$pattern = '@<mak>(.*?)</mak>@si';
 
preg_match_all($pattern,$veri,$yazilar);
 

$veri2 =  file_get_contents($url); 

$pattern2 = '@<min>(.*?)</min>@si';
 
preg_match_all($pattern2,$veri2,$yazilar2);
 
print_r('🌞'.$yazilar[0][0].'°C/'.$yazilar2[0][0].'°C');
?>
