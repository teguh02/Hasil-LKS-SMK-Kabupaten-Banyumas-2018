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
		.t-input 			{border: 0px; border-bottom: 1px solid #ccc; padding: 8px; display: block; width: 100%}
		.t-input.hapus {width: 48%; display: inline-block; }
		.t-input.kirim {width: 48%; display: inline-block; padding: 12px;cursor: pointer;}
		a.batal {color: #777 !important; display: block; margin-top: 2%} 
		a.batal:hover{color: black !important}

		th {text-align: center;}
		.isi {width: 100%; padding: 8px; height: 300px}
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
							<h2>Data Keluhan</h2>

							<?php
								if (isset($_GET['id'])) {
									$id = $_GET['id'];

									$sql1 = "SELECT * FROM keluhan WHERE id='$id'";
									$query1 = mysqli_query($db,$sql1);
									$ambil = mysqli_fetch_array($query1);
								}
							?>

							<form action="setujui.php" method="post" class="t-margin-top-1">
								<input type="hidden" value="<?php echo $ambil['id'] ?>" name="id" >

								<input class="t-input t-large" value="<?php echo $ambil['nama'] ?>" type="text" name="nama" placeholder="Nama Pengirim">

								<input class="t-input t-margin-top-1 t-large" value="<?php echo $ambil['telp'] ?>" type="text" name="telp" placeholder="Nomor Telp Pengirim">

								<input class="t-input t-margin-top-1 t-large" value="<?php echo $ambil['keluhan'] ?>" type="text" name="keluhan" placeholder="Keluhan">

								<textarea class="t-input t-margin-top-1 isi t-large" name="isi" ><?php echo $ambil['pesan'] ?></textarea>

								<center>
									<?php
										echo "<a class='hapus t-input t-blue t-margin-top-1' href='hapus-keluhan.php?id=".$ambil['id']."'>Hapus Keluhan</a>";
									?>
								</center>

								<center><a class="batal" href="keluhan.php">Batal</a></center>
							</form>
						</div>
					</div>
				</div>
			</div>
</body>