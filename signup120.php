<head>
	<script type="text/javascript">
		var count=0;
		function checkPassword(){
			count++;
			if (count>1) checkpassword();
			
		}
		
		
		function reCheckpassword(){
		a=document.getElementById('sPassword').value;
		b=document.getElementById('sRe-Password').value;
				if (a!=b) {
					alert("Make sure you have Re-entered same password");
						document.getElementById("sRe-Password").focus();
				}
		
		}
		
		
		
		
		function checkRegister(){
			
			 x=document.getElementById("sRegisterNo").value;
		  
		  if (isNaN(x)) 
		  {
		    alert("Must input numbers");
		    x.focus();
		    
		  }
		  
		}
		
		
		
		
		
		
		
		function checkEmail() {
			//code
		email=document.getElementById('email').value;
			
			if (! stristr ( email, "@" )
					    && ! stristr ( email, "." )) {
						alert("Invalid email format");
					}
		}
		
		
		
				
		
		
		
	</script>
	
	
</head>


<?php
session_start();
if (!isset($_SESSION['userlogin'])) 
{

?>

<!DOCTYPE html>
<html>
	<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SIGN UP FORM</title>
        <link rel="stylesheet" href="stylesheet/general.css">
        <link rel="stylesheet" href="include/header1.css">
        <link rel="stylesheet" href="stylesheet/button.css">
        <link rel="stylesheet" href="stylesheet/form.css">
	</head>
	<?php
	if (!isset($checkhead))
	include "include/head.php"; ?>
		<section>
			<h3 class="formtopic">Fill in your details to sign up and continue.</h3>
			<form class = "form" method="post" action="signup_process.php">
				<div>
				   <label>Name<br>
				   		<input type="text" name="sFname" required="required" placeholder="First Name" maxlength=10  minlength=3 class="input"/>
				   		<input type="text" name="sMname" placeholder="Middle Name" maxlength=10  minlength=3 class="input"/>
				   		<input type="text" name="sLname" required="required" placeholder="Last Name" maxlength=10  minlength=3 class="input"/>
				   </label>
				</div>
				<div>
				   <label>Username<br>
				   		<input type="text" name="sUname" required="required" placeholder="User Name" maxlength=20  minlength=8 class="input"/>
				   </label>
				</div>
				<div>
				   <label>Password<br>
				   		<input type="password" name="sPassword" id="sPassword" required="required" placeholder="Password" onchange='checkPassword();'
				   		maxlength=20 minlength=5 class="input"/>
				   </label>
				</div>
				<div>
				   <label>Re-Type Password<br>
				   		<input type="password" name="sRe-Password" id="sRe-Password" required="required" placeholder="Confirm Password"  onchange='reCheckpassword();'
				   		maxlength=20 minlength=5 class="input"/>
				   </label>
				</div>
				
				<div>
				
				
				<label>Email<br>
				    <input type="email" name="email" id="email" onchange='checkEmail();'>
				</label>
				</div>
				<div>
					<label>
						Registration No<br>
						<input type="text" name="sRegisterNo" required=required placeholder="Enter Registration no" maxlength=15  minlength=3 id="sRegisterNo"  name="sRegisterNo" onchange= 'checkRegister();' />
						
					</label>
				</div>	
				
				
				
				<div>
					<input type="submit" value="Submit" class="button" id="submit"/>
				</div>
				<div>
					<input type="submit" value="Reset" class="button" id="reset"/>
				</div>
			</form>
		</section>
<?php


}
else
{
	
   echo "Permission Not granted<h1>You are currently log in</h1>";
   echo ("<meta http-equiv='refresh' content='1;url=login.php'/>");
 
	    		      
	
}?>
	</body>
</html>
       