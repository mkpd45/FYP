<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>

<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!--custom css file link-->
<link rel="stylesheet" href="../css/style.css">

<?php 
include "header.php";
include "DBconfig.php";
?>
</head>
<body>


    <section class="image-upload" style="margin-top:17rem; align-items: center;  justify-content: center;">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="profileImage" id="profile-image">
            <label for="submit">Submit:</label>
            <input type="submit" name="submit" value="Submit" style="color:red; background-color:black"/>
            <label for="submit">Reset:</label>
            <input type="reset" name="submit" value="Reset" style="color:red; background-color:black"/>
            <label for="performance_date">Select date: </label>
            <input type="date" name="performance_date" id="" style="cursor:pointer">
        </form>
    </section>

    <?php
if(isset($_POST['submit'])){

    $dateObject = date_create($_POST['performance_date']);
    $date = date_format($dateObject, "d/m/Y");
    echo $date;

    $target_dir = "../Assets/images/";
    $target_file = $target_dir. basename($_FILES['profileImage']['name']);
    $extension_array = array("jpg","jpeg","png",);

    if(isset($_FILES['profileImage']['name']) && $_FILES['profileImage']['name'] != ""){
        $img_extension = strtolower(pathinfo($_FILES['profileImage']['name'],PATHINFO_EXTENSION));
        if(in_array($img_extension, $extension_array)){
            if($_FILES['profileImage']['size'] < 10485760){
                if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target_file)){
                echo "<br>Image Uploaded.";
                }
                else
                echo "Upload failed";
            }else
            echo "Image size is too large, please ensure the file size is below 10MB";
        }
        else
            echo "Unacceptable file extension (.{$img_extension}), only .jpg, .jpeg and .png are allowed.";
    }
    else
        echo "No file is uploaded, please select a file";
}

    ?>
</body>
<script src="../js/script.js"></script>
