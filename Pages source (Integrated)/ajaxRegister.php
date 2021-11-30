<?php
include "DBConfig.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$state = $_POST['state'];
$district = $_POST['district'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$password = $_POST['password'];
$hash_password = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO inviters(firstname, lastname, homeState, district, phoneNum, profileImage, email, password) VALUES ('$fname', '$lname', '$state', '$district', '$phoneNumber', '../Assets/Images/Web/profile-img.jpg', '$email', '$hash_password')";

if(mysqli_query($dbc, $query))
{   
    $characterId = mysqli_insert_id($dbc);
    $query1 = "INSERT INTO users(userRole, username, password, characterId, nameUser) VALUES ('Inviter', '$email', '$hash_password', '$characterId', '$fname')";
    mysqli_query($dbc, $query1);
} 
else
{
    $error5 = "ERROR: Could not able to execute $query. " . mysqli_error($dbc);
    echo "$error5";
}
?>