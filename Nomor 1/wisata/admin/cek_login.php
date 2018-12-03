<?php
session_start();
include "../config/koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);
$sql = "SELECT username,password FROM admin WHERE username='$username' AND password='$password'";
$query = mysqli_query($con,$sql);
$row = mysqli_num_rows($query);
if($row==1)
{	$_SESSION['username'] = $username;
	 echo"<script>alert('Selamat Datang Admin')</script>";
	 echo"<script>document.location.href='media.php?module=home'</script>";
}
else
{	   
		echo"<script>alert('Username Atau Password Yang Anda Masukan Salah')</script>";
		echo"<meta http-equiv='refresh' content='0;url=index.php'>";
}
?>