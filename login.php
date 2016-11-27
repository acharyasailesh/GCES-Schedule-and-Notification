<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>USER LOGIN</title>
        <link rel="stylesheet" href="stylesheet/general.css">
        <link rel="stylesheet" href="include/header1.css">
        <link rel="stylesheet" href="stylesheet/button.css">
        <link rel="stylesheet" href="stylesheet/form.css">
	    
    </head>

	<?php
	    session_start();
	if(!isset($logincheck))
	include "include/head.php";
	
	
		    
			
			    if (isset($_SESSION['userlogin']))
			    {
				
				if(($_SESSION['count'])==0) header("Location:student_entry.php") ;  
	                        elseif (($_SESSION['count'])==1) header("Location:teacher_entry.php") ;
				elseif (($_SESSION['count'])==2) header("Location:pannel1/index.php") ;
				
				
	    		      
			    }
			    
			
	
	
	?>
		<section>
			<div>
				<h3 class="formTopic" >Log In your account to continue.</h3>
			</div>
			<form class = "form" method="post" action="login_process.php">
				<div>
					<p><img src="images/profile.jpg" class = "profilePic"></p>
				</div>
				<div>
				   	<input type="text" required="required" name="userName" placeholder="user name" maxlength=20  minlength=8 class="input"/>
				</div>
				<div>
				   	<input type="password" required="required" name="password" placeholder="password" maxlength=20  minlength=8 class="input"/>
				</div>
				<div>
					<input type="submit" value="Log In" class="button" id="submit"/>
				</div>
			</form>
		
		</section>
		
	</body>
</html>