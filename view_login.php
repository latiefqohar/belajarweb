<html>
<head>

	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap-grid.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">

	<script src="bootstrap.js"></script>
	<script src="bootstrap.min.js"></script>
	<script src="bootstrap.bundle.js"></script>
<script src="bootstrap.bundle.min.js"></script>

<style>
		.grid-container{
			display:grid;
			grid-template-columns: auto auto auto;
			background-color: darkblue;
			padding: 10px;
		}
		.grid-item{
			background-color: rgba(255,255,255,0.8);
			border: 1px solid;
			padding: 20px;
			font-size: 30px;
			text-align: center;
		}
</style>


</head>
</html>
<body>
	<h1>contoh Grid</h1>
	<div class="grid-container">
		<div class="grid-item">1</div>
		<div class="grid-item">2</div>
		<div class="grid-item">3</div>
		<div class="grid-item">4</div>
		<div class="grid-item">5</div>
	</div>	
</body>
<?php 
include ('koneksi.php');
$query_view="select * from login";
$proses=mysql_query($query_view);


 ?>

 <table class="table table-bordered">
 	<tr>
 		<td>username</td>
 		<td>password</td>
 		<td>level</td>
 		<td>status</td>
 		<td colspan="2">action</td>
 	</tr>
 	<?php 
 	while ($tampil_data=mysql_fetch_array($proses)){?>
 	<tr>
 		<td><?php echo $tampil_data['username']; ?></td>
 		<td><?php echo $tampil_data['password']; ?></td>
 		<td><?php echo $tampil_data['level']; ?></td>
 		<td><?php echo $tampil_data['status']; ?></td>
 		<td><a href="edit_login.php?id_login=<?php echo $tampil_data['id_login'];?>">edit</a></td>
 		<td><a href="delete_login.php?id_login=<?php echo $tampil_data['id_login'];?>">hapus</a></td>
 	</tr>
 <?php } ?>
 </table>