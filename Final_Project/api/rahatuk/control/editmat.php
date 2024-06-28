<!DOCTYPE html>
<html lang="en">
<?php
include('admin_session.php');





?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
  
.w-100 {
  width: 100% !important;
  height: 60vh;
}
  </style>
</head>

<body id="page-top">


<!-- Modal -->
<div class="modal fade" id="updatemod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<?php



$mat_id=mysqli_real_escape_string($conn,$_GET['catup']);

$get_mat="SELECT * FROM `services` WHERE `id` = '$mat_id' ";

$mat_res=mysqli_query($conn,$get_mat);

$mat_info=mysqli_fetch_array($mat_res,MYSQLI_ASSOC);

$mat_cat_is=$mat_info['cat_id'];



$mat_type_is=$mat_info['link'];












?>

       

   <form action="" method="post"  enctype="multipart/form-data">
   
     <div class="form-group">
	 
	 
	 
	 
   <div class="form-group">
  <label for="sel1">Category:</label>
  <select class="form-control" id="sel1" name="cat_id" required>
  
  <?php
  
                     /// <option>1</option>



$show_offer="SELECT * FROM `categoryies`  ORDER BY `order`";

$showofeer_res=mysqli_query($conn,$show_offer);
$offer_num=mysqli_num_rows($showofeer_res);

if(empty($offer_num)){
	
echo "<option>Please add category.</option>";
	
}else{
	
	
	
while($row=mysqli_fetch_array($showofeer_res, MYSQLI_ASSOC)){
	
	$cat_id=$row['id'];
	
	$cat_ti=$row['title'];
	
	

	if($cat_id == $mat_cat_is){
		
		
		echo "<option value='$cat_id' selected>$cat_ti</option>";
		
		
	}else{
	
	echo "<option value='$cat_id' >$cat_ti</option>";
	
	}
	 
	 
	
	
}




}





?>

  </select>
  
</div>
   
   
</div>



<div class="form-group">
	 
	 
	 
   <div class="form-group">
  <label for="sel1">Book Type:</label>
  <select class="form-control" id="sel1" name="main_id" required>
  
  <?php
  
                     /// <option>1</option>


$show_offer="SELECT * FROM `services` WHERE `link` = '0' or link = '' order by id desc";

$showofeer_res=mysqli_query($conn,$show_offer);
$offer_num=mysqli_num_rows($showofeer_res);

if(empty($offer_num)){
	
echo "<option>Please add main items.</option>";
	
}else{
	
	echo "<option value='0' selected>Main Item</option>";
	
while($row=mysqli_fetch_array($showofeer_res, MYSQLI_ASSOC)){
	
	$cat_id=$row['id'];
	
	$cat_ti=$row['title'];
	
	
	

	if($cat_id == $mat_type_is){
		
		
		echo "<option value='$cat_id' selected>$cat_ti</option>";
		
		
	}else{
	
	echo "<option value='$cat_id' >$cat_ti</option>";
	
	}
	 
	 
	
	
}




}





?>

  </select>
  
</div>
   
   
</div>






  <div class="input-group mb-3">
  <div class="input-group-prepend">



  </div>
  
  Title:  
   <input type="text" placeholder="Title" name="mat_title" class="form-control" id="usr" 
   
   value="<?php echo $mat_info['title']; ?>"
   required>
   
   
   
</div>


<input type="hidden" placeholder="Title" name="mat_of" class="form-control" id="usr" 
   
   value="<?php echo $mat_info['title']; ?>"
   >
   
   <input type="hidden" placeholder="Title" name="mat_user" class="form-control" id="usr" 
   
   value="<?php echo $mat_info['title']; ?>"
   >
   

 
    <div class="input-group mb-3">
  <div class="input-group-prepend">
   
   



  </div>
   
   
   
   Price:  
  <input type="text" placeholder="Price OMR" name="mat_price"  class="form-control " id="pwd"
   value="<?php echo $mat_info['price']; ?>"
  required>
   
   
   
   
</div>



    <div class="input-group mb-3">
  <div class="input-group-prepend">
   
   



  </div>
   
   
   
   Available: 
   
  <input type="number" placeholder="Available" name="mat_in"  class="form-control " id="pwd"
   value="<?php echo $mat_info['available']; ?>"
  required>
   
   
   
   
