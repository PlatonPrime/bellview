<?php
session_start();
include "../../database/config.php";
date_default_timezone_set("Asia/Kolkata");
$da= date("d/m/Y H:i a");
$rid=$_SESSION['RIDL'];
$query = "INSERT INTO login_sessions VALUES('".$rid."','".$da."','loginout')";
mysqli_query($conn, $query);
session_destroy(); 
header("Location: ../signin.html");
 exit;
?>