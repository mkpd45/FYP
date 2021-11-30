<?php
session_start();
include "DBConfig.php";

$id = $_GET['id'];

$query = "SELECT * FROM performances WHERE performId = '$id'";

$result = mysqli_query($dbc, $query);


 if($result){
while($row = mysqli_fetch_assoc($result)){
    echo "<label class='close-btn fas fa-times' onclick='popout()' title='close'></label>
    <div class='text'>
        Edit performance
    </div>
<div class='edit-form'>
                <div class='data'>
                    <label for='lbl-performance-type' class='lbl-performance-type'><b>Performance Type:</b></label>
                    <select class='performance-type' id='editType'>
                        <option value='{$row['performType']}'>{$row['performType']}</option>
                        <option value='Acrobatic Lion Dance'>Acrobatic Lion Dance</option>
                        <option value='Cai Qing Lion Dance'>Cai Qing Lion Dance</option>
                        <option value='Traditional Lion Dance'>Traditional Lion Dance</option>
                        <option value='24 Festive Drums'>24 Festive Drums</option>
                    </select>
                </div>
                <div class='data' style='margin-bottom:10rem'>
                    <label><b>Description: </b></label>
                    <textarea name='performance-description' class='performance-description' id='editDesc' cols='30' rows='4'>{$row['description']}</textarea>
                </div>
                <div class='data' >
                    <label for='lbl-performance-service' class='lbl-performance-service'><b>Performance Service:</b></label>
                    <select class='performance-service'  id='editService'>
                        <option value='{$row['performService']}'>{$row['performService']}</option>
                        <option value='Lion Dance Performance For House Blessing'>Lion Dance Performance For House Blessing</option>
                        <option value='Lion Dance Performance For Corporate Event'>Lion Dance Performance For Corporate Event</option>
                        <option value='Lion Dance Performance For Wedding Ceremony'>Lion Dance Performance For Wedding Ceremony</option>
                        <option value='Lion Dance Performance For Opening Ceremony'>Lion Dance For Grand Opening Ceremony</option>
                        <option value='Lion Dance Performance For Gala Event'>Lion Dance Performance For Gala Event</option>
                        <option value='Lion Dance Performance For Launch Event'>Lion Dance Performance For Launch Event</option>
                    </select>
                </div>
<div class='data'>
                    <label><b>Price: </b></label>
                    <input type='number' value='{$row['price']}' onkeypress='return restrictAlphabets(event)'  id='editPrice' required>
                </div>
                <div class='btn'>
                    <div class='inner'></div>
                    <button onclick=confirmEdit({$row['performId']}) class='submit'>confirm</button>
                </div>
    </div>";
}

    mysqli_free_result($result);
   
}

else
    echo "Failed";
mysqli_close($dbc);
?>