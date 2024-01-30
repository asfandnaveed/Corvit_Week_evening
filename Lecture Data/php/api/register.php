<?php


$serverAddress = 'localhost';
$username = 'root';
$password = '';
$dbName = 'food';

$con = new mysqli($serverAddress,$username,$password,$dbName);

$response = array();

$user_name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$date = date("Y-m-d H:m:s");

$sql = "INSERT INTO users (username,email,password,created_at) VALUE ('$user_name','$email','$password','$date')";



header('Content-Type: application/json; Charset=UTF-8');

if( $con->query($sql) ==TRUE){
    
    $response = array(
            "status"=>true,
            "message"=>"Data Inserted !",
        );
    
}else{
    
    $response = array(
            "status"=>false,
            "message"=>"Something Went Wrong ! ",
        );
}


    print json_encode($response);


?>