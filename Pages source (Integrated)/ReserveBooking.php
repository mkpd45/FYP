<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Book Lion Dance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <link rel="stylesheet" type="text/css" href="font/flaticon.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/RB.css" />

  </head>
  <body>
  <?php 
session_start();

if(!empty($_SESSION['userRole'])){
  if($_SESSION['userRole'] == "Troupe")
      header("Location: TroupeProfile.php");
  else
      include "./userHeader.php";
      
}
else{
include "./header.php";
include "DBConfig.php";
}
?>

<?php
$fetchTInfo = "SELECT * FROM troupes WHERE troupeId = {$_GET['id']};";
$infoResult = mysqli_query($dbc, $fetchTInfo);
while($rowInfo = mysqli_fetch_assoc($infoResult))
{
?>
    <div class="container">
      <div class="book">
        <div class="description">
          <h1><strong>Book</strong> a lion dance show</h1>
            <div class="liondance-detail">
                <h1>Lion Dance Details</h1>
                <div class="liondance-detail-part1">
                    <label for="lbl-ld-name" class="lbl-ld-name"><b>Troupe Name:</b></label>
                    <label for="liondance-name" class="liondance-name"><?php echo $rowInfo['troupeName']; ?></label>
                </div>    
                    <br>
                <div class="liondance-detail-part2">
                    <label for="lbl-ld-district" class="lbl-ld-district"><b>District:</b></label>
                    <label for="liondance-district" class="liondance-district"><?php echo $rowInfo['city']; ?></label>
                </div>
                <br>
                <div class="liondance-detail-part3">
                    <label for="lbl-ld-state" class="lbl-ld-state"><b>State:</b></label>
                    <label for="liondance-state" class="liondance-state"><?php echo $rowInfo['troupeState']; ?></label>
                </div>
                <br>
                <div class="liondance-detail-part4">
                    <label for="lbl-ld-phone" class="lbl-ld-phone"><b>Phone No:</b></label>
                    <label for="liondance-phone" class="liondance-phone"><?php echo $rowInfo['contactNum']; ?></label>
                </div>
                <br>
                <div class="liondance-detail-part5">
                    <label for="lbl-ld-email" class="lbl-ld-email"><b>Email:</b></label>
                    <label for="liondance-email" class="liondance-email"><?php echo $rowInfo['email']; ?></label>
                </div>
            </div>
          <div class="quote">
            <p>
              Note: This is show the selected lion dance troupe information and customer information to clarify the overall reservation status.
            </p>
          </div> <?php }
          mysqli_free_result($infoResult); ?>

          <?php
          $fetchInvtInfo = "SELECT * FROM inviters WHERE inviterId = {$_SESSION['characterId']};";
          $result = mysqli_query($dbc, $fetchInvtInfo);
          while($row = mysqli_fetch_assoc($result))
          { ?>
          <div class="customer-detail">
            <h1>Customer Details</h1>
            <div class="customer-detail-part1">
                <label for="lbl-cs-name" class="lbl-cs-name"><b>customer Name:</b></label>
                <label for="customer-name" class="customer-name"><?php echo $row['lastname']." ".$row['firstname']; ?></label>
            </div>            
            <br>
            <div class="customer-detail-part2">
                <label for="lbl-cs-district" class="lbl-cs-district"><b>District:</b></label>
                <label for="customer-district" class="customer-district"><?php echo $row['city']; ?></label>
            </div>
            <br>
            <div class="customer-detail-part3">
                <label for="lbl-cs-state" class="lbl-cs-state"><b>State:</b></label>
                <label for="customer-state" class="customer-state"><?php echo $row['homeState']; ?></label>
            </div>
            <br>
            <div class="customer-detail-part4">
                <label for="lbl-cs-phone" class="lbl-cs-phone"><b>Phone No:</b></label>
                <label for="customer-phone" class="customer-phone"><?php echo $row['phoneNum']; ?></label>
            </div>
            <br>
            <div class="customer-detail-part5">
                <label for="lbl-cs-email" class="lbl-cs-email"><b>Email:</b></label>
                <label for="customer-email" class="customer-email"><?php echo $row['email']; ?></label>
            </div>
        </div>
        <?php }
        mysqli_free_result($result);
        
        ?>
        </div>
        <div class="form">
          
          <span class="msg" id="typeMsg"></span>
            <div class="inpbox full">
              <select class="performance-type" id="typeSelect" onchange=getService()>
                    <option value="none">Select Performance Type</option>
                    <?php 
                          $fetchTypes = "SELECT P.performType FROM performances P, troupes T 
                                         WHERE T.troupeId = P.troupeId AND P.troupeId = {$_GET['id']};";

                            $typesResult = mysqli_query($dbc, $fetchTypes);
                            while($typeRow = mysqli_fetch_assoc($typesResult)){
                              echo "<option value='{$typeRow['performType']}'>{$typeRow['performType']}</option>";
                            }
                            mysqli_free_result($typesResult);
                    ?>
              </select>
            </div>
            <span class="msg" id="serviceMsg"></span>
            <div class="inpbox full">
                <select class="performance-service" id="serviceSelect" onchange=getPrice() disabled>
                    <option value="none">Select Performance Service</option>
                </select>
            </div>
            <span class="msg" id="dateMsg"></span>
            <div class="inpbox">
              <input type="date" id="dateReserve" placeholder="Date" min="<?php echo(date("Y-m-d",strtotime("+2 week"))); ?>" max="<?php echo(date("Y-m-d",strtotime("+3 months"))); ?>">          
            </div>
            <span class="msg" id="timeMsg"></span>
            <div class="inpbox">
                <select class="Time" id="time">
                        <option value="none">Select a time</option>
                        <option value="Morning">Morning (9:00AM - 11:00AM)</option>
                        <option value="Afternoon">Afternoon (12:00PM - 2:00PM)</option>
                        <option value="Everning">Everning (3:00PM - 5:00PM)</option>
                        <option value="Night">Night (7:00PM - 9:00PM)</option>
                </select>
            </div>
            <span class="msg" id="stateMsg"></span>
            <div class="inpbox">
                <select class="state" id="state">
                    <option value="none">Select state</option>
                    <option value="johor">Johor</option>
                    <option value="kedah">Kedah</option>
                    <option value="kelantan">Kelantan</option>
                    <option value="malacca">Malacca</option>
                    <option value="negerisembilan">Negeri Sembilan</option>
                    <option value="pahang">Pahang</option>
                    <option value="perak">Perak</option>
                    <option value="perlis">Perlis</option>
                    <option value="sabah">Sabah</option>
                    <option value="sarawak">Sarawak</option>
                    <option value="selangor">Selangor</option>
                    <option value="terrengganu">Terrengganu</option>
                </select>
            </div>
            <span class="msg" id="districtMsg"></span>
            <div class="inpbox">
                <select class="district" id="district">
                        <option value="none">Select district</option>
                        <option value="segamat">Segamat</option>
                        <option value="kedah"></option>
                        <option value="kelantan"></option>
                        <option value="malacca"></option>
                        <option value="negerisembilan"></option>
                        <option value="pahang"></option>
                        <option value="perak"></option>
                        <option value="perlis"></option>
                        <option value="sabah"></option>
                        <option value="sarawak"></option>
                        <option value="selangor"></option>
                        <option value="terrengganu"></option>
                    </select>
            </div>
            <span class="msg" id="addressMsg"></span>
                <textarea name="address" class="address" cols="40" rows="4" placeholder="Address (be specific*)" id="address"></textarea>
            <div class="inpbox full">
              <div class="inrbox">
                <span>Price:</span>
                <h2 id="performPrice">RM </h2>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="popup1 center">
                <div class="icon">
                    <i class="fa fa-check" id="tick"></i>
                </div>
                <div class="title">
                    Successfully!!
                </div>
