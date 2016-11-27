
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
   
   <style>
    p{
        font-size: large;
        
        
    }
    
   </style>
   
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
            Password :<br/> <input type="password" name="password" id="password" size=24 placeholder="Enter New password"><br/>
            Re-Password  :<br/> <input type="password" name="re-password" id="password" size=24 placeholder="Enter New password"><br/>
            <br />
            <input type="submit" value="Save" class="button" onClick="checksave()" />
            
             <script type="text/javascript">
                 
                 
                 function checksave() {
                    //code
                    document.write("Sucessfully save");
                 }
                </script>
                 
                 
              
            
            
            
            
        </p>
        </form>

<?php

} //end of upper php if
?>


