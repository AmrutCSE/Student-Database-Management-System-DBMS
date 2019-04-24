<?php
$course_ID=$_POST['course_ID'];
$pre_req=$_POST['pre_req'];
$Dnumber=$_POST['Dnumber'];

if(!empty($Dnumber)|| !empty($course_ID) || !empty($pre_req))
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
		$sql="INSERT INTO course values('$course_ID','$pre_req','$Dnumber')";
		if($conn->query($sql)){
			header("location: disp_cour.php");
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