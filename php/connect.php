<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "pzpdb";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn) {
    function alert_error($errmsg) {
        echo "<script>alert('$errmsg')</script>";
    }

    alert_error("Connection Failed!").mysqli_connect_error();
} else {
    function log_success($sucssmsg) {
        echo "<script>console.log('$sucssmsg')</script>";
    }

    log_success("Connection Successful.");
}

?>