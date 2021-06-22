<?php
  session_start();
  error_reporting(E_ALL & ~E_NOTICE);
  $ud=$_SESSION['RERID']; 
  $Rid=$_SESSION['RID'];
  $Tid=$_SESSION['TID'] ;   
  $sk=$_SESSION['search_key'];
  //$_SESSION['Usr_Cost']=$_GET['user'];
  $ip_add = getenv("REMOTE_ADDR");
  include "../database/config.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Platon Prime | Home</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <script type="application/x-javascript"> 
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
      function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="assets/car/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/car/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="assets/car/js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


    <style>
      .au-card--bg-blue {
        padding: 20px;
        padding-right: 50px;
        padding-left: 50px;
        padding-bottom: 35px;
        border-radius: 15px;
        background-color: #7aa802;
      }
      .site-section .site-sub-title {
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: .5em;
        color: #d4d4d4;
        font-family: "Raleway", sans-serif;
        font-weight: 300;
      }
      .site-section .site-primary-title {
        margin-top: 0;
        margin-bottom: 30px;
      }
      .site-section {
        padding: 7em 0;
      }
      .site-animate {
        opacity: 0;
        visibility: hidden;
      }
      @media screen and (max-width: 768px) {
        .display-4 {
          font-size: 37px;
        }
      }  
      .site-tab-nav {
        padding: 0;
        margin: 0;
        display: inline-block !important;
      }
      @media screen and (max-width: 576px) {
        .site-tab-nav {
          display: block !important;
          margin-bottom: 10px;
          width: 100% !important;
        }
      }
      .site-tab-nav li {
        padding: 0;
        margin: 0 5px;
        display: inline-block !important;
      }
      @media screen and (max-width: 576px) {
        .site-tab-nav li {
          margin-bottom: 10px;
        }
      }
      .site-tab-nav li a {
       text-transform: uppercase;
       font-size: 14px;
       letter-spacing: .2em;
       color: #ccc;
       border: 2px solid #ccc;
       border-radius: 50px !important;
      }
      .site-tab-nav li a:hover {
        background: none !important;
        color: white !important;
        background-color: black!important;
        border: 2px solid #000;
        border-radius: 50px !important;
      }
      .site-tab-nav li a.active {
        background: none !important;
        color: white !important;
        background-color: black!important;
        border: 2px solid #000;
        border-radius: 50px !important;
      }
      .site-navbar-light .navbar-nav > .nav-item > .nav-link {
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: .2em;
        padding-top: 30px;
        padding-bottom: 30px;
        padding-left: 20px;
        padding-right: 20px;
      }
      @media screen and (max-width: 960px) {
        .site-navbar-light .navbar-nav > .nav-item > .nav-link {
          padding-top: 10px;
          padding-bottom: 10px;
          padding-left: 0px;
          padding-right: 0px;
        }
      }
      .site-navbar-light .navbar-nav > .nav-item.site-cta a {
        color: #fff;
      }
      .site-navbar-light .navbar-nav > .nav-item.site-seperator {
        position: relative;
        margin-left: 20px;
        padding-left: 20px;
      }
      @media screen and (max-width: 960px) {
        .site-navbar-light .navbar-nav > .nav-item.site-seperator {
          padding-left: 0;
          margin-left: 0;
        }
      }
      .site-navbar-light .navbar-nav > .nav-item.site-seperator:before {
        position: absolute;
        content: "";
        top: 10px;
        bottom: 10px;
        left: 0;
        width: 2px;
        background: rgba(255, 255, 255, 0.05);
      }
      @media screen and (max-width: 960px) {
        .site-navbar-light .navbar-nav > .nav-item.site-seperator:before {
          display: none;
        }
      }
      .menu-item {
        margin-bottom: 30px;
      }
      .menu-item img {
        width: 100px;
        border-radius: 50%;
      }
      .menu-item .menu-price {
        font-family: "Playfair Display", serif;
        font-size: 24px;
      }
      .avatar-upload 
      {
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
        background-color: aliceblue;
        border: 5px solid white;
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
      .container1 {
        position: relative;
        margin: auto;
        overflow: hidden;
        width: 100%;
        height: 100px;
        background: white;
        box-shadow: 5px 5px 15px rgba(186, 126, 126, 0.5);
        border-radius: 0px;
      }
      .product {
        position: absolute;
        width: 50%;
        height: 100%;
        top: 10px;
        left: 50%;
      }
      @import url(https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic|Montserrat:400,700);
      ol, ul {
        list-style: none;
      }
      table {
        border-collapse: collapse;
        border-spacing: 0;
      }
      caption, th, td {
        text-align: left;
        font-weight: normal;
        vertical-align: middle;
      }
      q, blockquote {
        quotes: none;
      }
      q:before, q:after, blockquote:before, blockquote:after {
        content: "";
        content: none;
      }
      a img {
        border: none;
      }
      img {
        max-width: 100%;
      }
      .cf:before, .cf:after {
        content: " ";
        display: table;
      }
      .cf:after {
        clear: both;
      }
      .cf {
        *zoom: 1;
      }
      .wrap {
        width: 75%;
        max-width: 960px;
        margin: 0 auto;
        padding: 5% 0;
        margin-bottom: 5em;
      }
      .projTitle {
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        text-align: center;
        font-size: 2em;
        padding: 1em 0;
        border-bottom: 1px solid #dadada;
        letter-spacing: 3px;
        text-transform: uppercase;
      }
      .projTitle span {
        font-family: "Droid Serif", serif;
        font-weight: normal;
        font-style: italic;
        text-transform: lowercase;
        color: #777;
      }
      .heading {
        padding: 1em 0;
        border-bottom: 1px solid #D0D0D0;
      }
      .heading h1 {
        font-family: "Droid Serif", serif;
        font-size: 2em;
        float: left;
      }
      .heading a.continue:link, .heading a.continue:visited {
        text-decoration: none;
        font-family: "Montserrat", sans-serif;
        letter-spacing: -.015em;
        font-size: .75em;
        padding: 1em;
        color: #fff;
        background: #82ca9c;
        font-weight: bold;
        border-radius: 50px;
        float: right;
        text-align: right;
        -webkit-transition: all 0.25s linear;
        -moz-transition: all 0.25s linear;
        -ms-transition: all 0.25s linear;
        -o-transition: all 0.25s linear;
        transition: all 0.25s linear;
      }
      .heading a.continue:after {
        content: "\276f";
        padding: .5em;
        position: relative;
        right: 0;
        -webkit-transition: all 0.15s linear;
        -moz-transition: all 0.15s linear;
        -ms-transition: all 0.15s linear;
        -o-transition: all 0.15s linear;
        transition: all 0.15s linear;
      }
      .heading a.continue:hover, .heading a.continue:focus, .heading a.continue:active {
        background: #f69679;
      }
      .heading a.continue:hover:after, .heading a.continue:focus:after, .heading a.continue:active:after {
        right: -10px;
      }
      .tableHead {
        display: table;
        width: 100%;
        font-family: "Montserrat", sans-serif;
        font-size: .75em;
      }
      .tableHead li {
        display: table-cell;
        padding: 1em 0;
        text-align: center;
      }
      .tableHead li.prodHeader {
        text-align: left;
      }
      .cart .items {
        display: block;
        width: 100%;
        vertical-align: middle;
        border-bottom: 1px solid #fafafa;
      }
      .cart .items.even {
        background: #fafafa;
      }
      .cart .items .infoWrap {
        display: table;
        width: 100%;
      }
      .cart .items .cartSection {
        display: table-cell;
        vertical-align: middle;
      }
      .cart .items .cartSection .itemNumber {
        font-size: .75em;
        color: #777;
        margin-bottom: .5em;
      }
      .cart .items .cartSection h3 {
        font-size: 1em;
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: .025em;
      }
      .cart .items .cartSection p {
        display: inline-block;
        font-size: .85em;
        color: #777777;
        font-family: "Montserrat", sans-serif;
      }
      .cart .items .cartSection p .quantity {
        font-weight: bold;
        color: #333;
      }
      .cart .items .cartSection p.stockStatus {
        color: #82CA9C;
        font-weight: bold;
        text-transform: uppercase;
      }
      .cart .items .cartSection p.stockStatus.out {
        color: #F69679;
      }
      .cart .items .cartSection .itemImg {
        width: 4em;
        float: left;
      }   
      .cart .items .cartSection.qtyWrap, .cart .items .cartSection.prodTotal {
        text-align: center;
      }
      .cart .items .cartSection.qtyWrap p, .cart .items .cartSection.prodTotal p {
        font-weight: bold;
        font-size: 1.25em;
      }
      .cart .items .cartSection input.qty {
        width: 2em;
        text-align: center;
        font-size: 1em;
        margin: 1em .5em 0 0;
      }
      .cart .items .cartSection .itemImg {
        width: 8em;
        display: inline;
        padding-right: 1em;
      }
      .special {
        display: block;
        font-family: "Montserrat", sans-serif;
      }
      .special .specialContent {
        padding: 1em 1em 0;
        display: block;
        margin-top: .5em;
        border-top: 1px solid #dadada;
      }
      .special .specialContent:before {
        content: "\21b3";
        font-size: 1.5em;
        margin-right: 1em;
        color: #6f6f6f;
        font-family: helvetica, arial, sans-serif;
      }
      a.remove {
        text-decoration: none;
        font-family: "Montserrat", sans-serif;
        color: #ffffff;
        font-weight: bold;
        background: #e0e0e0;
        padding: .5em;
        font-size: .75em;
        display: inline-block;
        border-radius: 100%;
        line-height: .85;
        -webkit-transition: all 0.25s linear;
        -moz-transition: all 0.25s linear;
        -ms-transition: all 0.25s linear;
        -o-transition: all 0.25s linear;
        transition: all 0.25s linear;
      }
      a.remove:hover {
        background: #f30;
      }
      .btn1:link, .btn1:visited {
        text-decoration: none;
        font-family: "Montserrat", sans-serif;
        letter-spacing: -.015em;
        font-size: 1em;
        padding: .55em 1em;
        color: #fff;
        background: #82ca9c;
        font-weight: bold;
        border-radius: 50px;
        float: right;
        text-align: right;
        -webkit-transition: all 0.25s linear;
        -moz-transition: all 0.25s linear;
        -ms-transition: all 0.25s linear;
        -o-transition: all 0.25s linear;
        transition: all 0.25s linear;
      }
      .btn1:hover, .btn1:focus, .btn1:active {
        background: #f69679;
      }
      .btn1:hover:after, .btn1:focus:after, .btn1:active:after {
        right: -10px;
      }
      .promoCode .btn1 {
        font-size: .85em;
        paddding: .5em 2em;
      }
      .subtotal {
          float: right;
          width: 35%;
      }
      .subtotal .totalRow {
        padding: .5em;
        text-align: right;
      }
      .subtotal .totalRow.final {
        font-size: 1.25em;
        font-weight: bold;
      }
      .subtotal .totalRow span {
        display: inline-block;
        padding: 0 0 0 1em;
        text-align: right;
      }
      .subtotal .totalRow .label {
        font-family: "Montserrat", sans-serif;
        font-size: .85em;
        text-transform: uppercase;
        color: #777;
      }
      .subtotal .totalRow .value {
        letter-spacing: -.025em;
        width: 35%;
      }
      @media only screen and (max-width: 48em) {
        #eventLoad{
          margin-top:-30px;
        }
        #coverban{
          margin-top:2px;
          height: 150px;
        } 
        #resnamehead{
          color:white;margin-top:-48%;text-align: center; margin-left:60%;font-size: 25px;
        }
        #reslogo{
          width:58%; height:115px;margin-left: -80px;
        }
        #menubar{
          margin-top:15px;
        }
      }
      @media only screen and (max-width: 39.375em) {
        #itemname{
          font-size: 1px;
        }
        .wrap {
          width: 98%;
        }
        #prodname{
          font-size: 15px;   
        }
        .projTitle {
          font-size: 1.5em;
        }
        .heading {
          padding: 1em;
          font-size: 90%;
        }
        .cart .items .cartSection {
          width: 90%;
          display: block;
          float: left;
        }
        .cart .items .cartSection.qtyWrap {
          width: 10%;
          text-align: center;
          padding: .5em 0;
          float: right;
        }
        .cart .items .cartSection.qtyWrap:before {
          content: "QTY";
          display: block;
          font-family: "Montserrat", sans-serif;
          padding: .25em;
          font-size: .75em;
        }
        .cart .items .cartSection .itemImg {
          width: 25%;
        }
        .promoCode, .subtotal {
          width: 100%;
        }
        a.btn.continue {
          width: 100%;
          text-align: center;
        }
        #eventLoad{
          margin-top:-55px;
        }
        #coverban{
          margin-top:0px;
          height: 120px;
        }
        #resnamehead{
          color:white;margin-top:-30%;margin-left:40%;font-size: 20px;
        }
        #reslogo{
         width:40%; height:80px;margin-left:-10%;
        }
      }
      * {
        box-sizing: border-box;
      }
      .column1 {
        float: left;
        width: 90%;
        height: 50px;
      }
      .column2 {
        float: left;
        width: 10%;
        height: 50px;
        padding: 10px;
      }
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      .modal {
      }
      .vertical-alignment-helper {
        display:table;
        height: 100%;
        margin: 0 auto;
      }
      .vertical-align-center {
        /* To center vertically */
        display: table-cell;
        vertical-align: middle;
      }
      .modal-content {
        /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
        width:inherit;
        height:inherit;
        /* To center horizontally */
        margin: 0 auto;
      }
      .icon-wrapper{
        position:relative;
        float:left;
      }
      #ribbon{
        background:red;
        height: 25px;
        width:auto;
        display: inline-block;
        margin:150px auto;
        position: relative;
        color:#FFF;
        font-size: 20px;
        line-height: 25px;
        padding:0px 20px;
      }
      #ribbon:after{
        content:"";
        height:0;
        width: 0;
        top:0px;
        right:-30px;
        position: absolute;
        border-left: 25px solid transparent;
        border-right: 25px solid transparent;
        border-bottom: 25px solid red;
      }
      #ribbon:before{
        content:"";
        height:0;
        width: 0;
        top:0px;
        right:-30px;
        position: absolute;
        border-style: solid;
        border-left: 25px solid transparent;
        border-right: 25px solid transparent;
        border-top: 25px solid red;
      }
      .overlay{
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        background: #fff;
        z-index: 10;
        opacity: 0.7;
      }
      .loader{
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border:10px solid #333;
        position: relative;
        margin: 0 auto;
        top:30%;
        animation:loader 2s linear infinite;
      }
      @keyframes loader{
        50% {
          opacity: 0.5;
        }
        100% {
          transform:rotate(360deg);
        }
      }
      .loader:after{
        content: "";
        width: 35px;
        height: 35px;
        background: #333;
        position: absolute;
        border-radius: 50%;
        top: -20px;
        left: 55px;
      }
      .loader:before{
        content: "";
        width: 0;
        height: 0;
        border-left: 15px solid transparent;
        border-right: 15px solid transparent;
        border-bottom: 15px solid #333;
        position: absolute;
        transform: rotate(-90deg);
        top: -10px;
        left: 39px;
      }
      .btn12 {
        border-radius: 20px !important;
        padding: 5px 24px !important;
        font-size: 12px !important;
        margin-left: 1.5px !important;
        margin-right: 1px !important;
        cursor: pointer !important;
        outline:none !important;
      }
      .info1 {
        border-color: maroon;
        color: maroon;
      }
      .info2 {
        border-color: #2196F3;
        color: dodgerblue
      }
      .info3 {
        border-color: #ff9800;
        color: orange;
      }
      .info4 {
        border-color: #f44336;
        color: red
      }
      .info5 {
        border-color: #e7e7e7;
        color: black;
      }
      .info6 {
        border-color: yellow;
        color: black;
      }
      .info7 {
        border-color: blueviolet;
        color: black;
      }   
      .info8 {
        border-color: #7aa802;
        color: #7aa802;
      }
      .active99, .btn12:hover {
        background:#7aa802;
        border-color: #7aa802;
        color: white;
      }
      @media only screen and (min-device-width : 414px) and (max-device-width : 736px) and (orientation : portrait) { 
        .spacingr{
          margin-left: 10px;
          margin-right: 10px;
        }
      }
      .card {

  transition: 0.2s;
  overflow: hidden;
  width: 95%;
  word-wrap: break-word;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.15), 0 6px 20px 0 rgba(0, 0, 0, 0.15);
}
    </style>
    <link href="assets/caro/css/resCarousel.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
    </script>
    <script>
      var header = document.getElementById("myDIV");
      var btns = header.getElementsByClassName("btn12");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active99");
          current[0].className = current[0].className.replace(" active99", "");
          this.className += " active99";
        });
      }
    </script>
  </head>

  <?php
    if(isset($_POST["catbtn"])){
     if(isset($_POST["cat"])){
       $product_query= "SELECT *  FROM restauantproduct where Rest_id='$Rid' and RPS='Available' GROUP by RPC";
        $run_query = mysqli_query($conn,$product_query);
        if(mysqli_num_rows($run_query) > 0){
          $j=0;
          echo "<div id='myDIV'>";
            echo "<div style='text-align :center;margin-top:10px !important;margin-bottom:10px !important;'>";
              echo "<button id='product_cat12'  categ='All' class='btn12 info8 active99'>All</button>";
              while($row = mysqli_fetch_array($run_query)){
              $j++;
              $pro_cat = $row['RPC'];
              echo "<button pid_cat='$pro_cat' ccid='Allnot' id='product_cat'  class='btn12 info$j'>".$pro_cat."</button>";
              }
            echo "</div>";
          echo "</div>";
        }
      }
      if(isset($_POST["category"])){
        if(isset($_POST["procat"])) {
          $p_id = $_POST["proCat"];
          if(isset($ud)){
            $user_id = $ud;
            $sql = "SELECT * FROM restauantproduct rp where rp.Rest_id='$Rid' and rp.RPC='$p_id' and rp.RPS='Available'";
            $run_query = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($run_query);
            echo "<div > <div style='display: flex;justify-content: center;'><h3 style='width: 50%; text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;'><span style=' background:#fff; padding:0 10px; '>".$p_id."</span></h3></div> <form id='form' name='form' >
                          
                            <div class='card-columns' >";
                    while($row = mysqli_fetch_array($run_query)){
                      $pro_id    = $row['RPID'];
                      $pro_name   = $row['RPName'];
                      $pro_cost = $row['RPCost'];
                      $pro_cat = $row['RPC'];
                      $pro_vegnonveg = $row['RPTF'];
                      $pro_status = $row['RPS'];
                      $pro_image = $row['RPImage'];
                      $r_priorit = $row['RPR'];
                      $GST = $row['GST'];
                      $c1="";
                      if($row['RPTF']=="Veg"){
                        $c1="green";
                      }else {
                        $c1="red";
                      }
                      echo "<div style=' margin-left: 15px;' >  <div class='card'>
                              <div  >
                                <div  >
                                  <div class='row' style='display: flex;flex-wrap: wrap;'>
                                   <div class='col-xs-5' style='background-image: url(../upload/item_image/".$row['RPImage']." );background-size: cover;background-position:center;' data-toggle='modal' data-target='#".$row['RPID']."'>
                                   </div>
                                   <div class='col-xs-7' style='padding-top: 10px;padding-bottom: 5px'>
                                    <h4 id='prodname' data-toggle='modal' data-target='#".$row['RPID']."' style='font-weight:bold;font-size:16px;'>".$row['RPName']." </h4>
                                    <h6 style='margin-top:4px;font-weight:bold;font-size:14px;'>".$row['RPC'].", <strong id='VN'    style='color:".$c1."' >".$row['RPTF']."</strong></h6>
                                    <h6 style='margin-top:4px;font-size:14px;'><i class='fas fa-rupee-sign'></i>".$row['RPCost']."</h6>";
                  $count=0;
                  $sql_query12 = "SELECT count(*) as cntUser from add_cart ad, rest_user ru, restauantproduct rp where ad.RPID='".$pro_id."' and ad.RUID='".$ud."'GROUP by ad.RUID";
                  $result23 = mysqli_query($conn,$sql_query12);
                  $row111 = mysqli_fetch_array($result23);
                  $count = $row111['cntUser'];
                  echo "<div style='width=100%;text-align:center;'>";
                  if($count>0){
                                        echo "<a remove_id='".$pro_id."' pname='$pro_name' rpriority='$r_priorit'  catbb='removecatcart' id='productdel'  class='button delete' style='background-color: #4CAF50;border: 10px; border-radius:5px; color: white;text-align: center; text-decoration: none; display: inline-block; font-size: 10px;  margin: 4px 2px; cursor: pointer; padding: 5px 20px;'>Selected</a>";
                                      }else{
                                        echo "<a pid='$pro_id' pname='$pro_name' rpriority='$r_priorit'  id='product' catbb='addcat'  rgst='$GST' class='button' style='background-color: #31a9b8; border: 10px; color: white; border-radius:5px; text-align: center; text-decoration: none; display: inline-block; font-size: 10px; margin: 4px 2px; cursor: pointer; padding: 5px 20px;'>Add to cart</a>";
                                      }
                 echo "</div>
                                                              </div>
                                    </div>
                                  </div>
                                </div>
                                </div>
                                </div>
                              ";
                }
        echo "</div>
                            


                        </form><div class='clearfix'></div></div></tbody></table></div></div></div>";
    }
                echo "<div style='display: flex;justify-content: center;padding-bottom:5px;'><hr style='height: 10px; border: 0;box-shadow: 0 1px 1px -1px #8c8b8b inset;' width='75%' ></div>";

    }    
        }
        
        if(isset($_POST["allproduct"])){







if(isset($_POST["getProduct"])){  ?>
  <?php
    $product= "SELECT *  FROM restauantproduct where Rest_id='$Rid' and RPS='Available' GROUP by RPC";
    $run12 = mysqli_query($conn,$product);
    if(mysqli_num_rows($run12) > 0){
        $j=0;
        while($rows = mysqli_fetch_array($run12)){
            $j++;
            $pro_cat    = $rows['RPC'];
            $product_query = "SELECT * FROM restauantproduct rp where Rest_id='$Rid' and rp.RPC='$pro_cat' and rp.RPS='Available'";
            $run_query12 = mysqli_query($conn,$product_query);
            if(mysqli_num_rows($run_query12) > 0){
                echo "<div > 
                        <div style='display: flex;justify-content: center;'><h3 style='width: 50%; text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;'><span style=' background:#fff; padding:0 10px; '>".$pro_cat."</span></h3></div> 
                          <form id='form' name='form' >
                            <div class='card-columns' >";
                              while($row = mysqli_fetch_array($run_query12)){
                                $pro_id    = $row['RPID'];
                                $pro_name   = $row['RPName'];
                                $pro_cost = $row['RPCost'];
                                $pro_cat = $row['RPC'];
                                $pro_vegnonveg = $row['RPTF'];
                                $pro_status = $row['RPS'];
                                $pro_image = $row['RPImage'];
                                $r_priorit = $row['RPR'];
                                $GST = $row['GST'];
                                $c1="";
                                if($row['RPTF']=="Veg"){
                                  $c1="green";
                                }else {
                                  $c1="red";
                                }
                              echo "<div style=' margin-left: 15px;' >  <div class='card'>
                                <div  >
                                  <div  >
                                    <div class='row' style='display: flex;flex-wrap: wrap;'>
                                      <div class='col-xs-5' style='background-image: url(../upload/item_image/".$row['RPImage']." );background-size: cover;background-position:center;' data-toggle='modal' data-target='#".$row['RPID']."'>
                                      </div>
                                      <div class='col-xs-7' style='padding-top: 10px;padding-bottom: 5px'>
                                        <h4 id='prodname' data-toggle='modal' data-target='#".$row['RPID']."' style='font-weight:bold;font-size:16px;'>".$row['RPName']." </h4>
                                        <h6 style='margin-top:4px;font-weight:bold;font-size:14px;'>".$row['RPC'].", <strong id='VN'    style='color:".$c1."' >".$row['RPTF']."</strong></h6>
                                        <h6 style='margin-top:4px;font-size:14px;'><i class='fas fa-rupee-sign'></i>".$row['RPCost']."</h6>";
                                        $count=0;
                                        $sql_query12 = "SELECT count(*) as cntUser from add_cart ad, rest_user ru, restauantproduct rp where ad.RPID='".$pro_id."' and ad.RUID='".$ud."'GROUP by ad.RUID";
                                        $result23 = mysqli_query($conn,$sql_query12);
                                        $row111 = mysqli_fetch_array($result23);
                                        $count = $row111['cntUser'];
                                        echo "<div style='width=100%;text-align:center;'>";
                                          if($count>0){
                                            echo "<a remove_id='".$pro_id."' rpriority='$r_priorit' pname='$pro_name'  catbb='removemain' id='productdel'  class='button delete' style='background-color: #4CAF50;border: 10px;border-radius:5px;color: white;text-align: center;text-decoration: none;display: inline-block;font-size: 10px;margin: 4px 2px;cursor: pointer;padding: 5px 20px;'>Selected</a>";
                                          }else{
                                            echo "<a pid='$pro_id' pname='$pro_name' rpriority='$r_priorit'  id='product'   catbb='maincart' rgst='$GST' class='button' style='background-color: #31a9b8; border: 10px;color: white;border-radius:5px; text-align: center;text-decoration: none;display: inline-block;font-size: 10px;margin: 4px 2px;  cursor: pointer;padding: 5px 20px;'>Add to cart</a>";
                                          }
                                          echo "</div>
                                          </div>
                                    </div>
                                  </div>
                                </div>
                                </div>
                                </div>
                              ";
                }
        echo "</div>
                            


                        </form><div class='clearfix'></div></div></tbody></table></div></div></div>";
            }
            echo "<div style='display: flex;justify-content: center;padding-bottom:5px;'><hr style='height: 10px; border: 0;box-shadow: 0 1px 1px -1px #8c8b8b inset;' width='75%' ></div>";
        }
    }
}
        }
    
}
    

    
    
    if(isset($_POST["getOffer"])){
    $limit = 10;
    if(isset($_POST["setPage"])){
        $pageno = $_POST["pageNumber"];
        $start = ($pageno * $limit) - $limit;
    }else{
        $start = 0;
    }
    $product_query = "SELECT *  FROM offer where RID='$Rid' and Status='Available'";
            $run_query12 = mysqli_query($conn,$product_query);
            if(mysqli_num_rows($run_query12) > 0){
                
                
                    echo "<form id='form' name='form'>";
                    echo '<div class="flex flex-wrap -m-3" style="width: 97%; margin: 0 auto;margin-top:8px"> ';
                while($row = mysqli_fetch_array($run_query12)){
                    $pro_id    = $row['ROID'];
                    $pro_name   = $row['PName'];
                    $pro_des   = $row['Description'];
                    $pro_cost = $row['Cost'];
                    $pro_cat = $row['Status'];
                    $pro_image = $row['offerimage'];
                    $GST = $row['GST'];
                    $c1="";
                    if($row['RTF']=="Veg"){
                        $c1="assets/imag/veg.png";
                    }else {
                        $c1="assets/imag/nonveg.png";
                    }
  
echo '<div class="w-full sm:w-1/2 md:w-1/3 flex flex-col p-3">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex-1 flex flex-col">';
      echo "<div class='bg-cover h-48' style='background-image: url(../upload/offer_image/$pro_image);' data-toggle='modal' data-target='#".$pro_id."'>";
        
      echo '  
        <div id="ribbon" style="margin-top: 20px;">
  Offer
</div>  
        </div>
      <div class="p-4 flex-1 flex flex-col" style="
">';
     echo '   <h4 data-toggle="modal" data-target="#'.$pro_id.'">'.$pro_name.'<img src="'.$c1.'" width="15%" alt="product name" style="margin-left:10px"/></h4>';
  echo '      <div class="mb-4 text-grey-darker text-sm flex-1">';
          echo $pro_des;
            echo '<hr>
        </div>
          
          <p style="margin-top:-18px"><i class="fa fa-rupee" style="font-size:20px">'.$pro_cost.'/-</i>';
                    
                    
                    
                    
                    
                    $count=0;
                    $sql_query12 = "SELECT count(*) as cntUser from add_cart ad, rest_user ru, restauantproduct rp
where ad.RPID='".$pro_id."' and ad.RUID='".$ud."'
GROUP by ad.RUID";
    $result23 = mysqli_query($conn,$sql_query12);
    $row111 = mysqli_fetch_array($result23);

    $count = $row111['cntUser'];
                    
                    if($count>0){
              
                        
                    
                        echo '<a remove_id='.$pro_id.' cid='.$pro_cost.' pname='.$pro_name.' catbb="removeoffer" id="productdel"   class="button delete" style="background-color: #4CAF50; border: 10px;  border-radius:5px; color: white; text-align: center;  text-decoration: none; display: inline-block;  font-size: 10px;  margin: 4px 2px;  cursor: pointer;  padding: 5px 20px;float:right;">Selected</a>';
                    }
                    
                    else{
                           
                        echo '<a pid='.$pro_id.' pname='.$pro_name.' cid='.$pro_cost.' catbb="offercart" id="product"      rgst='.$GST.' class="btn btn-info btn-xs" style="background-color: #31a9b8; border: 10px;color: white;  border-radius:5px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 10px;  margin: 4px 2px;  cursor: pointer;padding: 5px 20px;float:right;">Add to cart</a>';
                  
                    }
          
                  
                        

echo '</p> 
      </div>
    </div>  
  </div>';

  

                }


echo '</div>';
                    
                    
                 
                
            }
        
        
}
if(isset($_POST["addToCart"])){
    

    $p_id = $_POST["proId"];
    $cid = $_POST["cid"];
    $pname= $_POST["pname"];
    $rprr= $_POST["rprr"];
    $rgst= $_POST["rgst"];
  //  $p_id = "Deep96Calc";
  

    if(isset($ud)){

    $user_id = $ud;

    $sql = "SELECT * FROM add_cart WHERE RPID = '$p_id' AND RUID = '$user_id'";
    $run_query = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($run_query);
    if($count > 0){
      
    } else {
$p1="Starter";
$p2="Main Course";
$p3="Desert";
          $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
$dateObj->setTimeZone(new DateTimeZone('Asia/Kolkata'));
$da=$dateObj->format('Y-m-d H:i:s:u');

            if($rprr==$p1)  {
                $pr=1;
                $da1=$dateObj->format('H');
$da2=$dateObj->format('i');
            $daa=$da1.$da2;
            }
            if($rprr==$p2)  {
                $pr=2;
                $da1=$dateObj->format('H');
$da2=$dateObj->format('i');
            $daa=($da1.$da2)+10;
                
            }
            if($rprr==$p3)  {
                $pr=3;
                $da1=$dateObj->format('H');
$da2=$dateObj->format('i');
            $daa=($da1.$da2)+12;
            }else{
              $pr=1;
                
            }   

            $qty=1;
$sql = "insert into add_cart values('".$user_id."','".$p_id."','".$da."','".$qty."','".$cid."','".$pname."','".$Rid."','".$Tid."','".$pr."','0','".$rgst."')";

      
      if(mysqli_query($conn,$sql)){
        
      }
    }
    }else{
      $sql = "SELECT * FROM cart WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
      $query = mysqli_query($conn,$sql);
      if (mysqli_num_rows($query) > 0) {
        echo "Product is already added into the cart";
          
      }
      $sql = "INSERT INTO `cart`
      (`p_id`, `ip_add`, `user_id`, `qty`) 
      VALUES ('$p_id','$ip_add','-1','1')";
      if (mysqli_query($con,$sql)) {
        echo "
          <div class='alert alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <b>Your product is Added Successfully..!</b>
          </div>
        ";
        exit();
      }
      
    }
    
    
    
    
  }
