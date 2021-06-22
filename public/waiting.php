<?php
  session_start();
  $Ruid=$_SESSION['RERID'];
  error_reporting(E_ALL & ~E_NOTICE);
  require_once "../database/config.php";
  $sql_query = "select count(*) as cntUser from  cash_pay where  status='1' and PUID='".$Ruid."'";
  $result = mysqli_query($conn,$sql_query);
  $row = mysqli_fetch_array($result);
  $count = $row['cntUser'];
  $crid=$row['cresid'];
  $cid=$row['cid'];
  if($count > 0){
    header("Location: success.php"); 
    exit();
  }
  else {
    require_once "../database/config.php";
    $sql_query = "select count(*) as cntUser from  cash_pay where  status='5' and PUID='".$Ruid."'";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);
    $count = $row['cntUser'];
    $crid=$row['cresid'];
    $cid=$row['cid'];
    if($count > 0){
      header("Location: unsuccess.php");
      exit();
    }
  }
?>

<html>
  <head>
    <title>BellView | Waiting</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel=apple-touch-icon href="../../images/titlelogo.png">
    <link rel="shortcut icon" type="image/ico" href="../../images/titlelogo.png"/>
    <meta http-equiv="refresh" content = "5" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <style>
      body{
        text-align:center;
        background-color:#e1e1e1;
      }
      .loader-box{
        padding-top:35vh;
        width:100%;
        margin:0 auto;
        -moz-border-radius:5px;
        -webkit-border-radius:5px;
        border-radius:5px;
        background-color: #e1e1e1;
        text-align:center;
        z-index:11;
        opacity:1;
        transition:all ease 1s;
      }
      .labels{
        list-style-type:none;
        margin:0 auto;
        display:inline-block;
        padding: 0px;
        width: 200px;
        height: 30px;
        overflow: hidden;
      }
      .label{
        float:left;
        height:30px;
        line-height:30px;
        padding:0px;
        font-family:Futura,Trebuchet MS,Arial,sans-serif; 
        color:#fff;
        font-size:20px;
        width:200px;
        position:relative;
        animation:textUp ease 3s;
        animation-iteration-count: infinite;
        animation-fill-mode: forwards;
        -webkit-animation:textUp ease 3s;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-fill-mode:forwards; /*Chrome 16+, Safari 4+*/
        -moz-animation:textUp ease 3s;
        -moz-animation-iteration-count: infinite;
        -moz-animation-fill-mode:forwards; /*FF 5+*/
        -o-animation:textUp ease 3s;
        -o-animation-iteration-count: infinite;
        -o-animation-fill-mode:forwards; /*Not implemented yet*/
        -ms-animation:textUp ease 3s;
        -ms-animation-iteration-count: infinite;
        -ms-animation-fill-mode:forwards; /*IE 10+*/
      }
      .loader{
        width:120px;
        height:120px;
        background-color:#FFFFFF;
        overflow:hidden;
        display:block;
        -moz-border-radius:100%;
        -webkit-border-radius:100%;
        border-radius:100%;
        border:3px solid #fff;
        position:relative;
        margin:15px auto;
        z-index:1;
        animation:colorChange ease 3s;
        animation-iteration-count: infinite;
        animation-fill-mode: forwards;
        -webkit-animation:colorChange ease 3s;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-fill-mode:forwards; /*Chrome 16+, Safari 4+*/
        -moz-animation:colorChange ease 3s;
        -moz-animation-iteration-count: infinite;
        -moz-animation-fill-mode:forwards; /*FF 5+*/
        -o-animation:colorChange ease 3s;
        -o-animation-iteration-count: infinite;
        -o-animation-fill-mode:forwards; /*Not implemented yet*/
        -ms-animation:colorChange ease 3s;
        -ms-animation-iteration-count: infinite;
        -ms-animation-fill-mode:forwards; /*IE 10+*/
      }
      .loaded.loader-box,.loaded .loader,.loaded .labels{opacity:0;}
      .hidden{display:none;}
      .element-animation{
        bottom:10px;
        animation:animationFrames ease-in 3s;
        animation-iteration-count: infinite;
        animation-fill-mode: forwards;
        -webkit-animation: animationFrames ease-in 3s;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-fill-mode:forwards; /*Chrome 16+, Safari 4+*/
        -moz-animation: animationFrames ease-in 3s;
        -moz-animation-iteration-count: infinite;
        -moz-animation-fill-mode:forwards; /*FF 5+*/
        -o-animation: animationFrames ease-in 3s;
        -o-animation-iteration-count: infinite;
        -o-animation-fill-mode:forwards; /*Not implemented yet*/
        -ms-animation: animationFrames ease-in 3s;
        -ms-animation-iteration-count: infinite;
        -ms-animation-fill-mode:forwards; /*IE 10+*/
        img{
          bottom: 5px;
          position: relative;
          right: 3px;
        }
      }
      @keyframes textUp{
        0% {
          top:0px;
          display:relative;
          opacity:0;
        }
        1% {
          top:0px;
          display:relative;
          opacity:1;
        }
        24% {
          top:0px;
          display:relative;
          opacity:1;
        }
        25% {
          top:0px;
          display:none;
          opacity:0;
        }
        26% {
          top:-30px;
          display:relative;
          opacity:0;
        }
        27% {
          top:-30px;
          display:relative;
          opacity:1;
        }
        49% {
          top:-30px;
          display:relative;
          opacity:1;
        }
        50% {
          top:-30px;
          display:none;
          opacity:0;
        }
        51% {
          top:-60px;  
          display:relative;
          opacity:0;
        }
        52% {
          top:-60px;
          display:relative;
          opacity:1;
        }
        74% {
          top:-60px;
          display:relative;
          opacity:1;
        }
        75% {
          top:-60px;
          display:none;
          opacity:0;
        }
        76% {
          top:-90px;
          display:relative;
          opacity:0;
        }
        77% {
          top:-90px;
          display:relative;
          opacity:1;
        }
        99% {
          top:-90px;
          display:relative;
          opacity:1;
        }
        100% {
          top:-90px;
          display:none;
          opacity:0;
        }
      }
      @-webkit-keyframes textUp{
        0% {
          top:0px;
          display:relative;
          opacity:0;
        }
        1% {
          top:0px;
          display:relative;
          opacity:1;
        }
        24% {
          top:0px;
          display:relative;
          opacity:1;
        }
        25% {
          top:0px;
          display:none;
          opacity:0;
        }
        26% {
          top:-30px;
          display:relative;
          opacity:0;
        }
        27% {
          top:-30px;
          display:relative;
          opacity:1;
        }
        49% {
          top:-30px;
          display:relative;
          opacity:1;
        }
        50% {
          top:-30px;
          display:none;
          opacity:0;
        }
        51% {
          top:-60px;
          display:relative;
          opacity:0;
        }
        52% {
          top:-60px;
          display:relative;
          opacity:1;
        }
        74% {
          top:-60px;
          display:relative;
          opacity:1;
        }
        75% {
          top:-60px;
          display:none;
          opacity:0;
        }
        76% {
          top:-90px;
          display:relative;
          opacity:0;
        }
        77% {
          top:-90px;
          display:relative;
          opacity:1;
        }
        99% {
          top:-90px;
          display:relative;
          opacity:1;
        }
        100% {
          top:-90px;
          display:none;
          opacity:0;
        }
      }
      @-moz-keyframes textUp{
        0% {
          top:0px;
          display:relative;
          opacity:0;
        }
        1% {
          top:0px;
          display:relative;
          opacity:1;
        }
        24% {
          top:0px;
          display:relative;
          opacity:1;
        }
        25% {
          top:0px;
          display:none;
          opacity:0;
        }
        26% {
          top:-30px;
          display:relative;
          opacity:0;
        }
        27% {
          top:-30px;
          display:relative;
          opacity:1;
        }
        49% {
          top:-30px;
          display:relative;
          opacity:1;
        }
        50% {
          top:-30px;
          display:none;
          opacity:0;
        }
        51% {
          top:-60px;
          display:relative;
          opacity:0;
        }
        52% {
          top:-60px;
          display:relative;
          opacity:1;
        }
        74% {
          top:-60px;
          display:relative;
          opacity:1;
        }
        75% {
          top:-60px;
          display:none;
          opacity:0;
        }
        76% {
          top:-90px;
          display:relative;
          opacity:0;
        }
        77% {
          top:-90px;
          display:relative;
          opacity:1;
        }
        99% {
          top:-90px;
          display:relative;
          opacity:1;
        }
        100% {
          top:-90px;
          display:none;
          opacity:0;
        }
      }
      @-o-keyframes textUp{
        0% {
          top:0px;
          display:relative;
          opacity:0;
        }
        1% {
          top:0px;
          display:relative;
          opacity:1;
        }
        24% {
          top:0px;
          display:relative;
          opacity:1;
        }
        25% {
          top:0px;
          display:none;
          opacity:0;
        }
        26% {
          top:-30px;
          display:relative;
          opacity:0;
        }
        27% {
          top:-30px;
          display:relative;
          opacity:1;
        }
        49% {
          top:-30px;
          display:relative;
          opacity:1;
        }
        50% { 
          top:-30px;
          display:none;
          opacity:0;
        }
        51% {
          top:-60px;
          display:relative;
          opacity:0;
        }
        52% {
          top:-60px;
          display:relative;
          opacity:1;
        }
        74% {
          top:-60px;
          display:relative;
          opacity:1;
        }
        75% {
          top:-60px;
          display:none;
          opacity:0;
        }
        76% {
          top:-90px;
          display:relative;
          opacity:0;
        }
        77% {
          top:-90px;
          display:relative;
          opacity:1;
        }
        99% {
          top:-90px;
          display:relative;
          opacity:1;
        }
        100% {
          top:-90px;
          display:none;
          opacity:0;
        }
      }
      @-ms-keyframes textUp{
        0% {
          top:0px;
          display:relative;
          opacity:0;
        }
        1% {
          top:0px;
    display:relative;
    opacity:1;
  }
  24% {
    top:0px;
    display:relative;
    opacity:1;
  }
  25% {
    top:0px;
    display:none;
    opacity:0;
  }
  26% {
    top:-30px;
    display:relative;
    opacity:0;
  }
  27% {
    top:-30px;
    display:relative;
    opacity:1;
  }
  49% {
    top:-30px;
    display:relative;
    opacity:1;
  }
  50% {
    top:-30px;
    display:none;
    opacity:0;
  }
  51% {
    top:-60px;
    display:relative;
    opacity:0;
  }
  52% {
    top:-60px;
    display:relative;
    opacity:1;
  }
  74% {
    top:-60px;
    display:relative;
    opacity:1;
  }
  75% {
    top:-60px;
    display:none;
    opacity:0;
  }
  76% {
    top:-90px;
    display:relative;
    opacity:0;
  }
  77% {
    top:-90px;
    display:relative;
    opacity:1;
  }
  99% {
    top:-90px;
    display:relative;
    opacity:1;
  }
  100% {
    top:-90px;
    display:none;
    opacity:0;
  }
}

