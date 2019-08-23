<?php
session_start();

?>
<html>
<head>
<title>Home page</title>
</head>
<body>
	<h1>
		Welcome  :-<?php echo $_SESSION['username']; ?>
	</h1>
	<a href="logout.php">Logout</a>
</body>

</html>




