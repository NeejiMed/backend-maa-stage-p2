<?php 
require 'connect.php';
//header("Access-Control-Allow-Origin: access");
//header("Access-Control-Allow-Headers: access");
//header("Access-Control-Allow-Methods: POST");

error_reporting(E_ERROR);
$users = [];
$sql = "SELECT * FROM users;";
if ($result = mysqli_query($con,$sql))
{
    $cr = 0;
    while ($row = mysqli_fetch_assoc($resultData))
    {
        $users[$cr]['id'] = $row['id'];
        $users[$cr]['fName'] = $row['fName'];
        $users[$cr]['lName'] = $row['lName'];
        $users[$cr]['pwd'] = $row['pwd'];
        $cr++;
    }
    echo json_encode($users);
}
else
{
    http_response_code(404);
}