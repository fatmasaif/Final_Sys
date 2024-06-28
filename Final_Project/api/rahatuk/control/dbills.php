<!DOCTYPE html>
<html lang="en">
<?php
include('admin_session.php');


if(isset($_GET['update'])){
	
	$show_modal= true;
	
	
	
}



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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>



</head>

<body id="page-top">
<div id="orderup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  
	  
	  
	<?php





if(isset($_GET['catdel'])){
	
	
	
	$del_cat_id=$_GET['catdel'];
	
	$delete_cat="DELETE FROM `cart` WHERE id ='$del_cat_id' ";
	
	if(mysqli_query($conn, $delete_cat)){
	

	
			if(empty($_GET['u']))

			{				header("location:dbills.php");
			
			
			}else{
				
				$review_link="review.php?u=".$_GET['u']."&s=".$_GET['s'];
				
				header("location:$review_link");
				
				
			}
			
			




	}
	
}

















if(isset($_GET['update'])){
	
	$show_id=mysqli_real_escape_string($conn, $_GET['update']);
	
	$show_res=mysqli_query($conn,"SELECT * FROM `cart` WHERE `id` = '$show_id'");
	$showvalue=mysqli_fetch_array($show_res);

	
	  $id_pro=$showvalue['order_id'];
     
	  $pro_name="Rahtuk-".$id_pro;
	  
	if(empty($pro_name)){
		
		
		
		$pro_is="Not Linked.";
		
	}else{
		
		
		$pro_is="<b class='text-danger'>".$pro_name."</b>";
		
	}
	
	
	
	
	//// item information 
	
	  $state=$row['state'];
	  $id_item=$showvalue['item_id'];
      $item_sql_res=mysqli_query($conn,"SELECT * FROM `services` WHERE `id` ='$id_item'");
	  $item_row=mysqli_fetch_array($item_sql_res);
	  $item_name=$item_row['title'];
	 $item_des=$item_row['descrption'];
	
	$user_id=$showvalue['user_id'];
    $ses_sql = mysqli_query($conn,"select * from users where id = '$user_id' ");
	   
  
   
   
    $row2 = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	$comp_name= $row2['name'];
	$comp_email=$row2['email'];
	$comp_phone=$row2['phone'];
	
	
	
	echo" <tr>
	 ";
	 
	 if(empty($comp_name)){
		 
		 
		//echo "    <td >System Administrator</td>";
		 
		 
	 }else{
		 
		 
		 
		 
		  

		 
		 
		 
		 
		 
	 }
	 
	 $quan=$showvalue['qun'];
	 $total=$showvalue['total'];
	 $price = $total /  $quan;
	 
	
     
	
	
}


	
	

	







?>
	
	  
	  
	  
	  
	  
	  <h4><?php echo "[Update Order]"; ?></h4>
	  
	  
	  
        <a  class="close" href='dbills.php' >&times;</a>
		
		
	
		
		
      </div>
      <div class="modal-body bg-info">
   

   <br>
   
   <?php
   
   //$showvalue['title'];
//  echo "<b>ID: <span class='text-white'>[REP".$show_id."]</span></b>";


 
 
 echo '
 
 <center>
 
 <form action="" method="post" >
  
 
  

  
  <br>';
  
  if(empty($_GET['u'])){
  echo '
  
  <div class="form-group">
  <label for="sel1" class="text-white" >Update Status:</label>
  <select class="form-control" id="sel1" name="update_state" >
   <option value="Waiting" class="bg-light"  >Waiting</option>
    <option value="Accepted" class="bg-success" >Accepted</option>
    <option value="Decline" class="bg-secondary" >Decline</option>
   ';
   
  }else{
	  
	   echo '
  
  <div class="form-group">
  <label for="sel1" class="text-white" >Update Status:</label>
  <select class="form-control" id="sel1" name="update_state" >
  <option value="Accepted" class="bg-success" >Accepted</option>
   <option value="Waiting" class="bg-light"  >Waiting</option>
    <option value="Decline" class="bg-secondary" >Decline</option>
   ';
   
   
	  
	  
  }
   
   echo ' 
    
  </select>
