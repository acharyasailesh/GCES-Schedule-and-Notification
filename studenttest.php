<?php
session_start();
$b=strtoupper($_SESSION['loginuser']);

	    $hobbies=$_POST['hobbies'];
	    $DOB=$_POST['DOB'];
	    $about=$_POST['about'];
            $teacher=$_POST['username'];
	    
require_once('include/databaseconnect.php');
 $query="update studentlist set DOB='$DOB',Hobbies='$hobbies',About='$about' 
				    where Username='$b'" or die(mysql_error());
				     
	
        			       $result=mysql_query($query) or die(mysql_error());
	
        
        header("Location:aboutStudent.php");
        


?>