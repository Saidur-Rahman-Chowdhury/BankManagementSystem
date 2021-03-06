<?php
    include "validate_admin.php";
    include "header.php";
    include "user_navbar.php";
    include "admin_sidebar.php";
    include "session_timeout.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer_add_style.css">
</head>

<body>
    <form class="add_customer_form" action="deliveryman_add_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Please fill in the following details . . .</h1>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Name :</label><br>
                <input name="name" size="50" type="text" required />
            </div>
        </div>
        <div class="flex-container">
            <div class=container>
                <label>Date of Birth :</label><br>
                <input name="dob" size="30" type="text" placeholder="yyyy-mm-dd" required />
            </div>
        </div>
        <div class="flex-container">
            <div class=container>
                <label>NID No :</label><br>
                <input name="nid" size="25" type="text" required />
            </div>
        </div>
        <div class="flex-container">
            <div class=container>
                <label>Email-ID :</label><br>
                <input name="email" size="30" type="text" required />
            </div>
            <div  class=container>
                <label>Phone No. :</b></label><br>
                <input name="phno" size="30" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Address :</label><br>
                <textarea name="address" required /></textarea>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Bank Branch :</label>
            </div>
            <div  class=container>
                <select name="branch">
                    <option value="Gulshan">Gulshan</option>
                    <option value="Dhanmondi">Dhanmondi</option>
                    <option value="Banani">Banani</option>
                    <option value="Bashundhara">Bashundhara</option>
                    <option value="Uttara">Uttara</option>
                </select>
            </div>
        </div>


        <div class="flex-container">
            <div class=container>
                <label>Username :</label><br>
                <input name="uname" size="30" type="text" required />
            </div>
            <div  class=container>
                <label>Password :</b></label><br>
                <input name="pwd" size="30" type="text" required />
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

    </form>

    <script>
    function confirmReset() {
        return confirm('Do you really want to reset?')
    }
    </script>

</body>
</html>
