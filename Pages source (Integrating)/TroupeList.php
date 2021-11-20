<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>

<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!--custom css file link-->
<link rel="stylesheet" href="../css/style.css">

</head>
<body>
<?php 
session_start();

if(!empty($_SESSION['userRole']))
include "./userHeader.php" ;
else
include "./header.php";

include "DBConfig.php"
?>

<h1 class="heading1">
        <span>m</span>
        <span>a</span>
        <span>k</span>
        <span>e</span>
        <span class="space"></span>
        <span>r</span>
        <span>e</span>
        <span>s</span>
        <span>e</span>        
        <span>r</span>
        <span>v</span>
        <span>a</span>
        <span>t</span>
        <span>i</span>
        <span>o</span>
        <span>n</span>
</h1>

<section class="troupe-list">
    <h1 class="title">Our <span>Lion Dance Troupe</span> <a href="#">view all >></a></h1>

    <div class="filter-options">
        <div class="option">
            <form action="" method="get">
            <label for="search-troupe">Search: </label>
            <input oninput=filterList() type="search" name="search-troupe" autofocus id="search">
            <button type="submit"><i class="fas fa-search"></i> search</button>
            </form>
        </div>
        
        <div class="option" style="padding-left:30%">
            <label for="troupe-state">Select state:</label>
                <select onchange=filterList() name="troupe-state" id="state">
                    <option value="All">All</option>  
                    <option value="Johor">Johor</option>        
                    <option value="Kedah">Kedah</option>        
                    <option value="Selangor">Selangor</option>      
                    <option value="Perak">Perak</option>
                    <option value="Penang">Penang</option>
                </select>
        </div>

        <div class="option" style="padding-right:3%">
            <label for="troupe-city" >Select city: </label>
            <select onchange=filterList() <?php echo "disabled"?> name="troupe-city" id="city">
                <option value="All">All</option>
                <option value="Segamat">Segamat</option>
            </select>
        </div>
      

    </div>

    <div class="box-container" id="troupes">

    <?php

    $fetchTQuery = "Select * From Troupes;";

    try{
        $result = mysqli_query($dbc, $fetchTQuery);
        

        while($row = mysqli_fetch_assoc($result)){
            echo "<div class='box'>";
        echo "<div class='image'>";
            echo "<a href='troupeInfo.php?id={$row['troupeId']}'><img src='{$row['troupeImage']}' alt=''></a>";
        echo "</div>";
        echo "<div class='content'>";
            echo "<div class='icons'>";
                echo "<a href='#'><i class='fas fa-map-marker-alt'></i>{$row['city']}, {$row['troupeState']}</a>";
                echo "<a href='#'><i class='fas fa-user'></i> {$row['troupeName']}</a>";
            echo "</div>";
            echo "<h3>Introduction</h3>";
            echo "<p>{$row['description']}</p>";
            echo "<a href='troupeInfo.php?id={$row['troupeId']}' class='btn'>know more</a>";
        echo "</div>";
    echo "</div>";
        }
    }
    catch(Exception $e){
        echo $e;
    }

    mysqli_free_result($result); //Free the associated from memory
    mysqli_close($dbc);
    ?>

    <div class="box">
        <div class="image">
            <img src="../Assets/Images/Troupe/liondance1.jpg" alt="">
        </div>
        <div class="content">
            <div class="icons">
                <a href="#"><i class="fas fa-map-marker-alt"></i> Segamat, Johor</a>
                <a href="#"><i class="fas fa-user"></i> by LKL Lion Dance Troupe</a>
            </div>
            <h3>Description</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="btn">read more</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="../Assets/Images/Troupe/liondance2.jpg" alt="">
        </div>
        <div class="content">
            <div class="icons">
                <a href="#"><i class="fas fa-map-marker-alt"></i> Kulai, Johor</a>
                <a href="#"><i class="fas fa-user"></i> by JJJ Lion Dance Troupe</a>
            </div>
            <h3>Description</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="btn">read more</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="../Assets/Images/Troupe/liondance3.jpg" alt="">
        </div>
        <div class="content">
            <div class="icons">
                <a href="#"><i class="fas fa-map-marker-alt"></i> Pavillion, Selangor</a>
                <a href="#"><i class="fas fa-user"></i> by GGG Lion Dance Troupe</a>
            </div>
            <h3>Description</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="btn">read more</a>
        </div>
    </div>

    </div>
</section>
        
<?php include "./footer.php" ?>

<script src="../js/script.js"></script>

<script>
    function filterList(){

        var tState = document.getElementById("state").value;
        var tCity = document.getElementById("city").value;
        var tSearch = document.getElementById("search").value;

        if(tState != "All")
            document.getElementById("city").disabled = false;
        else{
            document.getElementById("city").value = "All";
            document.getElementById("city").disabled = true;
        }
        var xmlhttp=new XMLHttpRequest();

        xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
        document.getElementById("troupes").innerHTML=this.responseText;
        }
        }
        xmlhttp.open("GET","ajaxShowTroupes.php?state="+tState+"&city="+tCity+"&search="+tSearch+"",true);
        xmlhttp.send();
    }

</script>

</body>
</html>