</div>

  <input type="hidden" value="'.$_GET['orderupdate'].'"" name="edit_id" >
  
  <button type="submit" name="doupdateorder" class="btn btn-success btn-block">Confirm</button>
</form>
 
 
 </center>

 
 ';
 
   ?>
   
   
   
   <br>

     <?php
	 
	 
	 $edit_id=$_POST['edit_id'];
	 $new_state=$_POST['update_state'];
	 
	 $new_quan=$_POST['mat_quan'];
	 $new_price=$_POST['mat_price'];
	 $total_price=$new_quan * $new_price;
	 
	 
	 
	 
	 if(isset($_POST['doupdateorder'])){
		 
		 
		if(mysqli_query($conn,"UPDATE `orders` SET `state`='$new_state' WHERE `id` ='$edit_id'")){
			
		

 $all_cart=mysqli_query($conn,"SELECT * FROM `cart` WHERE `order_id` ='$edit_id'");
	  
	  if($new_state == 'Accepted' ){
		  
		 
		 while($av=mysqli_fetch_array($all_cart,MYSQLI_ASSOC)){
			 
			$item_id=$av['item_id'];
			$qun=$av['qun'];

			
			
		mysqli_query($conn,"UPDATE `services` SET `available`= `available` - '$qun' WHERE `id` ='$item_id' ");	
			 
			 
			 
			 
			 
			 
		 }
		 
		 
	  }


       mysqli_query($conn,"UPDATE `cart` SET `state`='$new_state' WHERE `order_id` ='$edit_id' and `state` ='Waiting' or `state` ='Decline'");
		  
		  



		
			
			if(empty($_GET['u']))

			{				header("location:dbills.php");
			
			
			}else{
				
				$review_link="review.php?u=".$_GET['u']."&s=".$_GET['s'];
				
				header("location:$review_link");
				
				
			}
			
		}else{
			
			
			
		
			//
			
		} 
		 
		 
		 
		 
	 }
	 
	 
	 
	 
	 
	 ?>
	 
      </div>
      <div class="modal-footer">
	  
	 
	  
        <a class="btn btn-outline-dark btn-sm" href='dbills.php'>Close</a>
      </div>
    </div>

  </div>
</div>












<!-- Modal  2 -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  
	  
	  
	<?php

if(isset($_GET['orderdel'])){
	
	
	
	$del_cat_id=$_GET['orderdel'];
	
	$delete_cat="DELETE FROM `orders` WHERE  id ='$del_cat_id' ";
	
	if(mysqli_query($conn, $delete_cat)){
	

	
			if(empty($_GET['u']))

			{				header("location:dbills.php");
			
			
			}else{
				
				$review_link="review.php?u=".$_GET['u']."&s=".$_GET['s'];
				
				header("location:$review_link");
				
				
			}
			
			




	}
	
}






if(isset($_GET['catdel'])){
	
	
	
	$del_cat_id=$_GET['catdel'];
	
	$delete_cat="DELETE FROM `cart` WHERE id ='$del_cat_id' ";
	
	if(mysqli_query($conn, $delete_cat)){
	

	
			if(empty($_GET['u']))

			{				header("location:dbills.php");
			
			
			}else{
				
				$review_link="review.php?u=".$_GET['u']."&s=".$_GET['s'];
				
				header("location:$review_link");
				
				
			}
			
			




	}
	
}

















