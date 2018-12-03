<?php
	session_start();
	include '../koneksi.php';


		if ($_SESSION['pesan'] != "login") {
			header("location: ../admin-login.php?pesan=gagal-login");
		}

		$email = $_SESSION['email'];

	$sql = "SELECT * FROM admin WHERE email='$email'";
	$query = mysqli_query($db,$sql);
	$admin = mysqli_fetch_array($query);

	$sql1 = "SELECT * FROM member";
	$query1 = mysqli_query($db,$sql1);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hai <?php echo $admin['nama']; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="../assets/t.css">

	<style type="text/css">
		.admin,.keluar {float: right; position: relative;  width: auto; color: white; padding: 2%}
		.cpanel {filter: invert(100%);}
		.keluar:hover {background-color: white !important; color: dodgerblue !important}
		a.lihat {color: dodgerblue} a.lihat:hover {color: green; text-decoration: underline;}

		td {text-align: center; padding: 1%} table {width: 100%} th {font-size: 17px}
	</style>
</head>

<body>
	<div class="t-row">
		<div class="t-col l12 s12 m12 t-blue">
			<!--Bagian 1-->
				<div class="t-row">
					<div class="t-col l6 s6 m6">
						<img src="../assets/cpanel.svg" class="t-margin-left-5 t-hide-small t-hide-medium cpanel" width="58px">
						<div class="t-hide-large t-padding-1 t-padding-left-3">CPanel</div>
					</div>
				
			<!--Bagian 2-->

					<div class="t-col l6 s6 m6">
						<div class="t-container t-padding-right-3">
							<div class="">
								<a class="t-text-white" href="logout.php"><div class="keluar t-margin-left-2">Keluar</div></a>
								<a class="t-text-white" href="artikel.php"><div class="keluar t-margin-left-2">Artikel</div></a>
								<a class="t-text-white" href="keluhan.php"><div class="keluar t-margin-left-2">Keluhan</div></a>
								<a class="t-text-white" href="index.php"><div class="keluar t-margin-left-2">Beranda</div></a>
								<div class="admin"><?php echo $admin['nama']; ?></div>
							</div>
						</div>
					</div>
				</div>

		</div>
	</div>

		<!--Konten 2-->

			<div>
				<div class="t-row">
					<div class="t-col l12 s12 m12">
						<div class="t-content t-padding-2 t-padding-top-1">
							<h2>Data Member

								<?php
							if (isset($_GET['pesan'])) {
								if ($_GET['pesan'] == "updated") {
									echo "Berhasil di Perbarui!";
								} 
							}
					?>

							</h2>

							<table>
								<tr>
									<td><th>No</th></td>
									<td><th>Nama</th></td>
									<td><th>Email</th></td>
									<td><th>Kata Sandi</th></td>
									<td><th>Aksi</th></td>
								</tr>

								<?php
									while ($ambil = mysqli_fetch_array($query1)) {

										echo "<tr>";
											echo "<td>";
											echo "<td>".$ambil['urut']."<td>";
											echo "<td>".$ambil['nama']."<td>";
											echo "<td>".$ambil['email']."<td>";
											echo "<td>".$ambil['sandi']."<td>";
											echo "<td><a class='lihat' href='lihat-data.php?id=".$ambil['id']."'>Lihat</a></td>";
										echo "</tr>";
									}
								?>
							</table>
						</div>
					</div>
				</div>
			</div>
</body>