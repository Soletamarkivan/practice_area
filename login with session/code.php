<?php
include "db_connection.php";

$sDS = " ";

$username = $_POST['uname'];
$password = $_POST['pass'];

if ($username and $password) {

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");

    if ($row = mysqli_fetch_array($result)) {

        if ($row['usertype'] == "admin") {
            header("location: admin_page.php");
        } else if ($row['usertype'] == "user") {
            header("location: user_page.php");
        } else
            $sDS = 'mali bonak';
    } else

        $sDS = 'mali bonak';
}
