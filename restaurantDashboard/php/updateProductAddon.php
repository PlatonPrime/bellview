<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
require_once "../../database/config.php";
$product_addon_id=$_POST['product_addon_id'];

 $query = "UPDATE product_addon SET product_id='".$_POST['product_id']."', addon='".$_POST['addon']."', price='".$_POST['price']."' WHERE product_addon_id='".$product_addon_id."'";
	$qu=mysqli_query($conn, $query);
    if($qu){
        echo "<script type='text/javascript'>alert('Coupon code successfully upated.');</script>";
        header("Location: ../productAddon.php");
        exit;
    } else {
    	echo("Error description: " . mysqli_error($conn));
    }
?>