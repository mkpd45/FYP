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

    $dbc = @mysqli_connect("localhost","root","","projectdb");
    
    if(isset($_POST['register_btn'])){
        $name = $_POST['troupe_name'];
        $email = $_POST['troupe_email'];
        $phone = $_POST['troupe_phone'];
        $district = $_POST['troupe_district'];
        $state = $_POST['troupe_state'];
        $password = $_POST['troupe_password'];
        $hash_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO troupes(troupeName, troupeImage, email, contactNum, city, troupeState, password) VALUES ('$name', '../Assets/Images/Web/profile-img.jpg', '$email', '$phone', '$district', '$state', '$hash_password')";
        $query1 = "INSERT INTO users(userRole, username, password) VALUES ('Troupe', '$email', '$hash_password')";
        if(mysqli_query($dbc, $query))
        {
            mysqli_query($dbc, $query1);
        // header("Location:AdminTroupe.php");
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
            <input type="text" name="search" class="search" placeholder="Search troupe name">
            <button id="but1" class="btn">Add</button>
            <div class="backdrop">
            <div id="popdiv">
                <label class="close-btn fas fa-times" id="but2" title="close"></label>
                <div class="text">
                    Add new Troupes
                </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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
            <!-- <div class="center">
                <input type="checkbox" id="show">
                <label for="show" class="show-btn">add</label>
                <div class="container1">
                    <label for="show" class="close-btn fas fa-times" title="close"></label>
                    <div class="text">
                    Add new lion dance
                    </div>
                    <form action="#">
                    <div class="data">
                        <label>Troupe Name</label>
                        <input type="text" required>
                    </div>
                    <div class="data">
                        <label>Email</label>
                        <input type="text" required>
                    </div>
                    <div class="data">
                        <label>Password</label>
                        <input type="password" required>
                    </div>
                    <div class="btn">
                        <div class="inner"></div>
                        <button type="submit" class="submit">register</button>
                    </div>
                    </form>
                </div>
            </div> -->
            <div class="custom-select" style="width:200px;">
                <select>
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
                <select>
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
            <?php
                $query = "SELECT * FROM troupes";
                $result = mysqli_query($dbc, $query); 
                $num = mysqli_num_rows($result);
                while ($row = mysqli_fetch_array($result)){
            ?>
                    <div class="column">
                    
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
                  
               <!--     <a href="#"  onclick="loadDoc2()">
                            <div class="column">
                                <div class="grid-item">
                                    <div class="content-1">
                                        <img src="../Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="content-2">
                                        <h2>Troupe Name</h2><br><br>
                                        <label for="troupe-name">LKL Lion Dance Troupe</label>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="content-3">
                                        <h2>Email</h2><br><br>
                                        <label for="troupe-email" class="troupe-email">LKLliondance888@gamil.com</label>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="content-4">
                                        <h2>Phone No</h2><br><br>
                                        <label for="troupe-phone">012-3456789</label>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="content-5">
                                        <h2>District</h2><br><br>
                                        <label for="troupe-district">Segamat</label>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="content-6">
                                        <h2>State</h2><br><br>
                                        <label for="troupe-state">Johor</label>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#"  onclick="loadDoc2()">
                            <div class="column">
                                <div class="grid-item">
                                    <div class="content-1">
                                        <img src="../Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="content-2">
                                        <h2>Troupe Name</h2><br><br>
                                        <label for="troupe-name">LKL Lion Dance Troupe</label>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="content-3">
                                        <h2>Email</h2><br><br>
                                        <label for="troupe-email" class="troupe-email">LKLliondance888@gamil.com</label>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="content-4">
                                        <h2>Phone No</h2><br><br>
                                        <label for="troupe-phone">012-3456789</label>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="content-5">
                                        <h2>District</h2><br><br>
                                        <label for="troupe-district">Segamat</label>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="content-6">
                                        <h2>State</h2><br><br>
                                        <label for="troupe-state">Johor</label>
                                    </div>
                                </div>
                            </div>
                        </a> -->
                        </div>
        </div>
    </div>
</div>

<script>
var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName("same-as-selected");
                yl = y.length;
                for (k = 0; k < yl; k++) {
                y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");
                break;
            }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
        });
    }
    function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
        arrNo.push(i)
        } else {
        y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide");
        }
    }
    }

    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);

    $(document).ready(function() {
    $("#but1").click(function() {
        $(".backdrop").fadeTo(200, 1);
    });
    $("#but2").click(function() {
        $(".backdrop").fadeOut(200);
    });
    });
</script>

</body>