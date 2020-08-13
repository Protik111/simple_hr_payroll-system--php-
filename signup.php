<?php
$db = mysqli_connect("localhost", "root", "", "payroll2");
if(isset($_POST['submit_button'])){
    session_start();
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);
    $sql = "INSERT INTO admin(Name, Email, Address, Phone, Password) VALUE('$name', '$email', '$address', '$phone','$password')";
    mysqli_query($db, $sql);
    $_SESSION ['name'] = $name;
    $_SESSION ['email'] = $email;

    header ("location: success.php");
 }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up for HR(Admin)</title>
     
    </head>
    <body>
        <form method="post" action="signup.php">
            <h2 >Sign Up HR Only</h2>
            <table class="">
                <tr>    
                    <td>Enter Name</td>
                    <td><input type="text" name="fullname" required></td>
                    
                </tr>
                <tr>    
                    <td>Enter Email</td>
                    <td><input type="email" name="email" required></td>
                    
                </tr>
                <tr>    
                    <td>Enter Address</td>
                    <td><input type="text" name="address" required></td>
                    
                </tr>
                <tr>    
                    <td>Enter Phone</td>
                    <td><input type="tel" name="phone" required></td>
                    
                </tr>
                <tr>    
                    <td>Enter Password</td>
                    <td><input type="password" name="password" required></td>
                    
                </tr>
                <tr>   
                    <td><input type="submit" name="submit_button" value="Sign Up"></td>
                    
                </tr>

            </table>
        </form>

        <!-- //user sign in form -->

        <form method="post" action="signup.php">
            <table class="user-sign-in">
            <h2>Sign In for User</h2>
                <tr>    
                    <td>Enter Email</td>
                    <td><input type="email" name="email" required></td>
                    
                </tr>
                <tr>    
                    <td>Enter Password</td>
                    <td><input type="password" name="password" required></td>
                    
                </tr>
                <tr>   
                    <td><input type="submit" name="submit_button" value="Sign In"></td>
                    
                </tr>
            </table>
        </form>
    </body>
</html>