<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SFP Checkout</title>

    <!-- Favicon link -->
    <link rel="icon" href="../images/logo.png" type="image/png">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="../css/checkoutStyle.css">
        <!--- Icons --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="">
  <div class="container">
    <header>
        <h1>Current Inventory</h1>
        <div class="shopping">
            <img src="../images/shopping.svg">
        </div>
    </header>
      <!-- Favicon link -->
  <link rel="icon" href="../images/logo.png" type="image/png">

<!-- bootstrap -->
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        </li>
        </ul>
        </div>
      </div>
    </nav>

  <div class="container my-4">
  <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>PRODUCT</th>
      <th>CATEGORY</th>
      <th>QUANTITY</th>
      <th>ACTIONS</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include "../CRUD/connection.php";
      $sql = "select * from inventory";
      $result = $conn->query($sql);
      if(!$result){
        die("Invalid query!");
      }
      while($row=$result->fetch_assoc()){
        echo "
    <tr>
      <th>$row[id]</th>
      <th>$row[product]</th>
      <td>$row[category]</td>
      <td>$row[quantity]</td>
      <td>
      <a class='btn btn-success' href='editCheckout.php?id=$row[id]'>Add to Cart</a>
    </td>
</tr>
";
}
    ?>
  </tbody>
</table>

<div class="confirm_btn">
  <div class="total" onclick="openPopup()">Complete Checkout</div>

</div>
        <!-- POP UP -->
        <div class="popup" id="popup">
      <i class="fa-solid fa-square-check icon" style="color: #1c88f4;"></i>
      <h2>You're all set!</h2>
      <p> Thank you. We look forward to serving you again soon. Have a great day! </p>
      <button type="button" onclick="closePopup(); openLoginPage()">Sign Out</button>


    </div>
<!-- POP UP SCRIPT -->
<script>
  let popup = document.getElementById("popup");
    function openPopup(){
      popup.classList.add("open-popup")
    }
    function closePopup(){
      popup.classList.remove("open-popup")
    }

    function openLoginPage(){
      window.location.href='../loginPage/indexLogin.php'
    }
</script>

</body>
</html>