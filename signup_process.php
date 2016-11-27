<?php
 session_start();
 $signupuser=$_POST['sUname'];
  $_SESSION['signupuser']=$signupuser;
  $a= $_SESSION['signupuser'];
   
?>

<html>
<head> 
	<title><?php if(isset($a)) echo "Thank you for registering";
	else echo "You must sign up first";
	
	?></title>
	<link rel="stylesheet" href="stylesheet/general.css">
        <link rel="stylesheet" href="include/header1.css">
        <link rel="stylesheet" href="stylesheet/button.css">
        <link rel="stylesheet" href="stylesheet/form.css">
	
	
</head>
<body>
 
<?php

if(isset($_SESSION['signupuser'])){
	  require_once('include/databaseconnect.php');
	$Fname=$_POST['sFname']; 
	$Mname=$_POST['sMname'];
	$Lname=$_POST['sLname'];	
	$Uname='s'.$_POST['sUname'];
	$Password=md5($_POST['sPassword']);
	$Register=$_POST['sRegisterNo'];
	$email=$_POST['email'];
	
	


	$query="INSERT INTO studentlist(sFname,sMname,sLname,Username,Password,RNo,email) 
		VALUES ('$Fname','$Mname','$Lname','$Uname','$Password','$Register','$email')";
	$result=mysql_query($query);
	$_SESSION['signuser_detail']=array("Fname"=>$Fname,"Mname"=>$Mname,"Lname"=>$Lname,"Uname"=>$Uname,
				  "Password"=>$Password, "email"=>$email,"Register"=>$Register);

        header("Location:signuser_detail.php");
	
	
}	


else{
       if(!isset($_SESSION['userlogin'])){ 	
	
	
	include("include/head.php");
	echo "<h1><center>Sign up first</center></h1>";
	$checkhead=0;
	include("signup120.php");
	
	
       }
	
	


	
	
     }
?>
<?php



if (isset($connection)) mysql_close();




?>
	






</body>
