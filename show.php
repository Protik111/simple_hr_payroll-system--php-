<?php
session_start();
if(isset($_SESSION['email'])) {
    echo "Hello ".$_SESSION['email'];
    echo "<br>Welcome to the portal.";
    echo "<br><a href='logout.php'>Logout</a>";
    echo "<br><a href='hrdetails.php'>Show Your Information</a>";
}else{
    header("location: login.php");
}
?>