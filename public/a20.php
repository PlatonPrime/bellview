<?php
    session_start(); 
    $ud=$_SESSION['RERID'];
    $Rid=$_SESSION['RID'];
    $Tid=$_SESSION['TID'] ; 
    $_SESSION['previous'] = basename($_SERVER['PHP_SELF']);
    if($ud=="" || $Rid=="" || $Tid==""){
        header("Location: invalid.php");
        exit;
    } 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BellView | Home</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Platoñ Build's a Culture Around the World to Innovate Skills which Changes the Execution">
        <link rel=apple-touch-icon href="assets/images/titlelogo.png">
        <link rel="shortcut icon" type="image/ico" href="assets/images/titlelogo.png"/>
        <link href="assets/car/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="assets/car/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="assets/car/css/font-awesome.css" rel="stylesheet">         
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,900" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-    UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
        <link href="assets/caro/css/resCarousel.css" rel="stylesheet" type="text/css">    
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script type="application/x-javascript"> 
            addEventListener("load", function() { 
                setTimeout(hideURLbar, 0); 
            }, false);
            function hideURLbar(){ 
                window.scrollTo(0,1); 
            } 
        </script>
        
        <script src="assets/car/js/jquery-1.11.1.min.js"></script>
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
            .column {
  float: left;
  width: 45%;
  padding-left: 10px;
                padding-right: 10px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
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
                background: #F5F5F5;
                box-shadow: 5px 5px 15px rgba(186, 126, 126, 0.5);
                border-radius: 10px;
            }
            .product {
                position: absolute;
                width: 50%;
                height: 100%;
                top: 10px;
                left: 50%;
            }
            .resCarousel-inner .item .tile div, .banner .item div {
                display: table;
                width: 100%;
                text-align: center;
                /*box-shadow: 0 1px 1px rgba(0, 0, 0, .1);*/
            }
            .btn12 {
                border: 2px solid black;
                border-radius: 20px;
                background-color: white;
                color: black;
                padding: 5px 24px;
                font-size: 12px;
                cursor: pointer;
            }
            .info1 {
                border-color: #4CAF50;
                color: green;
            }
            .info1:hover {
                background-color: #4CAF50;
                color: white;
            }
            .info2 {
                border-color: #2196F3;
                color: dodgerblue
            }
            .info2:hover {
                background: #2196F3;
                color: white;
            }
            .info3 {
                border-color: #ff9800;
                color: orange;
            }
            .info3:hover {
                background: #ff9800;
                color: white;
            }
            .info4 {
                border-color: #f44336;
                color: red
            }
            .info4:hover {
                background: #f44336;
                color: white;
            }
            .info5 {
                border-color: #e7e7e7;
                color: black;
            }
            .info5:hover {
                background: #e7e7e7;
            }
            .info6 {
                border-color: yellow;
                color: black;
            }
            .info6:hover {
                background: yellow;
            }
            .info7 {
                border-color: blueviolet;
                color: black;
            }
            .info7:hover {
                background: blueviolet;
            }
            .info8 {
                border-color: maroon;
                color: black;
            }
            .info8:hover {
                background: maroon;
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
            .badge{
                background: rgba(0,0,0,0.5);
                width: auto;
                height: auto;
                margin: 0;
                border-radius: 50%;
                position:absolute;
                top:-18px;
                right:-8px;
                padding:1px;
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
            @media only screen and (max-width: 48em) {
            
            }
            @media only screen and (max-width: 39.375em) {
   
            }
            #cooking {
                position: relative;
                margin: 0 auto;
                top: 0;
                width: 75vh;
                height: 75vh;
                overflow: hidden;
            }
            #cooking .bubble {
                position: absolute;
                border-radius: 100%;
                box-shadow: 0 0 0.25vh #4d4d4d;
                opacity: 0;
            }
            #cooking .bubble:nth-child(1) {
                margin-top: 2.5vh;
                left: 58%;
                width: 2.5vh;
                height: 2.5vh;
                background-color: #454545;
                animation: bubble 2s cubic-bezier(0.53, 0.16, 0.39, 0.96) infinite;
            }
            #cooking .bubble:nth-child(2) {
                margin-top: 3vh;
                left: 52%;
                width: 2vh;
                height: 2vh;
                background-color: #3d3d3d;
                animation: bubble 2s ease-in-out .35s infinite;
            }
            #cooking .bubble:nth-child(3) {
                margin-top: 1.8vh;
                left: 50%;
                width: 1.5vh;
                height: 1.5vh;
                background-color: #333;
                animation: bubble 1.5s cubic-bezier(0.53, 0.16, 0.39, 0.96) 0.55s infinite;
            }
            #cooking .bubble:nth-child(4) {
                margin-top: 2.7vh;
                left: 56%;
                width: 1.2vh;
                height: 1.2vh;
                background-color: #2b2b2b;
                animation: bubble 1.8s cubic-bezier(0.53, 0.16, 0.39, 0.96) 0.9s infinite;
            }
            #cooking .bubble:nth-child(5) {
                margin-top: 2.7vh;
                left: 63%;
                width: 1.1vh;
                height: 1.1vh;
                background-color: #242424;
                animation: bubble 1.6s ease-in-out 1s infinite;
            }
            #cooking #area {
                position: absolute;
                bottom: 0;
                right: 0;
                width: 50%;
                height: 50%;
                background-color: transparent;
                transform-origin: 15% 60%;
                animation: flip 2.1s ease-in-out infinite;
            }
            #cooking #area #sides {
                position: absolute;
                width: 100%;
                height: 100%;
                transform-origin: 15% 60%;
                animation: switchSide 2.1s ease-in-out infinite;
            }
            #cooking #area #sides #handle {
                position: absolute;
                bottom: 18%;
                right: 80%;
                width: 35%;
                height: 20%;
                background-color: transparent;
                border-top: 1vh solid #333;
                border-left: 1vh solid transparent;
                border-radius: 100%;
                transform: rotate(20deg) rotateX(0deg) scale(1.3, 0.9);
            }
            #cooking #area #sides #pan {
                position: absolute;
                bottom: 20%;
                right: 30%;
                width: 50%;
                height: 8%;
                background-color: #333;
                border-radius: 0 0 1.4em 1.4em;
                transform-origin: -15% 0;
            }
            #cooking #area #pancake {
                position: absolute;
                top: 24%;
                width: 100%;
                height: 100%;
                transform: rotateX(85deg);
                animation: jump 2.1s ease-in-out infinite;
            }
            #cooking #area #pancake #pastry {
                position: absolute;
                bottom: 26%;
                right: 37%;
                width: 40%;
                height: 45%;
                background-color: #333;
                box-shadow: 0 0 3px 0 #333;
                border-radius: 100%;
                transform-origin: -20% 0;
                animation: fly 2.1s ease-in-out infinite;
            }
            @keyframes jump {
                0% {
                    top: 24%;
                    transform: rotateX(85deg);
                }
                25% {
                    top: 10%;
                    transform: rotateX(0deg);
                }
                50% {
                    top: 30%;
                    transform: rotateX(85deg);
                }
                75% {
                    transform: rotateX(0deg);
                }
                100% {
                    transform: rotateX(85deg);
                }
            }
            @keyframes flip {
                0% {
                    transform: rotate(0deg);
                }
                5% {
                    transform: rotate(-27deg);
                }
                30%, 50% {
                    transform: rotate(0deg);
                }
                55% {
                    transform: rotate(27deg);
                }
                83.3% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(0deg);
                }
            }
            @keyframes switchSide {
                0% {
                    transform: rotateY(0deg);
                }
                50% {
                    transform: rotateY(180deg);
                }
                100% {
                    transform: rotateY(0deg);
                }
            }
            @keyframes fly {
                0% {
                    bottom: 26%;
                    transform: rotate(0deg);
                }
                10% {
                    bottom: 40%;
                }
                50% {
                    bottom: 26%;
                    transform: rotate(-190deg);
                }
                80% {
                    bottom: 40%;
                }
                100% {
                    bottom: 26%;
                    transform: rotate(0deg);
                }
            }
            @keyframes bubble {
                0% {
                    transform: scale(0.15, 0.15);
                    top: 80%;
                    opacity: 0;
                }
                50% {
                    transform: scale(1.1, 1.1);
                    opacity: 1;
                }
                100% {
                    transform: scale(0.33, 0.33);
                    top: 60%;
                    opacity: 0;
                }
            }
            @keyframes pulse {
                0% {
                    transform: scale(1, 1);
                    opacity: .25;
                }
                50% {
                    transform: scale(1.2, 1);
                    opacity: 1;
                }
                100% {
                    transform: scale(1, 1);
                    opacity: .25;
                }
            }
            #preloader {
                overflow: hidden;
                background-color: #fff;
                height: 100%;
                left: 0;
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 99999;
            }
            #preloader .preload-icons {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 50px;
                height: 50px;
                z-index: 8;
                background-color: transparent;
                margin-top: -25px;
                margin-left: -25px;
                text-align: center;
                line-height: 50px;
            }
            .preload-icons > img {
                position: absolute;
                top: 50%;
                margin-top: -16px;
                left: 50%;
                margin-left: -16px;
            }
            .caviar-load {
                -webkit-animation: 6000ms linear 0s normal none infinite running caviar-load;
                animation: 6000ms linear 0s normal none infinite running caviar-load;
                background: transparent none repeat scroll 0 0;
                border-color: #ebebeb #ebebeb #ff0000;
                border-radius: 50%;
                border-style: solid;
                border-width: 2px;
                height: 70px;
                position: relative;
                width: 70px;
                z-index: 9;
                top: 50%;
                left: 50%;
                margin-top: -35px;
                margin-left: -35px;
            }
            @-webkit-keyframes caviar-load {
                0% {
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    transform: rotate(360deg);
                }
            }
            @keyframes caviar-load {
                0% {
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    transform: rotate(360deg);
                }
            }
            #preloader .preload-icons .preload-1 {
                -webkit-animation: 6000ms linear 0s normal none infinite running load-1;
                animation: 6000ms linear 0s normal none infinite running load-1;
            }
            @-webkit-keyframes load-1 {
                0% {
                    opacity: 1;
                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
                }
                30% {
                    opacity: 1;
                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"
                }
                33.333% {
                    opacity: 0;
                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
                }
                100% {
                    opacity: 0;
                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
                }
            }
            @keyframes load-1 {
                0% {
                    opacity: 1;
                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
                }
                30% {
                    opacity: 1;
                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"
                }
                33.333% {
                    opacity: 0;
                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
                }
                100% {
                    opacity: 0;
                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
                }
            }
            #preloader .preload-icons .preload-2 {
                -webkit-animation: 6000ms linear 0s normal none infinite running load-2;
                animation: 6000ms linear 0s normal none infinite running load-2;
            }
            @-webkit-keyframes load-2 {
                0% {
                    opacity: 0;
                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
                }
                27% {
                    opacity: 0;
                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
                }
                33.333% {
                    opacity: 1;
                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"
                }
                60% {
        opacity: 1;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"
    }
    66.666% {
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
    }
    100% {
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
    }
}

