<?php
session_start();

include "DBConfig.php";

$type = $_GET['type'];
$service = $_GET['service'];
$description = $_GET['description'];
$price = $_GET['price'];
$troupeId = $_SESSION['characterId'];

$query = "INSERT into performances (performType, performService, description, price, troupeId) VALUES ('$type','$service','$description','$price','$troupeId')";

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
                                AND T.troupeId = $troupeId;";

             $permResult = mysqli_query($dbc, $fetchPermQuery);

             if($permResult){
            while($row = mysqli_fetch_assoc($permResult)){
                echo "<tr>
                <td><input type='text' value='{$row['performType']}'></td>
                <td><input type='text' value='{$row['description']}'></td>
                <td><input type='text' value='{$row['performService']}'></td>
                <td><input type='text' value='{$row['price']}'></td>
                <td><button class='btn'>Edit</button></td>
                <td><i class='delete-btn fas fa-times-circle' id='{$row['performId']}'></i></td>
                    </tr>";
            }
    
                mysqli_free_result($permResult);
                mysqli_close($dbc);
        }
        else
            echo "something wrong with our system";
    }
else{
    echo "something wrong with our system";
    mysqli_close($dbc);
}
?>