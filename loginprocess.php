<?php

include('config.php');

$email = $_POST['email'];
$password = ($_POST['password']);

	$query = mysql_query("SELECT * FROM `User` WHERE email = '$email' AND password = '$password'");
	$data = mysql_num_rows($query);
		
	if(mysql_num_rows($query)){
		session_start();
		$_SESSION['id'] = $data['id'];
		$_SESSION['email'] = $data['email'];
		header('Location: /dashboard.php');
		exit;
		
	}  else {
		echo"That user doesn't exist!";
	}
	
?>