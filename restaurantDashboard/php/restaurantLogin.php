<?php
session_start();
include "../../database/config.php";
$uname = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

if ($uname != "" && $password != ""){

    $sql_query = "select count(*) as cntUser from  restauantname where 	Rest_email='".$uname."' and 	Rest_pswd='".$password."'";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        
       $query1 = mysqli_query($conn,"select * from restauantname where 	Rest_email='".$uname."' and 	Rest_pswd='".$password."'");
        while ($row1 = mysqli_fetch_array($query1)) {
            $rid=$row1['Rest_id'];
        }
      date_default_timezone_set("Asia/Kolkata");
    $da= date("d/m/Y H:i a");
        $query = "insert into login_sessions values('".$rid."','".$da."','logined')";
        $qq=mysqli_query($conn, $query);
        if($qq){
        $_SESSION['RID'] = $rid;
        echo 1;
        }
    }else{
        echo 0;
    }

}


?>