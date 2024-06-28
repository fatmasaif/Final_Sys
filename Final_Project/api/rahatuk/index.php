<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
   <!-- Bootstrap core CSS ل
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
   -->

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
 
  <meta name="description" content="">
  <meta name="author" content="">
  
  <link rel="icon" href="img/icon.png">


  <title>Rahtuk</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

		<script src="js/jquery-1.6.2.js"></script>
		
		
		
  
  
  
<script>

jQuery(window).load(function () {

    document.getElementById('loadd').style.visibility="hidden";

    setTimeout(function () {
        
    }, 60000);

});


</script>


<?php


 
	
	

include('config.php');
include('session.php');

session_start();

$useragent=$_SERVER['HTTP_USER_AGENT'];


// error_reporting(E_ALL);
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
 
// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
 
 // $nav_is= ' <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">';
 
 //echo "<script>alert('hi');</script>";
 $mobile_phone_de=true;

 
}else{
	
	
//echo "no";	
	
	
	$mobile_phone_de=false;
	
	 

//$nav_is= ' <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">';
}


///do gs login 
  if(isset($_SESSION['login_user'])){
     
	 
	 // header("location:$page");
	 
	 $log='yes';
	 
   }else {
	   
	   
	   //$user_check=uniqid();
	   
	  // $log='yes';
	   
	   
	  $_SESSION['login_user'] = md5(uniqid(rand(), true));
      $_SESSION['login_gs']='true';
      $gs_id = $_SESSION['login_user'];  
	   
	   
   }
   
   
$gs_id = $_SESSION['login_user']; 

date_default_timezone_set('Asia/Muscat');
		
	 
$date=date("d/m/Y");
$date_now=date("d/m/Y");
$date_now_pls=date("d/m/Y");


$time_now=date("h:i A");
		
$show_modal1 = false;


$user_check = $_SESSION['login_user'];
  
  $cat=$_GET['cat'];
  $is=$_GET['is'];

	
	$link_is_now="index.php?cat=$cat&is=$is";

if(empty($cat)){
	
	
	$link_is_now="index.php?href=true";
	
}

///guest logine 
if(isset($user_id)){
	
	//noting 
		$logine_for='1';
	
}else{
	
	
	$user_id= $gs_id;
	$logine_for='2';
	
}
  
  
  if(isset($_GET['cart'])){
	  
	  
	  
	  $cart_item_id=mysqli_real_escape_string($conn,$_GET['cart']);
	  
	  
	  
	  
	  
	  
	  //// user must have this id before delete 
	  
	  
	  ///delete from cart 
	  
if(mysqli_query($conn,"DELETE FROM `cart` WHERE `id` ='$cart_item_id' and `user_id`='$user_id' ")){
	  
	  $show_modal1_cart=true;
	  
	  
}

  }
  
  
   if(isset($user_id) and isset($_GET['cat'])){
		
		$hide_button='<button type="button" class="btn btn-primary btn-lg btn-block">Add to cart</button>';
		
   }
   

	   
	   
    $ses_sql = mysqli_query($conn,"select * from users where email = '$user_check' ");
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
    $name= $row['name'];
	$email=$row['email'];
	$user_id = $row['id'];
	$type = $row['type'];
    $date = $row['date'];
    $pone = $row['phone'];  

if(isset($user_id)){
	
	//noting 
		$logine_for='1';
	
}else{
	
	$user_id= $gs_id;
	$logine_for='2';
	
}





$page = $type.'.php';

//echo "$user_check - $name  $page";


   
  // echo "<script>alert('$gs_id');</script>";
   


?>


<style>


.custom {
    width: 120px !important;
	 height: 100px !important;
}


.custom2 {
    width: 3px !important;
	 height: 3px !important;
}

p{
	
	
	font-family: "Tajawal", sans-serif !important;
	
	
	
	
	
}

#myBtn {
   display: none; 
  position: fixed; 
  bottom: 120px;
  right: 20px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  cursor: pointer;
  border-radius: 4px;
 #background-color: black;

}

#myBtn2 {
   display: none; 
  position: fixed; 
  top: 370px;
  left: 20px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  cursor: pointer;
  border-radius: 4px;
 #background-color: black;

}




</style>



</style>



<style>


.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #FF0000 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}




</style>


  <style>
  
  #loadd{
    width:100%;
    height:100%;
    position:fixed;
    z-index:9999;
    background:url("img/load.gif") no-repeat center center rgba(0,0,0,0.25);
	  background:url("img/load.gif") no-repeat center center rgba(0,0,0,0.25);
	 /* background-size: 400px 400px; */
	 
}

</style>



 <style>
 input[type="email"].big-dog::-webkit-input-placeholder {
  text-align:left;
}


  
.w-100 {
  width: 100% !important;
  height: 50vh;
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


/* Container holding the image and the text */
.containerimage {
  position: relative;
  text-align: center;
  color: white;
}

/* Bottom left text */
.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}

/* Top left text */
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

/* Top right text */
.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

/* Bottom right text */
.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}

/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}


</style>
<style>

.dowhite{

  
}


</style>


<link rel="stylesheet" href="control/chosen_v1.8.7/docsupport/prism.css">
  <link rel="stylesheet" href="control/chosen_v1.8.7/chosen.css">









<script>








$(document).ready(function (e) {
	$("#search").keyup(function()
	{
		
	$("#here").show();
	var x = $(this).val();
	$.ajax(
	{
		type:'GET',
		url:'index.php',
		data:'q='+x,
		success:function(data)
		{
			
			$("#here").html(data);
			
		}
		,
	});
	
	
});
	
});



	


</script>


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


<script>
var to = "<?= $_GET['n']; ?>";

function showResult(str) {
	if(str == "0"){
		
		document.getElementById("search").value = "1";
		
	}
	
	
  if (str.length==0) { 
  
  
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
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
		  
		   document.getElementById("livesearch").innerHTML="<img src='img/ajax-loader.gif' width='50' >";
		  
	  }
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","countuser.php?q="+str+"&n="+to,true);
  xmlhttp.send();
  
  
 
   
}



function showResultt(str) {
	if(str == "0"){
		
		document.getElementById("search").value = "1";
		
	}
	
	
  if (str.length==0) { 
  
  
    document.getElementById("livesearcht").innerHTML="";
    document.getElementById("livesearcht").style.border="0px";
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
		  
		   document.getElementById("livesearcht").innerHTML="<img src='img/ajax-loader.gif' width='50' >";
		  
	  }
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearcht").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearcht").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","countuser.php?q="+str+"&n="+to,true);
  xmlhttp.send();
  
  
 
   
}



function incrementValue(limitt)
{
    var value = parseInt(document.getElementById('number').value, 10);
	
	
	if( value ) {
		
		
		///noting
		
		
}else{
	
	
	
	value=0;
	
	
}


	
	if(value < limitt ){
	
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
	
	showResult(value);
	
	}else{
		
		

			
		alert('The maximum available hours has been reached.');
	
		
		
		
	}
}



function deValue()
{
	
	
    var value = parseInt(document.getElementById('number').value, 10);
	
	 if (value > 1) {
       
    
    value = isNaN(value) ? 0 : value;
    value--;
    document.getElementById('number').value = value;
	showResult(value);
	
	 }
}






function incrementValue2(limit)
{
	
    var value = parseInt(document.getElementById('numberedit').value, 10);
	
	
	if(value < limit ){
		
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('numberedit').value = value;
	
	showResultt(value);
	
	}else{
		
		
		
		alert('The maximum available hours has been reached.');
		
		
	}
	
	
	
	
}




function deValue2()
{
	
	
    var value = parseInt(document.getElementById('numberedit').value, 10);
	
	 if (value > 1) {
       
    
    value = isNaN(value) ? 0 : value;
    value--;
    document.getElementById('numberedit').value = value;
	showResultt(value);
	
	 }
}



</script>


<style>
    .btn-group-right {
      margin-right: 100px;
    }
  </style>



</head>

<body id="page-top">


  
  
 <?php 
 
 if(empty($_GET['cat'])){
echo '<div id="loadd"></div>';
 }

?>

<center>
<?php
/*
ob_implicit_flush(true);

echo '<div id="loadd"></div>';

ob_flush();
ob_end_flush();

*/


////do like 

   
   
   
   
?>
</center>


  <!-- Navigation نغير هنا المنيو  -->
<?php  //echo "$nav_is";  ?>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="img/icon.png" class="img-thumbnail" width="200" height="200" /></a>
      

	<div class="btn-group ml-auto mr-lg-0" role="group" aria-label="Basic example">


	  	  <a class="btn btn-light mr-3" align="right"  aria-expanded="false" aria-label="Toggle navigation"
		  data-toggle="modal" data-target="#mylikekist" data-dismiss="modal"
		  >
        	  
			  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-heart-fill text-danger" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg>

			  
			 </a>
			 
			 
		
	 
			 
			 				<a class="btn btn-light" align="right"   data-toggle="modal" data-target="#about" data-dismiss="modal" aria-expanded="false" aria-label="Toggle navigation">
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

		  
		  
		
		
		
          <li class="nav-item" style="display:none;">
            <a class="nav-link" style="color: black;" href="index.php" ><b><font size="4">Main</font></b></a>
          </li>
		  
		  
		  <?php
		  
		  if(!empty($name)){
			  
			  echo '  <li class="nav-item"  style="display:none;">
            <a class="nav-link"  href="logout.php" style="color: red;" ><b><font size="4">Logout</font></b></a>
          </li>';
			  
		  }
		  
		  
		  
		  
		  
		  else{
			  
			  echo '
		  
		  <li class="nav-item"  style="display:none;">
            <a class="nav-link" title="login and sign up" href="index.php" style="color: black;" data-toggle="modal" 
			data-target="#myModal10"><b><font size="4">Login</font></b></a>
           </li>';
		   
		  
		 

		 }
		 
		  
		 
		  
		  
		  
		  ?>
		  
		  

         
        
		  
		  <li class="nav-item" style="display:none;">
            <a class="nav-link"   style="display:none;"  href="#" 		  data-toggle="modal" data-target="#mylikekist" data-dismiss="modal"><b><font size="4" style="color: black;" >Favorite</font></b></a>
          </li>
		  
		 <li class="nav-item " style="display:none;">
            <a class="nav-link" href="#"><b><font size="4" style="color: black;" 
			 data-toggle="modal" data-target="#about" data-dismiss="modal"
			
			>About</font></b></a>
          </li>
		  
		  
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header 
  <header class="masthead" style="
  background-image: url('img/home-bg.jpg');
  height: 100%;
   background-position:center bottom;
  background-repeat: no-repeat;
  background-size: cover;
  ">
  -->
  
   <header>
 <br>
   <br>
   <br>
  <?php 
  
  ///Rhatuuk test ads 
  /*
  
  if(empty($_GET['cat'])){
  echo'
  
   
    <div class="embed-responsive embed-responsive-16by9" style="height:400px;" >
    <iframe class="embed-responsive-item" src="ourads.php" scrolling="no"></iframe>
  </div>
  ';
  }
  
  */
  ?>
  
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
          
           
          </div>
        </div>
      </div>
    </div>
  </header>
  

  	
	<!--- linked modal --->
	
<div class="modal fade" id="linked" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
	  
	  <?php
	  
	  $item_link=mysqli_real_escape_string($conn,$_GET['link']);
	  
	 $main_mat=" SELECT * FROM `services` WHERE `id` ='$item_link'";
	 $mymain=mysqli_query($conn,$main_mat);
	 $main_row=mysqli_fetch_array($mymain);
	 $link_title=$main_row['title'];
	$mat_id= $main_mat;
	
	

	
$i=1;
$image_caro=0;
	
	 
	
	 
	  ?>
	  
     <center>   <h5  dir="center" style="text-align: center; position: absolute; 
  right: 3rem;font-family: 'Tajawal', sans-serif;" ><?php   echo"$link_title"; ?></h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
		
    

       <?php
	   
	///print main item 


