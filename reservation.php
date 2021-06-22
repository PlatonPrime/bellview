<?php 

                require_once "database/config.php";
                $sqlimage= "SELECT *  FROM  restauantname";
                $imageresult1 = mysqli_query($conn, $sqlimage);
                $i=0;
                while($rows=mysqli_fetch_assoc($imageresult1))
                {
                    $i++;
                    $RPC[$i] = $rows['Rest_name'];
                    
                }?> 
<!doctype html>
<html lang="en">
  <head>
<title>BellView | Reservation</title>
      <link rel=apple-touch-icon href="webAssets/images/titlelogo.png">
        <link rel="shortcut icon" type="image/ico" href="webAssets/images/titlelogo.png"/>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="webAssets/css/bootstrap.css">
    <link rel="stylesheet" href="webAssets/css/animate.css">
    <link rel="stylesheet" href="webAssets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="webAssets/css/magnific-popup.css">
    <link rel="stylesheet" href="webAssets/css/aos.css">

    <link rel="stylesheet" href="webAssets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="webAssets/css/jquery.timepicker.css">
<link rel="stylesheet" href="webAssets/css/classy-nav.min.css">
    <link rel="stylesheet" href="webAssets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="webAssets/fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="webAssets/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="webAssets/css/style.css">
      <link rel="stylesheet" type="text/css" href="webAssets/slide/styles/main_styles.css">
      <link rel="stylesheet" type="text/css" href="webAssets/slide/styles/responsive.css">
      <link rel="stylesheet" href="webAssets/css/style.css">
      <link rel="stylesheet" type="text/css" href="webAssets/slide/plugins/OwlCarousel2-2.3.4/owl.carousel.css">
      <link href="https://fonts.googleapis.com/css?family=Alegreya|Anton|Cormorant+Garamond|Fira+Sans|Francois+One|Karla|Merienda|PT+Sans|PT+Sans+Caption|Patua+One|Playfair+Display|Quattrocento|Quicksand|Raleway|Righteous|Ubuntu" rel="stylesheet">
      <style>
          
              .site-nav-toggle i {
  position: relative;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
  width: 30px;
  height: 2px;
  font: bold 14px/.4 Helvetica;
  text-transform: uppercase;
  text-indent: -55px;
  background: #7aa802 !important;;
  -webkit-transition: all .2s ease-out;
  -o-transition: all .2s ease-out;
  transition: all .2s ease-out;
}
          }
          
          
p {
  color: #606060;
  font-size: 14px;
  line-height: 2;
  font-weight: 500; }

a,
a:hover,
a:focus {
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
  text-decoration: none;
  outline: 0 solid transparent;
  color: #141414;
  font-weight: 600;
  font-size: 14px; }

ul,
ol {
  margin: 0; }
  ul li,
  ol li {
    list-style: none; }


.section-padding-100-0 {
  padding-top: 15px;
  padding-bottom: 0; }

