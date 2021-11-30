<?php
session_start();
include "DBConfig.php";

$id = $_GET['id'];

$query = "DELETE FROM performances WHERE performId = '$id'";

$result = mysqli_query($dbc, $query);

if($result){
    echo "<tr>
    <th>Performance Type</th>
    <th>Description</th>
    <th>Performance Service</th>
    <th>Price</th>
    <th></th>
    <th>Delete</th>
 </tr>";

 $fetchPermQuery = "SELECT P.performId, P.performType, P.description, P.performService, P.price 
                    FROM performances P, troupes T WHERE P.troupeId = T.troupeId
                    AND T.troupeId = {$_SESSION['characterId']};";

 $permResult = mysqli_query($dbc, $fetchPermQuery);

 if($permResult){
while($row = mysqli_fetch_assoc($permResult)){
    echo "<tr>
    <td><input type='text' value='{$row['performType']}' onkeypress='return false'></td>
    <td><input type='text' value='{$row['description']}'  onkeypress='return false'></td>
    <td><input type='text' value='{$row['performService']}'  onkeypress='return false'></td>
    <td><input type='text' value='{$row['price']}'  onkeypress='return false'></td>
    <td><button class='btn' onclick=popup({$row['performId']})>Edit</button></td>
    <td><i class='delete-btn fas fa-times-circle' id='{$row['performId']}'></i></td>
        </tr>";
}

    mysqli_free_result($permResult);
   
}
}
else
    echo "something wrong";
mysqli_close($dbc);
?>