if(isset($_GET['link'])){
	
echo '<div class="row d-flex ">';
	
	   
	   
	   
	 $raleted="SELECT * FROM `services` WHERE `link` ='$item_link'";
	 $myrelated=mysqli_query($conn,$raleted);
	 
	 while($part=mysqli_fetch_array($myrelated)){
		 
		 
		 $row = $part;
		 
		 
$order_link='?cat='.$_GET['cat'].'&item='.$row['id'].'&n='.$row['price'].'&it='.$row['title'].'&linkop='.$item_link.'';
	
	
		 
		$now_id=$part['id'];
		$available=$part['available'];
	 $img_res=mysqli_query($conn,"SELECT * FROM `services_images` WHERE `service_id` ='$now_id'");	 
	 
		 
     $get_all_item_res=mysqli_query($conn,"SELECT * FROM `cart` WHERE `user_id` = '$user_id' and `item_id` ='$now_id' and  state ='' order by id desc");
  
  
  	 
		 

//for mobile 



echo'<div  class="col d-flex text-center " style="padding-top:5px;padding-left:5px;padding-right:5px;position:relative;" dir="ltr" >
	
	<a id="'.$now_id.'" name="'.$now_id.'"></a>
	
                        <div class="card border text-center  '.$bg.'" style="width: 9rem;"  >
                            <div class="card-body">
							
							';
							
							
							
							echo '

<br>



<!-- Modal -->
<div class="modal fade" id="imges'.$now_id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">';
   
   
   
   
   
   echo '<div id="carouselExampleControls'.$image_caro.'" class="carousel slide" data-ride="carousel" data-interval="false" >
  <div class="carousel-inner">
   
 
   ';

   
							
							
		$m=0;
		
	
  while($pic2=mysqli_fetch_array($img_res)){
	 
	 $url2="photo_gallery/".$pic2['url'];
	
	if($m == 0){
	echo'
	
	
	<div class="carousel-item active" >
      <img class="d-block w-100 img-thumbnail border-secondary dowhite" src="'.$url2.'" >
    </div>
	
	
	';
	
	 $main_photo="photo_gallery/".$pic2['url'];
	
	
	
	}else{
		
		
		echo'
	
	
	<div class="carousel-item">
      <img class="d-block w-100 img-thumbnail border-secondary dowhite" src="'.$url2.'" >
    </div>
	
	
	';
		
		
	}
	
	$m++;
	 
	 
 }   
 
 
 
 echo' 
</div>

  <a class="carousel-control-prev" href="#carouselExampleControls'.$image_caro.'" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon text-danger" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls'.$image_caro.'" role="button" data-slide="next">
    <span class="carousel-control-next-icon text-danger" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>';
	






   
   
   
   echo "
   
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' onclick='closemod($now_id);' >X</button>
      </div>
    </div>
  </div>
</div>




";




echo'
	
	
      <img data-toggle="modal" data-target="#imges'.$now_id.'" class="img-responsive img-thumbnail" width="100" height="100" src="'.$main_photo.'" >
	
	
	';
	
 

 					
	$description_body=$row['descrption'];

$des_text=preg_replace('/\b(https?):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', '', $description_body);

$youtube_main=preg_match('/\b(https?):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', $description_body,$matches);
								
///count if url or not $youtube_main
						
$url_view=$matches['0'];						
							
							
							
							
							//end card 
							//if(isset($user_id) and isset($_GET['cat'])){
		
		//$hide_button='<button type="button" class="btn btn-primary btn-lg btn-block">Add to cart</button>';
							
							echo'
             
                                       <hr>
                                <font size="3" class="text-info" style=""><b>'.$row['title'].'</b></font>
								<br>
								
						





<br>
<br>

<br>


';


									



echo'
		
								
								
								
								
							
						  <div style="position:absolute;bottom:0;right:0px;left:0px;" >	
						  
						
								';
								
										

									
								
echo'								
                                <font size="5" dir="ltr" class=" text-success" style=""><b>'.$row['price'].'</b>  OMR <i class="fa fa-shopping-cart" aria-hidden="true"></i></font>
                          



								';
								

	  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
								
if(isset($user_id) and isset($_GET['cat'])){


  
  
  $item_count=mysqli_num_rows($get_all_item_res);
  if(!empty($item_count)){
	
//1995
		echo '<a  class="btn btn-block" href="#"   data-toggle="modal" data-target="#myModal"     >


<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-bag-check text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
  <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>




	</a>
	
	';
							
}



	// $cart_include=true;
	  
  else{
		
		
	if(!empty($available)){	
		
		
		echo '<a style="" class="btn btn-block" href="'.$order_link.'">


	<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-bag-plus " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
  <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
</svg>
	</a>
	
	';
	
	
		
		
	}else{
		

		
			echo '<a  class="btn  btn-block " >


<svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="currentColor" class="bi bi-bag-x text-warning" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
  <path fill-rule="evenodd" d="M6.146 8.146a.5.5 0 0 1 .708 0L8 9.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 10l1.147 1.146a.5.5 0 0 1-.708.708L8 10.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 10 6.146 8.854a.5.5 0 0 1 0-.708z"/>
</svg>

	</a>
	
	';
		
		
		
	}
	
	
							
}	






}

								
						
		echo '
		



		</div>';
	echo '</div>';
echo '</div>';
echo '</div>';


	$image_caro++;
	
	

}

    if(empty($_GET['cat'])){
	
	
	echo'
	
	
	
	  
                  <div class="col-md-2" style="padding-top: 30px;">
                        <div class="card border text-center  '.$bg.'">
                            <div class="card-body">
							<a  style="text-decoration: none;color:black; " href="?cat='.$row['id'].'&is='.$row['title'].'"><div>
                                  <img style="width:100px;height:100px;object-fit:cover;" class="img-thumbnail" src="photo_gallery/'.$row['image_url'].'"></br>
                                <h3   style="font-family: "Tajawal", sans-serif;"><b>'.$row['title'].'</b></h3><hr>
                                <p dir="ltr" style="text-justify">'.$row['description'].'</p>
								
								</div></a>
                            </div>
                        </div>
                    </div>
	
	
	
	
	
	
	
	';
	
	
	
}
	
	$i++;
	

	

	 

	 
	 
	 
	
	



































		 
		 
		 
		 
	 
	 
	   
	   
	   
	   echo "</div>";
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	 }
	   
	   ?>
	   
	   
      </div>
	
	
	   
     
    </div>
  </div>
</div>



	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

  <!--withou_log modal -->
  
  
   <div id="without" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
	  
	  
  <h4><i class="fas fa-handshake" aria-hidden="true"></i></h4>
	  
	  
	  
	  
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		
		
	
		
		
      </div>
      <div class="modal-body bg-light">
   
   


   
   <?php
   
   
   
 
   
   $show_modal = false;
   
   
   if(isset($_POST['dobookfinishgust'])){
	   
	

/// get data 

$type='visitor';
$full_name=htmlspecialchars($_POST['full_name']);
$full_name=mysqli_real_escape_string($conn,$full_name);
$phone_number=htmlspecialchars($_POST['phone_number']);
$phone_number=mysqli_real_escape_string($conn,$phone_number);
$account_pass=$_POST['account_pass'];
$set_address=htmlspecialchars($_POST['set_address']);
$set_address=mysqli_real_escape_string($conn,$phone_number);
$email_address= md5($full_name);

$pass_new= md5($set_address);


if(isset($full_name) and isset($phone_number) and isset($set_address) ){
	
	
	//insert 
	$date=date("d/m/Y");
	
	$add_usr="INSERT INTO `users`(`name`, `email`, `phone`, `address`, `password`, `date`, `state`, `type`) VALUES ('$full_name','$email_address','$phone_number','$set_address','$pass_new','$date','Normal','$type')";
	
	mysqli_query($conn,$add_usr);
	
	

	
	
	
	$new_user_id=$conn->insert_id;	  
	// alert succsess 
	
	$update_cart34="UPDATE `cart` SET `user_id`='$new_user_id' WHERE `user_id` = '$gs_id' ";
	if(mysqli_query($conn,$update_cart34)){
		
		
	
	//echo $_POST['msg_box'];
	
	
	
	//exit();
	

	
  $get_all_item_res=mysqli_query($conn,"SELECT * FROM `cart` WHERE `user_id` = '$new_user_id' and state = '' order by id desc");
  
  
  $item_count=mysqli_num_rows($get_all_item_res);
  if(!empty($item_count)){
	 $msg_con= mysqli_real_escape_string($conn, $_POST['msgbox2']);
    htmlspecialchars($msg_con);
  if(empty($msg_con)){
	  
	  
	  $msg_con="No notes were entered in this order.";
	  
	  $msg_con= mysqli_real_escape_string($conn,  $msg_con);
	  
	  htmlspecialchars($msg_con);
	  
  } 
	  
	 $msg_con_fl=  htmlspecialchars($msg_con);
	 
	  
 $addordersql="INSERT INTO `orders`(`state`, `user_id`, `msg`, `items_id`, `msg_date`, `msg_time`) VALUES ('Waiting','$new_user_id','$msg_con_fl','$item_count','$date_now','$time_now')";
 	  
 mysqli_query($conn,$addordersql);
 $order_id = $conn->insert_id;	  
  while($have=mysqli_fetch_array($get_all_item_res)){
	  
	  $id_item_cart=$have['id'];
	  $item_date=$have['date']." ".$have['time'];
	  $total_price=$have['total']." OMR";
	  $id_item=$have['item_id'];
	  $item_sql_res=mysqli_query($conn,"SELECT * FROM `services` WHERE `id` ='$id_item'");
	  $item_row=mysqli_fetch_array($item_sql_res);
	  $item_name=$item_row['title'];
	  $qun=$have['qun'];
	  $pro_id=$have['project_id'];
	  $stat="Waiting";
	 
	 

	 
//add to booking 

	 mysqli_query($conn, "UPDATE `cart` SET `state`='Waiting', `order_id`='$order_id' WHERE id = '$id_item_cart' ");
	  
  }
  
  
  
 
  
  

  // add order  details 
  

if(!empty($order_id)){
	
	  
 
 
  
  
  
  	echo "<script>
window.location.href='$link_is_now&orderfinish=ture&orderid=$order_id&n=$full_name';
</script>";
	
	
	
	
}
  
  
  
  
  /// alert 

	
	
	
	

  
}
		
		
		
		
		
		
		
		

	
	//login as type 
	
	
	///change id 

	
	
	
	
	
	
	
}else{
	
	


/// noting

	
	
}












	
	   
	   
	   
   }
   
   }
   
   
   
   
   
   
   
   ?>
   
   
   
   <br>
   <br>
   
   <form action="" method="post" dir="ltr"  >
   
   
  
   
   
   <div class="form-group">
   
   

   
    <div class="input-group mb-3">
  <div class="input-group-prepend">
<svg class="bi bi-person-fill text-dark" width="40" height="38" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>



  </div>
   <input type="text" placeholder="Full Name" name="full_name" class="form-control" 
    value="<?php if(isset($_POST['full_name'])){echo $_POST['full_name'];} ?>"
   id="usr" required>
   
   
   
</div>  
   
   
   
     <div class="input-group mb-3">
  <div class="input-group-prepend">
   
<svg class="bi bi-phone text-dark" width="40" height="38" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>


  </div>
   <input type="text" placeholder="Phone Number" name="phone_number" class="form-control" 
    value="<?php if(isset($_POST['phone_number'])){echo $_POST['phone_number'];} ?>"
   id="usr"


   required>
   
   
   
</div>
 
   
    
     <div class="input-group mb-3">
  <div class="input-group-prepend">
   
