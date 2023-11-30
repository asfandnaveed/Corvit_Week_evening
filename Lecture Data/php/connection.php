<?php

$serverAddress='localhost';
$username = 'root';
$password = '';
$databaseName = 'corvit_week_eve';


$con = new mysqli($serverAddress,$username,$password,$databaseName);


  

if( isset($_POST['productName']) ){


  $product_name = $_POST['productName'];
  $product_price = $_POST['productPrice'];
  $product_stock = $_POST['productStock'];
  $product_description = $_POST['productDescription'];

  $dateTime = date("Y-m-d H:m:s");
 


  $sql = "INSERT INTO products (p_name,p_price,p_stock,p_description,created_at) VALUE ('$product_name','$product_price','$product_stock','$product_description', '$dateTime')";


  if( $con ->query($sql)==TRUE ){
    echo 'Data Inserted ! ';
  }else{
    echo 'Something Went Wrong ! ';
  }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  </head>
  <body>
    
  	<div class="container">
      <form action="connection.php" method="POST">
  		<div class="row">
  			<!-- Column 1 -->
  			<div class="col-12">
  				<div class="d-flex justify-content-center">
  					<h1>Enter Products Detail</h1>
  				</div>
  			</div>
  			<!-- Column 2 -->
  			<div class="col-12">
  				<label class="form-label">Product Name</label>
  				<input name="productName" class="form-control" type="text" placeholder="Product Name" required>
  			</div>
  			<!-- Column 3 -->
  			<div class="col-6">
  				<label class="form-label">Product Price</label>
  				<input name="productPrice" class="form-control" type="text" placeholder="Product Price">
  			</div>
  			<!-- Column 4 -->
  			<div class="col-6">
  				<label class="form-label">Product Stock</label>
  				<input name="productStock" class="form-control" type="text" placeholder="Product Stock">
  			</div>
  			<!-- Column 5 -->
  			<div class="col-12">
  				<label class="form-label">Product Description</label>
  				<textarea name="productDescription" class="form-control" placeholder="Product Description"></textarea>
  			</div>
  			<!-- Column 6 -->
  			<div class="col-12">
  				<div class="d-flex justify-content-center" >
  					<button type="submit" class="btn btn-primary mt-3 w-50">Save Product Data</button>
  				</div>
  			</div>

      
  		</div>
      </form>
  	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>





