<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troupe Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/troupeprofile.css">
</head>
<body>
<?php
?>
<?php include "./Troupe-side.php" ?>
</div>

<div class="right-side">
            <div class="nav">
                <ul>
                    <li onclick="tabs(0)" class="user-post active" id="posts">Posts</li>
                    <li onclick="tabs(1)" class="user-review">Performance</li>
                    <li onclick="tabs(2)" class="user-setting">Profile Settings</li>
                </ul>
            </div>
            <div class="profile-body">
                <div class="profile-posts tab">
                    <div class="nav3">
                        <?php include "DBConfig.php" ?>
                    <div class="profile-form-container">
    <form action="" method="post">
        <div class="form-group">
            <label for="coverImage" class="label">Troupe cover image: </label>
            <image src="../Assets/Images/Troupe/liondance1.jpg" alt="Cover Image" class="input" style="width:700px" id="cover-image">
            <input type="file" name="coverImage" id="upload" class="input">
            <span class="error"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;Error!</span>
        </div><br>
        <div class="form-group">
            <label for="profileImage" class="label">Troupe profile image: </label>
            <image src="../Assets/Images/Troupe/liondance2.jpg" alt="Profile Image" class="input" style="width:400px" id="profile-image">
            <input type="file" name="profileImage" id="uploadProfile" class="input">
            <span class="error"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;Error!</span>
        </div><br>
        <div class="form-group">
            <label for="about" class="label">About our troupe: </label>
            <textarea name="" id="" cols="30" rows="10" class="input"></textarea>
            <span class="error"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;Error!</span>
        </div><br>
        <div class="form-group" id="troupe-images">
        <label class='label'>Your images: </label><br>
        <div class="grid-container" id="images-container">
            <?php

            $fetchImgQuery = "SELECT I.imageId, I.location FROM images I, troupes T WHERE I.troupeId = T.troupeId
                              AND T.troupeId = {$_SESSION['characterId']};";
            $imgResult = mysqli_query($dbc, $fetchImgQuery);
            $countRow = mysqli_affected_rows($dbc);
            while($imgRow = mysqli_fetch_assoc($imgResult)){
                echo "<div class='image' style='background-image: url({$imgRow['location']});'>";
                echo "<i class='fas fa-trash-alt' id='{$imgRow['imageId']}' onclick=deleteImg(this.attributes['id'].value)></i>";
                echo "</div>";
            }

            if($countRow < 6){
                echo "<div class='add-new' >";
                echo "<span class='fas fa-plus' ></span>";
                echo "</div>";
            }
            mysqli_free_result($imgResult);
           
            ?>
            </div>
        </div><br>
        <div class="form-group" id="troupe-videos">
            <label class="label">Your videos : </label><br>
            <div class="grid-container">
            <?php

            $fetchVidQuery = "SELECT V.videoId, V.location FROM videos V, troupes T WHERE V.troupeId = T.troupeId
                              AND T.troupeId = {$_SESSION['characterId']};";
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
            ?>
            </div>
        </div><br>
        <button type="submit" style="float:right">Save</button>
    </form>
