<?php

$limit = 50000;
$y = 100;
$dataPoints = array();
for ($i = 0; $i < $limit; $i++) {
    $y += rand(0, 10) - 5;
    array_push($dataPoints, array("x" => $i, "y" => $y));
}

$page = 'Dashboard';
include 'header.php';
include('navigation.php');
?>

<div class="container-1">
    <div class="container-heading mt-3">
        <div class="details lh-1 mb-2">
            <p class="mb-1">WELCOME BACK</p>
            <p>Admin</p>
        </div>
        <img src="../../IMAGES/Icon-2/picpic.jpg">
    </div>

    <div class="status-container">
        <div class="heading-1">Status</div>
        <div class="status">
            <div class="status-details pb-2">
                <p class="status-name mb-0">Current <br>Booking</p>
                <p class="status-number lh-1 mt-0">10</p>
            </div>
            <div class="status-details">
                <p class="status-name mb-0">Cancelled <br> Booking</p>
                <p class="status-number lh-1 mt-0">2</p>
            </div>
            <div class="status-details">
                <p class="status-name mb-0">Re-Booked <br> Reservation</p>
                <p class="status-number lh-1 mt-0">2</p>
            </div>
            <div class="status-details">
                <p class="status-name mb-0">Pending <br> Reservation</p>
                <p class="status-number lh-1 mt-0">5</p>
            </div>
            <div class="status-details">
                <p class="status-name mb-0">Available <br> Rooms</p>
                <p class="status-number lh-1 mt-0">3</p>
            </div>
        </div>
    </div>
    <div class="sales-container">
        <div class="heading-1">Earnings</div>
        <div class="sales">
            <div class="amount">
                <div class="total-amount">
                    <p class="sub-heading-1 mb-0">Today</p>
                    <p class="sub-heading-2">₱ 5000</p>
                </div>
                <div class="total-amount">
                    <p class="sub-heading-1 mb-0">Month</p>
                    <p class="sub-heading-2">₱ 50000</p>
                </div>
                <div class="total-amount">
                    <p class="sub-heading-1 mb-0">Year</p>
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

<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

<script>
    window.onload = function() {

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
<?php include 'footer.php'; ?>