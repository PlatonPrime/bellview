<?php
if (isset($_SESSION['previous'])) {
  if (basename($_SERVER['PHP_SELF']) != $_SESSION['previous']) {
    session_destroy();
    header("Location: invalid.php");
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Bellview | Invalid</title>
  <link rel=apple-touch-icon href="../webAssets/images/titlelogo.png">
  <link rel="shortcut icon" type="image/ico" href="../webAssets/images/titlelogo.png"/>
  <style>
    /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
    body {background:#f3efe8;}
    .loading {
      font-family: "Arial Black", "Arial Bold", Gadget, sans-serif;
      text-transform:uppercase;
      width:50%;
      text-align:center;
      line-height:50px;
      font-size: 50px;
      position:absolute;
      left:0;right:0;top:50%;
      margin:auto;
      transform:translateY(-50%);
    }

    .loading span {
      position:relative;
      z-index:999;
      color:#fff;
    }

    .loading:before {
      content:'';
      background:#61bdb6;
      width:500px;
      height:110px;
      display:block;
      position:absolute;
      top:0;left:0;right:0;bottom:0;
      margin:auto;
      animation:2s loadingBefore infinite ease-in-out;
    }

    @keyframes loadingBefore {
      0%   {transform:translateX(-50px);}
      50%  {transform:translateX(20px);}
      100% {transform:translateX(-50px);}
    }

    .loading:after {
      content:'';
      background:#ff3600;
      width:20px;
      height:180px;
      display:block;
      position:absolute;
      top:0;left:0;right:0;bottom:0;
      margin:auto;
      opacity:.5;
      
      animation:2s loadingAfter infinite ease-in-out;
    }

    @keyframes loadingAfter {
      0%   {transform:translateX(-200px);}
      50%  {transform:translateX(200px);}
      100% {transform:translateX(-200px);}
    }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <div class="loading">
  <span>Please, Scan your QR Code Properly</span>
</div>
    <script  src="../webAssets/js/js/index.js"></script>
</body>
</html>