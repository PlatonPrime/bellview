<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
require_once "../../database/config.php";
$rid=$_SESSION['RIDPU'];
$pid=$_SESSION['PIDPU'];
$rpn1=$_POST['product_desc'];
$rpn2=$_POST['product_ben'];
$rpn3=$_POST['product_pro'];
$rpn4=$_POST['product_car'];
$rpn5=$_POST['product_fac'];
$rpn6=$_POST['product_lip'];
$rpn7=$_POST['product_iod'];

$query = "INSERT INTO product_details values('".$pid."','".$rpn1."','".$rpn2."','".$rpn3."','".$rpn4."','".$rpn5."','".$rpn6."','".$rpn7."')";
 //$query = "UPDATE restauantproduct SET RPCost='".$rpn."', RPS='".$rpcost."' WHERE Rest_id='".$rid."' and RPID='".$pid."'";
$qu=mysqli_query($conn, $query);
if($qu){
	echo "<script type='text/javascript'>alert('The Product has been upated');</script>";
	header("Location: ../index.php");
	exit;
} else {
	echo("Error description: " . mysqli_error($conn));
}
?>