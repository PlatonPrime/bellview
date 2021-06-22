<?php
	include "../../database/config.php";
	$product_addon_id=$_POST['product_addon_id'];
	$sql = "DELETE FROM product_addon WHERE product_addon_id='$product_addon_id'";

	if (mysqli_query($conn, $sql)) {
		echo "1";
	} else {
	    echo "0";
	}
?>