@keyframes load-2 {
    0% {
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    }
    27% {
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
    }
    33.333% {
        opacity: 1;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"
    }
    60% {
        opacity: 1;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"
    }
    66.666% {
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
    }
    100% {
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
    }
}

#preloader .preload-icons .preload-3 {
    -webkit-animation: 6000ms linear 0s normal none infinite running load-3;
    animation: 6000ms linear 0s normal none infinite running load-3;
}

@-webkit-keyframes load-3 {
    0% {
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    }
    60% {
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
    }
    66.666% {
        opacity: 1;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"
    }
    94% {
        opacity: 1;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"
    }
    100% {
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
    }
}

@keyframes load-3 {
    0% {
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    }
    60% {
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
    }
    66.666% {
        opacity: 1;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"
    }
    94% {
        opacity: 1;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"
    }
    100% {
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
    }
}

.bg-img {
    background-position: center center;
    background-size: cover;
}

.bg-overlay {
    position: relative;
    z-index: 1;
}

.bg-overlay:after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: -1;
}

.bg-gray {
    background-color: #f9f9f9;
}

.caviar-btn {
    font-family: 'Work Sans', sans-serif;
    min-width: 180px;
    height: 54px;
    border: 1px solid #b2b2b2;
    font-weight: 500;
    background-color: #fff;
    border-radius: 0;
    padding: 0 30px;
    line-height: 52px;
    color: #000;
}

