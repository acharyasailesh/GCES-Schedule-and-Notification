<?php

session_start();
$a=$_SESSION['userlogin'];
if (!isset($a)) header("Location:../login.php");
?>

<?php error_reporting(0); ?>
<!Doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Dashboard</title>
<style>
html , body  ,h1  {
	margin:0 ;
	padding: 0;
	font-family:Arial, Helvetica, sans-serif;
	font-weight: lighter;
}
.container {
	width: 90%;
}
.block {
	display: block;
}
.centered {
	margin:0 auto;
}
	
textarea {
	box-sizing:content-box;
}
#items_container{
	list-style:none;
	border-left:1px solid rgb(234,234,234);
	border-right:1px solid rgb(234,234,234);
	border-bottom:1px solid rgb(234,234,234);
	margin:0 ;
	padding: 0;
}
input , textarea {
	border: 1px solid rgb(234,234,234);
	margin-bottom:16px;
	padding: 8px 16px;
}
#items_container li {
	padding: 0;
	padding : 8px 16px;
	border-top:1px solid rgb(234,234,234);
}
#items_container li a {
	float: right;
	padding-left: 8px;
	padding-right: 8px;
	text-decoration:none;
}
.delete {
	font-weight: bold;
	color: red;
}
#items_container li:hover {
	cursor: pointer;
	background-color:rgb(245,245,255);
}
#the_title {
	font-weight: bold;
	background-color: rgb(65,65,235);
	font-size: 60px;
	padding-top: 16px;
	padding-bottom: 16px;
	margin-bottom: 16px;
	color: white;
	text-shadow: 1px 1px 1px #000;
}
h1  {
	margin-bottom: 16px;
	margin-top: 16px;
	text-transform: uppercase;
}
input[type=submit] {
	float: right;
	background-color: rgb(15,155,15);
	min-width: 150px;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: white;
	text-transform: uppercase;
}
input[type=submit]:active ,
input[type=submit]:hover {
	cursor:pointer;
	background-color : rgb(10,200,10);
}
.info {
	display: block;
	text-transform:uppercase;
	clear: both;
	font-family: Verdana, Geneva, sans-serif;
	font-weight: bold;
	margin-bottom:10px;
}
</style>
</head>
<body>
<div id="the_title">
 <div class="container centered">
  Welcome  Admin !!!
 </div>
</div>
<div class="container centered">
 <div style="float:left;width:60%;">
  <h1><a href="index.php">Add New Notice</a></h1>
  <form action="" method="post" enctype="multipart/form-data"> 
  <?php
  $title = '';
  $msg = '';
  $btnMsg ="Add Notice";
  if (isset($_GET['edit'])) {
	  $con = getConn();
	  $query = mysql_query("Select * from the_notices where id = '" . escape($_GET['edit'])."'");
	  $r = mysql_fetch_array($query);
      $title = $r['title'];
      $msg = $r['notice'];
	  $btnMsg  = "Update Notice";
  ?> 
  <input type="hidden" name="nid" value="<?php echo $_GET['edit']; ?>" />
  <?php  } //end if ?>
      
  <input class="container block" type="text" name="title" value="<?php echo $title; ?>" placeholder="Title Of Notice"/>
  <input class="container block" type="file" name="filename" />
  <textarea class="container block" name="the_msg" placeholder="Your Notice"><?php echo $msg; ?></textarea>
  <div class="container centered">
  <input type="submit" value="<?php echo $btnMsg; ?>" />
  <div style="clear:both;"></div>
  </div>
  </form>
  
  
  <div class="info">
  <?php
  if (isset($_POST['title'])) {
	  $title =$_POST['title'] ;
	  $msg =$_POST['the_msg'] ;
	  $username = 'admin';
	  //add new notice
	  if (strlen($title) > 2 && strlen($msg) > 2) {
		if (isset($_FILES['filename'])) {
		 if (isset($_POST['nid'])) {
		   $nid = $_POST['nid'];
	       echo updateNotice($nid,$title,$msg,$_FILES ["filename"] ["tmp_name"],$_FILES ["filename"] ["name"]);
		 } else {
	       echo addNewNotice($title,$msg,$username,$_FILES ["filename"] ["tmp_name"],$_FILES ["filename"] ["name"]);
		 }
		} else {
		  echo 'please upload file' ;
		}
	  } else {
		  echo 'please fill title and message' ;
	  }
  }
  ?>
  </div>
  
  
