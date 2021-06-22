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
  <title>BellView | Order Cancelled</title>
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
  font-size:30px;
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

     </style>

  
</head>

<body >
<div class="container">
<div>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
  <circle class="path circle" fill="none" stroke="#D06079" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
  <line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3"/>
  <line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2"/>
</svg>
<br/>
<p class="error">Your Order is <br/> Cancelled !!!</p>
</div>
<div>
</body>

</html>