.caviar-btn:hover,
.caviar-btn:focus {
    color: #ff0000;
    font-weight: 500;
}

.caviar-btn > span {
    width: 8px;
    height: 8px;
    background-color: #ff0000;
    display: inline-block;
    border-radius: 50%;
    margin-right: 10px;
}


 .active123 {
  background: maroon;
    color: white;
}
       .btn12 {
                border: 2px solid black;
                border-radius: 20px;
                background-color: white;
                color: black;
                padding: 5px 24px;
                font-size: 12px;
                cursor: pointer;
            }
 </style>
    
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
       (function ($) {
    'use strict';

    var $window = $(window);

    // Preloader Active Code
    $window.on('load', function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });

})(jQuery);
        </script>
        <script>
        document.addEventListener('touchstart', onTouchStart, {passive: true});
        
        </script>
    
</head>
    
<body>
    
    
<!--   <div id="preloader">
        <div class="caviar-load"></div>
        <div class="preload-iconsbellview loading">
            <img class="preload-1" src="assets/imag/core-img/preload-1.png" alt="bellview loading1">
            <img class="preload-2" src="assets/imag/core-img/preload-2.png" alt="bellview loading2">
            <img class="preload-3" src="assets/imag/core-img/preload-3.png" alt="bellview loading3">
        </div>
    </div>  -->
    <header style="position: fixed;
  top: 0px;z-index: 999;justify-content: center;
    align-items: center;
  display: flex;background-color:white;-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
  
                   box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
  ">
                <div class="logo">
                    <img src="assets/images/white91.png" style="max-width:150px;
  max-height:75px;
  width: auto;
  height: auto; margin-left:-25px;" alt="bellview" class="log" id="log"/>
                </div>
                <nav>
                    <div class="search-bar"  >
                        <form class="search" >
                            <input type="search" class="search__input" placeholder="Search by name, catgory" id="search" autocomplete="off" value=""  onblur="my()"/>
                            <input type="search" class="search__btn" value="Search"  style="text-align:center;border-radius: 10%; margin-left:5px" id="search_btn" />
                            
                            <i class="ion-ios-search search__icon" style="color:#7aa802;"></i>
                            
                            
                        </form>
                        <script>
var input = document.getElementById("search");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("search_btn").click();
  }
});

 function my() {
 document.getElementById("search").value="";
}        
</script>
                       
                    </div>   
                    
                </nav>
                
                <div class="menu" data-toggle="modal" data-target="#myModal">
                   <img src="assets/css/greenfood.png">
                    <div class="icon-wrapper" >
                        <span class="badge" style="background-color:#31a9b8" data-toggle="modal" data-target="#myModal" ></span>
                        </div>
   
</div>

                </div>  
            </header>
            
  <div class="container-fluid" >
            
             <div class="product_list_header">  
                 <form action="#" method="post" class="last"> 
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="display" value="1">
                        <button class="w3view-cart" type="submit" name="submit" title="Search"
        value="Search" ><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                    </form>  
            </div>
            
        </div>
    
    
        
      <div style="margin-top:40px;">
    
<div id="amazingcarousel-container-2">
    <div id="amazingcarousel-2" style="display:none;position:relative;width:100%;max-width:1500px;margin:0px auto 0px;">
        <div class="amazingcarousel-list-container">
            <ul class="amazingcarousel-list">
              
                <?php include_once '../database/config.php'; 
   $sql = mysqli_query($conn, "SELECT * FROM revenue ");
  while($row = mysqli_fetch_assoc($sql)){
  ?>
<li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
                        <div class="amazingcarousel-image" style="width: 100%;height: 14em;overflow: hidden;"><a href="<?php echo '../upload/addons_image/'.$row['Image'] ;?>" title="pic2"  class="html5lightbox" data-group="amazingcarousel-2" data-width="250" data-height="250" ><img src="<?php echo '../upload/addons_image/'.$row['Image'] ;?>"  alt="pic1" style="min-width: 100%;
    min-height: 100%;" /></a></div>
                    </div>
                </li>

            <?php } ?>


                <!-- <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
                        <div class="amazingcarousel-image"><a href="assets/caros/images/pic2-lightbox.jpg" title="pic2"  class="html5lightbox" data-group="amazingcarousel-2" data-width="250" data-height="250" ><img src="assets/caros/images/pic2.jpg"  alt="pic2" /></a></div>
                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
                        <div class="amazingcarousel-image"><a href="assets/caros/images/pic3-lightbox.jpg" title="pic3"  class="html5lightbox" data-group="amazingcarousel-2" data-width="250" data-height="250" ><img src="assets/caros/images/pic3.jpg"  alt="pic3" /></a></div>
                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
                        <div class="amazingcarousel-image"><a href="assets/caros/images/pic4-lightbox.jpg" title="pic4"  class="html5lightbox" data-group="amazingcarousel-2" data-width="250" data-height="250" ><img src="assets/caros/images/pic4.jpg"  alt="pic4" /></a></div>
                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
                        <div class="amazingcarousel-image"><a href="assets/caros/images/pic5-lightbox.jpg" title="pic5"  class="html5lightbox" data-group="amazingcarousel-2" data-width="250" data-height="250" ><img src="assets/caros/images/pic5.jpg"  alt="pic5" /></a></div>
                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
                        <div class="amazingcarousel-image"><a href="assets/caros/images/pic6-lightbox.jpg" title="pic6"  class="html5lightbox" data-group="amazingcarousel-2" data-width="250" data-height="250" ><img src="assets/caros/images/pic6.jpg"  alt="pic6" /></a></div>
                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
                        <div class="amazingcarousel-image"><a href="assets/caros/images/pic7-lightbox.jpg" title="pic7"  class="html5lightbox" data-group="amazingcarousel-2" data-width="250" data-height="250" ><img src="assets/caros/images/pic7.jpg"  alt="pic7" /></a></div>
                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
                        <div class="amazingcarousel-image"><a href="assets/caros/images/pic8-lightbox.jpg" title="pic8"  class="html5lightbox" data-group="amazingcarousel-2" data-width="250" data-height="250" ><img src="assets/caros/images/pic8.jpg"  alt="pic8" /></a></div>
                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
                        <div class="amazingcarousel-image"><a href="assets/caros/images/pic9-lightbox.jpg" title="pic9"  class="html5lightbox" data-group="amazingcarousel-2" data-width="250" data-height="250" ><img src="assets/caros/images/pic9.jpg"  alt="pic9" /></a></div>
                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
                        <div class="amazingcarousel-image"><a href="assets/caros/images/pic10-lightbox.jpg" title="pic10"  class="html5lightbox" data-group="amazingcarousel-2" data-width="250" data-height="250" ><img src="assets/caros/images/pic10.jpg"  alt="pic10" /></a></div>
                    </div>
                </li> -->
            </ul>
            <div class="amazingcarousel-prev"></div>
            <div class="amazingcarousel-next"></div>
        </div>
    </div>
