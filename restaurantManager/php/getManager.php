<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
$Rid=$_SESSION['val1'];
$CRID=$_SESSION['val2'];
   
if($Rid=="" || $CRID==""){
    $_SESSION['val1']=$_GET['dashid'];
    $_SESSION['val2']=$_GET['dashid22'];
    $Rid=$_SESSION['val1'];
    $CRID=$_SESSION['val2'];
    
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    
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
    <style> 
        .selected {
            background-color: #4CAF50;
            color: #FFF !important;
        }
        #orde{
            display: none;
        }
        @media only screen and (max-width: 39.375em) {
            #orde{
                display: block;
                width: 10%;
            }
        }
        </style>
    </head> 
<body>

<?php

    require_once "../../database/config.php";
    echo "<div class='row' >
              <div class='col-lg-12'>
                  <h2 class='title-2 m-b-25' id='orde'>Orders</h2>
                  <div class='table-responsive table--no-card m-b-40'>
                      <table class='table table-borderless ' id='myTable'>
                        <thead class='table table-borderless table-earning' style='background-color:black;color:white' >
                            <tr>
                                <th style='text-align:center'>Table No.</th>
                                <th style='text-align:center'>Name</th>
                                <th style='text-align:center' >Phone Nuumber</th>
                                <th style='text-align:center' >Total Cost</th>
                                <th style='text-align:center' >Coupon Code</th>
                                
                            </tr>
                        </thead>
                        <tbody id='myTable12' >";
                        /*$sqlimage= "SELECT * from add_cart ad, user_pay up WHERE ad.RUID=up.RUID and ad.Rest_id='".$Rid."' ORDER by  ad.Date ASC LIMIT 10";*/
                        $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
                        $dateObj->setTimeZone(new DateTimeZone('Asia/Kolkata'));
                        $da1=$dateObj->format('H');
                        $da2=$dateObj->format('i');
                        $daa=($da1.$da2);
                        $sqlimage= "select * from add_cart ad, cash_pay up WHERE ad.RUID=up.PUID and ad.Rest_id='".$Rid."' and ad.RPR_Date<='".$daa."' and up.status='0' group by up.PUID ORDER by  ad.RPR ASC,ad.Date ASC LIMIT 10 "; 
                        $imageresult1 = mysqli_query($conn, $sqlimage);
                        $i=0;
                        while($rows=mysqli_fetch_assoc($imageresult1))
                        {
                            $i++;
                            $RTID[$i] = $rows['TID'];
                            $RIUID[$i] = $rows['PUID'];
                            $RPName[$i] = $rows['PUName'];
                            $Qty[$i] = $rows['PUPhone'];
                            $ruid[$i] = $rows['TotalCost'];
                            $coupon_code[$i] = $rows['coupon_code'];
                            $subtotal[$i] = $rows['subtotal'];
                            $discount_amount[$i] = $rows['discount_amount'];
                            $discount_type[$i] = $rows['discount_type'];
                            $discount_value[$i] = $rows['discount_value'];

                        }




                $sqlimage12= "SELECT *  FROM cash_on_deliver where cid='$CRID' and   cresid='$Rid'";
                $imageresult12 = mysqli_query($conn, $sqlimage12);
                while($rows=mysqli_fetch_assoc($imageresult12))
                {
                    $rn=$rows['cname'];
                    
                    $rp=$rows['cphone'] ; 
                }

                        if($i>0)              
                        {
                            for($j=1;$j<=$i;$j++)  { 
                                echo "<tr style='text-align:center'>";
                                    echo "<td style='text-align:center'>".$RTID[$j]."</td>" ;
                                    echo "<td style='text-align:center'>".$RPName[$j]."</td>" ;
                                    echo "<td style='text-align:center'>".$Qty[$j]."</td>" ;
                                    echo "<td style='text-align:center'>".$ruid[$j]."</td>" ;
                                     
                                    echo "<td style='display:none'>".$rn."</td>" ;
                                    echo "<td style='display:none'>".$rp."</td>" ;
                                   echo "<td style='display:none'>".$RIUID[$j]."</td>" ;
                                   echo "<td style='display:none'>".$CRID."</td>" ;
                                   echo "<td style='display:none'>".$Rid."</td>" ;
                                   echo "<td style='display:none'>".$coupon_code[$j]."</td>" ;
                                   echo "<td style='display:none'>".$subtotal[$j]."</td>" ;
                                   echo "<td style='display:none'>".$discount_amount[$j]."</td>" ;
                                   echo "<td style='display:none'>".$discount_type[$j]."</td>" ;
                                   echo "<td style='display:none'>".$discount_value[$j]."</td>" ;
                                   echo "<td>";
                                    if(!empty($coupon_code[$j])){

                                        if($discount_type[$j] == "Percentage"){
                                            $discountDescription = "(".$discount_value[$j]."% Discount)";
                                        } else {
                                            $discountDescription = "(".$discount_value[$j]."₹ Fix Discount)";
                                        }

                                        echo "Coupon Code : ".$coupon_code[$j]."<br>";
                                        echo "Subtotal : ".$subtotal[$j]."<br>";
                                        echo "Discount : ".$discount_amount[$j]." ".$discountDescription;
                                    } else {
                                        echo "-";
                                    }
                                    echo "<td>";
                                
                                    //   echo "<td style='text-align:center'>".$rpr[$j]."</td>" ;
                                    //    echo "<td style='text-align:center'>".$dd[$j]."</td>" ;
                                    //echo "<td style='text-align:center'><a href='php/delete.php?ruid=".$ruid[$j]."&rpid=".$rpid[$j]."'>Delivered</a></td>" ;
                                 echo "</tr>";
                            }
                        }
                        else{
                            echo "<tr>";
                                echo "<td colspan='4' style='text-align:center'>No Order yet right now</td>" ;
                            echo "</tr>";
                        }
                    echo "</tbody>                      </table>
                                </div>
                            </div>
                            
                            
                         
                        </div>";






