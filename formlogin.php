<html>
<head>
<title>PAI | Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="kotak_login">
	<center>
	<img src="assets/img/logopandawa.png" alt="Logo Pandawa Agri" height="50" width="120">
	</center>
	<p class="mt-3 tulisan_login">Login Form</p>
 
	<form action="login.php" method="post">
		<label>Username</label>
		<input type="text" name="username" class="form_login" placeholder="Username">
 
		<label>Password</label>
		<input type="password" name="password" class="form_login" placeholder="Password">
 
		<input type="submit" class="btn btn-success font-weight-bold tombol_login" value="LOGIN">
 
		<br/>
		<br/>
		<center>
			<a class="btn btn-dark link" href="index.php">Back</a>
		</center>
	</form>
	
</div>
</body>
</html>