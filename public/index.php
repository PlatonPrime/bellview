<?php 
    session_start();
    error_reporting(E_ALL & ~E_NOTICE);
    $Rid="";
    $Tid="";
    $Mid="";
    
    $Rid=$_GET['ttid'];
    $Tid=$_GET['rrid'];
    $Mid=$_GET['mrid'];

    date_default_timezone_set("Asia/Kolkata");
    $da= date("d/m/Y H:i a");
    $ud=$Rid.date("His").mt_rand(10000,99999); 
    if($Tid=="") {
      header("Location: invalid.php");
      exit;
    } else {
      if($Rid=="") {
        include "../database/config.php";
        $check_email = mysqli_query($conn, "SELECT m_id FROM resturanttable where (m_id='$Mid' and Rest_table = '$Tid')");
        if(mysqli_num_rows($check_email) > 0){
          $_SESSION['RRID']=$Mid;
          $_SESSION['TID']=$Tid ; 
          sleep(2);
          header("Location: choose_restarant.php");
        } else {
          header("Location: invalid.php");
          exit;
        }
      }
      if($Mid=="") {
        include "../database/config.php";
        $check_email = mysqli_query($conn, "SELECT Rest_id FROM resturanttable where (Rest_table = '$Tid' and Rest_id='$Rid' )");
        if(mysqli_num_rows($check_email) > 0){
          $sql = "INSERT INTO `rest_user`(`Rest_id`, `Rest_User_Id`, `Rest_TB_ID`, `CDate`) VALUES ('$Rid','$ud','$Tid','$da')";
          mysqli_query($conn, $sql);
          $_SESSION['RERID']=$ud;
          $_SESSION['RID']=$Rid;
          $_SESSION['TID']=$Tid;
          sleep(2);
          header("Location: a20.php");
        } else {
          header("Location: invalid.php");
          exit;
        }
      }
    }
?>
<html lang="en">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Platoñ Build's a Culture Around the World to Innovate Skills which Changes the Execution">
    
    <link rel=apple-touch-icon href="../../images/titlelogo.png">
    <link rel="shortcut icon" type="image/ico" href="../../images/titlelogo.png"/>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140680507-1"></script>
    <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}
