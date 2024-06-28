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
  
 
 
  <link rel="stylesheet" href="chosen_v1.8.7/docsupport/prism.css">
  <link rel="stylesheet" href="chosen_v1.8.7/chosen.css">


<script>

$("#navigation").change(function()
{
    document.location.href = $(this).val();
});


function printDiv(divName) {
	divName.replace(/\s/g, '');
	
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

</script>

</head>

<body id="page-top">
<!-- Modal  2 -->

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
            <h1 class="h3 mb-0 text-gray-800">Review  <a href="">[Update]</a></h1>
  
          </div>

          <!-- Content Row -->
          <div class="row">
		  

  
   
   
   <div class="form-group">

   
   
   
      <div class="input-group mb-3">
 



   <div class="form-group">
  <label for="sel1">Owner:</label>
  <select id="navigation" name="user_id" data-placeholder="Choose the owner profile .." class="chosen-select" tabindex="2" required>
  <option value=""></option>
  <?php
  
                     /// <option>1</option>



$show_offer="SELECT * FROM `users`  ORDER BY `id` desc";

$showofeer_res=mysqli_query($conn,$show_offer);
$offer_num=mysqli_num_rows($showofeer_res);

if(empty($offer_num)){
	
echo "<option>No users has been found.</option>";
	
}else{
	
	//echo "<option value='' class='bg-info' >General project</option>";
	
	if(isset($_GET['s'])){
		
		
		$is=$_GET['s'];
	    $val=$_GET['u'];
		
		
			echo "<option value='review.php?u=$val&s=$is' selected><a href='?u=$user_id'>$is</a></option>";
	
     
	 
		
	}
     
	 
	
while($row=mysqli_fetch_array($showofeer_res, MYSQLI_ASSOC)){
	
	$user_id=$row['id'];
	
	$other=$row['name']. " | Contact: ". $row['phone']." [".$row['email']."] | " .$row['type'];
	
	

	
	if($user_id == $_GET['u']){
		
		// dont print optint 
		
	}else{
	echo "<option value='review.php?u=$user_id&s=$other' ><a href='?u=$user_id'>$other</a></option>";
	}
     
	 
	 
	
	
}




}





?>

  </select>
  
</div>
   
   
</div>




 
   
   
   
   
</div>
 



 
 <hr>
 
  
</div>
   
   
   
<?php
if (isset($_GET['u'])) {
    $u_is = mysqli_real_escape_string($conn, $_GET['u']);

    // Get all projects
    $project_res = mysqli_query($conn, "SELECT * FROM `orders` WHERE `user_id` ='$u_is' AND `state` ='Accepted' ORDER BY `id` DESC");
    $num_project = mysqli_num_rows($project_res);

    if ($num_project == 0) {
        echo "<div class='row'>
                <br><center><h4>No orders have been found.</h4></center>
              </div>";
    } else {
        $i = 1;
        while ($info = mysqli_fetch_array($project_res)) {
            $title = $info['id'];
            $des = $info['msg'];
            $ddate = $info['msg_date'];
            $dtime = $info['msg_time'];
            $dstate = $info['state'];

            echo "<br>
                  <div id='print$i'>
                  <button class='btn alert-success btn-block' data-toggle='collapse' data-target='#demo$i'>
                  <h5><b>
                  <strong>Order:</strong> <span class='text-danger'>Rahtuk-$title</span>
                  <strong>MSG: <span class='text-danger'>$des</span></strong> 
                  <strong>Date: <span class='text-danger'>$ddate</span></strong> 
                  <strong>Time: <span class='text-danger'>$dtime</span></strong> 
                  <strong>Status: <span class='text-danger'><a target='_blank' href='bills.php?orderupdate=$title&accept=true'>$dstate</a></span></strong> 
                  </b></h5>
                  </button>";

            $project_id_is = $info['id'];
            $bill_res = mysqli_query($conn, "SELECT * FROM `cart` WHERE `order_id` = '$project_id_is' AND `state` ='Accepted' ORDER BY `id` DESC");
            $num_bills = mysqli_num_rows($bill_res);

            echo "<div id='demo$i' class='collapse'>";

            if ($num_bills == 0) {
                echo "<br><center><h4>No bills have been found.</h4></center>";
            } else {
                echo "<br>
                      <div class='table-responsive'>
                      <table class='table table-bordered'>
                        <thead>
                          <tr class='bg-secondary border-white text-white'>
                            <th scope='col' class='border-white'>Item/services</th>
                            <th scope='col' class='border-white'>Description</th>
                            <th scope='col' class='border-white'>Date</th>
                            <th scope='col' class='border-white'>Time</th>
                            <th scope='col' class='border-white'>Status</th>
                            <th scope='col' class='border-white'>More</th>
                          </tr>
                        </thead>
                        <tbody id='myTable'>";

                while ($bills = mysqli_fetch_array($bill_res)) {
                    $state = $bills['state'];
                    switch ($state) {
                        case 'Accepted':
                            $actcolor = 'bg-success';
                            break;
                        case 'Decline':
                            $actcolor = 'bg-danger';
                            break;
                        case 'Waiting':
                            $actcolor = 'bg-warning';
                            break;
                    }

                    $id_item = $bills['item_id'];
                    $item_sql_res = mysqli_query($conn, "SELECT * FROM `services` WHERE `id` ='$id_item'");
                    $item_row = mysqli_fetch_array($item_sql_res);
                    $item_name = $item_row['title'];
                    $item_des = $item_row['descrption'];
                    $quan = $bills['qun'];
                    $total = $bills['total'];
                    $price = $total / $quan;

                    echo "<tr>
                          <td>$item_name</td>
                          <td>Price: $price OMR<br>Hours: $quan<br>Total: $total OMR</td>
                          <td>{$bills['date']}</td>
                          <td>{$bills['time']}</td>
                          <td class='text-white $actcolor'>{$bills['state']}</td>
                          <td class='bg-danger'>
                            <a onclick='return confirm_delete3();' target='_blank' href='bills.php?u={$_GET['u']}&s={$_GET['s']}&catdel={$bills['id']}' class='text-white'><b>Delete</b></a>
                            | <a class='bg-light' target='_blank' href='bills.php?u={$_GET['u']}&s={$_GET['s']}&update={$bills['id']}&accept=true' class='text-white'><b>Update</b></a>
                          </td>
                          </tr>";
                    $total_is += $total;
                }

                echo "</tbody>
                      </table>
                      </div>";
            }

            echo "<div class='alert alert-info'>Total: $total_is OMR</div>";

            echo "<button type='button' class='btn btn-secondary btn-block d-print-none' onclick='printDiv(\"print$i\")'><b>Print <i class='fa fa-print' aria-hidden='true'></i></b></button>
                  </div>
                  </div>
                  <br>";

            $i++;
        }
    }

    // General Items/Materials without project
    $geral = mysqli_query($conn, "SELECT * FROM `cart` WHERE `user_id` ='$u_is' AND `project_id` ='' AND `state` ='Accepted'");
    $num_gen = mysqli_num_rows($geral);

    echo "<div id='printlast'>
          <button class='btn alert-warning btn-block' data-toggle='collapse' data-target='#genitem'>
          <h5><strong>All accepted item</strong></h5>
          </button>";

    echo "<div id='genitem' class='collapse'>";
    if ($num_gen == 0) {
        echo "<br><center><h4>No general items have been found.</h4></center></div>";
    } else {
        echo "<br>
              <div class='table-responsive'>
              <table class='table table-bordered'>
                <thead>
                  <tr class='bg-secondary border-white text-white'>
                    <th scope='col' class='border-white'>Item/Material</th>
                    <th scope='col' class='border-white'>Description</th>
                    <th scope='col' class='border-white'>Date</th>
                    <th scope='col' class='border-white'>Time</th>
                    <th scope='col' class='border-white'>Status</th>
                    <th scope='col' class='border-white'>More</th>
                  </tr>
                </thead>
                <tbody id='myTable'>";

        $total_is = 0;
        while ($bills = mysqli_fetch_array($geral)) {
            $state = $bills['state'];
            switch ($state) {
                case 'Accepted':
                    $actcolor = 'bg-success';
                    break;
                case 'Decline':
                    $actcolor = 'bg-danger';
                    break;
                case 'Waiting':
                    $actcolor = 'bg-warning';
                    break;
            }

            $id_item = $bills['item_id'];
            $item_sql_res = mysqli_query($conn, "SELECT * FROM `services` WHERE `id` ='$id_item'");
            $item_row = mysqli_fetch_array($item_sql_res);
            $item_name = $item_row['title'];
            $item_des = $item_row['descrption'];
            $quan = $bills['qun'];
            $total = $bills['total'];
            $price = $total / $quan;

            echo "<tr>
                  <td>$item_name</td>
                  <td>Price: $price OMR<br>Hours: $quan<br>Total: $total OMR</td>
                  <td>{$bills['date']}</td>
                  <td>{$bills['time']}</td>
                  <td class='text-white $actcolor'>{$bills['state']}</td>
                  <td class='bg-danger'>
                    <a onclick='return confirm_delete3();' target='_blank' href='bills.php?u={$_GET['u']}&s={$_GET['s']}&catdel={$bills['id']}' class='text-white'><b>Delete</b></a>
                    | <a class='bg-light' target='_blank' href='bills.php?u={$_GET['u']}&s={$_GET['s']}&update={$bills['id']}' class='text-white'><b>Update</b></a>
                  </td>
                  </tr>";
            $total_is += $total;
        }

        echo "</tbody>
              </table>
              </div>";

        echo "<div class='alert alert-info'>Total: $total_is OMR</div>";

        echo "<button type='button' class='btn btn-secondary btn-block d-print-none' onclick='printDiv(\"printlast\")'><b>Print <i class='fa fa-print' aria-hidden='true'></i></b></button>
              </div>
              </div>
              <br>";
    }
}
?>

   
  
   

 
  
   
  
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
  
  
<script src="chosen_v1.8.7/docsupport/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="chosen_v1.8.7/chosen.jquery.js" type="text/javascript"></script>
  <script src="chosen_v1.8.7/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
  <script src="chosen_v1.8.7/docsupport/init.js" type="text/javascript" charset="utf-8"></script>

<script>


$("#navigation").change(function()
{
    document.location.href = $(this).val();
});



</script>


</body>

<?php 
if(isset($_GET['update'])){
	
	$show_modal= true;
	
///	echo "ok";
	
}




?>


   <?php if($show_modal):?>
  <script> 
  $('#myModal2').modal({
    backdrop: 'static',
    keyboard: false
});
  </script>
<?php endif;?>


<script type="text/javascript">
		function confirm_delete3() {
				return confirm("Are you sure you want to delete this bill?");
		}

function printDiv(divName) {
	
	divName.replace(/\s/g, '');
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

</html>
