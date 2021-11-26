<link rel="stylesheet" href="../css/hello.css">
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && !(isset($_POST['update_btn'])) && !(isset($_POST['discard_btn']))) {
  session_unset();
  header("Location: Home.php");
} 
include "DBConfig.php";

$fetchQ = "SELECT title, body, theStatus, purpose FROM notifications WHERE receiverId = '{$_SESSION['characterId']}' AND characterRole = 'Inviter' AND theStatus = 'UNREAD';";

$result = mysqli_query($dbc, $fetchQ);

$notifyCount = mysqli_affected_rows($dbc);


?>

<div class="wrapper">
  <div class="navbar">
    <div class="navbar_left">
      <div class="logo">
      <a href="Home.php" class="logo"> <img src="../Assets/Images/Web/MLDS LOGO.png" height="100px" width="180px"></a>
      </div>
    </div>

    <nav class="navbar1">
        <a href="Home.php">Home</a>
        <a href="TroupeList.php">Troupe</a>
        <a href="Aboutus.php">About Us</a>
        <a href="ContactUs.php">Contact Us</a>
    </nav>

    <div class="navbar_right">
      <div class="notifications">
        <div class="icon_wrap"><i class="far fa-bell"></i></div>
        <span class="badge" id="badge"><?php if ($notifyCount > 0) echo $notifyCount; ?></span>
        <div class="notification_dd">
            <ul class="notification_ul">
                <?php 
                if ($notifyCount > 0) {
                while($row = mysqli_fetch_assoc($result)){
                    echo  "<li class='{$row['purpose']}'>
                    <div class='notify_icon'>
                        <span class='icon'></span>  
                    </div>
                    <div class='notify_data'>
                        <div class='title'>
                            {$row['title']}  
                        </div>
                        <div class='sub_title'>
                          {$row['body']}
                      </div>
                    </div>
                    <div class='notify_status'>
                        <p>Accepted</p>  
                    </div>
                </li>"; 
               
            }
            mysqli_free_result($result);
        } 
            if ($notifyCount < 1) 
            echo "<script>document.getElementById('badge').style.visibility = 'hidden'; </script>";
?>
                <li class="show_all">
                    <p class="link">Show All Activities</p>
                </li> 
            </ul>
        </div>
        
      </div>
      <div class="profile">
        <div class="icon_wrap">
          <img src="https://i.imgur.com/x3omKbe.png" alt="profile_pic">
          <span class="name"><?php echo  $_SESSION['name']; ?></span>
          <i class="fas fa-chevron-down"></i>
        </div>

        <div class="profile_dd">
          <ul class="profile_ul">
            <li class="profile_li"><a class="profile"><span class="picon"><i class="fas fa-user-alt"></i>
                </span>Profile</a>
              <a href="UserProfile.php"><div class="btn">My Account</div></a>
            </li>
            <li id="logout-button"><form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="logout"><a class="logout" name="logout"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a></form></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <div class="popup">
    <div class="shadow"></div>
    <div class="inner_popup">
        <div class="notification_dd">
            <ul class="notification_ul">
                <li class="title">
                    <p>All Notifications</p>
                    <p class="close"><i class="fas fa-times" aria-hidden="true"></i></p>
                </li> 
                <?php 
                if ($notifyCount > 0) {
                while($row = mysqli_fetch_assoc($result)){
                    echo  "<li class='{$row['purpose']}'>
                    <div class='notify_icon'>
                        <span class='icon'></span>  
                    </div>
                    <div class='notify_data'>
                        <div class='title'>
                            {$row['title']}  
                        </div>
                        <div class='sub_title'>
                          {$row['body']}
                      </div>
                    </div>
                    <div class='notify_status'>
                        <p>Accepted</p>  
                    </div>
                </li>"; 
               
            }
            
        } ?>
                
            </ul>
        </div>
    </div>
  </div>
  
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
            $(".profile .icon_wrap").click(function(){
            $(this).parent().toggleClass("active");
            $(".notifications").removeClass("active");
        });
        
        $(".notifications .icon_wrap").click(function(){
            $(this).parent().toggleClass("active");
            $(".profile").removeClass("active");
            $(".badge").hide();
        });
        
        $(".show_all .link").click(function(){
            $(".notifications").removeClass("active");
            $(".popup").show();
        });
        
        $(".close, .shadow").click(function(){
            $(".popup").hide();
        });

        $("#logout-button").click(function(){
            $("#logout").submit();
        });

  });

  
</script>