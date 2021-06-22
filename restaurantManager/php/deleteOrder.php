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
$data5 = json_decode(stripslashes($_POST['data5']));
$coupon_code = json_decode(stripslashes($_POST['data6']));
$subtotal = json_decode(stripslashes($_POST['data7']));
$discount_amount = json_decode(stripslashes($_POST['data8']));
$discount_type = json_decode(stripslashes($_POST['data9']));
$discount_value = json_decode(stripslashes($_POST['data10']));
$a=sizeof($data);

$code=0;
    for($y=0;$y<sizeof($data);$y++){
    //$check_email4 = mysqli_query($conn, "SELECT * FROM add_cart WHERE RPR in (1,2,3) GROUP by rpr");
    //$check_email1 = mysqli_query($conn, "SELECT * FROM add_cart WHERE RPR in (1,2) GROUP by rpr");
    //$check_email2 = mysqli_query($conn, "SELECT * FROM add_cart WHERE RPR in (1,3) GROUP by rpr");
    //$check_email3 = mysqli_query($conn, "SELECT * FROM add_cart WHERE RPR in (2,3) GROUP by rpr");

    $sql_query = "select count(*) as cntUser FROM add_cart WHERE RPR in (1,2,3) and RUID = '".$data[$y]."' and RPR_Date=0";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);
    $count = $row['cntUser'];
    if($count>=3){
        $code=1;
    }
    else{
        $sql_query = "select count(*) as cntUser FROM add_cart WHERE RPR in (1,2) and RUID = '".$data[$y]."' and RPR_Date=0";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];
        if($count>=2){
            $code=2;
        }
        else{
            $sql_query = "select count(*) as cntUser FROM add_cart WHERE RPR in (1,3) and RUID = '".$data[$y]."' and RPR_Date=0";
            $result = mysqli_query($conn,$sql_query);
            $row = mysqli_fetch_array($result);
            $count = $row['cntUser'];
            if($count>=2){
                $code=3;
            }
            else{
                $sql_query = "select count(*) as cntUser FROM add_cart WHERE RPR in (2,3) and RUID = '".$data[$y]."' and RPR_Date=0";
                $result = mysqli_query($conn,$sql_query);
                $row = mysqli_fetch_array($result);
                $count = $row['cntUser'];
                if($count>=2){
                    $code=4;
                }
                else{
                    $sql_query = "select count(*) as cntUser FROM add_cart WHERE (RPR in (1) or RPR in (2) or RPR in (3)) and RUID = '".$data[$y]."' and RPR_Date=0";
                    $result = mysqli_query($conn,$sql_query);
                    $row = mysqli_fetch_array($result);
                    $count = $row['cntUser'];
                    if($count>=1){
                        $code=5;
                    }
                }
            }
        }
    }

    // echo "Code:".$code;

    if($code==1){
        $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
        $dateObj->setTimeZone(new DateTimeZone('Asia/Kolkata'));
        $da=$dateObj->format('Y-m-d h:i:sa');
        $da1=$dateObj->format('h');
        $da2=$dateObj->format('i');
        $daa1=($da1.$da2)+1;
        $daa2=($da1.$da2)+6;
        $daa3=($da1.$da2)+12;
        $query1 = "UPDATE add_cart SET RPR_Date='".$daa1."' WHERE RUID = '".$data[$y]."' and RPR='1' ";
        mysqli_query($conn, $query1);
        $query2 = "UPDATE add_cart SET RPR_Date='".$daa2."' WHERE RUID = '".$data[$y]."' and RPR='2' ";
        mysqli_query($conn, $query2);
        $query3 = "UPDATE add_cart SET RPR_Date='".$daa3."' WHERE RUID = '".$data[$y]."' and RPR='3' ";
        mysqli_query($conn, $query3);
        
        /*echo $query = "insert into user_pay values('".$data[$y]."','".$data1[$y]."','".$data2[$y]."','".$data3[$y]."','".$da."')";exit();*/
        if(!empty($coupon_code[$y])) {
            $query = "SELECT * FROM coupon_code WHERE couponcode='".$coupon_code[$y]."'";
            $couponCodeData = mysqli_query($conn, $query);

            while($couponData=mysqli_fetch_assoc($couponCodeData)){
                $no_of_used = $couponData['no_of_used'] + 1;
                $sql = "UPDATE coupon_code SET no_of_used='".$no_of_used."' WHERE coupon_code_id='".$couponData["coupon_code_id"]."'";
                  $qu=mysqli_query($conn, $sql);
            }
        }

        $query = "INSERT INTO `user_pay`(`RUID`, `Name`, `Phone`, `Total_Cost`, `date`, `coupon_code`, `subtotal`, `discount_amount`, `discount_type`, `discount_value`) VALUES ('$data[$y]','$data1[$y]','$data2[$y]','$data3[$y]','$da','$coupon_code[$y]','$subtotal[$y]','$discount_amount[$y]','$discount_type[$y]','$discount_value[$y]')";
        $aa=mysqli_query($conn, $query);

    $query1 = "UPDATE cash_pay SET status='1',cid='".$data4[$y]."' WHERE PUID ='".$data[$y]."'";
    mysqli_query($conn, $query1);
$_GET['rid'] = $data5[$y];
include("send.php");

    }
    if($code==2){

         $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
        $dateObj->setTimeZone(new DateTimeZone('Asia/Kolkata'));
        $da=$dateObj->format('Y-m-d h:i:sa');
        $da1=$dateObj->format('h');
        $da2=$dateObj->format('i');
        $daa1=($da1.$da2)+1;
        $daa2=($da1.$da2)+6;
        $daa3=($da1.$da2)+12;
        $query1 = "UPDATE add_cart SET RPR_Date='".$daa1."' WHERE RUID = '".$data[$y]."' and RPR='1' ";
        mysqli_query($conn, $query1);
        $query2 = "UPDATE add_cart SET RPR_Date='".$daa2."' WHERE RUID = '".$data[$y]."' and RPR='2' ";
        mysqli_query($conn, $query2);
      
        /*echo $query = "insert into user_pay values('".$data[$y]."','".$data1[$y]."','".$data2[$y]."','".$data3[$y]."','".$da."')";exit();*/
        if(!empty($coupon_code[$y])) {
            $query = "SELECT * FROM coupon_code WHERE couponcode='".$coupon_code[$y]."'";
            $couponCodeData = mysqli_query($conn, $query);

            while($couponData=mysqli_fetch_assoc($couponCodeData)){
                $no_of_used = $couponData['no_of_used'] + 1;
                $sql = "UPDATE coupon_code SET no_of_used='".$no_of_used."' WHERE coupon_code_id='".$couponData["coupon_code_id"]."'";
                  $qu=mysqli_query($conn, $sql);
            }
        }

        $query = "INSERT INTO `user_pay`(`RUID`, `Name`, `Phone`, `Total_Cost`, `date`, `coupon_code`, `subtotal`, `discount_amount`, `discount_type`, `discount_value`) VALUES ('$data[$y]','$data1[$y]','$data2[$y]','$data3[$y]','$da','$coupon_code[$y]','$subtotal[$y]','$discount_amount[$y]','$discount_type[$y]','$discount_value[$y]')";
    $aa=mysqli_query($conn, $query);

    $query1 = "UPDATE cash_pay SET status='1',cid='".$data4[$y]."' WHERE PUID ='".$data[$y]."'";
    mysqli_query($conn, $query1);
        $_GET['rid'] = $data5[$y];
        include("send.php");
    }

    if($code==3){
                $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
        $dateObj->setTimeZone(new DateTimeZone('Asia/Kolkata'));
        $da=$dateObj->format('Y-m-d h:i:sa');
        $da1=$dateObj->format('h');
        $da2=$dateObj->format('i');
        $daa1=($da1.$da2);
        $daa2=($da1.$da2)+6;
        $daa3=($da1.$da2)+12;
        $query1 = "UPDATE add_cart SET RPR_Date='".$daa1."' WHERE RUID = '".$data[$y]."' and RPR='1' ";
        mysqli_query($conn, $query1);
        $query2 = "UPDATE add_cart SET RPR_Date='".$daa2."' WHERE RUID = '".$data[$y]."' and RPR='3' ";
        mysqli_query($conn, $query2);

        /*echo $query = "insert into user_pay values('".$data[$y]."','".$data1[$y]."','".$data2[$y]."','".$data3[$y]."','".$da."')";exit();*/
        if(!empty($coupon_code[$y])) {
            $query = "SELECT * FROM coupon_code WHERE couponcode='".$coupon_code[$y]."'";
            $couponCodeData = mysqli_query($conn, $query);

            while($couponData=mysqli_fetch_assoc($couponCodeData)){
                $no_of_used = $couponData['no_of_used'] + 1;
                $sql = "UPDATE coupon_code SET no_of_used='".$no_of_used."' WHERE coupon_code_id='".$couponData["coupon_code_id"]."'";
                  $qu=mysqli_query($conn, $sql);
            }
        }

        $query = "INSERT INTO `user_pay`(`RUID`, `Name`, `Phone`, `Total_Cost`, `date`, `coupon_code`, `subtotal`, `discount_amount`, `discount_type`, `discount_value`) VALUES ('$data[$y]','$data1[$y]','$data2[$y]','$data3[$y]','$da','$coupon_code[$y]','$subtotal[$y]','$discount_amount[$y]','$discount_type[$y]','$discount_value[$y]')";
    $aa=mysqli_query($conn, $query);

    $query1 = "UPDATE cash_pay SET status='1',cid='".$data4[$y]."' WHERE PUID ='".$data[$y]."'";
    mysqli_query($conn, $query1);

        $_GET['rid'] = $data5[$y];
        include("send.php");
    }

    if($code==4){
        $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
        $dateObj->setTimeZone(new DateTimeZone('Asia/Kolkata'));
        $da=$dateObj->format('Y-m-d h:i:sa');
        $da1=$dateObj->format('h');
        $da2=$dateObj->format('i');
        $daa1=($da1.$da2)+1;
        $daa2=($da1.$da2)+6;
        $daa3=($da1.$da2)+12;
        $query1 = "UPDATE add_cart SET RPR_Date='".$daa1."' WHERE RUID = '".$data[$y]."' and RPR='2' ";
        mysqli_query($conn, $query1);
        $query2 = "UPDATE add_cart SET RPR_Date='".$daa2."' WHERE RUID = '".$data[$y]."' and RPR='3' ";
        mysqli_query($conn, $query2);

        /*echo $query = "insert into user_pay values('".$data[$y]."','".$data1[$y]."','".$data2[$y]."','".$data3[$y]."','".$da."')";exit();*/
        if(!empty($coupon_code[$y])) {
            $query = "SELECT * FROM coupon_code WHERE couponcode='".$coupon_code[$y]."'";
            $couponCodeData = mysqli_query($conn, $query);

            while($couponData=mysqli_fetch_assoc($couponCodeData)){
                $no_of_used = $couponData['no_of_used'] + 1;
                $sql = "UPDATE coupon_code SET no_of_used='".$no_of_used."' WHERE coupon_code_id='".$couponData["coupon_code_id"]."'";
                  $qu=mysqli_query($conn, $sql);
            }
        }

        $query = "INSERT INTO `user_pay`(`RUID`, `Name`, `Phone`, `Total_Cost`, `date`, `coupon_code`, `subtotal`, `discount_amount`, `discount_type`, `discount_value`) VALUES ('$data[$y]','$data1[$y]','$data2[$y]','$data3[$y]','$da','$coupon_code[$y]','$subtotal[$y]','$discount_amount[$y]','$discount_type[$y]','$discount_value[$y]')";
    $aa=mysqli_query($conn, $query);

    $query1 = "UPDATE cash_pay SET status='1',cid='".$data4[$y]."' WHERE PUID ='".$data[$y]."'";
    mysqli_query($conn, $query1);        
    $_GET['rid'] = $data5[$y];
include("send.php");

    }
    if($code==5){
                $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
        $dateObj->setTimeZone(new DateTimeZone('Asia/Kolkata'));
        $da=$dateObj->format('Y-m-d h:i:sa');
        $da1=$dateObj->format('h');
        $da2=$dateObj->format('i');
        $daa1=($da1.$da2)+1;
        $daa2=($da1.$da2)+1;
        $daa3=($da1.$da2)+1;
        $query1 = "UPDATE add_cart SET RPR_Date='".$daa1."' WHERE RUID = '".$data[$y]."' and RPR='1' ";
        mysqli_query($conn, $query1);
        $query2 = "UPDATE add_cart SET RPR_Date='".$daa2."' WHERE RUID = '".$data[$y]."' and RPR='2' ";
        mysqli_query($conn, $query2);
        $query3 = "UPDATE add_cart SET RPR_Date='".$daa3."' WHERE RUID = '".$data[$y]."' and RPR='3' ";
        mysqli_query($conn, $query3);

        /*echo $query = "insert into user_pay values('".$data[$y]."','".$data1[$y]."','".$data2[$y]."','".$data3[$y]."','".$da."')";exit();*/
        if(!empty($coupon_code[$y])) {
            $query = "SELECT * FROM coupon_code WHERE couponcode='".$coupon_code[$y]."'";
            $couponCodeData = mysqli_query($conn, $query);

            while($couponData=mysqli_fetch_assoc($couponCodeData)){
                $no_of_used = $couponData['no_of_used'] + 1;
                $sql = "UPDATE coupon_code SET no_of_used='".$no_of_used."' WHERE coupon_code_id='".$couponData["coupon_code_id"]."'";
                  $qu=mysqli_query($conn, $sql);
            }
        }

        $query = "INSERT INTO `user_pay`(`RUID`, `Name`, `Phone`, `Total_Cost`, `date`, `coupon_code`, `subtotal`, `discount_amount`, `discount_type`, `discount_value`) VALUES ('$data[$y]','$data1[$y]','$data2[$y]','$data3[$y]','$da','$coupon_code[$y]','$subtotal[$y]','$discount_amount[$y]','$discount_type[$y]','$discount_value[$y]')";
    $aa=mysqli_query($conn, $query);

    $query1 = "UPDATE cash_pay SET status='1', cid='".$data4[$y]."' WHERE PUID ='".$data[$y]."'";
    mysqli_query($conn, $query1);
    $_GET['rid'] = $data5[$y];
        include("send.php");
    }
}
?>