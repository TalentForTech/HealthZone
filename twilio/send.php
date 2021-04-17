<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
include_once 'dbh.php';

// Your Account SID and Auth Token from twilio.com/console
$account_sid = '';
$auth_token = '';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+12242880257";

$client = new Client($account_sid, $auth_token);

// $number = array("+918093737602", "+918093737602");
// $arrlength = count($number);

$query = 'SELECT * FROM phone';

$result = mysqli_query($conn,$query);

    while($row = mysqli_fetch_assoc($result)){
	   	$client->messages->create(
    // Where to send a text message (your cell phone?)
    		$row['number'],
		    array(
		        'from' => $twilio_number,
		        'body' => 'Hey, Please help your friend'.$row['name'].'.He is in danger'
		    )
		);
	}
	header("location:../dashboard.php");

?>