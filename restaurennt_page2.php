<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="restaurennt_page2.css" type="text/css">
    <link rel="stylesheet" href="restaurent.css" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script>
      var footer =document.getElementsByTagName('about');
      function about()
       {
        document.footer.style.background='lightgrey';
      }
    </script>

    <title> Graphics & Design</title>
  </head>
  <body>
    <div class="menu">
      <div class="logo">
        foodbar
      </div>
    <ul>
    <li><a href="restaurennt.php">home</a></li>
    <li><a href="restaurennt_offer.php">offers</a></li>
    <li>
      <form action="#content2" method="post">
    <div class="search-box">

 	  <input class="search" type="search"  name="search" placeholder="search here...." >
 	  <a href="" class="submit" > <i class="fa fa-search"></i>  </a>

 </div>
 </form>
  </li>
    <li><a href="restaurennt_booking.php">booking</a></li>
    <li><a href="#about" onclick="about()">About us</a></li>
    </ul>

    </div>
    <div class="img">

      <?php
      $id=$_GET['sid'];
     $con= Mysqli_connect('localhost','id10728709_root','jaysingh','id10728709_userdata');
      $query2="SELECT * FROM `drawing` WHERE id='$id' ";
      $run2 = mysqli_query($con,$query2);
      if(mysqli_num_rows($run2)>0)
      {
        while($data2=mysqli_fetch_assoc($run2))
        { $about=$data2['about'];
?>
      <img src="dataimg/<?php echo $data2['image']; ?>" width="500" height="600">
  <?php  }}?>
    </div>
      <div class="about_img">
        <p style="color:black; font-weight:bold; background-color:lightgreen; font-size:20px; transform:uppercase;">About Image</p>
         Indian cuisine consists of a wide variety of regional and traditional cuisines native to the Indian subcontinent. Given the range of diversity in soil type, climate, culture, ethnic groups, and occupations, these cuisines vary substantially from each other and use locally available spices, herbs, vegetables, and fruits. Indian food is also heavily influenced by religion, in particular Hinduism, cultural choices and traditions

        <?php
       $con= Mysqli_connect('localhost','id10728709_root','jaysingh','id10728709_userdata');
        $query="SELECT * FROM `aboutimg` ";
        $run = mysqli_query($con,$query);
        if(mysqli_num_rows($run)>0)
        {
        	while($data=mysqli_fetch_assoc($run))
          {
                ?> <img src="dataimg/<?php echo $data['about']; ?>">
                <?php 
           }}?>

      </div>
      <div class="content2" id="content2">

        <?php
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
      		 <?php  echo $data1['about']; ?>	<a href="page2.php?sid=<?php echo $data1['id']; ?>" > read more </a>
      		</figcaption>

      		</figure>

      		</div>
      	<?php }}}?>



      <?php
     $con= Mysqli_connect('localhost','id10728709_root','jaysingh','id10728709_userdata');
      $query="SELECT * FROM `drawing` WHERE about LIKE '%$about%' ";
      $run = mysqli_query($con,$query);
      if(mysqli_num_rows($run)>0)
      {
      	while($data=mysqli_fetch_assoc($run))

      {?>

      	<div class="con_element">
      		<figure>
      	<img src="dataimg/<?php echo $data['image']; ?>" style=" position:relative; width:100%; height:150px; border-radius:0px; left:0; top:-10px; margin:2px; ">
      	<figcaption style=" position:relative;  width:100%; max-height:100px; font-family: 'Oswald', sans-serif; left:0px;">
      	 <?php  echo $data['about']; ?> <a  href="page2.php?sid=<?php echo $data['id']; ?>" style="position:relative;"> read more</a>
      	</figcaption>
      	</figure>
      	</div>
      <?php }}?>


      <?php
     $con= Mysqli_connect('localhost','id10728709_root','jaysingh','id10728709_userdata');
      $query4="SELECT * FROM `drawing` ";
      $run4 = mysqli_query($con,$query4);
      if(mysqli_num_rows($run4)>0)
      {
      	while($data3=mysqli_fetch_assoc($run4))

      {?>

      	<div class="con_element">
      		<figure>
      	<img src="dataimg/<?php echo $data3['image']; ?>" style=" position:relative; width:100%; height:150px; border-radius:0px; left:0; top:-10px; margin:2px; ">
      	<figcaption style=" position:relative;  width:100%; max-height:100px; font-family: 'Oswald', sans-serif; left:0px;">
      	 <?php  echo $data3['about']; ?> <a  href="page2.php?sid=<?php echo $data3['id']; ?>" style="position:relative;"> read more</a>
      	</figcaption>
      	</figure>
      	</div>
      <?php }}?>





      </div>


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
      							<a href="#"><img src="user.png" style="width:80px; height:80px;"</a>
      								<a href="#">Name :jay singh</a>
      									<a href="#">webdeveloper &Designer </a>

      									</div>





  </body>
</html>
