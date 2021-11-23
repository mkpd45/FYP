<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troupe Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/troupehome.css">
</head>
<body>
<?php 
include "./Troupe-side.php"; 
include "DBConfig.php";
?>
<?php
$fetchTInfo = "SELECT * FROM troupes WHERE troupeId = {$_SESSION['characterId']};";
$infoResult = mysqli_query($dbc, $fetchTInfo);
while($rowInfo = mysqli_fetch_assoc($infoResult))
{?>
<div class="container">
    <div class="profile-header">
        <div class="profile-img">
            <img src="<?php echo $rowInfo['troupeImage']; ?>" width="200" height="100" alt="">
        </div>
        <div class="profile-nav-info">
            <h3 class="user-name">LKL Lion Dance Troupe</h3>
            <div class="address">
                <p class="city">Segamat</p>
                <span class="state">Johor</span>
            </div>
        </div>
    </div>
    <div class="main-bd">
        <div class="profile-content">
            <div class="profile-side">
                <p class="mobile-no"><i class="fa fa-phone"></i>+6012-3456789</p>
                <p class="user-mail"><i class="fa fa-envelope"></i>LKLliondance888@gmail.com</p>
                <br><br>
                <div class="user-bio">
                    <h1>Introduction</h1>
                    <p class="bio">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima ipsa rem eum? Hic, modi blanditiis! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa a temporibus nesciunt harum sapiente animi sunt soluta totam vitae qui! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit eum perferendis quod ullam ipsam est numquam eligendi eveniet aliquam dicta, repellendus mollitia, distinctio illo molestiae labore? Recusandae esse doloribus quam.</p>
                </div>       
                <?php } mysqli_free_result($infoResult);?>
                <hr class="hr1">
                <div class="performance">
                    <h1>Performance</h1>
                    <div class="performance-detail-part1">
                        <label for="lbl-performance-type" class="lbl-performance-type"><b>Performance Type:</b></label>
                            <select class="performance-type">
                                <option value="none">Select Performance Type</option>
                                <option>Acrobatic Lion Dance</option>
                                <option>Cai Qing Lion Dance</option>
                                <option>Traditional Lion Dance</option>
                                <option>24 Festive Drums</option>
                            </select>
                    </div>
                    <br>
                    <div class="performance-detail-part2">
                        <label for="lbl-performance-description" class="lbl-performance-description"><b>Description:</b></label>
                            <textarea name="performance-description" class="performance-description" cols="30" rows="4" readonly></textarea>
                    </div>
                    <br>
                    <div class="performance-detail-part3">
                        <label for="lbl-performance-service" class="lbl-performance-service"><b>Performance Service:</b></label>
                            <select class="performance-service">
                                <option value="none">Select Performance Service</option>
                                <option>Lion Dance Performance For House Blessing</option>
                                <option>Lion Dance Performance For Corporate Event</option>
                                <option>Lion Dance Performance For Wedding Ceremony</option>
                                <option>Lion Dance For Grand Opening Ceremony</option>
                                <option>Lion Dance Performance For Gala Event</option>
                                <option>Lion Dance Performance For Launch Event</option>
                            </select>
                    </div>
                </div>         
            </div>
            <br><br>
            <!-- Image Slider Start -->
            <div class="slider1">                
                <h1>Our Activities</h1>
                <?php
                $imgNum = 1; 
                $fetchImages = "SELECT I.location FROM images I, troupes T WHERE T.troupeId = I.troupeId AND I.troupeId = {$_SESSION['characterId']};";

                $result = mysqli_query($dbc, $fetchImages);
                $movNum = mysqli_affected_rows($dbc);
                while($row = mysqli_fetch_assoc($result)){
                    if($imgNum == 1){
                    echo "<div class='slide active'>";
                    $imgNum = 0;
                    }
                    else
                    echo "<div class='slide'>";

                    echo "<img src='{$row['location']}' alt=''>";
                    echo "<div class='info'>";
                    echo "<h2>LKL Lion Dance Troupe</h2>";
                    echo "<p>Lorem ipsum dolor sit inventore iusto nisi beatae rerum.</p>";
                    echo "</div>";
                    echo "</div>";
                }
                mysqli_free_result($result);
                ?>

                    <div class="navigation">
                        <i class="fas fa-chevron-left prev-btn"></i>
                        <i class="fas fa-chevron-right next-btn"></i>
                    </div>

                    <div class="navigation-visibility">
                        <?php
                        $movCount = 1; 
                        while($movNum > 0){
                            if($movCount == 1){
                            echo "<div class='slide-icon active'></div>";
                                $movCount = 0;
                        }
                            else
                            echo "<div class='slide-icon'></div>";
                            --$movNum;
                        }
                        ?>
                    </div>
            </div>
            <!-- Image Slider End -->
            <div class="slideshow-container">
                    <br><br>
                    <h1>Our Videos</h1>
                    <?php
                    $fetchVideos = "SELECT V.location FROM videos V, troupes T WHERE T.troupeId = V.troupeId AND V.troupeId = {$_SESSION['characterId']};";
    
                    $videoResult = mysqli_query($dbc, $fetchVideos);
                    $dotNum = mysqli_affected_rows($dbc);
                    while($videoRow = mysqli_fetch_assoc($videoResult)){
    
                        echo "<div class='mySlides fade'>";
                        echo "<video id='player' playsinline controls data-poster='/path/to/poster.jpg' width='1000' height='500'>";
	                    echo "<source src='{$videoRow['location']}' type='video/mp4' />";
	                    echo "</video>";
                        echo "<div class='text'>Segamat New Year Celebration</div>";
                        echo "</div>";
                    }
                    mysqli_free_result($videoResult);
                    mysqli_close($dbc);
                    ?>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    </div>
                    <div style="text-align:center;margin-bottom:10px">
                        <?php
                        $slideNum = 1;
                        while($dotNum != 0){
                            echo '<span class="dot" onclick="currentSlide('.$slideNum.')"></span>';
                            $slideNum += 1;
                            $dotNum -= 1;
                        }
                        ?>
                    </div>
         
                </div>  
        </div>
    </div>
