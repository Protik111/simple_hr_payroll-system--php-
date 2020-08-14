<?php
session_start();
if(isset($_SESSION['email'])){
    echo "Welcome ".$_SESSION['name']." to the system";
    echo "<br>Your username is ".$_SESSION['email'];
    // echo "<br>Please logout to use the system";
    // echo "<br><a href='logout.php'> Logout</a>";
} else{
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>N.B: </h1>
    <p class="verify">We Need To Verify Your Account</p>
    <h2>Please Logout Your Account</h2>
    <a class="btn" id="lg" href='logout.php'> Logout</a>
</body>
</html>