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

<?php include "./header.php" ?>

<section class="book" id="book">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>g</span>
        <span>i</span>
        <span>s</span>
        <span>t</span>
        <span>e</span>
        <span>r</span>
        <span class="space"></span>
        <span>p</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="../Assets/Images/Web/register.png" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <h3>First Name</h3>
                <input type="text" placeholder="Enter your first name">
            </div>
            <div class="inputBox">
                <h3>Last Name</h3>
                <input type="text" placeholder="Enter your last name">
            </div>
            <div class="inputBox">
                <h3>State</h3>
                <select name="cars" id="cars">
                     <option value="none">      </option>
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
                <!-- dropdown -->

            </div>
            <div class="inputBox">
                <h3>City</h3>
                <input type="date">
                <!-- dropdown -->
            </div>
            <div class="inputBox">
                <h3>Phone Number</h3>
                <input type="number" placeholder="Enter your phone number">
            </div>
            <div class="inputBox">
                <h3>Email</h3>
                <input type="text" placeholder="Enter your email">
            </div>
            <div class="inputBox">
                <h3>Password</h3>
                <input type="number" placeholder="Enter your password">
            </div>
            <input type="submit" class="btn" value="Register Now">
        </form>

    </div>

</section>

<!-- book section ends -->

<?php include "./footer.php" ?>
    
<!--custom css file link-->
<script src="../js/script.js"></script>
</body>
</html>