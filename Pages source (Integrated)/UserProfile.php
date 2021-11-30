<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>User Profile</title>

<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!--custom css file link-->
<link rel="stylesheet" href="../css/UP.css">

</head>
<body>
<?php 

session_start();

if(!empty($_SESSION['userRole'])){
    if($_SESSION['userRole'] == "Troupe")
    header("Location: TroupeProfile.php");
    else
        include "./userHeader.php";
}
else{
    header("Location: Home.php");
    }
?>

<?php

$inviter = $_SESSION['characterId'];
if(isset($_POST['update_btn'])){
    $user_fname = $_POST['user-fname'];
    $user_lname = $_POST['user-lname'];
    $user_state = $_POST['user-state'];
    $user_district = $_POST['user-district'];
    $user_phone = $_POST['user-phone'];


    $query = "UPDATE inviters SET firstname='$user_fname', lastname='$user_lname', homeState='$user_state', district='$user_district', phoneNum='$user_phone' WHERE inviterId='$inviter';";

    if(mysqli_query($dbc, $query))
    {
        echo "<script>window.location.href = 'UserProfile.php'</script>";
    } 
    else
    {
        $error5 = "ERROR: Could not able to execute $query. " . mysqli_error($dbc);
        echo "$error5";
    }
}

$fetchInfo = "SELECT * FROM inviters WHERE inviterId = {$inviter};";
$infoResult = mysqli_query($dbc, $fetchInfo);
while($rowInfo = mysqli_fetch_assoc($infoResult)){
?>
<div class="container">
    <div class="profile-header">
        <div class="profile-img" id="photo">
            <img src="<?php echo $rowInfo['profileImage']; ?>" width="200" alt="">
            <!-- <input type="file" id="file">
            <label for="file" id="uploadBtn">Choose Photo</label> -->
        </div>
        <div class="profile-nav-info">
            <h3 class="user-name"><?php echo $rowInfo['firstname']."&nbsp;".$rowInfo['lastname'] ?></h3>
            <div class="address">
                <p class="city"><?php echo $rowInfo['district'] ?></p>
                <span class="state"><?php echo $rowInfo['homeState'] ?></span>
            </div>
        </div>
    </div>
    <div class="main-bd">
        <div class="left-side">
            <div class="profile-side">
                <h1>Quick Link</h1>
                <a href="#" onclick="loadDoc()"> <i class="fas fa-arrow-right"></i> my account </a>
                <a href="#" onclick="loadDoc1()"> <i class="fas fa-arrow-right"></i> my booking </a>
            </div>
        </div>
        <div class="halo" id="kuku">
        <div class="right-side">
            <div class="nav">
                <h1>My Account</h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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
        </div>        
    </div>
</div>
<?php include "./footer.php" ?>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("kuku").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "MyAccount.php", true);
  xhttp.send();
}

function loadDoc1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("kuku").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "MyBooking.php", true);
  xhttp.send();
}

function loadDoc2(id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("kuku").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "BookingDetail.php?id="+id+"", true);
  xhttp.send();
}

</script>

<script src="../js/script.js"></script>
</body>