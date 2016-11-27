<?php
  session_start();
   $loginuser=$_POST['userName'];
   $_SESSION['loginuser'] = $loginuser;
   
?>

<head>
  <title><?php if(!isset($_SESSION['loginuser'])) 
	 echo "Login first";
	
	?></title>
	
  
  
  
<link rel="stylesheet" href="stylesheet/general.css">
        <link rel="stylesheet" href="include/header1.css">
        <link rel="stylesheet" href="stylesheet/button.css">
        <link rel="stylesheet" href="stylesheet/form.css">
</head>
<?php  
if (isset($_SESSION['userlogin']))
{
  if(($_SESSION['count'])==0){
     header("Location:student_entry.php") ;  
  }
  elseif (($_SESSION['count'])==1){
     header("Location:teacher_entry.php") ;  
  }
  elseif (($_SESSION['count'])==2)
  header("Location:pannel1/index.php");
    
}
if (!isset($_SESSION['loginuser'])){
  include ("include/head.php");
  echo "<h1><center>Please First login to continue<center></h1>";
  $logincheck=0;
  include ("login.php");
  
  
} else {
   
	    require_once('include/databaseconnect.php');
	    static $total_login=0;
	    $user=strtoupper($_POST['userName']);
	    $checkuser=substr($user,0,1);
	    $password=($_POST['password']);
	    
	    $password1=md5(trim($_POST['password']));
	    
	    if ($checkuser=='S' || $checkuser=='s')
	    {
	      
	      $query1="SELECT * FROM studentlist";
	      $result1=mysql_query($query1);
	      $result1_numrows=mysql_num_rows($result1);
	    
	      for($i=0; $i<$result1_numrows;$i++){
		$result1_fetchrows=mysql_fetch_array($result1);
	   
		      if ((((strtoupper($result1_fetchrows['Username']))==$user)
		  	||
		  	((strtoupper($result1_fetchrows['email']))==$user))
			    &&
			  (($result1_fetchrows['Password'])==$password1))
		      {
			  
			   // session_regenerate_id();
			      $_SESSION['userlogin'] = $user;
			      $_SESSION['count']=0;
			      
			  //      session_write_close();
							
			            header('Location:student_entry.php');
			      
			      break;
		       }  // end of if
	      
	      }  // end of for loop
		
	     
	    } // end of if
	   
	    else {
	  
		$query1="SELECT * FROM teacherlist";
		 $result1=mysql_query($query1);
		$result1_numrows=mysql_num_rows($result1);
	    
	      for($i=0; $i<$result1_numrows;$i++){
		$result1_fetchrows=mysql_fetch_array($result1);
		
			
	      
		      if ((((strtoupper($result1_fetchrows['Username']))==$user)
		  	||
		  	((strtoupper($result1_fetchrows['email']))==$user))
			    &&
			  (($result1_fetchrows['Password'])==$password1))
		      {
						
			//  session_regenerate_id();
			  $_SESSION['userlogin']=$user;
			     $_SESSION['count']=1;
			     
	  		 // session_write_close();
 
			  header('Location:teacher_entry.php');
			      $count=0;
			      break;
		       }  // end of if
	      
	      }  // end of for loop
		
	     
	    } // end of else	      
	   
	
                if (($user=='ADMIN') && ($password=='admin')){
		  $_SESSION['userlogin'] = $user;
		$_SESSION['count']=2;
		header("Location:pannel1/index.php");
		exit();
		}
	
	
		 
		if(!isset($count)) {
			        include("include/head.php");
				$logincheck=0;
				echo "<center><h1>Login Fail</h1><br />", "<h2>Please Enter Correct Username & Password</h2></center>";
				 include('login.php');
				 
				 
		}


    if (isset($connection)) mysql_close();

} // end of if













?>





