<?php
session_start();
?>
<html>
<head> 
	<title>Sign up Form </title>
	<link rel="stylesheet" href="stylesheet/login_wrapper.css" />
	
	<script type="text/javascript">
	function Check(){
		password1=document.getElementById('sPassword').value;
		password2=document.getElementById('sRe-Password').value;
		if ((password1)!=(password2)) alert("No password Matched");

	}
	

	</script>
</head>
<body>
	<form method="post" action="signup_process.php">
<h1>Please Fill Details</h1>
		<label>First Name<input type="text" name="sFname" required=required placeholder="Enter  name" maxlength=10  minlength=3 /></label>
		<label>Middle Name<input type="text" name="sMname"  placeholder="Enter Middle name" maxlength=10  minlength=3 /></label>
		<label>Last Name<input type="text" name="sLname"  placeholder="Enter Last name" maxlength=10  minlength=3 required=required /></label><br/>
		<label>Username<input type="text" name="sUname" id="sUname" required=required placeholder="Enter Login user name" maxlength=20  minlength=3/></label><br/>
		<label>Password<input type="password" name="sPassword" required placeholder="Enter login Password" maxlength=20 minlength=5 id="sPassword"/></label><br/>
		<label>Re-Type Password<input type="password" name="sRe-Password" id="sRe-Password" required placeholder="Confirm Password" maxlength=20 minlength=5 onClick='Check();'/></label><br/>
		<label>Email<input type="email" name="email"><br/></label>
		<label>Registration No:<input type="text" name="sRegisterNo" required=required placeholder="Enter Registration no" maxlength=15  minlength=3 name="sRegisterNo" /></label><br/>
	
<br/>
<script type="text/javascript">
	preuser=document.getElementById('sUname');
</script>

<input type="submit" />
<input type="Reset"  value="Reset"/>





	</form>