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
<body>
	<form action="" method="POST">
		<?php 
			echo "<h1>Selamat Datang, ".$_SESSION['username']."!". "</h1>";
		?>
		<a href="globalPage.php"><h3>LOGOUT</h3></a>
	</form>
</body>
</html>