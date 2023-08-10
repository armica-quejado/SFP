<?php
  include "../CRUD/connection.php";
  $id="";
  $product="";
  $category="";
  $quantity="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:SFP/CRUD/inventory.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from inventory where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: SFP/CRUD/inventory.php");
      exit;
    }
    $product=$row["product"];
    $category=$row["category"];
    $quantity=$row["quantity"];

  }
  else{
    $id = $_POST["id"];
    $product = $_POST["product"];
    $category=$_POST["category"];
    $quantity=$_POST["quantity"];

    $sql = "update inventory set product='$product', category='$category', quantity='$quantity' where id='$id'";
    $result = $conn->query($sql);
    
  }
  
?>

<!DOCTYPE html>
<html>
<head>
  <!-- Favicon link -->
  <link rel="icon" href="../images/logo.png" type="image/png">

  <title>Edit Inventory</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" 
      <div class="container-fluid">
        <a class="navbar-brand" href="../CRUD/inventory.php"><b>INVENTORY</b></a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">

            </li>
            <li class="nav-item">
              <a class="nav-link" href="../CRUD/create.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update Inventory </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> Product: </label>
 <input type="text" name="product" value="<?php echo $product; ?>" class="form-control"> <br>

 <label> Category: </label>
 <input type="text" name="category" value="<?php echo $category; ?>" class="form-control"> <br>

 <label> Quantity: </label>
 <input type="text" name="quantity" value="<?php echo $quantity; ?>" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit" href="../CRUD/inventory.php"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="inventory" href="../CRUD/inventory.php"> Back to Inventory </a><br>

 </div>
 </form>
 </div>
</body>
</html>