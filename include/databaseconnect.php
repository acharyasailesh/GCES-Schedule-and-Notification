<?php

//Connecting to the databases;
	$server="localhost";
	$user="root";
	$password="user";
	$database="gces notification";
	$table_name1="course";
	$table_name2="teacher";
	$table_name3="users";
	$table_name4="studentlist";
 $connection=mysql_connect($server,$user,$password);
 $database_select=mysql_select_db($database,$connection);
 if(!$connection) mysql_error(); // checking for the connection to the databases
 if(!$database_select) mysql_error(); //checking for the database connection

/*$query1="SELECT * FROM studentlist";
$result1=mysql_query($query1);
$result1_numrows=mysql_num_rows($result1);
*/








?>



