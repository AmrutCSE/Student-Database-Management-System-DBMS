<?php

include("db.php");









?>

<html>
<head>
	<title>Table with Course database</title>
</head>
<body>
<a href="main.html">Home</a>
<a href="search_cour.php">Search</a>    
<table>
	<tr>
		<th>Course_id</th>
		<th>Pre-Req</th>
		<th>Department Number</th>
	</tr>

<?php

$sel = "SELECT * FROM `course` WHERE dnumber=1";

$qrydisplay = mysqli_query($connect, $sel);

while($row = mysqli_fetch_array($qrydisplay)){
			$course_id=$row['course_id'];
			$pre_req=$row['pre_req'];
			$dnumber=$row['dnumber'];
	
				echo "<tr><td>".$row["course_id"]."</td><td>".$row["pre_req"]."</td><td>".$row["dnumber"]."</td><td><a href='edit_cour.php?edit=$course_id' >Edit</a></td><td><a href='delete_cour.php?deleteid=$course_id' >Delete</a></td></tr>";
			
			}
?>
</table>
<br><br>
<a href="cse.html">Back</a>
</body>
</html>