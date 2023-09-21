<?php
include "db_conn.php";

$username = "username";
$password = "password";

$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
mysqli_query($conn, $query);
