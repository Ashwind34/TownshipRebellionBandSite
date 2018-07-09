<!DOCTYPE HTML>
<html>

<head>
<meta name="viewport" content="width=device-width">
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
p
{
	text-align:center;
}
</style>
<body>

<?php

require_once('pdo_connect.php');

	//Check to make sure form is empty

if (!empty($_POST['register'])) {
	
	//check to make sure password is confirmed
	
	if ($_POST['userpass'] == $_POST['confirmpass']) {
		
		//Prepared Statement 
		
		$query = "INSERT INTO usertable (username, password) VALUES (:username, :password)";
		
		$submit = $conn->prepare($query);
		
		//bind parameters
		
		$submit->BindParam(':username', $_POST['username']);
		$submit->BindParam(':password', password_hash($_POST['userpass'], PASSWORD_BCRYPT));
								
		//Submit query to database

			if ($submit->execute()) {
				echo '<br><p style="font-size:20px">Player Updated Successfully</p>';
												
			} else {
				
				echo '<br><p style="font-size:20px">Problem with Registration.  Please try again.</p>';
				echo '<br><p style="font-size:20px;"><a href="register.php">Try Again</a></p>';
								
			}
		
	} else {
		
		echo '<br><p style="font-size:20px">Passwords to not match.  Please try again.</p>';
		echo '<br><p style="font-size:20px;"><a href="register.php">Try Again</a></p>';
					
		}
	}
		
	
?>


<br>
<p style="font-size:25px"><b>PLEASE REGISTER</b></p>

<form action="register.php" method="post">

	<P>User Name <input type="text" name="username"></p><br>
	
	<p>Your Password <input type="password" name="userpass"></p><br>
	
	<p>Confirm Password <input type="password" name="confirmpass"></p><br> 
	
	<p><input type="submit" name="register" value="Register"></p><br>
	
	<p><a href="../index.php">Return to Home Page</a></p>
<form>
</body>
</html>
