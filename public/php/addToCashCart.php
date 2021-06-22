<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
include "../../database/config.php";
/*echo "<pre>";
print_r($_POST);
exit();*/
$Ruid=$_SESSION['RERID']; 
$name=$_POST['res_name'];
$phno=$_POST['res_num'];
$cost=$_POST['res_amt'];

if(isset($_POST['coupon_code'])){
	$coupon_code = $_POST['coupon_code'];
} else {
	$coupon_code = "";
}
if(isset($_POST['subtotal'])){
	$subtotal = $_POST['subtotal'];
} else {
	$subtotal = "";
}
if(isset($_POST['discount_amount'])){
	$discount_amount = $_POST['discount_amount'];
} else {
	$discount_amount = "";
}
if(isset($_POST['discount_type'])){
	$discount_type = $_POST['discount_type'];
} else {
	$discount_type = "";
}
if(isset($_POST['discount_value'])){
	$discount_value = $_POST['discount_value'];
} else {
	$discount_value = "";
}

date_default_timezone_set("Asia/Kolkata");
$date= date("d/m/Y H:i a");
$query = "INSERT INTO `cash_pay`(`PUID`, `PUName`, `PUPhone`, `TotalCost`, `date`, `status`, `cid`, `coupon_code`, `subtotal`, `discount_amount`, `discount_type`, `discount_value`) VALUES ('$Ruid','$name','$phno','$cost','$date','0','0','$coupon_code','$subtotal','$discount_amount','$discount_type','$discount_value')";
/*$query = "INSERT INTO cash_pay VALUES('".$Ruid."','".$name."','".$phno."','".$cost."','".$date."','0','0')";*/
$qu=mysqli_query($conn, $query);
if($qu){          
    echo "<script type='text/javascript'>alert('The Product has been upated');</script>";
    header("Location: ../waiting.php");
}
else{
    echo("Error description: " . mysqli_error($conn));
}
?>