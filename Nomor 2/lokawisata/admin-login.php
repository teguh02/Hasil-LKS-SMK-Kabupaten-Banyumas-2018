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
		a.login {color: #777 !important;float: left;}
		a.login:hover {color: black !important; }

		.admin {background-color: white !important;cursor: pointer;}
		.member 	{background-color: #f1f1f1 !important;color: #777 !important;cursor: pointer;} .member:hover {color: black !important}

		@media (min-width: 601px) {body {background-color: white !important} }
		@media (max-width: 601px) {body {background-color: white !important}}
		@media (min-width: 993px) {body {background-color: #f1f1f1 !important} }

	</style>

	<link rel="stylesheet" type="text/css" href="assets/t.css">
</head>

<body class="t-light-grey">
	<div class="t-content">

		<div class="t-container form">
			<div class="t-row t-hide-large">

			<a href="member-login.php">
				<div class="t-col l6 s6 m6 member">
					<div class="t-padding-2">
						<center>
							Login Member
						</center>
					</div> 
				</div>
			</a>

				<div class="t-col l6 s6 m6 admin">
					<div class="t-padding-2">
						<center>
							Login Admin
						</center>
					</div> 
				</div>

			</div>
		</div>

		<div class="t-container t-margin-top-5 t-white form">
			<div class="t-padding-2 t-padding-right-3">
				<h1>Login Admin
					<?php
							if (isset($_GET['pesan'])) {
								if ($_GET['pesan'] == "gagal-login") {
									echo "Gagal!";
								} 
							}
					?>

				</h1>
				<form action="admin-proses.php" method="post">

					<input maxlength="30" type="text" name="email" class="t-input t-large t-margin-top-1" placeholder="Masukan Email">

					<input maxlength="30" type="password" name="sandi" class="t-input t-margin-top-1 t-large" placeholder="Masukan Kata Sandi">
				
					<div>
						<input value="Kirim Data" type="submit" class="t-input t-margin-top-2 t-blue t-large" name="kirim">
						<center><a href="index.php" class="batal">Batal</a></center>
					</div> 

				</form>

				
			</div>
		</div>

		<div class="t-container t-margin-top-1 t-padding-2 form">
			<div class="t-row t-hide-small t-hide-medium">

			<a href="member-login.php">
				<div class="t-col l6 s6 m6 member">
					<div class="t-padding-2">
						<center>
							Login Member
						</center>
					</div> 
				</div>
			</a>

				<div class="t-col l6 s6 m6 admin">
					<div class="t-padding-2">
						<center>
							Login Admin
						</center>
					</div> 
				</div>

			</div>
		</div>
	</div>

	

</body>