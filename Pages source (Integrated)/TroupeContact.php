<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/troupecontact.css">
</head>
<body>
<?php
     session_start();
?>
<header class="header">    
    <span id="troupe-contact">Contact Us</span>
</header>

<div class="side-menu-bar">
    <span style="display:block;font-size: 2rem; color:pink;text-align:center;font-weight: bold;">Welcome:</span>
    <img src="../Assets/Images/Troupe/liondance2.jpg" width="180px" height="100px" alt="">
    <span style="display:block;font-size: 2rem; color:var(--pearl);text-align:center;">Kung Seng Kung Lion Dance Troupe</span>
    <br>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <div class="menu-container">
    <a href="TroupeHome.php" class="menu">Home</a>
    <a href="TroupeBooking.php" class="menu">Booking List</a>
    <a href="TroupeProfile.php" class="menu">Troupe Profile</a>
    <a href="" class="menu">Notification</a>
    <a href="TroupeContact.php" class="menu">Contact Us</a>
    </div>
</div>

<section class="contact">

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>our number</h3>
            <p>+6 07 7597189</p>
            <h3>our fax</h3>
            <p>+6 07 7597193</p>
        </div>

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>our email</h3>
            <p>DRAGONLIONMALAYSIA@GMAIL.COM</p>
            <p>MARTINLIM@K-1.COM</p>
            <p>YONGKHENGCHIEN@YAHOO.CO.UK</p>
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>C/O CORONATION PALM OIL MILL, BATU 3, JALAN BATU PAHAT, P.O. BOX 504, 86009 KLUANG, JOHOR DARUL TAKZIM</p>
        </div>

    </div>

    <div class="row">

        <form action="">
            <h3>get in touch</h3>
            <div class="inputBox">
                <input type="text" placeholder="enter your name" class="box">
                <input type="email" placeholder="enter your email" class="box">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="enter your number" class="box">
                <input type="text" placeholder="enter your subject" class="box">
            </div>
            <textarea placeholder="your message" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <!-- <iframe class="map" src="https://goo.gl/maps/LHd5MuzF6caSnNzdA" allowfullscreen="" loading="lazy"></iframe> -->
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.4199191274843!2d103.2493022148407!3d1.9867523985516153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d0693bcd4f03c5%3A0x71f3e4a37d2aa416!2s504!5e0!3m2!1sen!2smy!4v1636624818178!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

</section>


<script src="js/script.js"></script>
</body>
</html>