
<?php
if(isset($_POST["upload"]))
{
  
$about=$_POST['about'];
$image = $_FILES['file']['name'];
$tempimage = $_FILES['file']['tmp_name'];
move_uploaded_file($tempimage,"dataimg/".$image);
 $con= Mysqli_connect('localhost','id10728709_root','jaysingh','id10728709_userdata');
$query = "INSERT INTO `drawing` (`image`,`about`) VALUES ('$image','$about')";
$run = mysqli_query($con,$query);
if($run==true)
{?>
  <script> alert("successesfully submited:"); </script>
  <?php

 }
else {
         ?>
  <script> alert("successesfully not submited:"); </script>
  <?php


}
}
?>


<html>
</head>
<title>
  upload file
</title>
</head>
<body bgcolor="lightgrey">
  <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" placeholder="choose your file">
    <input type="text" name="about" placeholder="enter information">
    <input type="submit" name="upload" value="upload">
  </form>

</body>
</html>
