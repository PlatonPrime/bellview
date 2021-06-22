<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
$Rid=$_SESSION['val1'];
if($Rid==""){
    $_SESSION['val1']=$_GET['dashid'];
    $Rid=$_SESSION['val1'];
}


?>
<!DOCTYPE html>
<html lang="en">
 <head>
    
    <link href="../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<script
    src="http://code.jquery.com/jquery-1.8.3.min.js"
    
  ></script>
    
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


<?php
require_once "../../database/config.php";
//require_once 'send.php?rid=Crea85';
echo "<div class='row' >
                            <div class='col-lg-8' >
                                <h2 class='title-2 m-b-25' id='orde'>Orders</h2> ";
echo '<form method="post" style="margin-top:-60px;" >
                                      <!--  <input type="button" name="CANCEL" id="cancel_click" style="float:right;margin-left: 20px;" class="btn btn-outline-success cancel" value="CANCEL"> -->
                                        <input type="button" name="OK" id="click" style="float:right;" class="btn btn-outline-success ok" value="Deliver">
                                     
                                        </form>';

                                echo "<div class='table-responsive table--no-card m-b-40' style='padding-top:25px;'>
                                    <table class='table table-borderless' id='myTable'>
                                        <thead class='table table-borderless table-earning' style='background-color:black;color:white' >
                                             
                                            <tr>
                                                <th style='text-align:center'>Table No.</th>
                                                <th style='text-align:center'>Order</th>
                                                <th style='text-align:center' >No. of Quantity</th>
                                        </thead>
                                        
                                        <tbody id='myTable12' >";
                                             
                
                /*$sqlimage= "SELECT *
from add_cart ad, user_pay up
WHERE ad.RUID=up.RUID and ad.Rest_id='".$Rid."'
ORDER by  ad.Date ASC LIMIT 10";*/
$dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
        $dateObj->setTimeZone(new DateTimeZone('Asia/Kolkata'));
        $da=$dateObj->format('Y-m-d h:i:sa');
        $da1=$dateObj->format('h');
        $da2=$dateObj->format('i');
        $daa=($da1.$da2);

    $sqlimage= "SELECT * from add_cart ad, user_pay up WHERE ad.RUID=up.RUID and ad.Rest_id='".$Rid."' and ad.RPR_Date<='".$daa."' ORDER by  ad.RPR ASC,ad.Date ASC LIMIT 10"; 
    //echo $sqlimage;exit();
                $imageresult1 = mysqli_query($conn, $sqlimage);
                $i=0;
                while($rows=mysqli_fetch_assoc($imageresult1))
                {
                    $i++;
                    
                    $RTID[$i] = $rows['TID'];
                    $RPName[$i] = $rows['PName'];
                    $Qty[$i] = $rows['qty'];
                    $ruid[$i] = $rows['RUID'];
                    $rpid[$i] = $rows['RPID'];
                    $rpr[$i] = $rows['RPR'];
                    $dd[$i] = $rows['RPR_Date'];
                    
                }

                if($i>0)              
                {
                for($j=1;$j<=$i;$j++)  { 
                    echo "<tr style='text-align:center'>";
                    echo "<td style='text-align:center'>".$RTID[$j]."</td>" ;
                    echo "<td style='text-align:left'>".$RPName[$j]."</td>" ;
                    echo "<td style='text-align:center'>".$Qty[$j]."</td>" ;
                    echo "<td style='display:none'>".$ruid[$j]."</td>" ;
                    echo "<td style='display:none'>".$rpid[$j]."</td>" ;
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
                
                                                
                        echo "                </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                            
                            
                            <div class='col-lg-4'>
                                <h2 class='title-2 m-b-25'>Items</h2>
                                <div class='au-card au-card--bg-blue au-card-top-countries m-b-40'>
                                    <div class='au-card-inner'>
                                        <div class='table-responsive'>
                                            <table class='table table-top-countries'>
                                                <tbody>";
              $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
        $dateObj->setTimeZone(new DateTimeZone('Asia/Kolkata'));
        $da=$dateObj->format('Y-m-d h:i:sa');
        $da1=$dateObj->format('h');
        $da2=$dateObj->format('i');
        $daa=($da1.$da2);
                $sqlimage1= "SELECT ad.PName, sum(ad.qty) as ss
from add_cart ad, user_pay up
WHERE ad.RUID=up.RUID and ad.Rest_id='".$Rid."' and ad.RPR_Date<='".$daa."' 
GROUP BY ad.RPID";
                
                
                
              
                $imageresult1 = mysqli_query($conn, $sqlimage1);
                $i=0;
                while($rows=mysqli_fetch_assoc($imageresult1))
                {
                    $i++;
                    
                    $RTID[$i] = $rows['PName'];
                    $RPName[$i] = $rows['ss'];
                    
                    
                }
                if($i>0)              
                {
                for($j=1;$j<=$i;$j++)  { 
                    echo "<tr>";
                    echo "<td>".$RTID[$j]."</td>" ;
                    echo "<td>".$RPName[$j]."</td>" ;
                    
                    echo "</tr>";
                    
                    }
                }
                                            else{
                                                echo "<tr>";
                    echo "<td colspan='2' style='text-align:center'>No Order yet right now</td>" ;
                    
                    echo "</tr>";
                                            }
                
                                                    
                                                    
                echo "                               </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>";
                

?>
    <script type="text/javascript">
        
        $("#myTable12 tr").click(function(){
            clearInterval(ana);
            $(this).toggleClass('selected');
            //$(this).toggleClass({ 'background-color': '#4CAF50' }); 
            var value = $(this).find('td:nth-child(4)').html();
            var value1 = $(this).find('td:nth-child(5)').html();
  //          alert(value+"\n"+value1);
        });
        
        $('.ok').on('click', function(e) {
         // $("#click").attr("disabled", false);
             var selected = [];
        var selected1 = [];
            $("#myTable12 tr.selected").each(function() {
                selected.push($('td:nth-child(4)', this).html());
                selected1.push($('td:nth-child(5)', this).html());
                
                
            });
            
         var jsonString = JSON.stringify(selected);
         var jsonString1 = JSON.stringify(selected1);
                var ss=selected1.length ;
                    $.ajax({
                        url: 'php/deliverOrder.php',
                        type: 'POST',
                        data: {data : jsonString,data1 : jsonString1},
                        success: function(response){
                            // alert("Sucess");
                            location.reload(true); 
                        }
                    });
                   
                
        });
        
        
    /*    $('.cancel').on('click', function(e) {
         // $("#click").attr("disabled", false);
             var selected = [];
        var selected1 = [];
            $("#myTable12 tr.selected").each(function() {
                selected.push($('td:nth-child(4)', this).html());
                selected1.push($('td:nth-child(5)', this).html());
                
                
            });
            
         var jsonString = JSON.stringify(selected);
         var jsonString1 = JSON.stringify(selected1);
                var ss=selected1.length ;
                    $.ajax({
                        url: 'php/cancel.php',
                        type: 'POST',
                        data: {data : jsonString,data1 : jsonString1},
                        success: function(response){
                            //alert("Sucess");
                            location.reload(true); 
                        }
                    });
                   
                
        });
        */
        

</script>
</html>