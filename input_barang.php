<?php
include('koneksi1.php');
if(isset($_POST['simpan'])){
	$save="insert into barang (id_barang, nama, kategori_id, satuan_id)values
	       ('".$_POST['id_barang']."',
			'".$_POST['nama']."',
			'".$_POST['kategori_id']."',
			'".$_POST['satuan_id']."')";
	$proses=mysqli_query($conn,$save);
	if($proses){
		header("Location:tampilan_barang.php");
	}else{
		echo mysqli_error();
	}
}
?>
<form method="post">
	<table border="1">
		<tr>
			<td>ID Barang</td>
			<td><input type="text" name="id_barang"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Kategori ID</td>
			<td><input type="text" name="kategori_id"></td>
		</tr>
		<tr>
			<td>Satuan ID</td>
			<td><input type="text" name="satuan_id"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="simpan"></td>
		</tr>
	</table>
</form>