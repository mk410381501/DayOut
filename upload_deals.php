<?php
include "config.php";

$item_name = mysql_real_escape_string($_POST['Item_Name']);
$item_info = mysql_real_escape_string($_POST['Item_Info']);
$item_price = mysql_real_escape_string($_POST['Item_Price']);
$item_day = mysql_real_escape_string($_POST['Item_Day']);
$item_month = mysql_real_escape_string($_POST['Item_Month']);
$item_year = mysql_real_escape_string($_POST['Item_Year']);
$item_contact = mysql_real_escape_string($_POST['Item_Contact']);
$item_booking = mysql_real_escape_string($_POST['Item_Booking']);

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
		  
mysql_query("INSERT INTO Deals (item_name, item_info, item_price, item_day, item_month, item_year, item_contact, item_booking, image_name, image, user_id) VALUES ('$item_name', '$item_info', '$item_price', '$item_day', '$item_month', '$item_year', '$item_contact', '$item_booking', '$image_name', '$image', ".$_SESSION['id'].")");
		  
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