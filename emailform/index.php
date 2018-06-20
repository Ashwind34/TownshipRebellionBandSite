<?php

session_start();

require_once('SSlist/pdo_connect.php');

if(!empty($_POST['userpass']) && !empty($_POST['username'])) {
	
//PDO prepared statement
//MUST CHANGE DB SOURCE TABLE
	$record = $conn->prepare("SELECT username, password, id FROM usertable WHERE username = :username"); 
	$record->bindParam(':username',$_POST['username']);
	$record->execute();
	
//create associative array from query
	$result = $record->fetch(PDO::FETCH_ASSOC);
	
//check password entered by user against db password, set session if match
	if (COUNT($result) > 0 && password_verify($_POST['userpass'], $result['password'])) {
	
		$_SESSION['id'] = $result['id'];
		header("Location: SSlist/emailform.php");
	
	} else { 

		echo '<br><br><p>Email or password is incorrect, please try again</p><br>';
		print_r($result);
			
	}
}
?>


<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<style>

	p	{
		text-align:center;
		}
	
</style>

<body>

<br>
<br>
<p style="font-size:25px"><b>PLEASE LOGIN</b></p>
<br>
<br>

<form action="index.php" method="post">

	<p>User Name  <input type="text" name="username"></p>
	<br>
	<br>	
	<p>Password  <input type="password" name="userpass"></p>
	<br>
	<br>	
	<p><input type="submit" name="login" value="Login"></p>
	<br>
	<br>
	<p><a href="SSList/register.php">Register</a></p>

</form>
</body>
</html>