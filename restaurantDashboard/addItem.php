<?php 
    session_start();
    error_reporting(E_ALL & ~E_NOTICE);
    $Rid="";
    $Rid=$_SESSION['RID'];
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
    <title>BellView | Product New</title>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
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
        a:link {
  text-decoration: none;
}
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
  right: 25px;
  z-index: 1;
  top: 15px;
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
  background: #7aa802;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload .avatar-edit input + label:hover {
 background: #7aa802;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
  content: "\f044";
  font-family: 'FontAwesome';
  color: #fff;
  position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
        
#image {
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
.avatar-upload .avatar-preview {
  width: 280px;
  height: 200px;
    
  position: relative;
  
  
}
        
   @media only screen and (max-width: 48em) {     
            #log{
     width: 40%;
                float: left;
    } 
            
        }
@media only screen and (max-width: 39.375em) {
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
    #description{
        margin-top: -65px;
    }
    #descriptionid{
        margin-top: -35px;
    } 
        }
            
    </style>
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
      


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
         
          <div class="main-content">
                <div class="section__content section__content--p30">
                        
                     <div class="single-product-tab-area mg-tb-15">
            
            <div class="single-pro-review-area" id="dashboardid">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Product Edit</a></li>
                                    
                                </ul>
                                
                                
                                
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <form id="image_form" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section" style="margin-left:-50px">
                                                    
                                                <div class="avatar-upload">
                                                   <div class="avatar-edit" style="margin-top:-50px;margin-right:-95px;">
            <input type='file' id="imageUpload" name="imageUpload" accept=".png, .jpg, .jpeg" />
            <input type="hidden" name="action" id="action" value="insert" />
     
            <label for="imageUpload"></label>
        </div>
                                                    <div class="avatar-preview" style="margin-left:-10px;">
                                                        <div id="imagePreview" style="background-image:      url(../assets/images/icon/uploadimg.png);">
                                                        </div>
                                                    </div>
                                                </div>    
                                                
                                                </div>
                                                <br><br>
                                            </div> 

                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="descriptionid">
                                                
                                                <div class="review-content-section">
                                                    
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Item Name" name="res_item_name" id="res_item_name" maxlength=30 >
                                                    </div>

                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Item Name" name="res_short_name" id="res_short_name" maxlength=15 >
                                                    </div>
                                                    
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-rupee" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Cost" name="res_item_cost" id="res_item_cost" maxlength=4 onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                                    </div>
                                                    
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Type of Category" name="res_item_cat" id="res_item_cat" maxlength=25>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                    <select  class="form-control" name="res_item_vn" id="res_item_vn" >
                              <option value="" >Select Type of Food</option>
                              <option value="Veg" name="Veg">Veg</option>
                              <option name="Non-Veg" value="Non-Veg">Non-Veg</option>
                              
                            </select>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                    <select  class="form-control" name="res_item_st" id="res_item_st">
                              <option value="" >Select Status</option>
                              <option  name="Available" value="Available">Available</option>
                              <option name="Not Available" value="Not Available">Not Available</option>
                              
                            </select>
                                                    </div>
                                                    <select  class="form-control" name="res_item_type" id="res_item_type">
                              <option value="" >Select Type</option>
                              <option value="Starter" name="Starter">Starter</option>
                              <option name="Main Course" value="Main Course">Main Course</option>
                                                        <option name="Desert" value="Desert">Desert</option>
                              
                            </select>
                                                    <br>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-rupee" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="GST" name="res_item_gst" id="res_item_gst" maxlength=2 onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <?php $_SESSION['RIDP']=$Rid; ?>
                                                    <button type="submit" name="newproduct" id="newproduct"  class="btn btn-primary waves-effect waves-light m-r-10 dell">Save
                            </button>
                                                    <a href="viewItems.php" class="btn btn-warning waves-effect waves-light">Back
                            </a>
                                                </div>
                                            </div>
                                                
                                                   
                                                        </div>
                                                
                                            </div>
                                        </div>
                                            
                                        </form>
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

   
<script type="text/javascript">


var resize = $('#imagePreview').croppie({
    enableExif: true,
    enableOrientation: true,    
    viewport: { 
        width: 250,
        height: 150,
        type: 'rectangle' 
    },
    boundary: {
        width: 280,
        height: 200
    }
});


$('#imageUpload').on('change', function () { 
  var reader = new FileReader();
    reader.onload = function (e) {
      resize.croppie('bind',{
        url: e.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
});


function ajaxCall1(resitname){
 

  resize.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (img) {
    $.ajax({
      url: "php/uploadItemImage.php",
      type: "POST",
      data: {"image":img,"resname":resitname},
      success: function (data) {
        
      }
    });
  });
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

<script>   
    
    
    $(document).ready(function()
    {
        $('#image_form').submit(function(event)
        {
            event.preventDefault();
            var image_name = $('#imageUpload').val();
            if(image_name == '')
            {
                alert("Please Select Image");
                return false;
            }
            else
            {
                var image_name = $('#imageUpload').val();
                var extension = $('#imageUpload').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                    alert("Invalid Image File");
                    $('#imageUpload').val('');
                    return false;
                }
                else
                {
                    var resitname=document.getElementById("res_item_name").value;
                    if(resitname!= "")
                    {
                        var resitcost=document.getElementById("res_item_cost").value;
                        if( resitcost!= "")
                        {
                            var resitcat=document.getElementById("res_item_cat").value;
                            if( resitcat!= "")
                            {
                                var mydropdown1 = $('#res_item_vn');
                                if (!(mydropdown1.length == 0 || $(mydropdown1).val() == ""))
                                {
                                    var mydropdown = $('#res_item_st');
                                    if (!(mydropdown.length == 0 || $(mydropdown).val() == ""))
                                    {
                                        
                                        var mydropdown = $('#res_item_type');
                                    if (!(mydropdown.length == 0 || $(mydropdown).val() == ""))
                                    {
                                      var res_short_name=document.getElementById("res_short_name").value;
                                      if(res_short_name!= "")
                                      {                    
                                        var res_item_gst=document.getElementById("res_item_gst").value;
                        if( res_item_gst!= "")
                        {
                                        $.ajax({
                                            url:"php/addItem.php",
                                            method:"post",
                                            data:new FormData(this),
                                            contentType:false,
                                            processData:false,
                                            success:function(data)
                                            {
                                                if(data=="1")
                                                {
                                                    ajaxCall1(resitname);
                                                    alert("Product has been Added");
                                                    //         $('#image_form')[0].reset();
                                                    window.location.href="viewItems.php";
                                                    //      $('#imageModal').modal('hide');
                                                    
                                                }
                                                else{
                                                    alert(data);
                                                  //  $('#image_form')[0].reset();
                                            //        $('#imageModal').modal('hide');
                                                    
                                                }
                                            }
                                        });
                                      }else{
                                        alert("Enter the GST");
                                      }
                                      }else{
                                        alert("Enter the Product Short Name");
                                      }
                          
                                    }
                                        else{
                                        alert("Please select type");
                                    }}
                                    else{
                                        alert("Please select Status");
                                    }
                                    
                                }
                                else{
                                    alert("Please select type of food");
                                }
                                 
                            }
                            else{
                                alert("Enter the category");
                            }
                        }
                        else
                        {
                            alert("Enter the cost");
                        }
                    }
                    else{
                        alert("Enter the Item name");
                    }
                }
            }
             });
        
    });
          
</script>