<?php
 
   session_start();
   
   include('config.php');
   
   $user_check = $_SESSION['login_user'];
  
   
   

	   
	   
 $ses_sql = mysqli_query($conn,"select * from users where email = '$user_check' ");
	   
  
   
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
    $name= $row['name'];
	$email=$row['email'];
	$user_id = $row['id'];
	$type = $row['type'];
    $date = $row['date'];
     $phone = $row['phone'];   
	$address=$row['address'];   
	
	
	
 
?>

 