<?php 
include 'koneksi.php';
$idPegawai=$_GET['id'];
	
	$cek=mysqli_num_rows(mysqli_query($db, "SELECT * FROM absenpulang WHERE idPegawai=$idPegawai && tanggalPulang=CURDATE()"));
	if ($cek > 0) {
		echo "<script>
				alert('Anda Sudah Absen');
				window.location='absensiKaryawan.php';
			</script>";
	}else{
		$sql="INSERT INTO absenpulang VALUES('','$idPegawai', now(), now())";
		mysqli_query($db, $sql);
		header("Location: absensiKaryawan.php?sukses");
	}
	?>
