	<nav class="blue">
		
		<div class="toto">
			<div class="flex">
				<div class="logo">Pariwisata</div>
				<div class="link">
					<li><a class="fontputih" href="<?php echo BASE ?>/">Home</a></li>
					<li><a class="fontputih" href="<?php echo BASE ?>/index/destinasi">Wisata</a></li>
					<li><a class="fontputih" href="<?php echo BASE ?>/index/galeri">Galeri</a></li>
					<a href=""><li class="button black">Login</li></a>
				</div>
			</div>
		</div>



	</nav>
	<section class="grey">
		<div class="container pading60px">
			<h1>destinasi</h1>
			<div class="bungkus">
				<?php foreach ($result as $key => $r) { ?>
					<div class="grid3">
						<article class="card margin20px white">
							<img width="100%" src="<?php echo BASE ?>/assets/img/<?php echo $r['img'] ?>">
							<div class="card-descripsi padding20px">
								<h1 class="card-judul"><?php echo $r['judul']; ?></h1>
								<p><?php echo $r['deskripsi']; ?></p>
								<a class="paddingtop20px" href="<?php echo BASE ?>/index/detail/<?php echo $r['id'] ?>">Selengkapnya</a>
							</div>

						</article>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>