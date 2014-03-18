<?php

include "config.php";

$event_name = mysql_real_escape_string($_POST['Event_Name']);
$event_venue = mysql_real_escape_string($_POST['Event_venue']);
$event_info = mysql_real_escape_string($_POST['Event_info']);
$event_price = mysql_real_escape_string($_POST['Event_price']);
$event_day = mysql_real_escape_string($_POST['Event_day']);
$event_month = mysql_real_escape_string($_POST['Event_Month']);
$event_year = mysql_real_escape_string($_POST['Event_Year']);
$event_online = mysql_real_escape_string($_POST['Event_booking']);
$event_contact = mysql_real_escape_string($_POST['Event_contact']);

/* This script has some restrictions to the file upload. The user may upload .gif, .jpeg, and .png files; and the file size must be under 200 kB: */

$image = file_get_contents($_FILES['image']['tmp_name']);

$image_name = mysql_real_escape_string($_FILES["file"]["name"]);
$image_type = mysql_real_escape_string($_FILES["file"]["type"]);
$image_size = mysql_real_escape_string($_FILES["file"]["size"]);

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $image_name);
$extension = end($temp);

if(isset($_POST['submit'])){
if ((($image_type == "image/gif")
|| ($image_type == "image/jpeg")
|| ($image_type == "image/jpg")
|| ($image_type == "image/pjpeg")
|| ($image_type == "image/x-png")
|| ($image_type == "image/png"))
&& ($image_size < 205000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    if (file_exists("upload/" . $image_name))
      {
      include "dashboard-error.php";
      }
    else
      {
		  
mysql_query("INSERT INTO Events (event_name, event_venue, event_info, event_price, event_day, event_month, event_year, event_online, event_contact, image_name, image, user_id) VALUES ('$event_name', '$event_venue', '$event_info', '$event_price', '$event_day', '$event_month', '$event_year', '$event_online', '$event_contact', '$image_name', '$image',".$_SESSION['id'].")");
		  
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $image_name);
      
      include "dashboard-item_success.php";      

    }
    }
  }
else
  {
  include "dashboard-invalid.php";
  }
  }
  
/* The script above checks if the file already exists, if it does not, it copies the file to a folder called "upload". */
?>