<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Forms</title>
		<link rel="stylesheet" href="stylesheet/general.css">
        <link rel="stylesheet" href="include/header1.css">
        <link rel="stylesheet" href="stylesheet/button.css">
        <link rel="stylesheet" href="stylesheet/form.css">
	</head>
	<?php include "include/head.php"; ?>
		<h2>Feedback/Contact Us</h2>
		<form class = "form">
			<div>
				<label>Name<br>
				  	<input type="text" name="Name" required="required" placeholder="Name" maxlength=60  minlength=8 class="input"/>
				</label>
			</div>
			<div>
				<label>Email<br>
			   		<input type="text" name="email" required="required" placeholder="yourid@example.com" 
			   		maxlength=20 minlength=8 class="input"/>
				</label>
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
		<form action="----.php" method="post">
			<div class="form-container">
				<label>Comment: </label>
				<textarea rows="4" cols="50">
			
				</textarea>
			</div>
			<input type="submit" name="submit" value="submit" />
			<input type="reset" name="reset" value="Cancel" />
		</form>
	</body>
</html>