<?php
session_start();
include "../../database/config.php";
date_default_timezone_set("Asia/Kolkata");
$da= date("d/m/Y H:i a");
//$ruid=$_POST['ruid'];
//$rpid=$_POST['rpid'];

$data = json_decode(stripslashes($_POST['data']));
//$leng =$_POST['leng'];
$data1 = json_decode(stripslashes($_POST['data1']));
$a=sizeof($data);

for($x = 0; $x <sizeof($data); $x++) {
    $query2 = "DELETE FROM add_cart WHERE RUID='".$data[$x]."' and RPID='".$data1[$x]."' ";
    mysqli_query($conn, $query2);
}

mysqli_close($conn);

exit();
?>