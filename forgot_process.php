<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>GCES</title>
        <link rel="stylesheet" href="stylesheet/general.css">
        <link rel="stylesheet" href="stylesheet/header.css">
        <link rel="stylesheet" href="stylesheet/button.css">
        <link rel="stylesheet" href="stylesheet/section.css">
        <link rel="stylesheet" href="stylesheet/slide.css">
    </head>

<?php
 session_start();
   
  $forgotuser=$_POST['email'];
  $_SESSION['forgotuser']=$forgotuser;
 
 
if(!isset($_SESSION['forgotuser']))
 {
   

    include("include/head.php");
    echo "<center><h1>You must Enter first Username or email to continue</h1></center>";
   include("forgot.php");
   
 }
 else
 
 
   {
  	    
	       require_once('include/databaseconnect.php'); 
	    $user_email=strtoupper($_POST['email']);
	     $checkuser=substr($user_email,0,1);
	     if ($checkuser=='S' || $checkuser=='s')
	    {      
	      $query1="SELECT * FROM studentlist";
	      $result1=mysql_query($query1);
	      $result1_numrows=mysql_num_rows($result1);
	            for($i=0; $i<$result1_numrows;$i++){
	    	    $result1_fetchrows=mysql_fetch_array($result1);
		     if(((strtoupper($result1_fetchrows['Username']))==$user_email) || ((strtoupper($result1_fetchrows['email']))==$user_email))
			{
			    $user_username=$result1_fetchrows['Username'];
			    $user_password=$result1_fetchrows['Password'];
	     
			    echo "<center>Your Username is ". $user_username;
			    echo "<br/>Your Password is ". $user_password;
			    $check=0;
			    break;
			 }
	       } // end of for
	    
	    }  // end of if
	    
	    else if($checkuser=='t' || $checkuser=='T'){
		$query1="SELECT * FROM teacherlist";
		$result1=mysql_query($query1);
		echo "Your childhood nickname<br/>";
		echo "<form action='' method='post'>
		<input type='text'  name='answer'>
		<input type='submit'  name='Submit' class='button'>
		
		
		
		
		"   ;
		$answer=strtoupper($_POST['answer']);
		
	      $result1_numrows=mysql_num_rows($result1);
	            for($i=0; $i<$result1_numrows;$i++){
	    	    $result1_fetchrows=mysql_fetch_array($result1);
		     if(((strtoupper($result1_fetchrows['Username']))==$user_email) || ((strtoupper($result1_fetchrows['email']))==$user_email))
			{
			    $user_username=$result1_fetchrows['Username'];
			    $user_password=$result1_fetchrows['Password'];
			    $secret=$result1_fetchrows['Secret'];
	                    if($answer==$secret){
			    echo "<center>Your Username is ". $user_username;
			    echo "<br/>Your Password is ". $user_password;
			    $check=0;
			    }
			    break;
			 
			 }
	       } // end of for
		
		
		
		
		
		
		
		
		
	    }
	    
	  
	      if(!isset($check)){
	
		include("include/head.php");
		echo "<center><h1>Please Enter correct Username or Email</h1><center>";
		 $forgotcheck=0;
		
		include("forgot.php");
		
		
		
	      }
	


  }
 
    
    
    

 
 
 ?> 