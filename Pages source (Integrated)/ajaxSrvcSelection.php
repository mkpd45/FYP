<?php
include "DBConfig.php";

$type = $_GET['type'];

$fetchServices = "SELECT P.performService, P.price FROM performances P, troupes T 
                  WHERE T.troupeId = P.troupeId AND P.performType = '$type' AND P.troupeId = {$_GET['id']};";

$serviceResult = mysqli_query($dbc, $fetchServices);

echo "<option value='none'>Select Performance Service</option>";

        while($serviceRow = mysqli_fetch_assoc($serviceResult)){
             echo "<option value='{$serviceRow['price']}' >{$serviceRow['performService']}</option>";
        }
           
    mysqli_free_result($serviceResult);
                    
?>