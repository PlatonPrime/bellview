<!DOCTYPE html>
<html>
<head>
    <!-- Fontfaces CSS-->
    <link href="../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/css/theme.css" rel="stylesheet" media="all"> 

</head>
<body>

<?php
$q = $_GET['q'];
$qq = $_GET['qq'];
require_once "../database/config.php";
if($q!="0"){
$sql="SELECT * FROM restauantproduct WHERE Rest_id='".$qq."' and RPC = '".$q."'";
$result = mysqli_query($conn,$sql);

    
echo "<div class='row m-t-30'>
       <div class='col-md-12'>
        <div class='table-responsive m-b-40'>
           <table class='table table-borderless table-data3'>
               <thead>
                 <tr>
                    <th>Item Name</th>
                    <th>Cost</th>
                    <th>Available</th>
                    <th>Edit</th>
                </tr>
             </thead>
              <tbody  >";
    while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['RPName'] . "</td>";
    echo "<td>" . $row['RPCost'] . "</td>";
        echo "<td>" . $row['RPS'] . "</td>";
    echo "    <td> <div class='table-data-feature'>
                                                    <a href='editItem.php?Pid=".$row['RPID']."' role='button' class='item' data-placement='top' title='Edit'>
                                                            <i class='zmdi zmdi-edit'></i>
                                                    </a></div></td>";
    echo "</tr>";
}
                                        
              echo "                          </tbody>
             
             
             
             
          </table>
        </div>
       </div>
      </div>";


}
else{
$sql="SELECT * FROM restauantproduct where Rest_id='".$qq."' ";
$result = mysqli_query($conn,$sql);

    
echo "<div class='row m-t-30'>
       <div class='col-md-12'>
        <div class='table-responsive m-b-40'>
           <table class='table table-borderless table-data3'>
               <thead>
                 <tr>
                    <th>Item Name</th>
                    <th>Cost</th>
                    <th>Available</th>
                    <th>Edit</th>
                </tr>
             </thead>
              <tbody  >";
    while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['RPName'] . "</td>";
    echo "<td>" . $row['RPCost'] . "</td>";
        echo "<td>" . $row['RPS'] . "</td>";
    echo "    <td> <div class='table-data-feature'>
                                                    <a href='editItem.php?Pid=".$row['RPID']."' role='button' class='item' data-placement='top' title='Edit'>
                                                            <i class='zmdi zmdi-edit'></i>
                                                    </a></div></td>";
    echo "</tr>";
}
                                        
              echo "                          </tbody>
             
             
             
             
          </table>
        </div>
       </div>
      </div>";


}

mysqli_close($conn);
?>
</body>
</html>