</div>


     <div class="input-group mb-3">
  <div class="input-group-prepend">
   
   

  </div>
   
   
   
   
 Description:
 
 <div class="form-group">
  <textarea class="form-control"
style="resize:none;"  rows="5"  cols="42" id="comment" name="mat_des" placeholder="Description .." 
required><?php echo $mat_info['descrption']; ?></textarea>
</div>
   
   
</div>



<?php 
   
   if(isset($_GET['of'])){
	   
	   
	   $name_action="addtrans";
	   
	  $image_input="Images is successfully loaded.";
	   
   }else{
   $name_action="addcat";
   
   $image_input=' <input type="file" name="files[]"  title="Please select one image." multiple/>';
   
   }
   
   
   ?>
   
   
   
   
<center><h4 class="bg-light">[Pictures]</h4></center>

 <?php
 
 
 echo " $image_input";
 
 
 ?>
 

 <br>
 
 
    <center>
   
   
   
   
   
   
   
   
   <?php

   
   if(isset($_POST['addcat'])){
	   
$user_id="";
$offer_id="";
	$cat_id=$_POST['cat_id'];
	
$mat_title=$_POST['mat_title'];

$mat_price=$_POST['mat_price'];

$mat_des=$_POST['mat_des'];

$mat_in=$_POST['mat_in'];

$main_is_id=$_POST['main_id'];

$mat_id=mysqli_real_escape_string($conn,$_GET['catup']);

//get data 
//$add_cat="INSERT INTO `services`(`title`, `price`, `descrption`, `cat_id`, `user_id`, `offer_id`, `available`) VALUES
 ///('$mat_title','$mat_price','$mat_des','$cat_id','$user_id','$offer_id','$mat_in')";
 		
	
$add_cat="UPDATE `services` SET `title`='$mat_title',`price`='$mat_price',`descrption`='$mat_des',`cat_id`='$cat_id',`available`='$mat_in',`link`='$main_is_id' WHERE `id` ='$mat_id'";




	
		if(mysqli_query($conn,$add_cat)){
	
	/// add new image 
	
	 $last_id = $mat_id;
	 
		}else{
			
			echo mysqli_error($conn);
			
			
		}
		
	


///insert 

 $file_name=$_FILES["files"]["name"][$key];
 
 
 
 
 
 $i=0;
 
extract($_POST);
$error=array();
$extension=array("jpeg","jpg","png","gif");


	
	
foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
	$i++;
	

    $file_name=$_FILES["files"]["name"][$key];
    $file_tmp=$_FILES["files"]["tmp_name"][$key];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
if(!empty($ext)){
	
	
		if($i == 1){
		
		
		$delete_old_mg="DELETE FROM `services_images` WHERE `service_id` ='$mat_id'";
	
	mysqli_query($conn,$delete_old_mg);
	
	
		
		
		
	}
	
	
	
}
    if(in_array($ext,$extension)) {
        if(!file_exists("../photo_gallery/".$txtGalleryName."/".$file_name)) {
            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"../photo_gallery/".$txtGalleryName."/".$file_name);
			
		///insert 
		
	//	$add_image="INSERT INTO `offers_images`(`url`, `offer_id`) VALUES ('$file_name','$last_id')";
		//mysqli_query($conn,$add_image);
		
		$mon=12;
		
        }
        else {
            $code=md5(uniqid(rand(), true));
            $filename=basename($file_name,$ext);
            $newFileName=$filename.$code.".".$ext;
            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"../photo_gallery/".$txtGalleryName."/".$newFileName);
        //insert
		//		$add_image="INSERT INTO `offers_images`(`url`, `offer_id`) VALUES ('$newFileName','$last_id')";
		//mysqli_query($conn,$add_image);
		$mon=22;
		
		
		}
		
		
if($mon == 22){
	
	$url_is = $newFileName;
	
}else{
	
	$url_is = $file_name;
	
	
}


	
	
	$add_image="INSERT INTO `services_images`(`url`, `service_id`) VALUES ('$url_is','$last_id')";
	
	mysqli_query($conn,$add_image);
	
	
	
	
    
	
	
	
	
	

		
		
	//$show_modal1 = true;
	
	
    }
	
	
	
	
	////insert image here 
	
	
	
}   

///final 

   	echo "

	<br>
	<center>
	<div class='alert alert-success'role='alert'>
  <h6>This book is successfully update.</h6>
  
