<?php

include("db.php");





$getid = $_GET['deleteid'];



$sel = "DELETE FROM `attendence` WHERE `id` = '$getid'";

$qry = mysqli_query($connect, $sel);



if($qry) {

 header("location: disp_atten.php");

}





?>