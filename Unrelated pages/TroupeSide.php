<?php session_start(); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Testing.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        
    </body>
</html>
<?php
 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
 echo $_SESSION["Name"]."</br>";
 echo $_SESSION["UserID"]."</br>";
 echo $_POST["userID"]."</br>";
 
// obtain the data from the same-name variable in the URL
 echo $_GET["text"];
 echo $_GET["v1"]; 
 echo $_GET["v2"]; 
 
 

