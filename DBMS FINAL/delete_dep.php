<?php

include("db.php");





$getid = $_GET['deleteid'];



$sel = "DELETE FROM `department` WHERE `dnumber` = '$getid'";

$qry = mysqli_query($connect, $sel);



if($qry) {

 header("location: disp_dep.php");

}





?>