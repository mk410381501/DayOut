<?php

include "../../config.php";

header('Content-type: application/json');

$deals = mysql_real_escape_string($_POST['deals']);
$events = mysql_real_escape_string($_POST['events']);
$attractions = mysql_real_escape_string($_POST['attractions']);
$budget = mysql_real_escape_string($_POST['budget']);

echo "Budget: " . $budget . "\n";

		
	if ($deals){
	
$dealsummary = mysql_query ('SELECT deal.item_name AS NAME, deal.image_name AS IMAGE, deal.item_price AS PRICE, deal.id AS ID, bus.b_name AS BUSINESS
FROM Deals AS deal INNER JOIN BusinessInfo AS bus ON deal.user_id = bus.user_id WHERE deal.item_price <= '.$budget);

$result_d = array();
$d = 0;
	
while($result = mysql_fetch_array($dealsummary)) {
	$result_d[$d] = array();
 	$result_d[$d]['id'] = mysql_real_escape_string($result["ID"]);
	$result_d[$d]['item_name'] = mysql_real_escape_string($result["NAME"]);
	$result_d[$d]['item_price'] = mysql_real_escape_string($result["PRICE"]);
	$result_d[$d]['bname'] = mysql_real_escape_string($result["BUSINESS"]);
	$result_d[$d]['image_name'] = mysql_real_escape_string($result["IMAGE"]);
	$d++;
}
echo json_encode($result_d);

echo "\n";

	}
		
	if ($events){
	
$eventsummary = mysql_query ('SELECT event.event_name AS NAME, event.image_name AS IMAGE, event.event_price AS PRICE, 
event.id AS ID, bus.b_name AS BUSINESS FROM Events AS event INNER JOIN BusinessInfo AS bus 
ON event.user_id = bus.user_id WHERE event.event_price <= '.$budget);

$result_e = array();
$e = 0;

while($result_event = mysql_fetch_array($eventsummary)) {
	$result_e[$e] = array();
 	$result_e[$e]['id'] = mysql_real_escape_string($result_event["ID"]);
	$result_e[$e]['event_name'] = mysql_real_escape_string($result_event["NAME"]);
	$result_e[$e]['event_price'] = mysql_real_escape_string($result_event["PRICE"]);
	$result_e[$e]['bname'] = mysql_real_escape_string($result_event["BUSINESS"]);
	$result_e[$e]['image_name'] = mysql_real_escape_string($result_event["IMAGE"]);
	$e++;
}
echo json_encode($result_e);

echo "\n";	
	
	}
		
	if ($attractions){

$attractionsummary = mysql_query ('SELECT attraction.attraction_name AS NAME, attraction.image_name AS IMAGE, 
attraction.attraction_price AS PRICE, attraction.id AS ID, bus.b_name AS BUSINESS FROM Attractions AS attraction 
INNER JOIN BusinessInfo AS bus ON attraction.user_id = bus.user_id WHERE attraction.attraction_price <= '.$budget);

$result_formatted = array();
$a = 0;

while($result_attraction = mysql_fetch_array($attractionsummary)) {
	$result_a[$a] = array();
 	$result_a[$a]['id'] = mysql_real_escape_string($result_attraction["ID"]);
	$result_a[$a]['attraction_name'] = mysql_real_escape_string($result_attraction["NAME"]);
	$result_a[$a]['attraction_price'] = mysql_real_escape_string($result_attraction["PRICE"]);
	$result_a[$a]['bname'] = mysql_real_escape_string($result_attraction["BUSINESS"]);
	$result_a[$a]['image_name'] = mysql_real_escape_string($result_attraction["IMAGE"]);
	$a++;
}
echo json_encode($result_a);

echo "\n";

	}
	
?>
