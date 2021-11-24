<?php
include_once "DBConfig.php";
$reserveId = $_GET['id'];

$query = "SELECT T.troupeImage, T.troupeName, T.troupeState, T.city, T.contactNum, T.email, I.homeState, I.district, I.phoneNum, I.email, I.firstname,
          R.performType, R.performService, R.performDate, R.status, R.performTime, R.performAddress, R.performDistrict, R.performState
          FROM reservations R, troupes T, inviters I
          WHERE R.inviterId = I.inviterId AND R.troupeId = T.troupeId AND R.reservationID = '$reserveId';";

$result = mysqli_query($dbc, $query);

while($row = mysqli_fetch_assoc($result))
{
?>
<div class="right-side">
    <div class="nav2">
        <button class="back-btn" onclick="loadDoc1()" width="200px" height="200px"><i class="fas fa-arrow-circle-left"></i>Back</button>
        <h1>Check Your Details</h1>
        <hr class="hr2">
        <div class="liondance-detail">
            <h2>Lion Dance Details</h2>
            <div class="liondance-detail-part1">
                <label for="lbl-ld-name" class="lbl-ld-name"><b>Troupe Name:</b></label>
                <label for="liondance-name" class="liondance-name"><?php echo $row['troupeName']; ?></label>
            </div>            
            <br>
            <div class="liondance-detail-part2">
                <label for="lbl-ld-district" class="lbl-ld-district"><b>District:</b></label>
                <label for="liondance-district" class="liondance-district"><?php echo $row['city']; ?></label>
            </div>
            <br>
            <div class="liondance-detail-part3">
                <label for="lbl-ld-state" class="lbl-ld-state"><b>State:</b></label>
                <label for="liondance-state" class="liondance-state"><?php echo $row['troupeState']; ?></label>
            </div>
            <br>
            <div class="liondance-detail-part4">
                <label for="lbl-ld-phone" class="lbl-ld-phone"><b>Phone No:</b></label>
                <label for="liondance-phone" class="liondance-phone"><?php echo $row['contactNum']; ?></label>
            </div>
            <br>
            <div class="liondance-detail-part5">
                <label for="lbl-ld-email" class="lbl-ld-email"><b>Email:</b></label>
                <label for="liondance-email" class="liondance-email"><?php echo $row['email']; ?></label>
            </div>
            <br>           
            <hr class="hr3">
        </div>
        <div class="customer-detail">
            <h2>Customer Details</h2>
            <div class="customer-detail-part1">
                <label for="lbl-cs-name" class="lbl-cs-name"><b>customer Name:</b></label>
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
                <label for="lbl-bk-status" class="lbl-bk-status"><b>Status:</b></label>
                <label for="booking-status" class="booking-status"><?php echo $row['status']; ?></label>
            </div>            
            <br>
            <div class="booking-detail-part2">
                <label for="lbl-bk-date" class="lbl-bk-date"><b>Date:</b></label>
                <label for="booking-date" class="booking-date"><?php echo $row['performDate']; ?></label>
            </div>
            <br>
            <div class="booking-detail-part3">
                <label for="lbl-bk-time" class="lbl-bk-time"><b>Time:</b></label>
                <label for="booking-time" class="booking-time"><?php echo $row['performTime']; ?></label>
            </div>
            <br>
            <div class="booking-detail-part4">
                <label for="lbl-bk-location" class="lbl-bk-location"><b>Location:</b></label>
                <label for="booking-location" class="booking-location"><?php echo $row['performAddress']; ?></label>
            </div>
            <br>
            <div class="booking-detail-part5">
                <label for="lbl-bk-district" class="lbl-bk-district"><b>District:</b></label>
                <label for="booking-district" class="booking-district"><?php echo $row['performDistrict']; ?></label>
            </div>
            <br>
        <?php }
                    mysqli_free_result($result);?>
        </div>
    </div>
</div>