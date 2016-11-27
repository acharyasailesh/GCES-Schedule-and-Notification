<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
         <title>Student Dashboard</title>
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
                   
        include("sdashboard.php");
                   include("student_status.php");
                   
                
 
 
 
 ?>
 <?php
 }
else{
header("Location:login.php");

}
?>