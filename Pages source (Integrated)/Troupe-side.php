<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/troupe_side.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".icon_wrap").click(function(){
			  $(this).parent().toggleClass("active");
			  $(".notifications").removeClass("active");
			});

			$(".notifications .icon_wrap").click(function(){
			  $(this).parent().toggleClass("active");
			});

			$(".show_all .link").click(function(){
			  $(".notifications").removeClass("active");
			  $(".popup").show();
			});

			$(".close").click(function(){
			  $(".popup").hide();
			});
		});
	</script>
</head>
<body>
<?php
     session_start();
    if(empty($_SESSION['userRole']) || $_SESSION['userRole'] != "Troupe")
    header("Location: Home.php");


     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        session_unset();
        header("Location: Home.php");
    }
    include "DBConfig.php";
?>
<header class="header">    
    <span id="troupe-name">HOME</span>
    <div class="navbar_right">
      <div class="notifications">
        <div class="icon_wrap"><i class="far fa-bell"></i></div>        
            <div class="notification_dd">
                <ul class="notification_ul">
                    <li class="starbucks success">
                        <div class="notify_icon">
                            <span class="icon"></span>
                        </div>
                        <div class="notify_data">
                            <div class="title">
                                Lorem, ipsum dolor.  
                            </div>
                            <div class="sub_title">
                            Lorem ipsum dolor sit amet consectetur.
                        </div>
                        </div>
                        <div class="notify_status">
                            <p>Success</p>  
                        </div>
                    </li>  
                    <li class="baskin_robbins failed">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                                Lorem, ipsum dolor.  
                            </div>
                            <div class="sub_title">
                            Lorem ipsum dolor sit amet consectetur.
                        </div>
                        </div>
                        <div class="notify_status">
                            <p>Failed</p>  
                        </div>
                    </li> 
                    <li class="mcd success">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                                Lorem, ipsum dolor.  
                            </div>
                            <div class="sub_title">
                            Lorem ipsum dolor sit amet consectetur.
                        </div>
                        </div>
                        <div class="notify_status">
                            <p>Success</p>  
                        </div>
                    </li>  
                    <li class="pizzahut failed">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                                Lorem, ipsum dolor.  
                            </div>
                            <div class="sub_title">
                            Lorem ipsum dolor sit amet consectetur.
                        </div>
                        </div>
                        <div class="notify_status">
                            <p>Failed</p>  
                        </div>
                    </li> 
                    <li class="kfc success">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                                Lorem, ipsum dolor.  
                            </div>
                            <div class="sub_title">
                            Lorem ipsum dolor sit amet consectetur.
                        </div>
                        </div>
                        <div class="notify_status">
                            <p>Success</p>  
                        </div>
                    </li> 
                    <li class="show_all">
                        <p class="link">Show All Activities</p>
                    </li> 
                </ul>
            </div>        
        </div>
      </div>
    </div>

    <!-- <div class="popup">
    <div class="shadow"></div>
    <div class="inner_popup">
        <div class="notification_dd">
            <ul class="notification_ul">
                <li class="title">
                    <p>All Notifications</p>
                    <p class="close"><i class="fas fa-times" aria-hidden="true"></i></p>
                </li> 
                <li class="starbucks success">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Success</p>  
                    </div>
                </li>  
                <li class="baskin_robbins failed">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Failed</p>  
                    </div>
                </li> 
                <li class="mcd success">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Success</p>  
                    </div>
                </li>  
                <li class="baskin_robbins failed">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Failed</p>  
                    </div>
                </li> 
                <li class="pizzahut failed">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Failed</p>  
                    </div>
                </li> 
                <li class="kfc success">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Success</p>  
                    </div>
                </li>
            </ul>
        </div>
    </div>-->
  </div> 
</header>

<?php


$q = "SELECT troupeImage, troupeName, reserveMode FROM troupes WHERE troupeId = {$_SESSION['characterId']};";

$result = mysqli_query($dbc, $q);

while($row = mysqli_fetch_assoc($result)){
    
?>
<div class="side-menu-bar">
    <span style="display:block;font-size: 2rem; color:pink;text-align:center;font-weight: bold;">Welcome:</span>
    <img src="<?php echo $row['troupeImage']; ?>" width="180px" height="100px" alt="">
    <span style="display:block;font-size: 2rem; color:var(--pearl);text-align:center;"><?php echo $row['troupeName']; ?></span>
    <br>
    
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <div class="menu-container">
    <a href="TroupeHome.php" class="menu">Home</a>
    <a href="TroupeBooking.php" class="menu">Booking List</a>
    <a href="TroupeProfile.php" class="menu">Troupe Profile</a  >
    <a href="TroupeContact.php" class="menu">Contact Us</a>
    <h1>Active</h1>
    <p>(Turn on if get ready to reserve)</p>
    <label class="switch">
        <input type="checkbox"<?php if($row['reserveMode'] == "ON")
        echo "checked" ?>>
        <span class="slider round"></span>
    </label>
    <?php }
    mysqli_free_result($result); ?>
    </div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"><a class="menu" id="logout"><button type="submit" style="color:#FFEFD5;background-color:transparent;font-size:2.5rem">Logout</button></a></form>
    
</div>

<script src="../js/script.js"></script>
</body>
</html>