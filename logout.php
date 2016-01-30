<?php include 'h1.php'; ?>
<?PHP
require_once("./include/membersite_config.php");

$fgmembersite->LogOut();
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

		<h3 style="color:#015b64"><b>Student Admission Portal</b></h3>

	</div>

</div>
<div class="row">

	<div class="col-md-12 text-center">

		<h2>You have logged out. Thank you for using the portal</h2>
		<p>
		</br></br><a class="btn btn-primary btn-md" href='login.php'>Login Again</a>
		</p>

	</div>

</div>


</body>
</html>
<?php 
echo '</br></br></br></br></br></br></br></br></br>';

include 'footer.php'; ?>
