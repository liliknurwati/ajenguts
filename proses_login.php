<?php 
	include 'koneksi.php';
	error_reporting(0);
	session_start();

	if(isset($_SESSION['username'])){
		header("Location: awal_pegawai.php");
	}
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM pegawai WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $query);
		if($result->num_rows > 0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $row['username'];
			$_SESSION['idPegawai'] = $row['idPegawai'];
			$_SESSION['namaPegawai'] = $row['namaPegawai'];
			if ($row['posisiPegawai']=='ADMIN') {
				header("Location: add_edit.php");
			}else{
				header("Location: absensiKaryawan.php");
			}
			
		}else{
			header("Location: login.php");
			echo "<script>alert('username atau password Anda salah. Silahkan login kembali')</script>";
		}
	}
?>