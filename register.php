
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
	<a href="Home_Page.php" id="logo"><img alt="Logo dark" src="images/logo.png" /></a>
    

</div>
      

    <section class="main-content" role="main">

<form accept-charset="UTF-8" action="regprocess.php" class="activation" method="post" onsubmit="return validateLogin()"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="FaHdRKatVSs1ijq4jDvHsDtwJUi2dqthheXWjakTP5Y=" /></div>
  
  <div class='content content-pad-vert'>
    <h2 class="bordered">Create a DayOut account</h2>
    <div class="row grid-1-4">
      <div class='help activation-instructions'>
        <h3 class="activation-instructions-heading">Login Information</h3>
        <p>Carefully enter and confirm your email address. Passwords are case sensitive.</p>
        <p>Please note that DayOut is only available in the Republic of Ireland at this current moment.</p>
      </div>
      <div class="max-col-span-3">
        


        <div class="row grid-1-1-2">
          <div class="field">
            <label for="email">Email</label>
            <input id="email" name="email" placeholder="example@dayout.com" type="text" required/>
          </div>
          <div class="field">
            <label for="confirm_email">Confirm Email</label>
            <input id="confirm_email" name="confirm_email" placeholder="example@dayout.com" type="text" required/>
          </div>
          <div class="field">
            <label for='password'>
              Password
            </label>
                 <input id="password" name="password" placeholder="Create Password" type="password" required/>
              </div>


        </div>

        <div class="row grid-1-2-2">
          <div class="field">
            <label for="country">Country</label>
            <select data-select-enhanced="true" data-select-hide-search="true" data-select-icon="true" id="country" name="country">
<option value="IRE" selected="selected">Republic of Ireland</option></select>
          </div>
          
        </div>

      </div>
    </div>
  </div>

  <div class="content content-pad-vert footer">
    <div class="row grid-1-1-5">
      <div class="max-col-span-4">
        <div class="row grid-1-1">
          <div class="activation-footer">
            <div>
              <fieldset>
                <div class="fields">
                  <div class="js-field-view continue continue-button-field">
                    <input class="button" name="submit" type="submit" value="Sign Up" />
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
