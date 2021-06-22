<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
require_once "../../database/config.php";
$rid=$_SESSION['RIDPU'];
$pid=$_SESSION['PIDPU'];
$rpn=$_POST['res_name'];
$rpcost=$_POST['res_item_vn'];
$rpgst=$_POST['res_gst'];
 $query = "UPDATE restauantproduct SET RPCost='".$rpn."', RPS='".$rpcost."', GST='".$rpgst."' WHERE Rest_id='".$rid."' and RPID='".$pid."'";
$qu=mysqli_query($conn, $query);
             if($qu){
                 echo "<script type='text/javascript'>alert('The Product has been upated');</script>";
            header("Location: ../viewItems.php");
        exit;
        }
        else{
            echo("Error description: " . mysqli_error($conn));
        }
    
    


?>