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
    .list
    {
        position:relative;
        float:left;
        left:20px;
    }
    .list li
    {
        padding:5px;
    }
        	#menuitem
	{   position:relative;
	    width:100%;
	    height:500px;
	    background-color:lightgrey;
	}
	#menubar
	{   position:relative;
	    width:19.5%;
	    height:450px;
	    background-color:#E8E9ED;
	    border:0px solid black;
	    display:inline-flex;
	}
		#menubar h2
		{
		    text-align:center;
		    position:relative;
		    
		    
		}
		#content2
		{
		    height:800px;
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
    
    

    
      <div class="content2" id="content2">
            <div id="menuitem" >
        <h1 align="center">MENU</h1>
        <div id="menubar">
        <ul class="list"><h2>Breakfast</h2>
            <li>Two Farm Fresh Eggs Any Style</li>
            <li>Continental</li>
            <li>Buttermilk Pancakes</li>
            <li>Three Egg Omelet</li>
            <li>Toasted Bagel with Smoked Salmon</li>
            <li>Briars Breakfast Pizza</li>
            <li>French Toast</li>
            <li>Hot Oatmeal</li>
            <li>Fresh Fruit Plate</li>
        </ul>
        </div>
         <div id="menubar"> <ul class="list"><h2>Lunch</h2>
            <li>Kadai panner</li>
            <li>egg masala</li>
            <li>Nizami Handi</li>
            <li>Special Thali</li>
            <li>Butter chicken Boneless </li>
            <li>Tandoori chiken Masala</li>
            <li>Tandoori roti</li>
            <li>Plain Naan</li>
            <li>Butter roti</li>
            <li>Royal Chicken Biryani</li>
            <li>Mutton Family Pack</li>
            <li>Murgh Toofani Tikka</li>
            <li>Fish Tikka Kabab</li>
            <li>Takeaway Platter</li>
        </ul></div>
          <div id="menubar"><h2>Dinner</h2>
          <ul class="list">
               <li>Special Thali</li>
            <li>Butter chicken Boneless </li>
            <li>Tandoori chiken Masala</li>
            <li>Tandoori roti</li>
            <li>Plain Naan</li>
            <li>Butter roti</li>
          </ul>
          </div>
          
           <div id="menubar"><ul class="list">
              <h2>Dessertsr</h2>
              <li>Double ka Meetha</li>
              <li>Gulab jamun</li>
              <li>Qubani Ka Meetha</li>
              <li>Gajar Ka Halwa</li>
              </ul></div>
            <div id="menubar"><h2>Tea& coffee</h2></div>
        
    </div>
  

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
      $about=' ';
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
      	 <?php  echo $data['about']; ?> <a  href="restaurennt_page2.php?sid=<?php echo $data['id']; ?>" style="position:relative;"> read more</a>
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
      	 <?php  echo $data3['about']; ?> <a  href="restaurennt_page2.php?sid=<?php echo $data3['id']; ?>" style="position:relative;"> read more</a>
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
      							<a href="#"><img src="user.jpg" style="width:80px; height:80px;"</a>
      								<a href="#">Name : jay singh</a>
      									<a href="#">web developer &Designer </a>

      									</div>





  </body>
</html>