<h1> <a href="index.php">Add New User</a></h1>
  <form action="" method="post">
  <input class="container block" type="text" name="uname" value="" placeholder="Enter Username"/> 
  <input class="container block" type="password" name="pass" value="" placeholder="Enter Password"/> 
  <div class="container centered">
  <input type="submit" value="Submit" />
  </div>
  </form>
  
  <div class="info">
    <?php
	//add new user
	if (isset($_POST['uname']) && strlen($_POST['uname']) > 2) {
		echo addNewUser($_POST['uname'],$_POST['pass']);
	}
	?>
    
  </div>
  
  
 <h1>Add New Subject</h1>
  <form action="" method="post">
  <input class="container block" type="text" name="scode" value="" placeholder="Enter Subject Code"/> 
  <input class="container block" type="text" name="tname" value="" placeholder="Enter Teacher's Name"/> 
  <div class="container centered">
  <input type="submit" value="Add Subject" />
  </div>
  </form>
  
  <div class="info">
    <?php
	//add new user
	if (isset($_POST['scode']) && isset($_POST['tname'])) {
		echo addNewSubject($_POST['scode'],$_POST['tname']);
	}
	function addNewSubject($subject,$tname) {
		$con = getConn();
		$query = mysql_query("Insert into the_subject (subcode,teacher) values ('". $subject . "','" . $tname . "')");
		if ($query) {
			return "subject added";
		} else {
			return "adding new subject failed";
		}
	}
	?>
    
  </div>
    
 </div> <!-- div 60% -->
 
 <div style="float:left;width:40%">
  <h1>Previous Notices</h1>
  
  <div class="info">
  <?php
  if (isset($_GET['delete'])) {
	  //delete users here
	  echo deleteNotice($_GET['delete']);
  }
  ?>
  </div>
  
  
  <ol id="items_container">
  <?php 
	function deleteUser($uid) {
	    $con = getConn(); 
		$query = mysql_query("Delete from teacherlist where id = '" . escape($uid) . "'");
		if ($query) {
			return "User deleted";
		} else {
			return "Couldn't delete user";
		}
	}
	
	
	function deleteNotice($id) {
	    $con = getConn(); 
		$query = mysql_query("Delete from the_notices where id = '" . escape($id) . "'");
		if ($query) {
			return "Notice deleted";
		} else {
			return "Couldn't notice";
		}
	}
	function escape($str) {
		return mysql_real_escape_string($str);
	}
	  function addNewUser($name,$pass) { 
	    $con = getConn(); 
		$pass = md5($pass);
		$query = mysql_query("Insert into `teacherlist` (`username`,`password`) values ('".$name."','".$pass."')");
		if ($query) {
			return "User added successfully";
		}else{
			return "User addition failed";
		}
	}
	  function addNewNotice($title,$msg,$username,$tmpname,$filename) { 
	    $con = getConn();
	     $date = date('m/d/Y h:i:s a', time());
                
		
	    $target = "uploads/" . basename ( $filename );
	    // the dir. to upload the file
	    move_uploaded_file ( $tmpname, $target );
	   // if (move_uploaded_file ( $tmpname, $target )) {
		$query = mysql_query("Insert into the_notices (title,notice,addedby,DateTime,filename) values ('$title','$msg','$username','$date','$target')")
				     or mysql_error();
		 if ($query) {
	 		return "Notice added successfully";
 		 }else{
			return "Notice addition failed";
		 }
		} /*else {
			return "Notice addition failed" . mysql_error($con);
		}*/
	
	
	function updateNotice($nid,$title,$msg,$tmpname,$filename) {
	    $con = getConn();
	    global $a;
	    $target = "uploads/" . basename ( $filename );
	    // the dir. to upload the file
	    move_uploaded_file ( $tmpname, $target );
	    // if (move_uploaded_file ( $tmpname, $target )) {
		 $query = mysql_query("Update `the_notices` set filename = '". $target. "' , title = '" .$title. "' , notice = '".$msg."' where id = '".escape($nid)."'");
		 if ($query) 
			return "Notice Updated successfully";
		
		 else return "Notice Update failed";
		 
		
	//	else  	return "Notice Update failed";
		
	}
	
	function getConn() {
	  define('HOST','localhost');
	  define('USER','root');
	  define('PASS','user');
	  define('DB','gces notification');
	  $link = mysql_connect(HOST,USER,PASS);
	  mysql_select_db(DB); 
	  return $link;
	}
	  $con = getConn();
	  $q = mysql_query("Select * from the_notices order by id desc");
	  while($r = mysql_fetch_array($q)) {
  ?> 
    <li><?php echo $r['title']; ?> <a href="?edit=<?php echo $r['id']; ?>" class="edit">E</a><a href="?delete=<?php echo $r['id']; ?>" class="delete">D</a></li> 
    
    <?php
	} //end while
	if (mysql_affected_rows($con) == 0) {
		echo '<li>No Notice To Show</li>';
	}
	?>
  </ol>
  <h1>Existing Users</h1>
  
  <div class="info">
  <?php
  if (isset($_GET['deleteuid'])) {
	  //delete users here
	  echo deleteUser($_GET['deleteuid']);
  }
  ?>
  </div>
  
  <ol id="items_container"> 
  <?php
	  $q = mysql_query("Select * from teacherlist order by id desc");
	  while($r = mysql_fetch_array($q)) {
  ?> 
    <li><?php echo $r['Username']; ?> <a href="?deleteuid=<?php echo $r['id']; ?>" class="delete">D</a></li> 
    
    <?php
	} //end while
	if (mysql_affected_rows($con) == 0) {
		echo '<li>No Users To Show</li>';
	}
	?>
  </ol>
  <form action="../logout.php" method="post">
  <div class="container centered">
	<input type="submit"  value="Log out">
  </div>
  </form>
 </div> <!--- div  40%--> 
</div> <!-- container centered -->

</body>
</html>