<!DOCTYPE html>
<html lang="en">

<head>
<?php

include('config.php');
include('session.php');

  if(!isset($_SESSION['login_user'])){
      header("location:index.php");
	  $conn->close();
   }
	
date_default_timezone_set('Asia/Muscat');
		
	 


$show_modal1 = false;
	 
 $date=date("d/m/Y");
 $time=date("h:i A");

$user_check = $_SESSION['login_user'];
  
   
	
   if($type != 'customer'){
      header("location:index.php");
	  $conn->close();
   }



   
   
   require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
 
// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
 
  $nav_is= ' <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">';
 
 //echo "<script>alert('hi');</script>";
 $mobile_phone_de=true;

 
}else{
	
	
//echo "no";	
	
	
	$mobile_phone_de=false;
	
	 
	   
 $nav_is= '<nav class=navbar navbar-default navbar-static-top" id="mainNav">';
}



?>





  <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rahtuk- Account</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" href="img/icon.png">
  <!-- Custom fonts for this template -->

<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
  
  <style>
  
.w-100 {
  width: 100% !important;
  height: 60vh;
}
  </style>
  <style>
  
  
  
  
  body{
	
	font-family: 'Tajawal', sans-serif;

	
}

  
  #loadd{
    width:100%;
    height:100%;
    position:fixed;
    z-index:9999;
    background:url("img/load.gif") no-repeat center center rgba(0,0,0,0.25);
	 background-size: 400px 400px;
	 
}



.table-scroll .table-body td:first-child {
    border-right:none
}
.table > tbody > tr > td {
    width: auto;
    max-width: 100%;
}




</style>


<style>
.btn-group.special {
  display: flex;
}

.special .btn {
  flex: 1
}


*{padding:0;margin:0;}

body{
	
	font-family: 'Tajawal', sans-serif;

	
}

.label-container{
	position:fixed;
	bottom:48px;
	right:105px;
	display:table;
	visibility: hidden;
}

.label-text{
	color:#FFF;
	background:rgba(51,51,51,0.5);
	display:table-cell;
	vertical-align:middle;
	padding:10px;
	border-radius:3px;
}

.label-arrow{
	display:table-cell;
	vertical-align:middle;
	color:#333;
	opacity:0.5;
}

.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#06C;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

.my-float{
	font-size:24px;
	margin-top:18px;
}

a.float + div.label-container {
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s, opacity 0.5s ease;
}

a.float:hover + div.label-container{
  visibility: visible;
  opacity: 1;
}



.navbare {
  overflow: hidden;
  background-color: white;
  position: fixed;
  bottom: 0;
  width: 100%;
}