</div>

<script src="https://cdn.plyr.io/3.6.3/plyr.polyfilled.js"></script>
<script type="text/javascript" src="https//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/script.js"></script>
<script>
//video slider
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

//Image Slider Start
//image slider next button
const nextBtn = document.querySelector(".next-btn");
const prevBtn = document.querySelector(".prev-btn");

var slideNumber = 0;

nextBtn.addEventListener("click", () => {
const slides = document.querySelectorAll(".slide");
const slideIcons = document.querySelectorAll(".slide-icon");
const numberOfSlides = slides.length;

    slides.forEach((slide) => {
        slide.classList.remove("active");
    });
    slideIcons.forEach((slideIcons) => {
        slideIcons.classList.remove("active");
    });

    slideNumber++;

    if(slideNumber > (numberOfSlides - 1)){
        slideNumber = 0;
    }

    slides[slideNumber].classList.add("active");
    slideIcons[slideNumber].classList.add("active");
});

//image slider prev button
prevBtn.addEventListener("click", () => {
    const slides = document.querySelectorAll(".slide");
    const slideIcons = document.querySelectorAll(".slide-icon");
    const numberOfSlides = slides.length;

    slides.forEach((slide) => {
        slide.classList.remove("active");
    });
    slideIcons.forEach((slideIcons) => {
        slideIcons.classList.remove("active");
    });

    slideNumber--;

    if(slideNumber < 0){
        slideNumber = numberOfSlides - 1;
    }

    slides[slideNumber].classList.add("active");
    slideIcons[slideNumber].classList.add("active");
});

//Image Slider End




</script>
</body>
</html>