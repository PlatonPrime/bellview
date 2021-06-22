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
    <link href="../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
<style>
	@media (min-width:320px)  {
		.circular--portrait {
  position: relative;
  width: 40vw;
  height: 40vw;
  overflow: hidden;
  border-radius: 50%;
}
.circular--portrait img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

 }
@media (min-width:480px)  {
.circular--portrait {
  position: relative;
  width: 10vw;
  height: 10vw;
  overflow: hidden;
  border-radius: 50%;
}
.circular--portrait img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
 }
@media (min-width:600px)  { 
.circular--portrait {
  position: relative;
  width: 15vw;
  height: 15vw;
  overflow: hidden;
  border-radius: 50%;
}
.circular--portrait img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
 }
@media (min-width:801px)  { 
.circular--portrait {
  position: relative;
  width: 15vw;
  height: 15vw;
  overflow: hidden;
  border-radius: 50%;
}
.circular--portrait img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
 }
@media (min-width:1025px) { 

.circular--portrait {
  position: relative;
  width: 10vw;
  height: 10vw;
  overflow: hidden;
  border-radius: 50%;
}
.circular--portrait img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

 }
@media (min-width:1281px) {
.circular--portrait {
  position: relative;
  width: 10vw;
  height: 10vw;
  overflow: hidden;
  border-radius: 50%;
}
.circular--portrait img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

 }



.circular--portrait:after {
  content: " ";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 99;
}
</style>
</head>
<body>
<?php include_once '../../database/config.php'; 
$key=$_POST['album'];
   $sql = mysqli_query($conn, "SELECT * FROM revenue where CID='$key'");
  while($row = mysqli_fetch_assoc($sql)){
  ?>
<!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?php echo $row['desc'] ?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
		<div class="modal-body">

			<div class="circular--portrait" style="display: block;margin-left: auto;margin-right: auto;">
            <img src="<?php echo '../upload/addons_image/'.$row['Image'] ?>" />
				</div>
				
  

</div>
<?php } ?>
</body>
</html>