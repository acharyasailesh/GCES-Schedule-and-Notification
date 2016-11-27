


<?php
session_start();
echo ("<meta http-equiv='refresh' content='4;url=login.php'/>");
	

$detail=$_SESSION['signuser_detail'];
echo  "<h1>THank you for registering</h1>" ."<h2>Your provided Details</h1>
			First Name: ".$detail['Fname']  ."<br/>
			Middle Name: ".$detail['Mname']  .'<br/>
			Last Name: '.$detail['Lname']  .'<br/>
			Username: '. $detail['Uname'] .'<br />
			Password: '. $detail['Password'].  '<br/>
			Registration no: '. $detail['Register']  .'<br/>'.
			
		'<h2>Keep it safe for future use. </h2>'.
	'<h3>Note the password shown here is in MD5 format of your chosen password</h3>';
echo "<h4>You will be soon redirect to Login page";

        
?>