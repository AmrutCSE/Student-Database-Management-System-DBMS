<?php

include("db.php");



$getid = $_GET['edit'];



$seledittwo = "SELECT * FROM `course` WHERE `course_id` = '$getid'";





$qry = mysqli_query($connect, $seledittwo);



$selassoc = mysqli_fetch_assoc($qry);



$course_id = $selassoc['course_id'];
$pre_req = $selassoc['pre_req'];
$dnumber = $selassoc['dnumber'];


if(isset($_POST['updateedit'])) {

 $upcourse_id =  $_POST['course_id'];
 $uppre_req =  $_POST['pre_req'];
 $updnumber =  $_POST['dnumber'];




 $seleditt = "UPDATE `course` SET `course_id`='$upcourse_id',`pre_req`='$uppre_req',`dnumber`='$updnumber' WHERE `course_id` = '$upcourse_id'";

 $qry = mysqli_query($connect,$seleditt);



 if($qry) {

  header("location: disp_cour.php");

 }

}

?>





<!DOCTYPE html>

<html>

<head>

 <title></title>
 <link rel="stylesheet" href="edit_stu.css">

</head>

<body>
<br>
<br>
<center><h1>update course details</h1></center>

<br>
<br>
<br>
<br>
<br>
<br>
<br><br><br><br>

<center><form method="POST" action="">

<input type="text" name="course_id" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $course_id; ?>"><br ><br >
<input type="text" name="pre_req" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $pre_req; ?>"><br ><br >
<input type="text" name="dnumber" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $dnumber; ?>"><br ><br >
  
<input type="submit" name="updateedit" value="Update" style="
  width:10%;
  background: none;
  border:2px solid aqua;
  color:white;
  padding: 5px;
  font-size: 18px;
  cursor:pointer;
  margin:12px 0;"></center>
<br>
<br>
<a href="disp_cour.php" style="
  width:10%;
  background: none;
  border:2px solid aqua;
  color:white;
  padding: 5px;
  font-size: 18px;
  cursor:pointer;
  margin:12px 0;">Back</a>



</form>

</body>

</html>