<?php
error_reporting(0);
if (isset ( $_GET ['id'] )) {

	$con = mysql_connect ( "localhost", "root", "" );
	mysql_select_db ( "teacher_task" );
	
	$selectRaw = mysql_query("Select * from tasklist where id = '" . $_GET['id'] . "'",$con);
	if ($selectRaw) {
		$filename = mysql_fetch_array($selectRaw)['filename'];
	}
	
	?>

<form action="" method="POST" enctype="multipart/form-data">
	<div>
		<input type="file" name="file" />
		<input type="hidden"  name="id" value="<?php echo $_GET['id']; ?>" />
		<input type="hidden" name="oldfile" value="<?php if ($filename != null) echo $filename;?>" />
	</div>
	<div>
		<input type="submit" value="Update" />
	</div>
</form>

<?php


if (isset ( $_FILES ['file'] )) {
	$target = "uploads/" . basename ( $_FILES ["file"] ["name"] );
	if (!isset($_POST['oldfile'])) die("Please Check The File ID");
	
	if (file_exists($_POST['oldfile']))
	unlink($_POST['oldfile']);//delete old file to free space
	
	if (move_uploaded_file ( $_FILES ["file"] ["tmp_name"], $target )) {
		if ($con !== null) {
			$a = "nothing";
			$b = "nothing";
			$query = mysql_query ( "Update `tasklist`Set filename = '" . $target . "' where id = '" . $_POST['id']
."'",$con); //update the filename
			if ($query)
				echo "DONE";
		}
	} else {
		echo "Sorry, there was an error updating task"; // task incomplete
	}
}
}
?>