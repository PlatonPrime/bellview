<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
include "../database/config.php";

$secretkey = "972c46e5fe84d1a020bac1a9cdc31144d850102f";
$orderId = $_POST["orderId"];
$orderAmount = $_POST["orderAmount"];
$referenceId = $_POST["referenceId"];

    if ($_POST["referenceId"] != "N/A" ) {
        $txStatus = $_POST["txStatus"];
        $paymentMode = $_POST["paymentMode"];
        $txMsg = $_POST["txMsg"];
        $txTime = $_POST["txTime"];

        $Ruid=$_GET['val0'];
        $v11 = $_GET['val1'];
        $v12 = $_GET['val2'];
        $v13 = $orderAmount;

        $coupon_code = $_GET['val3'];
        $subtotal = $_GET['val4'];
        $discount_amount = $_GET['val5'];
        $discount_type = $_GET['val6'];
        $discount_value = $_GET['val7'];

        if(!empty($coupon_code)) {
            $query = "SELECT * FROM coupon_code WHERE couponcode='".$coupon_code."'";
            $couponCodeData = mysqli_query($conn, $query);

            while($couponData=mysqli_fetch_assoc($couponCodeData)){
                $no_of_used = $couponData['no_of_used'] + 1;
                $sql = "UPDATE coupon_code SET no_of_used='".$no_of_used."' WHERE coupon_code_id='".$couponData["coupon_code_id"]."'";
                  $qu=mysqli_query($conn, $sql);
            }
        }

        $signature = $_POST["signature"];
        $data = $orderId.$orderAmount.$referenceId.$txStatus.$paymentMode.$txMsg.$txTime;
        $hash_hmac = hash_hmac('sha256', $data, $secretkey, true) ;
        $computedSignature = base64_encode($hash_hmac);

        if ($signature == $computedSignature) {
            $sql_query = "SELECT count(*) as cntUser FROM add_cart WHERE RPR in (1,2,3) and RUID = '".$Ruid."' and RPR_Date=0";
            $result = mysqli_query($conn,$sql_query);
            $row = mysqli_fetch_array($result);
            $count = $row['cntUser'];
            if($count==3){
                $code=1;
            } else { 
                $sql_query = "SELECT count(*) as cntUser FROM add_cart WHERE RPR in (1,2) and RUID = '".$Ruid."' and RPR_Date=0";
                $result = mysqli_query($conn,$sql_query);
                $row = mysqli_fetch_array($result);
                $count = $row['cntUser'];
                if($count==2){
                    $code=2;
                } else {
                    $sql_query = "SELECT count(*) as cntUser FROM add_cart WHERE RPR in (1,3) and RUID = '".$Ruid."' and RPR_Date=0";
                    $result = mysqli_query($conn,$sql_query);
                    $row = mysqli_fetch_array($result);
                    $count = $row['cntUser'];
                    if($count==2){
                        $code=3;
                    } else {
                        $sql_query = "SELECT count(*) as cntUser FROM add_cart WHERE RPR in (2,3) and RUID = '".$Ruid."' and RPR_Date=0";
                        $result = mysqli_query($conn,$sql_query);
                        $row = mysqli_fetch_array($result);
                        $count = $row['cntUser'];
                        if($count==2){
                            $code=4;
                        } else {
                            $sql_query = "SELECT count(*) as cntUser FROM add_cart WHERE (RPR in (1) or RPR in (2) or RPR in (3)) and RUID = '".$Ruid."' and RPR_Date=0";
                            $result = mysqli_query($conn,$sql_query);
                            $row = mysqli_fetch_array($result);
                            $count = $row['cntUser'];
                            if($count==1){
                                $code=5;
                            }
                        }
                    }
                }
            }

            if($code==1){
                $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
                $dateObj->setTimeZone(new DateTimeZone('Asia/Kolkata'));
                $da=$dateObj->format('Y-m-d h:i:sa');
                $da1=$dateObj->format('h');
                $da2=$dateObj->format('i');
                $daa1=($da1.$da2)+10;
                $daa2=($da1.$da2)+6;
                $daa3=($da1.$da2)+12;
                $query1 = "UPDATE add_cart SET RPR_Date='".$daa1."' WHERE RUID = '".$Ruid."' and RPR='1' ";
                mysqli_query($conn, $query1);
                $query2 = "UPDATE add_cart SET RPR_Date='".$daa2."' WHERE RUID = '".$Ruid."' and RPR='2' ";
                mysqli_query($conn, $query2);
                $query3 = "UPDATE add_cart SET RPR_Date='".$daa3."' WHERE RUID = '".$Ruid."' and RPR='3' ";
                mysqli_query($conn, $query3);
                
                date_default_timezone_set("Asia/Kolkata");
                $da= date("d/m/Y H:i a");
                /*$query = "INSERT INTO user_pay VALUES('".$Ruid."','".$v11."','".$v12."','".$v13."','".$da."')";*/
                $query = "INSERT INTO `user_pay`(`RUID`, `Name`, `Phone`, `Total_Cost`, `date`, `coupon_code`, `subtotal`, `discount_amount`, `discount_type`, `discount_value`, `order_id`) VALUES ('$Ruid','$v11','$v12','$v13','$da','$coupon_code','$subtotal','$discount_amount','$discount_type','$discount_value','$orderId')";
                $qu=mysqli_query($conn, $query);

                $query11 = "insert into cashfree values('".$Ruid."','".$orderId."','".$orderAmount."','".$referenceId."','".$txStatus."','".$paymentMode."','".$txMsg."','".$txTime."')";
                $qu1=mysqli_query($conn, $query11);

                header("Location: success.php");
                exit();
            }
            if($code==2){
                $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
                $dateObj->setTimeZone(new DateTimeZone('Asia/Kolkata'));
                $da=$dateObj->format('Y-m-d h:i:sa');
                $da1=$dateObj->format('h');
                $da2=$dateObj->format('i');
                $daa1=($da1.$da2)+10;
                $daa2=($da1.$da2)+6;
                $daa3=($da1.$da2)+12;
                $query1 = "UPDATE add_cart SET RPR_Date='".$daa1."' WHERE RUID = '".$Ruid."' and RPR='1' ";
                mysqli_query($conn, $query1);
                $query2 = "UPDATE add_cart SET RPR_Date='".$daa2."' WHERE RUID = '".$Ruid."' and RPR='2' ";
                mysqli_query($conn, $query2);

                date_default_timezone_set("Asia/Kolkata");
                $da= date("d/m/Y H:i a");
                /*$query = "INSERT INTO user_pay VALUES('".$Ruid."','".$v11."','".$v12."','".$v13."','".$da."')";*/
                $query = "INSERT INTO `user_pay`(`RUID`, `Name`, `Phone`, `Total_Cost`, `date`, `coupon_code`, `subtotal`, `discount_amount`, `discount_type`, `discount_value`, `order_id`) VALUES ('$Ruid','$v11','$v12','$v13','$da','$coupon_code','$subtotal','$discount_amount','$discount_type','$discount_value','$orderId')";
                $qu=mysqli_query($conn, $query);

                $query11 = "insert into cashfree values('".$Ruid."','".$orderId."','".$orderAmount."','".$referenceId."','".$txStatus."','".$paymentMode."','".$txMsg."','".$txTime."')";
                $qu1=mysqli_query($conn, $query11);

                header("Location: success.php");
                exit();
            }
            if($code==3){
                $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
                $dateObj->setTimeZone(new DateTimeZone('Asia/Kolkata'));
                $da=$dateObj->format('Y-m-d h:i:sa');
                $da1=$dateObj->format('h');
                $da2=$dateObj->format('i');
                $daa1=($da1.$da2)+10;
                $daa2=($da1.$da2)+6;
                $daa3=($da1.$da2)+12;
                $query1 = "UPDATE add_cart SET RPR_Date='".$daa1."' WHERE RUID = '".$Ruid."' and RPR='1' ";
                mysqli_query($conn, $query1);
                $query2 = "UPDATE add_cart SET RPR_Date='".$daa2."' WHERE RUID = '".$Ruid."' and RPR='3' ";
                mysqli_query($conn, $query2);

                date_default_timezone_set("Asia/Kolkata");
                $da= date("d/m/Y H:i a");
                /*$query = "INSERT INTO user_pay VALUES('".$Ruid."','".$v11."','".$v12."','".$v13."','".$da."')";*/
                $query = "INSERT INTO `user_pay`(`RUID`, `Name`, `Phone`, `Total_Cost`, `date`, `coupon_code`, `subtotal`, `discount_amount`, `discount_type`, `discount_value`, `order_id`) VALUES ('$Ruid','$v11','$v12','$v13','$da','$coupon_code','$subtotal','$discount_amount','$discount_type','$discount_value','$orderId')";
                $qu=mysqli_query($conn, $query);
                $query11 = "insert into cashfree values('".$Ruid."','".$orderId."','".$orderAmount."','".$referenceId."','".$txStatus."','".$paymentMode."','".$txMsg."','".$txTime."')";
                $qu1=mysqli_query($conn, $query11);

                header("Location: success.php");
                exit();
            }
            if($code==4){
                $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
                $dateObj->setTimeZone(new DateTimeZone('Asia/Kolkata'));
                $da=$dateObj->format('Y-m-d h:i:sa');
                $da1=$dateObj->format('h');
                $da2=$dateObj->format('i');
                $daa1=($da1.$da2)+10;
                $daa2=($da1.$da2)+6;
                $daa3=($da1.$da2)+12;
                $query1 = "UPDATE add_cart SET RPR_Date='".$daa1."' WHERE RUID = '".$Ruid."' and RPR='2' ";
                mysqli_query($conn, $query1);
                $query2 = "UPDATE add_cart SET RPR_Date='".$daa2."' WHERE RUID = '".$Ruid."' and RPR='3' ";
                mysqli_query($conn, $query2);

                date_default_timezone_set("Asia/Kolkata");
                $da= date("d/m/Y H:i a");
                /*$query = "INSERT INTO user_pay VALUES('".$Ruid."','".$v11."','".$v12."','".$v13."','".$da."')";*/
                $query = "INSERT INTO `user_pay`(`RUID`, `Name`, `Phone`, `Total_Cost`, `date`, `coupon_code`, `subtotal`, `discount_amount`, `discount_type`, `discount_value`, `order_id`) VALUES ('$Ruid','$v11','$v12','$v13','$da','$coupon_code','$subtotal','$discount_amount','$discount_type','$discount_value','$orderId')";
                $qu=mysqli_query($conn, $query);

                $query11 = "insert into cashfree values('".$Ruid."','".$orderId."','".$orderAmount."','".$referenceId."','".$txStatus."','".$paymentMode."','".$txMsg."','".$txTime."')";
                $qu1=mysqli_query($conn, $query11);

                header("Location: success.php");
                exit();
            }
            if($code==5){
                $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
                $dateObj->setTimeZone(new DateTimeZone('Asia/Kolkata'));
                $da=$dateObj->format('Y-m-d h:i:sa');
                $da1=$dateObj->format('h');
                $da2=$dateObj->format('i');
                $daa1=($da1.$da2)+10;
                $daa2=($da1.$da2)+10;
                $daa3=($da1.$da2)+10;
                $query1 = "UPDATE add_cart SET RPR_Date='".$daa1."' WHERE RUID = '".$Ruid."' and RPR='1' ";
                mysqli_query($conn, $query1);
                $query2 = "UPDATE add_cart SET RPR_Date='".$daa2."' WHERE RUID = '".$Ruid."' and RPR='2' ";
                mysqli_query($conn, $query2);
                $query3 = "UPDATE add_cart SET RPR_Date='".$daa3."' WHERE RUID = '".$Ruid."' and RPR='3' ";
                mysqli_query($conn, $query3);

                date_default_timezone_set("Asia/Kolkata");
                $da= date("d/m/Y H:i a");
                /*$query = "INSERT INTO user_pay VALUES('".$Ruid."','".$v11."','".$v12."','".$v13."','".$da."')";*/
                $query = "INSERT INTO `user_pay`(`RUID`, `Name`, `Phone`, `Total_Cost`, `date`, `coupon_code`, `subtotal`, `discount_amount`, `discount_type`, `discount_value`, `order_id`) VALUES ('$Ruid','$v11','$v12','$v13','$da','$coupon_code','$subtotal','$discount_amount','$discount_type','$discount_value','$orderId')";
                $qu=mysqli_query($conn, $query);
                $query11 = "insert into cashfree values('".$Ruid."','".$orderId."','".$orderAmount."','".$referenceId."','".$txStatus."','".$paymentMode."','".$txMsg."','".$txTime."')";
                $qu1=mysqli_query($conn, $query11);
                header("Location: success.php");
                exit();
            }
        } else {
            header("Location: unsuccess.php");
        }
    } else {
        header("Location: checkout.php");
    }
?>