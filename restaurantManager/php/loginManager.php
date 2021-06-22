<?php
session_start();
include "../../database/config.php";
$uname = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

if ($uname != "" && $password != ""){
    $sql_query = "SELECT count(*) AS cntUser,cresid,cid FROM  cash_on_deliver WHERE  cphone='".$uname."' and password='".$password."'";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);
    $count = $row['cntUser'];
    $crid=$row['cresid'];
    $cid=$row['cid'];
    if($count > 0){
        $query1 = mysqli_query($conn,"SELECT * FROM restauantname WHERE Rest_id='".$crid."' ");
        while ($row1 = mysqli_fetch_array($query1)) {
            $rid=$row1['Rest_name']; 
        }
        date_default_timezone_set("Asia/Kolkata");
        $da= date("d/m/Y H:i a");
        $query = "insert into login_sessions values('".$uname."','".$da."','logined')";
        $qq=mysqli_query($conn, $query);
        if($qq){
            $_SESSION['CRID'] = $crid;
            $_SESSION['CUSER'] = $cid;
            echo 1;
        }
    }else{
        echo 0;
    }
}
?>