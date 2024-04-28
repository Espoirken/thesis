<?php

@include 'config.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>
   <link rel="stylesheet" href="../../CSS/sign-style.css">

</head>

<body>

   <div class="account-container">
      <div class="sign-form">
         <img src="../../IMAGES/Icon-2/Asset 10@4x.png">
         <form action="login.php" method="post">
            <div class="form">
               <?php
               if (isset($_GET['error'])) { ?>
                  <p class="error"><?php echo $_GET['error']; ?> </p>
               <?php } ?>
               <label for="username">Username: </label>
               <input type="text" id="username" name="username">
               <label for="password">Password: </label>
               <input type="password" id="password" name="password">
               <button>Sign In</button>
            </div>
         </form>
      </div>
   </div>

</body>

</html>