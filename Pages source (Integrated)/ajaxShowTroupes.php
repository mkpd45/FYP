<?php

$tState = $_GET['state'];
$tCity = $_GET['city'];
$tSearch = $_GET['search'];
$fetchTQuery = "";

include "DBconfig.php";

 if($tState == "All" && $tSearch != "")                             //If the user filter the list with only search function.
    $fetchTQuery = "SELECT * From Troupes WHERE troupeName LIKE '%{$tSearch}%';";
else if($tState != "All" && $tSearch == "" && $tCity == "All")      //If the user filter the list with only troupe state.
    $fetchTQuery = "SELECT * From Troupes WHERE troupeState = '{$tState}';";
else if($tState != "All" && $tSearch != "" && $tCity == "All")      //If the user filter the list with troupe state and search function.
    $fetchTQuery = "SELECT * From Troupes WHERE troupeState = '{$tState}' AND troupeName LIKE '%{$tSearch}%';";
else if($tState != "All" && $tCity != "All")                        //If the user filter the list with troupe state, and city.
    $fetchTQuery = "SELECT * From Troupes WHERE troupeState = '{$tState}' AND city = '{$tCity}';";
else
    $fetchTQuery = "SELECT * From Troupes;";                        //No filter applied

    try{
        $result = mysqli_query($dbc, $fetchTQuery);
        

        while($row = mysqli_fetch_assoc($result)){
            echo "<div class='box'>";
        echo "<div class='image'>";
            echo "<a href='troupeDetails.php?id={$row['troupeId']}'><img src='{$row['troupeImage']}' alt=''></a>";
        echo "</div>";
        echo "<div class='content'>";
            echo "<div class='icons'>";
                echo "<a href='#'><i class='fas fa-map-marker-alt'></i>{$row['city']}, {$row['troupeState']}</a>";
                echo "<a href='#'><i class='fas fa-user'></i> {$row['troupeName']}</a>";
            echo "</div>";
            echo "<h3>Introduction</h3>";
            echo "<p>{$row['description']}</p>";
            echo "<a href='#' class='btn'>know more</a>";
        echo "</div>";
    echo "</div>";
        }
    }
    catch(Exception $e){
        echo $e;
    }

    mysqli_free_result($result); //Free the associated from memory
    mysqli_close($dbc);

?>