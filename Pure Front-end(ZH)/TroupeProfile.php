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
     session_start();
?>
<header class="header">    
    <span id="troupe-profile">Troupe Profile</span>
</header>

<div class="side-menu-bar">
    <span style="display:block;font-size: 2rem; color:pink;text-align:center;font-weight: bold;">Welcome:</span>
    <img src="Assets/Images/Troupe/liondance2.jpg" width="180px" height="100px" alt="">
    <span style="display:block;font-size: 2rem; color:var(--pearl);text-align:center;">Kung Seng Kung Lion Dance Troupe</span>
    <br>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <div class="menu-container">
    <a href="TroupeHome.php" class="menu">Home</a>
    <a href="TroupeBooking.php" class="menu">Booking List</a>
    <a href="TroupeProfile.php" class="menu">Troupe Profile</a>
    <a href="" class="menu">Notification</a>
    <a href="TroupeContact.php" class="menu">Contact Us</a>
    </div>
</div>

<div class="right-side">
            <div class="nav">
                <ul>
                    <li onclick="tabs(0)" class="user-post active">Posts</li>
                    <li onclick="tabs(1)" class="user-review">Performance</li>
                    <li onclick="tabs(2)" class="user-setting">Profile Settings</li>
                </ul>
            </div>
            <div class="profile-body">
                <div class="profile-posts tab">
                    <div class="nav3">
                          <!-- post tab here  -->
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
                                <label for="lbl-performance-type" class="lbl-performance-type"><b>Performance Type:</b></label>
                                    <select class="performance-type">
                                        <option value="none"></option>
                                        <option>Acrobatic Lion Dance</option>
                                        <option>Cai Qing Lion Dance</option>
                                        <option>Traditional Lion Dance</option>
                                        <option>24 Festive Drums</option>
                                    </select>
                                    <button class="btn" id="add">Add new performance</button>
                                    <div class="container1" id="container1">
                                        <form action="/action_page.php">
                                        <div class="row">
                                            <div class="col-25">
                                                <label for="add-performance-type">Performance Type:</label>
                                            </div>
                                            <div class="col-75">
                                                <input type="text" placeholder="Enter new performance type">
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
                                                <input type="text" placeholder="Enter performance service">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-25">
                                                <label for="add-performance-price">Price:</label>
                                            </div>
                                            <div class="col-75">
                                                <input type="text" placeholder="Enter price">
                                            </div>                                            
                                        </div>
                                        <br>
                                        <div class="row">
                                            <input type="submit" id="sub" value="Submit">
                                        </div>
                                        </form>
                                    </div>
                            </div>
                            <br>
                            <div class="performance-detail-part2">
                                <label for="lbl-performance-description" class="lbl-performance-description"><b>Description:</b></label>
                                <textarea name="performance-description" class="performance-description" cols="30" rows="4"></textarea>
                            </div>
                            <br>
                            <div class="performance-detail-part3">
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
                            <br>
                            <div class="performance-detail-part4">                                        
                                <label for="lbl-performance-pricing" class="lbl-performance-pricing"><b>Pricing (RM):</b></label>
                                <input type="text" class="performance-pricing">
                            </div>
                            <hr class="hr3">
                            <div class="performance-listing">
                                <h1>Performance Listing</h1>
                                <br><br>
                                <table class="dynamic_field">
                                    <tr>
                                        <th>Performance Type</th>
                                        <th>Description</th>
                                        <th>Performance Service</th>
                                        <th>Price</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" value="Traditional Lion Dance"></td>
                                        <td><input type="text" value="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque sapiente quaerat, ex earum non veniam omnis praesentium culpa qui cum."></td>
                                        <td><input type="text" value="Lion Dance Performance For Wedding Ceremony"></td>
                                        <td><input type="text" value="RM 1300.00"></td>
                                        <td><button class="btn">Edit</button></td>
                                        <td><i class="fas fa-times-circle" id="delete-btn"></i></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" value=""></td>
                                        <td><input type="text" value=""></td>
                                        <td><input type="text" value=""></td>
                                        <td><input type="text" value=""></td>
                                        <td><button class="btn">Edit</button></td>
                                        <td><i class="fas fa-times-circle" id="delete-btn"></i></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" value=""></td>
                                        <td><input type="text" value=""></td>
                                        <td><input type="text" value=""></td>
                                        <td><input type="text" value=""></td>
                                        <td><button class="btn">Edit</button></td>
                                        <td><i class="fas fa-times-circle" id="delete-btn"></i></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" value=""></td>
                                        <td><input type="text" value=""></td>
                                        <td><input type="text" value=""></td>
                                        <td><input type="text" value=""></td>
                                        <td><button class="btn">Edit</button></td>
                                        <td><i class="fas fa-times-circle" id="delete-btn"></i></td>
                                    </tr>
                                    
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
                            <button class="discard">discard</button>
                            <button class="update">update info</button>
                        </div>
                        <hr class="hr1">
                        <div class="profile-detail">
                            <h2 class="h2-header">Profile Details</h2>
                            <p class="p2">Update & Edit your profile information</p>
                            <div class="profile-detail-email">
                                <h2>Login Email:</h2>
                                <label for="profile-email">LKLliondance888@gmail.com</label>
                                <p class="p3">Your Login email can't be changed</p>
                            </div>
                            <div class="profile-detail-part1">
                                <label for="lbl-ld-name" class="lbl-ld-name"><b>Troupe Name:</b></label>
                                <input type="text" class="profile-name" value="LKL Lion Dance Troupe" readonly>
                            </div>
                            <br>
                            <div class="profile-detail-part2">
                                <label for="lbl-ld-district" class="lbl-ld-district"><b>District:</b></label>
                                <input type="text" class="profile-district" value="Segamat" readonly>
                            </div>
                            <br>
                            <div class="profile-detail-part3">
                                <label for="lbl-ld-state" class="lbl-ld-state"><b>State:</b></label>
                                <input type="text" class="profile-state" value="Johor" readonly>
                            </div>
                            <br>
                            <div class="profile-detail-part4">
                                <label for="lbl-ld-phone" class="lbl-ld-phone"><b>Phone No:</b></label>
                                <input type="text" class="profile-phone" value="012-3456789" readonly>
                            </div>
                            <br>
                            <br>           
                            <hr class="hr3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/script.js"></script>
</body>
</html>