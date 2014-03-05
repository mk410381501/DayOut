<?php

include "../../config.php";

header('Content-type: application/json');

$summary = mysql_query ('SELECT event.id AS ID, event.image_name AS IMAGE, event.event_name AS NAME, bus.b_name AS BUSINESS, 
event.event_price AS PRICE, event.event_day AS DAY, event.event_month AS MONTH, event.event_year AS YEAR, 
event.event_info AS INFO, event.event_venue AS VENUE, event.event_contact AS CONTACT, event.event_online AS BOOKING 
FROM Events AS event LEFT JOIN BusinessInfo AS bus ON event.user_id = bus.user_id WHERE event.id = '.$_GET["event_id"]);

$result_formatted = array();

$result = mysql_fetch_array($summary);
 	$result_formatted['id'] = mysql_real_escape_string($result["ID"]);
	$result_formatted['event_name'] = mysql_real_escape_string($result["NAME"]);
	$result_formatted['event_price'] = mysql_real_escape_string($result["PRICE"]);
	$result_formatted['bname'] = mysql_real_escape_string($result["BUSINESS"]);
	
	$result_formatted['event_day'] = mysql_real_escape_string($result["DAY"]);
	$result_formatted['event_month'] = mysql_real_escape_string($result["MONTH"]);
	$result_formatted['event_year'] = mysql_real_escape_string($result["YEAR"]);
	$result_formatted['event_venue'] = mysql_real_escape_string($result["VENUE"]);
	$result_formatted['event_info'] = mysql_real_escape_string($result["INFO"]);
	$result_formatted['event_contact'] = mysql_real_escape_string($result["CONTACT"]);
	$result_formatted['event_online'] = mysql_real_escape_string($result["BOOKING"]);
	$result_formatted['image_name'] = mysql_real_escape_string($result["IMAGE"]);


echo json_encode($result_formatted);

?>