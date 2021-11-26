<?php
session_start();

include "DBConfig.php";
$dateObject = date_create($_GET['date']);
$date = date_format($dateObject, "Y/m/d");;
$reason = $_GET['reason'];


$query = "INSERT into unavailabledate (dateSet, reason, troupeId) VALUES ('$date','$reason','{$_SESSION['characterId']}');";

$result = mysqli_query($dbc, $query);

    if($result){
        // echo "<tr>
        //         <th>Performance Type</th>
        //         <th>Description</th>
        //         <th>Performance Service</th>
        //         <th>Price</th>
        //         <th></th>
        //         <th>Delete</th>
        //      </tr>";
    
        //      $fetchPermQuery = "SELECT P.performId, P.performType, P.description, P.performService, P.price 
        //                         FROM performances P, troupes T WHERE P.troupeId = T.troupeId
        //                         AND T.troupeId = $troupeId;";

        //      $permResult = mysqli_query($dbc, $fetchPermQuery);

        //      if($permResult){
        //     while($row = mysqli_fetch_assoc($permResult)){
        //         echo "<tr>
        //         <td><input type='text' value='{$row['performType']}'></td>
        //         <td><input type='text' value='{$row['description']}'></td>
        //         <td><input type='text' value='{$row['performService']}'></td>
        //         <td><input type='text' value='{$row['price']}'></td>
        //         <td><button class='btn' onclick=popup({$row['performId']}) >Edit</button></td>
        //         <td><i class='delete-btn fas fa-times-circle' id='{$row['performId']}'></i></td>
        //             </tr>";
        //     }
    
        //         mysqli_free_result($permResult);
        //         mysqli_close($dbc);
        // }
        // else
        //     echo "something wrong with our system";
        echo "Data added";
    }
else{
    echo "something wrong with our system";
    mysqli_close($dbc);
}
?>