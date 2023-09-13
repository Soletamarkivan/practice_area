<?php

include "db_conn.php";

$username = $_POST = ['username'];
$password = $_POST = ['password'];
$usertype = $_POST = ['usertype'];



$query = "INSERT INTO practice VALUES ('$username', '$password', '$usertype')";
mysqli_query($conn, $query);
