<?php
include('config.php');

$id = $_REQUEST['id'];

$image = mysql_query("SELECT * FROM Ads WHERE id = $id");
$image = mysql_fetch_assoc($image);
$image = $image['image'];

header("Content-type: image/jpeg");
echo $image;


?>