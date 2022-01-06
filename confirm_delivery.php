<?php
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
// Below, substitute your cell phone
if(!isset($_SESSION)) {
    session_start();
}

include "deliveryman_navbar.php";
if (isset($_GET['deli_id'])) {
    $otp = mysqli_real_escape_string($conn, $_POST["otp"]);
    $sql = "SELECT * FROM `delivery` WHERE id=".$_GET['deli_id']." AND `otp`='".$otp."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $mobile = $row['mobile'];
    $amt  = $row["amount"];
    $sql0 = "UPDATE `delivery` SET job_status = 1 WHERE id=".$_GET['deli_id'];
    $conn->query($sql0);
    $sql0 = "SELECT balance FROM passbook".$row["cus_id"]." ORDER BY trans_id DESC LIMIT 1";
    $result = $conn->query($sql0);
    $row1 = $result->fetch_assoc();
    $balance = $row1["balance"];
    
    $final_balance = $balance - $amt;

           
    $sql1 = "INSERT INTO passbook".$row["cus_id"]." VALUES(
                            NULL,
                            NOW(),
                            'Cash to Self',
                            '$amt',
                            '0',
                            '$final_balance'
                        )";
    $result = $conn->query($sql1);
                
    // $client->messages->create(
    //     $mobile,  
    //     [
    //         'from' => $twilio_number,
    //         "messagingServiceSid" => "MG0d50ed188ce17b75c054169370e5cedc",
    //         'body' => 'Delivery Confirmed'
    //     ] 
    // );
    header("location:assigned_delivery.php");

    }


    

    



?>