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

$sel = "SELECT ssn,name from register where dnumber=2 and  ssn in (select e.ssn from exams e inner join attendence a on e.ssn=a.ssn group by e.ssn having avg(e.marks) > 95 and avg(a.attended/a.total_classes) = 1)";

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