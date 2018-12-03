<?php
include "../../config/koneksi.php";
$sql = "SELECT * FROM wisata,kategori";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Akun</title>
</head>
<body>
<form action="proseskonten.php" method="post">
<table width="200" border="1">
  <tr>
    <td width="88">Nama Wisata</td>
    <td width="96"><?php 
    echo "<input type='text' name='nama_wisata' id='namawisata' value='".$row['nama_wisata']."'/>"; ?>
    <?php 
    echo "<input type='hidden' name='id_wisata' id='id_wisata' />"; ?></td>
  </tr>
  <tr>
    <td>Gambar</td>
    <td>
    <?php echo"<input type='file' name='gambar' id='gambar' value='../../gambar/".$row['gambar']."' />";?></td>
  </tr>
  <tr>
    <td>Konten</td>
    <td>
    <?php echo"<textarea name='konten' id='konten' cols='45' rows='5'>".$row['konten']."</textarea>"; ?></td>
  </tr>
  <tr>
    <td>Kategori</td>
    <td><?php
      echo"<select name='kategori' id='kategori'><option>".$row['id_kategori']."
    </select>";?></td>
  </tr>
</table>
<input type="submit" name="submit" value="Update" />
</form>
</body>
</html>