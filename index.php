<!DOCTYPE html>
<html>
<head>
<title>Simple Chat using PHP/MySQLi, Ajax/JQuery</title>
</head>
<body>
<style>
	body{
		background-image: url("image/green.jpg");
		background-repeat: no-repeat;
		background-size: 2000px;
	}
</style>
<center>
	<br> <br> <br> <br> <br>
<h2> <font face="Times New Roman" size="10">Login Here</h2> </font>
<form method="POST" action="login.php"><br> <br>
 Username: <input type="text" name="username"> <br> <br> 
 Password: <input type="password" name="password"> <br><br>
 <input type="submit" value="Login" style="border-color: green;">
</form><br>
<?php
	session_start();
	if (isset($_SESSION['message'])){
	echo $_SESSION['message'];
	unset ($_SESSION['message']);
	}
?>
 </center>
</body>
</html>