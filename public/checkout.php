<?php 
session_start();
error_reporting(E_ALL & ~E_NOTICE);

include "../database/config.php";
$Ruid=$_SESSION['RERID'];
if($Ruid==""){
 header("Location: invalid.php");
 exit;
}

$GST=0;
$sql11="SELECT sum(GST) as GST
FROM add_cart WHERE RUID='".$Ruid."'";
$imageresult11 = mysqli_query($conn, $sql11);
while($rows=mysqli_fetch_assoc($imageresult11))
{
  $GST=$rows['GST'];
}

$tot2=0;
$sql="SELECT sum(rp.RPCost*ad.qty) as su
FROM add_cart ad, rest_user ru, restauantproduct rp
WHERE ad.RUID=ru.Rest_User_Id and ad.RPID=rp.RPID and ad.RUID='".$Ruid."'";
$imageresult1 = mysqli_query($conn, $sql);
while($rows=mysqli_fetch_assoc($imageresult1))
{
 $tot2=$tot2+$rows['su'];   
} 
$tot1=0;
$sql1="SELECT sum(ad.cost*ad.qty) as su1
FROM add_cart ad, rest_user ru, offer off
WHERE ad.RUID=ru.Rest_User_Id and ad.RPID=off.ROID and ad.RUID='".$Ruid."'";
$imageresult2 = mysqli_query($conn, $sql1);
while($rows=mysqli_fetch_assoc($imageresult2))
{
  $tot1=$tot1+$rows['su1'];
}

$percentage = 3+$GST+$GST;
$totalWidth = $tot1+$tot2;
$new_width = ($percentage / 100) * $totalWidth;
$tot=round($totalWidth+$new_width);

$now = DateTime::createFromFormat('U.u', microtime(true));
$ordersid="ORD".$now->format("Hisu");

$couponCodeError = "";
$couponCodeSuccess = "";
if(isset($_POST['applyCouponCode'])){
  unset($_POST['applyCouponCode']);

  $Rest_id = $_SESSION['RID'];
  $couponcode = $_POST['coupon_code'];
  $query = "SELECT * FROM coupon_code WHERE Rest_id='".$Rest_id."' AND couponcode='".$couponcode."'";
  $couponCodeData = mysqli_query($conn, $query);

  if(mysqli_num_rows($couponCodeData)){
    while($couponData=mysqli_fetch_assoc($couponCodeData))
    {
      $currentDate = date("Y-m-d");
      if ($couponData['expire_date'] >= $currentDate) {
        if($couponData['usage_limit'] == $couponData['no_of_used']){
          $couponCodeError = "Coupon Code has been expireds.";
        } else {
          $discountType = $couponData['type'];
          $discountValue = $couponData['value'];
          if($couponData['type'] == "Percentage"){
            $subtotal = $tot;
            $discountAmount = $tot * $couponData['value'] / 100;
            $tot = $subtotal - $discountAmount;
            $couponCodeSuccess = "Coupon Code applied.";
          } else {
            $subtotal = $tot;
            $discountAmount = $couponData['value'];
            $tot = $subtotal - $discountAmount;
            $couponCodeSuccess = "Coupon Code applied.";
          }
        }
      } else {
          $couponCodeError = "Coupon Code has been expired.";
      }
    }
  } else {
    $couponCodeError = "Invalid Coupon Code.";
  }
}

?>  
<!DOCTYPE html>
<html>
<head>
  <title>BellView | Payment</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="assets/car/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<link href="assets/car/css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,900" rel="stylesheet">
<link rel=apple-touch-icon href="assets/images/titlelogo.png">
<link rel="shortcut icon" type="image/ico" href="assets/images/titlelogo.png"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<link href="assets/caro/css/resCarousel.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>

