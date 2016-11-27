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
	    <link rel="stylesheet" href="include/footer.css">
    </head>
    
    


    
    
    <body>
    	<header>
    		<div class = "headMain" >
	    		<div class = "div" ><img src="images/logo.png" class = "logo" ></div>
	    		<div class = "div" >
	    			<h1 class = "title">Gandaki College<br> of Engineering and Science</h1>
	    		</div class = "div" >
	    		<div>
	    			<form action="login.php" class = "login" >
							<input type="submit" class="button" value="Log In">
					</form>
	    		</div>
	    	</div>
		</header>
		<div class = "headbar" >0</div>
		<section class="contentMain">	
			<article class="slideCover">

				<figure class = "slide" >
					<img src="images/gces1.jpg" id="simg" onHover="hoverAll();" />
					<div class= "desc" id = "scaption" >GCES BUILDIING</div>
					<div class="leftButton" onClick="slide(-1)" id="left"> <img src="images/left.png" class="left" > 
					</div>
					<div class="rightButton" onClick="slide(1)" id="right"><img src="images/right.png" class="right" > 
					</div>
				</figure>
			</article>
			<article class="content">
				<p>
					GCES Notification and Schedule is a web based application which is targeted for all the related members, students, 
					teacher and the administrator for various simplicity. Some of the features of this application are: 
				</p>
				<ul class="list">
					<li>
						Students can view their respective semester class routine, assignment with due date, college notice 
						(both formal and informal) online as well as offline and comment if they have any query.
					</li>
					<li>
						Teachers can post their respective subject assignment along with due date, post changes related to their 
						respective practical class like postpone or shift the classes, etc..
					</li>
					<li>
						The college administrator can post various college notice like change in semester class routine, exam routine, surprise holiday, internal exam results, class test routine, etc .. The administrator will have all the rights to access and view each and every activity of the users. i.e. students and teachers . The authority level will be high 
						to low from administration, teachers and students.
					</li>
					<li>
						Any kind of changes in class routine, exam routine, etc. will be updated by the Administrator and it will 
						come as a notification to the targeted users. Therefore, the users can easily know the changes made.
					</li>
					<li>
						This application will run offline also, but it must be updated regularly so that it can adapt to changes made 
						in the application.
					</li>
				</ul>
			</article>
		</section>
		<?php  include('include/footer.php'); ?>
        <script src="slide.js" ></script>
    </body>

</html>