if(isset($_GET['update'])){
	
	$show_id=mysqli_real_escape_string($conn, $_GET['update']);
	
	$show_res=mysqli_query($conn,"SELECT * FROM `cart` WHERE `id` = '$show_id'");
	$showvalue=mysqli_fetch_array($show_res);

	
	  $id_pro=$showvalue['order_id'];
      $item_sql_res_p=mysqli_query($conn,"SELECT * FROM `projects` WHERE `id` ='$id_pro'");
	  $item_row_p=mysqli_fetch_array($item_sql_res_p);
	  $pro_name="Rahtuk-".$id_pro;
	  
	if(empty($pro_name)){
		
		
		
		$pro_is="Not Linked.";
		
	}else{
		
		
		$pro_is="<b class='text-danger'>".$pro_name."</b>";
		
	}
	
	
	
	
	//// item information 
	
	  $state=$row['state'];
	  $id_item=$showvalue['item_id'];
      $item_sql_res=mysqli_query($conn,"SELECT * FROM `services` WHERE `id` ='$id_item'");
	  $item_row=mysqli_fetch_array($item_sql_res);
	  $item_name=$item_row['title'];
	 $item_des=$item_row['descrption'];
	
	$user_id=$showvalue['user_id'];
    $ses_sql = mysqli_query($conn,"select * from users where id = '$user_id' ");
	   
  
   
   
    $row2 = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	$comp_name= $row2['name'];
	$comp_email=$row2['email'];
	$comp_phone=$row2['phone'];
	
	
	
	echo" <tr>
	 ";
	 
	 if(empty($comp_name)){
		 
		 
		//echo "    <td >System Administrator</td>";
		 
		 
	 }else{
		 
		 
		 
		 
		  

		 
		 
		 
		 
		 
	 }
	 
	 $quan=$showvalue['qun'];
	 $total=$showvalue['total'];
	 $price = $total /  $quan;
	 
	
     
	
	
}


	
	

	







?>
	
	  
	  
	  
	  
	  
	  <h4><?php echo "[Update Item]"; ?></h4>
	  
	  
	  
        <a  class="close" href='dbills.php' >&times;</a>
		
		
	
		
		
      </div>
      <div class="modal-body bg-info">
   

   <br>
   
   <?php
   
   //$showvalue['title'];
//  echo "<b>ID: <span class='text-white'>[REP".$show_id."]</span></b>";
  echo " <b>Status: <span class='text-warning'>[".$showvalue['state']."]</span></b><br>";
 
		
		
  echo " <b>DATE: <span class='text-white'>[".$showvalue['date']."]</span></b>";
  echo " <b>Time: <span class='text-white'>[".$showvalue['time']."]</span></b><br>";
  
  
  
  echo " <b>Description: <span class='text-white'>
  
  
  
 Owner:  $comp_name [$comp_email] [$comp_phone] Order: $pro_is <br>
 Item:$item_name
		<br>
		Price: $price OMR Hours: $quan
		<br>
		Total: $total OMR
		
		
		
  </span></b>";
  

 
 
 echo '
 
 <center>
 
 <form action="" method="post" >
  
 
  
   <label  class="text-white" >Update Hours:</label>
  <input type="text" placeholder="Hours" name="mat_quan"  class="form-control " id="pwd"
   value="'.$quan.'"
  required>
   
    <label  class="text-white" >Update Price:</label>
   <input type="text" placeholder="price" name="mat_price"  class="form-control " id="pwd"
   value="'.$price.'"
  required>
  
  
  
  <br>';
  
  if(empty($_GET['u'])){
  echo '
  
  <div class="form-group">
  <label for="sel1" class="text-white" >Update Status:</label>
  <select class="form-control" id="sel1" name="update_state" >
   <option value="Waiting" class="bg-light"  >Waiting</option>
    <option value="Accepted" class="bg-success" >Accepted</option>
    <option value="Decline" class="bg-secondary" >Decline</option>
   ';
   
  }else{
	  
	   echo '
  
  <div class="form-group">
  <label for="sel1" class="text-white" >Update Status:</label>
  <select class="form-control" id="sel1" name="update_state" >
  <option value="Accepted" class="bg-success" >Accepted</option>
   <option value="Waiting" class="bg-light"  >Waiting</option>
    <option value="Decline" class="bg-secondary" >Decline</option>
   ';
   
   
	  
	  
  }
   
   echo ' 
    
  </select>
</div>

  <input type="hidden" value="'.$_GET['update'].'"" name="edit_id" >
  
  <button type="submit" name="doupdate" class="btn btn-success btn-block">Confirm</button>
