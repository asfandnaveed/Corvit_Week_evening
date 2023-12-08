<?php



$serverAddress = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'corvit_week_eve';


$con = new mysqli($serverAddress,$username,$password,$databaseName);




?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product Data</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<div class="row">

			<?php

				$sql = "SELECT * FROM products";
				$result = $con->query($sql);
				if($result->num_rows > 0){
					 while($row= $result -> fetch_assoc()){

					 	echo '<div class="col-3 bg-dark text-white">';

					 	echo '<img src="'.$row['p_image']. ' " class="img-fluid">';
					 	echo '<h3>'.$row['p_name'].'</h3>';
					 	echo '<p>'.$row['p_price'].'</p>';
					 	echo '<p>'.$row['p_stock'].'</p>';
					 	echo '<p>'.$row['p_description'].'</p>';

					 	echo '</div>';
					 }

				}else{
					echo 'no data availiable';
				}



			?>

			


			
		</div>
	</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


