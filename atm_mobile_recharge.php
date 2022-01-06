<?php
    include "header.php";
    include "connect.php";
    include "navbar.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer_add_style.css">
</head>

<body>
            
        <div class="flex-item">
        <form class="add_customer_form" action="atm_recharge_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Please fill in the following details . . .</h1>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Mobile Number :</label><br>
                <input name="mobile" size="30" type="text" required />
            </div>
            <div  class=container>
                <label>Amount (BDT) :</b></label><br>
                <input name="amt" size="30" type="text" required />
            </div>
        </div>


        <div class="flex-container">
            <div class="container">
                <button type="submit">Submit</button>
            </div>

            <div class="container">
                <button type="reset" class="reset" onclick="return confirmReset();">Reset</button>
            </div>
        </div>

        <div class="flex-item">
            <a href="atm_simulator_out_1.php" class="button">Go Back</a>
        </div>
    </form>
        


        </div>

       
</body>
</html>
