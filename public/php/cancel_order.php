<?php
	include "../../database/config.php";

	$key=$_POST['uid'];

	$sql = "DELETE FROM add_cart WHERE RUID='$key'";
	if (mysqli_query($conn, $sql)) {
		$sql1 = "DELETE FROM del_cart WHERE RUID='$key'";
		if (mysqli_query($conn, $sql1)) {
			$sql2 = "DELETE FROM user_pay WHERE RUID='$key'";
			if (mysqli_query($conn, $sql2)) {
				echo "1";
			}
		}
	}
?>