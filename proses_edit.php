<?php
include 'koneksi.php';
$id=$_POST['idPegawai'];
$username=$_POST['username'];
$password=$_POST['psw'];
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$posisi=$_POST['posisi'];
$jabatan=$_POST['jabatan'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$notelp=$_POST['telp'];

$query = "UPDATE pegawai SET username='$username', password='$password', nikPegawai='$nik', namaPegawai='$nama', posisiPegawai='$posisi', jabatanPegawai='$jabatan', gender='$gender', email='$email', notelp='$notelp' WHERE idPegawai='$id'";
mysqli_query($db, $query);
header("location: add_edit.php");
?>