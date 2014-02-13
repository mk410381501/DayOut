<?php
include "config_copy.php";

$item_name = $_POST['Item_Name'];
$item_info = $_POST['Item_Info'];
$item_price = ($_POST['Item_Price']);
$item_day = $_POST['Item_Day'];
$item_month = $_POST['Item_Month'];
$item_year = $_POST['Item_Year'];
$item_contact = $_POST['Item_Contact'];
$item_booking = $_POST['Item_Booking'];

/* This script has some restrictions to the file upload. The user may upload .gif, .jpeg, and .png files; and the file size must be under 80 kB: */

$image = file_get_contents($_FILES['image']['tmp_name']);

$image_name = $_FILES["file"]["name"];
$image_type = $_FILES["file"]["type"];
$image_size = $_FILES["file"]["size"];

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $image_name);
$extension = end($temp);
if ((($image_type == "image/gif")
|| ($image_type == "image/jpeg")
|| ($image_type == "image/jpg")
|| ($image_type == "image/pjpeg")
|| ($image_type == "image/x-png")
|| ($image_type == "image/png"))
&& ($image_size < 82000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $image_name . "<br>";
    echo "Type: " . $image_type . "<br>";
    echo "Size: " . ($image_size / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $image_name))
      {
      echo $image_name . " already exists. ";
      }
    else
      {
		  
mysql_query("INSERT INTO Deals (item_name, item_info, item_price, item_day, item_month, item_year, item_contact, item_booking, image_name, image) VALUES ('$item_name', '$item_info', '$item_price', '$item_day', '$item_month', '$item_year', '$item_contact', '$item_booking', '$image_name', '$image')");
		  
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $image_name);
      echo "Stored in: " . "upload/" . $image_name;
      }
    }
  }
else
  {
  echo "Invalid file";
  }
  
/* The script above checks if the file already exists, if it does not, it copies the file to a folder called "upload". */
?>