<?php
session_start();
$image = $_POST['image'];
$rpn = $_POST['resname'];
 $rid=$_SESSION['RIDPF'];

        
        $id = substr($rpn, 0, 4);
        
        $ran=$_SESSION['RAN'];
        $rpid=$rid.$id.$ran;
		list($type, $image) = explode(';',$image);
list(, $image) = explode(',',$image);
$image = base64_decode($image);
$image_name =$rid.".jpg";

file_put_contents('../../upload/item_image/'.$image_name, $image);
?>