<?php
	include '../koneksi.php';

	if (isset($_POST['kirim'])) {
		$id 	= $_POST['id'];
		$nama 	= $_POST['nama'];
		$judul 	= $_POST['judul'];
		$isi 	= $_POST['isi'];

		$sql = "INSERT INTO belum (id,nama,judul,isi) VALUES ('$id','$nama','$judul','$isi')";
		$query = mysqli_query($db,$sql);

			if ($query) {
				header("location: index.php?pesan=berhasil-posting");
			} else {
				header("location: index.php?pesan=gagal-posting");
			}
	}
?>

