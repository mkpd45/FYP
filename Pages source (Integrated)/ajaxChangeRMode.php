<?php
session_start();
include_once "DBConfig.php";

$mode = $_GET['mode'];

if($mode == "on")
 $query = "UPDATE troupes SET reserveMode = 'ON' WHERE troupeId = {$_SESSION['characterId']}";
else
 $query = "UPDATE troupes SET reserveMode = 'OFF' WHERE troupeId = {$_SESSION['characterId']}";

$result = mysqli_query($dbc, $query);


if($result)
echo "Mode changed";
else
echo "Failed";
?>