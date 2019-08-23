<!DOCTYPE html>
<html>
<head>
	<title>Table Form</title>
</head>
<body>
	<?php require_once 'hello.php'; ?>

	
	<?php 
	$conn =mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conn,'table');

   $sql = "select * from first ";
   $result = mysqli_query($conn,$sql);
    ?>
    <?php 

    function pre_r($array){
    	echo'<pre>';
    	print_r($array);
    	echo'<pre>';
    }
    ?>
        <form method="post" action="hello.php">
		<h2>Table Form</h2>
		Name:<input type="text" name="Name"><br><br>
		Email:<input type="text" name="Email"><br><br>
		<button type="submit" name="submit" value="submit">Submit</button>
	</form>
    <form>
		<h2>Table Record</h2>
		<table>
			<tr>
			<th>sr</th>
			<th>name</th>
			<th>email</th>
			<th>edit</th>
			<th>delete</th>
		</tr>
		<?php
            while($row = $result->fetch_assoc()): ?>
    	<tr>
    		
    	<td><?php echo $row['sr'];?></td>
        <td><?php echo $row['name'];?></td>
    	<td><?php echo $row['email'];?></td>
    	<td><a href="edit.php?edit=<?php echo $row['sr'];?>"> Edit </a></td>
    	<td><a href="?delete=<?php echo $row['sr'];?>"> Delete </a></td>
    	       
    	</tr>
    <?php endwhile; ?>
		</table>
	</form>
</body>
</html>