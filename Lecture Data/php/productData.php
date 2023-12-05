<?php


$serverAddress = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'corvit_week_eve';


$con = new mysqli($serverAddress,$username,$password,$databaseName);

$x = 'Corvit';


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prducts Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>All Products Data</h1>



    <table class="table table-dark">
    	<tr>
    		<th>ID</th>
    		<th>Prodcut Name</th>
    		<th>Product Price</th>
    		<th>Product Stock</th>
    		<th>Product Description</th>
    		<th>Created Time</th>
    	</tr>

    	<?php

    		$sql = "SELECT * FROM products";

    		$result = $con->query($sql);

    		if( $result->num_rows >0 ){

    			while( $row = $result->fetch_assoc() ){


    					echo '<tr>';
    					echo '<td>'.$row['id'].'</td>';
    					echo '<td>'.$row['p_name'].'</td>';
    					echo '<td>'.$row['p_price'].'</td>';
    					echo '<td>'.$row['p_stcok'].'</td>';
    					echo '<td>'.$row['p_description'].'</td>';
    					echo '<td>'.$row['created_at'].'</td>';


    					echo '</tr>';
    					

    					
    			}

    		}else{
    			echo 'No Data available !';
    		}

    	?>
    	
    </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>





