<?php

include("db.php");



$getid = $_GET['edit'];



$seledittwo = "SELECT * FROM `exams` WHERE `id` = '$getid'";





$qry = mysqli_query($connect, $seledittwo);



$selassoc = mysqli_fetch_assoc($qry);



$id = $selassoc['id'];
$ssn = $selassoc['ssn'];
$course_id = $selassoc['course_id'];
$marks = $selassoc['marks'];
$grades = $selassoc['grades'];
$dnumber = $selassoc['dnumber'];



if(isset($_POST['updateedit'])) {

 $upid =  $_POST['id'];
 $upssn =  $_POST['ssn'];
 $upcourse_id =  $_POST['course_id'];
 $upmarks =  $_POST['marks'];
 $upgrades =  $_POST['grades'];
 $updnumber =  $_POST['dnumber'];






 $seleditt = "UPDATE `exams` SET `id`='$upid',`ssn`='$upssn',`course_id`='$upcourse_id',`marks`='$upmarks',`grades`='$upgrades',`dnumber`='$updnumber' WHERE `id` = '$upid'";

 $qry = mysqli_query($connect,$seleditt);



 if($qry) {

  header("location: disp_exam.php");

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
<center><h1>update exam details</h1></center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<center><form method="POST" action="">
<input type="text" name="id" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $id; ?>"><br ><br >
<input type="text" name="ssn" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $ssn; ?>"><br ><br >
<input type="text" name="course_id" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $course_id; ?>"><br ><br >
<input type="text" name="marks" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $marks; ?>"><br ><br >
<input type="text" name="grades" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $grades; ?>"><br ><br >
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
<a href="disp_exam.php" style="
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