</div>
	
	</center>

	";
	
//$show_modal1 = true;




echo '
		
		
		<script type="text/javascript">
    window.location.href = "editmat.php";
</script>

		
		
		';
	
		
		
		
		
	  
   }
   

   
   
   
   
   
   
   ?>
   
   
  
   
   
 
</div>
   
   
  
   
   
   



      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="addcat" class="btn btn-primary" value="Save changes">
      </div>
    </div>
  </div>
</div>


   </form>


</div>



<!-- Modal  2 -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  
	  
	  
	<?php





if(isset($_GET['catdel'])){
	
	
	
	$del_cat_id=$_GET['catdel'];
	
	$delete_cat="DELETE FROM `services` WHERE id ='$del_cat_id' ";
	
	if(mysqli_query($conn, $delete_cat)){
	

    header("location:editmat.php");




	}
	
}

















if(isset($_GET['show'])){
	
	$show_id=mysqli_real_escape_string($conn, $_GET['show']);
	
	$show_res=mysqli_query($conn,"SELECT * FROM `offers` WHERE `id` = '$show_id'");
	$showvalue=mysqli_fetch_array($show_res);
	$offer_title_is=$showvalue['title'];
	
	
	
	
	
	///////get images 
	$img_res=mysqli_query($conn,"SELECT * FROM `offers_images` WHERE `offer_id` ='$show_id'");
	
	
	
}






?>
	
	  
	  
	  
	  
	  
	  <h4><?php echo "[$offer_title_is]"; ?></h4>
	  
	  
	  
        <a  class="close" href='waiting.php' >&times;</a>
		
		
	
		
		
      </div>
      <div class="modal-body bg-info">
   

   <br>
   
   <?php
   
   //$showvalue['title'];
  echo "<b>ID: <span class='text-white'>[OFFER-".$show_id."]</span></b>";
  echo " <b>Price: <span class='text-white'>[".$showvalue['price']." OMR]</span></b>";
  echo " <b>Status: <span class='text-warning'>[".$showvalue['state']."]</span></b><br>";
  echo " <b>DATE: <span class='text-white'>[".$showvalue['date']."]</span></b>";
  echo " <b>Time: <span class='text-white'>[".$showvalue['time']."]</span></b><br>";
  echo " <b>Description: <span class='text-white'>".$showvalue['description']."</span></b>";
  
   echo "<hr>";
   
   
   echo '<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
   
 
   ';
   

 
 $img_res_2=mysqli_query($conn,"SELECT * FROM `offers_images` WHERE `offer_id` ='$show_id'");
	
	$m=0;
	
  while($pic2=mysqli_fetch_array($img_res_2)){
	 
	 $url2="../photo_gallery/".$pic2['url'];
	
	if($m == 0){
	echo'
	
	
	<div class="carousel-item active">
      <img class="d-block w-100" src="'.$url2.'" >
    </div>
	
	
	';
	}else{
		
		
		echo'
	
	
	<div class="carousel-item">
      <img class="d-block w-100" src="'.$url2.'" >
    </div>
	
	
	';
		
		
	}
	
	$m++;
	 
	 
 }   
 
 
 
 echo' 
</div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>';
 
 
 echo '
 
 <center>
 
 <form action="" method="post" >
  
  
  
  <br>
  
  <div class="form-group">
  <label for="sel1" class="text-white" >Update Status:</label>
  <select class="form-control" id="sel1" name="update_state" >
    <option value="Waiting" class="bg-warning" >Waiting</option>
    <option value="Accept" class="bg-success" >Accept</option>
    <option value="Decline" class="bg-danger"  >Decline</option>
    
  </select>
</div>

  <input type="hidden" value="'.$_GET['show'].'"" name="edit_id" >
  
  <button type="submit" name="doupdate" class="btn btn-success btn-block">Confirm</button>
</form>
 
 
 </center>

 
 ';
 
   ?>
   
   
   
   <br>

     <?php
	 
	 
	 $edit_id=$_POST['edit_id'];
	 $new_state=$_POST['update_state'];
	 if(isset($_POST['doupdate'])){
		 
		 
		if(mysqli_query($conn,"UPDATE `offers` SET `state`='$new_state' WHERE `id` ='$edit_id'")){
			
			
			
			  header("location:waiting.php");
			
			
			
			
		}else{
			
			
			
		
			//
			
		} 
		 
		 
		 
		 
	 }
	 
	 
	 
	 
	 
	 ?>
	 
      </div>
      <div class="modal-footer">
	  
	 
	  
        <a class="btn btn-outline-dark btn-sm" href='waiting.php'>Close</a>
      </div>
    </div>

  </div>
