<?php 
session_start();
error_reporting(E_ALL & ~E_NOTICE);
$Rid="";
$product_addon_id="";
$Rid=$_SESSION['RID'];
$product_addon_id =$_GET['product_addon_id'];
    //session_destroy(); 
if($Rid=="")
{
  header("Location: signin.html");
  exit;
}
else if($product_addon_id=="")   {
  header("Location: productAddon.php");
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
  <title>BellView | Coupon code Update</title>

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


  <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
  <link rel="stylesheet" href="../assets/jew/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/jew/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/jew/css/responsive.css">





  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
  <link rel="stylesheet" href="../assets/file/css/style.css">

  <style>
    .product-sales-chart, .analytics-info-cs, .tranffic-als-inner, .analytics-rounded, .single-new-trend, .personal-info-wrap, .author-widgets-single, .calender-inner, .product-status-wrap, .review-tab-pro-inner, .income-dashone-total, .analytics-adminpro-wrap, .analytics-sparkle-line, .analysis-progrebar, .sparkline8-list, .sparkline9-list, .sparkline7-list, .sparkline10-list, .sparkline12-list, .sparkline13-list, .sparkline14-list, .sparkline13-list, .sparkline11-list, .x-editable-list, .code-editor-single, .blog-details-inner, .charts-single-pro, .about-sparkline, .sparkline-list, .button-ad-wrap, .tab-content-details, .sparkline16-list, .sparkline15-list, .tinymce-single{
      padding:20px;
      background:#fff;
      -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
      box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);


    }


    ul.tab-custon-design li, ul.tab-review-design li {
      display: inline-block;
    }
    #myTab3.tab-review-design li a {
      padding-right: 40px;
      text-transform: capitalize;
      position:relative;
      transition:all .4s ease 0s;
    }
    #myTab3.tab-review-design li a:before, #myTab4.tab-review-design li a:before {
      position: absolute;
      bottom: -15px;
      left: 0px;
      width: 0%;
      height: 2px;
      background: #e12503;
      content: "";
      transition:all .4s ease 0s;
    }
    #myTab3.tab-review-design li.active a:before, #myTab4.tab-review-design li.active a:before {
      position: absolute;
      bottom: -15px;
      left: 0px;
      width: 80%;
      height: 2px;
      background: #e12503;
      content: "";
      transition:all .4s ease 0s;
    }
    ul.tab-custon-design li.active a, ul.tab-review-design li.active a {
      color: #e12503 !important;
    }
    ul.tab-custon-design li a, ul.tab-custon-design li a:hover, ul.tab-custon-design li a:focus, ul.tab-review-design li a, ul.tab-review-design li a:hover, ul.tab-review-design li a:focus {
      font-size: 18px;
      font-weight: 700;
      text-transform: uppercase;
      text-decoration: none;
      color: #909090;
    }
    ul.tab-custon-design, ul.tab-review-design {
     padding-bottom: 20px;
     width: 100%;
     background: #fff;
   }

   .tab-content-details h2 {
    font-size: 20px;
    color: #303030;
  }
  .tab-content-details {
    text-align: center;
    background: #fff;
    padding: 20px 100px;
  }
  .tab-content-details p {
    font-size: 14px;
    color: #303030;
    line-height: 24px;
  }
  .custom-product-edit{
    margin-top:20px;
  }

  .custom-product-edit{
    background:#fff;
  }

  .review-content-section{
    margin-top: 15px;
    margin-left: 15px;
    margin-right: 15px;
  }
  .review-content-section p{
    color:#606060;
    font-weight:400;
    font-size:14px;
    line-height:24px;
  }

  .input-group {
    position: relative;
    display: table;
    border-collapse: separate;
  }
  .input-group-addon:first-child {
    border-right: 0;
  }
  .input-group .form-control:first-child, .input-group-addon:first-child, .input-group-btn:first-child>.btn, .input-group-btn:first-child>.btn-group>.btn, .input-group-btn:first-child>.dropdown-toggle, .input-group-btn:last-child>.btn-group:not(:last-child)>.btn, .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .input-group-addon {
    background-color: #fff;
    border: 1px solid #E5E6E7;
    border-radius: 1px;
    color: inherit;
    font-size: 14px;
    font-weight: 400;
    line-height: 1;
    padding: 6px 12px;
    text-align: center;
  }
  .input-group-addon{
    width: 1%;
    white-space: nowrap;
    vertical-align: middle;
  }
  .input-group .form-control {
    position: relative;
    z-index: 2;
    float: left;
    width: 100%;
    margin-bottom: 0;
  }
  .mg-b-pro-edt{
    margin-bottom:15px;
  }
  .mg-b-pro-edt{
    margin-bottom:15px;
  }
  .form-control.pro-edt-select{
    width:100%;
  }

  .custom-pro-edt-ds button, .product-edt-remove button{
    padding:5px 15px;
    margin-right:10px;
  }
  .custom-pro-edt-ds .btn-primary{
    background:#e12503;
  }
  .custom-pro-edt-ds .btn-warning{
    background:#ccc;
    border-color: #ccc;
  }

  .credit-card-custom a, .waves-light{
    background:#e12503;
    border-color: #e12503;
  }
  .avatar-upload {
    position: relative;
    max-width: 205px;
    margin: 50px auto;
  }
  .avatar-upload .avatar-edit {
    position: absolute;
    right: 12px;
    z-index: 1;
    top: 10px;
  }
  .avatar-upload .avatar-edit input {
    display: none;
  }
  .avatar-upload .avatar-edit input + label {
    display: inline-block;
    width: 34px;
    height: 34px;
    margin-bottom: 0;
    border-radius: 100%;
    background: #FFFFFF;
    border: 1px solid transparent;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
    cursor: pointer;
    font-weight: normal;
    transition: all 0.2s ease-in-out;
  }
  .avatar-upload .avatar-edit input + label:hover {
    background: #f1f1f1;
    border-color: #d6d6d6;
  }
  .avatar-upload .avatar-edit input + label:after {
    content: "\f040";
    font-family: 'FontAwesome';
    color: #757575;
    position: absolute;
    top: 10px;
    left: 0;
    right: 0;
    text-align: center;
    margin: auto;
  }
  .avatar-upload .avatar-preview {
    width: 192px;
    height: 192px;
    position: relative;
    border-radius: 100%;
    border: 6px solid #F8F8F8;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
  }
  .avatar-upload .avatar-preview > div {
    width: 100%;
    height: 100%;
    border-radius: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
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
  margin-top: -35px;
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
    $sqlimage= "SELECT *  FROM restauantname where  Rest_id='$Rid'";
    $imageresult1 = mysqli_query($conn, $sqlimage);
    while($rows=mysqli_fetch_assoc($imageresult1))
    {
      $image = $rows['Rest_img'];
      ?> 
      <div class="account2">
        <div class="image img-cir img-120">
          <?php echo '<img src="../upload/restaurant_image/'.$image.'" />';   ?>
          <!--     <img src="images/icon/avatar-big-01.jpg" alt="John Doe" /> -->

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
              <i class="fas fa-tachometer-alt"></i>New Items</a>

            </li>
            <li>

              <a href="viewItem.php">
                <i class="fas fa-shopping-cart"></i>View Items</a>
              </li>

              <li>

                <a href="addManager.php">
                  <i class="fas fa-user"></i>Add Manager</a>
                </li>
                <li>

              <a href="manageCouponCode.php">
                <i class="fas fa-snowflake-o"></i>Coupon Code</a>
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
        <div class="menu-sidebar2__content js-scrollbar1" >
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
                <?php echo '<../.. src=restaurant_image/"php/upload/'.$image.'" />';   ?>
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
              <i class="fas fa-tachometer-alt"></i>New Items</a>

            </li>
            <li>

              <a href="viewItem.php">
                <i class="fas fa-shopping-cart"></i>View Items</a>
              </li>

              <li>

                <a href="addManager.php">
                  <i class="fas fa-user"></i>Add Manager</a>
                </li>
                <li>

              <a href="manageCouponCode.php">
                <i class="fas fa-snowflake-o"></i>Coupon Code</a>
              </li>
              </ul>
                    </nav>
                  </div>
                </aside>



                <div class="main-content" id="dashboardid">
                  <div class="section__content section__content--p30">

                   <div class="single-product-tab-area mg-tb-15">

                    <div class="single-pro-review-area">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                              <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Product Addon</a></li>

                              </ul>

                              <?php 
                                require_once "../database/config.php";
                                $query= "SELECT * FROM product_addon where restaurant_id='$Rid' and product_addon_id='$product_addon_id'";

                                $imageresult1 = mysqli_query($conn, $query);
                                while($rows=mysqli_fetch_assoc($imageresult1))
                                {
                                  $product_id=$rows['product_id'];
                                  $addon=$rows['addon'] ;
                                  $price=$rows['price'] ;
                                }
                              ?> 
                              <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                  <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
                                    <div class="col-lg-8 col-sm-8 col-sm-8 col-xs-12">
                                      <div class="review-content-section"> 
                                        <form method="post" action="php/updateProductAddon.php">
                                          <div class="input-group mg-b-pro-edt">
                                            <input type="hidden" name="product_addon_id" value="<?php echo $product_addon_id; ?>">
                                          </div>
                                          <div class="input-group mg-b-pro-edt">
                                            <select  class="form-control" name="product_id" id="product_id" required>
                                              <option value="">Select Product</option>
                                              <?php 
                                              require_once "../database/config.php";
                                              $sqlquery= "SELECT * FROM restauantproduct where Rest_id='$Rid'";
                                                $imageresult1 = mysqli_query($conn, $sqlquery);
                                                while($rows=mysqli_fetch_assoc($imageresult1)) {
                                              ?>
                                              <option value="<?php echo $rows['RPID']; ?>" <?php if($rows['RPID'] == $product_id) { echo "selected"; } ?>><?php echo $rows['RPName']; ?></option>    
                                              <?php } ?>
                                            </select>
                                          </div>
                                        <div class="input-group mg-b-pro-edt">
                                          <input type="text" class="form-control" placeholder="Addon" name="addon" id="addon" value="<?php echo $addon; ?>" required >
                                        </div>
                                        <div class="input-group mg-b-pro-edt">
                                          <input type="number" class="form-control" placeholder="Price" name="price" id="price" autocomplete="off" value="<?php echo $price; ?>" required >
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                            <input type="submit" onclick="return val()" class="btn btn-primary waves-effect waves-light m-r-10" name="insert" value="Upate"/>
                                            <a href="productAddon.php.php" class="btn btn-warning waves-effect waves-light">Back</a>
                                          </div>
                                        </div>
                                      </form>
                                    </div>

                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-sm-8 col-xs-12"></div>

                                  </div>

                                </div>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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
          <script  type="text/javascript">   
            function val(){
              var product_id=document.getElementById("product_id").value;
              var addon=document.getElementById("addon").value;
              var price=document.getElementById("price").value;

              if(product_id == ""){
                alert("Select product.");
                return false;
              } else if(addon == ""){
                alert("Enter addon.");
                return false;
              } else if(price == ""){
                alert("Enter price.");
                return false;
              }
            }
          </script>    

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
        <script  src="../assets/file/js/index.js"></script>

        <!-- Main JS-->
        <script src="../assets/js/main.js"></script>

      </body>

      </html>
<!-- end document-->