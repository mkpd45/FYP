<?php
include "DBConfig.php";

$type = $_GET['type'];
$service = $_GET['type'];
$description = $_GET['description'];
$price = $_GET['price'];

$query = "INSERT into performances (performType, performService, description, price, troupeId) VALUES ('$type','$service','$description','$price','{$_SESSION['characterId']}')";

$result = mysqli_query($dbc, $query);

if($result){
    $fetchImgQuery = "SELECT I.imageId, I.location FROM images I, troupes T WHERE I.troupeId = T.troupeId
                              AND T.troupeId = 1;";
            $imgResult = mysqli_query($dbc, $fetchImgQuery);
            $countRow = mysqli_affected_rows($dbc);
            while($imgRow = mysqli_fetch_assoc($imgResult)){
                echo "<div class='image' style='background-image: url({$imgRow['location']});'>";
                echo "<i class='fas fa-trash-alt' id='{$imgRow['imageId']}' onclick=deleteImg(this.attributes['id'].value)></i>";
                echo "</div>";
            }

            if($countRow < 6){
                echo "<div class='add-new' onclick=alert('good') >";
                echo "<span class='fas fa-plus' ></span>";
                echo "</div>";
            }
            mysqli_free_result($imgResult);
}
else
    echo "something wrong";
mysqli_close($dbc);
?>