</div>
<!-- End of body section HTML codes -->

</div>  
        
        
        
        <br>
        <?php 
                require_once "../database/config.php";
                $sqlimage= "SELECT *  FROM restauantname where  Rest_id='$Rid'";
                $imageresult1 = mysqli_query($conn, $sqlimage);
                while($rows=mysqli_fetch_assoc($imageresult1))
                {
                    $image = $rows['Rest_img'];
                    $resname = $rows['Rest_name'];
                }
                ?> 
        
        
        
        
         <section class=" section-padding-top" style="background-image: url('assets/imag/cover.jpg') ; 
                          background-repeat:no-repeat;
    background-position: center center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; " id="coverban">
            <div class=container-fluid>
                
                <div class="page-title text-center">
                <div class=row  >
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="single-fun-fact mb30 wow fadeInUp" data-wow-delay="0.1s" >
                        <div class="account2" >
                    <div class="image img-cir img-120"  style="margin-top:-30px">
                        <div class="avatar-upload">
                                                   
                                                <div class="avatar-preview" id="reslogo">
                                                        <div id="imagePreview" style="background-image:     url(<?php echo "../upload/restaurant_image/".$image; ?>);background-size:80%">
                                                        </div>
                                                    </div><h4 style="text-align:center;" id="resnamehead"> Welcome To <br><?php echo $resname; ?></h4 >
                                                </div>    
                        
                        
                    </div>
                    
                    
                </div>
                        
                       
                        
                    </div>
                </div>
               
                    
                
                </div>
                </div>
                 
                
            </div>
        </section>    <!-- Feature-Area-End -->
       <?php 
                require_once "../database/config.php";
                $sqlimage= "SELECT *  FROM restauantproduct where   Rest_id='$Rid'";
                $imageresult1 = mysqli_query($conn, $sqlimage);
                $i=0;
                while($rows=mysqli_fetch_assoc($imageresult1))
                {
                    $i++;
                    $RPC[$i] = $rows['RPC'];
                }
        
        ?> 
        <div >
            <div class="grid_3 grid_5" id="menubar">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs" >
                    <ul id="myTab" class="nav nav-tabs" role="tablist" style="width:90% ;margin: 0 auto;">
                        <li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Menu</a></li>
                        <li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Today Offers</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        
                        <div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
                            <div  id="catbtn" class="catbtn">
                    </div>
                            <div  class="goto">
                    </div>
                            <div id="txtHint1" >
                                        
                                        </div>
                          
                           <div style='display: flex;justify-content: center;padding-bottom:5px;'><hr style='height: 10px; border: 0;box-shadow: 0 1px 1px -1px #8c8b8b inset;' width='75%' ></div>
                              
                            <div id="txtHint2" >
                                        
                                        </div>
                            
                             <div id="txtHint3" >
                                        
                                        </div>
                            
                            
                            
                            <div id="get_product">
                            
                        </div>
                            
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab" >
                            
                     <div id="get_offer">
                            
                            </div>       
                            
                            
                            
   
       <script>
           $(document).ready(function(){
               catdis();
               product();
               getCartItem();
               offer();
               
               function catdis(){
                   $.ajax({
                       url  :   "action.php",
                       method:  "POST",
                       data :   {catbtn:1,cat:1},
                       success  :   function(data){
                           $("#txtHint1").show();
                           $("#txtHint1").html(data);
                           
                       }
                   })
               }


           
               var ppid;
         
               $("body").delegate("#product_cat","click",function(event){
        
                   ppid1 = $(this).attr("pid_cat");
                   var ppid = $(this).attr("pid_cat");
                   event.preventDefault();
                   $.ajax({
                       url : "action.php",
                       method : "POST",
                       data : {catbtn:1,category:1, procat:1,proCat:ppid},
                       success : function(data){
                           //catdis();
                           //recat();
                           //getCartItem();
                           //checkOutDetails();
                           $('#get_product').hide();
                           $('#txtHint2').show();
                           $('#txtHint2').html(data);
                       }
                   })
         
               })
               var keyword;
               $("body").delegate("#product_cat12","click",function(event){
                   event.preventDefault();
                   $.ajax({
                       url  :   "action.php",
                       method:  "POST",
                       data :   {catbtn:1,allproduct:1,getProduct:1},
                       success  :   function(data){
                           product();
                           $(".btn12").removeClass("active123");
                           $(this).addClass("active123");
                           $('.loader').hide();
                           $(".overlay").hide();
                       }
                   })
               })
               
               
               
               
               
              $("body").delegate("#expeditions-tab","click",function(event){
                   event.preventDefault();
                   $.ajax({
                       url  :   "action.php",
                       method:  "POST",
                       data :   {catbtn:1,allproduct:1,getProduct:1},
                       success  :   function(data){
                           product();
                           
                       }
                   })
               })
    
               $("#search_btn").click(function(){
                   $(".overlay").show();
                   keyword = $("#search").val();
                   
                   if(keyword != ""){
                       
                       $.ajax({
                           url      :   "action.php",
                           method   :   "POST",
                           data :   {search:1,keyword:keyword},
                           success  :   function(data){ 
                               $('input').blur();
                               $('#txtHint2').hide();
                               //                $('#txtHint1').hide();
                               $("#get_product").hide();
                               catdis();
                               $("#txtHint3").show();
                               $("#txtHint3").html(data);
                               $('html, body').animate({
                                   scrollTop: $("div.goto").offset().top
                               }, 1000)
                               $(".overlay").hide();
                           }
                       })
                   }
                   else{
                       $(".overlay").hide();
                       alert("Enter the Food Name");
                   }
               })
               function product(){
                   $.ajax({
                       url  :   "action.php",
                       method:  "POST",
                       data :   {catbtn:1,allproduct:1,getProduct:1},
                       success  :   function(data){
                           $("#get_product").show();
                           $("#get_product").html(data);
                           $('#txtHint2').hide();
                           $("#txtHint3").hide();
                       }
                   })
               }

               function inform() {
                        $.ajax({
                    url  :   "action.php",
                    method:  "POST",
                    data :   {catbtn:1,allproduct:1,allinone:1},
                    success: function(response) { console.log(response); }
    });

               }
        
        
        
               function offer(){
                   $.ajax({
                       url  :   "action.php",
                       method:  "POST",
                       data :   {getOffer:1},
                       success  :   function(data){
                           $("#get_offer").show();
                           $("#get_offer").html(data);
                       }
                   })
               }
               
               $("body").delegate("#product","click",function(event){
                   $('.loader').show();
                   var pid = $(this).attr("pid");
                   
                   var cid = $(this).attr("cid");
                   var pname = $(this).attr("pname");
                   var catbtn = $(this).attr("catbb");
                   var rpr = $(this).attr("rpriority");
                   var rgst = $(this).attr("rgst");

                   event.preventDefault();
                   $(".overlay").show();
                   
                   if(catbtn=="addcat"){
                       $(this).attr('id', 'productdel');
                       $(this).attr('remove_id', pid);
                       $(this).attr('catbb', 'removecatcart');
                       $(this).text('Selected');
                       
                       $(this).css({ 'background-color': '#4CAF50' }); 
                       $(this).addClass('delete');
                       $.ajax({
                           url : "action.php",
                           method : "POST",
                           data : {addToCart:1,proId:pid,cid:cid,pname:pname,rprr:rpr,rgst:rgst},
                           success : function(data){
                               // catdis();
                               //recat();
                               
                               /*    $('#txtHint2').show();
                               $('#txtHint2').html(data);
                               */  
                               // getCartItem();
                               count_item();
                               checkOutDetails();
                               $('.loader').hide();
                               $(".overlay").hide();
                           }
                       })
                   }
                   if(catbtn=="maincart"){
                       $(this).attr('id', 'productdel');
                       $(this).attr('remove_id', pid);
                       $(this).attr('catbb', 'removemain');
                       $(this).text('Selected');
                       $(this).css({ 'background-color': '#4CAF50' }); 
                       $(this).addClass('delete');
                       /*  var id=$(this).attr('id');
                       var rid=$(this).attr('remove_id');
                       var cid=$(this).attr('catbb');
                       var cl=$(this).attr('class');
                       alert("ID:"+id+"\nRID:"+rid+"\ncid:"+cid+"\n:cl:"+cl);
                       
                       */ 
                       $.ajax({
                           url : "action.php",
                           method : "POST",
                           data : {addToCart:1,proId:pid,cid:cid,pname:pname,rprr:rpr,rgst:rgst},
                           success : function(data){
                               // catdis(); 
                               count_item();
                               checkOutDetails();
                               getCartItem();
                               //        product();
                               //    offer();
                               // recat();
                               // $('#get_product').show();
                               // $('#get_product').html(data);
                               //$('.loader').hide();
                
                
                
                
            }
        })
            
         /*   $.ajax({
            url : "action.php",
            method : "POST",
            data : {catbtn:1,checkadd:1,prod_id:pid},
            success : function(data){
                $('#prodcheck').show();
                
               
            }
        })*/
         
            
            }
            
            if(catbtn=="offercart"){
                /*var rgst = $(this).attr("rgst");*/
                /*alert(rgst);*/
                 $(this).attr('id', 'productdel');
            $(this).attr('remove_id', pid);
            $(this).attr('catbb', 'removeoffer');
            $(this).text('Selected');
            
           $(this).css({ 'background-color': 'green'}); 
            $(this).addClass('delete');
                
                
                
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {addToCart:1,proId:pid,cid:cid,pname:pname,rgst:rgst},
            success : function(data){
             //    catdis();    
                count_item();
                checkOutDetails();
                getCartItem();
                
                //offer();
              //recat();
                
                $('#get_product').show();
                $('#get_product').html(data);
                
                $('.loader').hide();
            }
        })
         
            
            }
            
            
            if(catbtn=="add_srk"){
                
                
                 $(this).attr('id', 'productdel');
            $(this).attr('remove_id', pid);
            $(this).attr('catbb', 'remove_srk');
            $(this).text('Selected');
            
           $(this).css({ 'background-color': '#4CAF50'}); 
            $(this).addClass('delete');
                
                
                
                $.ajax({
                    url : "action.php",
                    method : "POST",
                    data : { addToCart:1, proId:pid, cid:cid, pname:pname },
                    success : function(data){
                    //    catdis();
            //            searhkey();
                            
                        count_item();
                        checkOutDetails();
              //          getCartItem();
                      //  offer();
                    //    recat();
                        
                        $('.loader').hide();
                        $(".overlay").hide();
                    }
                })
            }
        })

        function recheck(){
            var ppid11 = ppid1;
        event.preventDefault();
        $(".overlay").show();
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {catbtn:1,category:1,procat:1,proCat:ppid11},
            success : function(data){
                $('#get_product').hide();
                
                $('#txtHint2').html(data);
                
                getCartItem();
                $('.overlay').hide();
            }
        })
            
        }
        
        
        
        function searhkey(){
            
            
            
            
            
            $.ajax({
                url     :   "action.php",
                method  :   "POST",
                data    :   {search:1,keyword:keyword},
                success :   function(data){ 
                    $('input').blur();
                    catdis();
                    $('#txtHint2').hide();
                    $('#txtHint1').hide();
                    $("#get_product").hide();
                    
                    $("#txtHint3").show();
                    $("#txtHint3").html(data);
                    $('html, body').animate({
                        scrollTop: $("div.goto").offset().top
                    }, 1000)
                    $(".overlay").hide();
                }
            })
        }
        function recat(){
            var ppid11 = ppid1;
        event.preventDefault();
        $(".overlay").show();
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {catbtn:1,category:1,procat:1,proCat:ppid11},
            success : function(data){
                $('#get_product').hide();
                
                $('#txtHint2').html(data);
                
                //getCartItem();
                $('.overlay').hide();
            }
        })
            
        }
        
        
        
        function checkadd(pid){
        //    var ppid11 = ppid1;
        event.preventDefault();
        $(".overlay").show();
        
            
        }
        
        
        count_item();
        function count_item(){
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {count_item:1},
            success : function(data){
                $(".badge").html(data);
            }
        })
    }
    
        function getCartItem(){
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {Common:1,getCartItem:1},
            success : function(data){
                $("#cart_product").show();
                $("#cart_product").html(data);
            }
        })
    }

        $("body").delegate(".qtyyy","click",function(event){
        event.preventDefault();
        $('.overlay').show();
        var row = $(this).parent().parent();
        var price = row.find('.price').val();
        var qty = row.find('.qty').val();
        var GST = $(this).attr("GST");
        
        qty--;
        if (isNaN(qty)) {
            qty = 1;
        };
        if (qty < 1) {
            qty = 1;
        };
        var total = price * qty;
        row.find('.qty').val(qty);
        row.find('.total').val(total);
        var net_total=0;
        $('.total').each(function(){
            net_total += ($(this).val()-0);
        })

        net_total=Math.round(net_total+(2*(net_total*(GST/100)))+(net_total*(3/100)));
        $('.net_total').html(net_total);
        var update = $(this).parent().parent().parent();
        var update_id = update.find(".qtyyy").attr("minus_id");
        var qty = update.find(".qty").val();
        $.ajax({
            url :   "action.php",
            method  :   "POST",
            data    :   {updateCartItem:1,update_id:update_id,qty:qty},
            success :   function(data){
                checkOutDetails();
            }
        })
    })
    
        $("body").delegate(".qtyy","click",function(event){
        event.preventDefault();
        var row = $(this).parent().parent();
        var price = row.find('.price').val();
        var qty = row.find('.qty').val();
        var GST = $(this).attr("GST");
        
        qty++;
        if (isNaN(qty)) {
            qty = 1;
        };
        if (qty < 1) {
            qty = 1;
        };
        var total = price * qty;
        row.find('.qty').val(qty);
        row.find('.total').val(total);
        var net_total=0;
        $('.total').each(function(){
            net_total += ($(this).val()-0);
        })
        net_total=Math.round(net_total+(2*(net_total*(GST/100)))+(net_total*(3/100)));
        $('.net_total').html(net_total);
        var update = $(this).parent().parent().parent();
        var update_id = update.find(".qtyy").attr("plus_id");
        var qty1 = update.find(".qty").val();
        $.ajax({
            url :   "action.php",
            method  :   "POST",
            data    :   {updateCartItem:1,update_id:update_id,qty:qty1},
            success :   function(data){
                checkOutDetails();
            }
        })

    })
        $("body").delegate(".delete","click",function(event){
            var remove = $(this).parent().parent().parent();
            var remove_id = remove.find(".delete").attr("remove_id");
            var catbtn = $(this).attr("catbb");
            
            
            
        
          if(catbtn=="removecatcart"){
                
                
                $(this).removeClass("delete");
            $(this).removeAttr('remove_id');    
                
                 $(this).attr('id', 'product');
            $(this).attr('pid', remove_id);
            $(this).attr('catbb', 'addcat');
            $(this).text('Add to cart');
            
           $(this).css({ 'background-color': '#31a9b8' }); 
            
                
                
                
                $.ajax({
                url :   "action.php",
                method  :   "POST",
                data    :   {removeItemFromCart:1,rid:remove_id},
                success :   function(data){
                    
                count_item();
                checkOutDetails();
               
                    
                $('.loader').hide();
                $(".overlay").hide();
            }
        })    
                
            }
        
            if(catbtn=="removemain"){
               
                
                $(this).removeClass("delete");
            $(this).removeAttr('remove_id');    
                
                 $(this).attr('id', 'product');
            $(this).attr('pid', remove_id);
            $(this).attr('catbb', 'maincart');
            $(this).text('Add to cart');
            
           $(this).css({ 'background-color': '#31a9b8' }); 
            
            
                
                
                
            $.ajax({
                url :   "action.php",
                method  :   "POST",
                data    :   {removeItemFromCart:1,rid:remove_id},
                success :   function(data){
                
                count_item();
                checkOutDetails();
                
            }
        })
            }
        
            if(catbtn=="removeoffer"){
            
                $(this).removeClass("delete");
            $(this).removeAttr('remove_id');    
                
                 $(this).attr('id', 'product');
            $(this).attr('pid', remove_id);
            $(this).attr('catbb', 'offercart');
            $(this).text('Add to cart');
            
           $(this).css({ 'background-color': '#31a9b8'}); 
            
            $.ajax({
                url :   "action.php",
                method  :   "POST",
                data    :   {removeItemFromCart:1,rid:remove_id},
                success :   function(data){
                 //    catdis();    
                count_item();
                checkOutDetails();
                getCartItem();
                
                //offer();
              //recat();
                    
                    
                
            }
        })
            }
        
            
            if(catbtn=="remove_srk"){
                
                
                  $(this).removeClass("delete");
            $(this).removeAttr('remove_id');    
                
                 $(this).attr('id', 'product');
            $(this).attr('pid', remove_id);
            $(this).attr('catbb', 'add_srk');
            $(this).text('Add to cart');
            
           $(this).css({ 'background-color': '#31a9b8'});

                $.ajax({
                url :   "action.php",
                method  :   "POST",
                data    :   {removeItemFromCart:1,rid:remove_id},
                success :   function(data){
                        count_item();
                        checkOutDetails();
                $('.loader').hide();
                $(".overlay").hide();
            }
        })    
                
            }
        
            if(catbtn=="removechart"){
                 
            
                 $.ajax({
                     url    :   "action.php",
                     method :   "POST",
                     data   :   {removeItemFromCart:1,rid:remove_id},
                     success    :   function(data){
                         offer();
                         product();
                         count_item();
                         checkOutDetails();
                
                
                     }
                 })
             }
        
           
            
            
    })
    $("body").delegate(".update","click",function(event){
        var update = $(this).parent().parent().parent();
        var update_id = update.find(".update").attr("update_id");
        var qty = update.find(".qty").val();
        $.ajax({
            url :   "action.php",
            method  :   "POST",
            data    :   {updateCartItem:1,update_id:update_id,qty:qty},
            success :   function(data){
                $("#cart_msg").html(data);
                checkOutDetails();
            }
        })


    })
    
    function updaterow(){
        var update = $(this).parent().parent().parent();
        var update_id = update.find(".update").attr("update_id");
        var qty = update.find(".qty").val();
        $.ajax({
            url :   "action.php",
            method  :   "POST",
            data    :   {updateCartItem:1,update_id:update_id,qty:qty},
            success :   function(data){
                $("#cart_msg").html(data);
                checkOutDetails();
            }
        })
    }
    checkOutDetails();
    
    function checkOutDetails(){
     $('.overlay').show();
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {Common:1,checkOutDetails:1},
            success : function(data){
                $('.overlay').hide();
                $("#cart_checkout").html(data);
                    net_total();
            }
        })
    }
    /*
        net_total function is used to calcuate total amount of cart item
    */
    var act=0;
    var GST=0;
    function net_total(){
        var net_total = 0;
        $('.qty').each(function(){
            var row = $(this).parent().parent();
            var price  = row.find('.price').val();
            GST = $(this).attr("GST");
            
            var total = price * $(this).val()-0;
            row.find('.total').val(total);
        })
        $('.total').each(function(){
            net_total += ($(this).val()-0);
        })
        net_total=Math.round(net_total+(2*(net_total*(GST/100)))+(net_total*(3/100)));
        
        act=net_total;
        
        $('.net_total').html(net_total);
    }



        
        });
