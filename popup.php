<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Dmitri Voronianski">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/sign_in.css" />

	<link rel="stylesheet" href="css/avgrund.css">

</head>
<body>
		
   

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="js/jquery.avgrund.js"></script>
	<script>
	$(function() {
		$('#show').avgrund({
			height: 30000,
			holderClass: 'custom',
			showClose: true,
			showCloseText: 'close',
			onBlurContainer: '.containerrr',
			template: '<section id="conntent">' +
			'<form form name="login" action="loginprocess.php" method="post"  accept-charset="utf-8">' +
			'<a href="Home_Page.php"><img src="images/logo.png"></a>' +
			'<h1></h1>' + '<div>' + '<input type="text" name="email" placeholder="example@dayout.com" required id="username" />' + '</div>' + '<div>' + '<input type="password" name="password" placeholder="Password" required id="password" />' + '</div>' + '<div>' + '<input type="submit" id="submit" name="submit" value="Log In">' + '</div>' + '</form>' + '</section>'
					
		});
	});
	</script>
</body>
</html>