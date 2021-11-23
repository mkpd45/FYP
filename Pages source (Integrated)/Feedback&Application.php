<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Feedback & Applications</title>
<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


<!--custom css file link-->
<link rel="stylesheet" href="css/adminfeedback&app.css">

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
            <div class="column" style="background-color:#ccc;">
                <h3>Troupe Name: <label for="troupe-name">LKL Lion Dance Troupe</label></h3>
                <p class="troupe-email"><b>Email: </b><label for="troupe-email" class="troupe-email">LKLliondance888@gmail.com</label></p>
                <p><b>Address: </b><label for="troupe-address">Segamat, Johor</label></p>
                <button onclick="popup()" class="btn">Read More</button>
            </div>
            <div class="column" style="background-color:#ccc;">
                <h3>Troupe Name: <label for="troupe-name">LKL Lion Dance Troupe</label></h3>
                <p class="troupe-email"><b>Email: </b><label for="troupe-email" class="troupe-email">LKLliondance888@gmail.com</label></p>
                <p><b>Address: </b><label for="troupe-address">Segamat, Johor</label></p>
                <button onclick="popup()" class="btn">Read More</button>
            </div>
            <div class="column" style="background-color:#ccc;">
                <h3>Troupe Name: <label for="troupe-name">LKL Lion Dance Troupe</label></h3>
                <p class="troupe-email"><b>Email: </b><label for="troupe-email" class="troupe-email">LKLliondance888@gmail.com</label></p>
                <p><b>Address: </b><label for="troupe-address">Segamat, Johor</label></p>
                <button onclick="popup()" class="btn">Read More</button>
            </div>
            <div class="column" style="background-color:#ccc;">
                <h3>Troupe Name: <label for="troupe-name">LKL Lion Dance Troupe</label></h3>
                <p class="troupe-email"><b>Email: </b><label for="troupe-email" class="troupe-email">LKLliondance888@gmail.com</label></p>
                <p><b>Address: </b><label for="troupe-address">Segamat, Johor</label></p>
                <button onclick="popup()" class="btn">Read More</button>
            </div>
        </div>
    </div>
</div>
<div class="backdrop">
                  <div id="popdiv">
                      <label class="close-btn fas fa-times" onclick="popout()" title="close"></label>
                      <div class="text">
                          Troupe Application
                      </div>
                          <form action="#">
                          <div class="data">
                              <label><b>Troupe Name: </b></label>
                              <label for="troupe-name">LKL Lion Dance Troupe</label>
                          </div>
                          <div class="data">
                              <label><b>Email: </b></label>
                              <label for="troupe-email" class="troupe-email">LKLliondance888@gmail.com</label>
                          </div>
                          <div class="data">
                              <label><b>Phone No: </b></label>
                              <label for="troupe-phone">012-3456789</label>
                          </div>
                          <div class="data">
                              <label><b>Address: </b></label>
                              <label for="troupe-address">Segamat, Johor</label>
                          </div>
                          <div class="data">
                              <label><b>Notes: </b></label>
                              <label for="troupe-notes">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam harum officiis doloremque modi voluptatibus est, at odit. At, voluptatibus totam.</label>
                          </div>
                          <!-- supporting document view -->
                          <div class="data" style="margin-top:40px">
                              <label><b>Support Document: </b></label>
                              <button class="btn1">Open File</button>
                          </div>
                          </form>
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
      <div class="column" style="background-color:#ccc;">
        <h3>Username: <label for="name">Low Kuan Le</label></h3>
        <p class="troupe-email"><b>Email: </b><label for="email" class="email">LowKuanLe@gmail.com</label></p>
        <p><b>Subject: </b><label for="subject">Regreting System</label></p>
        <button onclick="popup1()" class="btn">Read More</button>                
      </div>
      <div class="column" style="background-color:#ccc;">
        <h3>Username: <label for="name">Low Kuan Le</label></h3>
        <p class="troupe-email"><b>Email: </b><label for="email" class="email">LowKuanLe@gmail.com</label></p>
        <p><b>Subject: </b><label for="subject">Regreting System</label></p>
        <button onclick="popup1()" class="btn">Read More</button>
      </div>
      <div class="column" style="background-color:#ccc;">
        <h3>Username: <label for="name">Low Kuan Le</label></h3>
        <p class="troupe-email"><b>Email: </b><label for="email" class="email">LowKuanLe@gmail.com</label></p>
        <p><b>Subject: </b><label for="subject">Regreting System</label></p>
        <button onclick="popup1()" class="btn">Read More</button>
      </div>
        <div class="column" style="background-color:#ccc;">
        <h3>Username: <label for="name">Low Kuan Le</label></h3>
        <p class="troupe-email"><b>Email: </b><label for="email" class="email">LowKuanLe@gmail.com</label></p>
        <p><b>Subject: </b><label for="subject">Regreting System</label></p>
        <button onclick="popup1()" class="btn">Read More</button>
      </div>
    </div>
  </div>
</div>
<div class="backdrop1">
                  <div id="popdiv">
                      <label class="close-btn fas fa-times" onclick="popout1()" title="close"></label>
                      <div class="text">
                          Add new lion dance
                      </div>
                          <form action="#">
                          <div class="data">
                              <label><b>Username: </b></label>
                              <label for="name">Low Kuan Le</label>
                          </div>
                          <div class="data">
                              <label><b>Email: </b></label>
                              <label for="email" class="email">LowKuanLe@gmail.com</label>
                          </div>
                          <div class="data">
                              <label><b>Phone No: </b></label>
                              <label for="phone" class="phone">012-3456789</label>
                          </div>
                          <div class="data">
                              <label><b>Subject: </b></label>
                              <label for="subject" class="subject">Regreting System</label>
                          </div>
                          <div class="data">
                              <label><b>Message: </b></label>
                              <label for="message">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam harum officiis doloremque modi voluptatibus est, at odit. At, voluptatibus totam.</label>
                          </div>
                          </form>                          
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