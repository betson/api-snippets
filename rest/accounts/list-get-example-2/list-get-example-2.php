<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once('/path/to/twilio-php/Services/Twilio.php'); // Loads the library

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "AC32a3c49700934481addd5ce1659f04d2"; 
$token = "{{ auth_token }}"; 
$client = new Services_Twilio($sid, $token);

// Loop over the list of accounts and echo a property for each one
foreach ($client->accounts->getIterator(0, 50, array(
        "Status" => "active"
    )) as $account
) {
    echo $account->friendly_name;
}