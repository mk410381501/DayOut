<?php
include ('config.php');

session_start();
$industry = mysql_real_escape_string($_POST['industry']);
$reason = mysql_real_escape_string($_POST['reason']);

$business_name = mysql_real_escape_string($_POST['b_name']);
$number = mysql_real_escape_string($_POST['number']);
$address1 = mysql_real_escape_string($_POST['address1']);
$address2 = mysql_real_escape_string($_POST['address2']);
$address3 = mysql_real_escape_string($_POST['address3']);
$address4 = mysql_real_escape_string($_POST['address4']);

$finish = $_POST['submit'];
		
		$insert1 = mysql_query("INSERT INTO Services (user_id, industry, reason) VALUES (".$_SESSION['id'].", '$industry', '$reason')");
		$insert2 = mysql_query("INSERT INTO BusinessInfo (user_id, b_name, number, address1, address2, address3, address4) VALUES (".$_SESSION['id'].", '$business_name', '$number', '$address1', '$address2', '$address3', '$address4')");
		
		session_destroy();
		header('Location: /Home_Page.php');

?>