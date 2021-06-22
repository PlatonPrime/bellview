<?php 
session_start();
error_reporting(E_ALL & ~E_NOTICE);
$Rid="";
$Rid=$_SESSION['RID'];

$cookie_name = "user";
$cookie_value = $Rid;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(!isset($_COOKIE[$cookie_name])) {
     setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 easter_days()
} 


if(isset($_COOKIE[$cookie_name])) {
    $Rid=$_COOKIE[$cookie_name];
}

    //session_destroy(); 
    if($Rid=="")
    {
        header("Location: signin.html");
        exit;
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        
   <link rel=apple-touch-icon href="../assets/images/titlelogo.png">
        <link rel="shortcut icon" type="image/ico" href="../assets/images/titlelogo.png"/>
    
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>BellView | View Summary</title>

    <!-- Fontfaces CSS-->
    <link href="../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/css/theme.css" rel="stylesheet" media="all">
     <script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getSummary.php?q="+str+"&qq=<?php echo $Rid; ?>",true);
  xmlhttp.send();
}
</script>

<style>
   
        @media only screen and (max-width: 48em) {     
            #log{
     width: 40%;
                float: left;
    } 
            
        }
@media only screen and (max-width: 39.375em) {
    #log{
     width: 50%;
        float: left;
        margin-top: 10px;
    } 
    #dashboardid{
        margin-top: -60px;
    }
    
    
    }
        
    
    </style>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
     <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo" style="background-color:white; -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
  
                   box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);">
                <a href="index.php">
                    <img src="../assets/images/white91.png"  width="95%" id="log" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1" style="background-color:white; -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
  
                   box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);">
                <?php 
                require_once "../database/config.php";
                $sqlimage= "SELECT *  FROM restauantname where 	Rest_id='$Rid'";
                $imageresult1 = mysqli_query($conn, $sqlimage);
                while($rows=mysqli_fetch_assoc($imageresult1))
                {
                    $image = $rows['Rest_img'];
                ?> 
                <div class="account2">
                    <div class="image img-cir img-120">
                        <?php echo '<img src="../upload/restaurant_image/'.$image.'" />';   ?>
                   <!--     <img src="../assets/images/icon/avatar-big-01.jpg" alt="John Doe" /> -->
                        
                    </div>
                    <h4 class="name"><?php echo $rows['Rest_name'];  ?></h4>
                    
                    <?php } ?>
                    <?php $_SESSION['RIDL']=$Rid; ?>
                    <a href="php/logout.php">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <li>
                            
                                <a href="viewItems.php">
                                <i class="fas fa-shopping-cart"></i>View Items</a>
                            </li>
                            <li>
                            
                                <a href="productAddon.php">
                                <i class="fas fa-cart-plus"></i>Product Addon</a>
                            </li>
                        <li>
                                <a href="viewSummary.php">
                                <i class="far fa-bookmark"></i>View Summary</a>
                            </li>
                            <li>
                            
                                <a href="cancellationOrder.php">
                                <i class="zmdi zmdi-account"></i>Cancellation Order</a>
                            </li>
                        <li>
                            
                                <a href="account.php">
                                <i class="zmdi zmdi-account"></i>Account</a>
                            </li>
                        <li>
                            
                                <a target="_blank" href="../restaurantAdmin/signin.html">
                                <i class="zmdi zmdi-account"></i>Admin</a>
                            </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2" >
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2" style="background-color:white; -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
  
                   box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);">
                <div class="section__content section__content--p30" >
                    <div class="container-fluid" >
                        <div class="header-wrap2" >
                            <div class="logo d-block d-lg-none" >
                                <a href="index.php">
                                    <img src="../assets/images/white91.png" alt="BellView" class="logoadd" id="log" style="width:60%"/>
                                </a>
                            </div>
                            <div class="header-button2">
                                
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                   <button id="button" onmouseout="document.body.style.overflow='auto';show();">
    	 <i class="zmdi zmdi-menu" style="color:#7aa802"></i>
                                    </button>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <script>
var button = document.getElementById("button");

button.onclick = function() { hide(); };

function hide() {
  document.body.style.overflow='hidden';
    button.onclick = function() { show(); };
}

