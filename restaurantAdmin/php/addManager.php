<?php
        error_reporting(E_ERROR | E_PARSE);
        include "../../database/config.php";
        $resname=$_POST['res_name'];
        $rescontact=$_POST['res_contact'];
        $resemail=$_POST['res_email'];
        $resaddress=$_POST['res_address'];
        $respwd=$_POST['res_pwd'];
        $id=$_POST['res_id'];

        $sourcePath = $_FILES['imageUpload']['tmp_name'];     //saving images in directory til line 7
        $filename = $_FILES["imageUpload"]["name"];
        $ext = end((explode(".", $filename)));


        $resid=$id."cod".generateRandomString();
        $found = true;
        while($found == true){
            $check_ID = mysqli_query($conn, "SELECT cid FROM cash_on_deliver where cid='$resid'");
            if(mysqli_num_rows($check_ID) == 0){
                $found = false;
            } else {
                $resid=$id."cod".generateRandomString();
            }
        }

        $imagename=$resid.".".$ext;
        $targetPath = "../../upload/manager_image/".$imagename;

        $check_email = mysqli_query($conn, "SELECT cid FROM cash_on_deliver where (cphone = '$rescontact' ||    cdob = '$resemail' )");
        if(mysqli_num_rows($check_email) > 0){
            echo('Already Exist');
        }
        else{
            $query = "insert into cash_on_deliver values('".$resid."','".$resname."','".$rescontact."','".$resaddress."','".$resemail."','".$id."','".$respwd."','".$imagename."')";
            if(mysqli_query($conn, $query))
            {
                    move_uploaded_file($sourcePath,$targetPath);
                    echo "1";
            }  
        }



        function generateRandomString($length = 4) {
    return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
  }
?>