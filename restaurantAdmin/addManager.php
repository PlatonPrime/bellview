<?php 
    session_start();
    error_reporting(E_ALL & ~E_NOTICE);
    $Rid="";
    $Rid=$_SESSION['RID'];
    $uid=$_SESSION['emalid'];
    //session_destroy(); 
    if($Rid=="" || $uid=="")
    {
        header("Location: signin.html");
        exit;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel=apple-touch-icon href="../assets/images/titlelogo.png">
    <link rel="shortcut icon" type="image/ico" href="../assets/images/titlelogo.png"/>
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <title>BellView | Add New User</title>
    <link href="../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
    <link href="../assets/css/theme.css" rel="stylesheet" media="all">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/log/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    
    <link rel="stylesheet" href="../assets/log/css/style.css"> 
    <script>
        function showUser(str) {
            if (str=="") {
                document.getElementById("txtHint").innerHTML="";
                return;
            } 
            if (window.XMLHttpRequest) {
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
                width: 40% !important;
                float: left;
            } 
        }
        #log{
                width: 100% !important;
                float: left;
                margin-top: 10px;
            } 
        @media only screen and (max-width: 39.375em) {
            #log{
                width: 50% !important;
                float: left;
                margin-top: 10px;
            } 
            #dashboardid{
                margin-top: -30px;
            }
        }
        #filet{
            display: flex;justify-content: center;
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
    margin-left: -55px;
    margin-top: 20px;
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
  top: 0px;
  left: 0;
font-size: 20px;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload .avatar-preview {
  width: 120px;
  height: 120px;
    
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
 #log{
     width: 13%;
        
        
    } 
        
         @media only screen and (max-width: 48em) {
            
            #log{
     width: 13%;
    } 
            
        }
@media only screen and (max-width: 39.375em) {
    #log{
     width: 65%;
        margin-left: -25px;
        
    } 
        
    .signup-form{
        margin-top: -60px;
    }
    .avatar-upload{
        margin-top: -20px;
    }
    
    
    
        }
        
        
       
.submit {
  width: auto;
  background-color: #3a518d !important;
  color: #fff;
  padding: 3px 20px;
  font-size: 13px;
    margin-right: 25px;
  border: none;
  border-radius: 50px;
  cursor: pointer;
         text-decoration: none;
         }




         .buttonload {
  
  display: inline-block;
  background: #6dabe4;
  color: #fff;
  border: none; /* Remove borders */
  width: auto;
  padding: 15px 39px;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
  margin-top: 25px;
  cursor: pointer;
}

/* Add a right margin to each icon */
.fa {
  margin-left: -12px;
  margin-right: 8px;
}



input[type=checkbox] + label {
  display: block;
  margin: 0.2em;
  cursor: pointer;
  padding: 0.2em;
}

input[type=checkbox] {
  display: none;
}

input[type=checkbox] + label:before {
  content: "\2714";
  border: 0.1em solid #000;
  border-radius: 0.2em;
  display: inline-block;
  width: 1em;
  height: 1em;
  padding-left: 0.2em;
  padding-bottom: 0.3em;
  margin-right: 0.2em;
  vertical-align: bottom;
  color: transparent;
  transition: .2s;
}

input[type=checkbox] + label:active:before {
  transform: scale(0);
}

input[type=checkbox]:checked + label:before {
  background-color: MediumSeaGreen;
  border-color: MediumSeaGreen;
  color: #fff;
}

input[type=checkbox]:disabled + label:before {
  transform: scale(1);
  border-color: #aaa;
}

