<?php
$username=$_POST['username'];
$SSN=$_POST['SSN'];
$Dnumber=$_POST['Dnumber'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$landline=$_POST['landline'];

if(!empty($username)|| !empty($SSN)|| !empty($Dnumber)|| !empty($gender)|| !empty($date)|| !empty($phone))
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
		$sql="INSERT INTO register values('$username','$SSN','$gender','$date','$email','$phone','$landline','$Dnumber')";
		if($conn->query($sql)){
			header("location: disp_stu.php");
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