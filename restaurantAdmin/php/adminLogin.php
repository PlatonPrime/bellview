<?php
session_start();
include "../../database/config.php";
$uname = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

if ($uname != "" && $password != ""){

    $sql_query = "select count(*) as cntUser from  admin_login where username='".$uname."' and 	password='".$password."'";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);
    
    $count = $row['cntUser'];

    if($count > 0){
        
       
      date_default_timezone_set("Asia/Kolkata");
    $da= date("d/m/Y H:i a");
        $query = "insert into admin_login_session values('".$_POST['username']."','".$da."','logined')";
        $qq=mysqli_query($conn, $query);
        if($qq){
            $_SESSION['emalid']=$uname;
        echo 1;
        }
    }else{
        echo 0;
    }

}


?>