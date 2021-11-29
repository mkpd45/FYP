<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Feedback & Applications</title>
<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


<!--custom css file link-->
<link rel="stylesheet" href="../css/adminfeedback&app.css">

</head>

<body>
    
<?php include "./AdminHeader.php" ?>

<div class="container">
    <div class="nav1">
    <h2>Troupe Account Application</h2>
    <p>Click on a button to choose list view or grid view.</p>

    <div id="btnContainer">
        <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
        <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
    </div>
    <br>

        <div class="row">        
          <?php
            $dbc = @mysqli_connect("localhost","root","","projectdb");

            $query = "SELECT * FROM troupe_application";
            $result = mysqli_query($dbc, $query); 
            $num = mysqli_num_rows($result);
            while ($row = mysqli_fetch_array($result)){
              $troupeId = $row['troupeappId'];
          ?>
            <div class="column" style="background-color:#ccc;">
                <h3>Troupe Name: <label for="troupe-name"><?php echo "{$row['troupeappName']}"?></label></h3>
                <p class="troupe-email"><b>Email: </b><label for="troupe-email" class="troupe-email"><?php echo "{$row['troupeappEmail']}"?></label></p>
                <p><b>Address: </b><label for="troupe-address"><?php echo "{$row['troupeappAddress']}"?></label></p>
                <button onclick="popup()" class="btn">Read More</button>
            </div>
          <?php  }   ?>
        </div>
        
    </div>
</div>
<div class="backdrop">
                  <div id="popdiv">
                      <label class="close-btn fas fa-times" onclick="popout()" title="close"></label>
                      <div class="text">
                          Troupe Application
                      </div>
                      <?php
                          $dbc = @mysqli_connect("localhost","root","","projectdb");

                          $query = "SELECT * FROM troupe_application WHERE troupeappId = '$troupeId'";
                          $result = mysqli_query($dbc, $query); 
                          $num = mysqli_num_rows($result);
                          if ($row = mysqli_fetch_array($result)){
                      ?>
                          <form action="#">
                          <div class="data">
                              <label><b>Troupe Name: </b></label>
                              <label for="troupe-name"><?php echo "{$row['troupeappName']}"?></label>
                          </div>
                          <div class="data">
                              <label><b>Email: </b></label>
                              <label for="troupe-email" class="troupe-email"><?php echo "{$row['troupeappEmail']}"?></label>
                          </div>
                          <div class="data">
                              <label><b>Phone No: </b></label>
                              <label for="troupe-phone"><?php echo "{$row['troupeappPhone']}"?></label>
                          </div>
                          <div class="data">
                              <label><b>Address: </b></label>
                              <label for="troupe-address"><?php echo "{$row['troupeappAddress']}"?></label>
                          </div>
                          <div class="data">
                              <label><b>Notes: </b></label>
                              <label for="troupe-notes"><?php echo "{$row['troupeappMessage']}"?></label>
                          </div>
                          <!-- supporting document view -->
                          <div class="data" style="margin-top:40px">
                              <label><b>Support Document: </b></label>
                              <button class="btn1">Open File</button>
                          </div>
                          </form>
                        <?php  }   ?> 
                  </div>
                </div>

<div class="container2">
  <div class="nav1">
    <h2>User Get in touch</h2>
    <p>Click on a button to choose list view or grid view.</p>

    <div id="btnContainer">
        <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
        <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
    </div>
    <br>
    <div class="row">
    <?php
            $dbc = @mysqli_connect("localhost","root","","projectdb");

            $query = "SELECT * FROM feedback";
            $result = mysqli_query($dbc, $query); 
            $num = mysqli_num_rows($result);
            while ($row = mysqli_fetch_array($result)){
              $troupeId = $row['feedbackId'];
    ?>
      <div class="column" style="background-color:#ccc;">
        <h3>Username: <label for="name"><?php echo "{$row['feedbackName']}"?></label></h3>
        <p class="troupe-email"><b>Email: </b><label for="email" class="email"><?php echo "{$row['feedbackEmail']}"?></label></p>
        <p><b>Subject: </b><label for="subject"><?php echo "{$row['feedbackSubject']}"?></label></p>
        <button onclick="popup1()" class="btn">Read More</button>                
      </div>
    <?php  }   ?>
    </div>
  </div>
</div>
<div class="backdrop1">
                  <div id="popdiv">
                      <label class="close-btn fas fa-times" onclick="popout1()" title="close"></label>
                      <div class="text">
                          Feedback Details
                      </div>
                      <?php
                          $dbc = @mysqli_connect("localhost","root","","projectdb");

                          $query = "SELECT * FROM feedback WHERE feedbackId = '$troupeId'";
                          $result = mysqli_query($dbc, $query); 
                          $num = mysqli_num_rows($result);
                          if ($row = mysqli_fetch_array($result)){
                      ?>
                          <form action="#">
                          <div class="data">
                              <label><b>Username: </b></label>
                              <label for="name"><?php echo "{$row['feedbackName']}"?></label>
                          </div>
                          <div class="data">
                              <label><b>Email: </b></label>
                              <label for="email" class="email"><?php echo "{$row['feedbackEmail']}"?></label>
                          </div>
                          <div class="data">
                              <label><b>Phone No: </b></label>
                              <label for="phone" class="phone"><?php echo "{$row['feedbackPhone']}"?></label>
                          </div>
                          <div class="data">
                              <label><b>Subject: </b></label>
                              <label for="subject" class="subject"><?php echo "{$row['feedbackSubject']}"?></label>
                          </div>
                          <div class="data">
                              <label><b>Message: </b></label>
                              <label for="message"><?php echo "{$row['feedbackMessage']}"?></label>
                          </div>
                          </form>
                          <?php  }   ?>                    
                  </div>
                </div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

function popup(){
    $(".backdrop").fadeTo(200, 1);
}

function popout(){
    $(".backdrop").fadeOut(200);
}

function popup1(){
    $(".backdrop1").fadeTo(200, 1);
}

function popout1(){
    $(".backdrop1").fadeOut(200);
}

//   $(document).ready(function() {
//     $("#but1").click(function() {
//       $(".backdrop").fadeTo(200, 1);
//     });
//     $("#but2").click(function() {
//       $(".backdrop").fadeOut(200);
//     });
//     $("#but3").click(function() {
//       $(".backdrop").fadeTo(200, 1);
//     });
//     $("#but4").click(function() {
//       $(".backdrop").fadeOut(200);
//     });
//   });

</script>

</body>