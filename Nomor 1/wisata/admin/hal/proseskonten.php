<?php
include "../../config/koneksi.php";

$namafile = $_FILES['gambar']['name'];
$namasementara = $_FILES['gambar']['tmp_name'];
$target = "../../../gambar/";
if(move_uploaded_file($namasementara,$target.$namafile))
{
	echo"<script>alert('Konten dan".basename." Berhasil Di Upload')</script>";
	echo"<meta http-equiv='refresh' content='0;url=media.php?module=wisata'>";
}else
{
	echo"<script>alert('Gagal Update Konten Dan ".basename."')</script>";
	echo"<meta http-equiv='refresh' content='0;url=media.php?module=wisata'>";
}

$sql = "UPDATE wisata SET nama_wisata='$_POST[nama_wisata]',gambar='$namafile',konten='$_POST[konten]',id_kategori='$_POST[id_kategori]' WHERE id_wisata='$_GET[id]'";
$query = mysqli_query($con,$sql);

?>