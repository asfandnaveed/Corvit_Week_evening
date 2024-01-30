<?php

$serverAddress = 'localhost';
$username = 'root';
$password = '';
$dbName = 'food';

$con = new mysqli($serverAddress,$username,$password,$dbName);


$productsData = array();

$sql = "SELECT * FROM products";

$result = $con ->query($sql);

if($result -> num_rows >0){
    
    while($row = $result -> fetch_assoc()){
        
 
        array_push($productsData,$row);
    }
    
    $response = array (
            "status" => true,
            "products" =>$productsData
        );
        
    header('Content-Type: application/json; Charset=UTF-8');
    print json_encode($response);
    
    
}



?>