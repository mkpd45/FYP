<?php

require_once 'C:\Users\Acer\vendor\autoload.php';

use Twilio\Rest\Client;

// Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
// $sid = getenv("TWILIO_ACCOUNT_SID");
// $token = getenv("TWILIO_AUTH_TOKEN");
$sid = "ACbe9e27627c06a4a0f6a641bdc2b7c762";
$token = "f540403477b5a4f7717305196be80c1a";
$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create("+60167493807", // to
                           [
                               "body" => "Subway oh yeahh, subway de dian",
                               "from" => "+19295171115"
                           ]
                  );

print($message->sid);

?>