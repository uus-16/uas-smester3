<?php
include('koneksi1.php');
$tampil_satuan = mysqli_query($conn,"select * from satuan");
?>

<table border="1">
	<tr>
		<td>ID Satuan</td>
		<td>Nama</td>
	</tr>
<?php while($data = mysqli_fetch_array($tampil_satuan)) { ?>
	<tr>
		<td><?php echo $data['id_satuan']; ?></td>
		<td><?php echo $data['nama']; ?></td>
	</tr>
<?php } ?>
</table>
<a href="cv_majumakmur.php">Menu Utama</a>