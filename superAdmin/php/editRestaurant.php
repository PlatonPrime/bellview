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
   $sql = mysqli_query($conn, "SELECT * FROM restauantname where Rest_id='$key'");
  while($row = mysqli_fetch_assoc($sql)){
  ?>
<!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?php echo $row['Rest_name'] ?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
		<div class="modal-body">

			<div class="circular--portrait" style="display: block;margin-left: auto;margin-right: auto;">
  					<img src="<?php echo '../upload/restaurant_image/'.$row['Rest_img'] ?>" />
				</div>
				<form id="modalForm" >
 
      <input type="hidden" class="form-control"  value="<?php echo $row['Rest_id']; ?>" id="rest_id1" name="rest_id1">
    <div class="form-group">
      <label for="pwd">Address</label>
      <input type="text" class="form-control" id="rest_address" placeholder="Enter the Address" name="rest_address" value="<?php echo $row['Rest_addr'] ?>" autocomplete="off">
    </div>
    
    <div class="form-group">
      <label for="pwd">Pin code</label>
      <input type="text" class="form-control" id="rest_pin" placeholder="Enter the Pin Code" name="rest_pin" value="<?php echo $row['Rest_pincode'] ?>" maxlength=6 onkeypress="return event.charCode >= 48 && event.charCode <= 57" autocomplete="off">
    </div>

    	<div class="form-group">
      <label for="pwd">Contact Number</label>
      <input type="text" class="form-control" id="rest_contact" placeholder="Enter the Contact Number" name="rest_contact" value="<?php echo $row['Rest_contact'] ?>" maxlength=10 onkeypress="return event.charCode >= 48 && event.charCode <= 57" autocomplete="off">
    </div>

    <div class="form-group">
      <label for="pwd">Number of Tables</label>
      <input type="text" class="form-control" id="rest_tables" placeholder="Enter the number of tables" name="rest_tables" value="<?php echo $row['Rest_tables'] ?>" maxlength=2 onkeypress="return event.charCode >= 48 && event.charCode <= 57" autocomplete="off">
    </div>

    <div class="form-group">
      <label for="pwd">GST Number</label>
      <input type="text" class="form-control" id="rest_gst" placeholder="Enter the GST Number" name="rest_gst" value="<?php echo $row['GST'] ?>" autocomplete="off">
    </div>
<div class="form-group text-center" style="display: block;margin-left: auto;margin-right: auto;">
    <button type="submit" class="btn btn-primary updating" >Update</button>
    
</div>
  </form>

</div>
<?php } ?>

</body>

<script>
	$("#modalForm").submit(function(event){
    	    event.preventDefault();
        	var restid = $('#rest_id1').val(); 
        	var restaddress = $('#rest_address').val(); 
        	var restpincode = $('#rest_pin').val(); 
        	var restcontact = $('#rest_contact').val(); 
        	var resttables = $('#rest_tables').val(); 
        	var restgst = $('#rest_gst').val(); 

        	if(restid!="" && restaddress!="" && restpincode!="" && restcontact!="" && resttables!="" && restgst!=""){

            
        		$.ajax({  
        			url: "php/updateRestaurant.php",
        			type: "POST",
        			data:new FormData(this),
              contentType:false,
              processData:false,
        			success: function(html) {
                   		if(html==1){
                   			$('#myModal').modal('hide');
                   			alert("The Restarant has been updated");
                   			loadFirmwareData();
                   		}else{
                   			alert("The unable to update Restarant Deatils");
                   		}
                }
    
});
        	}else{
        		alert("Enter the Fields Properly");
        	}


        });
</script>


</html>