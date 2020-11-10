<?php
	if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$error = false; 

		if(file_exists('users/'.$username. '.xml'))
		{
			$xml = new SimpleXMLElement('users/'.$username. '.xml', 0, true);
			if($password == $xml->password)
			{
				session_start();
				$_SESSION['username'] = $username;
				header ('Location: dashboard.php');
				die;  
			}



		}

		$error = true; 
	} 

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<form method="POST" action="">
		<p>Username: <input type="text" name="username"></p>
		<p>Password: <input type="password" name="password"></p>
		<input type="submit" value="Login" name="login">
	</form>

	<a href="register.php">Register</a>

</body>
</html>