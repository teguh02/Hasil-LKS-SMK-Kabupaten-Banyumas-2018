<?php
	include '../koneksi.php';

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$sql = "DELETE FROM keluhan WHERE id='$id'";
		$query = mysqli_query($db,$sql);

			if ($query) {
				header("location: keluhan.php?pesan=updated");
			}
	}
?>