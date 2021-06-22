<?php
	session_start();
    error_reporting(E_ALL & ~E_NOTICE);
	include "../database/config.php";
	$Ruid=$_SESSION['RERID'];
    $Rid=$_SESSION['RID'];
	$v11 = $_GET['val1'];
	$v12 = $_GET['val2'];
	$v13 = $_GET['val3'];
	$cost=$_POST['res_amt'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    if($razorpay_payment_id="" || $Ruid==""){
         header("Location: invalid.php");
        exit;
    }
    if ($_POST) {
		$razorpay_payment_id = $_POST['razorpay_payment_id'];
	} 



/*
$query1 = "insert into razopay values('".$Ruid."','".$razorpay_payment_id."','".$da."')";
$qu1=mysqli_query($conn, $query1);
*/
$sql_query = "select count(*) as cntUser FROM add_cart WHERE RPR in (1,2,3) and RUID = '".$Ruid."' and RPR_Date=0";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);
    $count = $row['cntUser'];
    if($count>=3){
    	$code=1;
    }
    else{
    	$sql_query = "select count(*) as cntUser FROM add_cart WHERE RPR in (1,2) and RUID = '".$Ruid."' and RPR_Date=0";
    	$result = mysqli_query($conn,$sql_query);
    	$row = mysqli_fetch_array($result);
    	$count = $row['cntUser'];
    	if($count>=2){
	    	$code=2;
	    }
	    else{
	    	$sql_query = "select count(*) as cntUser FROM add_cart WHERE RPR in (1,3) and RUID = '".$Ruid."' and RPR_Date=0";
    		$result = mysqli_query($conn,$sql_query);
    		$row = mysqli_fetch_array($result);
    		$count = $row['cntUser'];
    		if($count>=2){
		    	$code=3;
	    	}
	    	else{
	    		$sql_query = "select count(*) as cntUser FROM add_cart WHERE RPR in (2,3) and RUID = '".$Ruid."' and RPR_Date=0";
    			$result = mysqli_query($conn,$sql_query);
    			$row = mysqli_fetch_array($result);
    			$count = $row['cntUser'];
    			if($count>=2){
			    	$code=4;
	    		}
	    		else{
	    			$sql_query = "select count(*) as cntUser FROM add_cart WHERE (RPR in (1) or RPR in (2) or RPR in (3)) and RUID = '".$Ruid."' and RPR_Date=0";
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

if($code==1){
        $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
        $dateObj->setTimeZone(new DateTimeZone('Asia/Kolkata'));
        $da=$dateObj->format('Y-m-d h:i:sa');
        $da1=$dateObj->format('h');
        $da2=$dateObj->format('i');
        $daa1=($da1.$da2)+1;
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
 $query = "insert into user_pay values('".$Ruid."','".$v11."','".$v12."','".$v13."','".$da."')";
$qu=mysqli_query($conn, $query);

$query11 = "insert into razopay values('".$Ruid."','".$razorpay_payment_id."','".$da."')";
$qu1=mysqli_query($conn, $query11);

$_GET['rid'] = $Rid;
include("send.php");

header("Location: sucess.php"); 
exit();
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
        $query1 = "UPDATE add_cart SET RPR_Date='".$daa1."' WHERE RUID = '".$Ruid."' and RPR='1' ";
        mysqli_query($conn, $query1);
        $query2 = "UPDATE add_cart SET RPR_Date='".$daa2."' WHERE RUID = '".$Ruid."' and RPR='2' ";
        mysqli_query($conn, $query2);
      
        date_default_timezone_set("Asia/Kolkata");
    $da= date("d/m/Y H:i a");
 $query = "insert into user_pay values('".$Ruid."','".$v11."','".$v12."','".$v13."','".$da."')";
$qu=mysqli_query($conn, $query);

$query11 = "insert into razopay values('".$Ruid."','".$razorpay_payment_id."','".$da."')";
$qu1=mysqli_query($conn, $query11);
$_GET['rid'] = $Rid;
include("send.php");
	header("Location: sucess.php"); 
exit();
    }

    if($code==3){
    	        $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
        $dateObj->setTimeZone(new DateTimeZone('Asia/Kolkata'));
        $da=$dateObj->format('Y-m-d h:i:sa');
        $da1=$dateObj->format('h');
        $da2=$dateObj->format('i');
        $daa1=($da1.$da2)+1;
        $daa2=($da1.$da2)+6;
        $daa3=($da1.$da2)+12;
        $query1 = "UPDATE add_cart SET RPR_Date='".$daa1."' WHERE RUID = '".$Ruid."' and RPR='1' ";
        mysqli_query($conn, $query1);
        $query2 = "UPDATE add_cart SET RPR_Date='".$daa2."' WHERE RUID = '".$Ruid."' and RPR='3' ";
        mysqli_query($conn, $query2);

       date_default_timezone_set("Asia/Kolkata");
    $da= date("d/m/Y H:i a");
 $query = "insert into user_pay values('".$Ruid."','".$v11."','".$v12."','".$v13."','".$da."')";
$qu=mysqli_query($conn, $query);
$query11 = "insert into razopay values('".$Ruid."','".$razorpay_payment_id."','".$da."')";
$qu1=mysqli_query($conn, $query11);
$_GET['rid'] = $Rid;
include("send.php");
header("Location: sucess.php"); 
exit();
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
        $query1 = "UPDATE add_cart SET RPR_Date='".$daa1."' WHERE RUID = '".$Ruid."' and RPR='2' ";
        mysqli_query($conn, $query1);
        $query2 = "UPDATE add_cart SET RPR_Date='".$daa2."' WHERE RUID = '".$Ruid."' and RPR='3' ";
        mysqli_query($conn, $query2);

        date_default_timezone_set("Asia/Kolkata");
    $da= date("d/m/Y H:i a");
 $query = "insert into user_pay values('".$Ruid."','".$v11."','".$v12."','".$v13."','".$da."')";
$qu=mysqli_query($conn, $query);

$query11 = "insert into razopay values('".$Ruid."','".$razorpay_payment_id."','".$da."')";
$qu1=mysqli_query($conn, $query11);
$_GET['rid'] = $Rid;
include("send.php");
header("Location: sucess.php"); 
exit();
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
        $query1 = "UPDATE add_cart SET RPR_Date='".$daa1."' WHERE RUID = '".$Ruid."' and RPR='1' ";
        mysqli_query($conn, $query1);
        $query2 = "UPDATE add_cart SET RPR_Date='".$daa2."' WHERE RUID = '".$Ruid."' and RPR='2' ";
        mysqli_query($conn, $query2);
        $query3 = "UPDATE add_cart SET RPR_Date='".$daa3."' WHERE RUID = '".$Ruid."' and RPR='3' ";
        mysqli_query($conn, $query3);

       date_default_timezone_set("Asia/Kolkata");
    $da= date("d/m/Y H:i a");
 $query = "insert into user_pay values('".$Ruid."','".$v11."','".$v12."','".$v13."','".$da."')";
$qu=mysqli_query($conn, $query);
$query11 = "insert into razopay values('".$Ruid."','".$razorpay_payment_id."','".$da."')";
$qu1=mysqli_query($conn, $query11);
$_GET['rid'] = $Rid;
include("send.php");
header("Location: sucess.php"); 
exit();
    }

/*
$query = "insert into razopay values('".$Ruid."','".$v11."','".$v12."','".$v13."','".$da."')";
$qu=mysqli_query($conn, $query);
*/
//header("Location: sucess.php"); /* Redirect browser */
  
        exit;
    echo $v11."<br />";
    echo $v12."<br />";
    echo $v13."<br />";
    echo $razorpay_payment_id."<br />";
    echo $Ruid."\n";
?>
 
