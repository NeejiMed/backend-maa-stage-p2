<?php 
require 'connect.php';
//header("Access-Control-Allow-Origin: access");
//header("Access-Control-Allow-Headers: access");
//header("Access-Control-Allow-Methods: POST");

$postdata = file_get_contents("php://input");

if (isset($postdata)&& !empty($postdata))
{
    $request = json_decode($postdata);

    //sanitize
    $first_name = $request->first_name;
    $last_name = $request->last_name;
    $pwd = $request->pwd;

    //store
    $sql = "INSERT INTO `users`(
        `fName`,
        `lName`,
        `pwd`
    ) VALUES 
    ('{$fName}',
    '{$lName}',
    '{$pwd}')
    ";

    if (mysqli_query($con,$sql))
    {
        http_response_code(201);
    }
    else{
        http_response_code(422);
    }

}