</script>                         
                            
                        
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    <?php
        
  $sql19 = "SELECT * FROM restauantproduct rp , product_details pd WHERE rp.Rest_id='$Rid' and rp.RPID=pd.PID";
      $run_query9 = mysqli_query($conn,$sql19);
      $count = mysqli_num_rows($run_query9);
      while($row = mysqli_fetch_array($run_query9)){
        $pro_id=$row['PID'];
        $pro_name=$row['RPName'];
        $pro1=$row['protiens'];
        $pro2=$row['carbohydroid'];
        $pro3=$row['fact'];
        $pro4=$row['lypids'];
        $pro5=$row['iodine'];
        echo '<div class="modal fade" id="'.$row['PID'].'" tabindex="-1" role="dialog" aria-labelledby="'.$row['PID'].'"Title" aria-hidden="true" >
          <div class="modal-dialog modal-dialog-centered" role="document" role="document" style="width:100%;">
    
    
      <!-- Modal content-->
      <div class="modal-content" style="margin-top:-200px;">

        <div class="modal-header" style="background-color:#ffffff !important">
          
           <h5 class="modal-title" id="myModalLabel" style="color:#7aa802;"><span class="glyphicon glyphicon-grain" style="color:#7aa802;"></span>'.$row['RPName'].'</h5>
          <button type="button" class="close" data-dismiss="modal" style="color:#7aa802 !important;opacity:1;margin-top:-8px;">&times;</button>
        </div>

                <div class="modal-body" style=" height: 350px;overflow-y: auto; line-height: 350px;">
                  <div style=" display: inline-block;  vertical-align: middle;  line-height: normal;">
                    <form >
                      <div class="row">
                        <div class="col-12 col-sm-6 col-md-12" style="display: flex;justify-content: center;padding-bottom:150px;border-radius:5px;background-image: url(../php/uploadfood/'.$row['RPImage'].');background-repeat: no-repeat;  background-size:  cover ;">
                        </div>
                        <div class="col-12 col-sm-6 col-md-12" style="padding-bottom:25px;padding-top:25px">
                          <p style="text-align:justify;font-size:15px;">'.$row['description'].'</p>
                          <br/>
                          <h4>Benifits</h4>
                          <p style="text-align:justify;font-size:15px;">'.$row['benifits'].'</p>
                        </div>
                      </div>
                      <div class="au-card  au-card-top-countries m-b-40">
                        <div class="au-card-inner">
                          <div >
                            <table class="table" style="display: flex;justify-content: center;" >   
                              <thead style="font-size:15px;color:#fff;" class="au-card--bg-blue">
                                <tr style="font-size:20px;color:#fff">
                                  <th><b>Name</b></th>
                                  <th><b>value</b></th>
                                </tr>
                                <tr>
                                  <th >protein</th>
                                  <th>'.$pro1.'</th>
                                </tr>
                                <tr>
                                  <th>carbohydrates</th>
                                  <th>'.$pro2.'</th>
                                </tr>
                                <tr>
                                  <th>Facts</th>
                                  <th>'.$pro3.'</th>
                                </tr>
                                <tr>
                                  <th>Lipid</th>
                                  <th>'.$pro4.'</th>
                                </tr>
                                <tr>
                                  <th>Iodine</th>
                                  <th>'.$pro5.'</th>
                                </tr>
                              </thead>
                            </table>
                          </div>
                        </div>                
                      </div>
                    </form>
                  </div>
                </div>
                
            </div>
          </div>
        </div>
        </div>';
      }
    

