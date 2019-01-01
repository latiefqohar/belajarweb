<?php 
session_start();
if ($_SESSION['status']=='1') {
	
echo 'hallo '.$_SESSION['username'];
echo '<br> anda login sebagai '.$_SESSION['level'];
echo '<br> anda bisa akses <br>';
 ?>
 <?php 
if ($_SESSION['level']=='admin') {?>
	<a href="">laporan keuangan</a><br>
	<a href="">laporan Karyawan</a><br>
 <?php }else{ ?>
 	<a href="">input keuangan</a><br>
 	<a href="">input karyawan</a><br>
 	<?php } ?>
 	<a href="logout.php">logout</a>
 <?php 
}else {
	echo ("<script type='text/javascript'>
	alert('user anda tidak aktif');document.location='javascript:history.back(1)';</script>");
}
  ?>