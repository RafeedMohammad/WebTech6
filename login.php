<?php
	if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(file_exists('users/'.$username. '.xml'))
		{
			$xml = new SimpleXMLElement('test'.$username. '.xml', 0, true);
			print_r($xml);
		}
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

</body>
</html>