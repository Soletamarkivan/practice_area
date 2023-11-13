<?php
$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "inventory";

$db_connect = mysqli_connect($server_name, $db_username, $db_password, $db_name);

// $searchTerm =  $_GET['term'];
// $query = "SELECT * FROM unit WHERE unit_name LIKE '%" . $searchTerm . "%' ";
// $res = $db_connect->query($query);

// $data = array();
// if ($res->num_rows) {
//     while ($row = $res->fetch_assoc()) {
//         $id['id'] = $row['id'];
//         $val['unit_name'] = $row['unit_name'];
//         array_push($data, $val);
//     }
// }
// echo json_encode($data);


$searchTerm = $_GET['term'];
$sql = "SELECT * FROM unit WHERE unit_name LIKE '%" . $searchTerm . "%'";
$result = $db_connect->query($sql);
// print_r($sql);
$tutorialData = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data['id']    = $row['id'];
        $data['value'] = $row['unit_name'];
        array_push($tutorialData, $data);
        // print_r($tutorialData);
    }
}
echo json_encode($tutorialData);
