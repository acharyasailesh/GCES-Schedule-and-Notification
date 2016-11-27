<!doctype html>
<html>
<head>
<title>Add New Task</title>
<style>
* {
	margin: 0;
	padding: 0;
}

#form-container {
	width: 70%;
	margin: 0 auto;
}

#form-container label {
	display: inline-block;
	width: 10%;
}

#side,#main {
	float: left;
}
.edit {
padding:10px;
display:block;
background-color: rgb(120,255,120);
margin:5px;
border:1px solid rgb(60,200,60);
border-radius:5px;
text-decoration: none;
color:blue;
}


#side {
	width: 20%;
}

#main {
	border-left: 5px solid black;
	padding-left: 20px;
	width: 40%;
}

h1 {
	border-bottom: 5px solid black;
}
</style>
</head>
<body>
	<div id="form-container">
		<h1>Welcome Username.</h1>
		<div id="side">Task Detail</div>
		<div id="main">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
				enctype="multipart/form-data">
				<div>
					<input type="file" name="file" />
				</div>
				<div>
					<input type="submit" value="Submit" />
				</div>
			</form>
		</div>
		<div style="clear: both;"></div>


<?php
error_reporting(0);
if (isset ( $_FILES ['file'] )) {
	$target = "uploads/" . basename ( $_FILES ["file"] ["name"] );
	// the dir. to upload the file
	if (move_uploaded_file ( $_FILES ["file"] ["tmp_name"], $target )) {
		
		$con = mysql_connect ( "localhost", "root", "" );
		mysql_select_db ( "teacher_task" );
		if ($con !== null) {
			$a = "nothing";
			$b = "nothing";
			$query = mysql_query ( "INSERT INTO `tasklist`(`details`, `filename`, `by`) VALUES 
       ('" . $a . "','" . $target . "','" . $b . "')", $con );
			if ($query)
				echo "DONE";
		}
	} else {
		echo "Sorry, there was an error adding new task"; // task incomplete
	}
}
?>
	<h1>Added Task.</h1>
<?php
error_reporting(0);
$con = mysql_connect ( "localhost", "root", "" );
mysql_select_db ( "teacher_task" );
if ($con !== null) {
	$query = mysql_query ( "Select * from tasklist", $con );
	while ( $r = mysql_fetch_array ( $query ) ) {
        echo '<a class="edit" href="edit.php?id='.$r['id'].'">Edit . "'. $r['filename'] . '"</a>';
	}
}
?>

</div>
</body>
</html>
