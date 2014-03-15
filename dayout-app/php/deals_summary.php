<?php

include "../../config.php";

header('Content-type: application/json');

$summary = mysql_query ('SELECT deal.item_name AS NAME, deal.image_name AS IMAGE, deal.item_price AS PRICE, deal.id AS ID, bus.b_name AS BUSINESS
FROM Deals AS deal INNER JOIN BusinessInfo AS bus ON deal.user_id = bus.user_id ORDER BY deal.id DESC');

$result_formatted = array();
$i = 0;

while($result = mysql_fetch_array($summary)) {
	$result_formatted[$i] = array();
 	$result_formatted[$i]['id'] = mysql_real_escape_string($result["ID"]);
	$result_formatted[$i]['item_name'] = mysql_real_escape_string($result["NAME"]);
	$result_formatted[$i]['item_price'] = mysql_real_escape_string($result["PRICE"]);
	$result_formatted[$i]['bname'] = mysql_real_escape_string($result["BUSINESS"]);
	$result_formatted[$i]['image_name'] = mysql_real_escape_string($result["IMAGE"]);
	$i++;
}



echo json_encode($result_formatted);

?>
