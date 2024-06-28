<?php
 
   session_start();
   
   include('../config.php');
   
	
date_default_timezone_set('Asia/Muscat');
		
	 


$show_modal1 = false;
	 
 $date_now=date("d/m/Y");
 $time_now=date("h:i A");
 
 
 
   $user_check = $_SESSION['login_admin'];
  
   
   

	   
	   
 $ses_sql = mysqli_query($conn,"select * from admins where email = '$user_check' ");
	   
  
   
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
    $name= $row['name'];
	$email=$row['email'];
	$user_id = $row['id'];
	$type = $row['type'];
    $date = $row['date'];
     $phone = $row['phone'];   
	
	
	
	
   if(!isset($_SESSION['login_admin'])){
      header("location:login.php");
	  $conn->close();
   }
?>

 