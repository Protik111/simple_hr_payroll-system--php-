<?php
$db = mysqli_connect("localhost", "root", "", "payroll2");
if(isset($_POST['submit_btn'])){
    session_start();
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql="SELECT * FROM admin WHERE Email='$email' AND Password='$password'";
    $verify = mysqli_query($db, $sql);

    if(mysqli_num_rows($verify)== 1){
        $_SESSION['email']=$email;
        header("location: show.php");
    }else {
        echo "incorrect email/password combination";
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Authentication Module</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       
        <form method="post" action="login.php" >
        <div class="login">
        <h1>Login</h1>
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