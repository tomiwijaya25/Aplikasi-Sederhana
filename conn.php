<?php
	
	$server = 'localhost';
	$user = 'root';
	$pwd = '';
	$dbname = 'dbdataku';

	$con=mysqli_connect($server,$user,$pwd,$dbname)
	or die('Gagal koneksi ke server'.$server);

 ?>