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
	.profile-box{
		margin-left: 80px;
		margin-right: 80px;
		padding: 30px;
		background-color: #f1f1f1;
		box-shadow: 1px 1px 2px 2px grey;
		border-radius: 10px;
	}
	table {
		margin-left: 100px;
		width: 100%;
	}
	.table-prof{
		width: 60%;
	}
	.table-prof td{
		background-color: white;
	}
	td{
		padding-top: 10px;
		padding-right: 10px;
		padding-bottom: 10px;
		padding-left: 10px;
		font-weight: bold;
	}
	.sub-box1{
		float: left;
	}
	.sub-box2{
		float: right;
	}
	<?php
	include 'koneksi.php';
	$query = mysqli_query($db, "SELECT * FROM pegawai WHERE username='$_SESSION[username]'");
	$row=mysqli_fetch_array($query);
	?>
	.circle{
		width: 250px;
		height: 150px;
		padding-top: 100px;
		text-align: center;
		background-color: <?php if($row['posisiPegawai']=='ADMIN'){
									echo "darkblue";
								}else if ($row['posisiPegawai']=='KARYAWAN') {
									echo "blue";
								} ?>;
		color: white;
		font-size: 40px;
		border-radius: 100%;
	}
</style>
<body>
	<nav>
		<?php 
								if($row['posisiPegawai']=='ADMIN'){
									echo "<a href='globalPage.php'><b>LOGOUT</b></a>
											<a href='about-admin.php'><b>PROFILE</b></a>
											<a href='laporan.php'><b>LAPORAN</b></a>
											<a href='add_edit.php'><b>ADD PEGAWAI</b></a>";
								}else if ($row['posisiPegawai']=='KARYAWAN') {
									echo "<a href='globalPage.php'><b>LOGOUT</b></a>
											<a href='about-admin.php'><b>PROFILE</b></a>
											<a href='absensiKaryawan.php'><b>ABSEN</b></a>";
								}
							 ?>
	</nav><br>
	<div class="profile-box">
		<h2 align="center">PROFILE PEGAWAI</h2>
		<hr>
			<table>
				<tr>
					<td width="20%">
						<div class="circle">
							<?php 
								if($row['posisiPegawai']=='ADMIN'){
									echo "ADMIN";
								}else if ($row['posisiPegawai']=='KARYAWAN') {
									echo "KARYAWAN";
								}
							 ?>
						</div>
					</td>
					<td width="60%">
						<table class="table-prof">
							<tr>
								<td>Username </td>
							<td><?php  echo $row['username'];?></td>
							</tr>
							<tr>
								<td>Nama Pegawai</td>
								<td><?php echo $row['namaPegawai']; ?></td>
							</tr>
							<tr>
								<td>NIK</td>
								<td><?php echo $row['nikPegawai']; ?></td>
							</tr>
							<tr>
								<td>Jabatan</td>
								<td><?php echo $row['jabatanPegawai']; ?></td>
							</tr>
							<tr>
								<td>Gender</td>
								<td><?php echo $row['gender']; ?></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><?php echo $row['email']; ?></td>
							</tr>
							<tr>
								<td>No. Telp</td>
								<td><?php echo $row['notelp']; ?></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<hr>
	</div>
	
</body>
</html>