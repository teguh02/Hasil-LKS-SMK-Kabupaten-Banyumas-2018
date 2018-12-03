<?php
	include '../koneksi.php';

	if (isset($_POST['setuju'])) {
		$id 	= $_POST['id'];
		$nama 	= $_POST['nama'];
		$judul 	= $_POST['judul'];
		$isi 	= $_POST['isi'];

		$sql = "INSERT INTO artikel (id,nama,judul,isi) VALUES ('$id','$nama','$judul','$isi')";
		$query = mysqli_query($db,$sql);

			if ($query) {
				header("location: artikel.php?pesan=disetujui");
				$hapus = "DELETE FROM belum WHERE id='$id'";
				$query2 = mysqli_query($db,$hapus);
			} else {
				header("location: artikel.php?pesan=gagal-posting");
			}
	}
?>