gtag('js',new Date());gtag('config','UA-140680507-1');</script>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-529GN5G');</script>
<style>

    /********************  Preloader Demo-12 *******************/
    .loader12{width:100px;height:100px;margin:60px auto;position:relative;-webkit-transform:rotate(45deg);transform:rotate(45deg)}
    .loader12 .loader-inner-1{width:33.333%;height:33.333%;position:absolute}
    .loader12 .loader-inner-2{position:absolute;width:16.6665%;height:16.6665%}
    .loader12 .box-1{top:0;left:50%;margin-left:-16.6665%;-webkit-animation:loading-12 2s cubic-bezier(.585,-.225,.43,1.31) infinite;animation:loading-12 2s cubic-bezier(.585,-.225,.43,1.31) infinite}
    .loader12 .box-2{top:0;left:0;-webkit-animation:loading-126 2s cubic-bezier(.585,-.225,.43,1.31) infinite;animation:loading-126 2s cubic-bezier(.585,-.225,.43,1.31) infinite}
    .loader12 .box-3{top:50%;right:0;margin-top:-16.6665%;-webkit-animation:loading-122 2s cubic-bezier(.585,-.225,.43,1.31) infinite;animation:loading-122 2s cubic-bezier(.585,-.225,.43,1.31) infinite}
    .loader12 .box-4{top:0;right:0;-webkit-animation:loading-125 2s cubic-bezier(.585,-.225,.43,1.31) infinite;animation:loading-125 2s cubic-bezier(.585,-.225,.43,1.31) infinite}
    .loader12 .box-5{top:50%;left:0;margin-top:-16.6665%;-webkit-animation:loading-124 2s cubic-bezier(.585,-.225,.43,1.31) infinite;animation:loading-124 2s cubic-bezier(.585,-.225,.43,1.31) infinite}
    .loader12 .box-6{bottom:0;right:0;-webkit-animation:loading-127 2s cubic-bezier(.585,-.225,.43,1.31) infinite;animation:loading-127 2s cubic-bezier(.585,-.225,.43,1.31) infinite}
    .loader12 .box-7{bottom:0;left:50%;margin-left:-16.6665%;-webkit-animation:loading-123 2s cubic-bezier(.585,-.225,.43,1.31) infinite;animation:loading-123 2s cubic-bezier(.585,-.225,.43,1.31) infinite}
    .loader12 .box-8{bottom:0;left:0;-webkit-animation:loading-128 2s cubic-bezier(.585,-.225,.43,1.31) infinite;animation:loading-128 2s cubic-bezier(.585,-.225,.43,1.31) infinite}
    .loader12 .box-red{background:#f52220}
    .loader12 .box-blue{background:#02c1c1}
    .loader12 .box-green{background:#009a3c}
    .loader12 .box-peach{background:#db5b53}
    .loader12 .box-pink{background:#e40066}
    .loader12 .box-yellow{background:#f59c00}
    .loader12 .box-purple{background:#5c0475}
    @-webkit-keyframes loading-12{
       0%,100%{top:0;-webkit-transform:translateZ(0);transform:translateZ(0)}
       25%,75%{-webkit-transform:translateZ(100px);transform:translateZ(100px)}
       50%{top:66.666%;-webkit-transform:translateZ(0);transform:translateZ(0)}
   }
   @keyframes loading-12{
       0%,100%{top:0;-webkit-transform:translateZ(0);transform:translateZ(0)}
       25%,75%{-webkit-transform:translateZ(100px);transform:translateZ(100px)}
       50%{top:66.666%;-webkit-transform:translateZ(0);transform:translateZ(0)}
   }
   @-webkit-keyframes loading-122{
       0%,100%{right:0;-webkit-transform:translateZ(0);transform:translateZ(0)}
       25%,75%{-webkit-transform:translateZ(100px);transform:translateZ(100px)}
       50%{right:66.666%;-webkit-transform:translateZ(0);transform:translateZ(0)}
   }
   @keyframes loading-122{
       0%,100%{right:0;-webkit-transform:translateZ(0);transform:translateZ(0)}
       25%,75%{-webkit-transform:translateZ(100px);transform:translateZ(100px)}
       50%{right:66.666%;-webkit-transform:translateZ(0);transform:translateZ(0)}
   }
   @-webkit-keyframes loading-123{
       0%,100%{bottom:0;-webkit-transform:translateZ(0);transform:translateZ(0)}
       25%,75%{-webkit-transform:translateZ(100px);transform:translateZ(100px)}
       50%{bottom:66.666%;-webkit-transform:translateZ(0);transform:translateZ(0)}
   }
   @keyframes loading-123{
       0%,100%{bottom:0;-webkit-transform:translateZ(0);transform:translateZ(0)}
       25%,75%{-webkit-transform:translateZ(100px);transform:translateZ(100px)}
       50%{bottom:66.666%;-webkit-transform:translateZ(0);transform:translateZ(0)}
   }
   @-webkit-keyframes loading-124{
       0%,100%{left:0;-webkit-transform:translateZ(0);transform:translateZ(0)}
       25%,75%{-webkit-transform:translateZ(100px);transform:translateZ(100px)}
       50%{left:66.666%;-webkit-transform:translateZ(0);transform:translateZ(0)}
   }
   @keyframes loading-124{
       0%,100%{left:0;-webkit-transform:translateZ(0);transform:translateZ(0)}
       25%,75%{-webkit-transform:translateZ(100px);transform:translateZ(100px)}
       50%{left:66.666%;-webkit-transform:translateZ(0);transform:translateZ(0)}
   }
   @-webkit-keyframes loading-125{
       0%,100%{top:0;-webkit-transform:translateZ(0);transform:translateZ(0)}
       25%,75%{-webkit-transform:translateZ(300px);transform:translateZ(300px)}
       50%{top:83.3335%;-webkit-transform:translateZ(0);transform:translateZ(0)}
   }
   @keyframes loading-125{
       0%,100%{top:0;-webkit-transform:translateZ(0);transform:translateZ(0)}
       25%,75%{-webkit-transform:translateZ(300px);transform:translateZ(300px)}
       50%{top:83.3335%;-webkit-transform:translateZ(0);transform:translateZ(0)}
   }
   @-webkit-keyframes loading-126{
       0%,100%{left:0;-webkit-transform:translateZ(0);transform:translateZ(0)}
       25%,75%{-webkit-transform:translateZ(300px);transform:translateZ(300px)}
       50%{left:83.3335%;-webkit-transform:translateZ(0);transform:translateZ(0)}
   }
   @keyframes loading-126{
       0%,100%{left:0;-webkit-transform:translateZ(0);transform:translateZ(0)}
       25%,75%{-webkit-transform:translateZ(300px);transform:translateZ(300px)}
       50%{left:83.3335%;-webkit-transform:translateZ(0);transform:translateZ(0)}
   }
   @-webkit-keyframes loading-127{
       0%,100%{right:0;-webkit-transform:translateZ(0);transform:translateZ(0)}
       25%,75%{-webkit-transform:translateZ(300px);transform:translateZ(300px)}
       50%{right:83.3335%;-webkit-transform:translateZ(0);transform:translateZ(0)}
   }
   @keyframes loading-127{
       0%,100%{right:0;-webkit-transform:translateZ(0);transform:translateZ(0)}
       25%,75%{-webkit-transform:translateZ(300px);transform:translateZ(300px)}
       50%{right:83.3335%;-webkit-transform:translateZ(0);transform:translateZ(0)}
   }
   @-webkit-keyframes loading-128{
       0%,100%{bottom:0;-webkit-transform:translateZ(0);transform:translateZ(0)}
       25%,75%{-webkit-transform:translateZ(300px);transform:translateZ(300px)}
       50%{bottom:83.3335%;-webkit-transform:translateZ(0);transform:translateZ(0)}
   }
   @keyframes loading-128{
       0%,100%{bottom:0;-webkit-transform:translateZ(0);transform:translateZ(0)}
       25%,75%{-webkit-transform:translateZ(300px);transform:translateZ(300px)}
       50%{bottom:83.3335%;-webkit-transform:translateZ(0);transform:translateZ(0)}
   }
   @media only screen and (max-width: 48em) {
    
    
    
   }
   @media only screen and (max-width: 39.375em) {
    #log{
       width: 13%;
       }    }

   </style>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!------ Include the above in your HEAD tag ---------->
</head>
<body style="background-color:gray;background-image: url('imag/dood.png');
background-repeat: repeat;background-size: 400px ;">
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-529GN5G" height=0 width=0 style="display:none;visibility:hidden"></iframe></noscript>
<div style="

position: relative;
top: 50%;
transform: translateY(-50%);
text-align:center
">
<div class="container-fluid">
    
    <div class="container">
        <br/><br/>
        
        <div class="row">
            <div class="col-md-12">
                <div class="loader12">
                    <div class="loader-inner-1 box-1 box-red"></div>
                    <div class="loader-inner-2 box-2 box-pink"></div>
                    <div class="loader-inner-1 box-3 box-blue"></div>
                    <div class="loader-inner-2 box-4 box-yellow"></div>
                    <div class="loader-inner-1 box-5 box-peach"></div>
                    <div class="loader-inner-2 box-6 box-pink"></div>
                    <div class="loader-inner-1 box-7 box-green"></div>
                    <div class="loader-inner-2 box-8 box-purple"></div>
                </div>
            </div>
        </div>
        <h1>Loading...</h1>
        <?php
        if( $_GET["name"] || $_GET["age"] ) {
         $_SESSION['name'] = $_GET['name'];
         $_SESSION['age'] = $_GET['age'];
         
         exit();
         
     }
     ?>
     <br/><br/>
 </div>
</div>
</div>
</body>
</html>