<?php
$bool = require_once 'C:\Users\Acer\vendor\autoload.php';
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
        
?>