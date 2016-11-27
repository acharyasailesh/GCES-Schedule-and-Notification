



<?php

session_start();
$a=$_SESSION['userlogin'];
if (!isset($a)) header("Location:login.php");
?>


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
	<body>
		<aside class="sideBar">
			<ul>
				<li id="menu1" class="menu"><a href="student_entry.php">HOME</li></a>
				<li id="menu2" class="menu"><a href="ssettings.php">Setting</a></li>
				
				<li id="menu7" class="menu"><a href="aboutStudent.php">About me</li></a>
				<li id="logout" class="button" class='logout'> <a href="logout.php">Log Out</li></a>
				
			</ul>	
		</aside>
		
	</body>
</html>
