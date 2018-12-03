<?php
	include 'koneksi.php';

	if (isset($_POST['kirim'])) {
		
		$id 	= $_POST['id'];
		$nama 	= $_POST['nama'];
		$email 	= $_POST['email'];
		$sandi 	= $_POST['sandi'];

		$sql = "INSERT INTO member (id,nama,email,sandi) VALUES ('$id','$nama','$email','$sandi')";
		$query = mysqli_query($db,$sql);

			if ($query) {
				header("location: registrasi.php?pesan=berhasil-mendaftar");
			} else {
				header("location: registrasi.php?pesan=gagal-mendaftar");
			}
	}
?>