<div class="description1">
                    You had already make an reservation as well. Wait for the troupe reposnse. Remember to check your booking on "My Booking". Once anything update the notification will pop up.
                </div>
<div class="dismiss-btn">
                    <button id="dismiss-popup-btn">
                        Dismiss
                    </button>
                </div>
            </div>
            <div class="center">
                <button id="open-popup-btn" class="subt" onclick=completeReservation()>
                    Submit
                </button>
            </div>
            <button class="rst">Reset</button>
    <?php include "./footer.php" ?>
  </body>
</html>

<script>
  function getService(){
    var type = document.getElementById("typeSelect").value;
    if(type != "none"){
    var xmlhttp=new XMLHttpRequest();
                xmlhttp.onreadystatechange=function() {
                    if (this.readyState==4 && this.status==200) {
                    document.getElementById("serviceSelect").innerHTML=this.responseText;
                    }
                }
                xmlhttp.open("GET","ajaxSrvcSelection.php?type="+type+"&id="+<?php echo $_GET['id'] ?>+"",true);
                xmlhttp.send();
    document.getElementById("serviceSelect").disabled = false;
  }
    else{
      document.getElementById("serviceSelect").disabled = true;
      document.getElementById("serviceSelect").value = "none";
      document.getElementById("performPrice").innerHTML = "RM "
    }
  }

  function getPrice(){
    if(document.getElementById("serviceSelect").value != "none")
    document.getElementById("performPrice").innerHTML = "RM " + document.getElementById("serviceSelect").value;
    else
    document.getElementById("performPrice").innerHTML = "RM "
  }

  function completeReservation(){
    $("#typeMsg").html("");
    $("#serviceMsg").html("");
    $("#dateMsg").html("");
    $("#timeMsg").html("");
    $("#stateMsg").html("");
    $("#districtValue").html("");
    $("#addressMsg").html("");

    var bool = 1;

    var typeValue = $("#typeSelect").val();
    var serviceValue = $("#serviceSelect").val();
    var dateValue = $("#dateReserve").val();
    var timeValue = $("#time").val();
    var stateValue = $("#state").val();
    var districtValue = $("#district").val();
    var addressValue = $("#address").val();

    if(typeValue == "none")
   { $("#typeMsg").html("Please select the performance type.");
    bool = 0;}

    if(serviceValue == "none")
    {$("#serviceMsg").html("Please select the performance service.");
    bool = 0;}

    if(dateValue == "")
   { $("#dateMsg").html("Please select the performance date.");
    bool = 0;}

    if(timeValue == "none")
   { $("#timeMsg").html("Please select the performance time.");
    bool = 0;}

    if(stateValue == "none")
   { $("#stateMsg").html("Please select the state of performance location.");
    bool = 0;}

    if(districtValue == "none")
    {$("#districtMsg").html("Please select the district of performance location.");
    bool = 0;}

    if(addressValue == "")
    {$("#addressMsg").html("Please select the address of performance location.");
    bool = 0;}
    if(bool == 1){
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("POST","ajaxCreateReserv.php",false);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("troupeId="+<?php echo $_GET['id'] ?>+"&inviterId="+<?php echo $_SESSION['characterId']?>+
                "&performDate="+$("#dateReserve").val()+"&performTime="+$("#time").val()+"&performState="+
                 $("#state").val()+"&performDistrict="+$("#district").val()+"&performAddress="+$("#address").val()+"");
    if(xmlhttp.responseText == "Success"){
      document.getElementsByClassName("popup1")[0].classList.add("active");
      document.getElementById("open-popup-btn").disabled = true;
    }
      else
      alert(xmlhttp.responseText);
  }

      document.getElementById("dismiss-popup-btn").addEventListener("click", function(){
      document.getElementsByClassName("popup1")[0].classList.remove("active");
      });
  }
</script>