</div>
                    </div>
                </div>
                <div class="profile-review tab">
                    <div class="nav2">
                        <h1>Performance</h1>
                        <p class="p1">List and describe your lion dance act performance below</p>
                        <hr class="hr2">
                        <div class="performance-detail">
                            <h2 class="h2-header">Performance Details</h2>
                            <p class="p2">Update & Edit your lion dance act performance below</p>
                            <div class="performance-detail-part1">
                                
                                    <button class="btn" id="add">Add new performance</button>
                                    <div class="container1" id="container1" hidden>
                                        <div id="form">
                                            <div class="row">
                                                <div class="col-25"><label for="lbl-performance-type" class="lbl-performance-type"><b>Performance Type:</b></label>
                                                </div>
                                                    <div class="col-75">
                                                        <select class="performance-type" id="typeSelect" onchange=showText() >
                                                        <option value="none"></option>
                                                        <option value="Acrobatic Lion Dance">Acrobatic Lion Dance</option>
                                                        <option value="Cai Qing Lion Dance">Cai Qing Lion Dance</option>
                                                        <option value="Traditional Lion Dance">Traditional Lion Dance</option>
                                                        <option value="24 Festive Drums">24 Festive Drums</option>
                                                        <option value="other">Other</option>
                                                        </select>
                                                    </div>
                                            </div>
                                        <div class="row" id="otherType">
                                            <div class="col-25">
                                                <label for="add-performance-type">Please enter the type:</label>
                                            </div>
                                            <div class="col-75">
                                                <input type="text" placeholder="Enter new performance type" id="otherValue">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-25">
                                            <label for="add-performance-description">Description:</label>
                                            </div>
                                            <div class="col-75">
                                                <textarea id="add-performance-description" placeholder="Describe something.." style="height:200px"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-25">
                                                <label for="add-performance-service">Performance Service:</label>
                                            </div>
                                            <div class="col-75">
                                                <select class="performance-service" id="service">
                                                    <option value="none"></option>
                                                    <option>Lion Dance Performance For House Blessing</option>
                                                    <option>Lion Dance Performance For Corporate Event</option>
                                                    <option>Lion Dance Performance For Wedding Ceremony</option>
                                                    <option>Lion Dance For Grand Opening Ceremony</option>
                                                    <option>Lion Dance Performance For Gala Event</option>
                                                    <option>Lion Dance Performance For Launch Event</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-25">
                                                <label for="add-performance-price">Price:</label>
                                            </div>
                                            <div class="col-75">
                                                <input type="text" id="price" placeholder="Enter price" onkeypress='return restrictAlphabets(event)'>
                                            </div>                                            
                                        </div>
                                        <br>
                                        <div class="row">
                                            <input type="submit" id="sub" value="Submit" onclick=addPerformance()>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                            <hr class="hr3">
                            <div class="performance-listing">
                                <h1>Performance Listing</h1>
                                <br><br>
                                <table class="dynamic_field" id="listing">
                                    <?php
                                    echo "<tr>
                                    <th>Performance Type</th>
                                    <th>Description</th>
                                    <th>Performance Service</th>
                                    <th>Price</th>
                                    <th></th>
                                    <th>Delete</th>
                                 </tr>";
                        
                                 $fetchPermQuery = "SELECT P.performId, P.performType, P.description, P.performService, P.price 
                                                    FROM performances P, troupes T WHERE P.troupeId = T.troupeId
                                                    AND T.troupeId = {$_SESSION['characterId']};";
                    
                                 $permResult = mysqli_query($dbc, $fetchPermQuery);
                    
                                 if($permResult){
                                while($row = mysqli_fetch_assoc($permResult)){
                                    echo "<tr>
                                    <td><input type='text' value='{$row['performType']}' onkeypress='return false'></td>
                                    <td><input type='text' value='{$row['description']}'  onkeypress='return false'></td>
                                    <td><input type='text' value='{$row['performService']}'  onkeypress='return false'></td>
                                    <td><input type='text' value='{$row['price']}'  onkeypress='return false'></td>
                                    <td><button class='btn' onclick=popup({$row['performId']})>Edit</button></td>
                                    <td><i class='delete-btn fas fa-times-circle' id='{$row['performId']}'></i></td>
                                        </tr>";
                                }
                        
                                    mysqli_free_result($permResult);
                                   
                            }
                                    ?>
                                </table>
                            </div>  
                        </div>  
                    </div>
                </div>
                <div class="profile-setting tab">
                    <div class="nav1">
                    <h1>Profile Settings</h1>
                    <p class="p1">View and edit your account information below</p>
                        <div class="profile-edit1">
                            <button class="discard" id="discardBtn" disabled>Discard</button>
                            <button class="update" id="updateBtn" disabled>Confirm</button>
                        </div>
                        <?php 
                        $fetchQ = "SELECT email, troupeName, city, troupeState, contactNum, address
                                   FROM troupes WHERE troupeId = {$_SESSION['characterId']};";
                        $result = mysqli_query($dbc, $fetchQ);

                        while($iRow = mysqli_fetch_assoc($result)){
                            
                        
                        ?>
                        <hr class="hr1">
                        <div class="profile-detail">
                            <h2 class="h2-header">Profile Details</h2>
                            <p class="p2">Update & Edit your profile information</p>
                            <div class="profile-detail-email">
                                <h2>Login Email:</h2>
                                <label for="profile-email"><?php echo $iRow['email'];?></label>
                                <p class="p3">Your Login email can't be changed</p>
                            </div>
                            <div class="profile-detail-part1">
                                <label for="lbl-ld-name" class="lbl-ld-name"><b>Troupe Name:</b></label>
                                <input type="text" class="profile-name" id="profileName" oninput=checkChanges() value="<?php echo $iRow['troupeName'];?>">
                            </div>
                            <br>
                            <div class="profile-detail-part2">
                                <label for="lbl-ld-district" class="lbl-ld-district"><b>District:</b></label>
                                <input type="text" class="profile-district" id="profileCity" oninput=checkChanges() value="<?php echo $iRow['city'];?>">
                            </div>
                            <br>
                            <div class="profile-detail-part3">
                                <label for="lbl-ld-state" class="lbl-ld-state"><b>State:</b></label>
                                <input type="text" class="profile-state" id="profileState" oninput=checkChanges() value="<?php echo $iRow['troupeState'];?>">
                            </div>
                            <br>
                            <div class="profile-detail-part4">
                                <label for="lbl-ld-phone" class="lbl-ld-phone"><b>Phone No:</b></label>
                                <input type="text" class="profile-phone" id="profileCNo" oninput=checkChanges() value="<?php echo $iRow['contactNum'];?>">
                            </div>
                            <br>
                            <div class="profile-detail-part5">
                                <label for="lbl-ld-phone" class="lbl-ld-phone"><b>Address:</b></label>
                                <input type="text" class="profile-phone" id="profileAddress" oninput=checkChanges() value="<?php echo $iRow['address'];?>">
                            </div><?php
                            }
                            mysqli_free_result($result); ?>
                            <br>
                            <br>           
                            <hr class="hr3">
                            <div class="unavailable-time">
                            <h2 class="h2-header1">Unavailable Time</h2>
                            <p class="p3">Select a time that unable to serve and provided reason below.</p>
                                <div class="leave-date">
                                    <label for="lbl-leave-date" class="lbl-leave-date">Date:</label>
                                    <input type="date" id="unDate" placeholder="Date">
                                    </div>
                                <div class="leave-reason">
                                    <label for="lbl-reason" class="lbl-reason">Reason:</label>                                    
                                </div>
                                <textarea id="leave-reason" placeholder="Write the reason..." style="height:200px; width:600px; font-size:18px"></textarea><br>
                                <button id="addDateBtn">Submit</button>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
        <div class="backdrop">
    <div id="popdiv">
        <label class="close-btn fas fa-times" onclick="popout()" title="close"></label>
        <div class="text">
            Edit performance
        </div>
