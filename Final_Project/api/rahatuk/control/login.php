<!DOCTYPE html>
<html lang="en">
<?php

include('../config.php');
session_start();
	
date_default_timezone_set('Asia/Muscat');
		
	 
$date=date("d/m/Y");


if(isset($_SESSION['login_admin'])){
     header("location:index.php");
	 
   }


?>



<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

   <title>Control</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-secondary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body 
			
			<img src="../img/home-bg.jpg" />
			
			
			-->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block" style="background-image: url('../img/icon.png');background-position: center;
  background-repeat: no-repeat;
  background-size: 300px 300px;" >
			  
			  
			  </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><br>[Control Panel]</h1>
                  </div>
                  <form class="user" action="" method="post">
                    <div class="form-group">
                      <input type="email" name="enter_email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Admin Email Address..." required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="enter_pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" name="dologin" class="btn btn-secondary btn-user btn-block">
                      Login
                    </button>
                    <hr>
             
					
					
					
					
					
					 <?php
   
   if(isset($_POST['dologin'])){
	   
	   $email_is =$_POST['enter_email'];
	   $pass_is=$_POST['enter_pass'];
	   
	   $pass_now = md5($pass_is);
	   
	   
	if(isset($email_is) and isset($pass_is) ){
		
		
	$find_user="SELECT * FROM `admins` WHERE email ='$email_is' and password = '$pass_now' ";
	
	$find_res=mysqli_query($conn,$find_user);	
	$is_true =mysqli_num_rows($find_res);
	
	if(empty($is_true)){
		
		
		   
	echo "

	<br>
	<center>
	<div class='alert alert-danger'role='alert'>
  <h6>Your email or password isn't correct.</h6>
  
</div>
	
	</center>

	
	";

	
	//$show_modal1 = true;
	
	
		
	}else{
		
		
		
		// sesstion
		
	$_SESSION['login_admin'] = "$email_is" ;

		/// redirect 
		
		echo '
		
		
		<script type="text/javascript">
    window.location.href = "index.php";
</script>

		
		
		';
		
		
	}
	
		
		
	}   
	   
	   
	   
	   
   }
   
   
   
   
   
   
   
   
   ?>
   
					
					
					
					
					
					
					
					
                </div>
              </div>
            </div>
          </div>
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

</body>

</html>
