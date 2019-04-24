<?php

include("db.php");









?>

<html>
<head>
	<title>Table with department database</title>
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
		<th>Department Name</th>
		<th>Department Number</th>
	</tr>

<?php

$sel = "SELECT * FROM `department` ";

$qrydisplay = mysqli_query($connect, $sel);

while($row = mysqli_fetch_array($qrydisplay)){
			$dnumber=$row['dnumber'];
			$dname=$row['dname'];
			
				echo "<tr><td>".$row["dnumber"]."</td><td>".$row["dname"]."</td><td><a href='edit_dep.php?edit=$dnumber' >Edit</a></td><td><a href='delete_dep.php?deleteid=$dnumber' >Delete</a></td></tr>";
			
			}
?>
</table>
<br><br>
<a href="department.html"><button style="
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