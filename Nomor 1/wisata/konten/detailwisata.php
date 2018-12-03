<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Wisata Alam</title>
</head>
<body>
<table width="100%" border="1">
<?php
$sql = "SELECT id_wisata,nama_wisata,gambar,konten FROM wisata WHERE id_wisata='$_GET[id]'";
$query = mysqli_query($con,$sql)
;
while($row = mysqli_fetch_array($query))
{
echo "<tr>
    <td rowspan='2'><img width='200' src='gambar/".$row['gambar']."'></img></td>
    <td><a href='media.php?module=detailwisata&id=".$row['id_wisata']."'>".$row['nama_wisata']."</a></td>
  </tr>
  <tr>
    <td>".$row['konten']."</td>
  </tr>";}
echo"</table>";
?>

</table>
</body>
</html>