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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="CSS/sign-style.css">
	
</head>
<body>

<div class="account-container">
        <div class="sign-form">
            <img src="IMAGES/Icon-2/Asset 10@4x.png">
            <form action="" method="post">
               <div class="form">
                  <?php
                     if(isset($error)){
                        foreach($error as $error){
                           echo '<span class="error-msg">'.$error.'</span>';
                        };
                     };
                  ?>
                  <label for="username">Username: </label>
                  <input type="text" id="username" name="username" required>
                  <label for="password">Password: </label>
                  <input type="password" id="password" name ="password" required>
                  <button>Sign In</button>
               </div>
            </form>
        </div>
</div>

</body>
</html>