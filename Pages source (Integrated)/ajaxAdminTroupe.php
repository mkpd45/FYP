<?php

$tState = $_GET['state'];
$tDistrict = $_GET['district'];
$tSearch = $_GET['search'];
$fetchTQuery = "";

include "DBconfig.php";

 if($tState == "none" && $tSearch != "")                             //If the user filter the list with only search function.
    $fetchTQuery = "SELECT * From Troupes WHERE troupeName LIKE '%{$tSearch}%';";
else if($tState != "none" && $tSearch == "" && $tDistrict == "none")      //If the user filter the list with only troupe state.
    $fetchTQuery = "SELECT * From Troupes WHERE troupeState = '{$tState}';";
else if($tState != "none" && $tSearch != "" && $tDistrict == "none")      //If the user filter the list with troupe state and search function.
    $fetchTQuery = "SELECT * From Troupes WHERE troupeState = '{$tState}' AND troupeName LIKE '%{$tSearch}%';";
else if($tState != "none" && $tSearch != "" && $tDistrict != "none")      //If the user filter the list with troupe state, city and search function.
    $fetchTQuery = "SELECT * From Troupes WHERE troupeState = '{$tState}'AND city = '{$tDistrict}' AND troupeName LIKE '%{$tSearch}%';";
else if($tState != "none" && $tDistrict != "none")                        //If the user filter the list with troupe state, and city.
    $fetchTQuery = "SELECT * From Troupes WHERE troupeState = '{$tState}' AND city = '{$tDistrict}';";
else
    $fetchTQuery = "SELECT * From Troupes;";                        //No filter applied

    try{
        $result = mysqli_query($dbc, $fetchTQuery); 
        

        while($row = mysqli_fetch_assoc($result)){
        echo "<div class='column' id='list'>
        <div class='grid-item'>
            <div class='content-1'>
                <img src='{$row['troupeImage']}' width='100px' alt=''>
            </div>
        </div>
        <div class='grid-item'>
            <div class='content-2'>
                <h2>Troupe Name</h2><br><br>
                <label for='troupe-name'>{$row['troupeName']}</label>
            </div>
        </div>
        <div class='grid-item'>
            <div class='content-3'>
                <h2>Email</h2><br><br>
                <label for='troupe-email' class='troupe-email'>{$row['email']}</label>
            </div>
        </div>
        <div class='grid-item'>
            <div class='content-4'>
                <h2>Phone No</h2><br><br>
                <label for='troupe-phone'>{$row['contactNum']}</label>
            </div>
        </div>
        <div class='grid-item'>
            <div class='content-5'>
                <h2>District</h2><br><br>
                <label for='troupe-district'>{$row['city']}</label>
            </div>
        </div>
        <div class='grid-item'>
            <div class='content-6'>
                <h2>State</h2><br><br>
                <label for='troupe-state'>{$row['troupeState']}</label>
            </div>
        </div>
        </div>";
        }
    }
    catch(Exception $e){
        echo $e;
    }

    mysqli_free_result($result); //Free the associated from memory
    mysqli_close($dbc);

?>