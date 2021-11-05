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
	<title>Admin Add and Edit</title>
	<link rel="stylesheet" type="text/css" href="and_edit.css">
</head>
<body>
	<div class="navigation">
		<a href="globalPage.php"><b>LOGOUT</b></a>
		<a href="about-admin.php"><b>PROFILE</b></a>
		<a href="laporan.php"><b>LAPORAN</b></a>
		<a href="add_edit.php"><b>ADD PEGAWAI</b></a>
	</div>
	<div class="add">
		<div class="sub-add">
			<form method="POST" action="tambah.php">
				<h3 align="center">ADD PEGAWAI</h3>
			<table>
				<tr>
					<td id="kesatu">Username</td>
					<td id="kedua"><input type="text" name="username" placeholder="Username" required=""></td>
					<td id="kesatu">Jabatan</td>
					<td id="kedua"><input type="text" name="jabatan" placeholder="Jabatan" required=""></td>
				</tr>
				<tr>
					<td id="kesatu">Password</td>
					<td id="kedua"><input type="password" name="psw" placeholder="Password" required=""></td>
					<td id="kesatu">Jenis Kelamin</td>
					<td>
						<input type="radio" name="gender" value="LAKI-LAKI" required="">LAKI-LAKI
						<input type="radio" name="gender" value="PEREMPUAN" required="">PEREMPUAN
					</td>
				</tr>
				<tr>
					<td id="kesatu">NIK Pegawai</td>
					<td id="kedua"><input type="text" name="nik" placeholder="NIK 16 digit..." required=""></td>
					<td id="kesatu">No. Telepon</td>
					<td id="kedua"><input type="text" name="telp" placeholder="Nomor Telepon" required=""></td>
				</tr>
				<tr>
					<td id="kesatu">Nama Lengkap</td>
					<td id="kedua"><input type="text" name="nama" placeholder="Nama Lengkap" required=""></td>
					<td id="kesatu">E-mail</td>
					<td id="kedua"><input type="email" name="email" placeholder="E-mail" required=""></td>
				</tr>
				<tr>
					<td id="kesatu">Posisi Pegawai</td>
					<td>
						<input type="radio" name="posisi" value="ADMIN" required>ADMIN
						<input type="radio" name="posisi" value="KARYAWAN" required>KARYAWAN
					</td>
				</tr>
			</table>
			<button id="btn1">Tambah</button>
		</form>
		</div>
	</div>
	<div class="show">
		<div class="sub-show">
			<h3 align="center">DATA PEGAWAI</h3>
			<form>
			<table width="100%">
				<tr>
					<th>NO</th>
					<th>USERNAME</th>
					<th>NIK</th>
					<th>NAMA</th>
					<th>GENDER</th>
					<th>POSISI</th>
					<th>JABATAN</th>
					<th>EMAIL</th>
					<th>NO.TELP</th>
					<th>AKSI</th>	
				</tr>
				<?php 
				include "koneksi.php";
				$pegawai=mysqli_query($db, "SELECT * FROM pegawai");
				$no=1;
				foreach ($pegawai as $row) {
				
				?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['nikPegawai']; ?></td>
					<td><?php echo $row['namaPegawai']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['posisiPegawai']; ?></td>
					<td><?php echo $row['jabatanPegawai']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['notelp']; ?></td>
					<td>
						<button id="edit"><a href="editpage.php?id=<?php echo $row['idPegawai']; ?>">EDIT</a></button>
						<button id="hapus"><a href="hapus.php?id=<?php echo $row['idPegawai']; ?>">HAPUS</a></button>
					</td>
				</tr>
			<?php 
				$no++;
				}
			?>
			</table>
		</form>
		</div>
	</div>
</body>
</html>