<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Book Lion Dance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <link rel="stylesheet" type="text/css" href="font/flaticon.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/RB.css" />

  </head>
  <body>
  <?php 
session_start();

if(!empty($_SESSION['userRole']))
include "./userHeader.php";
else
include "./header.php";
include "DBConfig.php";
?>

<?php
$fetchTInfo = "SELECT * FROM troupes WHERE troupeId = {$_GET['id']};";
$infoResult = mysqli_query($dbc, $fetchTInfo);
while($rowInfo = mysqli_fetch_assoc($infoResult))
{
?>
    <div class="container">
      <div class="book">
        <div class="description">
          <h1><strong>Book</strong> a lion dance show</h1>
            <div class="liondance-detail">
                <h1>Lion Dance Details</h1>
                <div class="liondance-detail-part1">
                    <label for="lbl-ld-name" class="lbl-ld-name"><b>Troupe Name:</b></label>
                    <label for="liondance-name" class="liondance-name"><?php echo $rowInfo['troupeName']; ?></label>
                </div>    
                    <br>
                <div class="liondance-detail-part2">
                    <label for="lbl-ld-district" class="lbl-ld-district"><b>District:</b></label>
                    <label for="liondance-district" class="liondance-district"><?php echo $rowInfo['city']; ?></label>
                </div>
                <br>
                <div class="liondance-detail-part3">
                    <label for="lbl-ld-state" class="lbl-ld-state"><b>State:</b></label>
                    <label for="liondance-state" class="liondance-state"><?php echo $rowInfo['troupeState']; ?></label>
                </div>
                <br>
                <div class="liondance-detail-part4">
                    <label for="lbl-ld-phone" class="lbl-ld-phone"><b>Phone No:</b></label>
                    <label for="liondance-phone" class="liondance-phone"><?php echo $rowInfo['contactNum']; ?></label>
                </div>
                <br>
                <div class="liondance-detail-part5">
                    <label for="lbl-ld-email" class="lbl-ld-email"><b>Email:</b></label>
                    <label for="liondance-email" class="liondance-email"><?php echo $rowInfo['email']; ?></label>
                </div>
            </div>
          <div class="quote">
            <p>
              Note: This is show the selected lion dance troupe information and customer information to clarify the overall reservation status.
            </p>
          </div> <?php }
          mysqli_free_result($infoResult); ?>

          <?php
          $fetchInvtInfo = "SELECT * FROM inviters WHERE inviterId = {$_SESSION['userId']};";
          $result = mysqli_query($dbc, $fetchInvtInfo);
          while($row = mysqli_fetch_assoc($result))
          { ?>
          <div class="customer-detail">
            <h1>Customer Details</h1>
            <div class="customer-detail-part1">
                <label for="lbl-cs-name" class="lbl-cs-name"><b>customer Name:</b></label>
                <label for="customer-name" class="customer-name"><?php echo $row['lastname']." ".$row['firstname']; ?></label>
            </div>            
            <br>
            <div class="customer-detail-part2">
                <label for="lbl-cs-district" class="lbl-cs-district"><b>District:</b></label>
                <label for="customer-district" class="customer-district"><?php echo $row['city']; ?></label>
            </div>
            <br>
            <div class="customer-detail-part3">
                <label for="lbl-cs-state" class="lbl-cs-state"><b>State:</b></label>
                <label for="customer-state" class="customer-state"><?php echo $row['homeState']; ?></label>
            </div>
            <br>
            <div class="customer-detail-part4">
                <label for="lbl-cs-phone" class="lbl-cs-phone"><b>Phone No:</b></label>
                <label for="customer-phone" class="customer-phone"><?php echo $row['phoneNum']; ?></label>
            </div>
            <br>
            <div class="customer-detail-part5">
                <label for="lbl-cs-email" class="lbl-cs-email"><b>Email:</b></label>
                <label for="customer-email" class="customer-email"><?php echo $row['email']; ?></label>
            </div>
        </div>
        <?php }
        mysqli_free_result($result);
        mysqli_close($dbc);
        ?>
        </div>
        <div class="form">
          <form>
            <div class="inpbox full">
              <select class="performance-type">
                    <option value="none">Select Performance Type</option>
                    <option>Acrobatic Lion Dance</option>
                    <option>Cai Qing Lion Dance</option>
                    <option>Traditional Lion Dance</option>
                    <option>24 Festive Drums</option>
               </select>
            </div>
            <div class="inpbox full">
                <select class="performance-service">
                    <option value="none">Select Performance Service</option>
                    <option>Lion Dance Performance For House Blessing</option>
                    <option>Lion Dance Performance For Corporate Event</option>
                    <option>Lion Dance Performance For Wedding Ceremony</option>
                    <option>Lion Dance For Grand Opening Ceremony</option>
                    <option>Lion Dance Performance For Gala Event</option>
                    <option>Lion Dance Performance For Launch Event</option>
                </select>
            </div>
            <div class="inpbox">
              <input type="date" placeholder="Date">          
            </div>
            <div class="inpbox">
                <select class="Time">
                        <option value="none">Select a time</option>
                        <option value="Morning">Morning (9:00AM - 11:00AM)</option>
                        <option value="Afternoon">Afternoon (12:00PM - 2:00PM)</option>
                        <option value="Everning">Everning (3:00PM - 5:00PM)</option>
                        <option value="Night">Night (7:00PM - 9:00PM)</option>
                </select>
            </div>
            <div class="inpbox">
                <select class="district">
                        <option value="none">Select district</option>
                        <option value="segamat">Segamat</option>
                        <option value="kedah">Kedah</option>
                        <option value="kelantan">Kelantan</option>
                        <option value="malacca">Malacca</option>
                        <option value="negerisembilan">Negeri Sembilan</option>
                        <option value="pahang">Pahang</option>
                        <option value="perak">Perak</option>
                        <option value="perlis">Perlis</option>
                        <option value="sabah">Sabah</option>
                        <option value="sarawak">Sarawak</option>
                        <option value="selangor">Selangor</option>
                        <option value="terrengganu">Terrengganu</option>
                    </select>
            </div>
            <div class="inpbox">
                <select class="state">
                    <option value="none">Select state</option>
                    <option value="johor">Johor</option>
                    <option value="kedah">Kedah</option>
                    <option value="kelantan">Kelantan</option>
                    <option value="malacca">Malacca</option>
                    <option value="negerisembilan">Negeri Sembilan</option>
                    <option value="pahang">Pahang</option>
                    <option value="perak">Perak</option>
                    <option value="perlis">Perlis</option>
                    <option value="sabah">Sabah</option>
                    <option value="sarawak">Sarawak</option>
                    <option value="selangor">Selangor</option>
                    <option value="terrengganu">Terrengganu</option>
                </select>
            </div>
                <textarea name="address" class="address" cols="40" rows="4" placeholder="Address (be specific*)"></textarea>
            <div class="inpbox full">
              <div class="inrbox">
                <span>Price:</span>
                <h2>RM 130000</h2>
              </div>
            </div>
            <button class="subt">Submit</button>
            <button class="rst">Reset</button>
          </form>
        </div>
      </div>
    </div>
    <?php include "./footer.php" ?>
  </body>
</html>