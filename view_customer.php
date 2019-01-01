<?php
include('koneksi.php');
$query_view=mysql_query("select * from customer");
?>
<table border="1">
	<tr>
		<td>no</td>
		<td>nama</td>
		<td>alamat</td>
		<td>no hp</td>
		<td>status</td>
		<td></td>

	</tr>
	<?php
	$no=1;
	while ($data=mysql_fetch_array($query_view)) {?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $data['nama'];?></td>
		<td><?php echo $data['alamat'];?></td>
		<td><?php echo $data['no_hp'];?></td>
		<td><?php echo $data['status'] ?></td>
		<td><a href="edit_customer.php?id-customer=<?php echo $data['id_customer'];?>">edit</a></td>
		<td><a href="delete_customer.php?id-customer=<?php echo $data['id_customer'];?>">delete</a></td>

	</tr>
	<?php
	}
	?>
</table>	