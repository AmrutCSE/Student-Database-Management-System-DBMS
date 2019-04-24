<?php

include("db.php");









?>

<html>
<head>
	<title>Table with Attendence database</title>
	<style>
	table{
		width:100%;
		border-collapse:collapse;
	}
	tr,td{
		padding:8px;
		text-align:center;
		border:1px solid black;
	}
	tr,th{
		padding:8px;
		text-align:center;
		border:1px solid black;
	}
	</style>
</head>
<body>
<a href="main.html"><button  style="
  width:8%;
  background: none;
  border:1px solid red;
  color:black;
  padding: 5px;
  font-size: 18px;
  cursor:pointer;
  margin:12px 0;">Home</button></a>
<a href="search_stu.php"><button  style="
  width:8%;
  background: none;
  border:1px solid red;
  color:black;
  padding: 5px;
  font-size: 18px;
  cursor:pointer;
  margin:12px 0;">search</button></a>
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

$sel = "SELECT * FROM `register` ";

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
<a href="student.html"><button style="
  width:8%;
  background: none;
  border:1px solid red;
  color:black;
  padding: 5px;
  font-size: 18px;
  cursor:pointer;
  margin:12px 0;">back</button></a>
</body>
</html>