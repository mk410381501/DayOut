<?php

include('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

	$query = mysql_query("SELECT * FROM `User` WHERE email = '$email' and password = '$password'");
	$numrows = mysql_num_rows($query);
		
	if($numrows!=0){
		header('Location: /Merchants.html');
		
	}  else {
		echo"That user doesn't exist!";
	}
	
?>