

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>menu</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.33" />
	<link rel="stylesheet" href="restaurent.css">
	<link rel="stylesheet" href="restaurennt_page2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Oswald&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script>
	function myfun()
	{
     var srh =  getElementsByClassName('search');
		 document.body.SetAttrebute('style','background-color:red;');
	}


var loader = document.getElementById('loading');
function myfunction()
{
	loader.style.display='none';
} 

function divfun()
{
   var div =  getElementsById('menuitem');
		 document.div.SetAttrebute('style','display:none;');
		 	div.style.display='none';
}

	</script>
	<style>

	
	.content2, #info
	{
		display: block;
	}
	
	</style>

</head>

<body>


	<div class="menu">
		<div class="logo">
			foodbar
		</div>
	<ul>
	<li><a href="restaurennt_menu.php" id="menulink" target="framebody" >MENU</a></li>
	<li><a href="restaurennt_offer.php">OFFERS</a></li>
	<li>
			<form action="#content2" method="post">
   <div class="search-box">

	  <input class="search" type="search"  name="search" placeholder="search here...." >
	  <a href="" class="submit" > <i class="fa fa-search"></i>  </a>

</div>
</form>
</li>
	<li><a href="restaurennt_booking.php">BOOKING</a></li>
	<li><a href="#about">About us</a></li>
	</ul>

	</div>


	<Section id="slider">
	<div class="slider-container">

	<div id="slides">
	<div class="slide">
	<img src="restaurant1.jpg" alt="slide one">
	<div class="caption">
	<p>
	   Jay singh raghuavanshi web-developer. Duis quis sem risu suspend lacinia elementum nunc.Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
	</p>
	</div>
	</div>
	<div class="slide">
	<img src="restaurant2.jpg" alt="slide two">
	<div class="caption">
	<p>
	   Jay singh raghuavanshi web-developer. Duis quis sem risu suspend lacinia elementum nunc.Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
	</p>
	</div>
	</div>
	<div class="slide">
	<img src="restaurant3.jpg" alt="slide three">
	<div class="caption">
	<p>
	  Jay singh raghuavanshi web-developer . Duis quis sem risu suspend lacinia elementum nunc.Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
	</p>
	</div>
	</div>
	</div>
	<span class="timeline"></span>
	</div>
	</Section>
</div>
	<!---

	<div class="slider">
	<figure>
	<div class="slide"><img src="wall1.jpg"></div>
	<div class="slide"><img src="wall2.jpg"></div>
	<div class="slide"><img src="wall3.jpg"></div>
	</figure>
</div>--->

<div class="content2" style="position:relative; top:200px;" id="content2">
    
   
	<?php
	echo $_GET['sid'];
	if(isset($_POST['search']))
	{
	$search=$_POST['search'];
 $con= Mysqli_connect('localhost','id10728709_root','jaysingh','id10728709_userdata');
	$query1="SELECT * FROM `drawing` WHERE about LIKE '%$search%'";
	$run1 = mysqli_query($con,$query1);
	if(mysqli_num_rows($run1)>0)
	{
		while($data1=mysqli_fetch_assoc($run1))

	{?>
		<div class="con_element">
			<figure>
		<img src="dataimg/<?php echo $data1['image']; ?>" style=" position:relative; width:100%; height:150px; border-radius:0px; left:0; top:-10px; margin:2px; ">
		<figcaption style=" position:relative;  width:100%; max-height:100px; font-family: 'Oswald', sans-serif; left:0px;">
		 <?php  echo $data1['about']; ?>	<a href="restaurennt_page2.php?sid=<?php echo $data1['id']; ?>" > read more </a>
		</figcaption>

		</figure>

		</div>
	<?php }}}?>



<?php
 $con= Mysqli_connect('localhost','id10728709_root','jaysingh','id10728709_userdata');
