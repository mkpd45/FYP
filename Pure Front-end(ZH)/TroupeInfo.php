<head>
<title>Troupe Profile</title>

<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!--custom css file link-->
<link rel="stylesheet" href="../css/TInfo.css">
<link rel="stylesheet" href="../css/header.css">



</head>
<body>
<?php include "./header.php" ?>

<div class="container">
    <div class="profile-header">
        <div class="profile-img">
            <img src="image/home-bg1.png" width="200" alt="">
        </div>
        <div class="profile-nav-info">
            <h3 class="user-name">LKL Lion Dance Troupe</h3>
            <div class="address">
                <p class="city">Segamat</p>
                <span class="state">Johor</span>
            </div>
        </div>
        <div class="profile-book">
            <div class="booking">
                <button class="btn">Book Now</button>
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
            </div>
            <br><br>
            <!-- Image Slider Start -->
            <div class="slider">                
                <h1>Our Activities</h1>
                    <div class="slide active">
                        <img src="image/liondance1.jpg" alt="">
                        <div class="info">
                            <h2>LKL Lion Dance Troupe</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa itaque modi illo eius quaerat beatae! Non unde minus est, id eos facilis, ducimus saepe velit inventore iusto nisi beatae rerum.</p>
                        </div>
                    </div>

                    <div class="slide">
                        <img src="image/liondance2.jpg" alt="">
                        <div class="info">
                            <h2>LKL Lion Dance Troupe</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa itaque modi illo eius quaerat beatae! Non unde minus est, id eos facilis, ducimus saepe velit inventore iusto nisi beatae rerum.</p>
                        </div>
                    </div>

                    <div class="slide">
                        <img src="image/liondance3.jpg" alt="">
                        <div class="info">
                            <h2>LKL Lion Dance Troupe</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa itaque modi illo eius quaerat beatae! Non unde minus est, id eos facilis, ducimus saepe velit inventore iusto nisi beatae rerum.</p>
                        </div>
                    </div>

                    <div class="navigation">
                        <i class="fas fa-chevron-left prev-btn"></i>
                        <i class="fas fa-chevron-right next-btn"></i>
                    </div>

                    <div class="navigation-visibility">
                        <div class="slide-icon active"></div>
                        <div class="slide-icon"></div>
                        <div class="slide-icon"></div>
                    </div>
            </div>
            <!-- Image Slider End -->
            <div class="slideshow-container">
                    <br><br>
                    <h1>Our Videos</h1>
                    <div class="mySlides fade">
                        <video id="player" playsinline controls data-poster="/path/to/poster.jpg " width="1000" height="500">
	                    <source src="video/video_liondance1.mp4" type="video/mp4" />
	                    </video>
                        <div class="text">Segamat New Year Celebration</div>
                    </div>

                    <div class="mySlides fade">
                        <video id="player" playsinline controls data-poster="/path/to/poster.jpg " width="1000" height="500">
	                    <source src="video/video_liondance1.mp4" type="video/mp4" />
	                    </video>
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                       <video id="player" playsinline controls data-poster="/path/to/poster.jpg " width="1000" height="500">
                       <source src="../Assets/Videos/video1.mp4" type="video/mp4" />
	                   </video>
                       <div class="text">Caption Three</div>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    </div>
                    <br>

                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span> 
                        <span class="dot" onclick="currentSlide(2)"></span> 
                        <span class="dot" onclick="currentSlide(3)"></span> 
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
        