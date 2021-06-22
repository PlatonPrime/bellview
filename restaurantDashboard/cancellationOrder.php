<?php
    session_start();
    error_reporting(E_ALL & ~E_NOTICE);

    $Rid="";
    $Rid=$_SESSION['RID'];
    if (isset($_SESSION['previous'])) {
        if (basename($_SERVER['PHP_SELF']) != $_SESSION['previous']) {
            session_destroy();
            header("Location: signin.html");
            exit;
        }
    }

    $_SESSION['RIDDaSH']=$Rid;
    //session_destroy(); 

    if($Rid=="") {
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
    <title>BellView | Cancellation Dashboard</title>

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
    <style>
        #myInput {
            background-image: url('images/icon/searchicon.png');
            background-position: 20px 20px;
            background-repeat: no-repeat;
            width: 75%;
            font-size: 16px;
            padding: 10px 20px 10px 40px;
            border: 2px solid #ddd;
            border-radius: 10px;
        }
        .selected {
            background-color: brown;
            color: #FFF !important;
        }
        #show11{
            margin-top:-35px;
        }
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
            #show11{
                margin-top:-55px;
            }
            #ord{
                display: none;
            }
            #myInput{
                width: 100%;
            }
            #mainto{
                margin-top: -25px;
            }
        }
    </style>
</head>
<body>
    <div class="page-wrapper">
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
                $sqlimage= "SELECT *  FROM restauantname where  Rest_id='$Rid'";
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
                $sqlimage= "SELECT *  FROM restauantname where  Rest_id='$Rid'";
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

        <div class="section__content section__content--p30" id="dashboardid" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1"></h2>
                            
                        </div>
                    </div>
                </div>
                <br/><br/>
                <div class="row" >
                    <div class="col-lg-12">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Cancellation Order</h3>
                            <br>
                            <div id="show11" ></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2019 BellView. All rights reserved. <br>Powered by <a href="https://platoñ.com">Platon</a>.</p>
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

                            <script type="text/javascript">
                                loadFirmwareData();



                                setInterval(function(){ loadFirmwareData(); }, 3000);

                                function loadFirmwareData() {
                                    var key="<?php echo $Rid; ?>";
                                    var point=1;
                                    $.ajax({  
                                        url: "php/getCancellationOrder.php",
                                        type: "POST",
                                        data: {key: key,point:point},
                                        cache: false,
                                        success: function(html) {
                                            $("#show11").html(html).show();
                                        }
                                    });
                                }




                            </script>


                        </body>

                        </html>
<!-- end document-->