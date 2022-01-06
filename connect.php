<?php
require __DIR__ . '\library\twilio-php\src\Twilio\autoload.php';
use Twilio\Rest\Client;
$servername = "localhost";
// Enter your MySQL username below(default=root)
$username = "root";
// Press your MySQL password below
$password = "";
$dbname = "net_banking";
$account_sid = ''; #Paste Your SID Here
$auth_token = ''; #Paste Your Auth Token
$twilio_number = ""; // Twilio number you own
$client = new Client($account_sid, $auth_token);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
?>