<?php
include "config/koneksi.php";

if($_GET['module']=='home'){include "index.php";}
elseif($_GET['module']=='wisata'){include "konten/wisata.php";}
elseif($_GET['module']=='wisataalam'){include "konten/wisataalam.php";}
elseif($_GET['module']=='hotel'){include "konten/hotel.php";}
elseif($_GET['module']=='kuliner'){include "konten/kuliner.php";}
elseif($_GET['module']=='detailwisata'){include "konten/detailwisata.php";}

else{"Halaman Tidak Ditemukan";}



?>