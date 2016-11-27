<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
         <title>Teacher Dashboard</title>
        <link rel="stylesheet" href="stylesheet/general.css">
        <link rel="stylesheet" href="stylesheet/button.css">
        <link rel="stylesheet" href="include/header1.css">
        <link rel="stylesheet" href="include/footer.css">
        <link rel="stylesheet" href="stylesheet/dashboard.css">

    </head>



<?php
session_start();
$a=$_SESSION['userlogin'];

 if (isset($_SESSION['userlogin'])) {
        include("include/head.php");
                    include("dashboard.php");
		   include("teacher_status.php");
                

             //if($_SESSION['default']!=1) echo "<h2>You are using default password. In order to change Password go to Settings</h2>";
       
       
       
       require_once('include/databaseconnect.php');
	$noticequery="SELECT * FROM the_notices order by id desc";
		 $result1=mysql_query($noticequery);
		$result1_numrows=mysql_num_rows($result1);
		?>
                  <section class="dashcontent">
		     <?php
                for($i=$result1_numrows;$i>0;$i--){
		$result1_fetchrows=mysql_fetch_array($result1);
                 $notice_title=$result1_fetchrows['title'];
                 $notice=$result1_fetchrows['notice'];
		 $upload=$result1_fetchrows['filename'];
		 $date=$result1_fetchrows['DateTime'];
                 $user=$result1_fetchrows['addedby'];
                 ?>
		
			<div class="notice">
				<h3><?php echo $notice_title ?></h3>
				<p>
				<?php echo $notice ;
				echo "on $date ($user)" ?>
					
				</p>
                        <?php 
		 
				   if($upload!='uploads/')
				   {
				       echo "<br><h1 class='document'>Please Download the Following Document</h1>";
				   echo "<a href='pannel1/$upload'>$upload</a>";
				   }
				   ?>
					  </div>
			
		<?php
		 
           
              
} // end of loop
echo '</section>';
       include "include/footer.php";
}  // end of outer if

else  // else part of if
header("Location:login.php");




?>

