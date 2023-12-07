<?php

require 'database.php';
if(isset($_POST['productName'])){

  $product_name = $_POST['productName'];
  $product_price= $_POST['productPrice'];
  $product_stock = $_POST['productStock'];
  $product_description = $_POST['productDescription'];

  $product_image_name = $_FILES['productImage']['name'];
  $product_image_size = $_FILES['productImage']['size'];
  $product_image_type = $_FILES['productImage']['type'];
  $product_image_file = $_FILES['productImage']['tmp_name'];

  $datetime = date("Y-m-d H:m:s");

  move_uploaded_file($product_image_file, 'images/'.$product_image_name);

  $image_path = 'images/'.$product_image_name;


  $sql = "INSERT INTO products (p_name,p_price,p_stock,p_description,p_image,created_at) VALUE ('$product_name','$product_price','$product_stock','$product_description','$image_path','$datetime')";


  if( $con ->query($sql) == TRUE){
    echo 'Data Inserted';
  }else{
    echo 'Something Went Wrong';
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
      <form action="connection.php" method="POST" enctype="multipart/form-data">
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
          <label class="form-label">Choose Image</label>
          <input type="file" accept="image/png , image/jpg , image/jpeg" class="form-control" name="productImage">
        </div>
  			<!-- Column 7 -->
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
