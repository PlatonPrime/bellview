<!DOCTYPE html>
<html>
<head>
  <title>Cashfree - Signature Generator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body onload="document.frm1.submit()">


<?php 
$mode = "PROD"; //<------------ Change to TEST for test server, PROD for production

/*echo "<pre>";
print_r($_SESSION);
exit();*/

extract($_POST);

  $customerName = str_replace(" ","-", $customerName);
  $returnUrl = str_replace(" ","-", $returnUrl);

  $secretKey = "972c46e5fe84d1a020bac1a9cdc31144d850102f";
  $postData = array( 
  "appId" => $appId, 
  "orderId" => $orderId, 
  "orderAmount" => $orderAmount, 
  "orderCurrency" => $orderCurrency, 
  "orderNote" => $orderNote, 
  "customerName" => $customerName, 
  "customerPhone" => $customerPhone, 
  "customerEmail" => $customerEmail,
  "returnUrl" => $returnUrl, 
  "notifyUrl" => $notifyUrl,
);

/*echo "<pre>";
print_r($postData);
exit();*/

ksort($postData);
$signatureData = "";
foreach ($postData as $key => $value){
    $signatureData .= $key.$value;
}
$signature = hash_hmac('sha256', $signatureData, $secretKey,true);
$signature = base64_encode($signature);


/*echo "<pre>";
print_r($signatureData);
exit();*/

if ($mode == "PROD") {
  $url = "https://www.cashfree.com/checkout/post/submit";
} else {
  $url = "https://test.cashfree.com/billpay/checkout/post/submit";
}

?>
  <form action="<?php echo $url; ?>" name="frm1" method="post">
      <p>Please wait.......</p>
      <input type="hidden" name="signature" value='<?php echo $signature; ?>'/>
      <input type="hidden" name="orderNote" value='<?php echo $orderNote; ?>'/>
      <input type="hidden" name="orderCurrency" value='<?php echo $orderCurrency; ?>'/>
      <input type="hidden" name="customerName" value='<?php echo $customerName; ?>'/>
      <input type="hidden" name="customerEmail" value='<?php echo $customerEmail; ?>'/>
      <input type="hidden" name="customerPhone" value='<?php echo $customerPhone; ?>'/>
      <input type="hidden" name="orderAmount" value='<?php echo $orderAmount; ?>'/>
      <input type ="hidden" name="notifyUrl" value='<?php echo $notifyUrl; ?>'/>
      <input type ="hidden" name="returnUrl" value='<?php echo $returnUrl; ?>'/>
      <input type="hidden" name="appId" value='<?php echo $appId; ?>'/>
      <input type="hidden" name="orderId" value='<?php echo $orderId; ?>'/>
  </form>
</body>
</html>