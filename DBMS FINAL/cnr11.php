<?php

include("db.php");









?>

<html>
<head>
	<title>CNR SCHOLORSHIPS</title>
</head>
<body>
<a href="main.html">Home</a> 
<a href="search_atten.php">Search</a>   
<table>
	<tr>
		<th>SSN</th>
		<th>NAME</th>
	</tr>

<?php

$sel = "SELECT ssn,name FROM `register` WHERE dnumber=2 and ssn IN(SELECT ssn FROM `exams` group by ssn having avg(marks) > 85)";

$qrydisplay = mysqli_query($connect, $sel);

while($row = mysqli_fetch_array($qrydisplay)){
			$ssn=$row['ssn'];
			$username=$row['name'];
	
				echo "<tr><td>".$row["ssn"]."</td><td>".$row["name"]."</td><td>";
			
			
			}
?>
</table>
<br><br>
<a href="cse.html">Back</a>
</body>
</html>