$query="SELECT * FROM `drawing` ";
$run = mysqli_query($con,$query);
if(mysqli_num_rows($run)>0)
{
	while($data=mysqli_fetch_assoc($run))

{?>

	<div class="con_element">
		<figure>
	<img src="dataimg/<?php echo $data['image']; ?>" style=" position:relative; width:100%; height:150px; border-radius:0px; left:0; top:-10px; margin:2px; ">
	<figcaption style=" position:relative;  width:100%; max-height:100px; font-family: 'Oswald', sans-serif; left:0px;">
	 <?php  echo $data['about']; ?> <a  href="restaurennt_page2.php?sid=<?php echo $data['id']; ?>" style="position:relative;"> read more</a>
	</figcaption>
	</figure>
	</div>
<?php }}?>



   
</div>



<!--
<div class="content" id="content"  style="display:none;">


<figure class="figure">

		<div class="draw" >
	<figure>

<img src="wall1.jpg" style=" position:relative; width:200px; height:200px; border-radius:110px; left:10%; top:-10px; margin:10px;">
<figcaption style=" position:relative; background-color:#111945; width:100%; max-height:100px; font-family: 'Oswald', sans-serif; left:0px;">
jay singh raghuavanshi now going on html class and css many diff way to style the html <a href="#">read more</a>

</figcaption>
</figure>

	</div>

		<div class="draw" >
	<figure>

<img src="wall2.jpg" style=" position:relative; width:200px; height:200px; border-radius:110px; left:10%; top:-10px; margin:10px;">
<figcaption style=" position:relative; background-color:#111945; width:100%; max-height:100px; font-family: 'Oswald', sans-serif; left:0px;">
jay singh raghuavanshi now going on html class and css many diff way to style the html <a href="#">read more</a>

</figcaption>
</figure>

	</div>
	<div class="draw" >
<figure>

<img src="wall3.jpg" style=" position:relative; width:200px; height:200px; border-radius:110px; left:10%; top:-10px; margin:10px;">
<figcaption style=" position:relative; background-color:#111945; width:100%; max-height:100px; font-family: 'Oswald', sans-serif; left:0px;">
jay singh raghuavanshi now going on html class and css many diff way to style the html <a href="#">read more</a>

</figcaption>
</figure>

</div>
<div class="draw" >
<figure>

<img src="wall1.jpg" style=" position:relative; width:200px; height:200px; border-radius:110px; left:10%; top:-10px; margin:10px;">
<figcaption style=" position:relative; background-color:#111945; width:100%; max-height:100px; font-family: 'Oswald', sans-serif; left:0px;">
jay singh raghuavanshi now going on html class and css many diff way to style the html <a href="#">read more</a>

</figcaption>
</figure>

</div>
<div class="draw" >
<figure>

<img src="wall1.jpg" style=" position:relative; width:200px; height:200px; border-radius:110px; left:10%; top:-10px; margin:10px;">
<figcaption style=" position:relative; background-color:#111945; width:100%; max-height:100px; font-family: 'Oswald', sans-serif; left:0px;">
jay singh raghuavanshi now going on html class and css many diff way to style the html <a href="#">read more</a>

</figcaption>
</figure>

</div>
</figure>

	</div>
-->

<div id="info">
	<div class="footer">
		<h4>Categories</h4>
	<a href="#">Graphics & Design</a>
		<a href="#">Video & Audio</a>
			<a href="#">Lifestyle</a>
				<a href="#">Photoshop</a>
			</div>
			<div class="footer">
				<h4>Support</h4>
			<a href="#">Help & Support</a>
				<a href="#">Drawing & learning </a>
					<a href="#">Trust</a>
						<a href="#">About Drawing</a>
					</div>
					<div class="footer">
						<h4>Social Network</h4>
					<a href="#">facebook</a>
						<a href="#">Whatsapp</a>
							<a href="#">Twitter</a>
								<a href="#">Instagram</a>
							</div>
							<div class="footer" id="about">
								<h4>About Us</h4>
							<a href="#"><img src="user.jpg" style="width:80px; height:80px;"</a>
								<a href="#">Name : jay singh</a>
									<a href="#">Web developer &Designer </a>

									</div>
</div>


</body>

</html>
