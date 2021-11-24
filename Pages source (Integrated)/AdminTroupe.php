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
    
<?php include "./AdminHeader.php" ?>

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
                    <option value="johor">johor</option>
                    <option value="kedah">kedah</option>
                    <option value="kelantan">Kelantan</option>
                    <option value="kualalumpur">kuala lumpur</option>
                    <option value="melacca">melacca</option>
                    <option value="negerisembilan">negeri sembilan</option>
                    <option value="pahang">pahang</option>
                    <option value="penang">penang</option>
                    <option value="perak">perak</option>
                    <option value="perlis">perlis</option>
                    <option value="sabah">sabah</option>
                    <option value="sarawak">sarawak</option>
                    <option value="selangor">selangor</option>
                    <option value="terengganu">terengganu</option>
                </select>
            </div>
            <div class="custom-select" style="width:200px;">
                <select>
                    <option value="none">Select district:</option>
                    <option value="batupahat">batu pahat</option>
                    <option value="johorbahru">johor bahru</option>
                    <option value="kluang">kluang</option>
                    <option value="kotatinggi">kota tinggi</option>
                    <option value="kulai">kulai</option>
                    <option value="ledang">ledang</option>
                    <option value="mersing">mersing</option>
                    <option value="muar">muar</option>
                    <option value="pontian">pontian</option>
                    <option value="segamat">segamat</option>
                </select>
            </div>
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
                        </a>
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