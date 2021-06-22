<?php
session_start();


if(isset($_POST["action"])) 
{
    require_once "../../database/config.php";
    if($_POST["action"] == "insert")
    {
        $rid=$_SESSION['RIDP'];
        $rpn=$_POST['offer_item_name'];
        $rpcost=$_POST['offer_item_desc'];
        $rpc=$_POST['offer_item_cost'];
        $rptf=$_POST['offer_item_vn'];
        $rps=$_POST['offer_item_st'];
        $rpg=$_POST['offer_item_gst'];


      $rpid="off".$rid.generateRandomString();
        $found = true;
        while($found == true){
            $check_ID = mysqli_query($conn, "SELECT ROID FROM offer where ROID='$rpid'");
            if(mysqli_num_rows($check_ID) == 0){
                $found = false;
            } else {
                $rpid="off".$rid.generateRandomString();
            }
        }


        
        $imgid=str_replace(' ','',$rpid).".jpg";
         $query = "insert into offer values('".$rid."','".$rpid."','".$rpn."','".$rpcost."','".$rpc."','".$rptf."','".$rps."','".$imgid."','".$rpg."')";
        
          $_SESSION['RIDPP']=$rpid;
         
        
         //if( in_array($imageFileType,$extensions_arr) )
       //     {
                    mysqli_query($conn,$query);
                     echo '1';
                     
          //      }
            }
            
        
    }
    
    function generateRandomString($length = 3) {
    return substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
  }


?>