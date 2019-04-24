<?php
$Dnumber=$_POST['Dnumber'];
$Dname=$_POST['Dname'];

if(!empty($Dnumber)|| !empty($Dname))
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
		$sql="INSERT INTO department(Dnumber,Dname)values('$Dnumber','$Dname')";
		if($conn->query($sql)){
			header("location: disp_dep.php");
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
<?php
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
		$sql="select * from department;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo $row['dname']. "<br>";
			
			}
		
		}
	}
?>