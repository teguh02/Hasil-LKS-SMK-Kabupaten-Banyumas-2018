<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Halaman Admin</title>
</head>
<body>
<?php
error_reporting(E_ALL);
session_start();
include "../config/koneksi.php";

if(isset($_SESSION["username"]) && $_SESSION["username"])
{
	echo"<script>alert('Kamu Sudah Login')</script>";
	echo"<meta http-equiv='refresh' content='0;url=media.php?module=home'>";
	unset($_SESSION);
	exit;
}
$loggedin = false;
$username = isset($_POST['username']) ? $_POST['username'] : Null ;
$password = isset($_POST['password']) ? $_POST['password'] : Null ;
if($username && $password)
{
	$sql = "SELECT username FROM admin WHERE username='$username' AND password='$password'";
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	if(!$row)
	{
		echo"<script>alert('Silahkan Login Dahulu')";
		echo"<meta http-equiv='refresh' content='0;url=index.php'>";
	}
	else
	{$loggedin = true;}
}
	if(!$loggedin)
	{
		echo"<table id='table1' align='center'>
			 <tr>
			 <td>
			 <div align='center'>
			 <form action='cek_login.php' method='post'>
			 <input type='text' name='username' placeholder='Username'><br/>
			 <input type='password' name='password' placeholder='Password'><br/>
			 <input type='submit' name='submit' value='login'>
			 </form>
			 </div>
			 </td>
			 </tr>
			</table>";
	}
	else
	{
	echo"<script>alert('Kamu Sudah Login')</script>";
	echo"<meta http-equiv='refresh' content='0;url=media.php?module=home'>";
	$_SESSION['username'] = $username;
	}
?>
</body>
</html>
<style>
body{
	background-color:grey;
}
#table1
{background-color:white;
padding-left:17px;
padding-right:17px;
padding-top:20px;
padding-bottom:20px;
margin-top:250px;}
div
{ 
background-color:white;
}
input[type=text][type=password]
{ border-collapse:collapse;

}

</style>
