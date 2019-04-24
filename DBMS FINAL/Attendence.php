<?php
$Dnumber=$_POST['Dnumber'];
$SSN=$_POST['SSN'];
$course_id=$_POST['course_id'];
$tclass=$_POST['tclass'];
$aclass=$_POST['aclass'];

if(!empty($aclass)|| !empty($SSN)|| !empty($Dnumber)|| !empty($course_id)|| !empty($aclass))
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
		$sql="INSERT INTO attendence(dnumber,ssn,course_id,total_classes,attended) values('$Dnumber','$SSN','$course_id','$tclass','$aclass')";
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