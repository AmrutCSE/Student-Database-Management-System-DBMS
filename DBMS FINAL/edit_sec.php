<?php

include("db.php");



$getid = $_GET['edit'];



$seledittwo = "SELECT * FROM `section` WHERE `ssn` = '$getid'";





$qry = mysqli_query($connect, $seledittwo);



$selassoc = mysqli_fetch_assoc($qry);



$dnumber = $selassoc['dnumber'];
$ssn = $selassoc['ssn'];
$section = $selassoc['section'];
$sem = $selassoc['sem'];



if(isset($_POST['updateedit'])) {

 $updnumber =  $_POST['dnumber'];
 $upssn =  $_POST['ssn'];
 $upsection =  $_POST['section'];
 $upsem =  $_POST['sem'];



 $seleditt = "UPDATE `section` SET `dnumber`='$updnumber',`ssn`='$upssn',`section`='$upsection',`sem`='$upsem' WHERE `ssn` = '$upssn'";

 $qry = mysqli_query($connect,$seleditt);



 if($qry) {

  header("location: disp_sec.php");

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
<br><br><br><br>

<center><form method="POST" action="">

<input type="text" name="dnumber" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $dnumber; ?>"><br ><br >
<input type="text" name="ssn" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $ssn; ?>"><br ><br >
<input type="text" name="section" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $section; ?>"><br ><br >
<input type="text" name="sem" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $sem; ?>"><br ><br >

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
<a href="disp_sec.php" style="
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