<?php
include('koneksi.php');
$query_view=mysql_query("select * from barang");
?>
<table border="1">
	<tr>
		<td>no</td>
		<td>nama</td>
		<td>qty</td>
		<td>jumlah</td>
		<td colspan="2">action</td>
	</tr>
	<?php
	$no=1;
	while ($data=mysql_fetch_array($query_view)) {?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $data['nama_barang'];?></td>
		<td><?php echo $data['qty'];?></td>
		<td><?php echo $data['harga'];?></td>
		<td><a href="edit_barang.php?id_barang=<?php echo $data['id_barang'];?> ">edit</a></td>
		<td><a href="delete_barang.php?id_baranghapus=<?php echo $data['id_barang']?>">hapus</a></td>
	</tr>
	<?php
	}
	?>
</table>	