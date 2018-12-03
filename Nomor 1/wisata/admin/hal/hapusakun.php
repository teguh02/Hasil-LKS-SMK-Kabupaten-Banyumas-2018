<?php

$sql = "DELETE FROM admin WHERE username='$_GET[username]'";
$query = mysqli_query($con,$sql);

echo"<script>alert('Berhasil Di Hapus')</script>";
echo"<meta http-equiv='refresh' content='0;url=media.php?module=akun>";



?>