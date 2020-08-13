<?php
$connection = mysqli_connect("localhost", "root", "", "payroll2"); // Establishing Connection with Server
$db = mysql_select_db("payroll2", $connection); // Selecting Database
//MySQL Query to read data
$query = mysql_query("select * from admin", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href="readphp.php?id={$row['employee_id']}">{$row['employee_name']}</a></b>";
echo "<br />";
}
?>
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
$query1 = mysql_query("select * from admin where employee_id=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>
<div class="form">
<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->
<span>Name:</span> <?php echo $row1['employee_name']; ?>
<span>E-mail:</span> <?php echo $row1['employee_email']; ?>
<span>Contact No:</span> <?php echo $row1['employee_contact']; ?>
<span>Address:</span> <?php echo $row1['employee_address']; ?>
</div>
<?php
}
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
mysql_close($connection); // Closing Connection with Server
?>
</body>
</html>