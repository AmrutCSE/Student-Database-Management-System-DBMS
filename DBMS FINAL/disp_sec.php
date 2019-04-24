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
		<th>Department Number</th>
		<th>SSN</th>
		<th>Section</th>
		<th>Semester</th>
	</tr>

<?php

$sel = "SELECT * FROM `section`";

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
<a href="Section.html"><button style="
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