<form action="#">
                    <div class="data">
                        <label for="lbl-performance-type" class="lbl-performance-type"><b>Performance Type:</b></label>
                        <select class="performance-type">
                            <option value="none"></option>
                            <option>Acrobatic Lion Dance</option>
                            <option>Cai Qing Lion Dance</option>
<option>Traditional Lion Dance</option>
                            <option>24 Festive Drums</option>
                        </select>
                    </div>
                    <div class="data" style="margin-bottom:10rem">
                        <label><b>Description: </b></label>
                        <textarea name="performance-description" class="performance-description" cols="30" rows="4"></textarea>
                    </div>
                    <div class="data" >
                        <label for="lbl-performance-service" class="lbl-performance-service"><b>Performance Service:</b></label>
                        <select class="performance-service">
                            <option value="none"></option>
                            <option>Lion Dance Performance For House Blessing</option>
                            <option>Lion Dance Performance For Corporate Event</option>
<option>Lion Dance Performance For Wedding Ceremony</option>
                            <option>Lion Dance For Grand Opening Ceremony</option>
                            <option>Lion Dance Performance For Gala Event</option>
                            <option>Lion Dance Performance For Launch Event</option>
                        </select>
                    </div>
<div class="data">
                        <label><b>Price: </b></label>
                        <input type="text" required>
                    </div>
                    <div class="btn">
                        <div class="inner"></div>
                        <button type="submit" class="submit">confirm</button>
                    </div>
        </form>
    </div>
