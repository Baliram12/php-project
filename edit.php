

<?php require_once 'hello.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
	<form method="post" action="">
		Name:<input type="text" name="name" value="<?php echo $name; ?>"><br><br>
		Email:<input type="text" name="email" value="<?php echo $email; ?>"><br><br>
		<button type="submit" name="update" value="<?php echo $_GET['edit']; ?>">Update</button>

	</form>

</body>
</html>