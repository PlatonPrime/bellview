<?php 
    session_start();
    error_reporting(E_ALL & ~E_NOTICE);
    $Rid="";
    $Rid=$_SESSION['RID'];
    //session_destroy(); 
    $cookie_name = "user";
$cookie_value = $Rid;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(!isset($_COOKIE[$cookie_name])) {
     setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 easter_days()
} 


if(isset($_COOKIE[$cookie_name])) {
$Rid=$_COOKIE[$cookie_name];

}
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
    <title>BellView | View Offer</title>

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
  xmlhttp.open("GET","getuser.php?q="+str+"&qq=<?php echo $Rid; ?>",true);
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
       
    #tableid {
        margin-top: -1px;
    }
    #addnew{
        display: flex;justify-content: center;
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
         
            <!-- END HEADER DESKTOP-->
<?php 
                require_once "../database/config.php";
                $sqlimage= "SELECT *  FROM restauantproduct where 	Rest_id='$Rid' group by RPC";
                $imageresult1 = mysqli_query($conn, $sqlimage);
                $i=0;
                while($rows=mysqli_fetch_assoc($imageresult1))
                {
                    $i++;
                    $RPC[$i] = $rows['RPC'];
                }?> 
            
            
             <div class="main-content" style="margin-top:15px;">
                <div class="section__content section__content--p30" id="dashboardid">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12" >
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35" style="display: inline-block;margin-top:15px; ">View Items</h3>
                                    <div class="table-data__tool" style="float: right">
                                    
                                    <div class="table-data__tool-right" >
                                            <?php $_SESSION['RIDPN']=$Rid; ?>
                                            <a href="addOffer.php"     class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add new offer</a>
                                        </div>
                                </div>
                                </div>
                                
                            </div>
                        </div>
                    <div id="txtHint" >
                                        
                                        </div>
                                        
                        <div class="row m-t-30" id="tableid">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3" id="hi">
                                        <thead>
                                            <tr>
                                                <th>Item Name</th>
                                                <th>Offer Cost</th>
                                                <th>Available</th>
                                                <th>Edit</th>
                                                
                                            </tr>
                                        </thead>
                                        <?php 
                require_once "../database/config.php";
                $sqlimage= "SELECT *  FROM offer where 	RID='$Rid'";
                $imageresult1 = mysqli_query($conn, $sqlimage);
                $i=0;
                while($rows=mysqli_fetch_assoc($imageresult1))
                {
                    $i++;
                    $RPID[$i] = $rows['ROID'];
                    $RPName[$i] = $rows['PName'];
                    $RPCost[$i] = $rows['Cost'];
                    $RPS[$i] = $rows['Status'];
                }?> 
                                        
                                        <tbody  >
                                            <?php  if($i>0){ for($j=1;$j<=$i;$j++)  {   ?>
                                            <tr >
                                                <td><?php echo $RPName[$j]; ?></td>
                                                <td><?php echo $RPCost[$j]; ?></td>
                                                <td><?php echo $RPS[$j]; ?></td>
                                                
                                                <td> <div class="table-data-feature">
                                                    <a href='editOffer.php?Pid=<?php echo $RPID[$j]; ?>' role="button" class="item" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                    </a></div></td>
                                            </tr>
                                        <?php }}else{    ?>
                                            <tr >
                                                <td colspan="4" style="text-align:center">No Product has been Added</td>
                                                
                                            </tr>
                                            
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
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
<!-- end document-->