<?php

$con=new mysqli("localhost","root","","student");

include 'connection.php';
$conn = OpenCon();
echo "Connected Successfully";
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "manthu1234";
 $db = "online_retail_management";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }
?>

function ques1(){
	$sql = "select ssn,date_of_birth,dnumber from register where name='monish';"
	//mysqli_query($con,);
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "ssn: ".$row["ssn"]."DOB" . $row["date_of_birth"]. "Dnumber" .$row["dnumber"];
    }
}
}
function ques2(){
	$sql = "select ssn from register where dnumber=1;"
	//mysqli_query($con,$sql);
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "ssn: ".$row["ssn"];
    }
}
}

function ques3(){
	$sql = "select ssn,name from register where ssn in (select ssn from exams where marks > 90);" >
	//mysqli_query($con, $sql);
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "ssn: ".$row["ssn"]."name:" . $row["name"];
    }
}
}
function ques4(){
	//mysqli_query($con,"
	$sql = 	"select ssn,name from register where ssn in (select ssn from attendence where attended >= 45);");
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "ssn: ".$row["ssn"]."name" . $row["name"];
    }
}
}
function ques5(){
	//mysqli_query($con,"
	$sql = 	"select ssn,name from register where ssn in (select ssn from section where dnumber=1 and section='H');");
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "ssn: ".$row["ssn"]."name" . $row["name"];
    }
}
}
function ques6(){
	//mysqli_query($con,"
	$sql = 	"select name from register where dnumber in (select dnumber from department where dname='CSE' INTERSECT select dnumber from exams where grades='S');");
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "name" . $row["name"];
    }
}
}
function ques7(){
	//mysqli_query($con,"
	$sql = 	"select course_id from course where dnumber in (select dnumber from department where dname='ME');");
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "course_id:" . $row["course_id"];
    }
}
}
function ques8(){
	//mysqli_query($con,"
	$sql = 	"select marks,grades from exams where ssn='PES1201701112' and course_id='UE17CS205';");
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "marks: ".$row["marks"]."name" . $row["marks"];
    }
}
}
function ques9(){
	//mysqli_query($con,"
	$sql = 	"update exams set marks=marks+3 where course_id='UE17CS203';");
	$result = $con->query($sql);
}
function ques10(){
	//mysqli_query($con,"
	$sql = 	"update exams set marks=100,grades='S' where ssn in (select ssn from register where name='monish');");
$result = $con->query($sql);
}

$result = $con->query($sql);



/?>