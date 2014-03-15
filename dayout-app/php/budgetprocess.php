<?php

include "../../config.php";

header('Content-type: application/json');

$deals = ($_POST['deals']);
$events = ($_POST['events']);
$attractions = ($_POST['attractions']);
$budget = mysql_real_escape_string($_POST['budget']);


$result_d = array();
$d = 0;		
	
if ($deals == "true"){
	
	$dealsummary = mysql_query ('SELECT deal.item_name AS NAME, deal.image_name AS IMAGE, deal.item_price AS PRICE, deal.id AS ID, bus.b_name AS BUSINESS
		FROM Deals AS deal INNER JOIN BusinessInfo AS bus ON deal.user_id = bus.user_id WHERE deal.item_price <= '.$budget);

	while($result = mysql_fetch_array($dealsummary)) {
		$result_d[$d] = array();
		$result_d[$d]['id'] = ($result["ID"]);
		$result_d[$d]['item_name'] = ($result["NAME"]);
		$result_d[$d]['item_price'] = ($result["PRICE"]);
		$result_d[$d]['bname'] = ($result["BUSINESS"]);
		$result_d[$d]['image_name'] = ($result["IMAGE"]);
		$result_d[$d]['item_type'] = "DEAL";
		$d++;
	}
}
		
if ($events == "true"){
	
	$eventsummary = mysql_query ('SELECT event.event_name AS NAME, event.image_name AS IMAGE, event.event_price AS PRICE, 
	event.id AS ID, bus.b_name AS BUSINESS FROM Events AS event INNER JOIN BusinessInfo AS bus 
	ON event.user_id = bus.user_id WHERE event.event_price <= '.$budget);

	while($result_event = mysql_fetch_array($eventsummary)) {
		$result_d[$d] = array();
		$result_d[$d]['id'] = ($result_event["ID"]);
		$result_d[$d]['item_name'] = ($result_event["NAME"]);
		$result_d[$d]['item_price'] = ($result_event["PRICE"]);
		$result_d[$d]['bname'] = ($result_event["BUSINESS"]);
		$result_d[$d]['image_name'] = ($result_event["IMAGE"]);
		$result_d[$d]['item_type'] = "EVENT";
		$d++;
	}	
}
		
if ($attractions == "true"){

	$attractionsummary = mysql_query ('SELECT attraction.attraction_name AS NAME, attraction.image_name AS IMAGE, 
	attraction.attraction_price AS PRICE, attraction.id AS ID, bus.b_name AS BUSINESS FROM Attractions AS attraction 
	INNER JOIN BusinessInfo AS bus ON attraction.user_id = bus.user_id WHERE attraction.attraction_price <= '.$budget);

	while($result_attraction = mysql_fetch_array($attractionsummary)) {
		$result_d[$d] = array();
		$result_d[$d]['id'] = ($result_attraction["ID"]);
		$result_d[$d]['item_name'] = ($result_attraction["NAME"]);
		$result_d[$d]['item_price'] = ($result_attraction["PRICE"]);
		$result_d[$d]['bname'] = ($result_attraction["BUSINESS"]);
		$result_d[$d]['image_name'] = ($result_attraction["IMAGE"]);
		$result_d[$d]['item_type'] = "ATTRACTION";
		$d++;
	}
}

echo json_encode($result_d);
	
?>