</form>
 
 
 </center>

 
 ';
 
   ?>
   
   
   
   <br>

     <?php
	 
	 
	 $edit_id=$_POST['edit_id'];
	 $new_state=$_POST['update_state'];
	 
	 $new_quan=$_POST['mat_quan'];
	 $new_price=$_POST['mat_price'];
	 $total_price=$new_quan * $new_price;
	 
	 
	 
	 
	 if(isset($_POST['doupdate'])){
		 
		 
		if(mysqli_query($conn,"UPDATE `cart` SET `state`='$new_state',`total`='$total_price',`qun`='$new_quan' WHERE `id` ='$edit_id'")){
			
			      $all_cart=mysqli_query($conn,"SELECT * FROM `cart` WHERE `id` ='$edit_id'");
	  
	         if($new_state == 'Accepted' ){
		  
		 
		    while($av=mysqli_fetch_array($all_cart,MYSQLI_ASSOC)){
			 
			$item_id=$av['item_id'];
			$qun=$av['qun'];

			
			
		mysqli_query($conn,"UPDATE `services` SET `available`= `available` - '$qun' WHERE `id` ='$item_id' ");	
			 
			 
			 
			 
			 
			 
		 }
			 }
		 
			
			
			
			
			
		//	header("location:dbills.php");
			
				echo "<script>

window.location.href='dbills.php';
</script>";


	
			if(empty($_GET['u']))

			{				header("location:dbills.php");
			
			
			}else{
				
				$review_link="review.php?u=".$_GET['u']."&s=".$_GET['s'];
				
				header("location:$review_link");
				
				
			}
			
		}else{
			
			
			
		
			//
			
		} 
		 
		 
		 
		 
	 }
	 
	 
	 
	 
	 
	 ?>
	 
      </div>
      <div class="modal-footer">
	  
	 
	  
        <a class="btn btn-outline-dark btn-sm" href='dbills.php'>Close</a>
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
            <h1 class="h3 mb-0 text-gray-800">Declined Bills</h1>
  
          </div>

          <!-- Content Row -->
          <div class="row">
		  
		  <?php
		  
if(isset($_GET['show'])){
	
	$show_id=mysqli_real_escape_string($conn, $_GET['show']);
	
	$show_res=mysqli_query($conn,"SELECT * FROM `offers` WHERE `state` = 'Waiting'");
	$showvalue=mysqli_fetch_array($show_res);
	$offer_title_is=$showvalue['title'];
	$offer_id=$showvalue['id'];;
	
	
	
	
	
	///////get images 
	$img_res=mysqli_query($conn,"SELECT * FROM `offers_images` WHERE `offer_id` ='$offer_id'");
	
	
	
}


?>


<input id="myInput" type="text"  class="form-control" placeholder="Search by, owner email or mobile phone..">



<?php

//show offer 


//show offer 




////loop

$get_order="SELECT * FROM `orders` WHERE `state` ='Decline' OR `state` ='Waiting' ORDER BY `id` desc";
$order_res=mysqli_query($conn,$get_order);

