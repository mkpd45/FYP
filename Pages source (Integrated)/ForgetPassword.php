<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Forget Password</title>
<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--custom css file link-->
<link rel="stylesheet" href="../css/FP.css">

</head>

<body>
    <?php 
    
    include "./header.php"; 

   include "DBConfig.php";
    
    if(isset($_POST['submit_btn'])){
        $email = $_POST['email'];

        $query = "SELECT * FROM users WHERE username = '$email'";
        $result = mysqli_query($dbc, $query); 
        if ($row = mysqli_fetch_array($result)){
            $username = $row['username'];
            if($username == $email)
            {
                $bool = require_once '../vendor/autoload.php';
                if($bool) 
                    echo "vendor loaded"; 
                try {
                    // Create the SMTP Transport
                    $transport = (new Swift_SmtpTransport('smtp.gmail.com',465,'ssl'))
                        ->setUsername('mldsorganization@gmail.com')
                        ->setPassword('mlds2021');
                
                    // Create the Mailer using your created Transport
                    $mailer = new Swift_Mailer($transport);
                
                    // Create a message
                    $message = new Swift_Message();
                
                    // Set a "subject"
                    $message->setSubject('Subject');
                
                    // Set the "From address"
                    $message->setFrom(['mldsorganization@gmail.com' => 'MLDS']);
                
                    // Set the "To address" [Use setTo method for multiple recipients, argument should be array]
                    $message->addTo('kuanle4586@gmail.com','Kuan Le');
                
                    // Add "CC" address [Use setCc method for multiple recipients, argument should be array]
                    $message->addCc('recipient@gmail.com', 'recipient name');
                
                    // Add "BCC" address [Use setBcc method for multiple recipients, argument should be array]
                    $message->addBcc('recipient@gmail.com', 'recipient name');
                
                    // Add an "Attachment" (Also, the dynamic data can be attached)
                    // $attachment = Swift_Attachment::fromPath('example.xls');
                    // $attachment->setFilename('report.xls');
                    // $message->attach($attachment);
                
                    // Add inline "Image"
                    // $inline_attachment = Swift_Image::fromPath('nature.jpg');
                    // $cid = $message->embed($inline_attachment);
                
                    // Set the plain-text "Body"
                    $message->setBody("This is the plain text body of the message.\nThanks,\nAdmin");
                
                    // Set a "Body"
                    $message->addPart('This is the HTML version of the message.<br>Example of inline image:<br><br>Thanks,<br>Admin', 'text/html');
                
                    // Send the message
                    $result = $mailer->send($message);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
                    $message1 = "Please Check Your Email";
                    echo "<script type='text/javascript'>alert('$message1');</script>";                

            }

        }
        else
        {
            $message2 = "This email account is not registered yet";
            echo "<script type='text/javascript'>alert('$message2');</script>";
        }
    }
    
    ?>

<h1 class="heading1">
        <span>f</span>
        <span>o</span>
        <span>r</span>
        <span>g</span>
        <span>e</span>
        <span>t</span>
        <span class="space"></span>
        <span>p</span>
        <span>a</span>
        <span>s</span>
        <span>s</span>
        <span>w</span>
        <span>o</span>
        <span>r</span>
        <span>d</span>
</h1>

<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label>Email:</label><br>
        <input type="text" name="email" placeholder="enter your registed email" class="box"><br>
        <input type="submit" name="submit_btn" value="Submit" class="btn">
    </form>
</div>

</body>