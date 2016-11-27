<div align="center">
<?php

/*

<a href='logout.php' title="Logout <?php echo $a;?>";>Log out</a>
*/
    require_once('include/databaseconnect.php');
	$query1="SELECT * FROM teacherlist";
		 $result1=mysql_query($query1);
		$result1_numrows=mysql_num_rows($result1);
                
                for($i=0; $i<$result1_numrows;$i++){
		$result1_fetchrows=mysql_fetch_array($result1);
                 $user=$result1_fetchrows['Username'];
                        if ((strtoupper($user))==$a){
                        $status=$result1_fetchrows['loginstatus'];
                        
                                    if ($status==0)
                                   {   
                                   $query2="Create table {$a} (id int primary key auto_increment,Semster varchar(15),Message varchar(500),Subject varchar(15),Upload varchar(30),Commment varchar(500),DateTime varchar(10000))";
                                   $result2=mysql_query($query2);
                                    $insert="update teacherlist set loginstatus=1 where username='$user'"; 
                                    mysql_query($insert);
                                    
                                    
                                    
                                    break;
                                    
                                   }                        
        
                        }
                       } // end of for
                       
                       
           	
                
     
                
    
    

	
echo "<h1>Welcome {$a}</h1>";


?>
</div>