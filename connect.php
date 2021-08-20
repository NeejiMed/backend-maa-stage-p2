<?php 
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','reactjscrud');
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

//connect with the database
function connect()
{
    $connect = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if (! $connect){
        die("Failed to connect ".mysqli_connect_error());
    }

    mysqli_set_charset($connect,"utf8");

    return $connect;
}

$con = connect();