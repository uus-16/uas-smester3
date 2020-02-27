<?php
include('koneksi1.php');
if(isset($_POST['save'])){
	$save="insert into satuan (id_satuan, nama)
	values('".$_POST['id_satuan']."',
			'".$_POST['nama_satuan']."')";
	$proses=mysqli_query($conn,$save);
	if($proses){
		header("Location:tampilan_satuan.php");
	}else{
		echo mysqli_error();
	}
}
?>
<form method="post">
	<table border="1">
		<tr>
			<td>ID Satuan</td>
			<td><input type="text" name="id_satuan"></td>
		</tr>
		<tr>
			<td>Nama Satuan</td>
			<td><input type="text" name="nama_satuan"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save"></td>
		</tr>
	</table>
</form>