function show() {
  document.body.style.overflow='auto';
  button.onclick = function() { hide(); };
}
</script>
             <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none" >
               <div >
                <a href="#">
                    <img src="../assets/images/icon/logo-white12.png" alt="CoolAdmin" class="logoadd" id="log"/>
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <?php 
                require_once "../database/config.php";
                $sqlimage= "SELECT *  FROM restauantname where 	Rest_id='$Rid'";
                $imageresult1 = mysqli_query($conn, $sqlimage);
                while($rows=mysqli_fetch_assoc($imageresult1))
                {
                    $image = $rows['Rest_img'];
                ?> 
                <div class="account2">
                    <div class="image img-cir img-120">
                        <?php echo '<img src="../upload/restaurant_image/'.$image.'" />';   ?>
         
                        
                    </div>
                    <h4 class="name"><?php echo $rows['Rest_name'];  ?></h4>
                    
                    <?php } ?>
                    <?php $_SESSION['RIDL']=$Rid; ?>
                    <a href="php/logout.php">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <li>
                            
                                <a href="viewItems.php">
                                <i class="fas fa-shopping-cart"></i>View Items</a>
                            </li>
                            <li>
                            
                                <a href="productAddon.php">
                                <i class="fas fa-cart-plus"></i>Product Addon</a>
                            </li>
                        <li>
                                <a href="viewSummary.php">
                                <i class="far fa-bookmark"></i>View Summary</a>
                            </li>
                            <li>
                            
                                <a href="cancellationOrder.php">
                                <i class="zmdi zmdi-account"></i>Cancellation Order</a>
                            </li>
                        <li>
                            
                                <a href="account.php">
                                <i class="zmdi zmdi-account"></i>Account</a>
                            </li>
                        <li>
                            
                                <a target="_blank" href="../restaurantAdmin/signin.html">
                                <i class="zmdi zmdi-account"></i>Admin</a>
                            </li>
                    </ul>
                </nav>
            </div>
       </aside>
         
            
            <br/>  <br/>  <br/>  
            
             <div class="section__content section__content--p30" id="dashboardid">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1"></h2>
                                    
                                </div>
                            </div>
                        </div>
                        <br/><br/>
                       

                       <?php
                        require_once "../database/config.php";
                $sqlimage= "SELECT SUBSTR(d.date, 1, 7) AS a1, SUBSTR(d.date, 6, 2) AS a2 FROM delivered d,del_cart dc where dc.Rest_id='$Rid' GROUP by a1 ORDER by a1 desc";
                $imageresult1 = mysqli_query($conn, $sqlimage);
                $i=0;
                $today= date("Y-m-d");
                while($rows=mysqli_fetch_assoc($imageresult1))
                {
                    $i++;
                    $RPC[$i] = $rows['a1'];
                    $RPC1[$i] = $rows['a2'];
                }

                ?> 
                        <div class="row" >
                            <div class="col-lg-12">
                                <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Summary Details</h3>
                                    <div class="table-data__tool" >
                                    <div class="table-data__tool-left" id="filet">
                                        <form >
                                        <div class="rs-select2--light rs-select2--md">
                                            
                                                
                                            <select class="js-select2" name="users"   onchange="$('#hi').hide(); $('#dis').hide(); showUser(this.value)">

                                                <option selected="selected">Select Date</option>
                                                <?php for($j=1;$j<=$i;$j++)  {   ?>
                                                <option value="<?php echo $RPC[$j]; ?>"><?php echo checkcalc($RPC1[$j]); ?></option>
                                                
                                                <?php } ?>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                            
                                        </div>
                                        <?php 
                                            require_once "../database/config.php";
                                            date_default_timezone_set("Asia/Kolkata");

                                            $sqlimage= "SELECT d.RUID, up.Name, up.Phone, up.Total_Cost, up.coupon_code, up.subtotal, up.discount_amount, up.discount_type, up.discount_value FROM restauantproduct rp, rest_user ru, user_pay up, delivered d WHERE d.RUID=up.RUID AND rp.Rest_id=ru.Rest_id and rp.Rest_id='".$Rid."' and d.RUID not in (SELECT RUID from add_cart) GROUP BY up.RUID order by d.Date desc";
                                            $imageresult1 = mysqli_query($conn, $sqlimage);
                                            $i=0;
                                            $total=0;
                                            while($rows=mysqli_fetch_assoc($imageresult1)) {
                                                $i++;
                                                $val=0;
                                                $RTID[$i] = $rows['RUID'];
                                                $RPName[$i] = $rows['Name'];
                                                $Qty[$i] = $rows['Phone'];
                                                $ruid[$i] = $rows['Total_Cost'];
                                                $coupon_code[$i] = $rows['coupon_code'];
                                                $subtotal[$i] = $rows['subtotal'];
                                                $discount_amount[$i] = $rows['discount_amount'];
                                                $discount_type[$i] = $rows['discount_type'];
                                                $discount_value[$i] = $rows['discount_value'];
                                                $total=$total+$ruid[$i];
                                                $sqlimage1= "SELECT count(*) as cnt FROM user_pay up, cashfree cf WHERE cf.user_id=up.RUID and up.RUID='$RTID[$i]'";
                                                $imageresult2 = mysqli_query($conn, $sqlimage1);
                                                while($rows=mysqli_fetch_assoc($imageresult2)) {
                                                    $cnt = $rows['cnt'];
                                                    if($cnt==1){
                                                        $val="Online";
                                                    }else{
                                                        $val="COD";
                                                    }
                                                }
                                                $PAYTYPE[$i] = $val;
                                            }?>
                                        
                                            </form> 
                                    </div>
                                    <div class="table-data__tool-right" id="filet">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" id="dis" style="margin-right:5px;">
                                            Total Bill: <i class="fas fa-rupee-sign"></i><?php echo $total; ?>
                                        </button>
                                        
                                    </div>
                                </div>
                                </div>

                                <div id="txtHint" >
                                        
                                        </div>
                                <div class="table-responsive table--no-card m-b-40">
                                            

                                    <table class="table table-borderless table-striped table-earning"  id="hi" >
                                        <thead>
                                             
                                            <tr>
                                                <th>SL.No.</th>
                                                <th>Name</th>
                                                <th>Phone No.</th>
                                                <th>Orders</th>
                                                <th>Type</th>
                                                <th>Coupon Code</th>
                                                <th>Total bill</th>
                                                <th>Print</th>
                                            </tr>
                                            
                                        </thead>
                                        
                                        <tbody >
                                           <?php
                if($i>0)              
                {
                for($j=1;$j<=$i;$j++)  { 
                    echo "<tr>";
                    echo "<td>".$j."</td>" ;
                    //echo "<td>".$RTID[$j]."</td>" ;
                    echo "<td>".$RPName[$j]."</td>" ;
                    echo "<td>".$Qty[$j]."</td>" ;
                    $sql12 = "SELECT PName as p1, qty as p2,rp.RPCost as p3, (qty*rp.RPCost) as p4 FROM del_cart ad, restauantproduct rp WHERE ad.Rest_id='".$Rid."' and ad.RUID='".$RTID[$j]."' and ad.Rest_id=rp.Rest_id and ad.RPID=rp.RPID";
                    $result = mysqli_query($conn, $sql12);
                    echo "<td>";
                    while ($order = mysqli_fetch_assoc($result)) {
                        echo $order['p1']." - ".$order['p2']." &times ". $order['p3']." = ".$order['p4'] ." <br/>";
                    }

                    echo "</td>";?>
                    <td ><button type="button" class="btn btn-primary btn-circle deletingadds"  disabled><?php echo $PAYTYPE[$j]; ?>  </button></td>
                    

                    <td>
                        <?php 
                            if(!empty($coupon_code[$j])){

                                if($discount_type[$j] == "Percentage"){
                                    $discountDescription = "(".$discount_value[$j]."% Discount)";
                                } else {
                                    $discountDescription = "(".$discount_value[$j]."₹ Fix Discount)";
                                }

                                echo "Coupon Code : ".$coupon_code[$j]."<br>";
                                echo "Subtotal : ".$subtotal[$j]."<br>";
                                echo "Discount : ".$discount_amount[$j]." ".$discountDescription;
                            } else {
                                echo "-";
                            }
                        ?>
                    </td>

                    <td><?php echo "Total : ".$ruid[$j]; ?></td>

                    <td><iframe src="printSummary.php?i1=<?php echo $Rid; ?>&i2=<?php echo $RTID[$j]; ?>" style="display:none;" name="frame<?php echo $j ?>"></iframe>
                        <button class='btn mx-2 btn-outline-info' style='border:none;' onclick="frames['frame<?php echo $j ?>'].print()">
                            <i class='fa fa-print' aria-hidden='true' ></i>
                        </button>  </td>
                    

                        
                   <?php  echo "</tr>";
                    
                    }

                } else {
                                                echo "<tr>";
                    echo "<td colspan='4' style='text-align:center'>No Order yet right now</td>" ;
                    
                    echo "</tr>";
                                            }
                ?> 
                                                
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                            
                            
                           
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 BellView. All rights reserved.<br> Powered by <a href="https://platoñ.com">Platon</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../assets/vendor/slick/slick.min.js">
    </script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/vendor/animsition/animsition.min.js"></script>
    <script src="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../assets/vendor/select2/select2.min.js">
    </script>
    <script src="../assets/vendor/vector-map/jquery.vmap.js"></script>
    <script src="../assets/vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="../assets/vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="../assets/vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="../assets/js/main.js"></script>
    
</body>

</html>

<?php
    function checkcalc($val){
        if($val=='1'){
            $aa= "January";
        }
        if($val=='2'){
            $aa="February";
        }
        if($val=='3'){
            $aa="March";
        }
        if($val=='4'){
            $aa= "April";
        }
        if($val=='5'){
            $aa= "May";
        }
        if($val=='6'){
            $aa= "June";
        }
        if($val=='7'){
            $aa= "July";
        }
        if($val=='8'){
            $aa= "August";
        }
        if($val=='9'){
            $aa="Spetember";
        }
        if($val=='10'){
            $aa="October";
        }
        if($val=='11'){
            $aa="November";
        }
        if($val=='12'){
            $aa="December";
        }
        return $aa;
    }

?>
<!-- end document-->