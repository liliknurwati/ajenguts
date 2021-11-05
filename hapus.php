<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
	mysqli_query($db, "DELETE FROM pegawai WHERE idPegawai='$id'");
	header("location: add_edit.php?pesan=hapus");
?>