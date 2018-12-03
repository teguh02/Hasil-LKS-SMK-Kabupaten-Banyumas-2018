<?php
	include '../koneksi.php';

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$sql = "DELETE FROM member WHERE id='$id'";
		$query = mysqli_query($db,$sql);

			if ($query) {
				header("location: index.php?pesan=updated");
			}
	}
?>