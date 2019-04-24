<?php
$SSN=$_POST['SSN'];
$course_ID=$_POST['course_ID'];
$Marks=$_POST['Marks'];
$Grade=$_POST['Grade'];
$Dnumber=$_POST['Dnumber'];

if(!empty($SSN)|| !empty($Dnumber)|| !empty($Marks)|| !empty($Grade))
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
		$sql="INSERT INTO exams(ssn,course_id,marks,grades,dnumber)  values('$SSN','$course_ID','$Marks','$Grade','$Dnumber')";
		if($conn->query($sql)){
			echo "New record is inserted successfully";
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