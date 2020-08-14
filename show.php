<?php
session_start();
if(isset($_SESSION['email'])) {
    echo "Hello ".$_SESSION['email'];
    // echo "<br>Welcome to the portal.";
    // echo "<br><a href='logout.php'>Logout</a>";
    // echo "<br><a href='hrdetails.php'>Show Your Information</a>";
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
    <h2> Welocome To The Portal</h2>
    <a class="btn" id="btn" href='logout.php'>Logout</a>
    <a class="btn" id="btn" href='hrdetails.php'>Show Your Information</a>
    <a class="btn" id="btn" href='disburse.php'>Disburse Salary</a>

</body>
</html>