<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Example #1 Simple usage of http_build_query()
 $data = array(
    'foo' => 'bar',
    'baz' => 'boom',
    'cow' => 'milk',
    'php' => 'hypertext processor'
);

echo http_build_query($data) . "\n";
echo http_build_query($data, '', '&amp;');
/* Output
 * foo=bar&baz=boom&cow=milk&php=hypertext+processor
 * foo=bar&amp;baz=boom&amp;cow=milk&amp;php=hypertext+processor
 */

//Example #2 http_build_query() with numerically index elements.
 $data = array('foo', 'bar', 'baz', 'boom', 'cow' => 'milk', 'php' => 'hypertext processor');

echo http_build_query($data) . "\n";
echo http_build_query($data, 'myvar_');
/* Output
 * 0=foo&1=bar&2=baz&3=boom&cow=milk&php=hypertext+processor
 * myvar_0=foo&myvar_1=bar&myvar_2=baz&myvar_3=boom&cow=milk&php=hypertext+processor
 */

//Store the video to the videos directory and save the video refernce which can be name into the database
 
if(isset($_POST['but_upload'])){
   $maxsize = 5242880; // 5MB
   if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){             //['file'] is the name where set in HTML input type for file, check it below
       $name = $_FILES['file']['name'];                                             //['name'] is the uploaded file's name
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($extension,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
             $_SESSION['message'] = "File too large. File must be less than 5MB.";
          }else{
             // Upload
             if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
               // Insert record
               $query = "INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')";

               mysqli_query($con,$query);
               $_SESSION['message'] = "Upload successfully.";
             }
          }

       }else{
          $_SESSION['message'] = "Invalid file extension.";
       }
   }else{
       $_SESSION['message'] = "Please select a file.";
   }
   header('location: index.php');
   exit;
} 
?>
<!doctype html> 
<html> 
  <head>
     <title>Upload and Store video to MySQL Database with PHP</title>
  </head>
  <body>

    <!-- Upload response -->
    <?php 
    if(isset($_SESSION['message'])){
       echo $_SESSION['message'];
       unset($_SESSION['message']);
    }
    ?>
    <form method="post" action="" enctype='multipart/form-data'>
      <input type='file' name='file' />
      <input type='submit' value='Upload' name='but_upload'>
    </form>

  </body>
</html>