if (isset($_POST["count_item"])) {
  //When user is logged in then we will count number of item in cart by using user session id
  if (isset($ud)) {
    $sql = "SELECT COUNT(*) AS count_item FROM add_cart WHERE RUID = '$ud'";
  }else{
    
    $sql = "SELECT COUNT(*) AS count_item FROM add_cart WHERE RUID = '$ud' AND RUID < 0";
  }
  
  $query = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($query);
  echo $row["count_item"];
  exit();
}
  if (isset($_POST["Common"])) {

  if ($ud) {
    $sql = "SELECT ad.RPID,rp.RPName, rp.RPCost, ad.qty, ad.GST
from add_cart ad, rest_user ru,  restauantproduct rp
WHERE ad.RUID=ru.Rest_User_Id and ad.RPID=rp.RPID AND ad.RUID='$ud'";
        $sql1 = "SELECT ad.RPID,off.PName, ad.cost, ad.qty, ad.GST from add_cart ad, rest_user ru, offer off WHERE ad.RUID=ru.Rest_User_Id and ad.RPID=off.ROID AND ad.RUID='$ud'";
        $GSTCHECK="SELECT SUM(GST) as GST FROM add_cart WHERE RUID='$ud'";
  }else{
    //When user is not logged in this query will execute
    $sql = "SELECT ad.RPID,rp.RPName, rp.RPCost, ad.qty, ad.GST
from add_cart ad, rest_user ru,  restauantproduct rp
WHERE ad.RUID=ru.Rest_User_Id and ad.RPID=rp.RPID AND ad.RUID='$ud' AND ad.RUID < 0";
        
        $sql1 = "SELECT ad.RPID,off.PName, ad.cost, ad.qty, ad.GST from add_cart ad, rest_user ru, offer off WHERE ad.RUID=ru.Rest_User_Id and ad.RPID=off.ROID AND ad.RUID='$ud' AND ad.RUID < 0";
        $GSTCHECK="SELECT SUM(GST) as GST FROM add_cart WHERE RUID='$ud'";
  }
  $query = mysqli_query($conn,$sql);
      $query1 = mysqli_query($conn,$sql1);
  $GSTquery = mysqli_query($conn,$GSTCHECK);
  $GST=0;
  while ($row=mysqli_fetch_array($GSTquery)) {
    $GST=$row['GST'];
  }
  if (isset($_POST["checkOutDetails"])) {
    if (mysqli_num_rows($query) > 0 || mysqli_num_rows($query1) > 0) {
      //display user cart item with "Ready to checkout" button if user is not login
      echo "<form method='post' action='paym.php'>";
        $n=0;
            echo '<div class="modal-body" style=" max-height: 50vh;
    overflow-y: auto;">';
      while ($row=mysqli_fetch_array($query1)) {
          $n++;
          $product_id = $row["RPID"];
          $product_title = $row["PName"];
          $product_price = $row["cost"];
          $qty = $row["qty"];
          
                    
         echo '<div class="cart">
                <div class="row">
                  <div class="column1">
                    <ul class="cartWrap">
                      <li class="items">
                        <div > 
                          <div class="cartSection">
                            <input type="hidden" name="product_id[]" value="'.$product_id.'"/>
                            <h3 style="font-size:18px;">'.$product_title.'<br><p style="margin-left:10px;word-spacing: 0.5em;font-size:20px;"> 
                            <button type="button" minus_id="'.$product_id.'"  GST="'.$GST.'" class="qtyyy" style="background-color: #4CAF50; border: none;  color: white; padding-left: 8px;padding-top: 5px;              padding-bottom: 5px; padding-right: 8px;text-align: center;text-decoration: none;  display: inline-block;font-size: 12px; margin-top:-5px;cursor: pointer;border-radius: 10%;outline:none !important;">-</button>
                            <p id="inc" >
                              <input type="text" style="width:33px;border:none;outline:none !important;" class="qty" value="'.$qty.'" GST="'.$GST.'" readonly="readonly"/> 

                            </p>
                            <button type="button" plus_id="'.$product_id.'" GST="'.$GST.'" class="qtyy" style="background-color: #4CAF50; border: none;  color: white; padding-left: 8px;padding-top: 5px;               padding-bottom: 5px; padding-right: 8px;  text-align: center;text-decoration: none;  display: inline-block;font-size: 12px;margin-top:-5px; margin-left:-8px;  cursor: pointer;border-radius: 10%;outline:none !important;">+</button></p><p style="font-size:15px;margin-left:15px" > x <i class="fas fa-rupee-sign"></i><p ><input type="text" style="width:40px;border:none" class="price" value="'.$product_price.'" readonly="readonly"/></p> =</p> <i class="fas fa-rupee-sign" style="color:green;font-size:15px" ></i><p class="stockStatus" style="font-size:15px"><input type="text" style="width:40px;border:none;color:green;" class="total" value="'.$product_price.'" readonly="readonly"/></p>    </h3>
                          </div>  
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="column2" style="text-align:center;margin-left:-20px;margin-top:-4px;margin-left:-20px;font-size:15px;color:white">
                    <a remove_id="'.$product_id.'" catbb="removechart"  class="btn btn-link btn-xs remove1 delete" style="margin-top:-3px"><i class="glyphicon glyphicon-remove" style="color:red;font-size:15px;"></i></a>
                  </div>
                </div>
              </div><br/>';
        } 
            
            while ($row=mysqli_fetch_array($query)) {
          $n++;
          $product_id = $row["RPID"];
          $product_title = $row["RPName"];
          $product_price = $row["RPCost"];
          $qty = $row["qty"];
          
                    
            
                    
         echo '<div class="cart" >
                <div class="row">
  <div class="column1">
    <ul class="cartWrap">
      <li class="items">
        
    <div  > 
        <div class="cartSection">
        <input type="hidden" name="product_id[]" value="'.$product_id.'"/>
            <h3 style="font-size:16px;">'.$product_title.'<br><p style="margin-left:10px;word-spacing: 0.5em;font-size:20px;"> 
            <button type="button" minus_id="'.$product_id.'" GST="'.$GST.'" class="qtyyy" style="background-color: #4CAF50; border: none;  color: white; padding-left: 8px;
                padding-top: 5px;
                padding-bottom: 5px;
                padding-right: 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin-top:-5px;outline:none !important;
  cursor: pointer;border-radius: 10%;">-</button>
  
 <p id="inc" >
  
  <input type="text" style="width:33px;border:none;outline:none !important;" class="qty" value="'.$qty.'"  GST="'.$GST.'" readonly="readonly"/> 
  </p><button type="button" plus_id="'.$product_id.'" GST="'.$GST.'"  class="qtyy" style="background-color: #4CAF50; border: none;  color: white; padding-left: 8px;
                padding-top: 5px;
                padding-bottom: 5px;
                padding-right: 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin-top:-5px;
  margin-left:-8px;outline:none !important;
  cursor: pointer;border-radius: 10%;">+</button></p><p style="font-size:15px;margin-left:15px" > x <i class="fas fa-rupee-sign"></i><p ><input type="text" style="width:40px;border:none" class="price" value="'.$product_price.'" readonly="readonly"/></p> =</p> <i class="fas fa-rupee-sign" style="color:green;font-size:15px" ></i><p class="stockStatus" style="font-size:15px"><input type="text" style="width:40px;border:none;color:green;" class="total" value="'.$product_price.'" readonly="readonly"/></p>    </h3>
              
        </div>  
    
              
      </div>
          
      </li>
      </ul>
  </div>
            
  <div class="column2" style="text-align:center;margin-left:-20px;margin-top:-4px;margin-left:-20px;font-size:15px;color:white">
  <a remove_id="'.$product_id.'" catbb="removechart"  class="btn btn-link btn-xs remove1 delete" style="margin-top:10px"><i class="glyphicon glyphicon-remove" style="color:red;font-size:15px;"></i></a>
    <hr style="height: 10px; border: 0;box-shadow: 0 1px 1px -1px #8c8b8b inset;   " width="75%" >
  </div>
                
</div>

   
  </div> <br/>';
    
    
        
          
        }
            echo '</div>';
        echo '<div class="modal-footer">
           <div class="row">
<div class="col-12">
    <a href="checkout.php" class="btn btn-info btn-block checkbtn" style="width:100%">Checkout (<i class="fas fa-rupee-sign" style="color:white;font-size:10px" ></i><span style="margin-left:1px"  class="net_total" id="net_tot"></span>)</a>
    </div>
<div class="col-12">

      <p style="text-align: center;padding-top:10px;margin-left:-15px;">*(Include with GST & other charges)</p>
    </div></div>

            </div>';
        
        }
    else{
        echo '<div class="modal-body" style=" max-height: 50vh;
    overflow-y: auto;">
            
            
         <h5 style="text-align:center">  Add to Plate </h5>
            
  
        </div>';
    }
    
      }
    }
    
  if (isset($_POST["removeItemFromCart"])) {
  $remove_id = $_POST["rid"];
  if (isset($ud)) {
    $sql12 = "DELETE FROM add_cart WHERE RPID = '$remove_id' AND RUID = '$ud'";
  }
  if(mysqli_query($conn,$sql12)){
    
    exit();
  }
}
if (isset($_POST["updateCartItem"])) {
  $update_id = $_POST["update_id"];
  $qty = $_POST["qty"];
  if ($ud) {
    $sql = "UPDATE add_cart SET qty='$qty' where RPID = '$update_id' AND RUID = '$ud'";
  }
  if(mysqli_query($conn,$sql)){
      exit();
  }
}
        


    
 if(isset($_POST["search"])){
     
    $keyword = $_POST["keyword"];
    $sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";
  $sql = "SELECT *  FROM restauantproduct rp where  Rest_id='$Rid' and RPS='Available' and (RPName LIKE '%$keyword%' || RPName LIKE '$keyword%' || RPName LIKE '%$keyword' || RPC LIKE '%$keyword%' || RPC LIKE '$keyword%' || RPC LIKE '%$keyword') ";
  
  
  $run_query = mysqli_query($conn,$sql);
  if(mysqli_num_rows($run_query) > 0){
         echo "<div > <div style='display: flex;justify-content: center;'><h3 style='width: 50%; text-align: center; border-bottom: 1px solid #000; line-height: 0.1em;margin: 10px 0 20px;'><span style=' background:#fff; padding:0 10px; '>".$keyword."</span></h3></div> <form id='form' name='form' >
                          
                            <div class='card-columns' style=' margin-left: 15px;'>";
        
     while($row = mysqli_fetch_array($run_query)){
                    $pro_id    = $row['RPID'];
                    $pro_name   = $row['RPName'];
                    $pro_cost = $row['RPCost'];
                    $pro_cat = $row['RPC'];
                    $pro_vegnonveg = $row['RPTF'];
                    $pro_status = $row['RPS'];
                    $pro_image = $row['RPImage'];
                    $c1="";
                    if($row['RPTF']=="Veg"){
                        $c1="green";
                    }else {
                        $c1="red";
                    }
                    echo "<div  >  <div class='card'>
                            <div class='row' style='display: flex;flex-wrap: wrap;'>
                              <div class='col-xs-5' style='background-image: url(../upload/item_image/".$row['RPImage']." );background-size: cover;background-position:center;' data-toggle='modal' data-target='#".$row['RPID']."'>
                              </div>
                              <div class='col-xs-7' style='padding-top: 10px;padding-bottom: 5px'>
                                <h4 id='prodname' data-toggle='modal' data-target='#".$row['RPID']."' style='font-weight:bold;font-size:16px;'>".$row['RPName']." </h4>
                                <h6 style='margin-top:4px;font-weight:bold;font-size:14px;'>".$row['RPC'].", <strong id='VN'    style='color:".$c1."' >".$row['RPTF']."</strong></h6>
                                <h6 style='margin-top:4px;font-size:14px;'><i class='fas fa-rupee-sign'></i>".$row['RPCost']."</h6>";
                                $count=0;
                                $sql_query12 = "SELECT count(*) as cntUser from add_cart ad, rest_user ru, restauantproduct rp where ad.RPID='".$pro_id."' and ad.RUID='".$ud."' GROUP by ad.RUID";
                                $result23 = mysqli_query($conn,$sql_query12);
                                $row111 = mysqli_fetch_array($result23);
                                $count = $row111['cntUser'];
                                echo "<div style='width=100%;text-align:center;'>";
                                  if($count>0){
                                    echo "<a remove_id='".$pro_id."' pname='$pro_name'  catbb='remove_srk' id='productdel'  class='button delete' style='background-color: #4CAF50; border: 10px; color: white; border-radius:5px; text-align: center; text-decoration: none; display: inline-block; font-size: 10px; margin: 4px 2px; cursor: pointer; padding: 5px 20px;'>Selected</a>";
                                  }else{
                                    echo "<a pid='$pro_id' pname='$pro_name'  id='product' catbb='add_srk' class='button' style='background-color: #31a9b8; border: 10px; color: white; border-radius:5px; text-align: center; text-decoration: none; display: inline-block; font-size: 10px; margin: 4px 2px; cursor: pointer; padding: 5px 20px;'>Add to cart</a>";
                                  }
                                echo "</div>
                              </div>
                            </div>
                          </div>";
              }
                echo "</div>
        </form>
        <div class='clearfix'></div>
    </div>";
    }
     else{
         echo "No Food Found";
     }
  }  
    
?>
 