while($order_info=mysqli_fetch_array($order_res,MYSQLI_ASSOC)){


$order_id=$order_info['id'];

$code_or="Rahtuk-".$order_id;
$msg=$order_info['msg'];
$msg_date=$order_info['msg_date'];
$msg_time=$order_info['msg_time'];
$or_sate=$order_info['state'];
//echo "$code_or";

	
	
	

	echo '
	
	
	<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr class="bg-secondary border-white text-white">
	   <th scope="col" class="border-white">ID</th>
        <th scope="col" class="border-white" >MSG</th>
		<th scope="col" class="border-white">Date</th>
		<th scope="col" class="border-white">Time</th>
		<th scope="col" class="border-white">State</th>
        <th scope="col" class="border-white" >More</th>
      </tr>
    </thead>
    <tbody id="myTable">
	
	';
	
	
	
echo "



	<td>$code_or</td>
	<td>$msg</td>
	<td>$msg_date</td>
	<td>$msg_time</td>
	<td>$or_sate</td>
	<td class='bg-danger'>
	<a onclick='return confirm_delete45();' href='?orderdel=".$order_id."' class='text-white'><b>Delete</b></a>
	| <a class='bg-light' href='?orderupdate=".$order_id."' class='text-white'><b>Update</b></a>
	</td>

      







";

echo'

      
    </tbody>
  </table>


';









$show_offer="SELECT * FROM `cart`  where order_id ='$order_id' and state='Decline'";

$showofeer_res=mysqli_query($conn,$show_offer);
$offer_num=mysqli_num_rows($showofeer_res);

if(empty($offer_num)){
	
	echo 
	"<br><center><h4>No bills has been found.</h4></center>";
	
}else{
	
	echo '
	
	
	<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr class="bg-secondary border-white text-white">
	   <th scope="col" class="border-white">Owner</th>
        <th scope="col" class="border-white">Item/Material</th>
		<th scope="col" class="border-white">Date</th>
		<th scope="col" class="border-white">Time</th>
        <th scope="col" class="border-white">Status</th>
        <th scope="col" class="border-white" >More</th>
      </tr>
    </thead>
    <tbody id="myTable">
      
	
	';
	
while($row=mysqli_fetch_array($showofeer_res, MYSQLI_ASSOC)){
	
	$state=$row['state'];
	
	
	
	switch($state){
		
		case 'Accepted' : 
		
		$actcolor ='bg-success';
		
		break;
		
			case 'Decline' : 
		
		$actcolor ='bg-danger';
		
		break;
		
			case 'Waiting' : 
		
		$actcolor ='bg-warning';
		
		break;
		
		
		
		
	}
	
	
	
	///////////////////project information 
	
	  $id_pro=$row['project_id'];
   
	  $pro_name=$item_row_p['title'];
	  
	if(empty($pro_name)){
		
		
		
		$pro_is="Not Linked.";
		
	}else{
		
		
		$pro_is="<b class='text-danger'>Linked to : ".$pro_name."</b>";
		
	}
	
	
	$pro_is=$code_or;
	
	
	//// item information 
	
	  $state=$row['state'];
	  $id_item=$row['item_id'];
      $item_sql_res=mysqli_query($conn,"SELECT * FROM `services` WHERE `id` ='$id_item'");
	  $item_row=mysqli_fetch_array($item_sql_res);
	  $item_name=$item_row['title'];
	 $item_des=$item_row['descrption'];
	
	$user_id=$row['user_id'];
    $ses_sql = mysqli_query($conn,"select * from users where id = '$user_id' ");
	   
  
   
   
    $row2 = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	$comp_name= $row2['name'];
	$comp_email=$row2['email'];
	$comp_phone=$row2['phone'];
	
	
	
	echo" <tr>
	 ";
	 
	 if(empty($comp_name)){
		 
		 
		echo "    <td >System Administrator</td>";
		 
		 
	 }else{
		 
		 
		 
		 
		  
		echo " <td >".$comp_name." [".$comp_email."] [".$comp_phone."] <br>
		
		$pro_is
		</td>";
		 
		 
		 
		 
		 
	 }
	 
	 $quan=$row['qun'];
	 $total=$row['total'];
	 $price = $total /  $quan;
	 
	 echo "
        <td class='bg-warning'>".$item_name."
		<br>
		Price: $price OMR Hours: $quan
		<br>
		Total: $total OMR
		
		</td>
	
		<td>".$row['date']."</td>
		<td>".$row['time']."</td>
       <td class='text-white ".$actcolor." '>".$row['state']."</td>
		
	<td class='bg-danger'>
	<a onclick='return confirm_delete3();' href='?catdel=".$row['id']."' class='text-white'><b>Delete</b></a>
	| <a class='bg-light' href='?update=".$row['id']."' class='text-white'><b>Update</b></a>
	</td>
		
		 </tr>
		";
     
	
	
}



}


}


echo'

      
    </tbody>
  </table>
</div

';




////delete cat 



	//ok 
























///////////////////////////////////


