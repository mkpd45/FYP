<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Troupe Listing</title>
<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


<!--custom css file link-->
<link rel="stylesheet" href="../css/admintroupe.css">

</head>

<body>
    
<?php 
    include "./AdminHeader.php";
    include_once "DBConfig.php";

    $dbc = @mysqli_connect("localhost","root","","projectdb");
    
    if(isset($_POST['register_btn'])){
        $name = $_POST['troupe_name'];
        $email = $_POST['troupe_email'];
        $phone = $_POST['troupe_phone'];
        $district = $_POST['troupe_district'];
        $state = $_POST['troupe_state'];
        $password = $_POST['troupe_password'];
        $hash_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO troupes(troupeName, troupeImage, email, contactNum, city, troupeState, password, reserveMode) VALUES ('$name', '../Assets/Images/Web/profile-img.jpg', '$email', '$phone', '$district', '$state', '$hash_password' ,'ON')";
        
        if(mysqli_query($dbc, $query))
        {   
            $charactedId = mysqli_insert_id($dbc);
            $query1 = "INSERT INTO users(userRole, username, password, characterId, nameUser) VALUES ('Troupe', '$email', '$hash_password', '$charactedId', '$name')";
            if(mysqli_query($dbc, $query1))
            echo "<script>alert('Register successful')</script>";
            
        } 
        else
        {
            $error5 = "ERROR: Could not able to execute $query. " . mysqli_error($dbc);
            echo "$error5";
        }
    }
?>

<div class="container">
    <div class="nav1">
        <div class="row"><h1>Lion Dance Listing</h1>
            <input type="text" id="search" class="search" oninput="filterList()" placeholder="Search troupe name">
            <button id="but1" class="btn">Add</button>
            <div class="backdrop">
                <div id="popdiv">
                    <label class="close-btn fas fa-times" id="but2" title="close"></label>
                    <div class="text">
                        Add new Troupes
                    </div>
                        <form action="AdminTroupe.php" method="post">
                        <div class="data">
                            <label>Troupe Name: </label>
                            <input type="text" name="troupe_name" value="" required>
                        </div>
                        <div class="data">
                            <label>Email: </label>
                            <input type="text" name="troupe_email" value="" required>
                        </div>
                        <div class="data">
                            <label>Phone Number: </label>
                            <input type="text" name="troupe_phone" value="" required>
                        </div>
                        <div class="data">
                            <label>District: </label>
                            <input type="text" name="troupe_district" value="" required>
                        </div>
                        <div class="data">
                            <label>State: </label>
                            <input type="text" name="troupe_state" value="" required>
                        </div>
                        <div class="data">
                            <label>Password</label>
                            <input type="password" name="troupe_password" value="" required>
                        </div>
                        <div class="btn">
                            <div class="inner"></div>
                            <button type="submit" name="register_btn" class="submit">register</button>
                        </div>
                        </form>
                </div>
            </div>
            <div class="custom-select" style="width:200px;">
                <select id="state" onchange="filterList()" >
                    <option value="none">Select state:</option>
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
            <div class="custom-select" style="width:200px;">
                <select id="district" onchange="filterList()" disabled>
                    <option value="none">Select district:</option>
                    <option value="Batu Pahat">batu pahat</option>
                    <option value="Johor Bahru">johor bahru</option>
                    <option value="Kluang">kluang</option>
                    <option value="Kota Tinggi">kota tinggi</option>
                    <option value="Kulai">kulai</option>
                    <option value="Ledang">ledang</option>
                    <option value="Mersing">mersing</option>
                    <option value="Muar">muar</option>
                    <option value="Pontian">pontian</option>
                    <option value="Segamat">segamat</option>
                </select>
            </div>
                <div id="list-container">
                        <?php
                            $query = "SELECT * FROM troupes";
                            $result = mysqli_query($dbc, $query); 
                            $num = mysqli_num_rows($result);
                                while ($row = mysqli_fetch_array($result)){
                        ?>
                    <div class="column" id="list">
                    
                        <div class="grid-item">
                            <div class="content-1">
                                <img src="<?php echo "{$row['troupeImage']}"?>" width="100px" alt="">
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="content-2">
                                <h2>Troupe Name</h2><br><br>
                                <label for="troupe-name"><?php echo "{$row['troupeName']}"?></label>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="content-3">
                                <h2>Email</h2><br><br>
                                <label for="troupe-email" class="troupe-email"><?php echo "{$row['email']}"?></label>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="content-4">
                                <h2>Phone No</h2><br><br>
                                <label for="troupe-phone"><?php echo "{$row['contactNum']}"?></label>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="content-5">
                                <h2>District</h2><br><br>
                                <label for="troupe-district"><?php echo "{$row['city']}"?></label>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="content-6">
                                <h2>State</h2><br><br>
                                <label for="troupe-state"><?php echo "{$row['troupeState']}"?></label>
                            </div>
                        </div>
                    </div>
                    
                     <?php  }   ?> 
                
                </div>
            </div>  
        </div>
    </div>
</div>

<script>

    $(document).ready(function() {
    $("#but1").click(function() {
        $(".backdrop").fadeTo(200, 1);
    });
    $("#but2").click(function() {
        $(".backdrop").fadeOut(200);
    });
    });

    function filterList(){
        var tState = document.getElementById("state").value;
        var tDistrict = document.getElementById("district").value;
        var tSearch = document.getElementById("search").value;

        if(tState != "none")
            document.getElementById("district").disabled = false;
        else{
            document.getElementById("district").value = "none";
            document.getElementById("district").disabled = true;
        }
        var xmlhttp=new XMLHttpRequest();

        xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
        document.getElementById("list-container").innerHTML=this.responseText;
        }
        }
        xmlhttp.open("GET","ajaxAdminTroupe.php?state="+tState+"&district="+tDistrict+"&search="+tSearch+"",true);
        xmlhttp.send();
    }
</script>

</body>