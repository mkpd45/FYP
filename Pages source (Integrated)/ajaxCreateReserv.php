<?php
include "DBConfig.php";

$troupeId = $_POST['troupeId'];
$inviterId = $_POST['inviterId'];
$performDate = $_POST['performDate'];
$performTime = $_POST['performTime'];
$performState = $_POST['performState'];
$performDistrict = $_POST['performDistrict'];
$performAddress = $_POST['performAddress'];
 
$date = date('Y-m-d');
$addReserve = "INSERT INTO reservations (performDate, performTime, performState, performDistrict, performAddress, status, dateCreated, inviterId, troupeId) 
               VALUES ('$performDate','$performTime','$performState','$performDistrict','$performAddress','Pending','$date','$inviterId','$troupeId')";
    
$result = mysqli_query($dbc, $addReserve) or die("Fail to create new reservation");

if($result){

    $newNotify = "INSERT INTO notifications (receiverId, title, body, dateSent, theStatus, purpose) VALUES ('$troupeId', 'New Reservation', 'Your troupe have a new performance invitation from a party that need you.', '$date', 'UNREAD', 'Reserve')";

    mysqli_query($dbc, $newNotify) or die("Fail to send notification");

    echo "Success";
}
else
    echo "Request failed, we apologize for causing inconvenience to you, please try it later."
?>