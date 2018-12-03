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
		img.maps {filter: invert(100%);}
		a.atas {padding: 8px; border: 1px solid #CCC; color: white; display: block;margin-top: 3%; width: 120px}
		a.atas:hover {background-color: white; color: #777}


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
								Selamat Datang di situs web Lokawisata Baturaden ini, pada situs ini kami berikan penjelasan singkat
								mengenai Lokawisata Baturaden. Ingin tahu lebih lanjut?
							</div>

							<div class=" t-hide-large t-hide-medium">
								Selamat Datang di situs web Lokawisata Baturaden ini, pada situs ini kami berikan penjelasan singkat
								mengenai Lokawisata Baturaden. Ingin tahu lebih lanjut?
							</div>

							<p><a href="#konten" class="konten">Silahkan Lihat Deskripsi Lokawisata Baturaden</a></p>
						</div>
					</div>
		</div>
	</div>

				<!--Konten-->

				<div id="konten" class="t-content  t-padding-2 t-padding-top-2">

					<center><h2>Lokawisata Baturaden</h2></center>
					
					<p class="paragraf">
						Lokawisata Baturaden ini merupakan salah satu lokawisata yang diminati banyak pengunjung khususnya
						Masyarakat Banyumas. Hampir seluruh Masyarakat Banyumas mengetahui Lokawisata Baturaden ini, kebanyakan dari
						mereka memilih untuk berlibur ke Lokawisata Baturaden ini, selain dekat anda tidak perlu merogoh kocek terlalu dalam
						untuk mengunjungi obyek wisata ini. Pemandangan yang indah disana dapat memanjakan mata anda dan suasana disana sejuk alami karena Lokawisata ini terletak di dataran tinggi bagian utara Kota Purwokerto Kabupaten Banyumas
					</p>

					
						<div class="t-row">

							<div class="t-col l3 m3 s12">
								<div class="t-padding">
									<img src="assets/12.jpg" width="100%">
								</div>
							</div>

							<div class="t-col l3 m3 s12">
								<div class="t-padding">
									<img src="assets/5.png" width="100%">
								</div>
							</div>

							<div class="t-col l3 m3 s12">
								<div class="t-padding">
									<img src="assets/14.jpg" width="100%">
								</div>
							</div>
						</div>

					<p class="paragraf t-margin-top">
						Tak perlu pergi jauh dari Lokawisata Baturaden ini, disini anda dapat menemukan juga aneka macam kuiner atau makanan tradisional khas Kabupaten Banyumas. Seperti
					</p>

					<div class="t-row">

						<div class="t-col l3 m3 s12">
						<center>
							<div class="t-padding">
								<img width="100%" src="assets/mendoan.jpg">
								<div class="t-small">Mendoan Banyumas</div>
							</div>
						</center> 
						</div>

						<div class="t-col l3 m3 s12">
							<center>
							<div class="t-padding">
								<img width="100%" src="assets/sate.jpg">
								<div class="t-small">Sate Banyumas</div>
							</div>
						</center> 
						</div>

						<div class="t-col l3 m3 s12">
							<center>
							<div class="t-padding">
								<img width="100%" src="assets/soto.jpg">
								<div class="t-small">Soto Sokaraja</div>
							</div>
						</center> 
						</div>
							
						</div>
					</div>
				</div>

					<div class="t-container t-dark-grey">
						<div class="t-row">
							<div class="t-col l3 m12 s12 t-hide-small t-hide-medium">
								<div class="t-padding-5">
									<center><img class="maps" src="assets/map-marked.svg" width="60%"></center>
								</div>
							</div>

							<div class="t-col l8 m12 s12 t-hide-small t-text-white">
								<div class="t-padding-2">
									<h2>Lokasi Lokawisata</h2>
									Baturaden
									
									<div>Kabupaten Banyumas</div>
									<div>Utara Kota Purwokerto</div>
								</div>
							</div>

							<div class="t-col l8 m12 s12 t-hide-medium t-hide-large t-padding-bottom-2 t-text-white">
								<div class="t-padding-2">
									<center>
									<h1>Lokasi Lokawisata</h1>
									Baturaden
									
									<div>Kabupaten Banyumas</div>
									<div>Utara Kota Purwokerto</div>
									</center>
								</div>
							</div>
						</div>
					</div>

					<div id="galery" class="t-content t-padding-2 t-padding-top-2">
						<center><h2>Galery Video Lokawisata Baturaden</h2></center>

						<video controls="" width="100%">
							<source src="assets/video-1.mp4" type="video/mp4">
						</video>

						<video class="t-margin-top-1" controls="" width="100%">
							<source src="assets/video-2.mp4" type="video/mp4">
						</video>

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
</html>