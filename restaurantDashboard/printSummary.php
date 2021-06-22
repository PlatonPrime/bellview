<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
$i1=$_GET['i1'];
$i2=$_GET['i2'];
if($i1=="" && $i2==""){
    $_SESSION['val1']=$_GET['i1'];
    $_SESSION['val2']=$_GET['i2'];
    $i1=$_SESSION['val1'];
    $i2=$_SESSION['val2'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        html{
        display: flex;
        flex-flow: row nowrap;  
        justify-content: center;
        align-content: center;
        align-items: center;
        
        margin: 0;
        padding: 0;
        background:#fff;
    }
 
        .header img {
  float: left;
  width: 75px;
  height: 75px;
  background: #555;
}

.header h3 {
  position: relative;
  top: 25px;
  left: 10px;
}
    </style>
</head>
<body>

    <div class="container">
  <?php 
require_once "../database/config.php";
$sqlimage= "SELECT *  FROM restauantname where  Rest_id='$i1'";
$imageresult1 = mysqli_query($conn, $sqlimage);
while($rows=mysqli_fetch_assoc($imageresult1))
{
    $image = $rows['Rest_img'];
    $RA = $rows['Rest_addr'];
    $gst = $rows['GST'];
    echo '<div id="photo" style="text-align: center">
  <img style="vertical-align:middle" src="../upload/restaurant_image/'.$image.'" alt="" width="10%">
  <span style="vertical-align:middle;font-size:25px">'.$rows['Rest_name'].'</span>
</div><div id="photo" style="text-align: center"> <p>'.$RA.' </p> </div> <div id="photo" style="text-align: center"> <p>GSTN: '.$gst.' </p> </div>';
}

            ?>           
  <table class="table">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Cost</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <?php
$amt=0;
$tot=0;
$tax=0;
$cgst=0;
$sgst=0;
$grandtotal=0;
$gstval=0;

$sql123 = "SELECT sum(GST) as GST FROM del_cart ad WHERE ad.Rest_id='".$i1."' and ad.RUID='".$i2."' ";
                    $result1 = mysqli_query($conn, $sql123);
                    
                    while ($order1 = mysqli_fetch_assoc($result1)) {

$gstval=$order1['GST'];

                      }
$sql12 = "SELECT SHORTNAME as p1, qty as p2,rp.RPCost as p3, (qty*rp.RPCost) as p4 FROM del_cart ad, restauantproduct rp WHERE ad.Rest_id='".$i1."' and ad.RUID='".$i2."' and ad.Rest_id=rp.Rest_id and ad.RPID=rp.RPID";
                    $result = mysqli_query($conn, $sql12);
                    
                    while ($order = mysqli_fetch_assoc($result)) {
                        echo    '<tr><td>'. $order['p1']. '</td>';
                        echo    '<td>'. $order['p2']. '</td>';
                        echo    '<td>'. $order['p3'] .'</td>';
                        echo    '<td>'. $order['p4'] .'</td> </tr>';
                        $amt=$amt+$order['p4'];
                    }

                    $sql = "SELECT * FROM `user_pay` WHERE `RUID` = '".$i2."'";
                    $data = mysqli_query($conn, $sql);
                    while ($orderData = mysqli_fetch_assoc($data)) {
                        $coupon_code = $orderData['coupon_code'];
                        $subtotal = $orderData['subtotal'];
                        $discount_amount = $orderData['discount_amount'];
                        $discount_type = $orderData['discount_type'];
                        $discount_value = $orderData['discount_value'];
                    }

                    if(!empty($coupon_code)){
                      if($discount_type[$j] == "Percentage"){
                          $discountDescription = "(".$discount_value."% Discount)";
                      } else {
                          $discountDescription = "(".$discount_value."₹ Fix Discount)";
                      }
                    }

                    $tot=round($amt);

                    $taxVal = 3;
                    $tax =round(($taxVal / 100) * $tot);

                    
                    $cgst = round(($gstval / 100) * $tot);

                    $sgst = round(($gstval / 100) * $tot);

                    if(!empty($coupon_code)){
                      $grandtotal=$tot+$tax+$cgst+$sgst-$discount_amount;
                    } else {
                      $grandtotal=$tot+$tax+$cgst+$sgst;
                    }
?>
<tr>
    <td colspan="2"></td>
    <td  style="text-align: center;font-weight: bold;">Total Bill</td>
            <td style="font-weight: bold;"><?php echo $tot; ?></td>
  </tr>
<?php if(!empty($coupon_code)){ ?>
<tr>
  <td colspan="2"></td>
  <td  style="text-align: center;font-weight: bold;"><?php echo $discountDescription; ?></td>
          <td style="font-weight: bold;"><?php echo $discount_amount; ?></td>
</tr>
<?php } ?>
<tr>
    <td colspan="2"></td>
    <td  style="text-align: center;font-weight: bold;">(Service Tax)</td>
    <td> <?php echo $tax; ?> </td>
  </tr>
  <tr>
    <td colspan="2"></td>
    <td  style="text-align: center;font-weight: bold;">CGST</td>
            <td><?php echo $cgst; ?></td>
  </tr>
  <tr>
    <td colspan="2"></td>
    <td  style="text-align: center;font-weight: bold;">SGST</td>
            <td><?php echo $sgst; ?></td>
  </tr>

  <tr>
    <td colspan="2"></td>
    <td  style="text-align: center;font-weight: bold;">Grand Total</td>
            <td><?php echo $grandtotal; ?></td>
  </tr>
    </tbody>
  </table>
</div>
<div id="photo" style="text-align: center"> <p>----THANK YOU---- </p><p>Visit us again </p> </div>
</body>
</html>