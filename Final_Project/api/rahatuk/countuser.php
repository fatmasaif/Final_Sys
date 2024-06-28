

 <?php

 include_once('session.php');
 
  
 if(!empty($_GET['q'])){
	 
	$n1=$_GET['q'];
	$n2=$_GET['n'];
	
	
	$res_is= $n1 * $n2;
	
	echo "<div dir='rtl'><center><strong><b> Price: <font color='white'>$res_is OMR</font></b></strong></center></div>";
	
	
 }
 
   if(empty($_GET['q'])){
		  
		  
		  
		 // header("Location: index.php");
		  
	  }
	 
	 
?>