<?php

include("db.php");



$getid = $_GET['edit'];



$seledittwo = "SELECT * FROM `register` WHERE `ssn` = '$getid'";





$qry = mysqli_query($connect, $seledittwo);



$selassoc = mysqli_fetch_assoc($qry);



$name = $selassoc['name'];
$ssn = $selassoc['ssn'];
$gender = $selassoc['gender'];
$date_of_birth = $selassoc['date_of_birth'];
$email = $selassoc['email'];
$phone = $selassoc['phone'];
$landline = $selassoc['landline'];
$dnumber = $selassoc['dnumber'];



if(isset($_POST['updateedit'])) {

 $upname =  $_POST['name'];
 $upssn =  $_POST['ssn'];
 $upgender =  $_POST['gender'];
 $update_of_birth =  $_POST['date_of_birth'];
 $upemail =  $_POST['email'];
 $upphone =  $_POST['phone'];
 $uplandline =  $_POST['landline'];
 $updnumber =  $_POST['dnumber'];






 $seleditt = "UPDATE `register` SET `name`='$upname',`ssn`='$upssn',`gender`='$upgender',`date_of_birth`='$update_of_birth',`email`='$upemail',`phone`='$upphone',`landline`='$uplandline',`dnumber`='$updnumber' WHERE `ssn` = '$upssn'";

 $qry = mysqli_query($connect,$seleditt);



 if($qry) {

  header("location: disp_stu.php");

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
<center><h1>update student details</h1></center>
<br><br><br><br><br>
<center><form method="POST" action="">

<input type="text" name="name" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $name; ?>"><br ><br >
<input type="text" name="ssn" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $ssn; ?>"><br ><br >
<input type="text" name="gender" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $gender; ?>"><br ><br >
<input type="date" name="date_of_birth" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $date_of_birth; ?>"><br ><br >
<input type="email" name="email" style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px" value="<?php echo $email; ?>"><br ><br >
<input type="text" name="phone"  style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px"value="<?php echo $phone; ?>"><br ><br >
<input type="text" name="landline"  style="background:none;outline:none;border:1px solid aqua;color:white;font-size:25px"value="<?php echo $landline; ?>"><br ><br >
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
<a href="disp_stu.php" style="
  width:15%;
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