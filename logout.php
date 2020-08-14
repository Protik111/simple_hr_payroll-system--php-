<?php
session_start();
if(isset($_SESSION['email'])) {
    session_destroy();
    // echo "You've Logged Out";
    // echo "<br><a href='login.php'>Login</a>";
}else{
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
    <h1>You've Succesfully Logged Out</h1>
    <h2>You can log in now by clicking the Log In button</h2>
    <a class="btn" href='login.php'>Log In</a>
</body>
</html>