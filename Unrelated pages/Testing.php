<?php 
$_SESSION["UserID"] = "1234";
$_SESSION["Name"] = "Kuan Le";
echo $_SESSION["Name"];?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <title>FYP preparing</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/Testing.css"/>
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>
       function callJQuery(color){
   $(document).ready(function(){
             $("#id-scroll").css({"color":color});
     });
       }
   </script>
  
    <body>
        <?php
        /* $bool = require_once 'C:\Users\Acer\vendor\autoload.php';
        if($bool) 
            echo "vendor loaded"; 
        try {
    // Create the SMTP Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com',465,'ssl'))
        ->setUsername('lowkl-jm18@student.tarc.edu.my')
        ->setPassword('Goku1234.');
 
    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);
 
    // Create a message
    $message = new Swift_Message();
 
    // Set a "subject"
    $message->setSubject('Demo message using the SwiftMailer library.');
 
    // Set the "From address"
    $message->setFrom(['lowkl-jm18@student.tarc.edu.my' => 'Kuan Le']);
 
    // Set the "To address" [Use setTo method for multiple recipients, argument should be array]
    $message->addTo('kuanle4586@gmail.com','Kuan Le');
 
    // Add "CC" address [Use setCc method for multiple recipients, argument should be array]
    $message->addCc('recipient@gmail.com', 'recipient name');
 
    // Add "BCC" address [Use setBcc method for multiple recipients, argument should be array]
    $message->addBcc('recipient@gmail.com', 'recipient name');
 
    // Add an "Attachment" (Also, the dynamic data can be attached)
    $attachment = Swift_Attachment::fromPath('example.xls');
    $attachment->setFilename('report.xls');
    $message->attach($attachment);
 
    // Add inline "Image"
    $inline_attachment = Swift_Image::fromPath('nature.jpg');
    $cid = $message->embed($inline_attachment);
 
    // Set the plain-text "Body"
    $message->setBody("This is the plain text body of the message.\nThanks,\nAdmin");
 
    // Set a "Body"
    $message->addPart('This is the HTML version of the message.<br>Example of inline image:<br><br>Thanks,<br>Admin', 'text/html');
 
    // Send the message
    $result = $mailer->send($message);
} catch (Exception $e) {
  echo $e->getMessage();
}
        */
        ?>
        <div id="system-title" onclick=callJQuery("red") >Lion Dance Reservation web-application</div>
        <div class="animate-section">
            <a id="move" href="#id-scroll">move</a>
            <a id="swape" href="#">swape</a>
            <a id="transform" href="#">transform</a>
            <a id="nothing" href="#">nothing</a>
            <a id="extra" href="#">extra</a>
        </div>
        
        <div id="rotation">
            Nice
            <a>Good</a>
            <a>Goo</a>
            <a>God</a>
        </div>
        <div id="vuetest">
            <ol>
                <li>
                    {{products}}
                </li>
                <li><button onClick=promptUser() style="color:yellow;background-color:black;border-color: red">Testing</button>
                </li>
                <li><button onClick=callJQuery("blue") style="color:yellow;background-color:black;border-color: red">Change CSS by Jquery</button>
                </li>
            </ol>
        </div>
        <div>
            <form method="POST" action="TroupeSide.php?text=good&id=321">
                <input type="text" name="userID" placeholder="User ID"/>
                <input type="password" placeholder="Password"/>
                <input type="submit" value="Submit"/>
                <input type="reset" value="Reset" />
            </form>
        </div>
<!--        <div class="spacer s2"></div>
<div id="trigger" class="spacer s0"></div>
<div id="animate" class="box1 blue">
	<p>Now you see me...</p>
	<a href="#" class="viewsource">view source</a>
</div>
<div class="spacer s2"></div>
<script>
	// init controller
	var controller = new ScrollMagic.Controller();

	// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger"})
					// trigger a velocity opaticy animation
					.setVelocity("#animate", {opacity: 0}, {duration: 400})
					.addIndicators() // add indicators (requires plugin)
					.addTo(controller);
</script>-->
<iframe src="TestingAjax.php" height="600" width="900" title="Iframe Example" style="margin:12px"></iframe>

<?php                                                               //testing the connection between HTML and PHP
   include_once 'DBconfig.php';

  echo "<script>";
  echo      "$(document).ready(function(){";
  echo        "$('#id-scroll').hover(function(){";
  echo        "$('#id-scroll').css({'background-color':'yellow'})";
  echo  "})";
  echo "})";
  echo "</script>";
  echo "<div id='id-scroll'>Hello World. This is my final year project for my Bachelor Degree.</div>";

//Put variables in the URL
$value1 = "blue";
$value2 = "red";
echo "<form method='POST' action='TroupeSide.php?v1=${value1}&v2=${value2}'>";
echo "<input type='submit' value='Submit'>";
?>
<script>
    setTimeout(function(){
    $(document).ready(function(){
    $("div").remove();
  });,3000);</script>
    </body>
</html>
<script src="https://unpkg.com/vue"></script>
<script>
    const app = new Vue({
        el:"#vuetest",
        data:{
            products:"Gaming chair"
        }
    });

function promptUser(){
    var bool = prompt("Hello, you are tired", "Hero!");
    bool? window.location.href = 'https://www.facebook.com' : window.location.href = 'https://www.youtube.com';}
    </script>
    
    


