  <link rel="stylesheet" href="stylesheet/general.css">
        <link rel="stylesheet" href="stylesheet/button.css">
        <link rel="stylesheet" href="include/header1.css">
        <link rel="stylesheet" href="include/footer.css">
        <link rel="stylesheet" href="stylesheet/dashboard.css">




<?php

session_start();
$a=$_SESSION['userlogin'];
if (!isset($a)) header("Location:login.php");
?>


<?php

/*

<a href='logout.php' title="Logout <?php echo $a;?>";>Log out</a>
*/
    echo "<center><h1>Welcome $a</h1></center>";
    require_once('include/databaseconnect.php');

 $noticequery="SELECT * FROM the_notices order by id desc";
 
		 $result1=mysql_query($noticequery);
		$result1_numrows=mysql_num_rows($result1);
                echo '<section class="dashcontent">';      
                for($i=$result1_numrows;$i>0;$i--){
		$result1_fetchrows=mysql_fetch_array($result1);

		                 $notice_title=$result1_fetchrows['title'];
          	                  $notice=$result1_fetchrows['notice'];
				 $upload=$result1_fetchrows['filename'];
				 $date=$result1_fetchrows['DateTime'];
				 $user=$result1_fetchrows['addedby'];
				 echo '<div class="notice">';
				                  echo "<h3>$notice_title on $date ($user)              </h3>";
						                   echo "<p> $notice</p>"  ;
				 if($upload!='uploads/')
		 {
		     echo "<br><h1 class='document'>Please Download the Following Document</h1>";
		 echo "<a href='pannel1/$upload'>$upload</a>";
		 } // end of if
		 echo '</div>';
		}
              

    
	$query1="SELECT * FROM teacherlist";
		 $result1=mysql_query($query1);
		$result1_numrows=mysql_num_rows($result1);
                
                 for ($i=0;$i<$result1_numrows;$i++){
                    
                    $result1_fetchrows=mysql_fetch_array($result1);
                     $username=strtoupper( $result1_fetchrows['Username']);
                     getdisplay($username);
                      
		       
		       
		       
		 } // end of loop
		 echo '</section>';
		 
		 
		 function getdisplay($user){
		       $query2="SELECT * FROM $user";
                        $result2=mysql_query($query2) or die(mysql_error());
			      
			$result2_numrows=mysql_num_rows($result2);
			  
                            for ($i=0;$i<$result2_numrows;$i++){
		                      
				 $result2_fetchrows=mysql_fetch_array($result2);
				  $Subject=$result2_fetchrows['Subject'];
				  $message=$result2_fetchrows['Message'];
				  $upload=$result2_fetchrows['Upload'];
				  
				 $date2=$result2_fetchrows['DateTime'];
				 $semster=$result2_fetchrows['Semster'];
				 ?>
				 	<div class="notice">
				<h3><?php echo $Subject ?></h3>
				<p>
				<?php echo $message ;
				echo "on $date2 (By $user)" ?>
					
				</p>
                
				 <?php
				  if($upload!=''){
				    
				  
				  echo "<br><h1 class='document'>Please Download the Following Document</h1>";
				  
                            echo "<a href='uploads/$upload'>$upload</a>";
				  } // end of if
                            } // end of inner for
			    
			    
       
			    
                                       
                                      echo "<br/>";
			echo '</div>';	      
                                       
                            
		 } // end of function   
                    
               
	

include "include/footer.php";

?>
