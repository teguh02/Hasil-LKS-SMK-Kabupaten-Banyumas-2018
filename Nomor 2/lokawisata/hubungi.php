<?php
	include 'koneksi.php';
	$sql1 = "SELECT * FROM artikel";
	$query1 = mysqli_query($db,$sql1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lokawisata Baturaden</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="assets/t.css">

	<style type="text/css">
		a.konten {
			color: white;
		}

		a.konten:hover {
			text-decoration: underline;
		}

		p.paragraf {text-indent: 40px}
		a.atas {padding: 8px; border: 1px solid #CCC; color: white; display: block;margin-top: 3%; width: 120px}
		.t-input 			{border: 0px; border-bottom: 1px solid #ccc; padding: 8px; display: block; width: 100%}
		.isi {width: 100%; padding: 8px; height: 300px}
		a.atas:hover {background-color: white; color: #777}

		table {width: 100%} tr {text-align: center;} td {padding: 1%; text-align: center;} th {font-size: 17px}

		@media (min-width: 993px) {.penuh {height: 100%;}}
		@media (min-width: 601px) and (max-width: 993) {.penuh {height: auto;}}
		@media (max-width: 601px) {.penuh {height: auto;}}
		
	</style>
</head>
<body>
	<div class="t-paralax-satu">
		<div class="t-container full t-black-alpha">
			
			<!--Navigasi-->
				<button onclick="myFunction()" class="dropdown-button"><img src="assets/ellipsis.svg" width="30px" ></button>

				<div id="myDropdown" class="dropdown-content">
					<a href="index.php">BERANDA</a>
					<a href="registrasi.php">REGISTRASI</a>
					<a href="member-login.php">MASUK</a>
					<a href="artikel.php">ARTIKEL</a>
					<a href="#galery">GALERI</a>
					<a href="hubungi.php">HUBUNGI KAMI</a>
				</div>

				<script type="text/javascript">
					function myFunction() {
						document.getElementById("myDropdown").classList.toggle("show")
					}
				</script>

				<!--Selamat Datang-->

					<div class="t-content">
						<div class="t-padding-top-5 t-padding-2">
							<h1>Selamat Datang</h1>

							<div class="t-large t-hide-small">
								Selamat Datang di halaman bantuan, anda mengalami kesulitan anda dapat menghubungi Customer Service Kami dengan 
								mengisi formulir bantuan di bawah ini. Silahkan isi dengan lengkap dan benar sesuai petunjuk yang ada. Terima Kasih
							</div>

							<div class=" t-hide-large t-hide-medium">
								Selamat Datang di halaman bantuan, anda mengalami kesulitan anda dapat menghubungi Customer Service Kami dengan 
								mengisi formulir bantuan di bawah ini. Silahkan isi dengan lengkap dan benar sesuai petunjuk yang ada. Terima Kasih
							</div>

							<p><a href="#bantuan" class="konten">Dapatkan Bantuan</a></p>
						</div>
					</div>
		</div>
	</div>

		<!--Konten-->



			<div id="bantuan" class="t-container penuh">
				<div class="t-content">
					<div class="t-padding-top-2 t-padding-2">
						<center><h1>Customer Service
							<?php
									if (isset($_GET['pesan'])) {
										if ($_GET['pesan'] == "gagal-kirim") {
											echo "Gagal Terkirim!";
										} elseif ($_GET['pesan'] == "berhasil-kirim") {
											echo "Terkirim!";
										}
									}
						?>
						</h1></center>

						<form action="bantuan-proses.php" method="post" class="t-padding-2 t-padding-right-3">

							<input type="hidden" name="id" value="<?php echo base_convert(microtime(false), 10, 10); ?>">

							<input class="t-input t-large" type="text" placeholder="Masukan Nama Anda" name="nama">

							<input type="text" name="keluhan" class="t-input t-large t-margin-top-1" placeholder="Masukan Subjek Keluhan">

							<input type="text" name="telp" class="t-input t-large t-margin-top-1" placeholder="Masukan Nomor Telepon Anda">

							<textarea  name="pesan" class="isi t-margin-top-1" onclick="this.value=''">Masukan Keluhan dan Pesan Anda Disini</textarea>			

							<input type="submit" class="t-input t-blue t-large t-margin-top-1" value="Kirim Pesan" name="kirim">				
						</form>

					</div>
				</div>
			</div>

					<div class="t-container t-dark-grey">
						<div class="t-content">
							<div class="t-padding-2 t-text-white">
								<center>Powered By Admin Baturaden @ 2018</center>
								<center><a class="atas" href="#">Kembali Ke Atas</a></center>
							</div>
						</div>
					</div>
</body>