?>
    
    
    
    
    <?php 
                    require_once "../database/config.php";
                    date_default_timezone_set("Asia/Kolkata");
                    $da= date("d/m/Y H:i a");
                    
                    $sqlimage= "SELECT ad.RPID,rp.RPName, rp.RPCost
from add_cart ad, rest_user ru,  restauantproduct rp
WHERE ad.RUID=ru.Rest_User_Id and ad.RPID=rp.RPID" ;
                    $imageresult1 = mysqli_query($conn, $sqlimage);
                    $i=0;
                    while($rows=mysqli_fetch_assoc($imageresult1))
                    {
                        $i++;
                        $RPID=$rows['RPID'];
                        $RTID[$i] = $rows['RPName'];
                        $RPName[$i] = $rows['RPCost'];
                    
                    }
    ?>
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document" role="document" style="width:100%;">
    
    
      <!-- Modal content-->
      <div class="modal-content" style="margin-top:-200px;">

        <div class="modal-header" style="background-color:#7aa802">
          <img src="assets/css/whitefood.png" width="9%;margin-right:25px;margin-top:15px; !important;"><h4 class="modal-title" style="color:white;margin-left:15px;">  My Plate</h4>
          <button type="button" class="close" data-dismiss="modal" style="color:white !important;opacity:1;margin-top:-8px;">&times;</button>
        </div>


          <div class="wait overlay">
    <div class="loader"></div>
