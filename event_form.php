<!doctype html>
<html>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="form.css" type="text/css" media="screen">

 
<body>
<form action="upload_event.php" method="post"
enctype="multipart/form-data">
 
<table align="center" cellpadding = "12">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>Event Name *</td>
<td><input type="text" name="Event_Name" maxlength="30" placeholder="Name" required/>
</td>
</tr>

<!----- Event Picture ---------------------------------------------------------->
<tr>
<td><label for="file">Event Picture *</label></td>
<td><input type="file" name="file" id="file" required/> <div id="info">Maximum size 80KB</div>
</td>
</tr>


<!----- Address ---------------------------------------------------------->
<tr>
<td>Event Information *<br /><br /><br /></td>
<td><textarea name="Event_info" rows="6" cols="50" placeholder="Enter details about this event." required></textarea></td>
</tr>

 
<!----- Price ---------------------------------------------------------->
<tr>
<td>Price *</td>
<td><input type="text" name="Event_price" maxlength="30" placeholder="Euros" required/>

</td>
</tr>
 
<!----- Event Date -------------------------------------------------------->
<tr>
<td>Event Date *</td>
 
<td>
<select name="Event_day" id="Event_Day">
<option value="-1">Day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
 
<select id="Event_Month" name="Event_Month">
<option value="-1">Month</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 
<select name="Event_Year" id="Event_Year">
 
<option value="-1">Year</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>

</select>
</td>
</tr>
 
<!----- Online Booking ---------------------------------------------------------->
<tr>
<td>Online Booking *</td>
<td>
  <p>
    <input type="text" name="Event_booking" placeholder="Website URL" required/>
</td>
</tr>
 
<!----- Booking Contact ---------------------------------------------------------->
<tr>
<td>Booking Contact *</td>
<td>
    <input type="text" name="Event_contact" maxlength="10000" placeholder="Contact No." required/>
  
</td>
</tr>

 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">

   <!-- RESET BUTTON <section class="sub">

<a href="#">
     <input type="reset" name="reset" value="Reset">
     </a>
	</section> -->
    
    <section class="reg">


     <input type="submit" name="submit" value="Submit">

    
	</section>
    
    
</td>
</tr>

</table>
 
</form>
 
</body>
</html>
