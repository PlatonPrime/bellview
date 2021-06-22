<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
require_once "../../database/config.php";
$coupon_code_id=$_POST['coupon_code_id'];

 $query = "UPDATE coupon_code SET couponcode='".strtoupper($_POST['couponcode'])."', type='".$_POST['type']."', value='".$_POST['value']."', expire_date='".$_POST['expire_date']."', usage_limit='".$_POST['usage_limit']."' WHERE coupon_code_id='".$coupon_code_id."'";
	$qu=mysqli_query($conn, $query);
    if($qu){
        echo "<script type='text/javascript'>alert('Coupon code successfully upated.');</script>";
        header("Location: ../manageCouponCode.php");
        exit;
    } else {
    	echo("Error description: " . mysqli_error($conn));
    }
?>