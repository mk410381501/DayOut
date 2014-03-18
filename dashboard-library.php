 <?php 
 // Connects to your Database 
include "Config.php";

 // $dataT = mysql_query("SELECT * FROM Tickets")
 // or die(mysql_error()); 
 // $dataU = mysql_query("SELECT * FROM Users")
 // or die(mysql_error());
 
 $dataA = mysql_query("SELECT * FROM Attractions WHERE user_id = ".$_SESSION['id']."")
 or die(mysql_error()); 
 $dataD = mysql_query("SELECT * FROM Deals WHERE user_id = ".$_SESSION['id']."")
 or die(mysql_error());
 $dataE = mysql_query("SELECT * FROM Events WHERE user_id = ".$_SESSION['id']."")
 or die(mysql_error());
  
  
 ?> 
 

<!DOCTYPE HTML>
<html class="no-js"><!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<title>My Dashboard</title>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/dashboard.css" type="text/css" media="screen">
    	<link rel="stylesheet" href="css/library.css" type="text/css" media="screen">
    
</head>

<body>
<!-- MENU BAR -->
<div class="menu">
		<div class="container clearfix">
			<div id="logo" class="grid_3">
				<a href="dashboard.php"><img src="images/logo.png"></a>
			</div>
		  <div id="nav" class="grid_9 omega">
				<ul class="navigation">
					<li><a href="dashboard.php">HOME</a></li>
					<li><a href="dashboard-library.php"><b>LIBRARY</b></a></li>
					<li><a href="dashboard-deals.php">ADD ITEMS</a></li>
                  <li> 
                  	<signin><a href="logout.php">Log Out</a>
                  	</signin>
                  </li>
                    
				</ul>
			</div>

		</div>
	</div>


	<div class="slide" id="slide1">
		<div class="container clearfix">

			<div id="content" class="grid_12">
                
                <?php 
				if ((mysql_num_rows($dataA)) || (mysql_num_rows($dataD)) || (mysql_num_rows($dataE))){
					
			Print "<h3>ITEM LIBRARY</h3>";
           Print "<h3></h3>";
					
/** 
This Table shows all the Attractions, Deals and Events which the Business has added in DayOut. They can delete any of these if they wish by clicking on the 'bin' image!
**/
// HEADER OF TABLE				
Print "<table id="."box-table-a"." summary="."Deals".">";
Print "<thead>";
Print "<tr>";
Print "<th scope="."col".">Categories</th>";
Print "<th scope="."col".">Item Name</th>";
           	Print "<th scope="."col".">Price</th>";
           	Print "<th scope="."col"."> </th>";
        Print "</tr>";
    Print "</thead>";
	
	// ATTRACTIONS	
 while($infoA = mysql_fetch_array($dataA)) 
 { 
 
 Print "<tbody>";
    	Print "<tr>";
		Print "<td>"."Attractions"."</td>";
        	Print "<td>".$infoA['attraction_name'] . "</td>";
            Print "<td>".$infoA['attraction_price'] . " </td>";			
           Print "<td><a href="."drop_attraction.php?id=".$infoA['id']."> <img src="."images/empty_trash-26.png"." width="."20"." height="."20"."></a></td>";
        Print "</tr>";
    Print "</tbody>";
 } 
	
// DEALS
 while($infoD = mysql_fetch_array($dataD)) 
 { 
 
 Print "<tbody>";
    	Print "<tr>";
		Print "<td>"."Deals"."</td>";
        	Print "<td>".$infoD['item_name'] . "</td>";
            Print "<td>".$infoD['item_price'] . "</td>";
            Print "<td><a href="."drop_deals.php?id=".$infoD['id']."> <img src="."images/empty_trash-26.png"." width="."20"." height="."20"."></a></td>";
        Print "</tr>";
    Print "</tbody>";
 }  
 
 // EVENTS
 while($infoE = mysql_fetch_array($dataE)) 
 { 
  Print "<tbody>";
    	Print "<tr>";
		Print "<td>"."Events"."</td>";
        	Print "<td>".$infoE['event_name'] . "</td>";
            Print "<td>".$infoE['event_price'] . "</td>";
            Print "<td><a href="."drop_events.php?id=".$infoE['id']."> <img src="."images/empty_trash-26.png"." width="."20"." height="."20"."></a></td>";
        Print "</tr>";
    Print "</tbody>";
 } 
 Print "</table>"; 
					
					
					} else {
						echo "<div id="."border".">";
						echo "<h3> </h3>";
						echo "<img src="."images/item_lib.png"." />";
						echo "<p>Increase your sales with just a click.</p>";
						echo "<h3> </h3>";
						
						echo "<a href="."dashboard-deals.php"." class="."button".">Create an Item</a>";
						echo "</div>";
					}
				 
 		
				?>
                    
			</div>
		</div>
	</div>


<!-- FOOTER -->
    <div id="footer">
	
	<div class="container clearfix">
		
		<ul class="footer_links">
			<h5>DAYOUT</h5>
			<li><a href="Home_Page.php">Home</a></li>
			<li><a href="Home_Page.php#slide2">Features</a></li>
			<li><a href="Home_Page.php#slide3">About Us</a></li>
           <li><a href="Home_Page.php#slide4">Pricing</a></li>

		</ul>
		
		<ul class="footer_links">
			<h5>ELSEWHERE</h5>
            <!-- add in a link to Facebook once its made! -->
			<li><a href="">Facebook</a></li>
          <!-- add in a link to Twitter once its made! -->
			<li><a href="">Twitter</a></li>
		</ul>
        
        <ul class="footer_links">
			<h5>APPS</h5>
            <!-- add in a link to Facebook once its made! -->
			<li><a href="">App Store</a></li>
          <!-- add in a link to Twitter once its made! -->
			<li><a href="">Google Play</a></li>
		</ul>
		
		<div id="rights">&copy; DayOut 2014, All Rights Reserved.</div>
		
	</div>
	
</div>

</body>
</html>


