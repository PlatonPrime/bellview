<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
if(isset($_POST["action"])) 
{
    
include "../../database/config.php";
    if($_POST["action"] == "insert")
    {
        
        $resname=$_POST['res_name'];
        $resadr=$_POST['res_adr'];
        $respin=$_POST['res_pin'];
        $rescontact=$_POST['res_contact'];
        $restb=$_POST['res_tables'];
        $restm=$_POST['res_time'];
        $resct=$_POST['res_cat'];
        $resemail=$_POST['res_email'];
        $respwd=$_POST['res_pwd'];
        $resgst=$_POST['res_gst'];
        $name = $_FILES['imageUpload']['name'];
        $target_dir = "upload/";
      
        /*$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $extensions_arr = array("jpg","jpeg","png","gif");*/
        

  $sourcePath = $_FILES['imageUpload']['tmp_name'];     //saving images in directory til line 7
  $filename = $_FILES["imageUpload"]["name"];
  $ext = end((explode(".", $filename)));
  
    



        $res = substr($resname, 0, 4);
        $string = preg_replace('/\s+/', '', $res);
        

        //$resid= str_replace(' ','',($res.$id));
        $resid=$string.generateRandomString();
        $found = true;
        while($found == true){
            $check_ID = mysqli_query($conn, "SELECT Rest_id FROM restauantname where Rest_id='$resid'");
            if(mysqli_num_rows($check_ID) == 0){
                $found = false;
            } else {
                $resid=generateRandomString();
            }
        }

    $imagename=$resid.".".$ext;
    $targetPath = "../../upload/restaurant_image/".$imagename;
        
        $check_email = mysqli_query($conn, "SELECT Rest_id FROM restauantname where (Rest_contact = '$rescontact' || 	Rest_email = '$resemail' )");
        if(mysqli_num_rows($check_email) > 0){
            echo('Already Exist');
        }
        else{
            $query = "INSERT INTO restauantname VALUES('".$resid."','".$resname."','".$resadr."','".$respin."','".$rescontact."','".$restb."','".$restm."','".$resct."','".$resemail."','".$respwd."','".$resgst."','".$imagename."')";
            if(mysqli_query($conn, $query))
            {
                /*if( in_array($imageFileType,$extensions_arr) )
                {*/
                    mysqli_query($conn,$query);
                    
                    move_uploaded_file($sourcePath,$targetPath);
                    //move_uploaded_file($_FILES['imageUpload']['tmp_name'],$target_dir.$name);
                    for ($x = 1; $x <= (int)$restb; $x++) {
                        $rest1=substr($resname, 0, 6)."TA".$x;
                        $rest=str_replace(' ','',$rest1);
                        mysqli_query($conn,"insert into  resturanttable values('0','".$resid."','".$rest."')" );
                    }
                    echo 'Image Inserted into Database';
                     
               /* }*/
            }  
        }
    }
    
    
}
mysqli_close($conn);




function generateRandomString($length = 2) {
    return substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', ceil($length/strlen($x)) )),1,$length);
  }

?>