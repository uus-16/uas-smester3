  
<?php
include('koneksi1.php');
//SELECT column_name(s) FROM table1 INNER JOIN table2 ON table1.column_name = table2.column_name;
//join dengan satuan dan kategori
$tampil_barang = mysqli_query($conn, "SELECT satuan, kategori,
FROM barang
INNER JOIN satuan ON barang.satuan_id = satuan.id_satuan
INNER JOIN kategori ON barang.kategori_id = kategori.id_kategori
");
?>
<table border="1">
	<tr>
		<td>ID Barang</td>
		<td>Nama Barang</td>
		<td>Nama Kategori</td>
		<td>Nama Satuan</td>
	</tr>
<?php 
while($data = mysqli_fetch_array($tampil_barang))
{ ?>
	<tr>
		<td><?php echo $data['id_barang']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['kategori_id']; ?></td>
		<td><?php echo $data['satuan_id']; ?></td>
	</tr>
<?php } ?>
</table>
<a href="cv_majumakmur.php">Menu Utama</a>