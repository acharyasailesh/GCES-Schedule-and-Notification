<head>
        <meta charset="utf-8" />
        <title>About Me</title>
        <title>Save Setting</title>
          <link rel="stylesheet" href="stylesheet/general.css">
        <link rel="stylesheet" href="stylesheet/button.css">
        <link rel="stylesheet" href="include/header1.css">
        <link rel="stylesheet" href="include/footer.css">
        <link rel="stylesheet" href="stylesheet/dashboard.css">
 	
    </head>
   <?php
   session_start();
   $a=$_SESSION['userlogin'];
if (!isset($a)) header("Location:login.php");

   include_once("include/head.php");  // it overwrites the following section
   include("sdashboard.php");
   require_once('include/databaseconnect.php');
   $teacher=strtoupper($_SESSION['loginuser']);
   echo "<center><h1>Welcome $teacher</h1><center>";
   ?>

<form action="studenttest.php"  method="post" style="text-align: center">
      <label name="username">
       Username <?php  $teacher=strtoupper($_SESSION['loginuser']);
		echo "<h1>{$teacher}</h1>";
		
       ?>
       </label> 
	
       <label>
	 DOB <input type="date" name="DOB" value="<?php get1('DOB');?>" /><br/>
	</label>
      
	 <label>
	    Level : Student<br/>
	    
	    
	 </label>
   
	
	<label>
	   Hobbies <input type="text" name="hobbies" value="<?php get1('Hobbies');?>" /><br/>
	 </label> 

	 
        <label>MORE DETAILS
	
       <textarea COLS=50 rows=20 name="about">
	 	<?php
	     get1('About');
		 
		
		?>
				  
	 
	 
       </textarea><br/>
      </label>
   
    <input type="submit" value="Save" class="button" onClick="checksave()">
      <script type="text/javascript">
	 
	 
	 function checksave() {
	    //code
	    document.write("Sucessfully save");
	 }
	</script>
	 
	 
      
      
      
      
</form>

<?php
				 
				 
				 
				 
				     function get1($value1){
					    global  $teacher;
				   
				   		 $query1="SELECT * FROM studentlist";
						  $result1=mysql_query($query1);
						 $result1_numrows=mysql_num_rows($result1);
						 
						 for($i=0; $i<$result1_numrows;$i++){
						 
						 $result1_fetchrows=mysql_fetch_array($result1);
						 
						  $user=$result1_fetchrows['Username'];
						  
							  if ((strtoupper($user))==$teacher){
							    
							     $user1=$result1_fetchrows[$value1] or die(mysql_error());
							   echo $user1;
							   
							     break;
							      }
							  
							      
						 } // end of for;
				 
				 }
				       include "include/footer.php";
				 ?>
	

