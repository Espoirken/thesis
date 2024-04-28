<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container" style="background-image:url(css/qq.png)">

   <div class="content">
      <h3>Hi, <span>user</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p style="color: white;">You are successfully logged in!</p>

      <a href="logout.php" class="btn">logout</a>
	  <a href="../booking/index.php" class="btn">Explore the website</a>
   </div>

</div>

</body>
</html>