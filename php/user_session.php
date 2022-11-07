<?php
include('./connect.php');
session_start();

if($conn) {

    $mail = $_SESSION['user_email'];
    echo "<script>console.log('$email');</script>";
    // $user_data_all = " SELECT * FROM pzp_user_masters ";
}

?>