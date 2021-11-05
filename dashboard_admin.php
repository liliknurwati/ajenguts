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
	<title>Dashboard Admin</title>
	<link rel="stylesheet" type="text/css" href="dashoard.css">
</head>
<body>
	<nav>
		<a href="globalPage.php"><b>LOGOUT</b></a>
	</nav><br>
</body>
</html>