<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style_lg.css">
</head>
<body>
	<header>
		<h1>Web Page X Company</h1>
	</header>
	<section>
		<form action="proses_login.php" method="POST">
		<div class="container">
			<h2>LOGIN</h2>
			<p>Please fill in this form to enter the web page</p>
			<hr>
			<label><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="username" >
			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" >
			<hr>
			<button type="submit" class="registerbtn" name="submit">Login</button>
		</div> 
	</form>
	<img src="employee.png" id="gambar">
	</section>
	</div>
</body>
</html>