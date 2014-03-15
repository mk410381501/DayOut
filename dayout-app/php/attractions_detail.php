<?php

include "../../config.php";

header('Content-type: application/json');

$summary = mysql_query ('SELECT attraction.id AS ID, attraction.image_name AS IMAGE, attraction.attraction_name AS NAME, 
bus.b_name AS BUSINESS, attraction.attraction_price AS PRICE, attraction.attraction_day AS DAY, 
attraction.attraction_month AS MONTH, attraction.attraction_year AS YEAR, attraction.attraction_info AS INFO, 
attraction.attraction_address1 AS ADDRESS1, attraction.attraction_address2 AS ADDRESS2,
attraction.attraction_address3 AS ADDRESS3, attraction.attraction_address4 AS ADDRESS4,
attraction.attraction_contact AS CONTACT, attraction.attraction_booking AS BOOKING 
FROM Attractions AS attraction LEFT JOIN BusinessInfo AS bus ON attraction.user_id = bus.user_id 
WHERE attraction.id = '.$_GET["attraction_id"]);

$result_formatted = array();

$result = mysql_fetch_array($summary);
 	$result_formatted['id'] = mysql_real_escape_string($result["ID"]);
	$result_formatted['attraction_name'] = mysql_real_escape_string($result["NAME"]);
	$result_formatted['attraction_price'] = mysql_real_escape_string($result["PRICE"]);
	$result_formatted['bname'] = mysql_real_escape_string($result["BUSINESS"]);
	
	$result_formatted['attraction_day'] = mysql_real_escape_string($result["DAY"]);
	$result_formatted['attraction_month'] = mysql_real_escape_string($result["MONTH"]);
	$result_formatted['attraction_year'] = mysql_real_escape_string($result["YEAR"]);
	
	$result_formatted['attraction_address1'] = mysql_real_escape_string($result["ADDRESS1"]);
	$result_formatted['attraction_address2'] = mysql_real_escape_string($result["ADDRESS2"]);
	$result_formatted['attraction_address3'] = mysql_real_escape_string($result["ADDRESS3"]);
	$result_formatted['attraction_address4'] = mysql_real_escape_string($result["ADDRESS4"]);
	
	$result_formatted['attraction_info'] = mysql_real_escape_string($result["INFO"]);
	$result_formatted['attraction_contact'] = mysql_real_escape_string($result["CONTACT"]);
	$result_formatted['attraction_booking'] = mysql_real_escape_string($result["BOOKING"]);
	$result_formatted['image_name'] = mysql_real_escape_string($result["IMAGE"]);




echo json_encode($result_formatted);

?>