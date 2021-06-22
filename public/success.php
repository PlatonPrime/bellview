<?php
    session_start();
    error_reporting(E_ALL & ~E_NOTICE);
session_unset(); 

session_destroy(); 
?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  
  <title>BellView | Payment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="assets/car/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <link href="assets/car/css/font-awesome.css" rel="stylesheet"> 
        <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
         <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,900" rel="stylesheet">
    <link rel=apple-touch-icon href="../../images/titlelogo.png">
        <link rel="shortcut icon" type="image/ico" href="../../images/titlelogo.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
     <style type="text/css">
        html, body, .container {
    height: 100%;
}

.container {
   align-items: center;
  display: flex;
  justify-content: center;
  height: 100%;
  width: 100%;
}

svg {
  width: 100px;
  display: block;
  margin: 40px auto 0;
}
.path {
  stroke-dasharray: 1000;
  stroke-dashoffset: 0;
}
.path.circle {
  -webkit-animation: dash 0.9s ease-in-out;
  animation: dash 0.9s ease-in-out;
}
.path.line {
  stroke-dashoffset: 1000;
  -webkit-animation: dash 0.9s 0.35s ease-in-out forwards;
  animation: dash 0.9s 0.35s ease-in-out forwards;
}
.path.check {
  stroke-dashoffset: -100;
  -webkit-animation: dash-check 0.9s 0.35s ease-in-out forwards;
  animation: dash-check 0.9s 0.35s ease-in-out forwards;
}
p {
  text-align: center;
  margin: 20px 0 60px;
  font-size: 1.25em;
}
p.success {
  color: #73AF55;
  font-size:30px;
}
p.error {
  color: #D06079;
}
@-webkit-keyframes dash {
  0% {
    stroke-dashoffset: 1000;
  }
  100% {
    stroke-dashoffset: 0;
  }
}
@keyframes dash {
  0% {
    stroke-dashoffset: 1000;
  }
  100% {
    stroke-dashoffset: 0;
  }
}
@-webkit-keyframes dash-check {
  0% {
    stroke-dashoffset: -100;
  }
  100% {
    stroke-dashoffset: 900;
  }
}
@keyframes dash-check {
  0% {
    stroke-dashoffset: -100;
  }
  100% {
    stroke-dashoffset: 900;
  }
}




.submit{
   color: #ffffff !important;
        background-color: #7266ba;
        border-color: #7266ba;
        font-size: 14px;
        padding: 20px;
}
     </style>

  
</head>

<body >
<div class="container">
<div>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
  <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
  <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
</svg><br/>
<p class="success" id="message1">Your Order is <br/> Successfully Placed !!!</p>
<p class="success" id="message2">Your Order is <br/> Cancelled !!!</p>
 <div class="form-submit" style="display: flex;justify-content: center;margin-top: 25px;">
                    <buton onclick="location.href='qr-code-scan.html';" id="cod"  class="submit"  style="background-color: #31a9b8 !important;text-align: center;"> Scan for <br/>Menu</buton>
                    
                    <buton id="op" class="submit"  style="margin-left:5px;text-align: center;">Cancel the <br/> Order</button>
                    
                </div>
</div>

<div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
 history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };

$("#message2").hide();
  if(sessionStorage.getItem("lastname")==null){
  var timeleft = 60;
var downloadTimer = setInterval(function(){
  document.getElementById("op").innerHTML ="Cancel order within <br/>" + timeleft + " seconds";
  timeleft -= 1;
  if(timeleft <= 0){
    clearInterval(downloadTimer);
  $("#op").hide();
    sessionStorage.removeItem("uid");
    sessionStorage.setItem("lastname", "60");
  }
}, 1000);
}
if(sessionStorage.getItem("lastname")==60){
  $("#message1").hide();
                        $("#message2").show();
  $("#op").hide();
}


  $("#op").click(function(){
    var aas=sessionStorage.getItem("uid");
    $.ajax({  
              url: "php/cancelOrder.php",
              type: "post",
              data: { uid: aas },
              success: function(html) {
                      if(html==1){
                        $("#message1").hide();
                        $("#message2").show();
                        $("#op").hide();
                        sessionStorage.removeItem("uid");
                        sessionStorage.setItem("lastname", "20");
                        alert("The Order has been Cancelled");

                      }else{
                        alert("The Order has not been Cancelled");
                      }
                }
    
});
    
  });
</script>

</html>
