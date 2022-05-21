
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Tek Sayı Çift Sayı-2</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<p class="cyan">
  <?php
$sayisal=$_POST['sayisal'];
$sozel=$_POST['sozel'];
$bassari=$_POST['basari'];

$puan=(($sayisal*2.4) + ($sozel*0.4) + $bassari*0.6) + 100;

print "DGS Puanınız: " .$puan

?>
</p>
<table>
  <tr>
    <td colspan="2" align="center">Ders Notları Sonucu</td>
  </tr>
  <tr>
    <td>Sayisal Dogru cevap sayısı:</td>
    <td><strong><?php echo $sayisal; ?></strong></td>
  </tr>
  <tr>
    <td>Sozel Dogru cevap Sayısı:</td>
    <td><strong><?php echo $sozel; ?></strong></td>
  </tr>
  <tr>
    <td>Okul Basari Puani</td>
    <td><strong><?php echo $bassari; ?></strong></td>
  </tr>
 
 
  <tr>
    <td>Puan:</td>
    <td><strong><?php echo $puan; ?></strong></td>
  </tr>
  <tr>
</table>
<p><A HREF="javascript:javascript:history.go(-1)">Geri dön</A></p>
</body>
</html>
