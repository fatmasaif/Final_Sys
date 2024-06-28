

 <?php

 include_once('session.php');
 


  
  
 if(!empty($_GET['q'])){
	 
	// include_once('config.php');
	 
	 $q=mysqli_real_escape_string($conn, $_GET['q']);
	 $getuser="SELECT * FROM `services` WHERE title LIKE '%$q%' OR descrption LIKE '%$q%' ";
	 $res=mysqli_query($conn, $getuser);
	 $count=mysqli_num_rows($res);
	 echo "<br>";
	  while ($row = mysqli_fetch_array($res,MYSQLI_ASSOC)) {
		  
		   
  $mat_cat=$row['cat_id'];
  $item_id_is=$row['id'];
  $item_name=$row['title'];
  $qun=$row['qun'];
  $pro_id=$have['project_id'];
  $price=$row['price'];	  
		  
$get_oneimg="SELECT * FROM `services_images` WHERE `service_id` ='$item_id_is'";
$itemimage_res=mysqli_query($conn,$get_oneimg);
$imagedata=mysqli_fetch_array($itemimage_res,MYSQLI_ASSOC);
$image_url="photo_gallery/".$imagedata['url'];


		  
		 /* echo "<a href='profile.php?squer=$userfind'><img src='$image_url' width='60' hieght='60' style='position: static;margin-left auto;' class='w3-circle' >
		  <strong><center>".$row['title']."</a></center></strong><hr>";
		  */
		  
		  
		  
		  echo "
	  <a href='index.php?cat=$mat_cat#$item_id_is'>
	  <div class='row' dir='ltr' style='margin-right:100px;'>
  <div class='col-10' style=' text-align: left;'>
<img src='$image_url'style=' width:  100px;
    height: 100px;' class='img-thumbnail img-responsive' height='100' width='100'/></a><br>
	  <a style='text-decoration: none;' href='index.php?cat=$mat_cat#$item_id_is'> <span>service: </span><strong><font color='green'> $item_name</font> </strong></a>
	   <br><span class='text-dark'>Price: </span><strong><font color='green'>$price OMR</font> </strong>
	  
	  
	  <hr style='width: 245px;' class='text-info'>
	  
	  </div>
	   </div>
	  
	  
	   ";



	   
		
		  
		  
		  
		  
	  }
	  
	  if($count == 0){
	echo "<br><p><font color='black'>No services were found matching your search.</font><p>";
		  
	  }
	
 }
 
   if(empty($_GET['q'])){
		  
		  
		  
		  header("Location: index.php");
		  
	  }
	 
	 
?>