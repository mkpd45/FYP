<?php

include_once "DBConfig.php";

$change = $_GET['change'];
$reserveId = $_GET['id'];

if($change == "accept")
 $query = "UPDATE reservations SET status='Accepted' WHERE reservationID = $reserveId";
else
 $query = "UPDATE reservations SET status='Canceled' WHERE reservationID = $reserveId";

$result = mysqli_query($dbc, $query);


if($result)
echo "Status changed";
else
echo "Failed";
?>