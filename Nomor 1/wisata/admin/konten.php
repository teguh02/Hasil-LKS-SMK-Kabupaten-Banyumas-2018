<?php
include "../config/koneksi.php";

if($_GET['module']=='wisata'){include "hal/wisata.php";}
elseif($_GET['module']=='admin'){include "hal/akun.php";}
elseif($_GET['module']=='home'){include "hal/wisata.php";}
elseif($_GET['module']=='pesanmasuk'){include "hal/pesan.php";}

else{"Halaman Tidak Ditemukan";}

?>