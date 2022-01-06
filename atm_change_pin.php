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
        <form class="add_customer_form" action="atm_change_pin_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Please fill in the following details . . .</h1>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Enter New Pin :</label><br>
                <input name="pin1" size="30" type="text" required />
            </div>
            <div  class=container>
                <label>Retype New Pin :</b></label><br>
                <input name="pin2" size="30" type="text" required />
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
