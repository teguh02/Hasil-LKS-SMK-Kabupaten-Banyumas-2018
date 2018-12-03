	<header>
		<nav class="background" style="background: url('assets/img/1.jpg')">
			<div class="container">
				<div class="flex">
					<div class="logo">Pariwisata</div>
					<div class="link">
						<li><a class="fontputih" href="<?php echo BASE ?>/">Home</a></li>
						<li><a class="fontputih" href="<?php echo BASE ?>/index/destinasi">Wisata</a></li>
						<li><a class="fontputih" href="<?php echo BASE ?>/index/galeri">Galeri</a></li>
						<a href="<?php echo BASE ?>/index/login"><li class="button black">Login</li></a>
					</div>
				</div>

				<div class="delapanvh">
					<p class="judul">Destinasi Wisata Banyumas</p> 
					<p class="deskripsi">indonesia mempunya banyak sekali wisata terutama didaerah banyumas yang indah<br>ini adalah sebuah web untuk memperkenalkan wisata dibanyumas
					</p>
					<a class="button margintop20" href="">Lihat Destinasi</a>
				</div>
			</div>

		</nav>
	</header>
	<section>
		<div class="container padding120px">
			<div class="bungkus">
				<div class="grid6 flex3">banyumas adalah sebuah daerah yang sangat kaya akan budaya dan wisatanya, ditambah lagi masyarakatnya yang sangat ramah dan sangat baik hati</div>
				<div class="grid5"><img width="100%" src="<?php echo BASE ?>/assets/img/4.jpg"></div>
			</div>
		</div>
	</section>
	<section class="grey">
		<div class="container padding120px">
			<div class="bungkus">
				<?php foreach ($result as $key => $r) { ?>
					<div class="grid3">
						<article class="card margin20px white">
							<img width="100%" src="<?php echo BASE ?>/assets/img/<?php echo $r['img'] ?>">
							<div class="card-descripsi padding20px">
								<p class="card-judul"><?php echo $r['judul']; ?></p>
								<p><?php echo $r['deskripsi']; ?></p>
							</div>

						</article>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
