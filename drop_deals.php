<?php 
include "config.php";

mysql_query("DELETE FROM Deals WHERE id=".mysql_real_escape_string($_GET['id']));

header('Location: /dashboard-library.php');

?>