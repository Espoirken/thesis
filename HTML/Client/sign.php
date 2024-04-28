<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/index.css">
</head>

<body>
    <div class="form">
        <div class="title-container">
            <img src="../../IMAGES/Icon-2/Asset 10@4x 2.png">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua. Sit amet nisl purus in mollis nunc sed.</p>
        </div>
        <div class="form-container">
            <p class="form-title">FIND RESERVATION</p>
            <div class="input-form">
                <label for="booking-ref">Booking Ref No.</label>
                <input type="text" id="booking-ref" value="<?php echo(rand(10,1000000000)); ?>">
            </div>
            <div class="buttons">
                <button class="btn-cancel" onclick="window.location.href='index.html'">CANCEL</button>
                <button class="btn-find">FIND RESERVATION</button>
            </div>
            <p class="click-here">Don't have any reservation yet? <a href="#">click here</a></p>
        </div>
    </div>
</body>

</html>