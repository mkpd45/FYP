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
        
            <div class="inputBox">
                <h3>First Name</h3>
                <input type="text" id="fname" placeholder="Enter your first name" >
            </div>
            <span class="msg" id="fNameMsg"></span>

            <div class="inputBox">
                <h3>Last Name</h3>
                <input type="text" id="lname" placeholder="Enter your last name">
            </div>
            <span class="msg" id="lNameMsg"></span>
        
        
            <div class="inputBox">
                <h3>State</h3>
                <select name="state" id="state" name="state" >
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
            <span class="msg" id="stateMsg"></span>

            <div class="inputBox">
                <h3>Disctrict</h3>
                <select name="district" id="district" name="district" >
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
            <span class="msg" id="districtMsg"></span>

            <div class="inputBox">
                <h3>Phone Number</h3>
                <input type="number" placeholder="Enter your phone number" id="phoneNumber">
            </div>
        <span class="msg" id="phoneMsg"></span>

            <div class="inputBox">
                <h3>Email</h3>
                <input type="email" placeholder="Enter your email" id="emailReg">
            </div>
            <span class="msg" id="emailMsg"></span>

            <div class="inputBox">
                <h3>Password</h3>
                <input type="password" placeholder="Enter your password" id="password" >
            </div>
            <span class="msg" id="passwordMsg"></span>

            <div style="float:right">
            <input type="submit" class="btn" value="Register Now">
            </div>
        </form>

    </div>

</section>


<?php include "./footer.php" ?>
    
<!--custom css file link-->
<script src="../js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    

    $(document).ready(function()
    {
        $(".register-form").submit(function(e)
        {   
            $("#fNameMsg").html("");
            $("#lNameMsg").html("");
            $("#stateMsg").html("");
            $("#districtMsg").html("");
            $("#phoneMsg").html("");
            $("#emailMsg").html("");
            $("#passwordMsg").html("");
            e.preventDefault();

            var bool = 1;

            var fNameValue = $("#fname").val();
            var lNameValue = $("#lname").val();
            var stateValue = $("#state").val();
            var districtValue = $("#district").val();
            var phoneValue = $("#phoneNumber").val();
            var emailValue = $("#emailReg").val();
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

                if(!emailRegx.test(emailValue))
            {   $("#emailMsg").html("Invalid email");
                bool = 0;}

                if(passwordValue == "")
            { $("#passwordMsg").html("Please the Password for this account.");
                bool = 0;}
                
            if(bool == 1)
            {
                var xmlhttp=new XMLHttpRequest();
                xmlhttp.open("POST","ajaxRegister.php",false);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("fname="+$("#fname").val()+"&lname="+$("#lname").val()+"&state="+$("#state").val()+"&district="+$("#district").val()+"&phoneNumber="+$("#phoneNumber").val()+"&email="+$("#emailReg").val()+"&password="+$("#password").val()+"");
                if(xmlhttp.responseText == "Success")
                {
                    alert("Register Success, you are ready to make reservation.");
                }
                else
                {
                   alert("Something with the system, please try again later.");
                }
                
            }
        });
    });

</script>
</body>
</html>