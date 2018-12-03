<?php
	session_start();
	include 'koneksi.php';

	$email 		= $_POST['email'];
	$sandi 		= $_POST['sandi'];

	$sql 		= "select * from admin where email='$email' and sandi='$sandi'";
	$query 		= mysqli_query($db,$sql);
	$cek 		= mysqli_num_rows($query);

		if ($cek > 0) {
			$_SESSION['email'] = $email;
			$_SESSION['pesan'] = "login";

			header("location: admin/index.php");
		
		} else {
			header("location: admin-login.php?pesan=gagal-login");
		}

?>