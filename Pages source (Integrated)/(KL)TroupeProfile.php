<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MYLD</title>
  <link rel="icon" href="../Assets/images/MLDS_LOGO (New).png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/troupe_side (outdated).css">
<link rel="stylesheet" href="../css/footer.css">
<?php
 include "DBConfig.php";
 session_start();
?>
</head>
<body>
    
<div class="profile-form-container">
    <form action="" method="post">
        <div class="form-group">
            <label for="coverImage" class="label">Troupe cover image: </label>
            <image src="../Assets/Images/Troupe/liondance1.jpg" alt="Cover Image" class="input" style="width:700px" id="cover-image">
            <input type="file" name="coverImage" id="upload" class="input">
            <span class="error"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;Error!</span>
        </div>
        <div class="form-group">
            <label for="profileImage" class="label">Troupe profile image: </label>
            <image src="../Assets/Images/Troupe/liondance2.jpg" alt="Profile Image" class="input" style="width:400px" id="profile-image">
            <input type="file" name="profileImage" id="upload" class="input">
            <span class="error"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;Error!</span>
        </div>
        <div class="form-group">
            <label for="about" class="label">About our troupe: </label>
            <textarea name="" id="" cols="30" rows="10" class="input"></textarea>
            <span class="error"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;Error!</span>
        </div>
        <div class="form-group" id="troupe-images">
        <label class='label'>Troupe performance and activities images: </label><br>
        <div class="grid-container">
            <?php

            $fetchImgQuery = "SELECT I.imageId, I.location FROM images I, troupes T WHERE I.troupeId = T.troupeId
                              AND T.troupeId = 1;";
            $imgResult = mysqli_query($dbc, $fetchImgQuery);
            $countRow = mysqli_affected_rows($dbc);
            while($imgRow = mysqli_fetch_assoc($imgResult)){
                echo "<div class='image' style='background-image: url({$imgRow['location']});'>";
                echo "<i class='fas fa-trash-alt' id='{$imgRow['imageId']}' onclick=alert(this.attributes['id'].value)></i>";
                echo "</div>";
            }

            if($countRow < 6){
                echo "<div class='add-new' onclick=alert('good') >";
                echo "<span class='fas fa-plus' ></span>";
                echo "</div>";
            }
            mysqli_free_result($imgResult);
           
            ?>
            </div>
        </div><br>
        <div class="form-group" id="troupe-videos">
            <label class="label">Troupe performance and activities videos : </label><br>
            <div class="grid-container">
            <?php

            $fetchVidQuery = "SELECT V.videoId, V.location FROM videos V, troupes T WHERE V.troupeId = T.troupeId
                              AND T.troupeId = 1;";
            $vdResult = mysqli_query($dbc, $fetchVidQuery);
            $countRow = mysqli_affected_rows($dbc);
            while($vdRow = mysqli_fetch_assoc($vdResult)){
                echo "<video class='grid-video' src='{$vdRow['location']}' width='220px' controls></video>";
                echo "<video class='grid-video' src='{$vdRow['location']}' width='220px' controls></video>";
               
            }
            if($countRow < 3){
                echo "<div onclick=alert('good') style='text-align:center; line-height: 130px; 
                      width:220px; height:124px; background-color: #d1d8d1; border-radius: 4px; 
                      font-size: 5rem; cursor: pointer;' >";
                echo "<span class='fas fa-plus' ></span>";
                echo "</div>";
            }
            mysqli_free_result($vdResult);
            mysqli_close($dbc);
            ?>
            </div>
        </div><br>
        <button type="submit" style="float:right">Save</button>
    </form>
</div>


</body>

</html>
<script>
    // document.getElementById('btnCI').addEventListener('click', uploadFile);
    // function uploadFile(){
    //     document.getElementById('actualUpBtn').click;

    function deleteImage(id){
        var xtml = new xtmlRequest();
        var xmlhttp=new XMLHttpRequest();

        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
            document.getElementById("troupe-images").innerHTML=this.responseText;
            }
        }
        xmlhttp.open("GET","ajaxDeletedResult.php?id="+id+"",true);
        xmlhttp.send();
    }
    function deleteVideo(){

    }
    // }
</script>

