<!doctype html>
<html>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,400italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="form.css" type="text/css" media="screen">
 
<body>
<form action="upload_attractions.php" method="post"
enctype="multipart/form-data">
 
<table align="center" cellpadding = "8">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>Attraction Name *</td>
<td><input type="text" name="Attraction_Name" maxlength="30" placeholder="Name" required/>
</td>
</tr>

<!----- Event Picture ---------------------------------------------------------->
<tr>
<td><label for="file">Picture *</label></td>
<td><input type="file" name="file" id="file" required/>
  <div id="info">Maximum size 80KB</div></td>
</tr>

<!----- Bio ---------------------------------------------------------->
<tr>
<td>Information *<br /><br /><br /></td>
<td><textarea name="A_Information" rows="6" cols="50" placeholder="What does this attraction include?" required></textarea></td>
</tr>


<!----- Address ---------------------------------------------------------->
<tr>
<td>Address *<br /><br /><br /></td>
<td><input type="text" name="Address1" id="Address1" placeholder="Building Name/Number" required/><br />
<input type="text" name="Address2" id="Address2" placeholder="Street Address" required/><br />
<input type="text" name="Address3" id="Address3" placeholder="Town" required/><br />
<input type="text" name="Address4" id="Address4" placeholder="County" required/>
</tr>

 
<!----- Price ---------------------------------------------------------->
<tr>
<td>Price *</td>
<td><input type="text" name="A_Price" maxlength="30" placeholder="Euros" required/>

</td>
</tr>
 
<!----- Attraction Valid Until -------------------------------------------------------->
<tr>
<td>Valid Until</td>
 
<td>
<select name="Att_day" id="Att_day">
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
 
<select id="Att_Month" name="Att_Month">
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
 
<select name="Att_Year" id="Att_Year">
 
<option value="-1">Year</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2012">2014</option>

</select>
</td>
</tr>

<!----- Booking Contact ---------------------------------------------------------->
<tr>
<td>Contact Information *</td>
<td>
    <input type="text" name="Att_Contact" placeholder="Contact No." required/>
  
</td>
</tr>
 
<!----- Online Booking ---------------------------------------------------------->
<tr>
<td>Online Booking *</td>
<td>
  <p>
    <input type="text" name="Att_Booking" placeholder="Website URL" required/>
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
