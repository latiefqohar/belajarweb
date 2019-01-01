<?php 
include('koneksi.php');
$sql=mysql_query('select * from transaksi_masuk_header');
 ?>
 <table border="1">
 	<tr>
 		<td>no</td>
 		<td>kode transaksi</td>
 		<td>tanggal</td>
 		<td>total</td>
 		<td>id suplier</td>
 	</tr>
 	<?php
 	 $no=1;
 	while ($data=mysql_fetch_array($sql)) {?>
 	<tr>
	 	 <td><?php echo $no++; ?></td>
	 	 <td><?php echo $data['kode_transaksi']; ?></td>
	 	 <td><?php echo $data['tgl_transaksi']; ?></td>
	 	 <td><?php echo $data['total']; ?></td>
	 	 <td><?php echo $data['id_suplier']; ?></td>
 	 </tr>
 	<?php 
 	} 
 	?>
 </table>