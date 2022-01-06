<?php
    
    include "connect.php";

    session_start();
    session_destroy();
    header("location:cash_delivery.php");    
?>