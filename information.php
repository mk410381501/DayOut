<?php
include ('config.php');

$industry = $_POST['industry'];
$reason = $_POST['reason'];

$business_name = $_POST['b_name'];
$number = $_POST['number'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$address3 = $_POST['address3'];
$address4 = $_POST['address4'];

$finish = $_POST['submit'];

if($finish){
		$insert = mysql_query("INSERT INTO Services (industry, reason) VALUES ('$industry', '$reason')");
		$insert = mysql_query("INSERT INTO BusinessInfo (b_name, number, address1, address2, address3, address4) VALUES ('$business_name', '$number', '$address1', '$address2', '$address3', '$address4')");
		
		header('Location: /Home_Page.php');
}

?>