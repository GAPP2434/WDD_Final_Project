<?php
    include 'dbcon.php';
    date_default_timezone_set('Asia/Manila');
    $currentdate = date('Y-m-d H:i:s');
    $amount = $_POST['amount'];

    $signup = mysqli_query($conn, "INSERT INTO `tbldonation`(`dAmount`, `dDate`) 
    VALUES ('".$amount."','".$currentdate."')");

    header("Location:sample.html");
?>