<?php

$limit = 50000;
$y = 100;
$dataPoints = array();
for ($i = 0; $i < $limit; $i++) {
    $y += rand(0, 10) - 5;
    array_push($dataPoints, array("x" => $i, "y" => $y));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/d8f0503c9b.js" crossorigin="anonymous"></script> <!--FOR ICONS-->
    <link rel="stylesheet" href="../../CSS/admin-style.css">
</head>

<body>
    <div class="navigation">
        <div class="banner">
            <img src="../../IMAGES/Icon-2/Asset 9@4x 2.png">
            <img src="../../IMAGES/Icon-2/Asset 10@4x 2.png">
        </div>
        <div class="nav-buttons">
            <a href="#" class="active">
                <i class="fa-solid fa-gauge"></i>DASHBOARD</a>

            <a href="#">
                <i class="fa-solid fa-book-bookmark"></i>TRANSACTIONS</a>

            <a href="#">
                <i class="fa-solid fa-clipboard-user"></i>ACCOUNTS</a>

            <a href="#">
                <i class="fa-brands fa-buffer"></i>OFFFERS</a>

            <a href="#">
                <i class="fa-solid fa-door-closed"></i>ROOMS</a>

            <a href="#">
                <i class="fa-solid fa-inbox"></i>MESSAGES</a>

            <a href="#">
                <i class="fa-solid fa-square-poll-vertical"></i>REPORTS</a>

            <a href="#">
                <i class="fa-solid fa-flag"></i>LOGS</a>
        </div>
    </div>
    <div class="container-1">
        <div class="container-heading">
            <div class="details">
                <p>WELCOME BACK</p>
                <p class="name">Admin</p>
            </div>
            <img src="../../IMAGES/Icon-2/picpic.jpg">
        </div>

        <div class="status-container">
            <div class="heading-1">Status</div>
            <div class="status">
                <div class="status-details">
                    <p class="status-name">Current <br>Booking</p>
                    <p class="status-number">10</p>
                </div>
                <div class="status-details">
                    <p class="status-name">Cancelled <br> Booking</p>
                    <p class="status-number">2</p>
                </div>
                <div class="status-details">
                    <p class="status-name">Re-Booked <br> Reservation</p>
                    <p class="status-number">2</p>
                </div>
                <div class="status-details">
                    <p class="status-name">Pending <br> Reservation</p>
                    <p class="status-number">5</p>
                </div>
                <div class="status-details">
                    <p class="status-name">Available <br> Rooms</p>
                    <p class="status-number">3</p>
                </div>
            </div>
        </div>
        <div class="sales-container">
            <div class="heading-1">Earnings</div>
            <div class="sales">
                <div class="amount">
                    <div class="total-amount">
                        <p class="sub-heading-1">Today</p>
                        <p class="sub-heading-2">₱ 5000</p>
                    </div>
                    <div class="total-amount">
                        <p class="sub-heading-1">Month</p>
                        <p class="sub-heading-2">₱ 50000</p>
                    </div>
                    <div class="total-amount">
                        <p class="sub-heading-1">Year</p>
                        <p class="sub-heading-2">₱ 100000</p>
                    </div>
                </div>
                <div class="graph">
                    <p class="month-name">October 2023</p>
                    <div id="chartContainer"></div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

<script>
    window.onload = function () {

        var data = [{
            type: "line",
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }];

        var options = {
            zoomEnabled: true,
            animationEnabled: true,
            title: {
                text: ""
            },
            axisY: {
                lineThickness: 1
            },
            data: data // random data
        };

        var chart = new CanvasJS.Chart("chartContainer", options);
        var startTime = new Date();
        chart.render();
        var endTime = new Date();

    }
</script>

</html>