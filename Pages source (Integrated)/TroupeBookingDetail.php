
<head>

</head>
<?php
include_once "DBConfig.php";
$reserveId = $_GET['id'];

$query = "SELECT T.troupeImage, I.firstname, I.homeState, I.district, I.phoneNum, I.email,
          R.performType, R.performService, R.performDate, R.status, R.performTime, R.performAddress, R.performDistrict, R.performState
          FROM reservations R, troupes T, inviters I
          WHERE R.inviterId = I.inviterId AND R.troupeId = T.troupeId AND R.reservationID = '$reserveId';";

$result = mysqli_query($dbc, $query);

while($row = mysqli_fetch_assoc($result))
{
?>
<body>
    <div class="right-side">
        
        <div class="nav2" id="nav2">
            <button class="back-btn" onclick="loadDoc1()" width="200px" height="200px"><i class="fas fa-arrow-circle-left"></i>Back</button>
                <h1>Check Booking Details</h1>
                <hr class="hr2">
                <div class="customer-detail">
                    <h2>Customer Details</h2>
                    <div class="customer-detail-part1">
                        <label for="lbl-cs-name" class="lbl-cs-name"><b>Customer Name:</b></label>
                        <label for="customer-name" class="customer-name"><?php echo $row['firstname']; ?></label>
                    </div>            
                    <br>
                    <div class="customer-detail-part2">
                        <label for="lbl-cs-district" class="lbl-cs-district"><b>District:</b></label>
                        <label for="customer-district" class="customer-district"><?php echo $row['district']; ?></label>
                    </div>
                    <br>
                    <div class="customer-detail-part3">
                        <label for="lbl-cs-state" class="lbl-cs-state"><b>State:</b></label>
                        <label for="customer-state" class="customer-state"><?php echo $row['homeState']; ?></label>
                    </div>
                    <br>
                    <div class="customer-detail-part4">
                        <label for="lbl-cs-phone" class="lbl-cs-phone"><b>Phone No:</b></label>
                        <label for="customer-phone" class="customer-phone"><?php echo $row['phoneNum']; ?></label>
                    </div>
                    <br>
                    <div class="customer-detail-part5">
                        <label for="lbl-cs-email" class="lbl-cs-email"><b>Email:</b></label>
                        <label for="customer-email" class="customer-email"><?php echo $row['email']; ?></label>
                    </div>
                    <br>
                    <hr class="hr3">
                </div>
                <div class="booking-detail">
                    <h2>Booking Details</h2>
                    <div class="booking-detail-part1">
                        <label for="lbl-bk-type" class="lbl-bk-type"><b>Performance Type:</b></label>
                        <label for="booking-type" class="booking-type"><?php echo $row['performType']; ?></label>
                    </div>            
                    <br>
                    <div class="booking-detail-part2">
                        <label for="lbl-bk-service" class="lbl-bk-service"><b>Performance Service:</b></label>
                        <label for="booking-service" class="booking-service"><?php echo $row['performService']; ?></label>
                    </div>
                    <br>
                    <div class="booking-detail-part3">
                        <label for="lbl-bk-date" class="lbl-bk-date"><b>Booking date</b></label>
                        <label for="booking-date" class="booking-date"><?php echo $row['performDate']; ?></label>
                    </div>
                    <br>
                    <div class="booking-detail-part4">
                        <label for="lbl-bk-time" class="lbl-bk-time"><b>Time:</b></label>
                        <label for="booking-time" class="booking-time"><?php echo $row['performTime']; ?></label>
                    </div>
                    <br>
                    <div class="booking-detail-part5">
                        <label for="lbl-bk-district" class="lbl-bk-district"><b>District:</b></label>
                        <label for="booking-district" class="booking-district"><?php echo $row['performDistrict']; ?></label>
                    </div>
                    <br>
                    <div class="booking-detail-part6">
                        <label for="lbl-bk-state" class="lbl-bk-state"><b>State:</b></label>
                        <label for="booking-state" class="booking-state"><?php echo $row['performState']; ?></label>
                    </div>
                    <br>
                    <div class="booking-detail-part7">
                        <label for="lbl-bk-address" class="lbl-bk-address"><b>Address:</b></label>
                        <label for="booking-address" class="booking-address"><?php echo $row['performAddress']; ?></label>
                    </div>
                    <br>
                    <div class="booking-detail-part8">
                        <label for="lbl-bk-price" class="lbl-bk-price"><b>Price:</b></label>
                        <label for="booking-price" class="booking-price">RM 1300.00</label>
                    </div>
                    <br>
                   
                    <?php 
                    if($row["status"] == "Pending"){
                    echo "<button class='btn' onclick=updateReser('reject',$reserveId)>Reject</button>";
                    echo "<button class='btn' onclick=updateReser('accept',$reserveId)>Accept</button>";
                    }
                }
                    mysqli_free_result($result);?>
                </div>
        </div>
    </div>
</body>
