<?php
	include "../../database/config.php";
	$key=$_POST['album'];

		$sql = "UPDATE cancel_oder SET status=1 WHERE RUID='$key'";
		if(mysqli_query($conn, $sql)){
			echo "1";
		}else{
			echo "0";
		}
?>