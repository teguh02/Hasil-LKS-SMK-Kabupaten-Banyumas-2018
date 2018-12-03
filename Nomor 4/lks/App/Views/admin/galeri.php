<nav class="blue">
	<div class="toto">
		<div class="flex">
			<div class="logo">Pariwisata</div>
			<div class="link">
				<li>Tambah</li>
				<li>Wisata</li>
				<li>Tentang Kami</li>
				<li>Buku Tamu</li>
				<li class=" "><a class="button black" href="">Logout</a></li>
			</div>
		</div>
	</div>

</nav>

<section>
	<div class="bungkus">
		<div class="grid2">
			<div class="flex2">
				<div class="pading10px badge "><a class="hilang " href="<?php echo BASE ?>/admin/index ">Destinasi</a></div>
				<div class="pading10px badge active"><a class="hilang" href="<?php echo BASE ?>/admin/galeri  ">Galeri</a></div>
			</div>
		</div>

		<div class="grid10">

			<div class="pading30px">
				<a href="<?php echo BASE ?>/admin/tambah1">Tambah GAleri</a>
				<table>
				<th>Judul</th>
				<th>Gambar</th>
				<th>Action</th>
				<?php foreach ($result as $key => $b) {?>
					<tr>
						<td><?php echo $b['judul'] ?></td>
						<td><?php echo $b['gambar'] ?></td>
						<td>
							<a class="edit"  href="<?php echo BASE ?>/admin/edit/<?php echo $b['id'] ?>">Edit</a>
							<a class="delete" href="<?php echo BASE ?>/admin/deletegaler/<?php echo $b['id'] ?>">Delete</a>
						</td>
					</tr>
				<?php } ?>
			</table>
			</div>
		</div>
	</div>
</section>