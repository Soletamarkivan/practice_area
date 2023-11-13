<?php
include "db_con.php";

$username = $_POST['txt_username'];
$password = $_POST['txt_password'];

if ($username && $password) {

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password' ");

    if ($row = mysqli_fetch_array($query)) {

        $_SESSION['usertype'] = $row['type'];

        if ($row['usertype'] == "admin") {
            header('location: admin_page.php');
        } elseif ($row['usertype'] == "user") {
            header('location: user_page.php');
        }
    } else {
        echo ("sd");
    }
    echo ('asdsadasds');
}
