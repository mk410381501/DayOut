<?php
include ('config.php');

$email = $_POST['email'];
$confirm_email = $_POST['confirm_email'];
$password = md5($_POST['password']);
$submit = $_POST['submit'];


if($submit){
	
	if($email==$confirm_email) {
		$insert = mysql_query("INSERT INTO User (email, password) VALUES ('$email', '$password')");
		header('Update_Information.html');
	}
	
	else {
		echo"PROBLEM!";
	}
	
}

?>