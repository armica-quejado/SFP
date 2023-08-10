<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Favicon link -->
    <link rel="icon" href="../images/logo.png" type="image/png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SFP Logn</title>
    <link rel="stylesheet" type="text/css" href="../css/loginStyle.css">

</head>
<body> 
    <div id="form">
        <h1>Sign In</h1>
        <form name = "form" action = "login.php" onsubmit = "return isvalid()" method="POST">
            <label>Username: </label>
            <input type="text" id="user" name="user"><br></br>
            <label>Password: </label>
            <input type="password" id="pass" name="pass"><br><br>
            <input type="submit" id="btn" value="Login" name="submit">
        </form>
    </div>
    <script>
        function isValid(){
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if(user.length=="" || pass.length==""){
                alert("Username or/and Password was not enetered!");
                return false;
            }
        }
    </script>
</body>
</html> 

 

