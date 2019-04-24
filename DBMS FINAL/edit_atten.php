<?php

include("db.php");



$getid = $_GET['edit'];



$seledittwo = "SELECT * FROM `attendence` WHERE `id` = '$getid'";





$qry = mysqli_query($connect, $seledittwo);



$selassoc = mysqli_fetch_assoc($qry);


$id=$selassoc['id'];
$dnumber = $selassoc['dnumber'];
$ssn = $selassoc['ssn'];
$course_id = $selassoc['course_id'];
$total_classes = $selassoc['total_classes'];
$attended = $selassoc['attended'];



if(isset($_POST['updateedit'])) {
 $upid=$_POST['id'];
 $updnumber =  $_POST['dnumber'];
 $upssn =  $_POST['ssn'];
 $upcourse_id =  $_POST['course_id'];
 $uptotal_classes =  $_POST['total_classes'];
 $upattended =  $_POST['attended'];
 



 $seleditt = "UPDATE `attendence` SET `id`='$upid',`dnumber`='$updnumber',`ssn`='$upssn',`course_id`='$upcourse_id',`total_classes`='$uptotal_classes',`attended`='$upattended' WHERE `id` = '$upid'";

 $qry = mysqli_query($connect,$seleditt);



 if($qry) {

  header("location: disp_atten.php");

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
<center><h1>update section details</h1></center>
<br>
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
<input type="text" name="dnumber" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $dnumber; ?>"><br ><br >
<input type="text" name="ssn" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $ssn; ?>"><br ><br >
<input type="text" name="course_id" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $course_id; ?>"><br ><br >
<input type="text" name="total_classes" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $total_classes; ?>"><br ><br >
<input type="text" name="attended" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $attended; ?>"><br ><br >

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
<a href="disp_atten.php" style="
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