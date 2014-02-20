<?php
include ('config.php');

$email = mysql_real_escape_string($_POST['email']);
$confirm_email = mysql_real_escape_string($_POST['confirm_email']);
$password = mysql_real_escape_string(($_POST['password']));
$submit = $_POST['submit'];


if($submit){
	
	if($email==$confirm_email) {
		$insert = mysql_query("INSERT INTO User (email, password) VALUES ('$email', md5('$password'))");
		
		// $query = mysql_query("SELECT * FROM `User` WHERE email = '$email' AND password = md5('$password')");
		// $data = mysql_fetch_assoc($query);

		session_start();
		$_SESSION['id'] = mysql_insert_id();
		
		header('Location: /Update_Information.php?');
	}
	
	else {
		echo"PROBLEM!";
	}
	
}

?>