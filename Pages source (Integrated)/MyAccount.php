<?php
include "DBConfig.php";
$inviter = $_SESSION['userId'];
$fetchInfo = "SELECT * FROM inviters WHERE inviterId = {$inviter};";
$infoResult = mysqli_query($dbc, $fetchInfo);
while($rowInfo = mysqli_fetch_assoc($infoResult))
{
?>
<div class="right-side">
            <div class="nav">
                <h1>My Account</h1>
                <div class="profile-edit1">
                    <button class="discard">discard</button>
                    <button class="update">update info</button>
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
                        <input type="text">
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
                        <input type="text" value="<?php echo $rowInfo['firstname']; ?>">
                    </div>

                    <label for="lname">Last Name</label>
                    <div class="row2">                        
                        <input type="text" value="<?php echo $rowInfo['lastname']; ?>">
                    </div>

                    <label for="state">State</label>
                    <div class="row3">
                        <select>
                            <option selected><?php echo $rowInfo['homeState'];?> (Now)</option>
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

                    <label for="city">City</label>
                    <div class="row4">                        
                        <select>
                                <option selected><?php echo $rowInfo['city'];?> (Now)</option>
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

                    <label for="phoneNumber">Phone Number</label>
                    <div class="row5">                        
                        <input type="text" value="<?php echo $rowInfo['phoneNum'];?>">
                    </div>
                    <?php }
                    mysqli_free_result($infoResult); ?>
                </div>
            </div>
          </div>
        </div>   