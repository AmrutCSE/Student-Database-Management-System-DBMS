<?php

include("db.php");





$getid = $_GET['deleteid'];



$sel = "DELETE FROM `section` WHERE `ssn` = '$getid'";

$qry = mysqli_query($connect, $sel);



if($qry) {

 header("location: disp_sec.php");

}





?>