<?php
include "config.php";

$attraction_name = mysql_real_escape_string($_POST['Attraction_Name']);
$attraction_info = mysql_real_escape_string($_POST['A_Information']);

$attraction_address1 = mysql_real_escape_string($_POST['Address1']);
$attraction_address2 = mysql_real_escape_string($_POST['Address2']);
$attraction_address3 = mysql_real_escape_string($_POST['Address3']);
$attraction_address4 = mysql_real_escape_string($_POST['Address4']);

$attraction_price = $_POST['A_Price'];
$attraction_day = $_POST['Att_day'];
$attraction_month = $_POST['Att_Month'];
$attraction_year = $_POST['Att_Year'];

$attraction_contact = $_POST['Att_Contact'];
$attraction_booking = mysql_real_escape_string($_POST['Att_Booking']);

/* This script has some restrictions to the file upload. 
The user may upload .gif, .jpeg, and .png files; and the file size must be under 200 kB: */

$image = file_get_contents($_FILES['image']['tmp_name']);

$image_name = $_FILES["file"]["name"];
$image_type = $_FILES["file"]["type"];
$image_size = $_FILES["file"]["size"];

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
    // Adding a timestamp to to the image name as well as a four digit random number.. making it close to impossible for any name to be the same
    $image_name = substr($image_name, 0, strrpos($image_name, '.')). time().rand(0, 9999).substr($image_name, strrpos($image_name, '.'));
    if (file_exists("upload/" . $image_name))
      {
      include "dashboard-error.php";
      }
    else
      {
		  
mysql_query("INSERT INTO Attractions (attraction_name, attraction_info, attraction_address1, attraction_address2, attraction_address3, attraction_address4, attraction_price, attraction_day, attraction_month, attraction_year, attraction_contact, attraction_booking, image_name, image, user_id) VALUES ('$attraction_name', '$attraction_info', '$attraction_address1', '$attraction_address2', '$attraction_address3', '$attraction_address4', '$attraction_price', '$attraction_day', '$attraction_month', '$attraction_year', '$attraction_contact', '$attraction_booking', '$image_name', '$image', ".$_SESSION['id'].")");
		  
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