</div>
         <div id="cart_checkout" >
          
          </div>
       <!--     <div class="modal-body" style=" max-height: 50vh;
    overflow-y: auto;">
            
            
         <h5>  Add food to your plate </h5>
            
  
        </div>
-->
         
      </div>
      
    </div>
  </div>
 
    
    
    <?php 
    
    $sql19 = "SELECT * 
FROM offer rp , product_details pd
WHERE rp.RID='$Rid' and rp.ROID=pd.PID"; 
    $run_query9 = mysqli_query($conn,$sql19);
    $count = mysqli_num_rows($run_query9);
    
    
    
    while($row = mysqli_fetch_array($run_query9)){
        $pro_id=$row['PID'];
        $pro_name=$row['PName'];
        $pro1=$row['protiens'];
        $pro2=$row['carbohydroid'];
        $pro3=$row['fact'];
        $pro4=$row['lypids'];
        $pro5=$row['iodine'];
        $pro_image=$row['offerimage'];
        
        ?>
    
    
        <div class="modal fade" id="<?php echo $row['PID'];  ?>" role="dialog" tabindex="-1">
        <div class="modal-dialog" style="width:auto">
    
      
        <div class="modal-content">
  
            
            
            
            <div class="modal-body" style="padding-bottom:18px;">
          <div style="max-height: 65vh;
    overflow-y: auto;">
            <div style="position: fixed;z-index: 999;
  display: flex;background-color:white;width:92%;top:1;"> 
                
                
                <h4 class="modal-title" id="myModalLabel" style="color:#000;"><span class="glyphicon glyphicon-apple" style="color:#000"></span> <?php echo $row['PName']  ?></h4> 
                <button type="button" class="close" data-dismiss="modal" style="position: fixed;

right: 0;padding-right:25px;
">&times;</button>
                
                
          
                </div>
        <br>
          <form >
              <div class="row">
              <div class="col-12 col-sm-6 col-md-12" style="display: flex;
  justify-content: center;padding-bottom:150px;border-radius:10px;background-image: url(../upload/offer_image/<?php echo $pro_image; ?>);background-repeat: no-repeat;
  background-size:  cover ;'>">
                 
            </div>
            <div class="col-12 col-sm-6 col-md-12" style="padding-bottom:25px;padding-top:25px">
                
                <p style="text-align:justify;font-size:15px;"><?php echo $row['description']; ?></p>
                
                <h4>Benifits</h4>
                <p style="text-align:justify;font-size:15px;"><?php echo $row['benifits']  ?></p>
            </div>
              </div>
        <div class='au-card  au-card-top-countries m-b-40'>
                                    <div class='au-card-inner'>
                                        <div >
                                            <table class='table' style="display: flex;
  justify-content: center;" >   
            
          
                <thead style="font-size:15px;color:#fff;" class="au-card--bg-blue">
                    
                    <tr style="font-size:20px;color:#fff">
                        <th><b>Name</b></th>
                        <th><b>value</b></th>
                        
                    </tr>
                    <tr>
                        <th >protein</th>
                        <th><?php echo $pro1 ?></th>
                        
                    </tr>
                    
                    <tr>
                        <th>carbohydrates</th>
                        <th><?php echo $pro2 ?></th>
                        
                    </tr>
                    
                    <tr>
                        <th>Facts</th>
                        <th><?php echo $pro3 ?></th>
                        
                    </tr>
                    <tr>
                        <th>Lipid</th>
                        <th><?php echo $pro4 ?></th>
                        
                    </tr>
                    <tr>
                        <th>Iodine</th>
                        <th><?php echo $pro5 ?></th>
                        
                    </tr>
                </thead>
                
                             
            </table>
                                </div>
            </div>
              </div>
          </form>
        
            
        </div>
        
      </div>
      
    </div>
         
         
       
        
  </div>
  
<?php
                }?>
          
                          
                
    

<!-- Bootstrap Core JavaScript -->
    
   <div class="row" style="width:100%;display: flex;
  justify-content: center;">
  <div class="column">
    <img src="assets/images/footer/doodles.png" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="assets/images/footer/txt3.png" alt="Forest" style="width:100%">
  </div>
  
</div>
    

<script src="assets/car/js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
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
</script>
    <script  src="assets/js/index.js"></script>
<!-- main slider-banner -->
         <script src="assets/caros/carouselengine/jquery.js"></script>
    <script src="assets/caros/carouselengine/amazingcarousel.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/caros/carouselengine/initcarousel-2.css">
    <script src="assets/caros/carouselengine/initcarousel-2.js"></script>
<!-- //main slider-banner --> 
</body>
</html>