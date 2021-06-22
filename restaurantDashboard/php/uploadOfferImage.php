<?php
session_start();
$image = $_POST['image'];
$rpn = $_POST['resname'];
 $rid=$_SESSION['RIDPP'];

list($type, $image) = explode(';',$image);
list(, $image) = explode(',',$image);
$image = base64_decode($image);
//$image_name = "off".$rid.$id.".jpg";
$image_name = $rid.".jpg";
file_put_contents('../../upload/offer_image/'.$image_name, $image);
?>