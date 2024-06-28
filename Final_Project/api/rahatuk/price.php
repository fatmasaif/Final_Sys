<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"  media="screen">
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">

<style>

body{
	
	font-family: 'Tajawal', sans-serif;

	
}

</style>



<script type="text/javascript">

var to = "<?= $_GET['cat']; ?>";
var sort = "<?= $_GET['sort']; ?>";

		function doprice() {
			
			
			
		var max = document.getElementById("pricemax").value;	
		var min = document.getElementById("pricemin").value;		
			
			
				
				
	window.top.location.href ="index.php?cat="+to + "&min="+min+"&max="+max+"&sort="+sort; 
				
				
				
				
		}

</script>



<div data-role="page"  style="font-family: 'Tajawal', sans-serif;">

		<?php 
		error_reporting(0);
		
	
$link_is=$_GET['link'];
//echo"$link_is";




if(isset($_POST['ps']))
{
	
	
	
	
	echo '<script>
	
	window.top.location.href = "'.$link_is.'"; 
	
	</script>';
	
	
	
	
}


?>
	
	
	
  <div data-role="main" class="ui-content">
  
  
    <form method="post" action="">
      <div data-role="rangeslider">
        <label for="price-min" dir="ltr"><b>Price in OMR:</b></label>
        <input type="range" name="pmin" id="pricemin" value="<?php echo$_GET['min']; ?>" min="0" max="30"  >
        <label for="price-max"></label>
        <input type="range" name="pmax" id="pricemax" value="<?php echo$_GET['max']; ?>" min="0" max="30" >
      </div>
        
		
		<center><button data-inline="true"  onclick="doprice();" >Update</button>
		
		
		
		
		

		
		
		</center>
		
    
	
      </form>
  </div>
</div>




