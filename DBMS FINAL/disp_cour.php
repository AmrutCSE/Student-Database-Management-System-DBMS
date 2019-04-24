<?php

include("db.php");









?>

<html>
<head>
	<title>Table with Course database</title>
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
		<th>Course_id</th>
		<th>Pre-Req</th>
		<th>Department Number</th>
	</tr>

<?php

$sel = "SELECT * FROM `course` ";

$qrydisplay = mysqli_query($connect, $sel);

while($row = mysqli_fetch_array($qrydisplay)){
			$course_id=$row['course_id'];
			$pre_req=$row['pre_req'];
			$dnumber=$row['dnumber'];
	
				echo "<tr><td>".$row["course_id"]."</td><td>".$row["pre_req"]."</td><td>".$row["dnumber"]."</td><td><a href='edit_cour.php?edit=$course_id' >Edit</a></td><td><a href='delete_cour.php?deleteid=$course_id' >Delete</a></td></tr>";
			
			}
?>
</table>
<a href="Course.html"><button style="
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