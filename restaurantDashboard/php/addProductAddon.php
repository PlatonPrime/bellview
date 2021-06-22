<?php 
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE); 

if(isset($_POST["action"])) 
{
    if($_POST['action'] == 'insert'){
        unset($_POST['action']);

        require_once "../../database/config.php";
        $restaurant_id=$_POST['restaurant_id'];
        $product_id=$_POST['product_id'];
        $addon=$_POST['addon'];
        $price=$_POST['price'];
        $created_at=date('Y-m-d H:i:s');

        $query = "INSERT INTO `product_addon`(`restaurant_id`, `product_id`, `addon`, `price`, `created_at`) VALUES ('$restaurant_id','$product_id','$addon','$price','$created_at')";
        mysqli_query($conn,$query);
        echo '1';
    }
}
?>