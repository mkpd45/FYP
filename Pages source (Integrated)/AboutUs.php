<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>About Us</title>
<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--custom css file link-->
<link rel="stylesheet" href="../css/AU.css">

</head>

<body>
<?php 
session_start();

if(!empty($_SESSION['userRole'])){
        include "./userHeader.php";
}
else
include "./header.php"; ?>

<h1 class="heading1">
        <span>a</span>
        <span>b</span>
        <span>o</span>
        <span>u</span>
        <span>t</span>
        <span class="space"></span>
        <span>u</span>
        <span>s</span>
</h1>

    <section class="about">

        <div class="image">
            <img src="../Assets/Images/Web/About-us1.jpg" width="300px" height="600px" alt="">
        </div>

        <div class="content">
            <span>welcome to our Lion Dance System</span>
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vel sequi nostrum quae nobis non quaerat nisi voluptatibus recusandae reprehenderit tempore eligendi, eum quibusdam perferendis dicta, incidunt dolores nemo ex.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem cumque molestiae blanditiis deleniti aspernatur, ab tempora quisquam sapiente commodi hic.</p>
            <a href="MakeReservation.php" class="btn">Reserve Now</a>
        </div>

    </section>

    <section class="about">

        <div class="content">
            <span>welcome to our Lion Dance System</span>
            <h3>Origin History by Lion Dance</h3>
            <p>In traditional Chinese culture, the lion, like the Chinese dragon, was only an animal which existed in myth, and there were no actual lions in China. Before the Han Dynasty (202 BC–220 AD), only a few lions had reached the Central Plains from the western area of ancient China (now Xinjiang), due to Silk Road trade.</p>
            <p>At that time, people mimicked the appearance and actions of the newly arrived lions in a performance, which developed into the lion dance in the Three Kingdoms Period (220–280) and then became popular with the rise of Buddhism in the Northern and Southern Dynasties (420–589). In the Tang Dynasty (618–907), the lion dance was one of the court dances.</p>
            <p>After that lion dances continued to become a popular performance among the people, to pray for good luck during the Spring Festival or during other celebrations.</p>
            <p>The lion dance is an excellent example of Chinese folk culture, which has spread across the world with Chinese immigration. Overseas Chinese in Europe, America, etc. have established many lion dance clubs, performing on Chinese festivals or big occasions, particularly Chinese New Year.</p>
            <a href="MakeReservation.php" class="btn">Reserve Now</a>
        </div>

        <div class="image">
            <img src="../Assets/Images/Web/About-us2.jpg" width="300px" height="600px" alt="">
        </div>

    </section>

    <section class="about">        
        
        <div class="image">
            <img src="../Assets/Images/Web/About-us3.jpg" width="300px" height="600px" alt="">
        </div>

        <div class="content">
            <span>welcome to our Lion Dance System</span>
            <h3>The Art of Lion Dance</h3>
            <p>The crashing of cymbals and the pounding of drums announce the brightly colored costumes. Animated lions, made up of a team of two men, make their way to an eager crowd. The most skilled know how to manipulate the features of the mask. Eyes flutter, nostrils flair, mouths open and close with a panting rhythm, and the body undulates causing its fur to accentuate the ornate ripples of the “skin.”</p>
            <p>Lion dancing is a Chinese cultural art form steeped in symbolism and offered up to awe-struck audiences during Chinese New Year around the globe. For first timers, it may appear to be a fanciful show but lion dancing is performed by martial arts students with a minimum of three years of training and has a lineage that may go back as far as the third century.</p>
            <a href="MakeReservation.php" class="btn">Reserve Now</a>
        </div>

    </section>

    <button id="btnScrollToTop">
        <i class="material-icons">arrow_upward</i>
    </button>

    <?php include "./footer.php" ?>

<script src="../js/script.js"></script>
    <script>
        const btnScrollToTop = document.querySelector("#btnScrollToTop");

        btnScrollToTop.addEventListener("click", function(){
            window.scrollTo(0,0);
        });
    </script>

</body>