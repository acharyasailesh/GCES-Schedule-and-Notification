
<?php
session_start();
$a=$_SESSION['userlogin'];

require_once('include/databaseconnect.php');
$password=md5($_POST['password']);
$teacher=strtoupper($_SESSION['loginuser']);
$query1="SELECT * FROM teacherlist";
 $result1=mysql_query($query1);
 
$result1_numrows=mysql_num_rows($result1);
				    
for($i=0; $i<$result1_numrows;$i++){
 
	     $result1_fetchrows=mysql_fetch_array($result1);
$user=strtoupper($result1_fetchrows['Username']);
          // $count=1;
         // $_SESSION['default']=$count;           
	     $insert="update teacherlist set Password='$password' where username='$a'"; 
                                    mysql_query($insert) or die(mysql_error());
				    echo "Sucessful Save";
				    
				    
				    break;

							  
							      
						 } // end of for;
$_SESSION['Save']=0;						 
header("Location:settings.php");				 
				 
				 ?>
	