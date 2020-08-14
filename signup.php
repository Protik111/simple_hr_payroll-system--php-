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
        <link rel="stylesheet" href="style.css">
     
    </head>
    <body>
    <form method="post" action="signup.php" >
    <h2 >Sign Up HR Only</h2>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="fullname" value="">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="">
        </div>
        <div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="">
        </div>
        <div class="input-group">
			<label>Phone</label>
			<input type="text" name="phone" value="">
        </div>
        <div class="input-group">
			<label>Password</label>
			<input type="password" name="password" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="submit_button" >Sign Up</button>
		</div>
	</form>

        <!-- //user sign in form -->

        <form method="post" action="login.php" >
        <div>
        <h1>Sign In For Employee</h1>
        </div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="">
        </div>
       
        <div class="input-group">
			<label>Password</label>
			<input type="password" name="password" value="">
        </div>
        
		<div class="input-group">
			<button class="btn" type="submit" name="submit_btn" >Sign In</button>
		</div>
	</form>
    </body>
</html>