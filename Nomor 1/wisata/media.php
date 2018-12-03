<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Pariwisata</title>
</head>
<body>
<table id="customers" width="100%" border="1">
  <tr>
    <td colspan="2"><img src="gambar/header.jpg" width="100%" height="700" /></td>
  </tr>
  <tr>
    <td width="9%"><img width="205" src="gambar/menunavigasi.png" /></td>
    <td id="tdijo" align="center" width="50">List Wisata Banyumas</td>
  </tr>
  <tr>
    <td valign="top"><table width="50%" border="0">
      <tr>
        <td><a href="media.php?module=wisata"><img width='200' height="40" src="/wisata/gambar/home.png"></img></a></td>
      </tr>
      <br />
      <tr>
        <td><a href="media.php?module=wisataalam"><img width='200' height="40" src="/wisata/gambar/wisataalam.png"></img></a></td>
      </tr>
      <tr>
        <td><a href="media.php?module=hotel"><img width='200' height="40" src="/wisata/gambar/bangunan.png"></img></a></td>
      </tr>
      <tr>
        <td><a href="media.php?module=kuliner"><img width='200' height="40" src="/wisata/gambar/kuliner.png"></img></a></td>
      </tr>
    </table>
    </td>
    <td><?php include "konten.php"; ?></td>
  </tr>
  <tr>
    <td><table id="customers" width="100%" border="1">
      <tr>
       <td>
    <form method="post" action="pesan.php">
    <input type="text" name="nama" placeholder="Nama" />
    <input type="text" name="subject" placeholder="Subject" />
    <textarea name="isi"></textarea>
    <input type="submit" name="submit" value="Kirim Koment" />
    </form>
    </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><p>WA : 085328799825</p>
    <p>FB : Rizki Nugroho</p>
    <p>IG : @rizki_nugr</p></td>
    <td id="tdijo" align="center">CopyRight&copy; By : Rizki Nugroho</td>
  </tr>
</table>
</body>
</html>
<style>
#body{
	background-color:grey;
	}
#customers
{
	border-collapse:collapse
;}
#tdijo
{background-color:#58e62c}
.tdbiru
{
background-color:#3ecdc8;
}