<?php

session_start();
$Servername = "localhost";
$name = $_POST['name'];
$Pass = $_POST['password'];

$conn =mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'usersignup');

$sql = "select * from usertable where name = '$name' ";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num == 1){
	echo"Username Already";
}
else
{
	$reg = "insert into usertable(name,password) values ('$name','$Pass')";
	mysqli_query($conn,$reg);
	echo"signup Successful";
}



?>