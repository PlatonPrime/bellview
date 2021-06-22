<?php 
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE); 

if(isset($_POST["action"])) 
{
    
    require_once "../../database/config.php";
    if($_POST["action"] == "insert")
    {
        
        $rid=$_SESSION['RIDP'];
        $rpn=$_POST['res_item_name'];
        $rpcost=$_POST['res_item_cost'];
        $rpc=$_POST['res_item_cat'];
        $rpg=$_POST['res_item_gst'];
        $rptf=$_POST['res_item_vn'];
        $rps=$_POST['res_item_st'];
        $rpr=$_POST['res_item_type'];
        $rshname=$_POST['res_short_name'];
        
        $_SESSION['RAN']=$ran;

        

$rpid=$rid.generateRandomString();
        $found = true;
        while($found == true){
            $check_ID = mysqli_query($conn, "SELECT RPID FROM restauantproduct where RPID='$rpid'");
            if(mysqli_num_rows($check_ID) == 0){
                $found = false;
            } else {
                $rpid=$rid.generateRandomString();
            }
        }



        $imagename=$rpid.".jpg";

         $query = "INSERT INTO restauantproduct VALUES('".$rid."','".$rpid."','".$rpn."','".$rpcost."','".$rpc."','".$rptf."','".$rps."','".$imagename."','".$rpr."','".$rshname."','".$rpg."')";
         

         $_SESSION['RIDPF']=$rpid;
                    mysqli_query($conn,$query);
                   
                    
                    echo '1';
                     
           //     }
            }
            
        
    }
    
   
function generateRandomString($length = 3) {
    return substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', ceil($length/strlen($x)) )),1,$length);
  }
?>