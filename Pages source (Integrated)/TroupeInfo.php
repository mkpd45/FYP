<head>
<title>Troupe Info</title>

<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!--custom css file link-->
<link rel="stylesheet" href="../css/TInfo.css">
<link rel="stylesheet" href="../css/header.css">



</head>
<body>
<?php
session_start();

if(!empty($_SESSION['userRole'])){
    if($_SESSION['userRole'] == "Troupe")
        header("Location: TroupeProfile.php");
    else
        include "./userHeader.php";
}
else
include "./header.php";
include "DBConfig.php";
?>

<?php
$fetchTInfo = "SELECT * FROM troupes WHERE troupeId = {$_GET['id']};";
$infoResult = mysqli_query($dbc, $fetchTInfo);
while($rowInfo = mysqli_fetch_assoc($infoResult))
{
?>
<div class="container">
    <div class="profile-header">
        <div class="profile-img">
            <img src="<?php echo $rowInfo['troupeImage']; ?>" width="250" alt="">
        </div>
        <div class="profile-nav-info">
            <h3 class="user-name"><?php echo $rowInfo['troupeName']; ?></h3>
            <div class="address">
                <p class="city"><?php echo $rowInfo['city']; ?></p>
                <span class="state"><?php echo $rowInfo['troupeState']; ?></span>
            </div>
        </div>
        <div class="profile-book">
            <div class="booking">
                <button onclick="location.href='ReserveBooking.php?id=<?php echo $_GET['id'];?>'" class="btn">Book Now</button>
            </div>
        </div>
    </div>
    <div class="main-bd">
        <div class="profile-content">
            <div class="profile-side">
                <p class="mobile-no"><i class="fa fa-phone"></i>+<?php echo $rowInfo['contactNum']; ?></p>
                <p class="user-mail"><i class="fa fa-envelope"></i><?php echo $rowInfo['email']; ?></p>
                <br><br>
                <div class="user-bio">
                    <h1>Introduction</h1>
                    <p class="bio"><?php echo $rowInfo['description']; ?></p>
                </div>                
            </div>
            <?php
}
            mysqli_free_result($infoResult);
            ?>
            <br><br>
            <!-- Image Slider Start -->
            <div class="slider">                
                <h1>Our Activities</h1>
                <?php
                $imgNum = 1; 
                $fetchImages = "SELECT I.location FROM images I, troupes T WHERE T.troupeId = I.troupeId AND I.troupeId = {$_GET['id']};";

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
                    $fetchVideos = "SELECT V.location FROM videos V, troupes T WHERE T.troupeId = V.troupeId AND V.troupeId = {$_GET['id']};";
    
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
<script src="../js/script.js"></script>
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
        