?>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
        
        $("#myTable12 tr").click(function(){
            clearInterval(ana);
            $(this).toggleClass('selected');
            //$(this).toggleClass({ 'background-color': '#4CAF50' }); 
            
            var value  = $(this).find('td:nth-child(7)').html();
            var value1 = $(this).find('td:nth-child(2)').html();
            var value2 = $(this).find('td:nth-child(3)').html();
            var value3 = $(this).find('td:nth-child(4)').html();
            var value4 = $(this).find('td:nth-child(8)').html();
            var value5 = $(this).find('td:nth-child(9)').html();
            var value6 = $(this).find('td:nth-child(10)').html();
            var value7 = $(this).find('td:nth-child(11)').html();
            var value8 = $(this).find('td:nth-child(12)').html();
            var value9 = $(this).find('td:nth-child(13)').html();
            var value10 = $(this).find('td:nth-child(14)').html();
           // alert(value+"\n"+value1+"\n"+value2+"\n"+value3+"\n"+value4+"\n"+value5+"\n"+value6+"\n"+value7+"\n"+value8+"\n"+value9+"\n"+value10);
           // return false;
        });
        
        $('.ok').on('click', function(e) {
         // $("#click").attr("disabled", false);
            var selected = [];
        var selected1 = [];
        var selected2 = [];
        var selected3 = [];
        var selected4 = [];
        var selected5 = [];
        var selected6 = [];
        var selected7 = [];
        var selected8 = [];
        var selected9 = [];
        var selected10 = [];
            $("#myTable12 tr.selected").each(function() {
                selected.push($('td:nth-child(7)', this).html());
                selected1.push($('td:nth-child(2)', this).html());
                selected2.push($('td:nth-child(3)', this).html());
                selected3.push($('td:nth-child(4)', this).html());
                selected4.push($('td:nth-child(8)', this).html());
                selected5.push($('td:nth-child(9)', this).html());
                selected6.push($('td:nth-child(10)', this).html());
                selected7.push($('td:nth-child(11)', this).html());
                selected8.push($('td:nth-child(12)', this).html());
                selected9.push($('td:nth-child(13)', this).html());
                selected10.push($('td:nth-child(14)', this).html());
            });
            
         var jsonString = JSON.stringify(selected);
         var jsonString1 = JSON.stringify(selected1);
         var jsonString2 = JSON.stringify(selected2);
         var jsonString3 = JSON.stringify(selected3);
         var jsonString4 = JSON.stringify(selected4);
         var jsonString5 = JSON.stringify(selected5);
         var jsonString6 = JSON.stringify(selected6);
         var jsonString7 = JSON.stringify(selected7);
         var jsonString8 = JSON.stringify(selected8);
         var jsonString9 = JSON.stringify(selected9);
         var jsonString10 = JSON.stringify(selected10);
        var ss=selected1.length ;
            $.ajax({
                url: 'php/deleteOrder.php',
                type: 'POST',
                data: {data : jsonString, data1 : jsonString1, data2 : jsonString2, data3 : jsonString3, data4 : jsonString4, data5 : jsonString5, data6 : jsonString6, data7 : jsonString7, data8 : jsonString8, data9 : jsonString9, data10 : jsonString10},
                success: function(response){
                    //alert("Sucess");
                    //ajaxCall1();
                    location.reload(true); 
                }
            }); 
        });
        
        $('.cancel').on('click', function(e) {
         // $("#click").attr("disabled", false);
             var selected = [];
        var selected1 = [];
        var selected2 = [];
        var selected3 = [];
        var selected4 = [];
            $("#myTable12 tr.selected").each(function() {
                
                selected.push($('td:nth-child(7)', this).html());
                selected1.push($('td:nth-child(2)', this).html());
                selected2.push($('td:nth-child(3)', this).html());
                selected3.push($('td:nth-child(4)', this).html());
                selected4.push($('td:nth-child(8)', this).html());
            });
            
         var jsonString = JSON.stringify(selected);
         var jsonString1 = JSON.stringify(selected1);
         var jsonString2 = JSON.stringify(selected2);
         var jsonString3 = JSON.stringify(selected3);
         var jsonString4 = JSON.stringify(selected4);
                var ss=selected1.length ;
                    $.ajax({
                        url: 'php/cancel.php',
                        type: 'POST',
                        data: {data : jsonString, data1 : jsonString1, data2 : jsonString2, data3 : jsonString3, data4 : jsonString4},
                        success: function(response){
                            //alert("Sucess");
                            //ajaxCall1();
                            location.reload(true); 
                        }
                    });
                   
                
        });
        


 
        $(".ok").click(function(){
            $.ajax({
               url  :   "action.php",
               method:  "POST",
               data :   {catbtn:1,allproduct:1,getProduct:1},
               success  :   function(data){
                   $("#get_product").show();
                   $("#get_product").html(data);
                   $('#txtHint2').hide();
                   $("#txtHint3").hide();
                   location.reload(true); 
               }
           })          
        })
</script>
</html>