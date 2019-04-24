 <?php

include("db.php");









?>
 <html>
<head>
	<title>Table with Section database</title>
</head>
<body>
<a href="main.html">Home</a>  
<a href="search_sec.php">Search</a>  
<table>
	<tr>
		<th>Department Number</th>
		<th>SSN</th>
		<th>Section</th>
		<th>Semester</th>
	</tr>

<?php

$sel = "SELECT * FROM `section` WHERE dnumber=7";

$qrydisplay = mysqli_query($connect, $sel);

while($row = mysqli_fetch_array($qrydisplay)){
			$dnumber=$row['dnumber'];
			$ssn=$row['ssn'];
			$section=$row['section'];
			$sem=$row['sem'];
	
				echo "<tr><td>".$row["dnumber"]."</td><td>".$row["ssn"]."</td><td>".$row["section"]."</td><td>".$row["sem"]."</td><td><a href='edit_sec.php?edit=$ssn' >Edit</a></td><td><a href='delete_sec.php?deleteid=$ssn' >Delete</a></td></tr>";
			
			}
?>
</table>
<br><br>
<a href="biotech.html">Back</a>
</body>
</html>