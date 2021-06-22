<?php
    include "../../database/config.php";
    $key=$_POST['rest_id1'];
$restaddress=$_POST['rest_address'];
$restpincode=$_POST['rest_pin'];
$restcontact=$_POST['rest_contact'];
$resttables=$_POST['rest_tables'];
$restgst=$_POST['rest_gst'];
		$sql = "DELETE FROM resturanttable WHERE (m_id='$key' or Rest_id='$key')";

if (mysqli_query($conn, $sql)) {
	$sql1 = "UPDATE restauantname SET Rest_addr='$restaddress', Rest_pincode='$restpincode', Rest_contact='$restcontact', Rest_tables='$resttables', GST='$restgst' WHERE Rest_id='$key'";

if (mysqli_query($conn, $sql1)) {

	for ($x = 1; $x <= (int)$resttables; $x++) {
                        $rest1=$key."TA".$x;
                        mysqli_query($conn,"insert into  resturanttable values('0','".$key."','".$rest1."')" );
    }

    echo "1";
} else {
    echo "0";
}
} else {
    echo "0";
}
?>