<html>
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
     </style>
  
    </head> 

    
    <div class='row' >
                            <div class='col-lg-12'>
                                <h2 class='title-2 m-b-25' id='orde'>Orders</h2>
                                <div class='table-responsive table--no-card m-b-40'>
                                                 
                                    <table class='table table-borderless ' id='myTable'>
                                        <thead class='table table-borderless table-earning' style='background-color:black;color:white' >
                                             
                                            <tr>
                                                <th style='text-align:center'>Table No.</th>
                                                <th style='text-align:center'>Name</th>
                                                <th style='text-align:center' >Phone No.</th>
                                                <th style='text-align:center' >Total Cost</th>
                                                <th style='text-align:center' >Order ID</th>
                                        </thead>
                                        
                                        <tbody >
                                             
                
         <?php     
         include_once "../../database/config.php"; 
         $key=$_POST['key'];
         $point=$_POST['point'];
         if($point==1){
         $sqlimage= "SELECT co.Name as Name, co.PhoneNumber as Phone, co.Total_Cost as Total_Cost, ru.Rest_TB_ID as TablNo, cf.order_id as orders, co.RUID as RUID from cancel_oder co, rest_user ru, cashfree cf WHERE co.RUID=cf.user_id AND cf.user_id=ru.Rest_User_Id and ru.Rest_id='$key' order by cf.Transaction_time desc";

    /*$sqlimage= "SELECT co.Name as Name, co.PhoneNumber as Phone, co.Total_Cost as Total_Cost, ru.Rest_TB_ID as TablNo, co.RUID as RUID from cancel_oder co, rest_user ru where co.RUID=ru.Rest_User_Id and ru.Rest_id='$key' order by Date desc"; */
    
                $imageresult1 = mysqli_query($conn, $sqlimage);
                $i=0;
                while($rows=mysqli_fetch_assoc($imageresult1))
                { ?>
                   
                    <tr style='text-align:center'>
                    <td style='text-align:center'><?php echo $rows['TablNo']; ?></td>
                    <td style='text-align:center'><?php echo $rows['Name']; ?></td>
                    <td style='text-align:center'><?php echo $rows['Phone']; ?></td>
                    <td style='text-align:center'><?php echo $rows['Total_Cost']; ?></td>
                    <td style='text-align:center'><?php echo $rows['orders']; ?></td>
                    <!-- <td style='text-align:center'><button type="button" class="btn btn-danger btn-circle deletingadds" data-datac='<?php echo $rows['RUID']; ?>' >Refund
                            </button></td> -->
                    </tr>
                <?php } }
if($point==2) {

            
    $sqlimage= "SELECT co.Name as Name, co.PhoneNumber as Phone, co.Total_Cost as Total_Cost, ru.Rest_TB_ID as TablNo, co.RUID as RUID from cancel_oder co, rest_user ru where co.RUID=ru.Rest_User_Id and ru.Rest_id='$key' and status=0 order by Date desc"; 
    
                $imageresult1 = mysqli_query($conn, $sqlimage);
                $i=0;
                while($rows=mysqli_fetch_assoc($imageresult1))
                { ?>
                   
                    <tr style='text-align:center'>
                    <td style='text-align:center'><?php echo $rows['TablNo']; ?></td>
                    <td style='text-align:center'><?php echo $rows['Name']; ?></td>
                    <td style='text-align:center'><?php echo $rows['Phone']; ?></td>
                    <td style='text-align:center'><?php echo $rows['Total_Cost']; ?></td>
                    <td style='text-align:center'><button type="button" class="btn btn-danger btn-circle deletingadds" data-datac='<?php echo $rows['RUID']; ?>' >Refund
                            </button></td>
                    </tr>
                <?php }
$sqlimage= "SELECT co.Name as Name, co.PhoneNumber as Phone, co.Total_Cost as Total_Cost, ru.Rest_TB_ID as TablNo, co.RUID as RUID from cancel_oder co, rest_user ru where co.RUID=ru.Rest_User_Id and ru.Rest_id='$key' and status=1 order by Date desc"; 
    
                $imageresult1 = mysqli_query($conn, $sqlimage);
                $i=0;
                while($rows=mysqli_fetch_assoc($imageresult1))
                { ?>
                   
                    <tr style='text-align:center'>
                    <td style='text-align:center'><?php echo $rows['TablNo']; ?></td>
                    <td style='text-align:center'><?php echo $rows['Name']; ?></td>
                    <td style='text-align:center'><?php echo $rows['Phone']; ?></td>
                    <td style='text-align:center'><?php echo $rows['Total_Cost']; ?></td>
                    <td style='text-align:center'><button type="button" class="btn btn-primary btn-circle deletingadds"  disabled>Refunded  </button></td>
                    </tr>
                <?php }

                 }?>                      
                               </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                           
                        </div>

    <script type="text/javascript">
        
       $(".deletingadds").click(function () {
    var key = $(this).attr("data-datac");
    
    if (confirm('Are you Refund the money?')) {
            $.ajax({  
        url: "../php/refund.php",
        type: "post",
        data: { album: key },
        success: function(html) {
                   if(html==1){
                    
                    alert("The Amount has been Refunded");
                    loadFirmwareData();
                   }else{
                    alert("The unable to remove User name");
                   }
                }
    
});
        
    }

});

</script>
</html>