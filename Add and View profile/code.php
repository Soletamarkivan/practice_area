<?php

include "db_conn.php";

$username = $_POST['username'];
$password = $_POST['password'];
// $usertype = $_POST = ['usertype'];



$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
mysqli_query($conn, $query);
