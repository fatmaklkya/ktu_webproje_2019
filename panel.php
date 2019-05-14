<?php 
session_start();
if($_SESSION["oturum"]){
  require_once('baglan.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="icerik/css/panel.css">
	<title>Yönetim Paneli</title>
</head>
<body>
<div class="navbar">
  <br><div class="uzaylogo"></div> 
    <li onclick="getir('form1');">
      <a>Menü Video</a>
    </li>
    <li onclick="getir('form2');">
      <a>Ders Programı</a>
    </li>
    <li onclick="getir('form3');">
      <a >Duyurular</a>
    </li>
    <li onclick="getir('form4');">
      <a>Etkinlikler</a>
    </li>
    <li onclick="getir('form5');">
      <a>Çıkış Yap</a>
    </li>
  
</div>
<div class="form" id="form1">
  <center>
    <form method="GET" action="mysqlCore.php">
      <h2> Menü Videosu </h2>
      <input class="input" required type="text" placeholder="Youtube Video Linki" name="link"><br>
      <button type="submit">Değiştir</button>
    </form>
  </center>
</div>
<div class="form" id="form2">
<table class="table" style="width: 97%;">
      <thead>
        <tr>
          <th>Ders Kodu</th>
          <th>Ders Adı</th>
          <th>Derslik</th>
          <th>Gün</th>
          <th>İşlemler</th>
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
          <td><a href="mysqlCore.php?p=ders&id=<?php echo $oku['ID']; ?>">Sil</a></td>
        </tr>
      <?php }} ?>
      </tbody>
    </table><br>
    <center>
    <form method="GET" action="mysqlCore.php">
      <input class="input" style="width: 50px;" required type="text" placeholder="Kod" name="kod">
      <input class="input" required type="text" placeholder="Ad" name="ad">
      <input class="input" style="width: 50px;" required type="text" placeholder="Derslik" name="derslik">
      <input class="input" style="width: 70px;" required type="text" placeholder="Gün" name="gun">
      <button type="submit">Ekle</button>
    </form>
</center>
</div>
<div class="form" id="form3">
  <table class="table" style="width: 97%;">
      <thead>
        <tr>
          <th>Duyuru</th>
          <th>Tarih</th>
          <th>İşlemler</th>
        </tr>
      </thead>
      <tbody>
      <?php 
        $sonuc = mysqli_query($conn, "select * from duyurular");
        if(mysqli_num_rows($sonuc)!=0)
        {
          while($oku = mysqli_fetch_assoc($sonuc))
          { 
      ?>
        <tr>
          <td><?php echo $oku["DUYURU"]; ?></td>
          <td><?php echo $oku["TARIH"]; ?></td>
          <td><a href="mysqlCore.php?p=duyuru&id=<?php echo $oku['ID']; ?>">Sil</a></td>
        </tr>
      <?php }} ?>
      </tbody>
    </table><br>
    <center>
      <form method="GET" action="mysqlCore.php">
        <input class="input" required type="text" placeholder="Duyuru" name="duyuru">
        <input type="hidden" value="<?php echo date('d.m.Y'); ?>" name="tarih">
        <button type="submit">Ekle</button>
      </form>
    </center>
</div>
<div class="form" id="form4">
    <table class="table" style="width: 97%;">
      <thead>
        <tr>
          <th>Etkinlik</th>
          <th>Açıklama</th>
          <th>İşlemler</th>
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
          <td><a href="mysqlCore.php?p=etkinlik&id=<?php echo $oku['ID']; ?>">Sil</a></td>
        </tr>
      <?php }} ?>
      </tbody>
    </table><br>
<center>
  <form method="GET" action="mysqlCore.php">
    <input class="input" required type="text" placeholder="Etkinlik" name="etkinlik">
    <input class="input" required type="text" placeholder="Açıklama" name="aciklama">
    <button type="submit">Ekle</button>
  </form>
</center>
</div>
<div class="form" id="form5">
<center>
  <h2>Emin misiniz?</h2>
    <form method="GET" action="mysqlCore.php">
      <input type="hidden" name="p" value="cikis">
      <button type="submit">Evet</button>
      <button type="button" onclick="getir('form1')">Hayır</button>
    </form>
  </center>
</div>

</body>
<script type="text/javascript" src="icerik/js/jquery.js"></script>
<script type="text/javascript">
  function getir(form){
    switch(form){
      case "form1":
        $('#form1').css({
          'animation' : 'goster .5s forwards',
          'animation-delay':'.5s',
          'z-index':'2'
        });
        $('#form2').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        $('#form3').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        $('#form4').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        $('#form5').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        break;
      case "form2":
        $('#form2').css({
          'animation' : 'goster .5s forwards',
          'animation-delay':'.5s',
          'z-index':'2'
        });
        $('#form1').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        $('#form3').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        $('#form4').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        $('#form5').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        break;
      case "form3":
        $('#form3').css({
          'animation' : 'goster .5s forwards',
          'animation-delay':'.5s',
          'z-index':'2'
        });
        $('#form2').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        $('#form1').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        $('#form4').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        $('#form5').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        break;
      case "form4":
        $('#form4').css({
          'animation' : 'goster .5s forwards',
          'animation-delay':'.5s',
          'z-index':'2'
        });
        $('#form2').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        $('#form3').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        $('#form1').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        $('#form5').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        break;
      case "form5":
        $('#form5').css({
          'animation' : 'goster .5s forwards',
          'animation-delay':'.5s',
          'z-index':'2'
        });
        $('#form2').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        $('#form3').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        $('#form4').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        $('#form1').css({
          'animation' : 'gizle .5s forwards',
          'z-index':'-1'
        });
        break;
    }
    

  }
</script>
</html>
<?php 

}else{
  echo "Giriş yapmanız lazım!";
}
?>