<svg width="40" height="38" viewBox="0 0 16 16" class="bi bi-geo-alt text-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>


  </div>
   <input type="text" placeholder="Address-location" name="set_address" class="form-control" 
      value="<?php if(isset($_POST['set_address'])){echo $_POST['set_address'];} ?>"
   id="usr" required>
   
   
   
</div>

  
   
   
   





 
   
 
 </div>
 
   <div class="form-group" dir="ltr" style="text-align: left;">
    <label  for="exampleFormControlTextarea1" class="text-danger" style="text-align: left;" ><b>Note box:</b></label>
    <textarea  name="msgbox2" dir="ltr" class="form-control" id="exampleFormControlTextarea1" rows="5" style="resize: none;text-align:center;"
	placeholder="You can place your notes here and they will be attached to the order for rahtuk family."></textarea>
  



<br>
  
   
   

   
    
  

  <center>
   	  
	 <button type="submit"  class="btn btn-success rounded-pill border-white" name="dobookfinishgust" >

	 

Confirm the order
  
  
  <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-patch-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.273 2.513l-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
  <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>
  
  </button>
   
   
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


    <!-- Modal -->
<div id="myModal10" class="modal fade" role="dialog"  tabindex="-1">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  
	  
	  <h4><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zm4.854-7.85a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg></h4>
	  
	  
	  
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		
		
	
		
		
      </div>
      <div class="modal-body bg-info">
   
   <br>
   <br>
   
   <form action="" method="post" dir="ltr" >
   
   
   <div class="form-group">
   
   
   <div class="input-group mb-3">
  <div class="input-group-prepend">
   
<svg class="bi bi-person-fill text-white" width="40" height="38" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>




  </div>
   <input
 style="direction:LTR;"
   type="email" placeholder="Email" name="enter_email" class="form-control big-dog" 
  value="<?php if(isset($_POST['enter_email'])){echo $_POST['enter_email'];} ?>"
   
   id="usr" required>
   
   
   
</div>




 
    <div class="input-group mb-3">
  <div class="input-group-prepend">
   
   
   
<svg class="bi bi-lock-fill text-white" width="40" height="37" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <rect width="11" height="9" x="2.5" y="7" rx="2"/>
  <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
</svg>



  </div>
   
   
   
   
  <input type="password" placeholder="Password" name="enter_pass"  class="form-control " id="pwd" required>
   
   
   
   
</div>
 
 
 
   
   
    <center>
   
   <button type="submit" class="btn btn-secondary rounded-pill border-white" name="dologin" >Login</button>
   
   
   </center>
   
   
   <?php
   
   
   
  
   if(isset($_POST['dologin'])){
	   
	   $email_is =$_POST['enter_email'];
	   $pass_is=$_POST['enter_pass'];
	   
	   $pass_now = md5($pass_is);
	   
	   
	if(isset($email_is) and isset($pass_is) ){
		
		
	$find_user="SELECT * FROM `users` WHERE email ='$email_is' and password = '$pass_now' ";
	
	$find_res=mysqli_query($conn,$find_user);	
	$is_true =mysqli_num_rows($find_res);
	$get_user_old_id=mysqli_fetch_array($find_res,MYSQLI_ASSOC);
	$id_old_value=$get_user_old_id['id'];
	
	
	
	
	
	
	
	if(empty($is_true)){
		
		
		   
	echo "

	<br>
	<center>
	<div class='alert alert-danger'role='alert'>
	<h6>Please verify your registered email and password.</h6>
  
</div>
	
	</center>

	
	";

	
	$show_modal1 = true;
	
	
		
	}else{
		
		
		
		/// for normal buy 
		
		
			$get_like="UPDATE `liked` SET `user_id`='$id_old_value'  WHERE `user_id` = '$gs_id'";	
	        mysqli_query($conn,$get_like);
			
		if($cart_include){
			
			//echo "<script>alert('$id_old_value')</script>";
			
		$update_cart34="UPDATE `cart` SET `user_id`='$id_old_value' WHERE `user_id` = '$gs_id' ";
	    mysqli_query($conn,$update_cart34);	
		
			
			
			
		}else{
			
			
			//	echo "<script>alert('not include')</script>";
			
		}
		
		// sesstion
		
	$_SESSION['login_user'] = "$email_is" ;
	
	
	
	

		/// redirect 
		
	if(empty($_GET['signorder'])){


		echo '
		
		
		<script type="text/javascript">
    window.location.href = "index.php";
</script>

		
		
		';
		
	}else{
		
		
		
		
		
		//index.php?orderuser=ture
		
		
	
		
		
			echo '
		
		
		<script type="text/javascript">
    window.location.href = "index.php?orderuser=ture";
</script>

		
		
		';
		
		
	
		
		
		
		
		
	}
	
		
		
	}   
	   
	   
	   
	   
   }
   
   
   }
   
   
 
   
   
   
   
   
   
   
   ?>
   
   
 
</div>
   
   
  
   
   
   </form>
   
   <br>

     
      </div>
      <div class="modal-footer">
	  
	  <h6>Don't have an account?  <a href='' data-toggle="modal" data-target="#myModal21" data-dismiss="modal" class='text-info'>Register with us now</a></h6>
	  
        <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">X</button>
      </div>
    </div>

  </div>
