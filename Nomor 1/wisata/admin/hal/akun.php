<table width='100%' border='1'>
<tr>
	<td align="center" id="customers" colspan="4"><h2>Data Akun Admin</h2></td>
</tr>
<tr>
    <td width='68'>Username</td>
    <td width='67'>Password</td>
    <td width='31'>Aksi</td>
    <td width='262' rowspan='2'>Tambah Akun</td>
  </tr>
<?php
$sql = "SELECT * FROM admin";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($query))
{echo"<tr>
    <td>".$row['username']."</td>
    <td>".$row['password']."</td>
    <td>
	<a href='edit.php?username=".$row['$username']."'>Edit</a>
	<a href='hapusakun.php?username=".$row['username']."'>Hapus</a></td>
  </tr>";}
 echo"</table>";
?>
