<?php
session_start();

include "DBConfig.php";
$inviter = $_SESSION['characterId'];
$fetchInfo = "SELECT * FROM inviters WHERE inviterId = {$inviter};";
$infoResult = mysqli_query($dbc, $fetchInfo);
while($rowInfo = mysqli_fetch_assoc($infoResult))
{
?>
<div class="right-side">
            <div class="nav">
                <h1>My Account</h1>
                <form action="UserProfile.php" method="post">
                    <div class="profile-edit1">
                        <button class="discard" name="discard_btn"><a href="UserProfile.php">discard</a></button>
                        <button type="submit" class="update" name="update_btn">update info</button>
                    </div>
                    <div class="text1">
                        <p>View and edit your personal info below.</p>  
                    </div>
                    <hr class="hr1">
                    <div class="display-info">
                        <h1>Display Info</h1>
                    </div>

                    <div class="text2">
                        <p>All your personal info shown below.</p>  
                    </div>
                    
                    <div class="display-name">
                        <p>Display Name *</p>
                        <div class="inputBox">
                            <input type="text" value="<?php echo $rowInfo['firstname']."&nbsp;".$rowInfo['lastname'] ?> "readonly>
                        </div>
                    </div>
                    <hr class="hr2">
                    <div class="account">
                        <h1>Account</h1>
                    </div>

                    <div class="text3">
                        <p>Update & Edit your profile information.</p>  
                    </div>

                    <div class="login-email">
                        <label>Login Email:</label>
                        <div class="email">
                            <label for="email"><?php echo $rowInfo['email']; ?></label>
                            <p class="hint">Your Login email can't be changed</p>
                        </div>
                    </div>

                    <div class="account-detail">
                        <label for="fname">First Name</label>
                        <div class="row1">                        
                            <input type="text" name="user-fname" value="<?php echo $rowInfo['firstname']; ?>">
                        </div>

                        <label for="lname">Last Name</label>
                        <div class="row2">                        
                            <input type="text" name="user-lname" value="<?php echo $rowInfo['lastname']; ?>">
                        </div>

                        <label for="state">State</label>
                        <div class="row3">
                            <select name="user-state">
                                <option selected><?php echo $rowInfo['homeState'];?></option>
                                <option value="Johor">Johor</option>
                                <option value="Kedah">Kedah</option>
                                <option value="Kelantan">Kelantan</option>
                                <option value="Malacca">Malacca</option>
                                <option value="Negeri Sembilan">Negeri Sembilan</option>
                                <option value="Pahang">Pahang</option>
                                <option value="Perak">Perak</option>
                                <option value="Perlis">Perlis</option>
                                <option value="Sabah">Sabah</option>
                                <option value="Sarawak">Sarawak</option>
                                <option value="Selangor">Selangor</option>
                                <option value="Terrengganu">Terrengganu</option>
                            </select>
                        </div>

                        <label for="district">Disctrict</label>
                        <div class="row4">                        
                            <select name="user-district">
                                <option selected><?php echo $rowInfo['district'];?></option>
                                <option value="Batu Pahat">Batu Pahat</option>
                                <option value="Johor Bahru">Johor Bahru</option>
                                <option value="Kluang">Kluang</option>
                                <option value="Kota Tinggi">Kota Tinggi</option>
                                <option value="Kulai">Kulai</option>
                                <option value="Ledang">Ledang</option>
                                <option value="Mersing">Mersing</option>
                                <option value="Muar">Muar</option>
                                <option value="Pontian">Pontian</option>
                                <option value="Segamat">Segamat</option>
                            </select>
                        </div>

                        <label for="phoneNumber">Phone Number</label>
                        <div class="row5">                        
                            <input type="text" name="user-phone" value="<?php echo $rowInfo['phoneNum'];?>" >
                        </div>
                        <?php }
                        mysqli_free_result($infoResult); ?>
                    </div>
                </form>
            </div>
          </div>