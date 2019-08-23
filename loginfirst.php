<?php
session_start();
$Servername = "localhost";
$name = $_POST['user'];
$Pass = $_POST['password'];

$conn =mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'usersignup');

$sql = "select * from usertable where name = '$name' AND password = '$Pass'";
$result = mysqli_query($conn,$sql);
 $num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $name;

	
	header('location:home.php');
	
}
else
{
	header('location:lofinfirst.html');
}



?>