<?php 
require_once('baglan.php');
$sorgu = mysqli_query($conn, "select * from site");
        if(mysqli_num_rows($sorgu)!=0)
        {
          while($alinan = mysqli_fetch_assoc($sorgu))
          { 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="icerik/css/style.css">
	
	<title>Anasayfa</title>
</head>
<body>
	<div id="anaBolum" class="mid panel">
		<div style="">
		<iframe width="560" height="315" src="<?php echo $alinan['VIDEO']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
	</div>
	<div id="sagUst" class="panel">
		<table class="table">
			<thead>
				<tr>
					<th>Ders Kodu</th>
					<th>Ders Adı</th>
					<th>Derslik</th>
					<th>Gün</th>
				</tr>
			</thead>
			<tbody>
      <?php 
        $sonuc = mysqli_query($conn, "select * from program");
        if(mysqli_num_rows($sonuc)!=0)
        {
          while($oku = mysqli_fetch_assoc($sonuc))
          { 
      ?>
				<tr>
					<td><?php echo $oku["D_KOD"]; ?></td>
					<td><?php echo $oku["D_ADI"]; ?></td>
					<td><?php echo $oku["DERSLIK"]; ?></td>
					<td><?php echo $oku["GUN"]; ?></td>
				</tr>
      <?php }} ?>
			</tbody>
		</table>
	</div>
	<div id="sagAlt" class="panel">
		<table class="table">
      <thead>
        <tr>
          <th>Etkinlik</th>
          <th>Açıklama</th>
        </tr>
      </thead>
      <tbody>
      <?php 
        $sonuc = mysqli_query($conn, "select * from etkinlik");
        if(mysqli_num_rows($sonuc)!=0)
        {
          while($oku = mysqli_fetch_assoc($sonuc))
          { 
      ?>
        <tr>
          <td><?php echo $oku["ETK"]; ?></td>
          <td><?php echo $oku["ETK_A"]; ?></td>
        </tr>
      <?php }} ?>
      </tbody>
    </table>
	</div>
	<div id="footer" class="panel">
		<marquee onmouseover="this.stop();" onmouseout="this.start();"> 
      <?php 
        $sonuc2 = mysqli_query($conn, "select * from duyurular");
        if(mysqli_num_rows($sonuc2)!=0)
        {
          while($oku2 = mysqli_fetch_assoc($sonuc2))
          { 
            echo '📋'. $oku2["DUYURU"].'&nbsp; |&nbsp; ['.$oku2["TARIH"].']&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
          }
        }
      ?>
    </marquee>
	</div>
	<div id="baboli" >
		<div id="hava" class="panel"> 
      <center><div id="havaText"><?php include('hava.php'); ?></div></center>
    </div>
		<div id="saat" class="panel"> 
			<center><div id="saatText">00:00:00</div></center>
		</div>
	</div>
</body>

<script type="text/javascript" src="icerik/js/jquery.js"></script>
<script type="text/javascript">
	
	var suan = new Date(<?php echo time() * 1000 ?>);
    function saatBasla(){  
        setInterval('guncelle();', 1000);  
    }
    saatBasla();
    function guncelle(){
        var saat = suan.getTime();
        saat += 1000;
        suan.setTime(saat);
        var element = document.getElementById('saatText');
        if(element){
            element.innerHTML = "⏰ "+suan.toTimeString("hh.mm.ss").replace(/.*(\d{2}:\d{2}:\d{2}).*/, "$1");
        }
    } 

</script>

</html>
<?php
}}
?>