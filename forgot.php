<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>FORGOT PASSWORD</title>
        <link rel="stylesheet" href="stylesheet/general.css">
        <link rel="stylesheet" href="stylesheet/header.css">
        <link rel="stylesheet" href="stylesheet/button.css">
        <link rel="stylesheet" href="stylesheet/section.css">
        <link rel="stylesheet" href="stylesheet/slide.css">
    </head>


<?php
 session_start();
// if(!iset($forgotcheck)){

 include("include/head.php");
 // }
?>

    
    
<h3 style="text-align:center;position: fixed;top: 250px; left: 450px;">Enter your Username/email to recover
<form action="forgot_process.php" method="post">
    
    <label>
        <input type="text" name="email" required=required maxlength=40 size=35  placeholder="Enter your login email or username" style="text-align:center;position: relative;top: 5px; left: 5px;">
         
            
    </label>
    <br><br>
    <input type="submit" class="button"/> 
</form>
</h3>