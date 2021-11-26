<?php
include_once "DBConfig.php";
session_start();

$name = $_GET['name'];
$city = $_GET['city'];
$state = $_GET['state'];
$contact = $_GET['contact'];
$address = $_GET['address'];

$query = "UPDATE troupes SET troupeName='$name', city='$city', troupeState='$state',
          contactNum='$contact', address ='$address' WHERE troupeId = {$_SESSION['characterId']};";

$result = mysqli_query($dbc, $query);


if($result)
echo "Success";
else
echo "Failed";

?>