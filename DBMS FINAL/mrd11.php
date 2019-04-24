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
	</tr>

<?php

$sel = "SELECT ssn from exams where dnumber=2 group by ssn order by avg(marks) desc LIMIT 3";

$qrydisplay = mysqli_query($connect, $sel);

while($row = mysqli_fetch_array($qrydisplay)){
			$ssn=$row['ssn'];
	
				echo "<tr><td>".$row["ssn"]."</td><td>";
			
			
			}
?>
</table>
<br><br>
<a href="cse.html">Back</a>
</body>
</html>