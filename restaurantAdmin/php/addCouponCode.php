<?php 
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE); 

if(isset($_POST["action"])) 
{
    if($_POST['action'] == 'insert'){
        require_once "../../database/config.php";
        $Rest_id=$_SESSION['RID'];
        $couponcode=strtoupper($_POST['couponcode']);
        $type=$_POST['type'];
        $value=$_POST['value'];
        $expire_date=$_POST['expire_date'];
        $usage_limit=$_POST['usage_limit'];
        $created_at=date('Y-m-d H:i:s');

        $query = "INSERT INTO `coupon_code`(`Rest_id`, `couponcode`, `type`, `value`, `expire_date`, `usage_limit`, `created_at`) VALUES ('$Rest_id','$couponcode','$type','$value','$expire_date','$usage_limit','$created_at')";
        mysqli_query($conn,$query);
        echo '1';
    }
}
?>