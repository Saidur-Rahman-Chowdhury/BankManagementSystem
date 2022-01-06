<?php
    include "header.php";
    include "connect.php";
    include "navbar.php";

    if(!isset($_SESSION)) {
        session_start();
    }

    $card_no = $_SESSION['atm_card'];
    $pin = mysqli_real_escape_string($conn, $_POST["pin2"]);
    $sql0 = "UPDATE customer SET pin = '$pin'
                            WHERE card_no=".$card_no;
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
                if (($conn->query($sql0) === TRUE)) { ?>
                    <p id="info"><?php echo "Values Updated Successfully !"; ?></p>
                <?php
                }
                else { ?>
                    <p id="info"><?php echo "Error: " . $sql0 . "<br>" . $conn->error . "<br>"; ?></p>
                <?php
                }
            ?>
        </div>
        <?php $conn->close(); ?>


        
        <div class="flex-item">
            <a href="atm_simulator_out_1.php" class="button">Go Back</a>
        </div>
    </div>

</body>
</html>
