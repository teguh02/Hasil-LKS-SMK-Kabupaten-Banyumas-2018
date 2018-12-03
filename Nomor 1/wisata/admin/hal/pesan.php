<table width='100%' border='1'>
<tr>
	<td align="center" id="customers" colspan="4"><h2>Data Pesan/Koment</h2></td>
</tr>
<tr>
    <td width='68'>Nama</td>
    <td width='67'>Subject</td>
    <td width='31'>Isi Pesan</td>
    <td width='262'>Aksi</td>
  </tr>
<?php
$sql = "SELECT * FROM pesan";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($query))
{echo"<tr>
    <td>".$row['nama']."</td>
    <td>".$row['subject']."</td>
	<td>".$row['isi']."</td>
    <td><a href='edit.php?pesan=".$row['id_pesan']."'>Edit</a>
	<a href='hapus.php?pesan=".$row['id_pesan']."'>Hapus</a></td>
  </tr>";}
 echo"</table>";
?>
