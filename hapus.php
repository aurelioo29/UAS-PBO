<?php
// Nama : AURELIO LUCIO LIE
// NIM : 223303030427
// Kelas : 3 Malam A
	include 'proses.php';
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$proses = new Proses();
		$proses->hapus($id);
		header('location:index.php');
	}
?>