</div>    
</body>
</html>
<script src="../js/script.js"></script>
<?php echo "<script> 
            document.getElementById('posts').click(); 
            document.getElementById('otherType').style.display = 'none';
            </script>"; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

document.getElementById("addDateBtn").addEventListener("click",function(){
    
    var xmlhttp= new XMLHttpRequest();
    xmlhttp.open("GET","ajaxAddDate.php?date="+$("#unDate").val()+"&reason="+$("#leave-reason").val()+"",false);
    xmlhttp.send();
    if(xmlhttp.responseText == "Success")
        alert("Added date");
    else
        alert("Added fail.");
    })

document.getElementById("updateBtn").addEventListener("click",function(){
    
    var xmlhttp= new XMLHttpRequest();
    xmlhttp.open("GET","ajaxUpdateProfile.php?name="+$("#profileName").val()+"&city="+$("#profileCity").val()+
                 "&state="+$("#profileState").val()+"&contact="+$("#profileCNo").val()+"&address="+$("#profileAddress").val()+"",false);
    xmlhttp.send();
    if(xmlhttp.responseText == "Success")
        alert("Profile information updated");
    else
        alert("Update fail.");
    })

    document.getElementById("discardBtn").addEventListener("click",function(){
        $("#profileName").val(name);
        $("#profileCity").val(district);
        $("#profileState").val(state);
        $("#profileCNo").val(contactNum);
        $("#profileAddress").val(address);
        document.getElementById("discardBtn").disabled = true;
        document.getElementById("updateBtn").disabled = true;
    })

function deleteImg(id){
        var xmlhttp=new XMLHttpRequest();
                xmlhttp.onreadystatechange=function() {
                    if (this.readyState==4 && this.status==200) {
                    document.getElementById("images-container").innerHTML=this.responseText;
                    }
                }
                xmlhttp.open("GET","ajaxDelImg.php?id="+id+"",true);
                xmlhttp.send();
    }

        $(document).ready(function(){
            $("#add").click(function(){
                $("#container1").toggle();
                if($("#add").html() == "Add new performance")
                $("#add").html("Cancel");
                else
                $("#add").html("Add new performance");
            });

            $(".add-new").click(function(){
            $("#uploadProfile").click();
        });
        });
            

    function showText(){
        if(document.getElementById("typeSelect").value == "other")
            document.getElementById("otherType").style.display = "block";
        else{
            document.getElementById("otherType").style.display = "none";
        }
    }

    function restrictAlphabets(e) {
             var x = e.which || e.keycode;
             if ((x >= 48 && x <= 57))
                 return true;
             else
                 return false;
         }

    function addPerformance(){
        
        if(document.getElementById("typeSelect").value == "other")
        var type = $("#otherValue").val();
        else
        var type = $("#typeSelect").val();
        
        var service = $("#service").val();
        var description = $("#add-performance-description").val();
        var price = $("#price").val();

        var xmlhttp=new XMLHttpRequest();
                xmlhttp.onreadystatechange=function() {
                    if (this.readyState==4 && this.status==200) {
                    document.getElementById("listing").innerHTML=this.responseText;
                    }
                }
                xmlhttp.open("GET","ajaxAddPerm.php?type="+type+"&service="+service+"&description="+description+"&price="+price+"",true);
                xmlhttp.send();
    }

    function popup(){
                $(".backdrop").fadeTo(200, 1);
            }

    function popout(){
                $(".backdrop").fadeOut(200);
            }
    
    var name = $("#profileName").val();
    var district = $("#profileCity").val();
    var state = $("#profileState").val();
    var contactNum = $("#profileCNo").val();
    var address = $("#profileAddress").val();

    function checkChanges(){
        var changed = 0;
        

        if($("#profileName").val() != name)
        changed = 1;
        
        if($("#profileCity").val() != district)
        changed = 1;
        
        if($("#profileState").val() != state)
        changed = 1;
       
        if($("#profileCNo").val() != contactNum)
        changed = 1;
       
        if($("#profileAddress").val() != address)
        changed = 1;
        

        if(changed == 1){
        document.getElementById("discardBtn").disabled = false;
        document.getElementById("updateBtn").disabled = false;
        }
        else{
        document.getElementById("discardBtn").disabled = true;
        document.getElementById("updateBtn").disabled = true;
        }

    }
</script>
