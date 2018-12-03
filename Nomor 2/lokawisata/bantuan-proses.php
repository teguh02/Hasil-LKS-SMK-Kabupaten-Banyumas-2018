<?php
	include 'koneksi.php';

	if (isset($_POST['kirim'])) {

		$id 		= $_POST['id'];
		$nama 		= $_POST['nama'];
		$keluhan	= $_POST['keluhan'];
		$telp 		= $_POST['telp'];
		$pesan 		= $_POST['pesan'];

		$sql = "INSERT INTO keluhan (id,nama,keluhan,telp,pesan) VALUES ('$id','$nama','$keluhan','$telp','$pesan')";
		$query = mysqli_query($db,$sql);

		 if ($query) {
		 	header("location: hubungi.php?pesan=berhasil-kirim#bantuan");
		 } else{
		 	header("location: hubungi.php?pesan=gagal-kirim#bantuan");
		 }

	}
?>