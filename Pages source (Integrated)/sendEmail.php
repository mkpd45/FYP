<?php

function sendEmail($receiver, $subject, $intention){

    $bool = require '..\vendor\autoload.php';

    if($bool) 
    { 
        $dbconn = mysqli_connect ("localhost", 'root', '', 'projectdb') OR 
        die ('Could not connect to MySQL: '.mysqli_connect_error() );  
        $randomString;
        $emailMessage = "This is the plain text body of the message.";
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
            $message->setSubject($subject);
            
            // Set the "From address"
            $message->setFrom(['mldsorganization@gmail.com' => 'MLDS']);
            
            // Set the "To address" [Use setTo method for multiple recipients, argument should be array]
            $message->addTo($receiver,'Dear sir/madam');
            
            // Add "CC" address [Use setCc method for multiple recipients, argument should be array]
            // $message->addCc('leezh-jm18@student.tarc.edu.my', 'Zhi Hao');
            
            // Add "BCC" address [Use setBcc method for multiple recipients, argument should be array]
            // $message->addBcc('kuanlelow@gmail.com', 'Low Kuan Le');
            
            // Add an "Attachment" (Also, the dynamic data can be attached)
            // $attachment = Swift_Attachment::fromPath('example.xls');
            // $attachment->setFilename('report.xls');
            // $message->attach($attachment);
            
            // Add inline "Image"
            $inline_attachment = Swift_Image::fromPath('../Assets/Images/Troupe/liondance1.jpg');
            $cid = $message->embed($inline_attachment);
            
            if($intention = "forPassw"){
                $length = 8;
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
            $hashed = password_hash($randomString, PASSWORD_DEFAULT);
            $updatePass = "UPDATE users SET password = '$hashed' WHERE username = '$receiver'";
            if(mysqli_query($dbconn,$updatePass))
            $emailMessage = "Your new password is: $randomString";
            }
            
            // Set the plain-text "Body"
            $message->setBody("$emailMessage\nThanks,\nAdmin");
            //Or
            // Set a "HTML Body"
            $message->addPart('<table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
            <tr>
                <td style="padding:0;background:#70bbd9;">
                    Row 1
                </td>
            </tr>
            <tr>
                <td style="padding:0;">
                    Row 2
                </td>
            </tr>
            <tr>
                <td style="padding:0;background:#ee4c50;">
                    Row 3
                </td>
            </tr>
        </table>', 'text/html');
            
            //Choose either one and only one to be the email content. 

            // Send the message
            $result = $mailer->send($message);
            return true;
        } 
            catch (Exception $e) {
            echo $e->getMessage();
            }
    }
}

?>