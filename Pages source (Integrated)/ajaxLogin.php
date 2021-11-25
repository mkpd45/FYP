<?php
session_start();

include "DBConfig.php";

$email = $_GET['email'];
$passw = $_GET['passw'];
$emailMsg = "";
$passwMsg = "";
$emailFound = FALSE;
$troupeEmail = "SELECT userRole, nameUser, characterId, username, password FROM users; ";

$result = mysqli_query($dbc,$troupeEmail);

while($row = mysqli_fetch_assoc($result)){
    if(strcmp($row['username'], $email) == 0){
        $emailFound = TRUE;
        if(strcmp($row['password'], $passw) == 0){
            $_SESSION['characterId'] = $row['characterId'];
            $_SESSION['userRole'] = $row['userRole'];
            $_SESSION['name'] = $row['nameUser'];
            break;
        }
        else{
            $passwMsg = "<i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Incorrect password for the relevant account.";
            break;
        }
    }
}

mysqli_free_result($result);
mysqli_close($dbc);

if(!$emailFound)
$emailMsg = "<i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;This email is not registered with us.";

if($emailMsg == "" && $passwMsg == "" && $_SESSION['userRole'] == "Troupe"){
    echo "<h1 style='text-align:center;color:#09e32d'>Troupe Login success !</h1><br>";
    // echo "<h1 style='text-align:center'>Redirecting to homepage</h1><br>";
    // echo "<h1 id='count' onclick=redirectPage() style='text-align:center'>3</h1>";
    
}
else if($emailMsg == "" && $passwMsg == "" && $_SESSION['userRole'] == "Inviter")
{
    echo "<h1 style='text-align:center;color:#09e32d'>Inviter Login success !</h1><br>";
    // echo "<h1 style='text-align:center'>Redirecting to homepage</h1><br>";
    // echo "<h1 id='count' onclick=redirectPage() style='text-align:center'>3</h1>";
    
}

else{
    
    echo "<h3>login now</h3>";
    echo " <input type='text' placeholder='Enter your email' class='box' id='email' value='$email'>";
    echo " <span class='login-fail' id='email-wrong'>$emailMsg</span>";
    echo " <input type='password' placeholder='Enter your password' class='box' id='passw'>";
    echo " <span class='login-fail' id='passw-wrong'>$passwMsg</span>";
    echo " <div class='remember'>";
    echo " <input type='checkbox' name=' id='remember-me'>";
    echo " <label for='remember-me'>remember me</label>";
    echo " </div>";
    echo " <button class='btn'>login now</button>";
    echo " <p>Forget your password? <a href=''>click here</a></p>";
    echo " <p>don't have an account? <a href='Register.php'>create one</a></p>";
    echo "<script>please()</script>";
}


?>