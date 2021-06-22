<!DOCTYPE html>
<html>
  <head>
    <link href="../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
    <link href="../assets/css/theme.css" rel="stylesheet" media="all"> 
  </head>
  
  <body>
  <?php
    $q = $_GET['q'];
    $qq = $_GET['qq'];
    require_once "../database/config.php";
    if($q!="0"){
      $sql="SELECT * FROM add_cart WHERE Rest_id='".$qq."' and date like {'".$q."'}%";
      $result = mysqli_query($conn,$sql);
      $sqlimage="SELECT d.RUID, up.Name, up.Phone, up.Total_Cost FROM restauantproduct rp, rest_user ru, user_pay up, delivered d WHERE d.RUID=up.RUID AND rp.Rest_id=ru.Rest_id and rp.Rest_id='$qq' and d.RUID not in (SELECT RUID from add_cart) and d.Date LIKE '{$q}%' GROUP BY up.RUID order by d.Date desc";
      echo "<div class='row m-t-30'>
              <div class='col-md-12'>
                <div class='table-responsive m-b-40'>
                  <table class='table table-borderless table-data3'>
                    <thead>
                      <tr>
                        <th>SL.No.</th>
                        <th>Name</th>
                        <th>Phone No.</th>
                        <th >Orders</th>
                        <th >Total bill</th>
                      </tr>
                    </thead>
                    <tbody>";
      $imageresult1 = mysqli_query($conn, $sqlimage);
      $i=0;
      $total=0;
      while($rows=mysqli_fetch_assoc($imageresult1))
      {
        $i++;
        $RTID[$i] = $rows['RUID'];
        $RPName[$i] = $rows['Name'];
        $Qty[$i] = $rows['Phone'];
        $ruid[$i] = $rows['Total_Cost'];
        $total=$total+$ruid[$i];
      }
      if($i>0)              
      {
        for($j=1;$j<=$i;$j++)  { 
          echo "<tr>";
            echo "<td>".$RTID[$j]."</td>" ;
            echo "<td>".$RPName[$j]."</td>" ;
            echo "<td>".$Qty[$j]."</td>" ;
            $sql12 = "SELECT PName as p1, qty as p2,rp.RPCost as p3, (qty*rp.RPCost) as p4 FROM del_cart ad, restauantproduct rp WHERE ad.Rest_id='".$qq."' and ad.RUID='".$RTID[$j]."' and ad.Rest_id=rp.Rest_id and ad.RPID=rp.RPID";
            $result = mysqli_query($conn, $sql12);
            echo "<td>";
            while ($order = mysqli_fetch_assoc($result)) {
              echo $order['p1']." - ".$order['p2']." &times ". $order['p3']." = ".$order['p4'] ." <br/>";
            }
            echo "</td>";?>
            <td><?php echo $ruid[$j]; ?>  
                <iframe src="printSummary.php?i1=<?php echo $Rid; ?>&i2=<?php echo $RTID[$j]; ?>" style="display:none;" name="frame<?php echo $j ?>"></iframe>
                <button class='btn mx-2 btn-outline-info' style='border:none;' onclick="frames['frame<?php echo $j ?>'].print()">
                  <i class='fa fa-print' aria-hidden='true' ></i>
                </button>    
            </td>
          <?php  echo "</tr>";
        }
      }
      else{
        echo "<tr>";
          echo "<td colspan='5' style='text-align:center'>Please select Proper Date</td>" ;
        echo "</tr>";
      }
      echo "</tbody>
          </table>
        </div>
       </div>
      </div>";
    }
mysqli_close($conn);
?>
</body>
</html>