</div>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-cogs"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Portal<sup></sup></div>
      </a>

<?php

include('slider.php');

?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">



            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo "$name"; ?></span>
                <img class="img-profile rounded-circle" src="img/profile.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Service</h1>
  
          </div>

          <!-- Content Row -->
          <div class="row">
		  
		  <?php
		  
if(isset($_GET['show'])){
	
	$show_id=mysqli_real_escape_string($conn, $_GET['show']);
	
	$show_res=mysqli_query($conn,"SELECT * FROM `matrials` WHERE `state` = 'Waiting'");
	$showvalue=mysqli_fetch_array($show_res);
	$offer_title_is=$showvalue['title'];
	$offer_id=$showvalue['id'];
	$available=$showvalue['available'];
	
	
	
	
	///////get images 
	$img_res=mysqli_query($conn,"SELECT * FROM `offers_images` WHERE `offer_id` ='$offer_id'");
	
	
	
}


?>






<?php

//show offer 





$show_offer="SELECT * FROM `services`  ORDER BY `id` desc";

$showofeer_res=mysqli_query($conn,$show_offer);
$offer_num=mysqli_num_rows($showofeer_res);

if(empty($offer_num)){
	
	echo 
	"<br><center><h4>No books has been found.</h4></center>";
	
}else{
	
	echo '
	
	
	<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr class="bg-secondary border-white text-white">
	   <th scope="col" class="border-white">Categroy</th>
        <th scope="col" class="border-white">Title</th>
		    <th scope="col" class="border-white" >Price</th>
        <th scope="col" class="border-white" >Description</th>
		
		<th scope="col" class="border-white" >Available</th>
        <th scope="col" class="border-white" >More</th>
      </tr>
    </thead>
    <tbody>
      
	
	';
	
while($row=mysqli_fetch_array($showofeer_res, MYSQLI_ASSOC)){
	
	$state=$row['state'];
	
	$user_id=$row['cat_id'];
	
	$link=$row['link'];
	
	$show_link="SELECT * FROM `services` WHERE `id` = '$link' ";

    $link_res=mysqli_query($conn,$show_link);
	$feach_link=mysqli_fetch_array($link_res);
	$lin_title=$feach_link['title'];
	
	
	if(empty($lin_title)){
		
		$title_show=$row['title'];
		
		
		
		
	}else{
		
		$title_show=$row['title']." [part] <br>  <font color='red'>$lin_title</font>";
		
		
	}
	
	
		   
    $ses_sql = mysqli_query($conn,"select * from categoryies where id = '$user_id' ");
	   
  
   
   
   $row2 = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
    $comp_name= $row2['title'];
	
	
	
	
	
	echo" <tr>
	 <td>".$comp_name."</td>
        <td class='bg-warning'>".$title_show."</td>
		<td class=''>".$row['price']." OMR</td>
        <td>".$row['descrption']."</td>   
		<td>".$row['available']."</td>  
	<td class='bg-danger'>
	
	<a onclick='return confirm_delete3();' href='?catdel=".$row['id']."' class='text-white'><b>Delete</b></a>
	
	|
		<a  href='?catup=".$row['id']."' class='text-white'><b>Update</b></a>
	
	</td>
		
		 </tr>
		";
     
	
	
}

echo'

      
    </tbody>
  </table>
</div

';


}




////delete cat 



	//ok 







?>



            </div>

			
		

          <!-- Content Row -->

      <!-- End of Main Content -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Rahtuk <?php echo date("Y"); ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Click "Logout" below if you are ready to end your session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

   <?php if($show_modal):?>
  <script> 
  $('#myModal2').modal({
    backdrop: 'static',
    keyboard: false
});
  </script>
<?php endif;?>




   <?php if(isset($_GET['catup']) or isset($show_update)):?>
  <script> 
  $('#updatemod').modal({
    backdrop: 'static',
    keyboard: false
});
  </script>
<?php endif;?>





<script type="text/javascript">
		function confirm_delete3() {
				return confirm("Are you sure you want to delete this book?");
		}

</script>



</html>
