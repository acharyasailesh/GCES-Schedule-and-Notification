<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php     ?></title>
	<link rel="stylesheet" type="text/css" href="stylesheet/default.css" />
	<link rel="stylesheet" type="text/css" href="stylesheet/login.css" />
	<link rel="stylesheet" type="text/css" href="stylesheet/button.css" />
	<link rel="stylesheet" type="text/css" href="stylesheet/login_head.css" />
</head>
<body>
	<header class="headMain">
			 <table class="headTable">
				<tr>
					<td class="hTd1">
						<img src="images/logo.png" class="logoImg" />
					</td>
					<td class="hTd2">
						<h1>Welcome<br> <?php echo $_SESSION['userlogin'];?></h1>
					</td>
				</tr>
			</table> 
	</header>