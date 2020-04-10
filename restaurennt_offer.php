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
    <style>

td
{
  padding:5px;
}
table
{
    position:relative;
    width:80%;
    left:10%;
    background-color:#CECFCE ;
    
}

		#content2
		{
		    height:1500px;
		    top:-100px;
		    
		}
    </style>
  </head>
  <body>
    <div class="menu">
      <div class="logo">
        foodbar
      </div>
    <ul>
    <li><a href="restaurennt.php">home</a></li>
    <li><a href="restaurennt_booking.php">booking</a></li>
    <li>
      <form action="#content2" method="post">
    <div class="search-box">

 	  <input class="search" type="search"  name="search" placeholder="search here...." >
 	  <a href="" class="submit" > <i class="fa fa-search"></i>  </a>

 </div>
 </form>
  </li>
    <li><a href="restaurennt_menu.php">menu</a></li>
    <li><a href="#about" onclick="about()">About us</a></li>
    </ul>

    </div>
    
    

<div class="content2" id="content2">

 
       <h1  style="opacity:.6; font-size:60px;">Special offers</h1>
  <table>
    <tr>
      <td><img src="offer1.jpg" width="600" height="500"></td>
      <td>
       <h2 style="opacity:.7;">Longstay Special<h2>
      <h4 style=" opacity:.5;">   From 05.01.-18.04.2020<br><br>
         Longstay Package<br><br>
         Be well in Engelberg for 6 or 7 nights
         <br><br>
         enjoy Engelgerg.in it's white beauty, run
         down the white slope through fresh
         powder. enjoy your winter atomsphere.<br>
         <br>
         From CHF 1'049.00 per person
       </h4>
      </td>
    </tr>
    <tr>
      <td>
       <h2 style="opacity:.7;">weekend Special<h2>
      <h4 style=" opacity:.5;">   From 05.01.-18.04.2020<br><br>
         weekend Package<br><br>
        Forget the busy week and enjoy some
        quality time in the mountains.For the
        perfect end of each day we will serve you
        a delicious halfboard including some  drinks
        .<br>
         <br>
         From CHF 619.00 per person
       </h4>
      </td>
      <td><img src="offer2.jpg" width="600" height="500"></td>
    </tr>
    <tr>
      <td><img src="offer3.jpg" width="600" height="500"></td>
      <td>
       <h2 style="opacity:.7;">Longstay Special<h2>
      <h4 style=" opacity:.5;">   From 05.01.-18.04.2020<br><br>
         Longstay Package<br><br>
         Free slope for 3,4 or 5 nights between S
         <br><br>
         enjoy Engelgerg.in it's white beauty, run
         down the white slope through fresh
         powder. enjoy your winter atomsphere.<br>
         <br>
         From CHF 469.00 per person
       </h4>
      </td>
    </tr>
  </table>
  

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
      							<a href="#"><img src="user.jpg" style="width:80px; height:80px;"</a>
      								<a href="#">Name : jay singh</a>
      									<a href="#">webdeveloper &Designer </a>

      									</div>





  </body>
</html>
