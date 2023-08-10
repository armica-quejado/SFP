<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../css/indexStyle.css"
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Favicon link -->
    <link rel="icon" href="../images/logo.png" type="image/png">

    <!--- Icons --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>SJSU Spartan Food Pantry</title>
    
</head>
<body>
    <div class="header">
        <div class="inner_header">
            <div class="logo_container">
            <a class="navbar-brand" href="../homepage/index.php"><h1>SJSU<span>CARES</span></h1></a>
            </div>
            <ul class="navigation">
                <a href="https://www.sjsu.edu/sjsucares/about/index.php"><li>About Us</li></a>
                <a href="../CRUD/livestatus.php"><li>Status</li></a>
                <a href="https://www.sjsu.edu/sjsucares/about/faq.php"><li>FAQs</li></a>
                <a href="https://calendar.google.com/calendar/u/0/selfsched?sstoken=UVBUWS1HZmFlaDI3fGRlZmF1bHR8MWQ3YmJhNDc4MTNmYTgxMTkxM2I3OWIxYWM5YTcwM2Y"><li>Volunteer</li></a>
                <a href="../loginPage/indexLogin.php"><li><b>Log In</b></li></a>
            </ul>
        </div>
    </div>

    <div class="main">
        <div class="video">
            <iframe class="youtube" width="1000" height="500" src="https://www.youtube.com/embed/Wvm8BkiMa_8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="button">
            <input type=button onClick="location.href='../CRUD/livestatus.php'"value='View Pantry Status'>
        </div>
        <div class="impact">
            <h1> <b>Our Impact</b> </h1>
        </div>

     <div class="w3-row-padding w3-section">
        <div class="w3-half">
          <div class="w3-card">
            <td><img src="../images/main_left.jpg" style="width:100%" style="height:10%"></td>
            <div class="w3-container">
                <h1>On average 200 shoppers per day</h1>
                <p>In 2022, the pantry averaged 200 shoppers per day, in comparison to roughly 120 shoppers the year prior. 
                   The SJSU Spartan Food Pantry provides essential groceries to students in need.</p>
            </div>
          </div>
        </div>
      
        <div class="w3-half">
          <div class="w3-card">
            <td><img src="../images/main_right.jpg" style="width:100%"></td>
            <div class="w3-container">
                <h1>Our Mission</h1>
                <p>SJSU Cares assists students who are facing an unforeseen economic crisis by providing direct support
                    and referrals around basic needs including food, housing, emergency assistance and more.</p>
            </div>
          </div>
        </div>
        
    </div>
    <div class="footer">
        <div class="inner_footer">
            <div class="logo_container">
               <img src="https://www.sjsu.edu/sjsucares/pics/SFPLogoStandard02.png">
            </div>
            
            <div class="footer_third">
                <h1><b>SJSU Cares</b></h1>
                <a href="https://www.sjsu.edu/sjsucares/about/index.php">About Us</a>
                <a href="https://www.sjsu.edu/sjsucares/about/contact-us.php">Contact Us</a>
                <a href="https://www.sjsu.edu/sjsucares/about/data.php">Impact Reports</a>
            </div>

            <div class="footer_third">
                <h1><b>Follow Us!</b></h1>
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
</body>
</html>