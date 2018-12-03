<?php
include "config/koneksi.php";
$name = $_POST['nama'];
$subject = $_POST['subject'];
$pesan = $_POST['isi'];
$sql = "INSERT INTO pesan VALUES ('','$name','$subject','$pesan')";
$query = mysqli_query($con,$sql);
?>