@keyframes colorChange{
  0% {
    background-color:#ef5350;
      
  }
  25% {
    background-color:#ef5350;
  }
  26% {
    background-color:#4F759B;
  }
  50% {
    background-color:#4F759B;
  }
  51% {
    background-color:#55896F;
  }
  75% {
    background-color:#55896F;
  }
  76% {
    background-color:#FDA543;
  }
  100% {
    background-color:#FDA543;
  }
}
@-webkit-keyframes colorChange{
  0% {
    background-color:#ef5350;
  }
  25% {
    background-color:#ef5350;
  }
  26% {
    background-color:#4F759B;
  }
  50% {
    background-color:#4F759B;
  }
  51% {
    background-color:#55896F;
  }
  75% {
    background-color:#55896F;
  }
  76% {
    background-color:#FDA543;
  }
  100% {
    background-color:#FDA543;
  }
}
@-moz-keyframes colorChange{
  0% {
    background-color:#ef5350;
  }
  25% {
    background-color:#ef5350;
  }
  26% {
    background-color:#4F759B;
  }
  50% {
    background-color:#4F759B;
  }
  51% {
    background-color:#55896F;
  }
  75% {
    background-color:#55896F;
  }
  76% {
    background-color:#FDA543;
  }
  100% {
    background-color:#FDA543;
  }
}
@-o-keyframes colorChange{
  0% {
    background-color:#ef5350;
  }
  25% {
    background-color:#ef5350;
  }
  26% {
    background-color:#4F759B;
  }
  50% {
    background-color:#4F759B;
  }
  51% {
    background-color:#55896F;
  }
  75% {
    background-color:#55896F;
  }
  76% {
    background-color:#FDA543;
  }
  100% {
    background-color:#FDA543;
  }
}
@-ms-keyframes colorChange{
  0% {
    background-color:#ef5350;
  }
  25% {
    background-color:#ef5350;
  }
  26% {
    background-color:#4F759B;
  }
  50% {
    background-color:#4F759B;
  }
  51% {
    background-color:#55896F;
  }
  75% {
    background-color:#55896F;
  }
  76% {
    background-color:#FDA543;
  }
  100% {
    background-color:#FDA543;
  }
}


