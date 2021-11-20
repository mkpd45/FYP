<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troupe Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/troupe_side.css">
</head>
<body>
<?php
     session_start();
?>
<header class="header">    
    <span id="troupe-name">HOME</span>
</header>

<div class="side-menu-bar">
    <span style="display:block;font-size: 2rem; color:pink;text-align:center;font-weight: bold;">Welcome:</span>
    <img src="Assets/Images/Troupe/liondance2.jpg" width="180px" height="100px" alt="">
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

<script src="js/script.js"></script>
</body>
</html>