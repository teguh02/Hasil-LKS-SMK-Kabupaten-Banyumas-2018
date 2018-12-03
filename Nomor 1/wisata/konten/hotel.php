<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hotel</title>
</head>
<body>
<table width="100%" border="1">
<?php
$sql = "SELECT * FROM wisata,kategori WHERE wisata.id_kategori=kategori.id_kategori AND
kategori.id_kategori='2'";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($query))
{
 echo"<tr>
    <td rowspan='2'><img width='200' src='gambar/".$row['gambar']."'></img></td>
    <td colspan='2'><a href='media.php?module=detailwisata&id=".$row['id_wisata']."'>".$row['nama_wisata']."</a></td>
  </tr>
  <tr>
    <td colspan='2'>".$row['konten']."</td>
  </tr>
  </tr>";}
echo "</table>";
?>
</body>
</html>