<?php 
include "config.php";

mysql_query("DELETE FROM Attractions WHERE id=".mysql_real_escape_string($_GET['id']));

header('Location: /dashboard-library.php');

?>