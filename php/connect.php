<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn) {
    function alert_error($errmsg) {
        echo "<script>alert('$errmsg')</script>";
    }

    alert_error("Connection Failed!").mysqli_connect_error();
} else {
    function alert_success($sucssmsg) {
        echo "<script>alert('$sucssmsg')</script>";
    }

    alert_success("Connection Successful.");
}

?>