
<?php require_once("./include/membersite_config.php");
if($fgmembersite->CheckLogin())
   {
        $fgmembersite->RedirectToURL("f1.php");
   }
   error_reporting(0);
?>
<?php include 'h1.php'; ?>
<?php include 'tab_style.php'; ?>

<br/>


<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("f1.php");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Login</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head>
<body>
<div class="row">

  <div class="col-md-6 col-md-offset-3 text-center">

    <h3 style="color:#015b64"><b>Welcome to IIITDM Placement Cell</b></h3>

  </div>

</div>
<div class="row">

  <div class="col-md-6 col-md-offset-3 text-center">

      <!-- Form Code Start -->
      <div  style="border:none !important" align='left'>
      <form id='login' class="form" style="border:none !important" action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
      <fieldset >

      <input type='hidden' name='submitted' id='submitted' value='1'/>

      <div class='short_explanation text-center' style="color:red;">* required fields</div>

      <br/>

      <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>

      <div class="row">

        <div class="col-md-8 col-md-offset-2 text-center">
            <div class="form-group">
              <label for='rollnumber' >User Id. <span style="color:red;">*</span></label><br/>
              <input class="form-control" type='text' name='rollnumber' id='rollnumber' value='<?php echo $fgmembersite->SafeDisplay('rollnumber') ?>' maxlength="50" required/><br/>
              <span id='login_rollnumber_errorloc' class='error'></span>
            </div>
            <div class="form-group">
              <label for='dob' >Password<span style="color:red;">*</span></label><br/>
              <input class="form-control" type='text' name='dob' id='dob' maxlength="50" required/><br/>
              <span id='login_dob_errorloc' class='error'></span>
            </div>
              <input class="btn btn-md btn-primary" type='submit' name='Submit' value='Submit' />
          <!--<br/><br/><div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Username and/or Password?</a></div>-->

        </div>

      </div>

      
      </fieldset>
      </form>
      <!-- client-side Form Validations:
      Uses the excellent form validation script from JavaScript-coder.com-->

      <script type='text/javascript'>
      // <![CDATA[

          var frmvalidator  = new Validator("login");
          frmvalidator.EnableOnPageErrorDisplay();
          frmvalidator.EnableMsgsTogether();

          frmvalidator.addValidation("rollnumber","req","Please provide your JEE roll number");
          
          frmvalidator.addValidation("dob","req","Please provide date of birth of yours");

      // ]]>
      </script>
      <script type="text/javascript">
      document.getElementById('rollnumber').focus();
      </script>

      </div>


  </div>

</div>


<!--
Form Code End (see html-form-guide.com for more info.)
-->

</body>
</html>
<?php include 'footer.php'; ?>

