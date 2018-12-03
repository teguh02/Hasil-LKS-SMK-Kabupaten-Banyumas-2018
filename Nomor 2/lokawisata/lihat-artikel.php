<?php
	include 'koneksi.php';
	$sql1 = "SELECT * FROM artikel";
	$query1 = mysqli_query($db,$sql1);
	$ambil = mysqli_fetch_array($query1)
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
								Selamat Datang di halaman artikel yang berjudul <?php echo $ambil['judul']; ?> yang telah diposting oleh <?php echo $ambil['nama']; ?> pada situs Lokawisata Baturden ini. Selamat Membaca
							</div>

							<div class=" t-hide-large t-hide-medium">
								Selamat Datang di halaman artikel yang berjudul <?php echo $ambil['judul']; ?> yang telah diposting oleh <?php echo $ambil['nama']; ?> pada situs Lokawisata Baturden ini. Selamat Membaca
							</div>

							<p><a href="#konten" class="konten">Lihat Artikel</a></p>
						</div>
					</div>
		</div>
	</div>

		<!--Konten-->



			<div id="konten" class="t-container penuh">
				<div class="t-content">
					<div class="t-padding-top-2 t-padding-2">
						<h1><?php echo $ambil['judul']; ?></h1>
						<div class="t-small"><b> <?php echo $ambil['nama'];?> - <?php echo $ambil['tanggal'];?></b></div>

						<div class="t-margin-top-2">
							<?php echo $ambil['isi']; ?>
						</div>


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