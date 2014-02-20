<?php

include('config.php');

$email = $_POST['email'];
$password = ($_POST['password']);
$submit = ($_POST['submit']);

	$query = mysql_query("SELECT * FROM `User` WHERE email = '$email' AND password = md5('$password')");
	$data = mysql_num_rows($query);
		
	if(mysql_num_rows($query)){
		session_start();
		$_SESSION['id'] = $data['id'];
		header('Location: /dashboard.php');
		exit;
		
	}  else {   
		
		echo"That user doesn't exist...";
	}
	
?>