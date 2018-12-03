<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Halaman Manage Wisata</title>
</head>
<body>
<table id="customers" width="100%" border="1">
<tr>
<td colspan="7" align="center"><h2>Data Wisata</h2></td>
</tr>
  <tr>
  	<td id="tdijo">No</td>
    <td id="tdijo" width="9%">Nama Wisata</td>
    <td id="tdijo">Gambar</td>
    <td id="tdijo">Konten</td>
    <td id="tdijo">Kategori</td>
    <td id="tdijo">Tanggal Upload</td>
    <td id="tdijo">Aksi</td>
  </tr>
<?php
$sql = "SELECT * FROM wisata,kategori WHERE wisata.id_kategori=kategori.id_kategori";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($query))
{echo"<tr>
	<td id='tdijo'>".$row['id_wisata']."</td>
    <td class='tdbiru'>".$row['nama_wisata']."</td>
    <td><img width='200' src='../gambar/".$row['gambar']."'></img></td>
    <td class='tdbiru'>".$row['konten']."</td>
    <td class='tdbiru'>".$row['nama_kategori']."</td>
    <td class='tdbiru'>".$row['tgl_upload']."</td>
	<td class='tdbiru'><a href='hal/edit.php?id=".$row['id_wisata']."'>Edit</a>
	<a href='hal/hapuskonten.php?id=".$row['id_wisata']."'>Hapus</a></td>
  </tr>";}
 echo"</table>";
?>
</body>
</html>