<html>
<head>
	<title>DayOut Pic</title>
</head>
<body>

<form action="index11.php" method="POST" enctype="multipart/form-data">
	File:
	<input type="file" name="image"> <input type="submit" value="Upload">
</form>

<?php
include('config.php');

$file = $_FILES['image']['tmp_name'];

if (!isset($file))
	echo "Please select an image.";
else
{
	$image = (file_get_contents($_FILES['image']['tmp_name']));
	$image_name = ($_FILES['image']['name']);
	$image_size = getimagesize($_FILES['image']['tmp_name']);
	
	if ($image_size == FALSE) 
		echo "That's not an image.";
		
	else
	{
		$insert = mysql_query("INSERT INTO Ads (name, image) VALUES ('$image_name', '$image')");
		if (!$insert)
			echo "Problem uploading image.";
		else
		{
			$last_id = mysql_insert_id();
			echo "Image uploaded.<p />Your image:<p /><img src=get.php?id=$last_id>";	
		}
	}

}

?>

</body>
</html>