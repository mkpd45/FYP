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
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php include "./header.php" ?>

<section class="home">

    <div class="slides-container">

        <div class="slide active">
            <div class="content">
            <i class="far fa-hand-point-right"><span>Reserve a lion dance</span></i>
                <h3>Multipe area service provided!</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique itaque assumenda voluptas doloremque consequatur dolores quia exercitationem, maiores vel aliquam perferendis suscipit! Ut, explicabo fugit eos quo soluta possimus accusantium.</p>
                <a href="#" class="btn">Book Now</a>
            </div>
            <div class="image">
                <img src="image/home-bg2.png" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">
            <i class="far fa-hand-point-right"><span>Reserve a lion dance</span></i>
                <h3>Multipe area service provided!</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique itaque assumenda voluptas doloremque consequatur dolores quia exercitationem, maiores vel aliquam perferendis suscipit! Ut, explicabo fugit eos quo soluta possimus accusantium.</p>
                <a href="#" class="btn">Book Now</a>
            </div>
            <div class="image">
                <img src="image/home-bg3.png" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">
            <i class="far fa-hand-point-right"><span>Reserve a lion dance</span></i>
                <h3>Multipe area service provided!</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique itaque assumenda voluptas doloremque consequatur dolores quia exercitationem, maiores vel aliquam perferendis suscipit! Ut, explicabo fugit eos quo soluta possimus accusantium.</p>
                <a href="#" class="btn">Book Now</a>
            </div>
            <div class="image">
                <img src="image/home-bg1.png" alt="">
            </div>
        </div>

    </div>

    <div id="next-slide" class="fas fa-angle-right" onclick="next()"></div>
    <div id="prev-slide" class="fas fa-angle-left" onclick="prev()"></div>

</section>        

<?php include "./footer.php" ?>
    
<!--custom css file link-->
<script src="js/script.js"></script>
</body>
</html>

