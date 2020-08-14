<!DOCTYPE html>
<html>
<head>
    <title>Create, Update, Delete</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
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
			<button class="btn" type="submit" name="add" >Add</button>
		</div>
	</form>
</body>
</html>