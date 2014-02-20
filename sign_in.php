<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>DayOut Sign In</title>
<link rel="stylesheet" type="text/css" href="css/sign_in.css" />
	<link rel="stylesheet" href="css/avgrund.css">
</head>
<body>
<!-- action="loginprocess.php" -->

<div class="container">
	<section id="content">
    
    <form form name="login" action="loginprocess.php" method="post"  accept-charset="utf-8">
<a href="Home_Page.php"><img src="images/logoheadercopy.png"></a>
			<h1></h1>
		  <div>
				<input type="text" name="email" placeholder="example@dayout.com" required id="username" />
			</div>
			<div>
				<input type="password" name="password" placeholder="Password" required id="password" />
			</div>
			<div>
            
            <input type="submit" id="submit" name="submit" value="Log In"> 

		  </div>
		</form>
 
	</section><!-- content -->
</div><!-- container -->
</body>
</html>