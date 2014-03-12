<!DOCTYPE HTML>
<html class="no-js"><!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<title>My Dashboard</title>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/deals.css" type="text/css" media="screen">
    	<link rel="stylesheet" href="css/test.css" type="text/css" media="screen">


</head>

<body>

<div class="menu">
		<div class="container clearfix">

			<div id="logo" class="grid_3">
				<a href="dashboard.php"><img src="images/logo.png"></a>
			</div>

		  <div id="nav" class="grid_9 omega">
				<ul class="navigation">
					<li><a href="dashboard.php">HOME</a></li>
					<li><a href="dashboard-library.php">LIBRARY</a></li>
					<li><a href="dashboard-deals.php"><b>ADD ITEMS</b></a></li>
					<li><a href="">YOUR BUSINESS</a></li>
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
				<h3>ATTRACTIONS</h3>
                <h3></h3>
                <p><div class="toggleOnDarkleft"><a href="dashboard-attractions.php">Attractions</a></div><div class="toggleOffDarkmid"><a href="dashboard-deals.php">Deals</a></div><div class="toggleOffDarkright"><a href="dashboard-events.php">Events</a></div></p>

			</div>
		</div>
	</div>

    <div id="event_table">
                
                <?php include"attractions_form.php";?>
                <br></br>
                </div>

    
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


