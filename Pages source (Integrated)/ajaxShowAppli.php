<?php
session_start();
include "DBConfig.php";

$id = $_GET['id'];

$query = "SELECT * FROM troupe_application WHERE troupeappId = '$id'";

$result = mysqli_query($dbc, $query);


 if($result){
     echo "<label class='close-btn fas fa-times' onclick='popout()' title='close'></label>
     <div class='text'>
         Troupe Application
     </div>";
    if ($row = mysqli_fetch_array($result)){
        ?>
            <form action="#">
            <div class="data">
                <label><b>Troupe Name: </b></label>
                <label for="troupe-name"><?php echo "{$row['troupeappName']}"?></label>
            </div>
            <div class="data">
                <label><b>Email: </b></label>
                <label for="troupe-email" class="troupe-email"><?php echo "{$row['troupeappEmail']}"?></label>
            </div>
            <div class="data">
                <label><b>Phone No: </b></label>
                <label for="troupe-phone"><?php echo "{$row['troupeappPhone']}"?></label>
            </div>
            <div class="data">
                <label><b>Address: </b></label>
                <label for="troupe-address"><?php echo "{$row['troupeappAddress']}"?></label>
            </div>
            <div class="data">
                <label><b>Notes: </b></label>
                <label for="troupe-notes"><?php echo "{$row['troupeappMessage']}"?></label>
            </div>
            <!-- supporting document view -->
            <div class="data" style="margin-top:40px">
                <label><b>Support Document: </b></label>
                <a href="https://www.w3schools.com" class="btn1" target="_blank">Open File</a>
            </div>
            </form>
          <?php  }  mysqli_free_result($result); 

}

else
    echo "Failed";
mysqli_close($dbc);
?> 

                          