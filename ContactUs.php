<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Us</title>
<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--custom css file link-->
<link rel="stylesheet" href="../css/CU.css">

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

    
if(isset($_POST['submit_btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $query = "INSERT INTO feedback(feedbackName, feedbackEmail, feedbackPhone, feedbackSubject, feedbackMessage) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
    if(mysqli_query($dbc, $query))
    {
    // header("Location:AdminTroupe.php");
    } 
    else
    {
        $error5 = "ERROR: Could not able to execute $query. " . mysqli_error($dbc);
        echo "$error5";
    }
}

?>
<h1 class="heading1">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
        <span class="space"></span>
        <span>u</span>
        <span>s</span>
</h1>

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

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <h3>get in touch</h3>
            <div class="inputBox">
                <input type="text" name="name" placeholder="enter your name" class="box">
                <input type="email" name="email" placeholder="enter your email" class="box">
            </div>
            <div class="inputBox">
                <input type="number" name="phone" placeholder="enter your phone number" class="box">
                <input type="text" name="subject" placeholder="enter your subject" class="box">
            </div>
            <textarea placeholder="your message" name="message" cols="30" rows="10"></textarea>
            <input type="submit" name="submit_btn" value="send message" class="btn">
        </form>

        <!-- <iframe class="map" src="https://goo.gl/maps/LHd5MuzF6caSnNzdA" allowfullscreen="" loading="lazy"></iframe> -->
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.4199191274843!2d103.2493022148407!3d1.9867523985516153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d0693bcd4f03c5%3A0x71f3e4a37d2aa416!2s504!5e0!3m2!1sen!2smy!4v1636624818178!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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

</body