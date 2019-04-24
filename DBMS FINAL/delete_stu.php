<?php

include("db.php");





$getid = $_GET['deleteid'];



$sel = "DELETE FROM `register` WHERE `ssn` = '$getid'";

$qry = mysqli_query($connect, $sel);



if($qry) {

 header("location: disp_stu.php");

}





?>