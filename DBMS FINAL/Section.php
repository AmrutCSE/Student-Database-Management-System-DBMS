<?php

$Dnumber=$_POST['Dnumber'];
$SSN=$_POST['SSN'];
$section=$_POST['section'];
$sem=$_POST['sem'];

if(!empty($Dnumber)|| !empty($SSN)|| !empty($section)|| !empty($sem))
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
		$sql="INSERT INTO section values('$Dnumber','$SSN','$section','$sem')";
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