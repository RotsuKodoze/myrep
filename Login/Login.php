<?php
	include("process2.php");
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
		<form id="box" action="" method="POST">
				<!--<label>Username:</label>
				<input type="text" placeholder="Username" name="user" id="user"><br/><br/>-->
				<!--<label>Password:</label>
				<input type="password" placeholder="Password" name="pass" id="pass"><br/><br/>
				<input type="submit" value="Login" name="submit">-->
			<h1>Login</h1>
			<p>
				<input type="text" placeholder="Username" name="user" id="user" />
			</p>
			<p>
				<input type="password" placeholder="Password" name="pass" id="pass" />
			</p>
			<p>
				<input type="submit" value="Login" name="submit" />
			</p>

		</form>

<span><?php echo $error; ?></span>
</body>
</html>