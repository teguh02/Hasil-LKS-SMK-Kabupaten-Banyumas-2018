<?php
session_start();
session_destroy();
session_start();
session_regenerate_id();

echo"<script>alert('Log Out Berhasil')</script>";
echo"<meta http-equiv='refresh' content='0;url=index.php'>";
?>