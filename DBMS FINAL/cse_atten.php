<?php

include("db.php");









?>

<html>
<head>
	<title>Table with Attendence database</title>
</head>
<body>
<a href="main.html">Home</a> 
<a href="search_atten.php">Search</a>   
<table>
	<tr>
		<th>Id</th>
		<th>Department Number</th>
		<th>SSN</th>
		<th>Course_id</th>
		<th>Total_classes</th>
		<th>Attended</th>
	</tr>

<?php

$sel = "SELECT * FROM `attendence` WHERE dnumber=1";

$qrydisplay = mysqli_query($connect, $sel);

while($row = mysqli_fetch_array($qrydisplay)){
			$id=$row['id'];
			$dnumber=$row['dnumber'];
			$ssn=$row['ssn'];
			$course_id=$row['course_id'];
			$total_classes=$row['total_classes'];
			$attended=$row['attended'];
	
				echo "<tr><td>".$row["id"]."</td><td>".$row["dnumber"]."</td><td>".$row["ssn"]."</td><td>".$row["course_id"]."</td><td>".$row["total_classes"]."</td><td>".$row["attended"]."</td><td><a href='edit_atten.php?edit=$id' >Edit</a></td><td><a href='delete_atten.php?deleteid=$id' >Delete</a></td></tr>";
			
			}
?>
</table>
<br><br>
<a href="cse.html">Back</a>
</body>
</html>