</div>
  
 <div id="myModal21" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
	  
	  
	  <center><h4><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zM13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg></h4></center>
	  
	  
	  
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		
		
	
		
		
      </div>
      <div class="modal-body bg-info">
   
   


   
   <?php
   
   
   $show_modal = false;
   
   
   if(isset($_POST['dosign'])){
	   
	

/// get data 

$type='customer';
$full_name=htmlspecialchars($_POST['full_name']);
$full_name=mysqli_real_escape_string($conn,$full_name);
$phone_number=htmlspecialchars($_POST['phone_number']);
$phone_number=mysqli_real_escape_string($conn,$phone_number);
$email_address=htmlspecialchars($_POST['email_address']);
$email_address=mysqli_real_escape_string($conn,$email_address);
$account_pass=$_POST['account_pass'];
$set_address=htmlspecialchars($_POST['set_address']);
$set_address=mysqli_real_escape_string($conn,$set_address);

$pass_new= md5($account_pass);
////check email address


$check_sql="SELECT * FROM `users` WHERE `email` = '$email_address'";
$check_res=mysqli_query($conn,$check_sql);
$count_res=mysqli_num_rows($check_res);

if(empty($count_res) and isset($email_address) and isset($account_pass)){
	
	
	//insert 
	$date=date("d/m/Y");
	
	$add_usr="INSERT INTO `users`(`name`, `email`, `phone`, `address`, `password`, `date`, `state`, `type`) VALUES ('$full_name','$email_address','$phone_number','$set_address','$pass_new','$date','Normal','$type')";

	mysqli_query($conn,$add_usr);
	
	$new_user_id=$conn->insert_id;	  
	// alert succsess 
	
	
	
	$enter_mail="INSERT INTO `mailist`(`email`) VALUES ('$email_address')";

	mysqli_query($conn,$enter_mail);
	
	
	// alert succsess 
	
	
	
	
	//login as type 
	
			
	$_SESSION['login_user'] = "$email_address" ;

		/// redirect 

//// switch user 

	$update_cart34="UPDATE `cart` SET `user_id`='$new_user_id' WHERE `user_id` = '$gs_id' ";
	mysqli_query($conn,$update_cart34);
	
	$get_like="UPDATE `liked` SET `user_id`='$new_user_id'  WHERE `user_id` = '$gs_id'";	
	mysqli_query($conn,$get_like);
		
		
		
		
		
		
if(empty($_GET['signuporder'])){
echo "<script>
alert('Hello: $full_name, you have been successfully registered ..');
window.location.href='index.php';
</script>";

}else{



echo "<script>
alert('Hello: $full_name, you have been successfully registered ..');
window.location.href='index.php?orderuser=ture';
</script>";



}
	
	
	//signuporder=ture
	
	
	
	
}else{
	
	
////else
	
	
if(empty($account_pass)){
	
	
	
echo " <center> <div class='alert alert-danger role='alert' dir='ltr'> Please enter all required data.
</div> </center> ";
	
	
}

else{
	
	
		   
echo "
<center>
<div class='alert alert-danger' role='alert' dir='ltr'>
   Sorry, this email is registered. Please use another email.
  
</div>

</center>




";
}
	

	
$show_modal_up = true;



	
	
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
   <input type="text" placeholder="Full Name" name="full_name" class="form-control" 
    value="<?php if(isset($_POST['full_name'])){echo $_POST['full_name'];} ?>"
   id="usr" required>
   
   
   
</div>  
   
   
   
     <div class="input-group mb-3">
  <div class="input-group-prepend">
   
<svg class="bi bi-phone text-white" width="40" height="38" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>


  </div>
   <input type="text" placeholder="Phone" name="phone_number" class="form-control" 
    value="<?php if(isset($_POST['phone_number'])){echo $_POST['phone_number'];} ?>"
   id="usr"


   required>
   
   
   
</div>
 
   
    
     <div class="input-group mb-3">
  <div class="input-group-prepend">
   
<svg width="40" height="38" viewBox="0 0 16 16" class="bi bi-geo-alt text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>


  </div>
   <input type="text" placeholder="Address-location" name="set_address" class="form-control" 
      value="<?php if(isset($_POST['set_address'])){echo $_POST['set_address'];} ?>"
   id="usr" required>
   
   
   
</div>

  
   
   
   
   
   <div class="input-group mb-3">
  <div class="input-group-prepend">
   
<svg class="bi bi-person-fill text-white" width="40" height="38" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>


  </div>
   <input 
   style="direction:LTR;"
   type="email" placeholder="Email" name="email_address"  class="form-control big-dog" 
      value="<?php if(isset($_POST['email_address'])){echo $_POST['email_address'];} ?>"
   
   id="usr" required>
   
   
   
</div>




 
    <div class="input-group mb-3">
  <div class="input-group-prepend">
   
   
   
<svg class="bi bi-lock-fill text-white" width="40" height="37" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <rect width="11" height="9" x="2.5" y="7" rx="2"/>
  <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
</svg>



  </div>
   
   
   
   
  <input type="password" placeholder="Password" name="account_pass" class="form-control " 
        value="<?php if(isset($_POST['account_pass'])){echo $_POST['account_pass'];} ?>"
  id="pwd" required>
   
   
   
   
</div>
 
 
 
   
   
    <center>
   
   <button type="submit" class="btn btn-secondary rounded-pill border-white" name="dosign" >Register</button>
   
   
   </center>
   
   
 
</div>
   
   
  
   
   
   </form>
   
   <br>

     
      </div>
      <div class="modal-footer">
	  
	  <h6> Do you have an account with us?<a href='' data-toggle="modal" data-target="#myModal10" data-dismiss="modal" class='text-info'>Login</a></h6>
	  
        <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">X</button>
      </div>
    </div>

  </div>
</div>



<div id="orderfinish" class="modal fade" role="dialog"  tabindex="-1">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  
	  
	  <h4><i class="fas fa-calendar-check" aria-hidden="true"></i></h4>
	  
	  
	  
        
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		
		
	
		
		
      </div>
      <div class="modal-body bg-light">
   
   <form action="" method="post"  >
   
   
   
   
   
   
   
   <div class="form-group">
   
  <?php
  



  
echo "<div dir='ltr' style='text-align:right;'>

<span class='text-success'><center><font size='5'><b>Thank you, your request has been submitted successfully..</b></font></center></span> 





";



  

  echo '
  <center>
<svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-patch-check text-success" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.273 2.513l-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
  <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>
<br>
  ';
  
  if(isset($_GET['orderid'])){
	  
	  
	
	  
	$order_id_is=mysqli_real_escape_string($conn,$_GET['orderid']);  
	  
	echo "<b><font size='5' class='text-dark'>Your tracking code: </font>


<font size='5' class='text-info'>Rahtuk-$order_id_is
</font>
</b>
	";








	
  }
  
  
  echo '
  </center>
  
  <hr>
  
  
  ';
  
  
  $code="Rahtuk-$order_id_is";
  
  
if(empty($name)){


$full_name_sess = mysqli_real_escape_string($conn, $_GET['n']);



$whats_msg="Hi, I'm $full_name_sess and this is my tracking code $code.";
  

   }else{
   $whats_msg="Hello, I'm $name and this is my tracking code $code.";
  
   }
  
  
  
  
  ?>
  
 

</div>



  
   
   

   
    
  


  <div dir='ltr' style='text-align:right'>

<span class='text-danger'><font size='5'><b>Bank account number:</b></font></span> 
     </div>

	 
	 
   	  <img class="img-responsive" src="img/bank.png" style="text-align:right;" width="150" height="150" alt="Bank">
	  
	
	   
	   
      <input type="text" value="0314074731520028" style="
  border-radius: 4px;font-weight: bold;  text-align: center;" id="myInputco" disabled>
     <!-- The button used to copy the text -->
       <a onclick="myFunctioncopyit()" 
	   
	    style="text-decoration: none;"  class="text-danger" 
	   href="#" 
	   ><b>Copy</b></a>
	  
	  
	  
	  
	  <hr>
	  
	  
	    <div dir='ltr' style='text-align:right'>
<span class='text-success'><font size='5'><b>To contact us via WhatsApp:</b></font></span>
     </div>

	  
	  
	  
	  
	  
	 <a  style="text-decoration: none;" href="//api.whatsapp.com/send?phone=+96890733628&text=<?php echo "$whats_msg";?>"  >

	   <img class="img-responsive" src="img/whats.png" style="text-align:right;" width="150" height="150" alt="Whats">

</a>
   
   
 <input type="text" value="+96890733628" style="  border: 2px solid success;
  border-radius: 4px;font-weight: bold;  text-align: center;" id="myInputco32" disabled>
     <!-- The button used to copy the text -->
       <a  style="text-decoration: none;"  class="text-success" style="  border: 2px solid green;
  border-radius: 4px;font-weight: bold;"  href="//api.whatsapp.com/send?phone=+96890733628&text=<?php echo "$whats_msg";?>" ><b>Send</b></a>
	  
	  
  
   
   
   
   
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


<!-- modal guest -->


  <!-- Modal -->
<div id="orderguest" class="modal fade" role="dialog"  tabindex="-1">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  
	  
	  <h4><i class="fas fa-handshake" aria-hidden="true"></i></h4>
	  
	  
	  
        
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		
		
	
		
		
      </div>
      <div class="modal-body bg-light">
   
   <form action="" method="post"  >
   
   
   
   
   
   
   
   <div class="form-group">
   
      <p dir="ltr" style="text-align: center;" class="text-danger" ><b>You are now not registered with us, as registration helps you complete all orders quickly and receive new alerts and offers.</b></p>
     
   <center>
 
  
  
  	 <a class="btn btn-info rounded-pill border-white text-white" href="index.php?signorder=ture" >
<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zm4.854-7.85a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>

Login</a>  
  
  
    	  
	 <a class="btn btn-success rounded-pill border-whitetext-white" href="index.php?signuporder=ture">
<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zM13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
 New Registration</a>
  
  
  
  
  	 <a class="btn btn-danger rounded-pill border-white" href="<?php echo"index.php?without_log=true" ?>" >
<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-dash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zM11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
</svg>
	 
Continue without registering</a>
  
  
  
  
   
   
   </center>
   
   
 
 
 
</div>



  
   
   

   
    
  


  
   
   
   
   
</div>
  

   
   
  
   
   
   </form>
   


     
      
	 
      <div class="modal-footer">
	  
	
	  
        <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">X</button>
      </div>
    </div>

  </div>
</div>


<!--------- like panle --------->

<div id="mylikekist" class="modal fade" role="dialog"  tabindex="-1">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  
	  
	  <h4><i class="fa fa-heart" aria-hidden="true"></i></h4>
	  
	  
	  
        
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		
		
	
		
		
      </div>
      <div class="modal-body bg-light">
   
   <form action="" method="post"  >
   
   
   
   
   
   
   
   <div class="form-group">
   
  <?php
  
  
  
  
  
 
  
  $liked_is="SELECT * FROM `liked` WHERE `user_id` ='$user_id' order by id desc";
  $like_res_now=mysqli_query($conn,$liked_is);
  $find_like=mysqli_num_rows($like_res_now);
  
  
  if(!empty($find_like)){
	  
	  $liked_include =true;
	  
  
  while($liked_info=mysqli_fetch_array($like_res_now,MYSQLI_ASSOC)){
  
  $mat_id_vi=$liked_info['item_id'];
  $mat_cat=$liked_info['cat_id'];
  
  
  $get_all_item_res=mysqli_query($conn,"SELECT * FROM `services` WHERE `id` = '$mat_id_vi'");
  
  
  $item_count=mysqli_num_rows($get_all_item_res);
  if(!empty($item_count)){
	  //$cart_include=true;
	  
  while($have=mysqli_fetch_array($get_all_item_res)){
	  
	
	  $id_item=$have['id'];
	  $item_name=$have['title'];
	  $qun=$have['qun'];
	  $pro_id=$have['project_id'];
	  $price=$have['price'];
	  $get_oneimg="SELECT * FROM `services_images` WHERE `service_id` ='$id_item'";
$itemimage_res=mysqli_query($conn,$get_oneimg);
$imagedata=mysqli_fetch_array($itemimage_res,MYSQLI_ASSOC);
$image_url="photo_gallery/".$imagedata['url'];







	
	  echo "
	  <a href='index.php?cat=$mat_cat#$mat_id_vi'>
	  <div class='row' dir='ltr'>
  <div class='col-10' style=' text-align: left;'>
<img src='$image_url' style=' width:  100px;
    height: 100px;' class='img-thumbnail img-responsive' height='100' width='100'/></a><br>
	  <a style='text-decoration: none;' href='index.php?cat=$mat_cat#$mat_id_vi'> <span>Book: </span><strong><font color='green'> $item_name</font> </strong></a>
	   <br><span>Price: </span><strong><font color='green'>$price  OMR</font> </strong>
	  
	   ";
	   
	   
	   
	  echo "

	  </div>
	  
	 
<div class=col-2'>

<a class='btn' onclick='return confirm_delete45();'  href='$link_is_now&dislike=$id_item&likeope=true' ><i class='fa fa-trash text-danger fa-2x' aria-hidden='true'></i></a>
</div>

</div> 

<hr>";
	  
	  
	  
	  //big total 
	  
	  
	  $big_total += $total_price;
	  
	  
  }
  
  
  }
  
  
  
  

  
  
  
 
  
  
  }
  
  }else{
	  
	  
	 // echo "Your cart is empty.";
	 
	 
	  
	  echo '<div dir="ltr" style="text-align: left;" class="alert alert-warning">
  <strong>There are no favorite service yet.</strong>
  
</div>
<center>
 <a href="index.php"><img src="img/icon.png" class="img-thumbnail" width="100" height="100" /></a>
  </center>

';

	  
  }
  
  
  
  /////////////go to booking now 
  
  

  
  
  ?>
  
 
   
   
   

   
   
   
   
   
   

  
 
</div>
   
   
  
   
   
   </form>
   
  

     
      </div>
   
    </div>

  </div>
</div>





<!---end like ---------->
 
 <!-- about --->
 
 
 
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
 
  <!-- search --->
 
 
 
 <div id="searchitem" class="modal fade" role="dialog"  tabindex="-1">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  
	  
	  <h4><i class="fa fa-search" aria-hidden="true"></i></h4>
	  
	  
	  
        
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		
		
	
		
		
      </div>
      <div class="modal-body bg-light text-white" style="text-align:right;text-align: justify;
  text-justify: inter-word;direction:ltr;">
   

   <center>

  <input class="form-control" type="search" placeholder="Write service title to find it." name="search" id="search" onkeyup="showResultsearch(this.value)">
<div id="livesearchitem" class="bg-light" style="position: static;" ></div>

     
	 

	</center>


	 <br>
	 
	</div> 
	 
      
   
    </div>

  </div>
</div>





<!---end search ---------->
 
 
 
 
 
 
 
 
 
 
 
 
  
  <!-- Modal -->
<div id="orderuser" class="modal fade" role="dialog"  tabindex="-1">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  
	  
	  <h4><i class="fas fa-handshake" aria-hidden="true"></i></h4>
	  
	  
	  
        
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		
		
	
		
		
      </div>
      <div class="modal-body bg-light">
   
   <form action="" method="post"  >
   
   
   
   
   
   
   
   <div class="form-group">
   
  <?php
  
  
if(isset($_POST['dobookfinish'])){
	
	
	//echo $_POST['msg_box'];
	
	
	
	//exit();
	

	
  $get_all_item_res=mysqli_query($conn,"SELECT * FROM `cart` WHERE `user_id` = '$user_id' and state = '' order by id desc");
  
  
  $item_count=mysqli_num_rows($get_all_item_res);
  if(!empty($item_count)){
	 $msg_con= mysqli_real_escape_string($conn, $_POST['msgbox']);
	     htmlspecialchars($msg_con);
  
  if(empty($msg_con)){
	  
	  
	 $msg_con="No notes entered for this order";
	  $msg_con= mysqli_real_escape_string($conn, $msg_con);
	      htmlspecialchars($msg_con);
  } 
  
   $msg_con_fl=  htmlspecialchars($msg_con);
	 
	  
	  
 $addordersql="INSERT INTO `orders`(`state`, `user_id`, `msg`, `items_id`, `msg_date`, `msg_time`) VALUES ('Waiting','$user_id','$msg_con_fl','$item_count','$date_now','$time_now')";
 	  
 mysqli_query($conn,$addordersql);
 $order_id = $conn->insert_id;	  
  while($have=mysqli_fetch_array($get_all_item_res)){
	  
	  $id_item_cart=$have['id'];
	  $item_date=$have['date']." ".$have['time'];
	  $total_price=$have['total']." OMR";
	   $id_item=$have['item_id'];
	  $item_sql_res=mysqli_query($conn,"SELECT * FROM `services` WHERE `id` ='$id_item'");
	  $item_row=mysqli_fetch_array($item_sql_res);
	  $item_name=$item_row['title'];
	  $qun=$have['qun'];
	  $pro_id=$have['project_id'];
	  $stat="Waiting";
	 
	 

	 
//add to booking 

	 mysqli_query($conn, "UPDATE `cart` SET `state`='Waiting', `order_id`='$order_id' WHERE id = '$id_item_cart' ");
	  
  }
  
  
  
 
  
  

  // add order  details 
  

if(!empty($order_id)){
	
	  
  
  
  
  
  
  
  	echo "<script>
window.location.href='$link_is_now&orderfinish=ture&orderid=$order_id';
</script>";
	
	
	
	
}
  
  
  
  
  /// alert 

	
	
	
	
	
}
  
}


echo "<div dir='trl' style='text-align:right'><b>

Name: <span class='text-success'>$name</span> <hr>
Phone number: <span class='text-success'>$phone</span><hr>
Registered address: <span class='text-success'>$address</span><hr>

</b>



";

  
  
  
  
  
  
  
  
  
  
  
  
  ?>
  
 
  <div class="form-group">
     <label for="exampleFormControlTextarea1" class="text-danger" <b>:Note box</b></label>
     <textarea name="msgbox" dir="ltr" class="form-control" id="exampleFormControlTextarea1" rows="5" style="resize: none;text-align:center;"
placeholder="You can place your notes here and they will be attached to the order for rahtuk family."></textarea>
   </div>
</div>



  
   
   

   
    
  

  <center>
   	  
	 <button type="submit" onclick="return confirm_last();" class="btn btn-success rounded-pill border-white" name="dobookfinish" >
<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-patch-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.273 2.513l-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
  <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>
	 

  Confirm order</button>
   
   
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

  
  
  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog"  tabindex="-1">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  
	  
	  <h4><i class="fa fa-shopping-cart" aria-hidden="true"></i></h4>
	  
	  
	  
        
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		
		
	
		
		
      </div>
      <div class="modal-body bg-light">
   
   <form action="" method="post"  >
   
   
   
   
   
   
   
   <div class="form-group">
   
  <?php
  
  
  $get_all_item_res=mysqli_query($conn,"SELECT * FROM `cart` WHERE `user_id` = '$user_id' and state ='' order by id desc");
  
  
  $item_count=mysqli_num_rows($get_all_item_res);
  if(!empty($item_count)){
	  $cart_include=true;
	  
  while($have=mysqli_fetch_array($get_all_item_res)){
	  
	  $id_item_cart=$have['id'];
	  $item_date=$have['date']." ".$have['time'];
	  $total_price=$have['total'];
	
	   $id_item=$have['item_id'];
	  $item_sql_res=mysqli_query($conn,"SELECT * FROM `services` WHERE `id` ='$id_item'");
	  $item_row=mysqli_fetch_array($item_sql_res);
	  $item_name=$item_row['title'];
	  $qun=$have['qun'];
	  $pro_id=$have['project_id'];
	  
	    $count_price=$total_price / $qun;
echo "
	  
	  <div class='row' dir='ltr'>
  <div class='col-10' style=' text-align: left;'>

	  <span>Service:</span><strong><font color='green'> $item_name</font> </strong>
	  <span>Hour:</span><strong><font color='green'> $qun</font> </strong>
	   <br><span>Price:</span><strong><font color='green'> $total_price  OMR</font> </strong>
	   
	   ";
	   
	if(!empty($pro_id)){
		
	  $item_sql_pro=mysqli_query($conn,"SELECT * FROM `projects` WHERE `id` ='$pro_id'");
	  $item_row_pro=mysqli_fetch_array($item_sql_pro);
	  $item_name_pro=$item_row_pro['title'];
		
		echo"<br> <span>Project:</span><strong><font color='green'> $item_name_pro</font> </strong>";
		
		
	}   
	   
	   
	  echo "<br>$item_date 

	  </div>
	  
	 

<div class=col-2'>

<center>
<a class='btn btn-secondary btn-block'  style='font-family: 'Tajawal', sans-serif;' href='$link_is_now&edit=$id_item_cart&old=$qun&n=$count_price&itemis=$id_item&it=$item_name' >
<font>Update</font>
<svg width='2em' height='2em' viewBox='0 0 16 16' class='bi bi-sliders' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z'/>
</svg>

</a>
</center>

</div>
<div class=col-2'>

<a class='btn' onclick='return confirm_delete4();'  href='$link_is_now&cart=$id_item_cart' ><i class='fa fa-trash text-danger fa-2x' aria-hidden='true'></i></a>
</div>

</div> 

<hr>";
	  
	  
	  
	  //big total 
	  
	  
	  $big_total += $total_price;
	  
	  
  }
  
$big_total = $big_total + 0 ;
  
  echo"
   <div class='alert alert-info' dir='ltr' style='text-align: left;' >
  

   <strong>Total:</strong> $big_total OMR
 

</div>
";
  
  
  echo ' 



  <center>
   	  
	  
   <button type="submit" onclick="return confirm_delete5();" class="btn btn-success rounded-pill border-white" name="dobook" >
   <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
  <path fill-rule="evenodd" d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>
   
   Order</button>
   
   
   </center>
   ';
  
  
  }else{
	  
	  
	 // echo "Your cart is empty.";
	 
	 
	echo '<div dir="ltr" style="text-align: left;" class="alert alert-warning">
   <strong>The cart is now empty. We hope you find great service with us.</strong>
  
</div>
<center>
  <a href="index.php"><img src="img/icon.png" class="img-thumbnail" width="100" height="100" /></a>
   </center>

';

	  
  }
  
  
  
  /////////////go to booking now 
  
  
if(isset($_POST['dobook'])){
	
	////
	
	
	if(empty($name)){
		
	/// هنا شغل الزائر
	
	
		
	 
	 $show_modal1_cart = false;
	 
	 
	//open last order modal for user 
	
	//$show_modal1_order_user = true;
	
  	echo "<script>

window.location.href='$link_is_now&orderguest=ture';
</script>";
		
		
		
	












	
		
	}else{
	
	
	 // close cart mdel 
	 
	 $show_modal1_cart = false;
	 
	 
	//open last order modal for user 
	
	//$show_modal1_order_user = true;
	
  	echo "<script>

window.location.href='$link_is_now&orderuser=ture';
</script>";
		
	
	
	
	
	
	
	
	
	
	
	
	
	
}  


}

  
  
  ?>
  
 
   
   
   

   
   
   
   
   
   

  
 
</div>
   
   
  
   
   
   </form>
   
  

     
      </div>
      <div class="modal-footer">
	  
	  
	<a style="text-decoration: none;" href="#" data-toggle="modal" data-target="#about" data-dismiss="modal" ><b>Terms of Service</b></a>
	  
        <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">X</button>
      </div>
    </div>

  </div>
</div>

  
  <!-- start edit cart -->
  
  
<div id="cartupdate" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  
	  
	  <h4><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-bag-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.5 3.5a2.5 2.5 0 0 1 5 0V4h-5v-.5zm6 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
</svg></h4>
	  
	  
	  
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		
		
	
		
		
      </div>
      <div class="modal-body bg-light">

   
   <?php




$item_name=mysqli_real_escape_string($conn,$_GET['it']);

$item_cat=mysqli_real_escape_string($conn,$_GET['is']);
$old_value=mysqli_real_escape_string($conn,$_GET['old']);

$item_id_is=mysqli_real_escape_string($conn,$_GET['itemis']);

$item_now=mysqli_real_escape_string($conn,$_GET['item']);

///المتوفر

///المتوفر 


$get_mat_info="SELECT * FROM `services` WHERE `id` ='$item_id_is'";
$mat_data=mysqli_query($conn,$get_mat_info);
$matdata=mysqli_fetch_array($mat_data,MYSQLI_ASSOC);

$mat_ti=$matdata['title'];
$mat_available=$matdata['available'];
$get_oneimg="SELECT * FROM `services_images` WHERE `service_id` ='$item_id_is'";
$itemimage_res=mysqli_query($conn,$get_oneimg);
$imagedata=mysqli_fetch_array($itemimage_res,MYSQLI_ASSOC);
$image_url="photo_gallery/".$imagedata['url'];

$edit_id=mysqli_real_escape_string($conn,$_GET['edit']);
// <span class="badge badge-danger">'.$mat_available.'</span>

echo'

<center>
  <img src="'.$image_url.'" class="img-thumbnail img-responsive" height="100" width="100"/>

<br>

  <font class="text-dark"><b>['.$mat_ti.']</b></font>
  
</center>
';





   
   $show_modal = false;
   

   
   
 
   ?>
   
   
   <form action="" method="post"  >
   
   
  
   
   
   <div class="form-group">
   
   
 <center>
 




<div class="btn-group btn-group-lg ">
   <button type="button" class="btn btn-danger  btn-lg  border  " onclick="deValue2()" ><h3><b>-</b></h3></button>
   
  <button type="button" class="btn btn-light btn-lg "></button>
 
<button type="button" class="btn btn-success btn-lg border " <?php echo "onclick='incrementValue2($mat_available);'" ?> ><h3><b>+</b></h3></button>
</div>

   </center>
   
   <br>
 
   
     <div class="input-group mb-3">



   <input type="number" placeholder="Hours" dir='ltr' id="numberedit" onchange="showResultt(this.value)" 
   name="item_quantity" class="form-control longboxsmall" 
value="<?php echo "$old_value";?>"
step="1" min="1" max="<?php echo "$mat_available"; ?>"  onkeydown="return false;"

   required>
  

   
   
</div>
 
   <div id="livesearcht"  class="bg-success" style="position: static;" ></div>
   
   

   
   
</div>
 
 
 

   
    <center>
   
   <button type="submit"  class="btn btn-info rounded-pill border-white" name="cart_new" >
<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-repeat" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
  <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
</svg>

Update cart

</button>
   
   
   </center>
   
   <input type="hidden" name="item_id" value="<?php echo mysqli_real_escape_string($conn,$_GET['itemis']); ?>">
   <input type="hidden" name="item_price" value="<?php echo mysqli_real_escape_string($conn,$_GET['n']); ?>">
    <input type="hidden" name="link_is" value="<?php
//index.php?cat=16&is=Doors

$cat=$_GET['cat'];
$is=$_GET['is'];

	
	echo"index.php?cat=$cat&is=$is";
	

	?>">
</div>


   <?php
   
   //add item 
   
   //index.php?cat=16&is=Doors
     $item_id=$_POST['item_id'];
	 
	 
	 $org_price="SELECT * FROM `services` WHERE `id` ='$item_id'";
	 $or_q=mysqli_query($conn,$org_price);
	 $org_info=mysqli_fetch_array($or_q);
	   $item_price=$org_info['price'];


	 
	   $project_id=$_POST['project_id'];
	    
 $item_quantity=$_POST['item_quantity'];
 $total=$item_price * $item_quantity;
 //link_is
 $link_is =$_POST['link_is'];
 
 
   if(isset($_POST['cart_new']) and !empty($item_quantity) and  $item_quantity <= $mat_available ){
	   
	   
	 
	   
	   
	   
	   
	  /// $to_cart="INSERT INTO `cart`(`user_id`, `item_id`, `project_id`, `date`, `time`, `total`, `qun`) VALUES 
	  // ('$user_id','$item_id','$project_id','$date_now','$time_now','$total','$item_quantity')";
	   
	   
 $to_cart="UPDATE `cart` SET `total`='$total',`qun`='$item_quantity' WHERE `id` = '$edit_id' and user_id ='$user_id'";
 
	   if(mysqli_query($conn,$to_cart)){
		   
		   
		   
		   ////opencrat 
		   
		   
		   		   	echo "<script>

window.location.href='index.php?opencart=true';
</script>";
	
		   
		   
		   
		   
	   }
	   
	   
	   
	   
	   
	   
   }
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   ?>
   
   
  
   
   
   </form>
   
   <br>

     
      </div>
      
    </div>

  </div>
  
  
  <!-- finish edit cart -->


<!-- Modal  2 -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
	  
	  
	  <h4><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-bag-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.5 3.5a2.5 2.5 0 0 1 5 0V4h-5v-.5zm6 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
</svg></h4>
	  
	  
	  
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		
		
	
		
		
      </div>
      <div class="modal-body bg-light">

   
   <?php




$item_name=mysqli_real_escape_string($conn,$_GET['it']);

$item_cat=mysqli_real_escape_string($conn,$_GET['is']);

$item_id_is=mysqli_real_escape_string($conn,$_GET['item']);


$get_mat_info="SELECT * FROM `services` WHERE `id` ='$item_id_is'";
$mat_data=mysqli_query($conn,$get_mat_info);
$matdata=mysqli_fetch_array($mat_data,MYSQLI_ASSOC);

$mat_ti=$matdata['title'];
$mat_available=$matdata['available'];
$get_oneimg="SELECT * FROM `services_images` WHERE `service_id` ='$item_id_is'";
$itemimage_res=mysqli_query($conn,$get_oneimg);
$imagedata=mysqli_fetch_array($itemimage_res,MYSQLI_ASSOC);
$image_url="photo_gallery/".$imagedata['url'];




echo'

<center>
  <img src="'.$image_url.'" class="img-thumbnail img-responsive" height="100" width="100"/>

<br>

  <font class="text-dark"><b>['.$mat_ti.']</b></font>
</center>
';


   
   
   $show_modal = false;
   

   
   
 
   ?>
   
   
   <form action="" method="post"  >
   
   
  
   
   
   <div class="form-group">
   
   
 <center>
 




<div class="btn-group btn-group-lg ">
   <button type="button" class="btn btn-danger  btn-lg  border  " onclick="deValue()" ><h3><b>-</b></h3></button>
   
  <button type="button" class="btn btn-light btn-lg "></button>
 
<button type="button" class="btn btn-success btn-lg border " <?php echo "onclick='incrementValue($mat_available);'" ?>><h3><b>+</b></h3></button>
</div>

   </center>
   
   <br>
 
   
     <div class="input-group mb-3">



   <input type="number" placeholder="Hours" dir='ltr' id="number" onchange="showResult(this.value)" 
   name="item_quantity" class="form-control longboxsmall" 

step="1" min="1"  max="<?php echo "$mat_available"; ?>"  onkeydown="return false;" 

   required>
  

   
   
</div>
 
   <div id="livesearch"  class="bg-success" style="position: static;" ></div>
   
   

   
   
</div>
 
 
 

   
    <center>
   
   <button type="submit" style="background-color:#06C;
	color:#FFF;" class="btn btn-secondary rounded-pill border-white" name="add_item" >
		<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-bag-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
  <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
</svg>

Confirm addition

</button>
   
   
   </center>
   
   <input type="hidden" name="item_id" value="<?php echo mysqli_real_escape_string($conn,$_GET['item']); ?>">
   <input type="hidden" name="item_price" value="<?php echo mysqli_real_escape_string($conn,$_GET['n']); ?>">
    <input type="hidden" name="link_is" value="<?php
//index.php?cat=16&is=Doors

$cat=$_GET['cat'];
$is=$_GET['is'];

	
	echo"index.php?cat=$cat&is=$is";
	

	?>">
</div>


   <?php
   
   //add item 
   
   //index.php?cat=16&is=Doors
     $item_id=$_POST['item_id'];

	 
	 $org_price="SELECT * FROM `services` WHERE `id` ='$item_id'";
	 $or_q=mysqli_query($conn,$org_price);
	 $org_info=mysqli_fetch_array($or_q);
	   $item_price=$org_info['price'];
	   
	   
	   $project_id=$_POST['project_id'];
	    
 $item_quantity=$_POST['item_quantity'];
 $total=$item_price * $item_quantity;
 //link_is
 $link_is =$_POST['link_is'];
 
 if($_GET['linkop']){
	 
	 
	 $open_leked = true;
	 
	 
	 $linked_is=$_GET['linkop'];
	 
	 
	 
 }
 
   if(isset($_POST['add_item']) and $item_quantity <= $mat_available){
	   
	   
	 
	   $item_quantity= mysqli_real_escape_string($conn, $_POST['item_quantity']);
	   
	   
	   
	   $to_cart="INSERT INTO `cart`(`user_id`, `item_id`, `project_id`, `date`, `time`, `total`, `qun`) VALUES 
	   ('$user_id','$item_id','$project_id','$date_now','$time_now','$total','$item_quantity')";
	   
	   if(mysqli_query($conn,$to_cart)){
		   
		   

	
	

if($open_leked)	{
	
	
echo "<script>
alert('Item added successfully...');
window.location.href='$link_is&link=$linked_is#$item_id';
</script>";
	
	
}else{
	
	echo "<script>
alert('Item added successfully...');
window.location.href='$link_is#$item_id';
</script>";
}
		   
		   
	   }
	   
	   
	   
	   
	   
	   
   }
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   ?>
   
   
  
   
   
   </form>
   
   <br>

     
      </div>
      
    </div>

  </div>
</div>





  <!-- Main Content -->
   <div class="container">
        <div class="row">
            <div class="col-md-12">
              
            
	<?php



/// show all category 

$show_offer="SELECT * FROM `categoryies`  ORDER BY `order`";

if(isset($_GET['cat'])){
	
	$is_cat=$_GET['is'];
	$is_cat=mysqli_real_escape_string($conn,$_GET['is']);
	
	$cat_id=mysqli_real_escape_string($conn,$_GET['cat']);
	
	$name_cat="SELECT * FROM `categoryies` WHERE `id` ='$cat_id'";
	
	$cat_res=mysqli_query($conn,$name_cat);
	
	$cat_data=mysqli_fetch_array($cat_res);
	
	$is_cat = $cat_data['title'];
	
	
	
	///ايقونة الاقسام 
	
	
	echo "<br><div style='text-align:right;' ><h4>[ $is_cat ]<a href='index.php' class='text-info' style='text-decoration: none;;' >
	
	<
	<svg width='2em' height='2em' viewBox='0 0 16 16' class='bi bi-shop' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
  <path fill-rule='evenodd' d='M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z'/>
</svg>
	
	
	</a></h4> </div>";
	
	
	
	$sort=mysqli_real_escape_string($conn,$_GET['sort']);
	
	////1123
	
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	
	
	$min=mysqli_real_escape_string($conn,$_GET['min']);
    $max=mysqli_real_escape_string($conn,$_GET['max']);
	if(empty($min) or empty($max)){
		
		$max="1000";
		$min="1";
		
		
	}
	
	
	
	?>
	
	
	
	<div class="form-group" dir="ltr" style="text-align:right;" style="<?php if(empty($cat_id)){echo "display:none;";}?>";>
    <label for="exampleFormControlSelect1"><b>Sort by:</b></label>
    <select class="form-control" id="exampleFormControlSelect1" onchange="location = this.value;">
      <option value="<?php echo"index.php?cat=$cat_id&is=$is_cat&min=$min&max=$max&sort=1";?>"  <?php if(empty($sort)or $sort=='1'){echo"
	  selected";}?>>Recent</option>
      <option value="<?php echo"index.php?cat=$cat_id&is=$is_cat&min=$min&max=$max&sort=2";?>"  <?php if($sort=='2'){echo
	  "selected";}?>>Lowest price</option>
      <option value="<?php echo"index.php?cat=$cat_id&is=$is_cat&min=$min&max=$max&sort=3";?>"  <?php if($sort=='3'){echo
	  "selected";}?>>Highest price</option>

    </select>
	
	  <div class="embed-responsive embed-responsive-16by9" style="height:160px;" >
    <iframe class="embed-responsive-item" src="price.php<?php echo "?cat=$cat_id&sort=$sort&min=$min&max=$max"?>" scrolling="no"></iframe>
  </div>



  </div>
	
	

	
	

	
	<?php 
	


if(empty($sort) or $sort=='1' ){
	
	
	

$show_offer="SELECT * FROM `services` where `cat_id` ='$cat_id' and price BETWEEN '$min' AND '$max' and (`link` ='0' OR link = '') ORDER BY `id` DESC";

}

if($sort=='2' ){

$show_offer="SELECT * FROM `services` where `cat_id` ='$cat_id' and price BETWEEN '$min' AND '$max' and (`link` ='0' OR link = '') ORDER BY `price` ";


}

if($sort=='3'){
$show_offer="SELECT * FROM `services` where `cat_id` ='$cat_id' and price BETWEEN '$min' AND '$max' and (`link` ='0' OR link = '') ORDER BY `price` DESC ";

		
}
	








}




$showofeer_res=mysqli_query($conn,$show_offer);
$offer_num=mysqli_num_rows($showofeer_res);

if(empty($offer_num)){
	
	echo 
	"<br><center><h4 class='text-danger' dir='ltr' style='font-family: 'Tajawal', sans-serif;'>Sorry, there are no services for this selection.</h4></center>";
	
}else{
	
	

	
	
	//$mobile_phone_de=true;
	

if($mobile_phone_de == true){

		echo '
	
   
      <div class="row d-flex justify-content-center text-center">
	  <div class="col-md-12 d-flex justify-content-center text-center">
      <div class="row d-flex justify-content-center text-center">
	';
	
}else{

  //echo "hi : $mobile_phone_de";
  
	echo '<div class="row d-flex ">';
	
}

	
	$i=1;
	$image_caro=0;
while($row=mysqli_fetch_array($showofeer_res, MYSQLI_ASSOC)){
	
////نخفي الزر من هنا 

////see if item is only one or more 
$check_item=$row['id'];
$item_main=mysqli_query($conn,"SELECT * FROM `services` WHERE `link` ='$check_item'");
$is_main=mysqli_num_rows($item_main);
if(empty($is_main)){
	
	/// change order button 
	
   	$order_link='?cat='.$_GET['cat'].'&is='.$_GET['is'].'&item='.$row['id'].'&n='.$row['price'].'&it='.$row['title'].'';
	
	
}else{
	
	
	/// change order button 
	
	//echo "$check_item";
	
	$order_link='?cat='.$_GET['cat'].'&link='.$row['id'];
	
	
	
	
}





$i_res=$i/2;

//echo "$i_res";


if(is_int($i_res)){
$bg="border-info";
}else{
	
	$bg="border-info";
	
}


///عرض سلعة واحدة
///عرض سلعة واحدة
///عرض سلعة واحدة
///عرض سلعة واحدة
///عرض سلعة واحدةالكمبيوتر الي بعده تلفون
///عرض سلعة واحدة
///عرض سلعة واحدة

///عرض سلعة واحدة


////كام بس 


if(isset($_GET['cat'])and $mobile_phone_de == false){

	
/// get type 
$is_offer=$row['offer_id'];
$mat_id=$row['id'];
$available=$row['available'];

if(empty($is_offer)){
	
	
	//not offer 
	
	
	$img_res=mysqli_query($conn,"SELECT * FROM `services_images` WHERE `service_id` ='$mat_id'");
	
	
}else{
	
	
	//offer 
	
	$img_res=mysqli_query($conn,"SELECT * FROM `offers_images` WHERE `offer_id` ='$is_offer'");
	
	
	
	
	
}


///get start card



	
	echo'<div  class="col-md-4 d-flex " style="padding-top: 20px;">
	
	<a id="'.$mat_id.'" name="'.$mat_id.'"></a>
	
                        <div class="card border text-center  '.$bg.'">
                            <div class="card-body">
							<div>
							';
							
						//print _image	<a  style="text-decoration: none;color:black; " href="?cat='.$row['id'].'&is='.$row['title'].'">
							//</a>
							
	
   
   
   echo '<div id="carouselExampleControls'.$image_caro.'" class="carousel slide" data-ride="carousel" data-interval="false" >
  <div class="carousel-inner">
   
 
   ';

   
							
							
		$m=0;
		
	
  while($pic2=mysqli_fetch_array($img_res)){
	 
	 $url2="photo_gallery/".$pic2['url'];
	
	if($m == 0){
	echo'
	
	
	<div class="carousel-item active" >
      <img class="d-block w-100 img-thumbnail border-secondary dowhite" src="'.$url2.'" >
    </div>
	
	
	';
	}else{
		
		
		echo'
	
	
	<div class="carousel-item">
      <img class="d-block w-100 img-thumbnail border-secondary dowhite" src="'.$url2.'" >
    </div>
	
	
	';
		
		
	}
	
	$m++;
	 
	 
 }   
 
 
 
 echo' 
</div>

  <a class="carousel-control-prev" href="#carouselExampleControls'.$image_caro.'" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls'.$image_caro.'" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>';
 
 					
							
							
							
							
							
							//end card 
							//if(isset($user_id) and isset($_GET['cat'])){
		
		//$hide_button='<button type="button" class="btn btn-primary btn-lg btn-block">Add to cart</button>';
							
							echo'
             
                                       <hr>
                                <font size="6" class="text-info" style=""><b>'.$row['title'].'</b></font>
								
								
								
								
								<br>
								
								

								
                                <font size="6" dir="ltr" class=" text-success" style=""><b>'.$row['price'].'</b>  OMR <i class="fa fa-shopping-cart" aria-hidden="true"></i></font>
                                
								';
								
										  
	//youtube conver function

//work with description
$description_body=$row['descrption'];

$des_text=preg_replace('/\b(https?):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', '', $description_body);

$youtube_main=preg_match('/\b(https?):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', $description_body,$matches);
								
///count if url or not $youtube_main
						
$url_view=$matches['0'];
//$url_view = getYoutubeEmbedUrl($url_to_convert);
					
								
	///video 

echo '<center>';

	
	if(!empty($youtube_main)){
echo '

<button type="button" class="btn" data-toggle="modal" data-target="#vid'.$mat_id.'">
<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-youtube text-danger" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg>
</button>

<!-- Modal -->
<div class="modal fade" id="vid'.$mat_id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
       <div class="embed-responsive embed-responsive-16by9" style="height:400px;" >
    <iframe class="embed-responsive-item" src="'.$url_view.'" scrolling="no"></iframe>
  </div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
      </div>
    </div>
  </div>
</div>



';
	}
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
							  //  <p dir="ltr" style="text-justify">'.$row['descrption'].'</p>';
							  

			



				
								echo'
							
								
<button class="btn" data-toggle="collapse" data-target="#des'.$mat_id.'">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
</svg></button>

<div id="des'.$mat_id.'" class="collapse" style=" text-align: justify;
  text-justify: inter-word;" dir="ltr">
 <p style=" text-align: justify;
  text-justify: inter-word;">
'.$des_text.'

</p>
</div>
					
			
								<br>
								
								';							  
							  
							  
	echo '</center>';						  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
								
if(isset($user_id) and isset($_GET['cat'])){
	
	//$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		
		
		
		
		 
  $get_all_item_res=mysqli_query($conn,"SELECT * FROM `cart` WHERE `user_id` = '$user_id' and `item_id` ='$mat_id' and  state ='' order by id desc");
  
  
  
 ///liked 
 
  $is_liked="SELECT * FROM `liked` WHERE `user_id` = '$user_id' and `item_id` ='$mat_id' ";
  $res_like=mysqli_query($conn,$is_liked);
  $like_res=mysqli_num_rows($res_like);
  
  
  echo '<div class="btn-group">';
  
  
  if(empty($like_res)) {
  echo '<div class="col-lg-6">
  
  
  
  <a  class="btn btn-lg  btn-block custom " href="'.$link_is_now.'&like='.$mat_id.'" >

<svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="currentColor" class="bi bi-heart " viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg>

	</a>
	
	
  
  </div>';
  }else{
	  
	  
	   echo '<div class="col-lg-6">
  
  
  
  <a  class="btn btn-lg btn-light btn-block custom " href="'.$link_is_now.'&dislike='.$mat_id.'"  >

<svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="currentColor" class="bi bi-heart-fill text-danger" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg>

	</a>

	
	
  
  </div>';
  
	  
	  
	  
	  
  }
  
  
  
  
  
  
  echo'
 
    <div class="col-lg-6">
    
    
  ';
  
  
  $item_count=mysqli_num_rows($get_all_item_res);
  if(!empty($item_count)){
	
//1995
		echo '<a  class="btn btn-lg btn-block btn-danger custom" href="#"   data-toggle="modal" data-target="#myModal"     >


<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-bag-check text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
  <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>




	</a>
	
	</div>';
							
}



	// $cart_include=true;
	  
  else{
		
		
	if(!empty($available)){	
		
		
		echo '<a style="color:black;" class="btn btn-lg btn-block custom" href="'.$order_link.'">


	<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-bag-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
  <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
</svg>

BUY

	</a>
	
	</div>';
	
	
		
		
	}else{
		

		
			echo '<a  class="btn btn-lg btn-block btn-warning custom" >


<svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-bag-x" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
  <path fill-rule="evenodd" d="M6.146 8.146a.5.5 0 0 1 .708 0L8 9.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 10l1.147 1.146a.5.5 0 0 1-.708.708L8 10.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 10 6.146 8.854a.5.5 0 0 1 0-.708z"/>
</svg>

X

	</a>
	
	';
		
		
		
	}
	
	
							
}	






}

								
						echo '	
						</div>
						
						</div>
						
								</div>
                            </div>
                      </div>
					  
					   
                    
	
	
	';
	
	
	$image_caro++;
	
	
	
	

}


///   عرض السلع
///// cat 
 ///   عرض السلع
///// cat 
 ///   عرض السلع
///// cat 
 ///   عرض السلع
///// cat 
 ///   عرض السلع
///// cat 
 ///   عرض السلع
///// cat 
 ///   عرض السلع
///// cat 
 ///   عرض السلع
///// cat 
 ///   عرض السلع
///// cat 
 

if(isset($_GET['cat']) and  $mobile_phone_de == true ){
	
	
	
	//echo "$mobile_phone_de";

	
/// get type 
$is_offer=$row['offer_id'];
$mat_id=$row['id'];
$available=$row['available'];

if(empty($is_offer)){
	
	
	//not offer 
	
	
	$img_res=mysqli_query($conn,"SELECT * FROM `services_images` WHERE `service_id` ='$mat_id'");
	
	
}else{
	
	
	//offer 
	
	$img_res=mysqli_query($conn,"SELECT * FROM `offers_images` WHERE `offer_id` ='$is_offer'");
	
	
	
	
	
}


///get start card

//style="padding-top: 20px;"

///style="width: 9rem;" 

	
	echo'<div  class="col d-flex text-center " style="padding-top:5px;padding-left:10px;padding-right:18px;position:relative;" dir="ltr" >
	
	<a id="'.$mat_id.'" name="'.$mat_id.'"></a>
	
                        <div class="card border text-center  '.$bg.'" style="width: 9rem;"  >
                            <div class="card-body">
							
							';
							
						//print _image	<a  style="text-decoration: none;color:black; " href="?cat='.$row['id'].'&is='.$row['title'].'">
							//</a>
							
	/*<button type="button" class="btn" data-toggle="modal" data-target="#vid'.$mat_id.'">
<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-youtube text-danger" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg>
</button>
   */
   
   
////////////////////////////////////////////////////////////image show modal 
echo '

<br>



<!-- Modal -->
<div class="modal fade" id="imges'.$mat_id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">';
   
   
   



   
   
   echo '<div id="carouselExampleControls'.$image_caro.'" class="carousel slide" data-ride="carousel" data-interval="false" >
  <div class="carousel-inner">
   
 
   ';

   
							
							
		$m=0;
		
	
  while($pic2=mysqli_fetch_array($img_res)){
	 
	 $url2="photo_gallery/".$pic2['url'];
	
	if($m == 0){
	echo'
	
	
	<div class="carousel-item active" >
      <img class="d-block w-100 img-thumbnail border-secondary dowhite" src="'.$url2.'" >
    </div>
	
	
	';
	
	 $main_photo="photo_gallery/".$pic2['url'];
	
	
	
	}else{
		
		
		echo'
	
	
	<div class="carousel-item">
      <img class="d-block w-100 img-thumbnail border-secondary dowhite" src="'.$url2.'" >
    </div>
	
	
	';
		
		
	}
	
	$m++;
	 
	 
 }   
 
 
 
 echo' 
</div>

  <a class="carousel-control-prev" href="#carouselExampleControls'.$image_caro.'" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon text-danger" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls'.$image_caro.'" role="button" data-slide="next">
    <span class="carousel-control-next-icon text-danger" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>';
	






   
   
   
   echo '
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
      </div>
    </div>
  </div>
</div>




';







	
	///////////////////////////////////////////////////////////////////////////////
    // $pic_is=mysqli_fetch_array($img_res,MYSQLI_ASSOC);
	 
	// $url3="photo_gallery/".$pic_is['url'];		






////make photo show modal 


/////////////////////////////////////////////////////////////////////////////////////////////////////////////	 
							

	echo'
	
	
      <img data-toggle="modal" data-target="#imges'.$mat_id.'" class="img-responsive img-thumbnail" width="100" height="100" src="'.$main_photo.'" >
	
	
	';
	
 

 					
	$description_body=$row['descrption'];

$des_text=preg_replace('/\b(https?):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', '', $description_body);

$youtube_main=preg_match('/\b(https?):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', $description_body,$matches);
								
///count if url or not $youtube_main
						
$url_view=$matches['0'];						
							
							
							
							
							//end card 
							//if(isset($user_id) and isset($_GET['cat'])){
		
		//$hide_button='<button type="button" class="btn btn-primary btn-lg btn-block">Add to cart</button>';
							
							echo'
             
                                       <hr>
                                <font size="3" class="text-info" style=""><b>'.$row['title'].'</b></font>
								<br>
								
						





<br>
<br>

<br>
<br>

<br>

';

if(!empty($youtube_main)){

echo "<br>


<br>

";


									}
									



echo'
		
								
								
								
								
							
						  <div style="position:absolute;bottom:0;right:0px;left:0px;" >	
						  
						
								';
								
										

									
								
echo'								
                                <font size="5" dir="ltr" class=" text-success" style=""><b>'.$row['price'].'</b>  OMR <i class="fa fa-shopping-cart" aria-hidden="true"></i></font>
                          



								';
								

										  
	//youtube conver function

//work with description

//$url_view = getYoutubeEmbedUrl($url_to_convert);
					
								
	///video 

echo '<center>';

	
	if(!empty($youtube_main)){
echo '


<button type="button" class="btn" data-toggle="modal" data-target="#vid'.$mat_id.'">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-youtube text-danger" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg>
</button>

<!-- Modal -->
<div class="modal fade" id="vid'.$mat_id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
       <div class="embed-responsive embed-responsive-16by9" style="height:400px;" >
    <iframe class="embed-responsive-item" src="'.$url_view.'" scrolling="no"></iframe>
  </div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
      </div>
    </div>
  </div>
</div>




';
	}
								
								
								
								
								
								
								
								
	echo '


    

<button type="button" class="btn btn-sm " data-toggle="modal" data-target="#des'.$mat_id.'">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
</svg
</button>

 

<div class="modal fade" id="des'.$mat_id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: "Tajawal", sans-serif;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body" style=" text-align: justify;
  text-justify: inter-word;font-family: "Tajawal", sans-serif;" dir="ltr">

 <p style=" text-align: justify;
  text-justify: inter-word;font-family: "Tajawal", sans-serif;"><b>
'.$des_text.'
</b>
</p>

  
      </div>
    </div>
</div>
</div>




';							
								
								
								
								
								
								
								
								
								
							  //  <p dir="ltr" style="text-justify">'.$row['descrption'].'</p>';
							  

			



				/*
								echo'
							
								
<button class="btn" data-toggle="collapse" data-target="#des'.$mat_id.'">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
</svg></button>

<div id="des'.$mat_id.'" class="collapse" style=" text-align: justify;
  text-justify: inter-word;" dir="ltr">
 <p style=" text-align: justify;
  text-justify: inter-word;">
'.$des_text.'

</p>
</div>
					
			
								<br>
								
								';	



*/

								
							  
							  
	echo '</center>';						  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
							  
								
if(isset($user_id) and isset($_GET['cat'])){
	
	//$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		
		
		
		
		 
  $get_all_item_res=mysqli_query($conn,"SELECT * FROM `cart` WHERE `user_id` = '$user_id' and `item_id` ='$mat_id' and  state ='' order by id desc");
  
  
  
 ///liked 
 
  $is_liked="SELECT * FROM `liked` WHERE `user_id` = '$user_id' and `item_id` ='$mat_id' ";
  $res_like=mysqli_query($conn,$is_liked);
  $like_res=mysqli_num_rows($res_like);
  
  
  echo '<div dir="ltr" class="btn-group text-center" role="group" aria-label="Basic example" style="  margin: auto;
  display: flex;
  flex-direction: row;
  justify-content: center;
  text-align:right;">';
  
  
  if(empty($like_res)) {
  echo '
  
  
  
  <a  class="btn  custom2 " href="'.$link_is_now.'&like='.$mat_id.'"  >

<svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-heart " viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg>

	</a>
	
	
  
  ';
  }else{
	  
	  
	   echo '
  
  
  <a  class="btn custom2 " href="'.$link_is_now.'&dislike='.$mat_id.'"  >

<svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-heart-fill text-danger" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg>

	</a>

	
	
  
 ';
  
	  
	  
	  
	  
  }
  
  
  
  
  

  
  
  $item_count=mysqli_num_rows($get_all_item_res);
  if(!empty($item_count)){
	
//1995
		echo '<a  class="btn custom2" href="#"   data-toggle="modal" data-target="#myModal"     >


<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-bag-check text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
  <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>




	</a>
	
	';
							
}



	// $cart_include=true;
	  
  else{
		
		
	if(!empty($available)){	
		
		
		echo '<a style="" class="btn custom2" href="'.$order_link.'">


	<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-bag-plus " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
  <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
</svg>
	</a>
	
	';
	
	
		
		
	}else{
		
		//<a class="btn-floating btn-lg btn-whatsapp" href="//api.whatsapp.com/send?phone=+96871131976&text=مرحبًا عصافير .." ><i class="fab fa-whatsapp text-white fa-3x"></i></a>
	

		
			echo '<a  class="btn  btn-block custom2" >


<svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-bag-x text-warning" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
  <path fill-rule="evenodd" d="M6.146 8.146a.5.5 0 0 1 .708 0L8 9.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 10l1.147 1.146a.5.5 0 0 1-.708.708L8 10.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 10 6.146 8.854a.5.5 0 0 1 0-.708z"/>
</svg>

	</a>
	
	';
		
		
		
	}
	
	
							
}	






}

								
						
		echo '
		
<br>
<br>


		</div>';
	echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

	$image_caro++;
	
	

}

    if(empty($_GET['cat'])){
	
	
	echo'
	
	
	
	  
                  <div class="col-md-4" style="padding-top: 30px;">
                        <div class="card border text-center  '.$bg.'">
                            <div class="card-body">
							<a  style="text-decoration: none;color:black; " href="?cat='.$row['id'].'&is='.$row['title'].'"><div>
                                  <img style="width:100px;height:100px;object-fit:cover;" class="img-thumbnail" src="photo_gallery/'.$row['image_url'].'"></br>
                                <h5   style="font-family: "Tajawal", sans-serif;"><b>'.$row['title'].'</b></h5><hr>
                                <p dir="ltr" style="text-justify">'.$row['description'].'</p>
								
								</div></a>
                            </div>
                        </div>
                    </div>
	
	
	
	
	
	
	
	';
	
	
	
}
	
	$i++;
	
}
	
	/*echo" <tr>
	 <td>".$row['order']."</td>
        <td class='bg-warning'>".$row['title']."</td>
        <td>".$row['description']."</td>
        <td><img width='50' height='50' class='img-thumbnail' src=../photo_gallery/".$row['image_url']."></td>
       
	<td class='bg-danger'><a onclick='return confirm_delete3();' href='?catdel=".$row['id']."' class='text-white'><b>Delete</b></a></td>
		
		 </tr>
		";
     */
	 
	 

	 
	 
	 
	
	
}




echo '</div>';


echo '</div>';



echo '</div>';























?>
		
			
            </div>
			
	

<?php
	
	
	if(isset($user_id) and isset($_GET['cat'])){
		
		//$hide_button='<button type="button" class="btn btn-primary btn-lg btn-block">Add to cart</button>';
		
		
		
		///cart float 
		
		
		
	/*echo'
<a href="#" class="float" data-toggle="modal" data-target="#myModal">
<i class="fa fa-cart-arrow-down my-float"></i>
</a>
<div class="label-container" style="font-family:Verdana, Geneva, sans-serif;
	
	font-size:12px;">
<div class="label-text">Your Cart</div>
<i class="fa fa-play label-arrow"></i>
</div>

';

*/


	}



  if(isset($_GET['item'])){
	
  
	  $show_modal=true;
	  
	  
  }
  
  
  
  
  ///do like 
  
  
  
  if(isset($_GET['like'])){
	
	

	   
	   
	 
	   $item_id_is=mysqli_real_escape_string($conn,$_GET['like']);
	   
	   $item_cat=mysqli_real_escape_string($conn,$_GET['cat']);
	   
	   $do_like="INSERT INTO `liked`(`user_id`, `item_id`, `cat_id`, `date`, `time`) VALUES ('$user_id','$item_id_is','$item_cat','$date_now','$time_now')";
	   
	   

	   if(mysqli_query($conn,$do_like)){
		   
		   
		   	echo "<script>
window.location.href='index.php?cat=$item_cat#$item_id_is';
</script>";
	
		   
		   
		   
	   }else{
		   
		   
		   
		  // echo mysqli_error($conn);
		   
		   
	   }
	   
	   
	   
	   
	   
	   
   } 
   
   
   ///dislike 
   
   
   if(isset($_GET['dislike'])){
	
	

	   
	   
	 
	   $item_id_is=mysqli_real_escape_string($conn,$_GET['dislike']);
	   
	   $item_cat=mysqli_real_escape_string($conn,$_GET['cat']);
	   
	   $dis_like="DELETE FROM `liked` WHERE `item_id` = '$item_id_is' and `user_id` ='$user_id'";
	   
	   
if(isset($_GET['likeope'])){
	
	
	   if(mysqli_query($conn,$dis_like)){
		   
		   if(!empty($item_cat)){
		   
		   	echo "<script>
window.location.href='$link_is_now&cat=$item_cat&likeope=true';
</script>";

		   
		   
		   }else{
			   
			   
			   		   	echo "<script>
window.location.href='index.php?likeope=true';
</script>";

			   
		   }
		   
		   
		   
	   }
	
	
	
	
	
}else{


	   if(mysqli_query($conn,$dis_like)){
		   
		   
		   	echo "<script>
window.location.href='$link_is_now&cat=$item_cat#$item_id_is';
</script>";

		   
		   
		   
		   
	   }
	   
}
	   
	   
	   
	   
	   
	   
	   
   }
   
   
   
   
   
   
  
	?>		
			
        </div>
    </div>
  
 

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
	<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#orderfinish">Open Modal</button> -->
	
<!--- back to top -->
<button onclick="topFunction()" id="myBtn" title="TOP">

<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-up-square-fill text-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 11.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg>

</button>


<button onclick="downFunction()" id="myBtn2" title="Down">

<svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-arrow-down-square-fill text-dark" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
</svg>

</button>






  
  

      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <center><a href='index.php'><img src="img/icon.png" class="img-thumbnail" width="150" height="150" /></a></center>
          <p class="copyright text-muted">Copyright &copy; <?php echo date("Y"); ?> Rahtuk</p>
	
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

  <!-- Bootstrap core JavaScript  هنا الازرار---->

<div class="btn-group special" role="group" aria-label="...">
  <a class="btn btn-default border" href="#" data-toggle="modal" data-target="#myModal" >
  
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

	  	   echo'   <a class="btn btn-default border" href="customer.php?booking=show">
	
	
	
		    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-check text-success" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zm4.854-7.85a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
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

   <script>
 function check(input) {
   if (input.value == 0) {
     input.setCustomValidity('The number must not be zero.');
   } else {
     // input is fine -- reset the error message
     input.setCustomValidity('');
   }
 }
 
 
 window.onscroll = function()
{
    if(pageOffset >= 1000)
    {
        document.getElementById('backToTopID').style.visibility="visible"
    }else
    {
        document.getElementById('backToTop').style.visibility="hidden";
    }
};
</script>



<!--- add item --->

   <?php if($show_modal):?>
  <script> $('#myModal2').modal('show');</script>
<?php endif;?>




<!-- signup  --->
   <?php if($show_modal_up or $_GET['signuporder']):?>
  <script> $('#myModal21').modal('show');</script>
<?php endif;?>

<!-- sign  --->
   <?php if($show_modal1 or $_GET['signorder']):?>
  <script> $('#myModal10').modal('show');</script>
<?php endif;?>



 
<!-- cart --> 

   <?php if($show_modal1_cart or $_GET['opencart']):?>
  <script> $('#myModal').modal('show');</script>
<?php endif;?>


 <?php if($show_modal1_order_user_10 or isset($_GET['orderuser'])):?>
  <script> $('#orderuser').modal('show');</script>
<?php endif;?>



 <?php if($show_modal1_order_user_1 or isset($_GET['orderguest'])):?>
  <script> $('#orderguest').modal('show');</script>
<?php endif;?>




 <?php if($show_modal1_order_user_2 or isset($_GET['without_log'])):?>
  <script> $('#without').modal('show');</script>
<?php endif;?>




 <?php if($show_modal1_order_user_3 or isset($_GET['edit'])):?>
  <script> $('#cartupdate').modal('show');</script>
<?php endif;?>




<?php if($show_modal1_order_none):?>
  <script> $('#ordernone').modal('show');</script>
<?php endif;?>





<?php if($show_modal1_fin or isset($_GET['orderfinish'])):?>
  <script> $('#orderfinish').modal('show');</script>
<?php endif;?>



<?php if($show_modal1_liked or isset($_GET['likeope'])):?>
  <script> $('#mylikekist').modal('show');</script>
<?php endif;?>




<?php if($show_modal1_linked or isset($_GET['link'])):?>
  <script> $('#linked').modal('show');</script>
<?php endif;?>





<script type="text/javascript">
		function confirm_delete4() {
			return confirm("Do you want to delete this service from the cart?");
		}

</script>




<script type="text/javascript">
		function confirm_delete45() {
				return confirm("Do you want to delete this service from the favorite?");
		}

</script>




<script type="text/javascript">
		function confirm_delete5() {
			return confirm("Have you reviewed all items and total value and agree to the terms of service?");
		}

</script>


<script type="text/javascript">
		function confirm_last() {
				return confirm("Are you sure about this?");
		}

</script>


<script>
    function doalert(obj) {
        alert(obj.getAttribute("href"));
        return false;
    }
</script>



 <script>

 

function myFunctioncopyit() {
  /* Get the text field */
  document.getElementById("myInputco").disabled = false;
  var copyText = document.getElementById("myInputco");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");
document.getElementById("myInputco").disabled = true;
  /* Alert the copied text+ copyText.value */
alert("The account number has been copied successfully.." );
     /* open the modal*/
   
}

</script>



  
  <script>
  
  
  var mybutton = document.getElementById("myBtn");
  var mybutton2 = document.getElementById("myBtn2");
  
  
  $(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() > $(document).height() - 400) {
      
	  mybutton.style.display = "block";
	  
   }else{
	   
	   
	   
	   mybutton.style.display = "none";
	   
   }
});





         $(function () {
             var $win = $(window);

             $win.scroll(function () {
                 if ($win.scrollTop() < 50){
					 
					 
					 
                  mybutton2.style.display = "block";
					 
					 
					 
				 }
				else {
					
					
					
	              mybutton2.style.display = "none";
					
					
					
				}
             });
         });


//Get the button










function downFunction() {
  document.body.scrollTop = 0;
  window.scrollTo(0,document.body.scrollHeight);
}


// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}




$("button[data-dismiss-modal=modal2]").click(function () {
    $('#myInnerModal1').modal('hide');
});



function closemod(m) {

  
  
      $('#imges'+m).modal('hide');
	  
	  
}



function dolimit() {

  
  
alert('hi');



	  
	  
}









</script>



</html>