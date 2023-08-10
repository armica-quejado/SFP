<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="../css/LiveStatusStyle.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Favicon link -->
    <link rel="icon" href="../images/logo.png" type="image/png">

    <!--- Icons --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>SFP Live Status</title>
  </head>
  <body>
  <div class="header">
        <div class="inner_header">
            <div class="logo_container">
                <a class="navbar-brand" href="../homepage/index.php"><h1>SJSU<span>CARES</span></h1></a>
            </div>
            <ul class="navigation">
                <a href="https://www.sjsu.edu/sjsucares/about/index.php"><li>About Us</li></a>
                <a href="livestatus.php"><li>Status</li></a>
                <a href="https://www.sjsu.edu/sjsucares/about/faq.php"><li>FAQs</li></a>
                <a href="https://calendar.google.com/calendar/u/0/selfsched?sstoken=UVBUWS1HZmFlaDI3fGRlZmF1bHR8MWQ3YmJhNDc4MTNmYTgxMTkxM2I3OWIxYWM5YTcwM2Y"><li>Volunteer</li></a>
                <a href="../loginPage/indexLogin.php"><li><b>Log In</b></li></a>
            </ul>
        </div>
    </div>

    <div class="footer">
        <div class="inner_footer">
            <div class="logo_container">
               <!-- <img src="/images/logo.png" -->
               <img src="https://www.sjsu.edu/sjsucares/pics/SFPLogoStandard02.png">
            </div>
            
            <div class="footer_third">
                <h1>SJSU Cares</h1>
                <a href="https://www.sjsu.edu/sjsucares/about/index.php">About Us</a>
                <a href="https://www.sjsu.edu/sjsucares/about/contact-us.php">Contact Us</a>
                <a href="https://www.sjsu.edu/sjsucares/about/data.php">Impact Reports</a>
            </div>

            <div class="footer_third">
                <h1>Follow Us!</h1>
                <li><a  href="https://www.facebook.com/SJSUCaresBasicNeeds/"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a  href="https://twitter.com/sjsucares?lang=en"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a  href="https://www.instagram.com/sjsucaresbasicneeds/"><i class="fa-brands fa-instagram"></i></a></li>

                <span>
                    San Jose State University<br>
                    1 Washington Sq <br>
                    San Jose, CA 95192<br>
                </span>
            </div>
        </div>
    </div>

<script src="/js/index.js"> </script>
</body>
</html>
<div class="main">
    <h3><b>LIVE STATUS</b></h3>
</div>

    <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>PRODUCT</th>
        <th>CATEGORY</th>
        <th>QUANTITY</th>

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
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>