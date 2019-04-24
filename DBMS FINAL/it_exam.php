<?php

include("db.php");









?>
<html>
<head>
	<title>Table with Exam database</title>
</head>
<body>
<a href="main.html">Home</a>  
<a href="search_exam.php">Search</a>  
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

$sel = "SELECT * FROM `exams` WHERE dnumber=5";

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
<a href="it.html">Back</a>
</body>
</html>