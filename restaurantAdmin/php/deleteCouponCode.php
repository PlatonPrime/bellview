<?php
	include "../../database/config.php";
	$coupon_code_id=$_POST['coupon_code_id'];
	$sql = "DELETE FROM coupon_code WHERE coupon_code_id='$coupon_code_id'";

	if (mysqli_query($conn, $sql)) {
		echo "1";
	} else {
	    echo "0";
	}
?>