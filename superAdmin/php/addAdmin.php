<?php
	include "../../database/config.php";

	$email=$_POST['email'];
	$pwd=$_POST['pwd'];



	$resid="BELLVIEW_".generateRandomString();
        $found = true;
        while($found == true){
            $check_ID = mysqli_query($conn, "SELECT bid FROM bellview_login where bid='$resid'");
            if(mysqli_num_rows($check_ID) == 0){
                $found = false;
            } else {
                $resid="BELLVIEW_".generateRandomString();
            }
        }

$query = "INSERT INTO bellview_login VALUES('".$resid."','".$email."','".$pwd."')";
            if(mysqli_query($conn, $query))
            {
            	echo "1";
            }else{
            	echo "0";
            }



        function generateRandomString($length = 2) {
    return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
  }

?>