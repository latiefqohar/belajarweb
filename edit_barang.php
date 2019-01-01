<?php 
include('koneksi.php');
if (isset($_POST['cari'])){
$query_edit="update barang set nama_barang='".$_POST['nama_barang']."',
 qty='".$_POST['qty']."',
 harga='".$_POST['harga']."'
 where id_barang='".$_POST['idbarang']."'";
 $proses=mysql_query($query_edit);
  if ($proses) {
 	header('location:view_barang.php');
 }else{
 		echo mysql_error();
 } 
 }


 $select_data=mysql_query("select * from barang where id_barang='".$_GET['id_barang']."'");
 $data=mysql_fetch_array($select_data);


 ?>

 <form method="post">
 	<table>
 		<td><input type="hidden" value="<?php echo $data['id_barang'];?>" name="idbarang"></td>
 	<tr>
 		<td>nama barang</td>
 		<td><input type="text" value="<?php echo $data['nama_barang'];?>" name="nama_barang"></td>
 	</tr>
 	<tr>
 		<td>qty</td>
 		<td><input type="text" value="<?php echo $data['qty'];?>" name="qty"></td>
 	</tr>
 	<tr>
 		<td>harga</td>
 		<td><input type="text" value="<?php echo $data['harga'];?>" name="harga"></td>
 	</tr>
 	<tr>
 		<td></td>
 		<td><input type="submit" name="cari"></td>

 	</tr>
 	</table>

 </form>