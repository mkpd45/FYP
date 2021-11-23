<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/adminheader.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".profile .icon_wrap").click(function(){
			  $(this).parent().toggleClass("active");
			  $(".notifications").removeClass("active");
			});

			$(".notifications .icon_wrap").click(function(){
			  $(this).parent().toggleClass("active");
			   $(".profile").removeClass("active");
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

<div class="wrapper">
  <div class="navbar">
    <div class="navbar_left">
      <div class="logo">
        <a href="AdminHome.php">Malaysia Lion Dance System (MLDS)</a>
      </div>
    </div>

    <nav class="navbar1">
        <a href="AdminTroupe.php">Lion Dance Troupe</a>
        <a href="Feedback&Application.php">Feedback & Applications</a>
    </nav>

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
      <div class="profile">
        <div class="icon_wrap">
          <img src="Assets/Images/Web/admin1.png" alt="profile_pic">
          <span class="name">John Alex</span>
          <i class="fas fa-chevron-down"></i>
        </div>

        <div class="profile_dd">
          <ul class="profile_ul">
            <li><a class="logout" href="#"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
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
    </div>
  </div>
  
</div>

</body>
</html>