<?php

include('config.php');

$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['password']);
$submit = mysql_real_escape_string($_POST['submit']);

	$query = mysql_query("SELECT * FROM `User` WHERE email = '$email' AND password = md5('$password')");
	$data = mysql_fetch_array($query);
		
	if(mysql_num_rows($query)){
		session_start();
		$_SESSION['id'] = $data['id'];
		header('Location: /dashboard.php');
		exit;
		
	}  else {   
		
		echo"That user doesn't exist...";
	}
	
?>