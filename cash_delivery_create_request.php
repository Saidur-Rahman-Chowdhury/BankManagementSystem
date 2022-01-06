<?php
    include "header.php";
    include "connect.php";
    include "navbar.php";

    if(!isset($_SESSION)) {
        session_start();
    }

    $card_no = $_SESSION['atm_card'];
    $amt = mysqli_real_escape_string($conn, $_POST["amt"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $pin = $_SESSION['atm_pin'];
    $sql00 = "SELECT * from customer where card_no='".$card_no."'";
    $result00 = $conn->query($sql00);
    $row00 = $result00->fetch_assoc();
    $id = $row00["cust_id"];
    $address = $row00["address"];
    $mobile = $row00["phone_no"];
    $_SESSION['cust_id'] = $id;
    $sql0 = "SELECT balance FROM passbook".$id." ORDER BY trans_id DESC LIMIT 1";
    $result = $conn->query($sql0);
    $row = $result->fetch_assoc();
    $balance = $row["balance"];
    $trans_id = 0;
    $otp = rand(1000,9999);
    /*  Set appropriate error number if errors are encountered.
        Key (for err_no) :
        -1 = Connection Error.
         0 = Successful Transaction.
         1 = Insufficient Funds.
         2 = Wrong PIN entered. */
    $err_no = 0;

    $sql_pin = "SELECT * FROM customer WHERE cust_id=".$id." AND pin='".$pin."'";
    $result_pin = $conn->query($sql_pin);
    $row_temp = $result_pin->fetch_assoc();



    $err_no=-1;
$deli_phone = "";

$id = $_SESSION['cust_id'];
$sql0 = "SELECT * FROM `deliveryman` WHERE job_status=0 AND branch='".$row_temp['nearby_branch']."' ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql0);
$row = $result->fetch_assoc();
if (($result->num_rows) > 0) {
    $deli_id = $row["id"];
    $deli_phone = $row["phone"];
    $sql1="INSERT INTO `delivery`(`cus_id`, `trans_id`,`amount`, `mobile`,`address`, `deli_id`, `job_status`,`otp`) 
    VALUES(".$id.",".$trans_id.",".$amt.",'$mobile','$address',".$deli_id.",0,".$otp.")";
    if (($conn->query($sql1) === TRUE)) {
        $err_no = 0;
    }

    $body = "Your money delivery request is placed. Delivery Man ".$row["name"]." with contact number ".$row["phone"]." is assigned for this delivery process. Your OTP is ".$otp."";
$client->messages->create(
    $mobile,  
    [
        'from' => $twilio_number,
        "messagingServiceSid" => "MG0d50ed188ce17b75c054169370e5cedc",
        'body' => $body
    ] 
);


$body = "New Request Placed! Phone:".$mobile." Address:".$address."";
$client->messages->create(
    $deli_phone,  
    [
        'from' => $twilio_number,
        "messagingServiceSid" => "MG0d50ed188ce17b75c054169370e5cedc",
        'body' => $body
    ] 
);


} else {
    $err_no = -2;
}

// In production, these should be environment variables.
// Below, substitute your cell phone


  
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="action_style.css">
</head>

<body>
            
    <div class="flex-container">
        <div class="flex-item">
            <?php
            if ($err_no == -2) { ?>
                <p id="info"><?php echo " Your money delivery cannot be placed now. Currently our every delivery man is busy. Please try again later.\n"; ?></p>
            <?php } ?>

            <?php
            if ($err_no == 0) { ?>
                <p id="info"><?php 
              
                echo "Delivery Request Placed Successfully"
                ?></p>
            <?php } ?>
        
        <div class="flex-item">
            <a href="cash_delivery_home_menu.php" class="button">Go Back</a>
        </div>
    </div>

</body>
</html>
