<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		header("Location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<style type="text/css">
	body{
		font-family: Arial, Helvetica, sans-serif;
	}
	nav {
		overflow: hidden;
		background-color: blue;
	}
	nav a{
		float: right;
		font-size: 16px;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
	nav a:hover{
		background-color: darkblue;
	}
	table {
		width: 100%;
	}
	table th {
		background: black;
		color: white;
	}
	table td{
		padding: 8px;
	}
	.absen-masuk{
		margin: 50px;
		border-radius: 15px;
		background: #f1f1f1;
		padding: 50px;
	}
	.absen-pulang{
		margin: 50px;
		border-radius: 15px;
		background: #f1f1f1;
		padding: 50px;
	}

</style>
<body>
	<nav>
		<a href="globalPage.php"><b>LOGOUT</b></a>
		<a href="about-admin.php"><b>PROFILE</b></a>
		<a href="absensiKaryawan.php"><b>ABSEN</b></a>
	</nav>
	<div class="absen-masuk">
		<h3 align="center">Absensi Masuk Karyawan</h3>
		<div class="table-data">
			<table border="1">
				<tr>
				<th>N0</th>
				<th>NIK</th>
				<th>NAMA</th>
				<th>JABATAN</th>
				<th>TANGGAL</th>
				<th>JAM MASUK</th>
			</tr>
			<?php 
			include 'koneksi.php';
			$id=$_GET['id'];
			$query="SELECT p.*, m.* FROM pegawai p LEFT JOIN absenmasuk m USING(idPegawai) WHERE p.idPegawai=$id order by m.tanggalMasuk";
			$sql=mysqli_query($db, $query);
			$no=1;
			while ($data = mysqli_fetch_array($sql)) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['nikPegawai']; ?></td>
				<td><?php echo $data['namaPegawai']; ?></td>
				<td><?php echo $data['jabatanPegawai']; ?></td>
				<td><?php echo $data['tanggalMasuk']; ?></td>
				<td><?php echo $data['masuk']; ?></td>
			</tr>
		<?php } ?>
		</table>
		</div>
	</div>

	<div class="absen-pulang">
		<h3 align="center">Absensi Pulang Karyawan</h3>
		<div class="table-data">
			<table border="1">
				<tr>
				<th>N0</th>
				<th>NIK</th>
				<th>NAMA</th>
				<th>JABATAN</th>
				<th>TANGGAL</th>
				<th>JAM PULANG</th>
			</tr>
			<?php 
			$id=$_GET['id'];
			$query="SELECT p.*, o.* FROM pegawai p LEFT JOIN absenpulang o USING(idPegawai) WHERE p.idPegawai=$id order by o.tanggalPulang";
			$sql=mysqli_query($db, $query);
			$no=1;
			while ($data = mysqli_fetch_array($sql)) {
				
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['nikPegawai']; ?></td>
				<td><?php echo $data['namaPegawai']; ?></td>
				<td><?php echo $data['jabatanPegawai']; ?></td>
				<td><?php echo $data['tanggalPulang']; ?></td>
				<td><?php echo $data['pulang']; ?></td>
			</tr>
		<?php } ?>
		</table>
		</div>
	</div>
	
</body>
</html>