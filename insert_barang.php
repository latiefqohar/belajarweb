<?php 
include ('koneksi.php');
IF(isset($_POST['save'])){
$query_insert="insert into barang(nama_barang,qty,harga)values(
'".$_POST['nama_barang']."',
'".$_POST['qantity']."',
'".$_POST['harga']."')";
$proses=mysql_query($query_insert);

if($proses){
	header('location:view_barang.php');
}else{
echo mysql_error();
}
}

 ?>
 <form method="POST">
 <table>
 	<tr>
 		<td>nama</td>
 		<td><input type="text" name="nama_barang"></td>
 	</tr>
 	<tr>
 		<td>Qty</td>
 		<td><input type="text" name="qantity"></td>
 	</tr>
 	<tr>
 		<td>harga</td>
 		<td><input type="text" name="harga"></td>
 	</tr>
	<td><input type="submit" name="save"></td>
 </table>
 </form>