<?php
	include '../koneksi.php';

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$sql = "DELETE FROM belum WHERE id='$id'";
		$query = mysqli_query($db,$sql);

			if ($query) {
				header("location: artikel.php?pesan=updated");
			}
	}
?>