<?php

include("db.php");









?>

<html>
<head>
	<title>Table with REGISTER database</title>
</head>
<body>
<a href="main.html">Home</a> 
<a href="search_stu.php">Search</a>
<table>
	<tr>
		<th>Name</th>
		<th>SSN</th>
		<th>Gender</th>
		<th>Date_of_birth</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Landline</th>
		<th>Department Number</th>
	</tr>

<?php

$sel = "SELECT * FROM `register` WHERE dnumber=5 ";

$qrydisplay = mysqli_query($connect, $sel);

while($row = mysqli_fetch_array($qrydisplay)){
			$name=$row['name'];
			$ssn=$row['ssn'];
			$dnumber=$row['dnumber'];
			$gender=$row['gender'];
			$date_of_birth=$row['date_of_birth'];
			$email=$row['email'];
			$phone=$row['phone'];
			$landline=$row['landline'];
	
	
				echo "<tr><td>".$row["name"]."</td><td>".$row["ssn"]."</td><td>".$row["gender"]."</td><td>".$row["date_of_birth"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["landline"]."</td><td>".$row["dnumber"]."</td><td><a href='edit.php?edit=$ssn' >Edit</a></td><td><a href='delete_stu.php?deleteid=$ssn' >Delete</a></td></tr>";
			
			}
?>
</table>
<br><br>
<a href="it.html">back</a>
</body>
</html>