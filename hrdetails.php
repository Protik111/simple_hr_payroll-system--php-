<?php
require_once('connection.php');
$query="select * from admin";
$result=mysqli_query($db,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showing Data of HR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
    <tr>
    <th colspan="4"><h2>HR Records</h2></th>
    </tr>
    <t>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Phone</th>
    </t>
    
    <?php
    while($rows=mysqli_fetch_assoc($result))
    {
        ?>
        <tr>
        <td><?php echo $rows['id']; ?></td>
        <td><?php echo $rows['name']; ?></td>
        <td><?php echo $rows['email']; ?></td>
        <td><?php echo $rows['address']; ?></td>
        <td><?php echo $rows['phone']; ?></td>
        </tr>

        <?php
    }
    ?>
    </table>
   
    <p><a href='addhrinfo.php'>Click To Update/Delete</a></p>
</body>
</html>