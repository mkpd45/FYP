<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Forget Password</title>
<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--custom css file link-->
<link rel="stylesheet" href="../css/FP.css">

</head>

<body>
    <?php 
    require "sendEmail.php";
    include "./header.php"; 

   include "DBConfig.php";
    
    if(isset($_POST['submit_btn'])){
        $email = $_POST['email'];
        $sent = false;
        $emailFound = false;

        $troupeEmail = "SELECT username FROM users;";
        $result = mysqli_query($dbc,$troupeEmail);

        while($row = mysqli_fetch_assoc($result)){
                if(strcmp($row['username'], $email) == 0){
                    $emailFound = true;
                }
        }

        mysqli_free_result($result);

        if($emailFound)
        $sent = sendEmail($_POST['email'], "MLDS Account Password Reset", "forPassw");
        else
        echo "<script type='text/javascript'>alert('This email is not registered with us.');</script>";

        if($sent){
        echo "<script type='text/javascript'>alert('An email from MLDS was sent to {$_POST['email']}, please check in the inbox.');</script>";
        header("Location: Home.php");
    }
    }
    
    
    ?>

<h1 class="heading1">
        <span>f</span>
        <span>o</span>
        <span>r</span>
        <span>g</span>
        <span>e</span>
        <span>t</span>
        <span class="space"></span>
        <span>p</span>
        <span>a</span>
        <span>s</span>
        <span>s</span>
        <span>w</span>
        <span>o</span>
        <span>r</span>
        <span>d</span>
</h1>

<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label>Email:</label><br>
        <input type="email" name="email" placeholder="enter your registed email" class="box"><br>
        <input type="submit" name="submit_btn" value="Submit" class="btn">
    </form>
</div>

</body>

<script src="../js/script.js"></script>