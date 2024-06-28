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
<!-- Modal  2 -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  
	  
	  
	<?php

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
	  
	  
	  
        <a  class="close" href='accept.php' >&times;</a>
		
		
	
		
		
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
  <option value="Accept" class="bg-success" >Accept</option>
    <option value="Waiting" class="bg-warning" >Waiting</option>
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
			
			
			
			  header("location:accept.php");
			
			
			
			
		}else{
			
			
			
		
			//
			
		} 
		 
		 
		 
		 
	 }
	 
	 
	 
	 
	 
	 ?>
	 
      </div>
      <div class="modal-footer">
	  
	 
	  
        <a class="btn btn-outline-dark btn-sm" href='accept.php'>Close</a>
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
            <h1 class="h3 mb-0 text-gray-800">Add Categories</h1>
  
          </div>

          <!-- Content Row -->
          <div class="row">
		  

   <form action="" method="post"  enctype="multipart/form-data">
   
   
   <div class="form-group">
   
   
   <div class="input-group mb-3">
  <div class="input-group-prepend">



  </div>
   <input type="text" placeholder="Title" name="cat_title" class="form-control" id="usr" required>
   
   
   
</div>




 
    <div class="input-group mb-3">
  <div class="input-group-prepend">
   
   



  </div>
   
   
   
   
  <input type="number" placeholder="Order" name="cat_order"  class="form-control " id="pwd" required>
   
   
   
   
</div>
     <div class="input-group mb-3">
  <div class="input-group-prepend">
   
   



  </div>
   
   
   
   
 
 <div class="form-group">
  <textarea class="form-control"
style="resize:none;"  rows="5"  cols="42" id="comment" name="cat_des" placeholder="Description .." required></textarea>
</div>
   
   
</div>

<center><h4 class="bg-light">[Picture]</h4></center>

 
 <input type="file" name="files[]" required title="Please select one image."/>
 <br>
 
 <hr>
   
    <center>
   
   <button type="reset" class="btn btn-danger rounded-pill border-white" >Rest</button>
   
   <button type="submit" class="btn btn-success rounded-pill border-white" name="addcat" >Add Category</button>
   
   
   </center>
   
   
   <?php
   
   if(isset($_POST['addcat'])){
	   
//get data 

$cat_title=$_POST['cat_title'];

$cat_order=$_POST['cat_order'];

$cat_des=$_POST['cat_des'];

///insert 


 $i=0;
 
	extract($_POST);
$error=array();
$extension=array("jpeg","jpg","png","gif","pdf");
foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
	$i++;
	
	
    $file_name=$_FILES["files"]["name"][$key];
    $file_tmp=$_FILES["files"]["tmp_name"][$key];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);

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


$add_cat="INSERT INTO `categoryies`(`order`, `title`, `description`, `image_url`) VALUES
 ('$cat_order','$cat_title','$cat_des','$url_is')";
 		
		
		if(mysqli_query($conn,$add_cat)){
		echo "

	<br>
	<center>
	<div class='alert alert-success'role='alert'>
  <h6>Your category is successfully added.</h6>
  
</div>
	
	</center>

	";
    }
	
    else {
        
		echo "

	<br>
	<center>
	<div class='alert alert-danger'role='alert'>
  <h6>Please add image.</h6>
  
</div>
	
	</center>

	";
	
		
		
	//$show_modal1 = true;
	
	
    }
	
	
	
	
	////insert image here 
	
	
	
}   
	  

///final 


//$show_modal1 = true;
	  
   }
   
   
   }
   
   
   
   
   
   
   ?>
   
   
 
</div>
   
   
  
   
   
   </form>
   
   <br>

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
             <span>Copyright &copy; <?php echo date("Y"); ?> Rahtuk</span>
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

</html>
