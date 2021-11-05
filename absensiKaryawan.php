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
	.box{
		margin-left: 35%;
		margin-right: 35%;
		background: #f1f1f1;
		height: 80px;
		text-align: center;
		font-size: 60px;
		padding: 10px;
		border: 2px solid black;
		box-shadow: 7px 7px;
	}
	.box-absen{
		margin-left: 30%;
		margin-right: 30%;
	}
	#in{
		height: 50px;
		width: 150px;
		border-radius: 20px;
		background: green;
		border: none;
		font-size: 30px;
		float: left;
	}
	#in a{
		text-decoration: none;
		color: white;
	}
	#out {
		height: 50px;
		width: 150px;
		color: white;
		border-radius: 20px;
		background: blue;
		border: none;
		font-size: 30px;
		float: right;
	}
	#out a{
		text-decoration: none;
		color: white;
	}
	#in:hover {
		background: red;
	}
	#out:hover {
		background: red;
	}
	.detail	{
		padding: 30px;
		text-align: center;
		background: #f1f1f1;
	}
</style>
<body>
	<nav>
		<a href="globalPage.php"><b>LOGOUT</b></a>
		<a href="about-admin.php"><b>PROFILE</b></a>
		<a href="absensiKaryawan.php"><b>ABSEN</b></a>
	</nav><br>
	<?php
	include 'koneksi.php';
	$query = mysqli_query($db, "SELECT * FROM pegawai WHERE username='$_SESSION[username]'");
	$row=mysqli_fetch_array($query);
	?>
	<h2 align="center">Selamat Datang
		<font color="red"><?php echo $row['namaPegawai'];?></font>
	</h2>
	<h3 align="center"><span id="tanggalwaktu"></span><h3>
			<script>
			var tw = new Date();
			if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
			else (a=tw.getTime());
			tw.setTime(a);
			var tahun= tw.getFullYear ();
			var hari= tw.getDay ();
			var bulan= tw.getMonth ();
			var tanggal= tw.getDate ();
			var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
			var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
			document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
			</script>
	<div class="box">
		<script>
			let d = new Date();
			document.write(d.getHours()+":"+d.getMinutes()+":"+d.getSeconds());
		</script>
	</div>
	<br><br>
	<div class="box-absen">
		<button name="in" id="in">
			<a href="proses-absen-masuk.php?id=<?php echo $_SESSION['idPegawai'];?>">MASUK</a>
		</button>
		<button name="out" id="out">
			<a href="proses-absen-pulang.php?id=<?php echo $_SESSION['idPegawai'];?>">PULANG</a>
		</button>
	</div>
	<br><br><br>
	<hr>
	<br>
	<div class="detail"><a href="data-absen.php?id=<?php echo $_SESSION['idPegawai']; ?>">Lihat Data Absen</a></div>
	</body>
</html>