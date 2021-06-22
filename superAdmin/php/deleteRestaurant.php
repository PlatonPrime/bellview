<?php

include "../../database/config.php";
$key=$_POST['album'];
$sql = "DELETE FROM restauantname WHERE Rest_id='$key'";

if (mysqli_query($conn, $sql)) {
	$sql = "DELETE FROM resturanttable WHERE (m_id='$key' or Rest_id='$key')";
	if (mysqli_query($conn, $sql)) {
    		echo "1";
    	}else{
    		echo "0";
    	}
} else {
    echo "0";
}
?>