.navbare a {
  float: left;
  display: block;
  
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbare a:hover {
  background: #f1f1f1;
  color: black;
}

.navbare a.active {
  background-color: #4CAF50;
  color: white;
}

h{
	
	font-family: 'Tajawal', sans-serif !important;
	
	
	
}

</style>


<script>
function showResultsearch(str) {
  if (str.length==0) { 
    document.getElementById("livesearchitem").innerHTML="";
    //document.getElementById("livesearchitem").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
	  if(xmlhttp.readyState < 4){
		  
		   document.getElementById("livesearchitem").innerHTML="<img src='img/ajax-loader.gif' width='50' >";
		  
	  }
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearchitem").innerHTML=xmlhttp.responseText;
      //document.getElementById("livesearchitem").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","countitem.php?q="+str,true);
  xmlhttp.send();
}
</script>



</head>

<body>


<div id="loadd"></div>

   <!-- Navigation نغير هنا المنيو  -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="img/icon.png" class="img-thumbnail" width="80" height="80" /></a>
      
	  
	  			
			<!---  <a class="btn ">
        




	 </a>-->
	 
	 
	<div class="btn-group" role="group" aria-label="Basic example">



	 
	
	 
	  	  <a class="navbar-toggler navbar-toggler-right mr-3"  aria-expanded="false" aria-label="Toggle navigation"
	href="index.php?likeope=true" 
		  >
        	  
			  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-heart-fill text-danger" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg>

			  
			 </a>
			 
			 
			 				<a class="navbar-toggler navbar-toggler-right"   data-toggle="modal" data-target="#about" data-dismiss="modal" aria-expanded="false" aria-label="Toggle navigation">
<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-question-square-fill text-info" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
</svg>


	 </a>
	
	
	
	
	
			 
		</div>	

	  
	  
	  
	  
	  
	  
	  			

	  
	  
	  
	  
	  
	  
	  
      <div class="collapse navbar-collapse"  dir="ltr" id="navbarResponsive" style="display:none;">
        <ul class="navbar-nav ml-auto bg-white text-danger" 
		style="padding: 5px;color: green;
		 border: 2px solid white;
         border-radius: 12px;
		
		" >

		  
		  
		
		
		
          <li class="nav-item">
            <a class="nav-link" style="color: black;" href="index.php" ><b><font size="4">Main</font></b></a>
          </li>
		  
		  
		  <?php
		  
		  if(!empty($name)){
			  
			  echo '  <li class="nav-item">
            <a class="nav-link"  href="logout.php" style="color: red;" ><b><font size="4">Logout</font></b></a>
          </li>';
			  
		  }
		  
		  
		  
		  
		  
		  else{
			  
			  echo '
		  
		  <li class="nav-item">
            <a class="nav-link" title="login and sign up" href="index.php" style="color: black;" data-toggle="modal" 
			data-target="#myModal10"><b><font size="4">Login</font></b></a>
           </li>';
		   
		  
		 

		 }
		 
		  
		 
		  
		  
		  
		  ?>
		  
		  

        
        
		  
		  <li class="nav-item">
            <a class="nav-link" href="index.php?likeope=true" 		><b><font size="4" style="color: black;" >Favorite</font></b></a>
          </li>
		  
		 <li class="nav-item ">
            <a class="nav-link" href="#"><b><font size="4" style="color: black;" 
			 data-toggle="modal" data-target="#about" data-dismiss="modal"
			
			>About</font></b></a>
          </li>
		  
		  
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead " style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container bg-light">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
  <?php

echo "<div dir='ltr'><h2><span class='bg-info'>Welcome</span> $name.</h2><br>";





echo "

Mobile : <span class='bg-info'>$phone</span>

<br>



Address : <span class='bg-info'>$address</span>



<br>
Join Date : <span class='bg-info'>$date</span>



</div>";








?>
  
		 
		 
		 
		   
          </div>
        </div>
      </div>
    </div>
  </header>
  
  
  

<!------search modal -->


   <div id="searchitem" class="modal fade" role="dialog"  tabindex="-1">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  
	  
	  <h4><i class="fa fa-search" aria-hidden="true"></i></h4>
	  
	  
	  
        
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		
		
	
		
		
      </div>
      <div class="modal-body bg-light text-white" style="text-align:left;text-align: justify;
  text-justify: inter-word;direction:ltr;">
   

   <center>

  <input class="form-control" type="search" placeholder="Write service title to find it.." name="search" id="search" onkeyup="showResultsearch(this.value)">
<div id="livesearchitem" class="bg-light" style="position: static;" ></div>

     
	 

	</center>


	 <br>
	 
	</div> 
	 
      
   
    </div>

  </div>
</div>


<!------search modal -->

 
 <div id="about" class="modal fade" role="dialog"  tabindex="-1">
  <div class="modal-dialog modal-dialog-scrollable">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  
	  
	  <h4><i class="fa fa-question-circle" aria-hidden="true"></i></h4>
	  
	  
	  
        
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		
		
	
		
		
      </div>
      <div class="modal-body bg-light text-dark">
   

   
  <p style="text-align:left;"><b>
  
  <center>
  
  <img src="img/icon.png" width="200" height="150"><br>
  
  
  
  
  </center>

</b>
<hr>

</p>
<p style="text-align: justify;
  text-justify: inter-word;direction:ltr;

  ">

About:
<br>

The main goal of this project is to provide a convenient platform and mobile application for searching and booking domestic workers to help save time and effort for many individuals and families.

<hr>


Terms of Service:
<br>

-You must agree that appointments may change at any time depending on circumstances, and we do not bear any responsibility for any loss or loss at home.
  
  </p>

     
	 
	<hr>
	
	<p style="text-align: justify;
  text-justify: inter-word;direction:ltr;

  ">

Developer:
<br>

<font color="blue">Fatma Saif Salim Alhosni

<br>

19f19159@mec.edu.om

</font>

  
  </p>
	
	<hr>
	
	
	<div class="btn-group" role="group" aria-label="Basic example">

<a class="btn-floating btn-lg btn-tw" href="https://twitter.com/"><i class="fab fa-twitter text-dark fa-3x"></i></a>
	 <!--WhatsApp-->
<!--Instagram-->
<a class="btn-floating btn-lg btn-ins" href="https://www.instagram.com/"  ><i class="fab fa-instagram text-dark fa-3x"></i></a>



<a class="btn-floating btn-lg btn-whatsapp" href="//api.whatsapp.com/send?phone=+96890733628&text=Hello .." ><i class="fab fa-whatsapp text-dark fa-3x"></i></a>
	
	 
	 </div>

	 <br>
	 <br>
	 
	</div> 
	 
      
   
    </div>

  </div>
</div>



<!---end about ---------->
   <div id="update" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
	  
	  
	  <center><h4>
	  
<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-repeat" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
  <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
</svg>


</center>
	  
	  
	  
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		
		
	
		
		
      </div>
      <div class="modal-body bg-secondary">
   
   


   
   <?php
   
   
   $show_modal = false;
   $show_update= false;
   
   
   
     
   if(isset($_POST['doupdate'])){
	   
	

/// get data 

$type='customer';
$full_name=htmlspecialchars($_POST['full_name']);
$phone_number=htmlspecialchars($_POST['phone_number']);
$email_address=htmlspecialchars($_POST['email_address']);
$account_pass=htmlspecialchars($_POST['account_pass']);
$set_address=htmlspecialchars($_POST['set_address']);


//$user_id

$update_sql="UPDATE `users` SET `phone`='$phone_number',`address`='$set_address' WHERE id ='$user_id' ";


if(mysqli_query($conn,$update_sql)){
	
	
	/// في حالة الرغية في اظهار نافذة التعديل
	
			/*echo "<script>
alert('تم تحديث البيانات بنجاح ..');
window.location.href='customer.php?booking=show&update=show';
</script>";

*/





		echo "<script>
alert('update successfully ..');
window.location.href='customer.php?booking=show';
</script>";
	
	
	
	
}







   }

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   

   
   
   
   
   
   
   
   ?>
   
   
   
   <br>
   <br>
   
   <form action="" method="post" dir="ltr"  >
   
   
  
   
   
   <div class="form-group">
   
   

   
    <div class="input-group mb-3">
  <div class="input-group-prepend">
<svg class="bi bi-file-earmark-text text-white" width="40" height="38" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
  <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
</svg>


  </div>
   <input type="text" placeholder="Full name" name="full_name"


value="<?php echo"$name" ?>"
   class="form-control" id="usr" disabled>
   
   
   
</div>  
   
   
   
     <div class="input-group mb-3">
  <div class="input-group-prepend">
   
<svg class="bi bi-phone text-white" width="40" height="38" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>


  </div>
   <input type="text" 
   
   
   
value="<?php echo"$phone" ?>"
   
   placeholder="Mobile" name="phone_number" class="form-control" id="usr" required>
   
   
   
</div>
 
   
    
     <div class="input-group mb-3">
  <div class="input-group-prepend">
   
<svg width="40" height="38" viewBox="0 0 16 16" class="bi bi-geo-alt text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>


  </div>
   <input type="text"


value="<?php echo"$address" ?>"


   placeholder="Address-LoCATION" name="set_address" class="form-control" id="usr" required>
   
   
   
</div>

  
   
   
   
   
   <div class="input-group mb-3">
  <div class="input-group-prepend">
  
   <svg width="40" height="38" viewBox="0 0 16 16" class="bi bi-envelope text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg>



  </div>
   <input type="email"


value="<?php echo"$email" ?>"

   placeholder="Email" name="email_address"  class="form-control" id="usr" disabled>
   
   
   
</div>




 
    <div class="input-group mb-3">

   
  
   
</div>
 
 
 
   
   
    <center>
   
   <button type="submit" class="btn btn-light  border-dark"  onclick="return confirm_update();" name="doupdate" >Update</button>
   
   
   </center>
   
   
 
</div>
   
   
  
   
   
   </form>
   
   <br>

     
      </div>
      <div class="modal-footer">
	  

	  
        <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">X</button>
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
	  
	  
	  
        <a  class="close" href='?offer=show' >&times;</a>
		
		
	
		
		
      </div>
    
      <div class="modal-footer">
	  
	 
	  
        <a class="btn btn-outline-dark btn-sm" href='?offer=show'>Close</a>
      </div>
    </div>

  </div>
</div>
  <!-- Modal -->






  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="container">
	<form action="" method="post">

 <!-- mali list - new offer - my offers -- booking list -->
<center>
<hr>
<div class="btn-group" role="group" aria-label="Basic example">

<a href="?email=true" class="btn btn-secondary border-white text-white" data-toggle="modal" data-target="#update">Profile Update</a>

<?php

$check_email="SELECT * FROM `mailist` WHERE `email` ='$email'";
$mail_res=mysqli_query($conn,$check_email);
$count_email=mysqli_num_rows($mail_res);

if(empty($count_email)){
	
	
	echo '<a href="?email=true" onclick="return confirm_delete();" class="btn btn-primary border-white text-white">Allow notifications</a>
  ';
	
	
}else{
	
	
	echo ' 
  <a href="?delmail=true" onclick="return confirm_delete2();" class="btn btn-danger border-white text-white">Disable notifications</a>
  
  ';
	
	
	
}
	


if(isset($_GET['email'])){
	
	
	$enter_mail="INSERT INTO `mailist`(`email`) VALUES ('$email')";

	mysqli_query($conn,$enter_mail);
	
		echo "<script>

window.location.href='customer.php?booking=show';
</script>";
	
	
}

if(isset($_GET['delmail'])){
	
	
	$del_mail="DELETE FROM `mailist` WHERE email = '$email' ";


		mysqli_query($conn,$del_mail);
			
		echo "<script>

window.location.href='customer.php?booking=show';
</script>";

	
}




?>

 
  
  
<a href="?booking=show" class="btn btn-warning border-white ">Orders</a>
  
</div>
</center>
  
  </form>	
		
		<?php if(empty($_GET['offer']) and empty($_GET['booking'])){echo'<hr>';} ?>
		<?php

///show project 

if(empty($_GET['offer']) and empty($_GET['booking'])){
	
	////////////////////////////////////
	
	
	$u_is=$user_id;
	
	
	
// all project 


$project_res=mysqli_query($conn,"SELECT * FROM `projects` WHERE `user_id` ='$u_is' ORDER BY `id` desc");
$num_project=mysqli_num_rows($project_res);	


if(empty($num_project)){
	

////

}else{
	
	$i=0;
	while($info=mysqli_fetch_array($project_res)){
		
		
		$total_is="";
	$total="";
	
	////col pass 
	
	
	///project info 
	
	$title=$info['title'];
	$des=$info['descrption'];
	$ddate=$info['date'];
	$dtime=$info['time'];
	$dstate=$info['state'];
					
	echo "<br>
	<div id='print$i'>
	<button class='btn btn-info btn-block' data-toggle='collapse' data-target='#demo$i'>
	<h6><b>
	<strong>Title:</strong> <span class='text-dark' >$title</span>
	<strong>Description: <span class='text-dark' >$des</span>
	</strong> 
	<strong>Date: <span class='text-dark' > $ddate</span></strong> 
	<strong> Time:<span class='text-dark'> $dtime </span></strong> 
	<strong>Status: <span class='text-dark' >$dstate</span></strong> 
	<b></h6>
	</button>
";


/////get item in cart for project accept 


$project_id_is=$info['id'];


//item information 

//echo "$project_id_is";



// delete for accesspet 
$bill_res=mysqli_query($conn,"SELECT * FROM `cart` WHERE `project_id` = '$project_id_is' and `state` ='Accepted' ORDER
BY `id` DESC ");

$num_bills=mysqli_num_rows($bill_res);

/// item _name 



		
		echo "
<div id='demo$i' class='collapse'>";

if(empty($num_bills)){

		echo 
	"
	<br>
<br><center><h4>No bills has been found.</h4></center>

  

";
}else{
	
	echo "<br>";
	
		echo '
	
	
	<div class="table-responsive">
  <table class="table table-bordered" dir="ltr">
    <thead>
      <tr class="bg-secondary border-white text-white">
        <th scope="col" class="border-white">Item/Material</th>
        <th scope="col" class="border-white" >Details</th>
		<th scope="col" class="border-white">Date</th>
		<th scope="col" class="border-white">Time</th>
        <th scope="col" class="border-white">Status</th>
      </tr>
    </thead>
    <tbody id="myTable">
      
	
	';
	
	while($bills=mysqli_fetch_array($bill_res)){
	
	$state=$bills['state'];
	
	

	switch($state){
		
		case 'Accepted' : 
		$state_ar="Accepted";
		$actcolor ='bg-success';
		
		break;
		
			case 'Decline' : 
		$state_ar="Decline";
		$actcolor ='bg-danger';
		
		break;
		
			case 'Waiting' : 
		$state_ar="Waiting";
		$actcolor ='bg-warning';
		
		break;
		
		
		
		
	}
	






      $id_item=$bills['item_id'];
      $item_sql_res=mysqli_query($conn,"SELECT * FROM `services` WHERE `id` ='$id_item'");
	  $item_row=mysqli_fetch_array($item_sql_res);
      $item_name=$item_row['title'];
	  $item_des=$item_row['descrption'];
	

	
     $quan=$bills['qun'];
	 $total=$bills['total'];
	 $price = $total /  $quan;
	
	 if(empty($state_ar)){
		 
		 
		 $state_ar='In Cart';
		 
	 }
	 echo "
       
	
        <td>
		Price: $price OMR <br>
		Hours: $quan
		<br>
		Total: $total OMR</td>
		<td>".$bills['date']."</td>
		<td>".$bills['time']."</td>
       <td class='".$actcolor." '><font color='block'>".$state_ar."</font></td>
				<td>".$item_name."
		</td>
		 </tr>
		";


$total_is += $total;

	}
	
	echo'

      
    </tbody>
  </table>


';
	
	
	
}

echo "

<div class='alert alert-info'>Total: $total_is OMR</div>

  ";
  
  $variable = <<<XYZ

<button type="button" class="btn btn-secondary btn-block d-print-none" onclick="printDiv('print$i')"><b>Print <i class="fa fa-print" aria-hidden="true"></i></b></button>
XYZ;
echo $variable;

  
  echo"

</div>
</div>
</div>

<br>
";


	///matreals
	 
	 
	 
	 $i++;
	 
	
}	

}

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/* old code style 
	
	



$show_offer="SELECT * FROM `projects` WHERE `user_id` ='$user_id' ORDER BY id DESC";

$showofeer_res=mysqli_query($conn,$show_offer);
$offer_num=mysqli_num_rows($showofeer_res);


if(empty($offer_num)){
	
	///echo "<br><center><h4>.</h4></center>'";
	///echo "ddd";
	
	
}else{
	
	echo '
	
	
	<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr class="bg-info border-white">
        <th scope="col" class="border-white">ID</th>
        <th scope="col" class="border-white">Title</th>
        <th scope="col" class="border-white" >Description</th>
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
		
		case 'Finish' : 
		
		$actcolor ='bg-info';
		
		break;
		
			case 'Cancel' : 
		
		$actcolor ='bg-secondary';
		
		break;
		
			case 'Started' : 
		
		$actcolor ='bg-success';
		
		break;
		
		
		
		
	}
	
	echo" <tr><td class='bg-warning'>REP-".$row['id']."</td>
        <td>".$row['title']."</td>
        <td>".$row['descrption']."</td>
        <td>".$row['date']."</td>
        <td>".$row['time']."</td>
        <td class='text-white ".$actcolor."'>".$row['state']."</td>
		
		<td class='bg-danger'><a class='text-white' href='?project=".$row['id']."'><b>Open</b></a></td>
		
		 </tr>
		";
     
	
	
}

echo'

      
    </tbody>
  </table>
</div

';


}






//////////////////////

*/















}	
	
	
	
	////////////////show boooking not project included 
	
	$total_is=0;
	
	if(empty($_GET['offer']) and isset($_GET['booking'])){
		
		
	
// delete for accesspet 


$bill_res=mysqli_query($conn,"SELECT * FROM `cart` WHERE `user_id` = '$user_id' and `project_id` ='' ORDER
BY `id` DESC ");

$num_bills=mysqli_num_rows($bill_res);

/// item _name 



if(empty($num_bills)){

		echo 
	"
	<br>
<br><center><h4 class='text-left' dir='ltr'>No orders yet.</h4></center>

  

";
}else{
	
	

	
	
	
	
		echo '
	
	<div id="printlast">
	<div class="table-responsive">
  <table class="table table-bordered text-right">
    <thead>
      <tr class="bg-warning border-white text-dark">
    
		
		  <th scope="col" class="border-white">Status</th>
        <th scope="col" class="border-white" >Time</th>
		<th scope="col" class="border-white">Date</th>
		<th scope="col" class="border-white">Details</th>
        <th scope="col" class="border-white">Service</th>
		
		
    
      </tr>
    </thead>
    <tbody id="myTable">
      
	
	';
	
	while($bills=mysqli_fetch_array($bill_res)){
		
		
	$state=$bills['state'];
	
	
	switch($state){
		
		case 'Accepted' : 
		$state_ar="Accepted";
		$actcolor ='bg-success';
		
		break;
		
			case 'Decline' : 
		$state_ar="Decline";
		$actcolor ='bg-danger';
		
		break;
		
			case 'Waiting' : 
		$state_ar="Waiting";
		$actcolor ='bg-warning';
		
		break;
		
		
		
		
	}
	




      $id_item=$bills['item_id'];
      $item_sql_res=mysqli_query($conn,"SELECT * FROM `services` WHERE `id` ='$id_item'");
	  $item_row=mysqli_fetch_array($item_sql_res);
      $item_name=$item_row['title'];
	  $item_des=$item_row['descrption'];
	

	
     $quan=$bills['qun'];
	 $total=$bills['total'];
	 $price = $total /  $quan;
	
	if(empty($state_ar)){
		
		$state_ar="In cart";
	}
	 
	 echo "
	 
	 <td class='text-dark ".$actcolor." '>".$state_ar."</td>
		
        <td>".$bills['time']."</td>
	<td>".$bills['date']."</td>
	
	
        <td dir='ltr'>
		Price: $price OMR <br>
		Hours: $quan
		<br>
		Total: $total OMR</td>
		
		
		
		<td>".$item_name."
		</td>
		
       

		 </tr>
		";

if($state == 'Accepted' ){
$total_is += $total;
}


	}
	
	echo'

      
    </tbody>
  </table>


';
	
	
	
}


if(!empty($num_bills)){
echo "

<div class='alert alert-info' style='text-align:left;'> Total Accepted:  $total_is  OMR</div>

  ";
  
  $variable = <<<XYZ

<button type="button" class="btn btn-secondary btn-block d-print-none" onclick="printDiv('printlast')"><b>Print <i class="fa fa-print" aria-hidden="true"></i></b></button>
XYZ;
echo $variable;

  
  echo"

</div>
</div>
</div>



<br>
";
}		
		
	}
	
	?>
	
	
	
	<?php

//show offer 





$show_offer="SELECT * FROM `offers` WHERE `user_id` ='$user_id' ORDER BY id DESC";

$showofeer_res=mysqli_query($conn,$show_offer);
$offer_num=mysqli_num_rows($showofeer_res);

if(isset($_GET['offer'])){
if(empty($offer_num)){
	
	echo 
	"<br><center><h4>No offer has been found.</h4></center>'";
	
}else{
	
	echo '
	
	
	<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr class="bg-secondary border-white">
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
	
	echo" <tr><td class='bg-warning'>OFFER-".$row['id']."</td>
        <td>".$row['title']."</td>
        <td>".$row['price']." OMR</td>
        <td>".$row['date']."</td>
        <td>".$row['time']."</td>
        <td class='".$actcolor."'>".$row['state']."</td>
		
		<td class='bg-danger'><a onclick='return confirm_delete3();' href='?offdel=".$row['id']."' class='text-white'><b>Delete</b></a>|<a  href='?show=".$row['id']."'><b>Preview</b></a></td>
		
		 </tr>
		";
     
	
	
}

echo'

      
    </tbody>
  </table>
</div

';


}

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
	exit("Don't play with me :) I will send your ip address to our support team. <br><br><br>");
	}
	
}






?>
	
		

		
	
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


  	
  
		
  
  </div> 
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
 
  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <center><a href='index.php'><img src="img/icon.png" class="img-thumbnail" width="150" height="150" /></a></center>
          <p class="copyright text-muted">Copyright &copy; <?php echo date("Y"); ?> Rahtuk </p>
        </div>
      </div>
    </div>
	
	<br>
	<br>
	<br>
	<br>
	
<div class="navbare" style="
  padding-top: 0px;
  padding-bottom: 15px;
  z-index: 1; 

">


  
  <?php
  
  
  $get_all_item_res=mysqli_query($conn,"SELECT * FROM `cart` WHERE `user_id` = '$user_id' and state ='' order by id desc");
  
  
  $item_count=mysqli_num_rows($get_all_item_res);
  if(!empty($item_count)){
	  $cart_include=true;
	  
  }
  
	  ?>
	  
	  
  <!-- Bootstrap core JavaScript  هنا الازرار---->

<div class="btn-group special" role="group" aria-label="...">
   <a class="btn btn-default border" href="index.php?cart=true"  >
  
  <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart-check <?php

if($cart_include){
	
	echo"text-success";
	
}

  ?>" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
  <path fill-rule="evenodd" d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>



</a>
  
  
  
  
  
  
  
  <?php
  
  if(!empty($name)){
	  

///when login 

	  	   echo'   <a class="btn btn-default border" onclick="return confirm_logout();" href="logout.php">
	
	
	
<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-power text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.578 4.437a5 5 0 1 0 4.922.044l.5-.866a6 6 0 1 1-5.908-.053l.486.875z"/>
  <path fill-rule="evenodd" d="M7.5 8V1h1v7h-1z"/>
</svg>
	  

	</a>';
	
	
	  
	  
	  
  }else{
	  
	  
	   echo'   <a class="btn btn-default border" href="index.php" data-toggle="modal" data-target="#myModal10">
	
<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zM13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
	</a>';
	
	  
	  
  }
  
  
  
  
  
  
  ?>

  
	
	
	
  
     
   <a class="btn btn-default border" href="#" data-toggle="modal" data-target="#searchitem">
   
   
   
   
   <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
</svg>
   
   
   
   
   
   </a>
   
   
   
   

	
	
	
	
	
	
	
	
	
	
	
	
	
	 <a class="btn btn-default border" href="index.php">
	 
	 
<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-shop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
</svg>




</a>
</div>


  
  
  
  
</div>

  </footer>
   
  <script src="control/chosen_v1.8.7/docsupport/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="control/chosen_v1.8.7/chosen.jquery.js" type="text/javascript"></script>
  <script src="control/chosen_v1.8.7/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
  <script src="control/chosen_v1.8.7/docsupport/init.js" type="text/javascript" charset="utf-8"></script>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  



  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
  
 


</body>

   <?php if($show_modal):?>
  <script> 
  $('#myModal2').modal({
    backdrop: 'static',
    keyboard: false
});
  </script>
<?php endif;?>



   <?php if($show_modal1):?>
  <script> $('#myModal').modal('show');</script>
<?php endif;?>



   <?php if(isset($_GET['update'])):?>
  <script> $('#update').modal('show');</script>
<?php endif;?>




<script type="text/javascript">
  function confirm_delete() {
  return confirm("Do you want to activate notifications?");
  }

</script>


<script type="text/javascript">
  function confirm_update() {
  return confirm("Did you enter the data correctly?");
  }

</script>




<script type="text/javascript">
  function confirm_delete2() {
  return confirm("Do you want to cancel alerts?");
  }

</script>


<script type="text/javascript">
  function confirm_logout() {
  return confirm("Do you want to log out?");
  }

</script>



<script type="text/javascript">
		function confirm_delete3() {
				return confirm("Are you sure you want to delete this offer?");
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

 <script>
 
 
 
 $(document).ready(function(){
document.getElementById('loadd').style.visibility="hidden";
});



</script>


</html>
