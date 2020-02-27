<?php
include('koneksi1.php');
if(isset($_POST['save'])){
	$save="insert into transaksi (id_transaksi, nama_transaksi, tgl_transaksi, harga, qty, id_barang)values
	       ('".$_POST['id_transaksi']."',
			'".$_POST['nama_transaksi']."',
			'".$_POST['tgl_transaksi']."',
			'".$_POST['harga']."',
			'".$_POST['qty']."',
			'".$_POST['id_barang']."')";
	$proses=mysqli_query($conn,$save);
	if($proses){
		header("Location:tampilan_transaksi.php");
	}else{
		echo mysqli_error();
	}
}
?>
<form method="post">
	<table border="1">
		<tr>
			<td>ID Transaksi</td>
			<td><input type="text" name="id_transaksi"></td>
		</tr>
		<tr>
			<td>Nama Transaksi</td>
			<td><input type="text" name="nama_transaksi"></td>
		</tr>
		<tr>
			<td>Tanggal Transaksi</td>
			<td><input type="date" name="tgl_transaksi"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga"></td>
		</tr>
		<tr>
			<td>Quantity</td>
			<td><input type="text" name="qty"></td>
		</tr>
		<tr>
			<td>ID Barang</td>
			<td><input type="text" name="id_barang"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save"></td>
		</tr>
	</table>
</form>