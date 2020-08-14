<?php 
	// initialize variables
	$name = "";
    $address = "";
    $email = "";
    $phone = "";
	$id = 0;
    
    $db = mysqli_connect('localhost', 'root', '', 'payroll2');

	if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        

        $query = "INSERT INTO admin (name, email, address, phone) VALUES ('$name', '$email', '$address', '$phone')";
        mysqli_query($db,  $query);
		header("location: addhrinfo.php");
	}

?>