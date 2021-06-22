<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
require_once "../../database/config.php";
$rid=$_SESSION['RIDPU'];
$pid=$_SESSION['OPIDPU'];
$rpn=$_POST['res_name'];
$rpcost=$_POST['res_item_vn'];
$rpgst=$_POST['res_gst'];
 $query = "UPDATE offer SET Cost='".$rpn."', Status='".$rpcost."', GST='".$rpgst."' WHERE RID='".$rid."' and ROID='".$pid."'";
$qu=mysqli_query($conn, $query);
if($qu){
    echo "<script type='text/javascript'>alert('The Offer has been upated');</script>";
    header("Location: ../manageOffer.php");
exit;
}
else{
    echo("Error description: " . mysqli_error($conn));
}
?>