@keyframes animationFrames{
  0% {
    transform: translate(-360px,15px);
    opacity:0;
  }
  1% {
    transform: translate(-360px,15px);
    opacity:1;
  }
  24% {
    transform: translate(-360px,15px);
    opacity:1;
  }
  25% {
    transform: translate(-360px,15px);
    opacity:0;
  }
  26% {
    transform: translate(-240px,15px);
    opacity:0;
  }
  27% {
    transform: translate(-240px,15px);
    opacity:1;
  }
  49% {
    transform: translate(-240px,15px);
    opacity:1;
  }
  50% {
    transform: translate(-240px,15px);
    opacity:0;
  }
  51% {
    transform: translate(-120px,15px);
    opacity:0;
  }
  52% {
    transform: translate(-120px,15px);
    opacity:1;
  }
  74% {
    transform: translate(-120px,15px);
    opacity:1;
  }
  75% {
    transform: translate(-120px,15px);
    opacity:0;
  }
  76% {
    transform: translate(0px,15px);
    opacity:0;
  }
  77% {
    transform: translate(0px,15px);
    opacity:1;
  }
  99% {
    transform: translate(0px,15px);
    opacity:1;
  }
  100% {
    transform: translate(0px,15px);
    opacity:0;
  }
}



@-moz-keyframes animationFrames{
  0% {
    transform: translate(-480px,15px)  ;
  }
  20% {
    transform: translate(-480px,15px)  ;
  }
  21% {
    transform: translate(-360px,15px)  ;
  }
  40% {
    transform: translate(-360px,15px)  ;
  }
  41% {
    transform: translate(-240px,15px)  ;
  }
  60% {
    transform: translate(-240px,15px)  ;
  }
  61% {
    transform: translate(-120px,15px)  ;
  }
  80% {
    transform: translate(-120px,15px)  ;
  }
  81% {
    transform: translate(0px,15px)  ;
  }
  100% {
    transform: translate(0px,15px)  ;
  }
}

