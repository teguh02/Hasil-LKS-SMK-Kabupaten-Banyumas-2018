<nav class="blue">
	<div class="toto">
		<div class="flex">
			<div class="logo">Pariwisata</div>
			<div class="link">
				<li class=" "><a class="button black" href="<?php echo BASE ?>/">Logout</a></li>
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

<a href="<?php echo BASE ?>/admin/tambah"><button>Tambah</button></a>
			<table>
				<th>Judul</th>
				<th>Deskripsi</th>
				<th>Action</th>
				<?php foreach ($result as $key => $b) {?>
					<tr>
						<td><?php echo $b['judul'] ?></td>
						<td><?php echo $b['deskripsi'] ?></td>
						<td>
							<a class="edit"  href="<?php echo BASE ?>/admin/edit/<?php echo $b['id'] ?>">Edit</a>
							<a class="delete" href="<?php echo BASE ?>/admin/delete/<?php echo $b['id'] ?>">Delete</a>
						</td>
					</tr>
				<?php } ?>
			</table>




			
			
		</div>
	</div>
</section>

