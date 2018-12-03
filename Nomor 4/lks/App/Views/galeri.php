	<header>
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
	</header>
	<section class="grey">
		<div class="container pading60px">
			<h1>Galeri</h1>
			<div class="bungkus">
				<?php foreach ($result as $key => $r) { ?>
					<div class="grid3">
						<article class="card margin20px white">
							<img width="100%" src="<?php echo BASE ?>/assets/img/<?php echo $r['gambar'] ?>" alt="<?php echo $r['gambar']; ?>">
							<div class="card-descripsi padding20px">
								<p class="card-judul"><?php echo $r['judul']; ?></p>

							</div>

						</article>
					</div>
				<?php } ?>

			</div>
		</div>
	</section>