/*
$show_offer="SELECT * FROM `cart`  where state ='Decline' ORDER BY `id` desc";

$showofeer_res=mysqli_query($conn,$show_offer);
$offer_num=mysqli_num_rows($showofeer_res);

if(empty($offer_num)){
	
	echo 
	"<br><center><h4>No declined bills has been found.</h4></center>";
	
}else{
	
	echo '
	
	
	<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr class="bg-secondary border-white text-white">
	   <th scope="col" class="border-white">Owner</th>
        <th scope="col" class="border-white">Item/Material</th>
        <th scope="col" class="border-white" >Description</th>
		<th scope="col" class="border-white">Date</th>
		<th scope="col" class="border-white">Time</th>
        <th scope="col" class="border-white">Status</th>
        <th scope="col" class="border-white" >More</th>
      </tr>
    </thead>
    <tbody id="myTable">
      
	
	';
	
while($row=mysqli_fetch_array($showofeer_res, MYSQLI_ASSOC)){
	
	$state=$row['state'];
	
	
	
	switch($state){
		
		case 'Accepted' : 
		
		$actcolor ='bg-success';
		
		break;
		
			case 'Decline' : 
		
		$actcolor ='bg-danger';
		
		break;
		
			case 'Waiting' : 
		
		$actcolor ='bg-warning';
		
		break;
		
		
		
		
	}
	
	
	
	///////////////////project information 
	
	  $id_pro=$row['project_id'];
      $item_sql_res_p=mysqli_query($conn,"SELECT * FROM `projects` WHERE `id` ='$id_pro'");
	  $item_row_p=mysqli_fetch_array($item_sql_res_p);
	  $pro_name=$item_row_p['title'];
	  
	if(empty($pro_name)){
		
		
		
		$pro_is="Not Linked.";
		
	}else{
		
		
		$pro_is="<b class='text-danger'>Linked to : ".$pro_name."</b>";
		
	}
	
	
	
	
	//// item information 
	
	  $state=$row['state'];
	  $id_item=$row['item_id'];
      $item_sql_res=mysqli_query($conn,"SELECT * FROM `services` WHERE `id` ='$id_item'");
	  $item_row=mysqli_fetch_array($item_sql_res);
	  $item_name=$item_row['title'];
	 $item_des=$item_row['descrption'];
	
	$user_id=$row['user_id'];
    $ses_sql = mysqli_query($conn,"select * from users where id = '$user_id' ");
	   
  
   
   
    $row2 = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	$comp_name= $row2['name'];
	$comp_email=$row2['email'];
	$comp_phone=$row2['phone'];
	
	
	
	echo" <tr>
	 ";
	 
	 if(empty($comp_name)){
		 
		 
		echo "    <td >System Administrator</td>";
		 
		 
	 }else{
		 
		 
		 
		 
		  
		echo " <td >".$comp_name." [".$comp_email."] [".$comp_phone."] <br>
		
		$pro_is
		</td>";
		 
		 
		 
		 
		 
	 }
	 
	 $quan=$row['qun'];
	 $total=$row['total'];
	 $price = $total /  $quan;
	 
	 echo "
        <td class='bg-warning'>".$item_name."
		<br>
		Price: $price OMR Hours: $quan
		<br>
		Total: $total OMR
		
		</td>
	
        <td>". $item_des."</td>
		<td>".$row['date']."</td>
		<td>".$row['time']."</td>
       <td class='text-white ".$actcolor." '>".$row['state']."</td>
		
	<td class='bg-danger'>
	<a onclick='return confirm_delete3();' href='?catdel=".$row['id']."' class='text-white'><b>Delete</b></a>
	| <a class='bg-light' href='?update=".$row['id']."' class='text-white'><b>Update</b></a>
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

*/







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




   <?php if($show_upoder or $_GET['orderupdate']):?>
  <script> 
  $('#orderup').modal({
    backdrop: 'static',
    keyboard: false
});
  </script>
<?php endif;?>





<script type="text/javascript">
		function confirm_delete3() {
				return confirm("Are you sure you want to delete this item?");
		}

</script>


<script type="text/javascript">
		function confirm_delete45() {
				return confirm("Are you sure you want to delete this order?");
		}

</script>

</html>
