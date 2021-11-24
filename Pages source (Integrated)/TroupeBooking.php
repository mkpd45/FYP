<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troupe Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/troupebooking.css">
</head>
<body>

<?php include "./Troupe-side.php" ?>

<div class="ajax" id="ajax">
    <div class="right-side">
            <div class="navi">
                <ul>
                    <li onclick="tabs(0)" class="user-booking active">Booking</li>
                    <li onclick="tabs(1)" class="user-history">History</li>
                </ul>
            </div>
        <div class="profile-body">
            <div class="profile-booking tab">
                <ul>
                    <li onclick="tabs(2)" class="all active">All</li>
                    <li onclick="tabs(3)" class="pending">Pending</li>
                    <li onclick="tabs(4)" class="accepted">Accepted</li>
                    <li onclick="tabs(5)" class="canceled">Canceled</li>
                </ul>
            </div>
            <div class="profile-history tab">
                <div class="nav1">
                    <div class="row"><h1>History</h1>
                    <?php
                        include "DBConfig.php";
                        $fetchQ = "SELECT R.reservationID, T.troupeImage, I.firstname, R.performType, R.performService, R.performDate, R.performAddress, R.performDistrict, R.performState
                                   FROM reservations R, troupes T, inviters I
                                   WHERE R.inviterId = I.inviterId AND R.troupeId = T.troupeId AND T.troupeId = {$_SESSION['characterId']};";
                        
                        $allResult = mysqli_query($dbc, $fetchQ);

                        while($allRow = mysqli_fetch_assoc($allResult)){
                    echo "<a href='#'  onclick='loadDoc({$allRow['reservationID']})'>
                    <div class='column'>
                        <div class='grid-item'>
                            <div class='content-1'>
                                <!-- customer image -->
                                <img src='{$allRow['troupeImage']}' width='100px' alt=''>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-2'>
                                <h2>Customer Name</h2><br><br><br>
                                <label for='cust-name'>{$allRow['firstname']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-3'>
                                <h2>Performance Type</h2><br><br><br>
                                <label for='cust-type'>{$allRow['performType']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-4'>
                                <h2>Performance Service</h2><br><br><br>
                                <label for='cust-service'>{$allRow['performService']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-5'>
                                <h2>Booking date</h2><br><br><br>
                                <label for='cust-date'>{$allRow['performDate']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-6'>
                                <h2>Booking Venue</h2><br><br><br>
                                <label for='cust-address'>{$allRow['performAddress']}, {$allRow['performDistrict']}, {$allRow['performState']}.</label>
                            </div>
                        </div>
                    </div>
                </a>";
                        }
                        mysqli_free_result($allResult);
                        ?>
                </div>
            </div>
        </div>
        <div class="profile-sub-body">
                <div class="profile-all tab">
                    <div class="right-side">
                    <div class="nav1">
                        <div class="row"><h1>All</h1>
                    <?php
                        $fetchQ = "SELECT R.reservationID, T.troupeImage, I.firstname, R.performType, R.performService, R.performDate, R.performAddress, R.performDistrict, R.performState
                                   FROM reservations R, troupes T, inviters I
                                   WHERE R.inviterId = I.inviterId AND R.troupeId = T.troupeId AND T.troupeId = {$_SESSION['characterId']};";
                        
                        $allResult = mysqli_query($dbc, $fetchQ);

                        while($allRow = mysqli_fetch_assoc($allResult)){
                    echo "<a href='#'  onclick='loadDoc({$allRow['reservationID']})'>
                    <div class='column'>
                        <div class='grid-item'>
                            <div class='content-1'>
                                <!-- customer image -->
                                <img src='{$allRow['troupeImage']}' width='100px' alt=''>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-2'>
                                <h2>Customer Name</h2><br><br><br>
                                <label for='cust-name'>{$allRow['firstname']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-3'>
                                <h2>Performance Type</h2><br><br><br>
                                <label for='cust-type'>{$allRow['performType']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-4'>
                                <h2>Performance Service</h2><br><br><br>
                                <label for='cust-service'>{$allRow['performService']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-5'>
                                <h2>Booking date</h2><br><br><br>
                                <label for='cust-date'>{$allRow['performDate']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-6'>
                                <h2>Booking Venue</h2><br><br><br>
                                <label for='cust-address'>{$allRow['performAddress']}, {$allRow['performDistrict']}, {$allRow['performState']}.</label>
                            </div>
                        </div>
                    </div>
                </a>";
                        }
                        mysqli_free_result($allResult);
                        ?>
                    
                        </div>
                    </div>
                    </div>
                </div>
                <div class="profile-pending tab">
                    <div class="nav1">
                        <div class="row"><h1>Pending</h1><?php
                        $fetchQ = "SELECT R.reservationID, T.troupeImage, I.firstname, R.performType, R.performService, R.performDate, R.performAddress, R.performDistrict, R.performState
                                   FROM reservations R, troupes T, inviters I
                                   WHERE R.inviterId = I.inviterId AND R.troupeId = T.troupeId AND T.troupeId = {$_SESSION['characterId']} AND R.status = 'Pending';";
                        
                        $allResult = mysqli_query($dbc, $fetchQ);

                        while($allRow = mysqli_fetch_assoc($allResult)){
                    echo "<a href='#' onclick='loadDoc2({$allRow['reservationID']})'>
                    <div class='column'>
                        <div class='grid-item'>
                            <div class='content-1'>
                                <!-- customer image -->
                                <img src='{$allRow['troupeImage']}' width='100px' alt=''>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-2'>
                                <h2>Customer Name</h2><br><br><br>
                                <label for='cust-name'>{$allRow['firstname']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-3'>
                                <h2>Performance Type</h2><br><br><br>
                                <label for='cust-type'>{$allRow['performType']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-4'>
                                <h2>Performance Service</h2><br><br><br>
                                <label for='cust-service'>{$allRow['performService']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-5'>
                                <h2>Booking date</h2><br><br><br>
                                <label for='cust-date'>{$allRow['performDate']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-6'>
                                <h2>Booking Venue</h2><br><br><br>
                                <label for='cust-address'>{$allRow['performAddress']}, {$allRow['performDistrict']}, {$allRow['performState']}.</label>
                            </div>
                        </div>
                    </div>
                </a>";
                        }
                        mysqli_free_result($allResult);
                        ?>
                    
                        </div>
                    </div>
                </div>
                <div class="profile-accepted tab">
                <div class="nav1">
                        <div class="row"><h1>Accepted</h1>
                        <?php
 $fetchQ = "SELECT R.reservationID, T.troupeImage, I.firstname, R.performType, R.performService, R.performDate, R.performAddress, R.performDistrict, R.performState
                                   FROM reservations R, troupes T, inviters I
                                   WHERE R.inviterId = I.inviterId AND R.troupeId = T.troupeId AND T.troupeId = {$_SESSION['characterId']} AND R.status = 'Accepted';";
                        
                        $allResult = mysqli_query($dbc, $fetchQ);

                        while($allRow = mysqli_fetch_assoc($allResult)){
                    echo "<a href='#' onclick='loadDoc({$allRow['reservationID']})'>
                    <div class='column'>
                        <div class='grid-item'>
                            <div class='content-1'>
                                <!-- customer image -->
                                <img src='{$allRow['troupeImage']}' width='100px' alt=''>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-2'>
                                <h2>Customer Name</h2><br><br><br>
                                <label for='cust-name'>{$allRow['firstname']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-3'>
                                <h2>Performance Type</h2><br><br><br>
                                <label for='cust-type'>{$allRow['performType']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-4'>
                                <h2>Performance Service</h2><br><br><br>
                                <label for='cust-service'>{$allRow['performService']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-5'>
                                <h2>Booking date</h2><br><br><br>
                                <label for='cust-date'>{$allRow['performDate']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-6'>
                                <h2>Booking Venue</h2><br><br><br>
                                <label for='cust-address'>{$allRow['performAddress']}, {$allRow['performDistrict']}, {$allRow['performState']}.</label>
                            </div>
                        </div>
                    </div>
                </a>";
                        }
                        mysqli_free_result($allResult);
                        ?>
                        </div>
                    </div>
                </div>
                <div class="profile-canceled tab">
                <div class="nav1">
                        <div class="row"><h1>Canceled</h1>
                        <?php
 $fetchQ = "SELECT R.reservationID, T.troupeImage, I.firstname, R.performType, R.performService, R.performDate, R.performAddress, R.performDistrict, R.performState
                                   FROM reservations R, troupes T, inviters I
                                   WHERE R.inviterId = I.inviterId AND R.troupeId = T.troupeId AND T.troupeId = {$_SESSION['characterId']} AND R.status = 'Canceled';";
                        
                        $allResult = mysqli_query($dbc, $fetchQ);

                        while($allRow = mysqli_fetch_assoc($allResult)){
                    echo "<a href='#' onclick='loadDoc({$allRow['reservationID']})'>
                    <div class='column'>
                        <div class='grid-item'>
                            <div class='content-1'>
                                <!-- customer image -->
                                <img src='{$allRow['troupeImage']}' width='100px' alt=''>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-2'>
                                <h2>Customer Name</h2><br><br><br>
                                <label for='cust-name'>{$allRow['firstname']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-3'>
                                <h2>Performance Type</h2><br><br><br>
                                <label for='cust-type'>{$allRow['performType']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-4'>
                                <h2>Performance Service</h2><br><br><br>
                                <label for='cust-service'>{$allRow['performService']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-5'>
                                <h2>Booking date</h2><br><br><br>
                                <label for='cust-date'>{$allRow['performDate']}</label>
                            </div>
                        </div>
                        <div class='grid-item'>
                            <div class='content-6'>
                                <h2>Booking Venue</h2><br><br><br>
                                <label for='cust-address'>{$allRow['performAddress']}, {$allRow['performDistrict']}, {$allRow['performState']}.</label>
                            </div>
                        </div>
                    </div>
                </a>";
                        }
                        mysqli_free_result($allResult);
                        ?>
                    
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<script src="js/script.js"></script>
<script>
    function loadDoc(id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "TroupeBookingDetail.php?id="+id+"", true);
  xhttp.send();
}

function loadDoc1(id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "TroupeBooking.php?id="+id+"", true);
  xhttp.send();
}

function loadDoc2(id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "PendingPage.php?id="+id+"", true);
  xhttp.send();
}
</script>
</body>
</html>