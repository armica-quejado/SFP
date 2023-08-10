<?php
    include "../CRUD/connection.php";
    if(isset($_POST['submit'])){
        $product = $_POST['product'];
        $category = $_POST['category'];
        $quantity = $_POST['quantity'];
        $q = " INSERT INTO `inventory`(`product`, `category`, `quantity`) VALUES ( '$product', '$category', '$quantity')";

        $query = mysqli_query($conn,$q);
    }
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Favicon link -->
  <link rel="icon" href="../images/logo.png" type="image/png">

  <title>Create Inventory</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="../CRUD/inventory.php"><b>INVENTORY</b></a>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Create New Item</h1>
 </div><br>

 <label> Product: </label>
 <input type="text" name="product" class="form-control"> <br>

 <label> Category: </label>
 <input type="text" name="category" class="form-control"> <br>

 <label> Quantity: </label>
 <input type="text" name="quantity" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="inventory" href="../CRUD/inventory.php"> Back to Inventory </a><br>

 </div>
 </form>
 </div>
</body>
</html>