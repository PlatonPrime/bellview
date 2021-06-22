<?php
session_start();
include "../../database/config.php";
date_default_timezone_set("Asia/Kolkata");
$da= date("d/m/Y H:i a");
//$ruid=$_POST['ruid'];
//$rpid=$_POST['rpid'];

$data = json_decode(stripslashes($_POST['data']));
//$leng =$_POST['leng'];
$data1 = json_decode(stripslashes($_POST['data1']));
$data2 = json_decode(stripslashes($_POST['data2']));
$data3 = json_decode(stripslashes($_POST['data3']));
$data4 = json_decode(stripslashes($_POST['data4']));
$a=sizeof($data);



$code=0;
	for($y=0;$y<sizeof($data);$y++){
	//$check_email4 = mysqli_query($conn, "SELECT * FROM add_cart WHERE RPR in (1,2,3) GROUP by rpr");
	//$check_email1 = mysqli_query($conn, "SELECT * FROM add_cart WHERE RPR in (1,2) GROUP by rpr");
    //$check_email2 = mysqli_query($conn, "SELECT * FROM add_cart WHERE RPR in (1,3) GROUP by rpr");
	//$check_email3 = mysqli_query($conn, "SELECT * FROM add_cart WHERE RPR in (2,3) GROUP by rpr");


	$query1 = "UPDATE cash_pay SET status='5',cid='".$data4[$y]."' WHERE PUID ='".$data[$y]."'";
	mysqli_query($conn, $query1);
    

 
}

/*
for($x = 0; $x <sizeof($data); $x++) {
	$query = "insert into user_pay values('".$data[$x]."','".$data1[$x]."','".$data2[$x]."','".$data3[$x]."','".$da."')";
	$aa=mysqli_query($conn, $query);

	$query1 = "UPDATE cash_pay SET status='1' WHERE PUID ='".$data[$x]."'";
	mysqli_query($conn, $query1);
}*/

?>