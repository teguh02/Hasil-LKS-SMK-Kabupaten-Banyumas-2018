<!DOCTYPE html>
<html>
<head>
	<title>Lokawisata Baturaden</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		.t-container.form {max-width: 800px; margin: auto;}
		.t-input 			{border: 0px; border-bottom: 1px solid #ccc; padding: 8px; display: block; width: 100%}
		a.batal {color: #777 !important; display: block; margin-top: 2%} 
		a.batal:hover{color: black !important}
		body {overflow-y: hidden;}
		a.login {color: #777 !important;float: right;}
		a.login:hover {color: black !important; text-decoration: underline;}

		@media (min-width: 601px) {body {background-color: white !important} a.login {text-align: center; width: 100%}}
		@media (max-width: 601px) {body {background-color: white !important} a.login {text-align: center; width: 100%}}
		@media (min-width: 993px) {body {background-color: #f1f1f1 !important} a.login {float: right !important; width: auto;}}

	</style>

	<link rel="stylesheet" type="text/css" href="assets/t.css">
</head>

<body class="t-light-grey">
	<div class="t-content">
		<div class="t-container t-margin-top-5 t-white form">
			<div class="t-padding-2 t-padding-right-3">
				<h1>Pendaftaran Anggota
					<?php
							if (isset($_GET['pesan'])) {
								if ($_GET['pesan'] == "gagal-mendaftar") {
									echo "Gagal!";
								} elseif ($_GET['pesan'] == "berhasil-mendaftar") {
									echo "Berhasil!";
								}
							}
					?>

				</h1>
				<form action="proses-registrasi.php" method="post">
					<input type="hidden" name="id" value="<?php echo base_convert(microtime(false), 10, 10); ?>">

					<input maxlength="30" type="text" name="nama" class="t-input t-large " placeholder="Masukan Nama">

					<input maxlength="30" type="text" name="email" class="t-input t-large t-margin-top-1" placeholder="Masukan Email">

					<input maxlength="30" type="text" name="sandi" class="t-input t-margin-top-1 t-large" placeholder="Masukan Kata Sandi">
				
					<div>
						<input value="Kirim Data" type="submit" class="t-input t-margin-top-2 t-blue t-large" name="kirim">
						<center><a href="index.php" class="batal">Batal</a></center>
					</div> 

				</form>

				
			</div>
		</div>

		<div class="t-container t-margin-top-1 form">
			<a class="login" href="member-login.php">Sudah Punya Akun?</a>
		</div>
	</div>

	

</body>