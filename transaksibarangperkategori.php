<?php
include('koneksi1.php');
$tampil_barang = mysqli_query($conn, "SELECT barang.kategori_id , kategori.nama, transaksi.id_barang,qty,harga , qty*harga
FROM barang
INNER JOIN kategori ON barang.kategori_id = kategori.id_kategori
INNER JOIN transaksi ON barang.id_barang = transaksi.id_barang
")
?>
<h1>Laporan Transaksi Barang Perkategori</h1>
<table border="1">
	<tr>
		<td>Kategori</td>
		<td>Nama</td>
		<td>Barang</td>
		<td>Quantity</td>
		<td>Harga</td>
		<td>Total</td>
	</tr>
<?php while($data = mysqli_fetch_array($tampil_barang)) { ?>
	<tr>
		<td><?php echo $data['kategori_id']; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['nama_satuan']; ?></td>
		<td><?php echo $data['qty']; ?></td>
		<td><?php echo $data['harga']; ?></td>
		<td><?php echo $tot['total']; ?></td>
	</tr>
<?php } ?>
</table>