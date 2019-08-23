<?php
session_start();
$Servername = "localhost";
$conn =mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'table');
if(isset($_POST['submit'])){
$name = $_POST['Name'];
$email = $_POST['Email'];



$sql = "select * from first where email = '$email' ";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num == 1){
	echo"Email Already";
}
else
{
	$reg = "insert into first(name,email) values ('$name','$email')";
	mysqli_query($conn,$reg);
	echo"Data is insert into Table Successful";
}
}



if(isset($_GET['delete'])){

	$sr = $_GET['delete'];
	$sql="DELETE FROM first WHERE sr = '$sr'";
	mysqli_query($conn,$sql);
}
$name="";
$email="";
if (isset($_GET['edit'])) {


		 $sr = $_GET['edit'];
		 $sql = "SELECT * FROM first WHERE sr=$sr";
		 $result = mysqli_query($conn,$sql);
		  $row = mysqli_fetch_array($result);
		    $name = $row['name'];
			$email = $row['email'];


		}

  if(isset($_REQUEST['update'])){
  	$sr = $_REQUEST['update'];
  	$name=$_REQUEST['name'];
  	$email=$_REQUEST['email'];
  	$sql = "UPDATE first SET name='$name', email='$email' WHERE sr='$sr'";
  	mysqli_query($conn,$sql);
  }



?>