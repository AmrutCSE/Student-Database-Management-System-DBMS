<?php

include("db.php");



$getid = $_GET['edit'];



$seledittwo = "SELECT * FROM `department` WHERE `dnumber` = '$getid'";





$qry = mysqli_query($connect, $seledittwo);



$selassoc = mysqli_fetch_assoc($qry);


$dnumber = $selassoc['dnumber'];
$dname = $selassoc['dname'];



if(isset($_POST['updateedit'])) {

 $updnumber =  $_POST['dnumber'];
 $updname =  $_POST['dname'];






 $seleditt = "UPDATE `department` SET `dnumber`='$updnumber',`dname`='$updname' WHERE `dnumber` = '$updnumber'";

 $qry = mysqli_query($connect,$seleditt);



 if($qry) {

  header("location: disp_dep.php");

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
<center><h1>update department</h1></center>
<br>
<br>
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

<input type="text" name="dnumber" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $dnumber; ?>"><br ><br >
<input type="text" name="dname" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $dname; ?>"><br ><br >
  
<input type="submit" name="updateedit" value="Update" style="
  width:10%;
  background: none;
  border:2px solid aqua;
  color:white;
  padding: 5px;
  font-size: 18px;
  cursor:pointer;
  margin:12px 0;">
<br>
<br></center><br><br>
<a href="disp_dep.php" style="
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