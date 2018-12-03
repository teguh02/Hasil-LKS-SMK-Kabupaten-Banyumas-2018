<?php
include "../../config/koneksi.php";
$sql = "DELETE FROM wisata WHERE id_wisata='$_GET[id]'";
$query = mysqli_query($con,$sql);

echo"<script>alert('Berhasil Di Hapus')</script>";
echo"<meta http-equiv='refresh' content='0;url=media.php?media.php?module=wisata>";



?>