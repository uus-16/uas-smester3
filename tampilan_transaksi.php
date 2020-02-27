<?php
include('koneksi1.php');
$tampil_transaksi = mysqli_query($conn,"select from* transaksi
");
?>

<table border="1">
	<tr>
		<td>ID Transaksi</td>
		<td>Nama Transaksi</td>
		<td>Tanggal Transaksi</td>
		<td>Harga</td>
		<td>Quantity</td>
		<td>ID Barang</td>
	</tr>
<?php while($data = mysqli_fetch_array($tampil_transaksi)) { ?>
	<tr>
		<td><?php echo $data['id_transaksi']; ?></td>
		<td><?php echo $data['nama_transaksi']; ?></td>
		<td><?php echo $data['tgl_transaksi']; ?></td>
		<td><?php echo $data['harga']; ?></td>
		<td><?php echo $data['qty']; ?></td>
		<td><?php echo $data['id_barang']; ?></td>
	</tr>
<?php } ?>
</table>
<a href="cv_majumakmur.php">Menu Utama</a>