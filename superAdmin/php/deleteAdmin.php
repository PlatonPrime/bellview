<?php
	include "../../database/config.php";
	$key=$_POST['album'];
	$sql = "DELETE FROM bellview_login WHERE email='$key'";

	if (mysqli_query($conn, $sql)) {
		echo "1";
	} else {
	    echo "0";
	}
?>