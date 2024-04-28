<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container" style="background-image: url(../img/yellow.jpg)">

   <div class="content">
      <h3>Hi, <span>admin</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['admin_name']  ?></span></h1>
      <p style="color: white;">You are successfully logged in as admin!</p>
      <a href="logout.php" class="btn">logout</a>
	  <a href="../template1.html" class="btn">Explore the website</a>
   </div>

</div>

</body>
</html>