@-webkit-keyframes animationFrames {

  0% {
    transform: translate(-360px,15px);
    opacity:0;
  }
  1% {
    transform: translate(-360px,15px);
    opacity:1;
  }
  24% {
    transform: translate(-360px,15px);
    opacity:1;
  }
  25% {
    transform: translate(-360px,15px);
    opacity:0;
  }
  26% {
    transform: translate(-240px,15px);
    opacity:0;
  }
  27% {
    transform: translate(-240px,15px);
    opacity:1;
  }
  49% {
    transform: translate(-240px,15px);
    opacity:1;
  }
  50% {
    transform: translate(-240px,15px);
    opacity:0;
  }
  51% {
    transform: translate(-120px,15px);
    opacity:0;
  }
  52% {
    transform: translate(-120px,15px);
    opacity:1;
  }
  74% {
    transform: translate(-120px,15px);
    opacity:1;
  }
  75% {
    transform: translate(-120px,15px);
    opacity:0;
  }
  76% {
    transform: translate(0px,15px);
    opacity:0;
  }
  77% {
    transform: translate(0px,15px);
    opacity:1;
  }
  99% {
    transform: translate(0px,15px);
    opacity:1;
  }
  100% {
    transform: translate(0px,15px);
    opacity:0;
  }
}

@-o-keyframes animationFrames {
  0% {
    transform: translate(-360px,15px);
    opacity:0;
  }
  1% {
    transform: translate(-360px,15px);
    opacity:1;
  }
  24% {
    transform: translate(-360px,15px);
    opacity:1;
  }
  25% {
    transform: translate(-360px,15px);
    opacity:0;
  }
  26% {
    transform: translate(-240px,15px);
    opacity:0;
  }
  27% {
    transform: translate(-240px,15px);
    opacity:1;
  }
  49% {
    transform: translate(-240px,15px);
    opacity:1;
  }
  50% {
    transform: translate(-240px,15px);
    opacity:0;
  }
  51% {
    transform: translate(-120px,15px);
    opacity:0;
  }
  52% {
    transform: translate(-120px,15px);
    opacity:1;
  }
  74% {
    transform: translate(-120px,15px);
    opacity:1;
  }
  75% {
    transform: translate(-120px,15px);
    opacity:0;
  }
  76% {
    transform: translate(0px,15px);
    opacity:0;
  }
  77% {
    transform: translate(0px,15px);
    opacity:1;
  }
  99% {
    transform: translate(0px,15px);
    opacity:1;
  }
  100% {
    transform: translate(0px,15px);
    opacity:0;
  }
}
@-ms-keyframes animationFrames {
  0% {
    transform: translate(-360px,15px);
    opacity:0;
  }
  1% {
    transform: translate(-360px,15px);
    opacity:1;
  }
  24% {
    transform: translate(-360px,15px);
    opacity:1;
  }
  25% {
    transform: translate(-360px,15px);
    opacity:0;
  }
  26% {
    transform: translate(-240px,15px);
    opacity:0;
  }
  27% {
    transform: translate(-240px,15px);
    opacity:1;
  }
  49% {
    transform: translate(-240px,15px);
    opacity:1;
  }
  50% {
    transform: translate(-240px,15px);
    opacity:0;
  }
  51% {
    transform: translate(-120px,15px);
    opacity:0;
  }
  52% {
    transform: translate(-120px,15px);
    opacity:1;
  }
  74% {
    transform: translate(-120px,15px);
    opacity:1;
  }
  75% {
    transform: translate(-120px,15px);
    opacity:0;
  }
  76% {
    transform: translate(0px,15px);
    opacity:0;
  }
  77% {
    transform: translate(0px,15px);
    opacity:1;
  }
  99% {
    transform: translate(0px,15px);
    opacity:1;
  }
  100% {
    transform: translate(0px,15px);
    opacity:0;
  }
}

    </style>
    </head>
    
    
<body>

  <div class="loader-box">
      <div class="loader">
            <div class="element-animation">
            <img src="assets/images/load1.png" width="480" height="100";>
            </div>
      </div>
      <ul class="labels">
        <li class="label" style="color: #ef5350">Our Servicer...</li>
        <li class="label" style="color: #4F759B">Will Contact you...</li>
          <li class="label" style="color: #55896F">Wait for a while...</li>
          <li class="label" style="color: #55896F">Don't Close the Browser...</li>
        <li class="label" style="color: #FDA543">BellView...</li>
      </ul>
</div>
  
  

</body>
</html>