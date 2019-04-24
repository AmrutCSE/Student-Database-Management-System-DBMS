<?php

include("db.php");









?>
<html>
<head>
	<title>Table with Exam database</title>
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
		<th>Id</th>
		<th>SSN</th>
		<th>Course_id</th>
		<th>Marks</th>
		<th>Grades</th>
		<th>Department Number</th>
	</tr>

<?php

$sel = "SELECT * FROM `exams` ";

$qrydisplay = mysqli_query($connect, $sel);

while($row = mysqli_fetch_array($qrydisplay)){
			$id=$row['id'];
			$ssn=$row['ssn'];
			$course_id=$row['course_id'];
			$marks=$row['marks'];
			$grades=$row['grades'];
			$dnumber=$row['dnumber'];
	
	
				echo "<tr><td>".$row["id"]."</td><td>".$row["ssn"]."</td><td>".$row["course_id"]."</td><td>".$row["marks"]."</td><td>".$row["grades"]."</td><td>".$row["dnumber"]."</td><td><a href='edit_exam.php?edit=$id' >Edit</a></td><td><a href='delete_exam.php?deleteid=$id' >Delete</a></td></tr>";
			
			}
?>
</table>
<br><br>
<a href="Exam.html"><button style="
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