input[type=checkbox]:checked:disabled + label:before {
  transform: scale(1);
  background-color: #bfb;
  border-color: #bfb;
}
    </style>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <aside class="menu-sidebar2">
            <div class="logo" style="background-color:white; -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2); -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);">
                <a href="index.php">
                    <img src="../assets/images/white91.png"  width="95%" id="log" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1" style="background-color:white; -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2); -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);">
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
                    <?php $_SESSION['email']=$uid; ?>
                    <a href="php/adminLogout.php">Sign out</a>
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
        <!-- PAGE CONTAINER-->
        <div class="page-container2" >
            <header class="header-desktop2" style="background-color:white; -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);-moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);">
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
                        <a href="php/adminLogout.php">Sign out</a>
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
            <div class="main-content">
                <div class="section__content section__content--p30" id="dashboardid">
                    <div class="row m-t-30">
                        <div class="col-md-12">
                            <div class="table-responsive m-b-40">
                                   <section class="signup">
            <div class="container" style="width: 100%;">
                <div style="display: flex;
  justify-content: center;
  align-items: center;">

                    <div >
                        <br/>
                        <h2 class="form-title" style="text-align: center;">Add New Manager</h2>
                        <form id="image_form" method="post" enctype="multipart/form-data">
                          
                            <div class="avatar-upload" style="display: flex;justify-content: center;">
                              <div class="avatar-edit">
                                <input type='file' id="imageUpload" name="imageUpload" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="action" id="action" value="insert" />
                                <label for="imageUpload" ></label>
                              </div>
                              <div class="avatar-preview" >
                                <div id="imagePreview" style="background-image: url(../assets/images/icon/uploadimg.png);">
                                </div>
                              </div>
                            </div>
                          
                          <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                              <input type="text" name="res_name" id="res_name" placeholder="Name of Person" maxlength=35 autocomplete="off" />
                            </div>
                            
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="res_contact" id="res_contact" placeholder="Your Contact No." maxlength=10 onkeypress="return event.charCode >= 48 && event.charCode <= 57" autocomplete="off"/>
                            </div>



                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="res_email" id="res_email" placeholder="Your Email Address" maxlength=35 autocomplete="off"/>
                            </div>


                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-my-location"></i></label>
                                <input type="text" name="res_address" id="res_address" placeholder="Enter the location" maxlength=50 autocomplete="off"/>

                                <input type="hidden" name="res_id" id="res_id"/>
                            </div>

                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="res_pwd" id="res_pwd" placeholder="Password" maxlength=6 autocomplete="off"/>
                            </div>
                            
                            <div class="form-group form-button" id="subtn">
                                <input type="submit" name="insert" id="insert" class="form-submit" value="Register"/>
                            </div>
                            <div class="form-group form-button" id="Loading">
                              <button class="buttonload" disabled>
                                <i class="fa fa-spinner fa-spin"></i>Loading
                              </button>
                            </div>
                            <br/><br/>
                        </form>
                    </div>
                    
                </div>
            </div>
        </section>
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

     <script src="../assets/vendor/jquery/jquery.min.js"></script>

    <script  src="../assets/log/file/js/index.js"></script>

    <!-- Main JS-->
    <script src="../assets/js/main.js"></script>

    <script>
        
        $('#Loading').hide();

  $("#image_form").submit(function(event){
          event.preventDefault();
            event.preventDefault();
            var image_name = $('#imageUpload').val();
            if(image_name == '')
            {
                alert("Please Select Image");
                return false;
            }
            else
            {
                var extension = $('#imageUpload').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['png','jpg','jpeg']) == -1)
                {
                    alert("Invalid Image File");
                    $('#imageUpload').val('');
                    return false;
                }
                else
                {
                    var resname=document.getElementById("res_name").value;
                    if( resname!= "")
                    {
                        var resph=document.getElementById("res_contact").value;
                        if( resph!= "")
                        {
                            if (resph.length ==10){
                                var resemail=document.getElementById("res_email").value;
                                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                                if( resemail!= "")
                                {
                                    if(re.test(resemail)==1)
                                    {
                                        var resph1=document.getElementById("res_address").value;
                                        if( resph1!= "")
                                        {
                                            var resph2=document.getElementById("res_pwd").value;
                                            if( resph2!= "")
                                            {   
                                               $('#res_id').val('<?php echo $Rid;?>');
                                               $('#subtn').hide();
                                               $('#Loading').show();
                                                $.ajax({
                                                    url: "php/addManager.php",
                                                    method: "POST",
                                                    data:new FormData(this),
                                                    contentType:false,
                                                    processData:false,
                                                    success:function(data)
                                                    {
                                                      
                                                        if(data=="1")
                                                        {
                                                            $('#Loading').hide();
                                                            $('#subtn').show();
                                                            alert("The Resaturant has been sucessfully Registered");
                                                            $('#image_form')[0].reset();
                                                        }
                                                        else{
                                                            $('#Loading').hide();
                                                            $('#subtn').show();
                                                            alert(data);
                                                            $('#image_form')[0].reset();
                                                            
                                                        }
                                                    }
                                                }); 

                                            }else{
                                                alert("Enter the password");
                                            }
                                        }else{
                                            alert("Enter the Address");
                                        }
                                    }else{
                                        alert("Enter the Email properly");
                                    }
                                }else{
                                    alert("Enter the Email");
                                }
                            }else{
                                alert("Enter mobile number properly");
                            }
                        }else{
                            alert("Enter the phone number");
                        }
                    }else{
                        alert("Enter the name");
                    }
                }
            }
        });
  
    </script>
</body>

</html>
<!-- end document-->