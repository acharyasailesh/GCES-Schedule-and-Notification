<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
         <title>Teacher Setting</title>
        <link rel="stylesheet" href="stylesheet/general.css">
        <link rel="stylesheet" href="stylesheet/button.css">
        <link rel="stylesheet" href="include/header1.css">
        <link rel="stylesheet" href="include/footer.css">
        <link rel="stylesheet" href="stylesheet/dashboard.css">

    </head>

    <script type="text/javascript">
                 
                 
                 function checksave() {
                    //code
                    document.write("Sucessfully save");
                 }
                 
                     function reCheckpassword(){
                            a=document.getElementById('sPassword').value;
                            b=document.getElementById('sRe-Password').value;
                                            if (a!=b) {
                                                    alert("Make sure you have Re-entered same password");
                                                            document.getElementById("sRe-Password").value='';
                                                            document.getElementById("sRe-Password").focus();
                                                            
                                            }
                            
                            }
                
                 
                 
                 
                 
                 
                </script>
                 
                 
   
   
   
   
   
   
   
   
   
    </head>
    
        
    
    
    
    
<?php

session_start();
$a=$_SESSION['userlogin'];
if (!isset($a)) header("Location:login.php");
 else
 {

        $b=strtoupper($a);
                include("include/head.php");
        
                        include("dashboard.php");
        
        ?>
        <form method="post" action="savesetting.php">
        <p style="text-align: center">
            <?php echo "<center><h1>Welcome $teacher</h1><center>" ?>
            Username : <?php  echo $a;
             
            ?> <br/>
            Password :<br/> <input type="password" name="password" id="sPassword" size=24 placeholder="Enter New password"><br/>
            Re-Password  :<br/> <input type="password" name="re-password" id="sRe-Password" size=24 placeholder="Enter New password" onchange='reCheckpassword()'><br/>
            <br />
            <input type="submit" value="Save" class="button" onClick="checksave()" />
            
            
              
            
            
            
            
        </p>
        </form>

<?php
include "include/footer.php";
} //end of upper php if
?>


