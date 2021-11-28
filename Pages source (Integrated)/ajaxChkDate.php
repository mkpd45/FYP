<?php
include_once "DBConfig.php";

$id = $_GET['id'];
$date = $_GET['date'];
$q = "SELECT * FROM unavailabledate WHERE troupeId = $id;   ";
$reason = "";

$result = mysqli_query($dbc, $q);

while($row = mysqli_fetch_assoc($result)){
    if($row['dateSet'] == $date){
        $reason = $row['reason'];
        break;
    }
}
if($reason == "")
    echo "Available";
else
    echo $reason;
?>