.main-footer-area {
  background-color: #f1f1f1; }
  
    .main-footer-area .footer-widget .widget-title h6 {
      font-size: 14px;
      font-weight: 500;
      margin-bottom: 0;
      color: #7aa802;
        font-weight: 700;
          text-transform: uppercase; }
  .main-footer-area .footer-widget .footer-social-info a {
    display: inline-block;
    color: #000;
    margin-right: 15px; }
    .main-footer-area .footer-widget .footer-social-info a:hover, .main-footer-area .footer-widget .footer-social-info a:focus {
      color: #ffffff; }
  .main-footer-area .footer-widget .useful-links li a {
    display: block;
    color: #000;
    margin-bottom: 15px;
    font-size: 14px;
    font-weight: 500; }
    .main-footer-area .footer-widget .useful-links li a:hover, .main-footer-area .footer-widget .useful-links li a:focus {
      color: #69bc5f; }
  .main-footer-area .footer-widget .gallery-list a {
    position: relative;
    z-index: 1;
    @flex (0 0 30%);
    max-width: 30%;
    margin-bottom: 15px;
    cursor: zoom-in; }
    .main-footer-area .footer-widget .gallery-list a::after {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      content: '';
      background-color: #7aa802;
      opacity: 0;
      visibility: hidden;
      -webkit-transition-duration: 500ms;
      transition-duration: 500ms; }
    .main-footer-area .footer-widget .gallery-list a:hover::after {
      opacity: 1;
      visibility: visible; }
  .main-footer-area .footer-widget .single-contact i {
    color: #7aa802;
    font-size: 20px;
    margin-right: 15px;
    padding-top: 7px; }
  .main-footer-area .footer-widget .single-contact p {
    margin-bottom: 0; }

.bottom-footer-area {
  background-color: #141414;
    
  padding: 10px 0;
  text-align: center; }
  .bottom-footer-area p {
    font-size: 12px;
    margin-bottom: 0; }
    .bottom-footer-area p a {
      color: #fff;
      font-size: 12px; }

      
      
          
          #bell{
              width: 25% !important;
              
          }
      
          
          @media only screen and (max-width: 39.375em) {
    
              #bell{
              width: 100px !important;
  
          }
              
              
  
          }   
      </style>
      <link rel="stylesheet" type="text/css" href="webAssets/slider/css/style2.css" />
    <script type="text/javascript" src="webAssets/slider/js/modernizr.custom.28468.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
    <noscript>
      <link rel="stylesheet" type="text/css" href="webAssets/slider/css/nojs.css" />
    </noscript>
  </head>
  <body>
    <div id="preloader">
        <div class="caviar-load"></div>
        <div class="preload-icons">
            <img class="preload-1" src="webAssets/img/core-img/preload-1.png" alt="">
            <img class="preload-2" src="webAssets/img/core-img/preload-2.png" alt="">
            <img class="preload-3" src="webAssets/img/core-img/preload-3.png" alt="">
        </div>
    </div>

    <div class="site-wrap">
      
      <header class="header">
    <div class="header_wrap d-flex flex-row align-items-center justify-content-center">
      
      <!-- Logo -->
      <div class="logo"><a href="index.html"><img src="webAssets/images/bell.png" alt=""></a></div>

      <!-- Hamburger -->
      <div class="hamburger ml-auto" id="hamburger" ><i class="fa fa-bars" ></i></div>

    </div>
  </header>

  <!-- Fixed Header -->

  <header class="fixed_header">
    <div class="header_wrap d-flex flex-row align-items-center justify-content-center">
      
      <!-- Logo -->
      <div class="logo"><a href="index.html"><img src="webAssets/images/bell.png" alt=""></a></div>

      <div class="hamburger ml-auto abc"><i class="fa fa-bars" aria-hidden="true"></i></div>

    </div>
  </header>

  <!-- Menu -->

  <div class="menu">
    <div class="menu_door door_left"></div>
    <div class="menu_door door_right"></div>
    <div class="menu_content d-flex flex-column align-items-center justify-content-center">
      <div class="menu_close">close</div>
      <div class="menu_nav_container">
        <nav class="menu_nav text-center">
          <ul>
            <li><a href="index.html" >home</a></li>
            <li><a href="about.html">about us</a></li>
            <li><a href="reservation.php" style="font-weight: 700;color: #7aa802">Reservation</a></li>
            <li><a href="blog.html">blog</a></li>
            <li><a href="contact.php">contact</a></li>
          </ul>
        </nav>
      </div>
      
    </div>
  </div>
      <div class="main-wrap">
         <div class="cover_1">
          <div class="img_bg" style="background-image: url(webAssets/images/footer/image/i2.jpg);">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-12" data-aos="fade-up">
                  <h2 class="heading" style="background-color: white;border-radius: 25px;padding: 25px;opacity: 0.8; text-align: center; color: #7aa802">Reservation</h2>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- .cover_1 -->
        
          <br/>
           
        <div class="section" data-aos="fade-up" style="background-color:white;background-image: url('webAssets/images/reddood.png');
  background-repeat: repeat;background-size: 200px ;">
          <div class="container" >

            <div class="row justify-content-center" >
              <div class="col-md-10 p-5" style="background-color:#fff;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <form id="image_form" method="post" action="webphp/reservation.php">
                  <div class="row mb-4" style="display: flex;justify-content: center;">
                    <div class="form-group col-md-4">
                      <label for="name" class="label">Name</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-person"></span>
                        <input type="text" class="form-control" name="per_name" id="per_name">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email" class="label">Email</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-email"></span>
                        <input type="text" class="form-control" id="email" name="email">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Phone</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="text" class="form-control" id="phone" name="phone" maxlength=10 onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                      </div>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="persons" class="label">Number of Persons</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-arrow-dropdown"></span>
                        <select name="persons" id="persons" name="persons" class="form-control">
                            <option value="">---SELECT---</option>
                          <option value="1 person">1 person</option>
                          <option value="2 person">2 persons</option>
                          <option value="3 person">3 persons</option>
                          <option value="4 person">4 persons</option>
                          <option value="5+ person">5+ persons</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="date" class="label">Date</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-calendar"></span>
                        <input type="text" class="form-control" id="date" name="date">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="time" class="label">Time</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-time"></span>
                        <input type="text" class="form-control" id="time" name="time">
                      </div>
                    </div>
                      
                      <div class="form-group col-md-4">
                      <label for="persons" class="label">Select the Restaurent Name</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-arrow-dropdown"></span>
                        <select id="res_name" name="res_name" class="form-control">
                          <option value="">---SELECT---</option>
                          <?php for($j=1;$j<=$i;$j++)  {   ?>
                                                <option><?php echo $RPC[$j]; ?></option>
                                                
                                                <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-md-4">
                        
                      <input type="submit" class="btn btn-primary btn-outline-primary btn-block" value="Submit" name="insert" id="insert" onclick="return val()">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        <br/></div> <!-- .section -->

  

      </div>
        <!-- .main-wrap -->
      </div>
 
     <footer class="pb-50  pt-70 pos-relative" style="width: 100%;font-family: 'Ubuntu', sans-serif !important; ">
        <div class="pos-top triangle-bottom"></div>
        <div class="container-fluid">
                <a href="index.html"><img src="webAssets/images/bell.png" alt="BellView" class="logo12"></a>

                <div class="pt-30">
                        <p class="underline-secondary" ><i class="ion-ios-location" style="font-size: 25px; !important;color: #fff !important;"></i></p>
                        <p style="color: #fff;font-size: 20px;letter-spacing: 2px;">#217, AGB Layout, Hesaragatta Main Road, Bengaluru 560090</p>
                </div>

                <div class="pt-30">
                        <p class="underline-secondary"><i class="
 ion-ios-telephone" style="font-size: 25px; !important;color: #fff !important;"></i></p> 
                    <a href="tel:+91 7845127845" style="color: #fff;font-size: 20px;letter-spacing: 2px;">+91 7845127845 </a>| <a href="tel:+91 7845127845" style="color: #fff;font-size: 20px;letter-spacing: 2px;"> +91 7845127845 </a>
                </div>

                <div class="pt-30">
                        <p class="underline-secondary"><i class="
  ion-ios-email" style="font-size: 25px; !important;color: #fff !important;"></i></p>
                    <a href="mailto:kushal@bellview.in" style="color: #fff;font-size: 20px;letter-spacing: 2px;"> kushal@bellview.in </a> | <a href="mailto:naveen@bellview.in" style="color: #fff;font-size: 20px;letter-spacing: 2px;"> naveen@bellview.in</a>
                </div>

                <ul class="icon mt-30">
                        
                        <li class="list"><a href="https://www.facebook.com/bellviewofficial/"  target="_blank"><i class="ion-social-facebook" style="font-size: 30px; !important;color: #fff !important;"></i></a></li>
                        <li class="list"><a href="https://twitter.com/bellview_global"  target="_blank"><i class="ion-social-twitter" style="font-size: 30px; !important;color: #fff !important;"></i></a></li>
                        <li class="list"><a href="https://www.linkedin.com/in/bellviewglobal"  target="_blank"><i class="ion-social-linkedin" style="font-size: 30px; !important;color: #fff !important;"></i></a></li>
                        <li class="list"><a href="https://www.instagram.com/bellview_official/"  target="_blank"><i class="ion-social-instagram" style="font-size: 30px; !important;color: #fff !important;"></i></a></li>
                        
                </ul>

                <p class="color-light font-9 " style="color: #fff;font-size: 15px;letter-spacing: 2px;">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p><p>Powered by <a href="https://platonprime.com" target="_blank" style="color: #fff;font-size: 20px;letter-spacing: 2px;font-weight: 700;">Platon</a>
            
            
</p>
            <p class="color-light font-9 " style="color: #fff;font-size: 15px;letter-spacing: 2px;">
            <p class="color-light font-9 " style="color: #fff;font-size: 15px;letter-spacing: 2px;">
                    PLATON SERVICES PRIVATE LIMITED</p>
        </div>
</footer>
   
    <script src="webAssets/js/jquery-3.2.1.min.js"></script>
    <script src="webAssets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="webAssets/js/popper.min.js"></script>
    <script src="webAssets/js/bootstrap.min.js"></script>
    <script src="webAssets/js/owl.carousel.min.js"></script>
    <script src="webAssets/js/jquery.waypoints.min.js"></script>

    <script src="webAssets/js/bootstrap-datepicker.js"></script>
    <script src="webAssets/js/jquery.timepicker.min.js"></script>
    <script src="webAssets/js/jquery.stellar.min.js"></script>

    <script src="webAssets/js/aos.js"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

    <script src="webAssets/js/main.js"></script>
      <script src="webAssets/slide/plugins/greensock/TweenMax.min.js"></script>
      <script src="webAssets/slide/plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>


<script src="webAssets/slide/js/custom.js"></script>
      
       <script src="webAssets/load/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="webAssets/load/active.js"></script>
   <!--   <script>   
        $(document).ready(function()
        {
            $('#image_form').submit(function(event)
            {
                event.preventDefault();
                var resitname=document.getElementById("per_name").value;
                if(resitname!= "")
                {
                    var regex=/^[a-zA-Z ]*$/;
                    if (resitname.match(regex))
                    {
                        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        var resemail=document.getElementById("email").value;
                        if( resemail!= "")
                        {
                            if(re.test(resemail)==1)
                            {        
                                var resitcost=document.getElementById("phone").value;
                                if( resitcost!= "")
                                {
                                    if(resitcost.length ==10)
                                    {
                                        var mydropdown1 = $('#persons');
                                        if (!(mydropdown1.length == 0 || $(mydropdown1).val() == ""))
                                        {
                                            var resitdate=document.getElementById("date").value;
                                            if( resitdate!= "")
                                            {
                                                var resittime=document.getElementById("time").value;
                                                if( resittime!= "")
                                                {
                                                    var mydropdown2 = $('#res_name');
                                                    
                                                    if (!(mydropdown2.length == 0 || $(mydropdown2).val() == ""))
                                                    {
                                                        
                                                        
                                                        var dataString = 'n1='+ resitname + '&n2='+ resemail + '&n3='+ resitcost + '&n4='+ mydropdown1.val() + '&n5='+ resitdate+ '&n6='+ resittime+ '&n7='+ mydropdown2.val();

                                                        $.ajax({
                                                            type: "POST",
                                                            url: "php/reserve.php",
                                                            data: dataString,
                                                            cache: false,
                                                            success:function(data)
                                                            {
                                                                if(data=='1')
                                                                {
                                                                    alert("Table has been reserved");
                                                                    window.location.href="reservation.php";
                                                                }
                                                                else{
                                                                    alert("Table not been reserved");
                                                                }
                                                            }
                                                        });
                                                    }
                                                    else{
                                                        alert("Select the restarent name");
                                                    }
                                                }
                                                else{
                                                    alert("Select the timings");     
                                                }
                                            }
                                            else{
                                                alert("Select the date");    
                                            }
                                        }
                                        else{
                                            alert("Please selct the number of persons");
                                        }
                                    }
                                    else{
                                        alert("Enter the 10 digit phone number");
                                    }
                                }
                                else
                                {
                                    alert("Enter the phone number");
                                }
                            }
                            else{
                                alert("Enter the Email properly");        
                            }
                        }
                        else{
                            alert("Enter the email");        
                        }
                    }
                    else{
                        alert("Enter the name properly");        
                    }
                }
                else{
                    alert("Enter the name");
                }
            });
        });
    
</script>  -->
      
       
      
      
      <script  type="text/javascript">   
          function val(){
              var resitname=document.getElementById("per_name").value;
                if(resitname!= "")
                {
                    var regex=/^[a-zA-Z ]*$/;
                    if (resitname.match(regex))
                    {
                        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        var resemail=document.getElementById("email").value;
                        if( resemail!= "")
                        {
                            if(re.test(resemail)==1)
                            {        
                                var resitcost=document.getElementById("phone").value;
                                if( resitcost!= "")
                                {
                                    if(resitcost.length ==10)
                                    {
                                        var mydropdown1 = $('#persons');
                                        if (!(mydropdown1.length == 0 || $(mydropdown1).val() == ""))
                                        {
                                            var resitdate=document.getElementById("date").value;
                                            if( resitdate!= "")
                                            {
                                                var resittime=document.getElementById("time").value;
                                                if( resittime!= "")
                                                {
                                                    var mydropdown2 = $('#res_name');
                                                    
                                                    if (!(mydropdown2.length == 0 || $(mydropdown2).val() == ""))
                                                    {
                                                        return true;
                                                    }
                                                    else{
                                                        alert("Select the restarent name");
                                                        return false;
                                                    }
                                                }
                                                else{
                                                    alert("Select the timings");     
                                                    return false;
                                                }
                                            }
                                            else{
                                                alert("Select the date");   
                                                return false;
                                            }
                                        }
                                        else{
                                            alert("Please selct the number of persons");
                                            return false;
                                        }
                                    }
                                    else{
                                        alert("Enter the 10 digit phone number");
                                        return false;
                                    }
                                }
                                else
                                {
                                    alert("Enter the phone number");
                                    return false;
                                }
                            }
                            else{
                                alert("Enter the Email properly");  
                                return false;
                            }
                        }
                        else{
                            alert("Enter the email"); 
                            return false;
                        }
                    }
                    else{
                        alert("Enter the name properly");    
                        return false;
                    }
                    
                }
                else{
                    alert("Enter the name");
                    return false;
                }
       }

  
</script> 
  </body> 
</html>