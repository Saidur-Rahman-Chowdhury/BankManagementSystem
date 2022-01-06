<?php
    include "validate_admin.php";
    include "connect.php";
    include "header.php";
    include "user_navbar.php";
    include "admin_sidebar.php";
    include "session_timeout.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="action_style.css">
</head>

<?php
$fname = mysqli_real_escape_string($conn, $_POST["name"]);
// $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
// $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
// $dob = mysqli_real_escape_string($conn, $_POST["dob"]);
// $nid = mysqli_real_escape_string($conn, $_POST["nid"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$phno = mysqli_real_escape_string($conn, $_POST["phno"]);
// $address = mysqli_real_escape_string($conn, $_POST["address"]);
$branch = mysqli_real_escape_string($conn, $_POST["branch"]);
$uname = mysqli_real_escape_string($conn, $_POST["uname"]);
$pwd = mysqli_real_escape_string($conn, $_POST["pwd"]);

$sql3 = "INSERT INTO `deliveryman`(`name`, `branch`, `phone`, `email`, `uname`, `pwd`) VALUES(
            '$fname',
            '$email',
            '$phno',
            '$branch',
            '$uname',
            '$pwd'
        )";

?>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <?php
            if (($conn->query($sql3) === TRUE)) { ?>
                <p id="info"><?php echo "DeliveryMan created successfully !\n"; ?></p>
        </div>
        <div class="flex-item">
                <p id="info"><?php
                echo "<br>" . $conn->error . "<br>"; ?></p>
            <?php } ?>
        </div>
        <?php $conn->close(); ?>

        <div class="flex-item">
            <a href="/customer_add.php" class="button">Add Again</a>
        </div>

    </div>

</body>
</html>
