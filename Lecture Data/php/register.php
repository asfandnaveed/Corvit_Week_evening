<?php
// $serverAddress='localhost';
// $username = 'root';
// $password = '';
// $databaseName = 'corvit_week_eve';


// $con = new mysqli($serverAddress,$username,$password,$databaseName);

// if(isset($_POST['name']){
// 	$student_name = $_POST['name'];
// 	$email = $_POST['email'];
// 	$fathername = $_POST['fatherName'];
//    $password = $_POST['password'];
   

// }


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
      <form action="register.php" method="POST">
  		<div class="row">
  			<!-- Column 1 -->
  			<div class="col-12">
  				<div class="d-flex justify-content-center">
  					<h1>Register Your Data</h1>
  				</div>
  			</div>
  			<!-- Column 2 -->
  			<div class="col-6">
  				<label class="form-label">Name</label>
  				<input name="name" class="form-control" type="email" placeholder="Name" required>
  			</div>
  			<!-- Column 3 -->
  			<div class="col-6">
  				<label class="form-label">Email</label>
  				<input name="email" class="form-control" type="email" placeholder="Email">
  			</div>
  			<!-- Column 4 -->
  			<div class="col-6">
  				<label class="form-label">Father Name</label>
  				<input name="fatherName" class="form-control" type="text" placeholder="Father Name">
  			</div>
  			<!-- Column 5 -->
  			<div class="col-6">
  				<label class="form-label">Password</label>
  				<input name="password" type="password" class="form-control" placeholder="Password">
  			</div>
  			<!-- Column 6 -->
  			<div class="col-6">
  				<label class="form-label">Age</label>
  				<input name="age" type="number" class="form-control" placeholder="Roll Number">
  			</div>

  			<div class="col-6">

  				<label class="form-label">Select Gender</label>
  				<div class="form-check">
  					<label class="form-check-label">Male</label>
  					<input name="gender" value="male" type="radio" class="form-check-input" required>

  				</div>
  				<div class="form-check">
  					<label class="form-check-label">Female</label>
  					<input name="gender" value="female" type="radio" class="form-check-input" required>
  					
  				</div>
  		
  			</div>
  			<!-- Column 6 -->
  			<div class="col-12">
  				<div class="d-flex justify-content-center" >
  					<button type="submit" class="btn btn-primary mt-3 w-50">Register</button>
  				</div>
  			</div>


        <div class="col-12">
          <input type="radio" name="gender">
          <input type="radio" name="gender">
        </div>

      
  		</div>
      </form>
  	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>