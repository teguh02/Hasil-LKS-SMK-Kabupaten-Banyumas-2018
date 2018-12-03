<?php
	session_start();
	include '../koneksi.php';


		if ($_SESSION['pesan'] != "login") {
			header("location: ../member-login.php?pesan=gagal-login");
		}

		$email = $_SESSION['email'];

	$sql = "SELECT * FROM member WHERE email='$email'";
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

		th {text-align: center;}
		.t-input 			{border: 0px; border-bottom: 1px solid #ccc; padding: 8px; display: block; width: 100%}
		.isi {width: 100%; padding: 8px; height: 300px}
	</style>
</head>

<body>
	<div class="t-row">
		<div class="t-col l12 s12 m12 t-blue">
			<!--Bagian 1-->
				<div class="t-row">
					<div class="t-col l6 s6 m6">
						<div class="t-padding-top-1 t-padding-left-2">Panel Member</div>
					</div>
				
			<!--Bagian 2-->

					<div class="t-col l6 s6 m6">
						<div class="t-container t-padding-right-3">
							<div class="">
								<a class="t-text-white" href="logout.php"><div class="keluar t-margin-left-2">Keluar</div></a>
								<?php echo "<a class='lihat keluar' href='profil.php?id=".$admin['id']."'>Profil</a>"; ?>
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
						<div class="t-content t-padding-2 t-padding-right-3 t-padding-top-1">
							<h2>Tulis Artikel
								<?php
									if (isset($_GET['pesan'])) {
										if ($_GET['pesan'] == "gagal-posting") {
											echo "Gagal Terkirim!";
										} elseif ($_GET['pesan'] == "berhasil-posting") {
											echo "Berhasil Terkirim!";
										}
									}
					?>
							</h2>

							<form method="post" action="artikel-proses.php">
								<input type="hidden" name="id" value="<?php echo base_convert(microtime(false), 10, 10); ?>">

								<input type="hidden" name="nama" value="<?php echo $admin['nama']; ?>">

								<input type="text" class="t-input t-large" placeholder="Masukan Judul" name="judul">

								<textarea  name="isi" class="isi t-margin-top-1" onclick="this.value=''">Ketikan Artikel Disini</textarea>

								<input type="submit" value="Kirim Artikel" class="t-input t-large t-margin-top-1 t-blue" name="kirim">
							</form>
						</div>
					</div>
				</div>
			</div>
</body>