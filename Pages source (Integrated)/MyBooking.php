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
                        
                        <a href="#"  onclick="loadDoc2()">
                            <div class="column">
                                <div class="grid-item">
                                    <div class="content-1">
                                        <img src="../Assets/Images/Web/home-bg1.png" width="100px" alt="">
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="content-2">
                                        <h2>Troupe Name</h2><br><br><br>
                                        <label for="troupe-name">LKL Lion Dance Troupe</label>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="content-3">
                                        <h2>Phone No</h2><br><br><br>
                                        <label for="troupe-name">012-3456789</label>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="content-4">
                                        <h2>Booking Date</h2><br><br><br>
                                        <label for="troupe-name">09/11/2021</label>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-sub-body">
                <div class="profile-all tab">
                    <div class="right-side">
                    <div class="nav1">
                        <div class="row"><h1>All</h1>
                        <?php
                        session_start();
                        include "DBConfig.php";
                        $fetchQ = "SELECT R.reservationID, T.troupeImage, T.troupeName, T.contactNum, R.performDate 
                                   FROM reservations R, troupes T
                                   WHERE R.troupeId = T.troupeId AND R.inviterId = {$_SESSION['characterId']};";
                        
                        $allResult = mysqli_query($dbc, $fetchQ);

                        while($allRow = mysqli_fetch_assoc($allResult)){
                    echo "<a href='#'  onclick='loadDoc2({$allRow['reservationID']})'>
                             <div class='column'>
                                 <div class='grid-item'>
                                     <div class='content-1'>
                                         <img src='{$allRow['troupeImage']}' width='100px' alt=''>
                                     </div>
                                 </div>
                                 <div class='grid-item'>
                                     <div class='content-2'>
                                         <h2>Troupe Name</h2><br><br><br>
                                         <label for='troupe-name'>{$allRow['troupeName']}</label>
                                     </div>
                                 </div>
                                 <div class='grid-item'>
                                     <div class='content-3'>
                                         <h2>Phone No</h2><br><br><br>
                                         <label for='troupe-name'>{$allRow['contactNum']}</label>
                                     </div>
                                 </div>
                                 <div class='grid-item'>
                                     <div class='content-4'>
                                         <h2>Booking Date</h2><br><br><br>
                                         <label for='troupe-name'>{$allRow['performDate']}</label>
                                     </div>
                                 </div>
                             </div>
                         </a>";
                        }
                        mysqli_free_result($allResult);
                        ?>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="profile-pending tab">
                    <div class="nav1">
                        <div class="row"><h1>Pending</h1>
                        <?php
                        $fetchQ = "SELECT R.reservationID, T.troupeImage, T.troupeName, T.contactNum, R.performDate 
                                   FROM reservations R, troupes T
                                   WHERE R.troupeId = T.troupeId AND R.status = 'Pending' AND R.inviterId = {$_SESSION['characterId']};";
                        
                        $pendingResult = mysqli_query($dbc, $fetchQ);

                        while($pendingRow = mysqli_fetch_assoc($pendingResult)){
                    echo "<a href='#'  onclick='loadDoc2({$pendingRow['reservationID']})'>
                             <div class='column'>
                                 <div class='grid-item'>
                                     <div class='content-1'>
                                         <img src='{$pendingRow['troupeImage']}' width='100px' alt=''>
                                     </div>
                                 </div>
                                 <div class='grid-item'>
                                     <div class='content-2'>
                                         <h2>Troupe Name</h2><br><br><br>
                                         <label for='troupe-name'>{$pendingRow['troupeName']}</label>
                                     </div>
                                 </div>
                                 <div class='grid-item'>
                                     <div class='content-3'>
                                         <h2>Phone No</h2><br><br><br>
                                         <label for='troupe-name'>{$pendingRow['contactNum']}</label>
                                     </div>
                                 </div>
                                 <div class='grid-item'>
                                     <div class='content-4'>
                                         <h2>Booking Date</h2><br><br><br>
                                         <label for='troupe-name'>{$pendingRow['performDate']}</label>
                                     </div>
                                 </div>
                             </div>
                         </a>";
                        }
                        mysqli_free_result($pendingResult);
                        ?>
                        </div>
                    </div>
                </div>
                <div class="profile-accepted tab">
                <div class="nav1">
                        <div class="row"><h1>Accepted</h1>
                        <?php
                        $fetchQ = "SELECT R.reservationID, T.troupeImage, T.troupeName, T.contactNum, R.performDate 
                                   FROM reservations R, troupes T
                                   WHERE R.troupeId = T.troupeId AND R.status = 'Accepted' AND R.inviterId = {$_SESSION['characterId']};";
                        
                        $acceptResult = mysqli_query($dbc, $fetchQ);

                        while($acceptRow = mysqli_fetch_assoc($acceptResult)){
                    echo "<a href='#'  onclick='loadDoc2({$acceptRow['reservationID']})'>
                             <div class='column'>
                                 <div class='grid-item'>
                                     <div class='content-1'>
                                         <img src='{$acceptRow['troupeImage']}' width='100px' alt=''>
                                     </div>
                                 </div>
                                 <div class='grid-item'>
                                     <div class='content-2'>
                                         <h2>Troupe Name</h2><br><br><br>
                                         <label for='troupe-name'>{$acceptRow['troupeName']}</label>
                                     </div>
                                 </div>
                                 <div class='grid-item'>
                                     <div class='content-3'>
                                         <h2>Phone No</h2><br><br><br>
                                         <label for='troupe-name'>{$acceptRow['contactNum']}</label>
                                     </div>
                                 </div>
                                 <div class='grid-item'>
                                     <div class='content-4'>
                                         <h2>Booking Date</h2><br><br><br>
                                         <label for='troupe-name'>{$acceptRow['performDate']}</label>
                                     </div>
                                 </div>
                             </div>
                         </a>";
                        }
                        mysqli_free_result($acceptResult);
                        ?>
                        
                        </div>
                    </div>
                </div>
                <div class="profile-canceled tab">
                <div class="nav1">
                        <div class="row"><h1>Canceled</h1>
                        <?php
                        $fetchQ = "SELECT R.reservationID, T.troupeImage, T.troupeName, T.contactNum, R.performDate 
                                   FROM reservations R, troupes T
                                   WHERE R.troupeId = T.troupeId AND R.status = 'Cancel' AND R.inviterId = {$_SESSION['characterId']};";
                        
                        $cancelResult = mysqli_query($dbc, $fetchQ);

                        while($cancelRow = mysqli_fetch_assoc($cancelResult)){
                    echo "<a href='#'  onclick='loadDoc2({$cancelRow['reservationID']})'>
                             <div class='column'>
                                 <div class='grid-item'>
                                     <div class='content-1'>
                                         <img src='{$cancelRow['troupeImage']}' width='100px' alt=''>
                                     </div>
                                 </div>
                                 <div class='grid-item'>
                                     <div class='content-2'>
                                         <h2>Troupe Name</h2><br><br><br>
                                         <label for='troupe-name'>{$cancelRow['troupeName']}</label>
                                     </div>
                                 </div>
                                 <div class='grid-item'>
                                     <div class='content-3'>
                                         <h2>Phone No</h2><br><br><br>
                                         <label for='troupe-name'>{$cancelRow['contactNum']}</label>
                                     </div>
                                 </div>
                                 <div class='grid-item'>
                                     <div class='content-4'>
                                         <h2>Booking Date</h2><br><br><br>
                                         <label for='troupe-name'>{$cancelRow['performDate']}</label>
                                     </div>
                                 </div>
                             </div>
                         </a>";
                        }
                        mysqli_free_result($cancelResult);
                        ?>
                        </div>
                    </div>
                </div>
            </div>