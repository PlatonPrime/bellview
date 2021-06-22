<?php
    error_reporting(0);
	include "../../database/config.php";

	$caption=$_POST['add_cap'];
	$sourcePath = $_FILES['uploadimg']['tmp_name'];     //saving images in directory til line 7
    $filename = $_FILES["uploadimg"]["name"];
    $ext = end((explode(".", $filename)));

	$resid="BEL_ADD".generateRandomString();
    $found = true;
    while($found == true){
        $check_ID = mysqli_query($conn, "SELECT CID FROM revenue where CID='$resid'");
        if(mysqli_num_rows($check_ID) == 0){
            $found = false;
        } else {
            $resid="BELLVIEW_".generateRandomString();
        }
    }

    $imagename=$resid.".".$ext;
    $targetPath = "../../upload/addons_image/".$imagename;
    move_uploaded_file($sourcePath,$targetPath);
    $query = "INSERT INTO revenue VALUES('".$resid."','".$imagename."','".$caption."')";
    if(mysqli_query($conn, $query))
    {
    	echo "1";
    }else{
    	echo "0";
    }

    function generateRandomString($length = 3) {
        return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
    }
?>