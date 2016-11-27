
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
         <title>Dashboard</title>
        <link rel="stylesheet" href="stylesheet/general.css">
        <link rel="stylesheet" href="stylesheet/button.css">
        <link rel="stylesheet" href="include/header1.css">
        <link rel="stylesheet" href="include/footer.css">
        <link rel="stylesheet" href="stylesheet/dashboard.css">

    </head>

	<body>
	    <?php
		    session_start();
	$a=$_SESSION['userlogin'];
	if (!isset($a)) header("Location:login.php");

	    ?>
	    <aside class="sideBar">
			<ul>
				<li id="menu1" class="current"  class="menu"><a href="teacher_entry.php">HOME</li></a>
				<li id="menu2" class="menu"><a href="settings.php">Setting</a></li>
				<li id="menu4" class="menu"><a href="teacher_task.php">Upload Task</a></li>
				
				
				<li id="menu7" class="menu"><a href="aboutteacher.php">About me</li></a>
				<li id="logout" class="button"><a href="logout.php">Log Out</a></li>
			</ul>	
			
	    </aside>
	    
		
	</body>
</html>
