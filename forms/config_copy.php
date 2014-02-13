<?php

$localhost = "localhost";
$dbuser = "root";
$dbpassword = "root";
$dbname = "fyp_database";

$connect = mysql_connect($localhost, $dbuser, $dbpassword)
or die("Something is broken!");

mysql_select_db($dbname, $connect)
or die("Couldn't find database");

?>