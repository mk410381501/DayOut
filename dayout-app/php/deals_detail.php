<?php

include "../../config.php";

header('Content-type: application/json');

$summary = mysql_query ('SELECT deal.id AS ID, deal.image_name AS IMAGE, deal.item_name AS NAME, bus.b_name AS BUSINESS, 
deal.item_price AS PRICE, deal.item_day AS DAY, deal.item_month AS MONTH, deal.item_year AS YEAR, 
deal.item_info AS INFO, deal.item_contact AS CONTACT, deal.item_booking AS BOOKING FROM Deals 
AS deal LEFT JOIN BusinessInfo AS bus ON deal.user_id = bus.user_id WHERE  deal.id = '.$_GET["deal_id"]);

$result_formatted = array();

$result = mysql_fetch_array($summary);
 	$result_formatted['id'] = mysql_real_escape_string($result["ID"]);
	$result_formatted['item_name'] = mysql_real_escape_string($result["NAME"]);
	$result_formatted['item_price'] = mysql_real_escape_string($result["PRICE"]);
	$result_formatted['bname'] = mysql_real_escape_string($result["BUSINESS"]);
	
	$result_formatted['item_day'] = mysql_real_escape_string($result["DAY"]);
	$result_formatted['item_month'] = mysql_real_escape_string($result["MONTH"]);
	$result_formatted['item_year'] = mysql_real_escape_string($result["YEAR"]);
	$result_formatted['item_info'] = mysql_real_escape_string($result["INFO"]);
	$result_formatted['item_contact'] = mysql_real_escape_string($result["CONTACT"]);
	$result_formatted['item_booking'] = mysql_real_escape_string($result["BOOKING"]);
	$result_formatted['image_name'] = mysql_real_escape_string($result["IMAGE"]);




echo json_encode($result_formatted);

?>
