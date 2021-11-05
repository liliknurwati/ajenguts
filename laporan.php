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
	<title>Laporan Pegawai</title>
</head>
<style type="text/css">
	body{
	font-family: Arial, Helvetica, sans-serif;
	background-color: #f1f1f1;
	}
	.navigation {
		overflow: hidden;
		background-color: darkblue;
	}
	.navigation a{
		float: right;
		font-size: 16px;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
	.navigation a:hover{
		background-color: blue;
	}
	.box{
		margin: 40px;
		background-color: white;
		border-radius: 20px;
		box-shadow: 2px 2px 1px 1px grey;
		padding: 10px;
	}
	table{
		padding: 20px;
		width: 100%;
	}
	td{
		text-align: center;
		padding: 8px;
	}
	th{
		background-color: #f1f1f1;
		padding: 10px;
	}
</style>
<body>
	<div class="navigation">
		<a href="globalPage.php"><b>LOGOUT</b></a>
		<a href="about-admin.php"><b>PROFILE</b></a>
		<a href="laporan.php"><b>LAPORAN</b></a>
		<a href="add_edit.php"><b>ADD PEGAWAI</b></a>
	</div>
	<div class="box">
		<h2 align="center">Laporan Absensi Pegawai</h2>
		<table>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>POSISI</th>
				<th>JABATAN</th>
				<th>TANGGAL</th>
				<th>MASUK</th>
				<th>PULANG</th>
				<th>KETERANGAN</th>
				<th>LEMBUR</th>
			</tr>
			<?php 
			include 'koneksi.php';
			$sql=mysqli_query($db, "SELECT p.*, m.*, a.*, l.* FROM  pegawai p LEFT JOIN absenmasuk m USING(idPegawai) LEFT JOIN absenpulang a USING(idPegawai) LEFT JOIN laporan l USING(idPegawai) ORDER BY namaPegawai");
			$no=1;
			while ($row=mysqli_fetch_array($sql)) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['namaPegawai']; ?></td>
				<td><?php echo $row['posisiPegawai']; ?></td>
				<td><?php echo $row['jabatanPegawai']; ?></td>
				<td><?php echo $row['tanggalMasuk']; ?></td>
				<td><?php echo $row['masuk']; ?></td>
				<td><?php echo $row['pulang']; ?></td>
				<td><?php echo $row['keterangan']; ?></td>
				<td><?php echo $row['lembur']; ?></td>
			</tr>
			<?php } ?>
		</table> 
	</div>
</body>
</html>