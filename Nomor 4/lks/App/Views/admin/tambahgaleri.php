<nav class="blue">
	<div class="container">
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
				<div class="pading10px badge active"><a class="hilang " href="<?php echo BASE ?>/admin/index ">Destinasi</a></div>
				<div class="pading10px badge"><a class="hilang" href="<?php echo BASE ?>/admin/galeri ">Galeri</a></div>
				
			</div>
		</div>
		<div class="grid10">


			<div class="pading30px">
				<h1>Edit</h1>
				<form method="post" enctype="multipart/form-data" action="<?php echo BASE ?>/admin/tambahgaleri">
					<table>
						<tr>
							<td class="noborder">Nama Galeri</td>
							<td class="noborder"><input class="padingtop10px" type="text" name="judul" placeholder=""><br></td>
						</tr>
						
						<tr>
							<td class="noborder">tambah gambar</td>
							<td class="noborder">
								<input name="toto" type="file" />
							</td>
						</tr>
						<tr><td class="noborder"></td><td class="noborder">
							<input class="" type="submit" name="simpan"></td>
						</tr>

					</table>
					
					
					<br>
					
				</form>

			</div>

			<!-- <table>
				<th>Judul</th>
				<th>Deskripsi</th>
				<th>Action</th>
				<?php foreach ($result as $key => $b) {?>
					<tr>
						<td class="noborder"><?php echo $b['judul'] ?></td>
						<td class="noborder"><?php echo $b['deskripsi'] ?></td>
						<td class="noborder">
							<a class="edit"  href="<?php echo BASE ?>/admin/edit/<?php echo $b['id'] ?>">Edit</a>
							<a class="delete" href="edit">Delete</a>
						</td>
					</tr>
				<?php } ?>
			</table>
		-->





	</div>
	</div>
</section>