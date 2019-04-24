<!DOCTYPE HTML>
<html>
<head>
  <title>Student Deletion Form</title>
</head>
    
<body>
<a href="main.html">Home</a>
	<center><strong><head>Student Deletion Form</head></strong></center>
	</br>
	</br>
 <form action="del_stu.php" method="GET">
    SSN :<br>
    <input type="text" name="SSN" required>
	<br>
	<input type="submit" value="submit">
 </form>
 <br><br>
 <br>
<a href="main.html">Back</a>
</body>
</html>

<?php
$SSN=$_GET['SSN'];
if(!empty($SSN))
{
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="student";
    
    //create connection
    $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
    
    if(mysqli_connect_error())
	{
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		$sql="DELETE FROM `exams` WHERE `ssn`='$SSN'";
		$sql="DELETE FROM `register` WHERE `ssn`='$SSN'"; 
		if($conn->query($sql)){
			echo "record is deleted successfully";
		}
		else{
			echo "Error: " .$sql ."<br>".$conn->error;
		}
		
	}
}
else
{
    echo "ALL field are required";
}

?>