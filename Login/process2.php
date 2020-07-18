<?php 
	$error = '';

	$host = 'localhost:3307';

	if (isset($_POST['submit'])) {
		if (empty($_POST['user']) || empty($_POST['pass'])) {
			//$error = "Username or Password is invalid";
			header("Location: Error.php");
		}
	else
	{
		$user = $_POST['user'];
		$pass = $_POST['pass'];

		//$conn = mysqli_connect("localhost", "root", "");
		$conn = mysqli_connect($host, "root", "");

		$db = mysqli_select_db($conn, "webtry_db");
		$query = mysqli_query($conn, "select * from users where username = '$user' and password = '$pass'");
		$rows = mysqli_num_rows($query);
		if ($rows == 1) {
			header("Location: Welcome.php");
		}
		else
		{
			header("Location: Error.php");
		}
		mysqli_close($conn);
	}
	}
 ?>