<style>
  .razorpay-payment-button {
    background-color: #7266ba; /* Green */
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 13px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 0px !important;
    width: 65% !important;
    text-align: center;
    padding: 12px 0px !important;
  }
  .razorpay_cust {
    background-color: #375e97; /* Green */
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 13px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 0px !important;
    width: 65% !important;
    text-align: center;
    padding: 12px 0px !important;
  }
  input, select, textarea {
    outline: none;
    appearance: unset !important;
    -moz-appearance: unset !important;
    -webkit-appearance: unset !important;
    -o-appearance: unset !important;
    -ms-appearance: unset !important;
  }
  input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
    appearance: none !important;
    -moz-appearance: none !important;
    -webkit-appearance: none !important;
    -o-appearance: none !important;
    -ms-appearance: none !important;
    margin: 0; 
  }
  input:focus, select:focus, textarea:focus {
    outline: none;
    box-shadow: none !important;
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    -o-box-shadow: none !important;
    -ms-box-shadow: none !important;
  }
  h2 {
    line-height: 1.8;
    margin: 0;
    padding: 0;
    font-weight: bold;
    color: #222;
    font-family: 'Roboto Slab';
    font-size: 20px;
    margin-bottom: 30px;
    text-transform: uppercase;
  }
  .main {
    margin-top: 25px;
    display: flex;
    justify-content: center;
  }
  .log{
    width:3%;
  }
  .container {
    width: 586px;
    background: #fff;
    margin-left: 165px;
    border-radius: 10px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    -o-border-radius: 10px;
    -ms-border-radius: 10px; 
    box-shadow: 0 6px 50px 0 rgba(0, 0, 0, 0.2), 0 6px 50px 0 rgba(0, 0, 0, 0.2);

  }
  #logd{
    margin-top: 25px;
    margin-left: 98px;
    width:40%;
  }
  @media only screen and (max-width: 48em) {
    #log{
      width: 13%;
    } 
  }
  @media only screen and (max-width: 39.375em) {
    #log{
      max-width:150px;
      max-height:75px;
      width: auto;
      height: auto;
      margin-left:-15px;
    }    
    #logd{
      margin-top: 25px;
      margin-left: 1px;
      width:40%;
      margin-top:25px;
    }
    #cod, #op{
      border-radius: 0px;
      width: auto;
      background: green;
      color: #fff;
      padding: 12px 12px;
      font-size: 12px;
      border: none;
      margin-left: 8px;
      margin-right: 8px;
      cursor: pointer;
    }
  } 


    .appointment-form {
      padding: 50px 60px 70px 60px; }

      input, select {
        width: 100%;
        display: block;
        border: none;
        border-bottom: 2px solid #ebebeb;
        padding: 5px 0;
        color: #222;
        margin-bottom: 31px;
        font-family: 'Roboto Slab'; }
        input:focus, select:focus {
          color: #222;
          border-bottom: 2px solid #4966b1; }

          input[type=checkbox]:not(old) {
            width: 2em;
            margin: 0;
            padding: 0;
            font-size: 1em;
            display: none; }

            input[type=checkbox]:not(old) + label {
              display: inline-block;
              margin-top: 7px;
              margin-bottom: 25px; }

              input[type=checkbox]:not(old) + label > span {
                display: inline-block;
                width: 13px;
                height: 13px;
                margin-right: 15px;
                margin-bottom: 3px;
                border: 1px solid #ebebeb;
                background: white;
                background-image: -moz-linear-gradient(white, white);
                background-image: -ms-linear-gradient(white, white);
                background-image: -o-linear-gradient(white, white);
                background-image: -webkit-linear-gradient(white, white);
                background-image: linear-gradient(white, white);
                vertical-align: bottom; }

                input[type=checkbox]:not(old):checked + label > span {
                  background-image: -moz-linear-gradient(white, white);
                  background-image: -ms-linear-gradient(white, white);
                  background-image: -o-linear-gradient(white, white);
                  background-image: -webkit-linear-gradient(white, white);
                  background-image: linear-gradient(white, white); }

                  input[type=checkbox]:not(old):checked + label > span:before {
                    content: '\f26b';
                    display: block;
                    color: #222;
                    font-size: 11px;
                    line-height: 1.2;
                    text-align: center;
                    font-family: 'Material-Design-Iconic-Font';
                    font-weight: bold; }


                    .submit {
                      background-color: #4CAF50; /* Green */
                      border: none;
                      color: white;
                      text-align: center;
                      text-decoration: none;
                      display: inline-block;
                      font-size: 16px;
                      margin: 4px 2px;
                      cursor: pointer;
                      border-radius: 0px !important;
                      width: 80% !important;
                      text-align: center;
                      padding: 12px 0px !important;

                    }
                    .submit:hover {
                      background: #3a518d; }
                      @media screen and (max-width: 1024px) {
                        .container {
                          margin: 0 auto; } }
                          @media screen and (max-width: 768px) {
                            .container {
                              width: calc( 100% - 30px);
                              max-width: 100%; } }
                              @media screen and (max-width: 480px) {
                                .appointment-form {
                                  padding: 50px 30px 50px 30px; } }
                                </style>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>

                              </head>

                              <body style="background-color:white;background-image: url('assets/imag/dood1.png');
                              background-repeat: repeat;background-size: 200px ;">
                              <div class="container">
                                <header style="position: fixed;
                                top: 0px;z-index: 999;justify-content: center;
                                align-items: center;
                                display: flex;background-color:white;-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
                                -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);

                                box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);">
                                <div class="logo" >
                                 <img src="assets/images/white91.png" style="max-width:150px;
                                 max-height:75px;
                                 width: auto;
                                 height: auto; margin-left:-25px;" class="log" id="log"/>
                               </div> 
                             </header>


                           </div>
                           <div >

                            <br/><br/>
                            <br/>
                            <div class="main"  >
                              <div class="container" style="background-color:white;background-image: url('assets/imag/dood2.png');
                              background-repeat: no-repeat;background-size: 100px ;background-position:
                              bottom right;margin-top:25px;">
                              <form method="post" id="couponCodeForm" style="margin-top:10px;padding: 50px 60px 0px 60px;">
                                <h2 style="text-align: center;font-size:25px;">Have a coupon code?</h2>
                                <div class="form-group-1">
                                  <input style="margin-bottom: 10px;text-transform: uppercase;" type="text" name="coupon_code" id="coupon_code" minlength="6" maxlength="14" autocomplete="off" placeholder="Enter Coupon Code" value="<?php if(isset($_POST['coupon_code'])){ echo $_POST['coupon_code']; } ?>" required />
                                  <span style="color: red;"><?php echo $couponCodeError; ?></span>
                                  <span style="color: green;"><?php echo $couponCodeSuccess; ?></span>
                                </div>
                                <div class="form-submit" style="display: flex;justify-content: center;">
                                   <input type="submit" class="submit" name="applyCouponCode" value="Apply" style="background-color: #31a9b8 !important;"/>
                                 </div>
                                </form>
                                <form class="appointment-form" method="post" action="php/addToCashCart.php" style="margin-top:10px;">
                                  <h2 style="text-align: center;font-size:25px">Payment Details</h2>
                                  <div class="form-group-1">
                                    <input type="text" name="res_name" id="res_name" autocomplete="off" placeholder="Your Name"  />
                                    <input type="text" name="res_mail" id="res_mail" autocomplete="off" placeholder="Your Email"  />
                                    <input type="number" placeholder="Phone number" name="res_num" id="res_num" maxlength=10 minlength=10 onkeypress="return event.charCode >= 48 && event.charCode <= 57" autocomplete="off"  />
                                    <input type="hidden" name="res_amt" id="res_amt" placeholder="<?php echo $tot; ?>" autocomplete="off" value="<?php echo $tot; ?>"/>

                                    <?php if($couponCodeSuccess != "") { ?>
                                      <input type="hidden" name="coupon_code" id="coupon_code" autocomplete="off" value="<?php echo $_POST['coupon_code']; ?>"/>
                                      <input type="hidden" name="subtotal" id="subtotal" autocomplete="off" value="<?php echo $subtotal; ?>"/>
                                      <input type="hidden" name="discount_amount" id="discount_amount" autocomplete="off" value="<?php echo $discountAmount; ?>"/>
                                      <input type="hidden" name="discount_type" id="discount_type" autocomplete="off" value="<?php echo $discountType; ?>"/>
                                      <input type="hidden" name="discount_value" id="discount_value" autocomplete="off" value="<?php echo $discountValue; ?>"/>
                                      <h2 style="text-align: center;margin-bottom: 5px;">Subtotal: <i style="margin-right:3px;" class='fas fa-rupee-sign'></i><?php echo $subtotal; ?></h2>
                                      <h2 style="text-align: center;margin-bottom: 5px;">Discount: <i style="margin-right:3px;" class='fas fa-rupee-sign'></i><?php echo $discountAmount; ?></h2>
                                    <?php } ?>
                                        <h2 style="text-align: center">Total Cost: <i style="margin-right:3px;" class='fas fa-rupee-sign'></i><?php echo $tot; ?></h2>

                                    <h6 style="text-align: center;margin-top: -25px;padding-bottom: 10px;">*(Include with GST, All Taxes)</h6>

                                  </div>
                                  <?php $_SESSION['PName']=$res_name; $_SESSION['CName']=$res_num; ?>
                                  <div class="form-submit" style="display: flex;justify-content: center;">
                                   <input type="submit" onclick="return val()" id="cod"  class="submit" value="Cash on Table" style="background-color: #31a9b8 !important;"/>

                 <!--   <input type="submit" onclick="return val()" id="op" class="submit" value="Pay Online" style="margin-left:5px"/>
                 -->
               </div>


               <h2 style="text-align: center;">OR</h2>
             </form>






             <div style="text-align: center;">

              <form id="redirectForm" method="post" action="payOnline.php" style="margin-top: -75px;">
                <input type="hidden" class="form-control" name="appId" placeholder="Enter App ID here (Ex. 123456a7890bc123defg4567)"/ value="13858a231e262df03e014331685831">
                <input type="hidden" class="form-control" name="orderId" placeholder="Enter Order ID here (Ex. order00001)" value="<?php echo $ordersid;?>" />
                <input type="hidden" class="form-control" name="orderAmount" value="<?php echo $tot; ?>" />
                <input type="hidden" class="form-control" name="orderCurrency" value="INR" />
                <input type="hidden" class="form-control" name="orderNote" value="BellView - Your Dish, Your Wish !!!" />
                <input type="hidden" class="form-control" name="customerName" id="customerName"/>
                <input type="hidden" class="form-control" name="customerEmail" id="customerEmail"/>
                <input  type="hidden" class="form-control" name="customerPhone" id="customerPhone"/>
                <input  type="hidden" class="form-control" name="returnUrl" value="" id="returnUrl" />
                <input type="hidden" class="form-control" name="notifyUrl" value=""/>
                <button type="submit" class="razorpay_cust" value="Pay" onclick="return val()">Pay Online</button>
                <br> 
                <br>
              </form>
            </div>

            <br/><br/><br/>


            <div style="text-align: center;display: none;">
             <div class="razorpay-embed-btn" data-url="https://rzp.io/l/5899zat"  data-text="Pay Now" onclick="return val()" data-color="#528FF0" data-size="large" style="margin-top: -85px;text-align: center;padding-bottom: 30px;">


               <form id="myForm" method="POST" ><script  src="https://checkout.razorpay.com/v1/checkout.js"    data-key="rzp_live_GN1SLMwQgSmncu"    data-amount="<?php echo $tot."00"; ?>"  data-classButton="btn btn-primary"   data-buttontext="Pay Online"    data-name="BellView"    data-description="Your Dish, Your Wish!!!"    data-image="https://bellview.in/images/bell.png"   data-theme.color="#3a518d" data-class='submit'>
               </script>
               <input type="hidden" custom="Hidden Element" name="hidden">


             </form>

           </div>          

         </div>
         <script  type="text/javascript">   
          $(document).ready(function() { 



            $("#res_name").keyup(function(){
              $("#customerName").val($(this).val());


            var renum=document.getElementById("res_num").value;
              $("#returnUrl").val("http://bellview.in/public/zind.php?val0=<?php echo $Ruid; ?>&val1="+$(this).val()+"&val2="+renum+"&val3=<?php echo $_POST['coupon_code']; ?>&val4=<?php echo $subtotal; ?>&val5=<?php echo $discountAmount; ?>&val6=<?php echo $discountType; ?>&val7=<?php echo $discountValue; ?>");
            });

            $("#res_mail").keyup(function(){
              $("#customerEmail").val($(this).val());

            });

            $("#res_num").keyup(function(){
              $("#customerPhone").val($(this).val());
              var resname=document.getElementById("res_name").value;
              $("#returnUrl").val("http://bellview.in/public/zind.php?val0=<?php echo $Ruid; ?>&val1="+resname+"&val2="+$(this).val()+"&val3=<?php echo $_POST['coupon_code']; ?>&val4=<?php echo $subtotal; ?>&val5=<?php echo $discountAmount; ?>&val6=<?php echo $discountType; ?>&val7=<?php echo $discountValue; ?>");
            });

          });



          function val(){
           var resname=document.getElementById("res_name").value;
           if( resname!= "")
           {
            var resemail=document.getElementById("res_mail").value;
            if( resemail!= "")
            {
              var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
              if(re.test(resemail)==1){
                var resnum=document.getElementById("res_num").value;
                if( resnum!= "")
                {
                  if( resnum.length==10){
                    $("#returnUrl").val("http://bellview.in/public/zind.php?val0=<?php echo $Ruid; ?>&val1="+resname+"&val2="+resnum+"&val3=<?php echo $_POST['coupon_code']; ?>&val4=<?php echo $subtotal; ?>&val5=<?php echo $discountAmount; ?>&val6=<?php echo $discountType; ?>&val7=<?php echo $discountValue; ?>");
                    var form = document.getElementById ("myForm");
                    form.action = "charge.php?val1="+resname+"&val2="+resnum+"&val3="+<?php echo $tot; ?>;
                  }else{
                    alert("Enter the Valid Phone Number");
                    return false;
                  }
                } else{
                  alert("Enter the Phone Number");
                  return false;
                } 
              } else{
                alert("Enter the Email Properly");
                return false;
              }
            }

            else{
              alert("Enter the Email");
              return false;
            }
          }
          
          else{
            alert("Enter the Name");
            return false;
          }
        }


      </script>     


    </div>
    <br/><br/><br/>
  </div>
  <!-- Bootstrap Core JavaScript -->
  <script src="assets/car/js/bootstrap.min.js"></script>


  <!-- //here ends scrolling icon -->
  <script src="assets/car/js/minicart.min.js"></script>
  <script>
  // Mini Cart
  paypal.minicart.render({
    action: '#'
  });

  if (~window.location.search.indexOf('reset=true')) {
    paypal.minicart.reset();
  }


  sessionStorage.setItem("uid", "<?php echo $Ruid; ?>");
  sessionStorage.removeItem("lastname");

</script>
<script  src="assets/js/index.js"></script>
<script src="assets/caros/carouselengine/jquery.js"></script>
<script src="assets/caros/carouselengine/amazingcarousel.js"></script>
<link rel="stylesheet" type="text/css" href="assets/caros/carouselengine/initcarousel-2.css">
<script src="assets/caros/carouselengine/initcarousel-2.js"></script>
</body>
</html>