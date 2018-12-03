<?php
error_reporting(0);
session_start();
include "../config/koneksi.php";
if($_SESSION['username']=='')
{
		echo"<script>alert('Silahkan Login Dahulu')</script>";
		echo"<meta http-equiv='refresh' content='0;url=index.php'>";
}
else
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Halaman Admin</title>
</head>

<body>
<table width="80%" id="customers" align="center" border="1">
  <tr>
    <td colspan="2" align="center">Selamat Datang <?php echo $_SESSION['username'];?></td>
  </tr>
  <tr>
    <td valign="top" width="13%"><table width="100%" border="1">
      <tr>
        <td><a href="media.php?module=wisata"><img src="../gambar/datawisata.png" /></img></a></td>
      </tr>
      <tr>
        <td><a href="media.php?module=admin"><img src="../gambar/dataadmin.png" /></img></a></td>
      </tr>
      <tr>
        <td><a href="media.php?module=pesanmasuk"><img src="../gambar/pesanmasuk.png" /></img></a></td>
      </tr>
      <tr>
        <td><a href="logout.php"><img src="../gambar/logout.png" /></img></a></td>
      </tr>
    </table></td>
    <td width="87%" valign="top"><?php include"konten.php"; ?></td>
  </tr>
  <tr>
    <td colspan="2" align="center">CopyRight&copy; By : Rizki Nugroho</td>
  </tr>
</table>
</body>
</html>
<?php
}
?>
<style>
#customers
{
	border-collapse:collapse;
}
#tdijo
{background-color:#3F0
}
#tdbiru
{background-color:
</style>