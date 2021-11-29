<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>

<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!--custom css file link-->
<link rel="stylesheet" href="../css/style.css">

</head>
<body>

<?php 

include "./header.php";



?>

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

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="register-form" method="post">
        <span class="msg" id="fNameMsg"></span>
            <div class="inputBox">
                <h3>First Name</h3>
                <input type="text" name="fname" id="fname" value="" placeholder="Enter your first name" required>
            </div>
        
        <span class="msg" id="lNameMsg"></span>
            <div class="inputBox">
                <h3>Last Name</h3>
                <input type="text" name="lname" id="lname" value="" placeholder="Enter your last name" required>
            </div>
        
        <span class="msg" id="stateMsg"></span>
            <div class="inputBox">
                <h3>State</h3>
                <select name="state" id="state" name="state" value="">
                     <option value="none">Select state:</option>
                     <option value="Johor">Johor</option>
                     <option value="Kedah">Kedah</option>
                     <option value="Kelantan">Kelantan</option>
                     <option value="Malacca">Malacca</option>
                     <option value="Negeri Sembilan">Negeri Sembilan</option>
                     <option value="Pahang">Pahang</option>
                     <option value="Perak">Perak</option>
                     <option value="Perlis">Perlis</option>
                     <option value="Sabah">Sabah</option>
                     <option value="Sarawak">Sarawak</option>
                     <option value="Selangor">Selangor</option>
                     <option value="Terrengganu">Terrengganu</option>
                   </select>
                <!-- dropdown -->
        
            </div>
        <span class="msg" id="districtMsg"></span>
            <div class="inputBox">
                <h3>Disctrict</h3>
                <select name="district" id="district" name="district" value="">
                <option value="none">Select district:</option>
                    <option value="Batu Pahat">batu pahat</option>
                    <option value="Johor Bahru">johor bahru</option>
                    <option value="Kluang">kluang</option>
                    <option value="Kota Tinggi">kota tinggi</option>
                    <option value="Kulai">kulai</option>
                    <option value="Ledang">ledang</option>
                    <option value="Mersing">mersing</option>
                    <option value="Muar">muar</option>
                    <option value="Pontian">pontian</option>
                    <option value="Segamat">segamat</option>
                   </select>
                <!-- dropdown -->
            </div>
        
        <span class="msg" id="phoneMsg"></span>
            <div class="inputBox">
                <h3>Phone Number</h3>
                <input type="number" placeholder="Enter your phone number" name="phoneNumber" id="phoneNumber" value="" required>
            </div>
        
        <span class="msg" id="emailMsg"></span>
            <div class="inputBox">
                <h3>Email</h3>
                <input type="text" placeholder="Enter your email" name="email" id="email" value="" required>
            </div>
        
        <span class="msg" id="passwordMsg"></span>
            <div class="inputBox">
                <h3>Password</h3>
                <input type="password" placeholder="Enter your password" name="password" id="password" value="" required>
            </div>
        
            <input type="submit" onclick="completeReservation()" class="btn" value="Register Now">
        </form>

    </div>

</section>


<?php include "./footer.php" ?>
    
<!--custom css file link-->
<script src="../js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    
function completeReservation()
{
    $("#fNameMsg").html("");
    $("#lNameMsg").html("");
    $("#stateMsg").html("");
    $("#districtMsg").html("");
    $("#phoneMsg").html("");
    $("#emailMsg").html("");
    $("#passwordMsg").html("");
    $(document).ready(function()
    {
        $(".register-form").submit(function(e)
        {
            e.preventDefault();
            var bool = 1;

            var fNameValue = $("#fname").val();
            var lNameValue = $("#lname").val();
            var stateValue = $("#state").val();
            var districtValue = $("#district").val();
            var phoneValue = $("#phoneNumber").val();
            var emailValue = $("#email").val();
            var passwordValue = $("#password").val();

                if(fNameValue == "")
            { $("#fNameMsg").html("Please enter your First Name.");
                bool = 0;}

                if(lNameValue == "")
            { $("#lNameMsg").html("Please enter your Last Name.");
                bool = 0;}

                if(stateValue == "none")
            { $("#stateMsg").html("Please select your State.");
                bool = 0;}

                if(districtValue == "none")
            { $("#districtMsg").html("Please select your District.");
                bool = 0;}

                if(phoneValue == "")
            { $("#phoneMsg").html("Please enter your Phone Number.");
                bool = 0;}

                if(emailValue == "")
            { $("#emailMsg").html("Please enter your Email.");
                bool = 0;}

                if(passwordValue == "")
            { $("#passwordMsg").html("Please the Password for this account.");
                bool = 0;}
                
            if(bool == 1)
            {
                var xmlhttp=new XMLHttpRequest();
                xmlhttp.open("POST","ajaxRegister.php",false);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("fname="+$("#fname").val()+"&lname="+$("#lname").val()+"&state="+$("#state").val()+"&district="+$("#district").val()+"&phoneNumber="+$("#phoneNumber").val()+"&email="+$("#email").val()+"&password="+$("#password").val()+"");
                if(xmlhttp.responseText == "Success")
                {
                    alert("kukubird");
                }
                else
                {
                    alert(xmlhttp.responseText);
                }
                
            }
        });
    });
}
</script>
</body>
</html>