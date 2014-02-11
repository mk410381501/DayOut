
<!DOCTYPE html>

<html class="no-js" lang="en"> 
  <head>
    <meta charset="utf-8" />

    <title> DayOut Activation </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/register.css" media="screen" rel="stylesheet" type="text/css" />
    <meta content="authenticity_token" name="csrf-param" />
    <meta content="FaHdRKatVSs1ijq4jDvHsDtwJUi2dqthheXWjakTP5Y=" name="csrf-token" />
    
</head>


  <body class="idv">
  
  <div id="fixed_header">
	<a href="Home_Page.php" id="logo"><img alt="Logo dark" src="logoheadercopy.png" /></a>
    

</div>
      

    <section class="main-content" role="main">

<form accept-charset="UTF-8" action="information.php" class="activation" method="post" onsubmit="return validateLogin()"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="FaHdRKatVSs1ijq4jDvHsDtwJUi2dqthheXWjakTP5Y=" /></div>
  
  <div class='content content-pad-vert'>
    <h2 class="bordered">How will you use DayOut?</h2>
    <div class="row grid-1-4">
      <div class='help activation-instructions'>
        <h3 class="activation-instructions-heading">SELECTING AN ACCOUNT TYPE</h3>
        <p>DayOut uses this information to provide you with the right features to help you grow your business.</p>
      </div>
      <div class="max-col-span-3">

        <div class="row grid-1-2-2">
          <div class="field">
            <label for="">What services do you provide?</label>
            <select id="industry" name="industry">
            <option selected="selected" value="">Select One...</option>
            
            <option value="Beauty Personal Care">Beauty Personal Care</option>
            <option value="Casual Use">Casual Use</option>
            <option value="Charities, Education and Membership">Charities, Education and Membership</option>
            <option value="Food and Drink">Food and Drink</option>
            <option value="Healthcare and Fitness">Healthcare and Fitness</option>
            <option value="Home and Repair">Home and Repair</option>
            <option value="Lesuire and Enterainment">Lesuire and Enterainment</option>
            <option value="Retail">Retail</option>
            <option value="Transportation">Transportation</option> 
</select>
          </div>
          
          <div class="field">
            <label for="">Why use DayOut?</label>
            <select id="reason" name="reason">
            
            <option selected="selected" value="">Select One...</option>
            <option value="Attractions, Deals & Events">To Advertise In General</option>
            <option value="Attractions">To Advertise Attractions</option>
            <option value="Deals">To Advertise Deals</option>
            <option value="Events">To Advertise Events</option>

</select>
          </div>
          
        </div>

      </div>
    </div>
  </div>
  
  
  <div class='content content-pad-vert'>
    <h2 class="bordered">Business Information</h2>
    <div class="row grid-1-4">
      <div class='help activation-instructions'>
        <h3 class="activation-instructions-heading">TELL US ABOUT YOUR BUSINESS</h3>
        <p>All this information will be available for customers to see on the mobile application.</p>

      </div>
      <div class="max-col-span-3">
        


        <div class="row grid-1-1-2">
          <div class="field">
            <label for="b_name">Business name</label>
            <input id="b_name" name="b_name" placeholder="Offical Name" type="text" required/>
          </div>
           <div class="field">
            <label for="number">Contact Number</label>
            <input id="number" name="number" placeholder="(01) 123 4567" type="text" required/>
          </div>
          </div>
          <div class="field">
            <label for="address1">Business Address</label>
            <input id="address1" name="address1" placeholder="Building Name/Number" type="text" required/>
          </div>
          <div class="field">
          <input id="address2" name="address2" placeholder="Street Address" type="text" required/></div>
       
          <div class="field">
          <input id="address3" name="address3" placeholder="Town" type="text" required/></div>
        
          <div class="field">
          <input id="address4" name="address4" placeholder="County i.e. Dublin 18" type="text" required/></div>

  <div class="content content-pad-vert footer">
    <div class="row grid-1-1-5">
      <div class="max-col-span-4">
        <div class="row grid-1-1">
          <div class="activation-footer">
            <div>
              <fieldset>
                <div class="fields">
                  <div class="js-field-view continue continue-button-field">
                    <input class="button" name="submit" type="submit" value="Finish" />
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

    </section>

    
</body>
</html>
