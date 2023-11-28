<?php

$serverAddress='localhost';
$username='root';
$password='';
$databaseName='corvit_week_eve';


$con = new mysqli($serverAddress,$username,$password,$databaseName);


// $sql = "INSERT INTO products (p_name,p_price,p_stock,p_description,created_at) VALUE ('IPhone 14',300000,'10','Test Test','2023-11-27 14:00:13')";

$sql = "UPDATE products SET deleted_at='2023-11-27 15:15:01' WHERE id=3 ";


if( $con->query($sql) ==TRUE ){
	echo 'data Updated !! ';
}else{
	echo 'Something Went Wrong';
}





?>