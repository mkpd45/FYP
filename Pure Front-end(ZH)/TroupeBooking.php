<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troupe Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/troupebooking.css">
</head>
<body>
<?php
     session_start();
?>
<header class="header">    
    <span id="troupe-booking">Booking List</span>
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
    <a href="#" class="menu">Notification</a>
    <a href="TroupeContact.php" class="menu">Contact Us</a>
    </div>
</div>
<div class="ajax" id="ajax">
    <div class="right-side">
            <div class="navi">
                <ul>
                    <li onclick="tabs(0)" class="user-booking active">Booking</li>
                    <li onclick="tabs(1)" class="user-history">History</li>
                </ul>
            </div>
        <div class="profile-body">
            <div class="profile-booking tab">
                <ul>
                    <li onclick="tabs(2)" class="all active">All</li>
                    <li onclick="tabs(3)" class="pending">Pending</li>
                    <li onclick="tabs(4)" class="accepted">Accepted</li>
                    <li onclick="tabs(5)" class="canceled">Canceled</li>
                </ul>
            </div>
            <div class="profile-history tab">
                <div class="nav1">
                    <div class="row"><h1>History</h1>
                    <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <!-- customer image -->
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <!-- customer image -->
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="profile-sub-body">
                <div class="profile-all tab">
                    <div class="right-side">
                    <div class="nav1">
                        <div class="row"><h1>All</h1>
                        <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <!-- customer image -->
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <!-- customer image -->
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="profile-pending tab">
                    <div class="nav1">
                        <div class="row"><h1>Pending</h1>
                        <a href="#"  onclick="loadDoc2()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <!-- customer image -->
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc2()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc2()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc2()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc2()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <!-- customer image -->
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                        </div>
                    </div>
                </div>
                <div class="profile-accepted tab">
                <div class="nav1">
                        <div class="row"><h1>Accepted</h1>
                        <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <!-- customer image -->
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <!-- customer image -->
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                        </div>
                    </div>
                </div>
                <div class="profile-canceled tab">
                <div class="nav1">
                        <div class="row"><h1>Canceled</h1>
                        <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <!-- customer image -->
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"  onclick="loadDoc()">
                        <div class="column">
                            <div class="grid-item">
                                <div class="content-1">
                                    <!-- customer image -->
                                    <img src="Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-2">
                                    <h2>Customer Name</h2><br><br><br>
                                    <label for="cust-name">Low Kuan Le</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-3">
                                    <h2>Performance Type</h2><br><br><br>
                                    <label for="cust-type">Cai Qing Lion dance</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-4">
                                    <h2>Performance service</h2><br><br><br>
                                    <label for="cust-service">Lion Dance Performance For Wedding Ceremony</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-5">
                                    <h2>Booking date</h2><br><br><br>
                                    <label for="cust-date">09/11/2021</label>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="content-6">
                                    <h2>Booking Venue</h2><br><br><br>
                                    <label for="cust-address">No.150, Jalan Wang Ah Fok, Taman Wang Ah Fok, 80000, Segamat Johor.</label>
                                </div>
                            </div>
                        </div>
                    </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<script src="js/script.js"></script>
<script>
    function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "TroupeBookingDetail.php", true);
  xhttp.send();
}

function loadDoc1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "TroupeBooking.php", true);
  xhttp.send();
}

function loadDoc2() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "PendingPage.php", true);
  xhttp.send();
}
</script>
</body>
</html>