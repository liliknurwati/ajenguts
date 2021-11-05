<?php 
include 'koneksi.php';
$id=$_GET['id'];
$pegawai = mysqli_query($db, "SELECT*FROM pegawai WHERE idPegawai='$id'");
$row=mysqli_fetch_array($pegawai);
function active_radio_button($value, $input){
	$result = $value==$input?'checked':'';
	return $result;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Page</title>
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
			<form method="POST" action="proses_edit.php">
				<input type="hidden" value="<?php echo $row['idPegawai']; ?>" name='idPegawai'>
				<h3 align="center">EDIT PEGAWAI</h3>
			<table>
				<tr>
					<td id="kesatu">Username</td>
					<td id="kedua"><input type="text" name="username" placeholder="Username" value="<?php echo $row['username'];?>"></td>
					<td id="kesatu">Jabatan</td>
					<td id="kedua"><input type="text" name="jabatan" placeholder="Jabatan" value="<?php echo $row['jabatanPegawai'];?>"></td>
				</tr>
				<tr>
					<td id="kesatu">Password</td>
					<td id="kedua"><input type="password" name="psw" placeholder="Password" value="<?php echo $row['password'];?>"></td>
					<td id="kesatu">Jenis Kelamin</td>
					<td>
						<input type="radio" name="gender" value="LAKI-LAKI" <?php echo active_radio_button("LAKI-LAKI", $row['gender']); ?>>LAKI-LAKI
						<input type="radio" name="gender" value="PEREMPUAN" <?php echo active_radio_button("PEREMPUAN", $row['gender']); ?>>PEREMPUAN
					</td>
				</tr>
				<tr>
					<td id="kesatu">NIK Pegawai</td>
					<td id="kedua"><input type="text" name="nik" placeholder="NIK 16 digit..." value="<?php echo $row['nikPegawai'];?>"></td>
					<td id="kesatu">No. Telepon</td>
					<td id="kedua"><input type="text" name="telp" placeholder="Nomor Telepon" value="<?php echo $row['notelp'];?>"></td>
				</tr>
				<tr>
					<td id="kesatu">Nama Lengkap</td>
					<td id="kedua"><input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $row['namaPegawai'];?>"></td>
					<td id="kesatu">E-mail</td>
					<td id="kedua"><input type="email" name="email" placeholder="E-mail" value="<?php echo $row['email'];?>"></td>
				</tr>
				<tr>
					<td id="kesatu">Posisi Pegawai</td>
					<td>
						<input type="radio" name="posisi" value="ADMIN" <?php echo active_radio_button("ADMIN", $row['posisiPegawai']); ?>>ADMIN
						<input type="radio" name="posisi" value="KARYAWAN" <?php echo active_radio_button("KARYAWAN", $row['posisiPegawai']);?>>KARYAWAN
					</td>
				</tr>
			</table>
			<button id="btn1" type="submit" value="simpan">UBAH</button>
		</form>
		</div>
	</div>
			</table>
		</form>
		</div>
	</div>
</body>
</html>