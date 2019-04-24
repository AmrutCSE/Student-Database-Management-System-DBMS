<?php

include("db.php");









?>

<html>
<head>
	<title>eligible</title>
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

$sel = "SELECT ssn,name from register where ssn in (select ssn from attendence where course_id='UE17CS202' and attended >=30 and attended <=45)";

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