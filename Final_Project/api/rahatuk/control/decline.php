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

  <title>Rahtuk - Dashboard</title>

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
	  
	  
	  
        <a  class="close" href='decline.php' >&times;</a>
		
		
	
		
		
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
  <option value="Decline" class="bg-danger"  >Decline</option>
  <option value="Accept" class="bg-success" >Accept</option>
    <option value="Waiting" class="bg-warning" >Waiting</option>
    
    
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
			
			
			
			  header("location:decline.php");
			
			
			
			
		}else{
			
			
			
		
			//
			
		} 
		 
		 
		 
		 
	 }
	 
	 
	 
	 
	 
	 ?>
	 
      </div>
      <div class="modal-footer">
	  
	 
	  
        <a class="btn btn-outline-dark btn-sm" href='decline.php'>Close</a>
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
        <div class="sidebar-brand-text mx-3">Rahtuk<sup></sup></div>
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
            <h1 class="h3 mb-0 text-gray-800">Declined Offers</h1>
  
          </div>

          <!-- Content Row -->
          <div class="row">
		  
		  <?php
		  
if(isset($_GET['show'])){
	
	$show_id=mysqli_real_escape_string($conn, $_GET['show']);
	
	$show_res=mysqli_query($conn,"SELECT * FROM `offers` WHERE `state` = 'decline'");
	$showvalue=mysqli_fetch_array($show_res);
	$offer_title_is=$showvalue['title'];
	$offer_id=$showvalue['id'];;
	
	
	
	
	
	///////get images 
	$img_res=mysqli_query($conn,"SELECT * FROM `offers_images` WHERE `offer_id` ='$offer_id'");
	
	
	
}


?>






<?php

//show offer 





$show_offer="SELECT * FROM `offers` WHERE `state` ='decline' ORDER BY id DESC";

$showofeer_res=mysqli_query($conn,$show_offer);
$offer_num=mysqli_num_rows($showofeer_res);

if(empty($offer_num)){
	
	echo 
	"<br><center><h4>No declined offers has been found.</h4></center>";
	
}else{
	
	echo '
	
	
	<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr class="bg-secondary border-white text-white">
	   <th scope="col" class="border-white">Company</th>
        <th scope="col" class="border-white">ID</th>
        <th scope="col" class="border-white">Title</th>
        <th scope="col" class="border-white" >Price</th>
        <th scope="col" class="border-white" >DATE</th>
		 <th scope="col" class="border-white" >Time</th>
        <th scope="col" class="border-white" >Status</th>
        <th scope="col" class="border-white" >More</th>
      </tr>
    </thead>
    <tbody>
      
	
	';
	
while($row=mysqli_fetch_array($showofeer_res, MYSQLI_ASSOC)){
	
	$state=$row['state'];
	
	
	switch($state){
		
		case 'Waiting' : 
		
		$actcolor ='bg-info';
		
		break;
		
			case 'Decline' : 
		
		$actcolor ='bg-secondary';
		
		break;
		
			case 'Accept' : 
		
		$actcolor ='bg-success';
		
		break;
		
		
		
		
	}
	
	$user_id=$row['user_id'];
	
		   
    $ses_sql = mysqli_query($conn,"select * from users where id = '$user_id' ");
	   
  
   
   
   $row2 = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
     $comp_name= $row2['name'];
	$comp_email=$row2['email'];
	$comp_phone=$row2['phone'];
	//$user_id = $row['id'];
	//$type = $row['type'];
   // $date = $row['date'];
    // $phone = $row['phone'];   
	
	
	
	
	
	echo" <tr>
	 <td>".$comp_name." [".$comp_email."] [".$comp_phone."]</td>
	<td class='bg-warning text-white'>OFFER-".$row['id']."</td>
        <td>".$row['title']."</td>
        <td>".$row['price']." OMR</td>
        <td>".$row['date']."</td>
        <td>".$row['time']."</td>
        <td class='".$actcolor." text-white'>".$row['state']."</td>
		
		<td class='bg-danger'>|<a  class='text-white' href='?show=".$row['id']."'><b>Preview</b></a></td>
		
		 </tr>
		";
     
	
	
}

echo'

      
    </tbody>
  </table>
</div

';


}



///check if owner 

$id_check=$_GET['offdel'].$_GET['show'];

$check_owner="SELECT * FROM `offers` WHERE `id` ='$id_check'";

$owner_res=mysqli_query($conn,$check_owner);
$who=mysqli_fetch_array($owner_res);
$who_post=$who['user_id'];


if($who_post == $user_id){
	
	//ok 
if(isset($_GET['offdel'])){
	
	$delete_offer="DELETE FROM `offers` WHERE id ='$id_check' ";
	
	mysqli_query($conn, $delete_offer);
	
		echo "<script>

window.location.href='?offer=show';
</script>";

	
}


if(isset($_GET['show'])){
	
	
	
$show_modal = true;
	
}	
	
	
}else{
	
	if(!empty($id_check)){
	///exit("Don't play with me :) I will send your ip address to our support team. <br><br><br>");
	}
	
}






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

</html>
