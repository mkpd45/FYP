<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Join Us</title>
<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--custom css file link-->
<link rel="stylesheet" href="css/TWU.css">

</head>

<body>
<?php include "./testing.php" ?>

<h1 class="heading1">
        <span>J</span>
        <span>o</span>
        <span>i</span>
        <span>n</span>
        <span class="space"></span>
        <span>u</span>
        <span>s</span>
</h1>

    <section class="join-us">

        <div class="image">
            <img src="Assets/Images/Web/join-us1.jpg" width="300px" height="600px" alt="">
        </div>

        <div class="content">
            <span>Why Join Us?</span>
            <h3>Reason to join Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vel sequi nostrum quae nobis non quaerat nisi voluptatibus recusandae reprehenderit tempore eligendi, eum quibusdam perferendis dicta, incidunt dolores nemo ex.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem cumque molestiae blanditiis deleniti aspernatur, ab tempora quisquam sapiente commodi hic.</p>
            <a href="#row" class="btn">Join Now</a>
        </div>

    </section>

    <section class="join-us">

        <div class="content">
            <span>Why Join Us?</span>
            <h3>Advantages of join us</h3>
            <p>In traditional Chinese culture, the lion, like the Chinese dragon, was only an animal which existed in myth, and there were no actual lions in China. Before the Han Dynasty (202 BC–220 AD), only a few lions had reached the Central Plains from the western area of ancient China (now Xinjiang), due to Silk Road trade.</p>
            <p>At that time, people mimicked the appearance and actions of the newly arrived lions in a performance, which developed into the lion dance in the Three Kingdoms Period (220–280) and then became popular with the rise of Buddhism in the Northern and Southern Dynasties (420–589). In the Tang Dynasty (618–907), the lion dance was one of the court dances.</p>
            <p>After that lion dances continued to become a popular performance among the people, to pray for good luck during the Spring Festival or during other celebrations.</p>
            <p>The lion dance is an excellent example of Chinese folk culture, which has spread across the world with Chinese immigration. Overseas Chinese in Europe, America, etc. have established many lion dance clubs, performing on Chinese festivals or big occasions, particularly Chinese New Year.</p>
            <a href="#row" class="btn">Join Now</a>
        </div>

        <div class="image">
            <img src="Assets/Images/Web/join-us2.jpg" width="300px" height="600px" alt="">
        </div>

    </section>

    <h1 class="sub-title">Join With Us</h1>
    <div class="row" id="row">

        <form action="">
            <h3>Fill up form</h3>
            <div class="inputBox">
                <input type="text" placeholder="Enter troupe name" class="box">
                <input type="email" placeholder="Enter troupe email" class="box">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Enter troupe phone number" class="box">
                <input type="text" placeholder="Enter your service area follow by district, state (E.g: Segamat, Johor)" class="box">
            </div>
            <textarea placeholder="Anything let us know..." cols="30" rows="10"></textarea>

            <h2>Support Document: <input type="file"></h2><br>
            <p style="font-size:14px; color:red; text-transform:none">(Please provided any support document to prove that the accuracy of lion dance troupe)</p>
            <input type="submit" value="Submit" class="btn">
        </form>

    </div>

    <button id="btnScrollToTop">
        <i class="material-icons">arrow_upward</i>
    </button>


<?php include "./footer.php" ?>

<script>
        const btnScrollToTop = document.querySelector("#btnScrollToTop");

        btnScrollToTop.addEventListener("click", function(){
            window.scrollTo(0,0);
            // window.scrollTo({
            //     top: 0,
            //     left: 0,
            //     behavior: "smooth"
            // });
            // $("html, body").animate({scrollTop: 0}, "slow");
        });
    </script>


</body