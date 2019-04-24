<?php

include("db.php");





$getid = $_GET['deleteid'];



$sel = "DELETE FROM `course` WHERE `course_id` = '$getid'";

$qry = mysqli_query($connect, $sel);



if($qry) {

 header("location: disp_cour.php");

}





?>