<!DOCTYPE html>
<html lang="en">

<head>
    
<style>
    #myInput {
  background-image: url('../../assets/images/icon/searchicon.png');
  background-position: 20px 20px;
  background-repeat: no-repeat;
  width: 75%;
  font-size: 16px;
  padding: 10px 20px 10px 40px;
  border: 2px solid #ddd;
  border-radius: 10px;
}
    .selected {
    background-color: brown;
    color: #FFF !important;
}
   
    
    #show11{
        margin-top:-35px;
    }
        @media only screen and (max-width: 48em) {     
            #log{
     width: 40%;
                float: left;
    } 
            
        }
@media only screen and (max-width: 39.375em) {
    #log{
     width: 50%;
        float: left;
        margin-top: 10px;
    } 
    #dashboardid{
        margin-top: -60px;
    }
    
    
     #show11{
        margin-top:-55px;
    }
    #ord{
        display: none;
    }
    #myInput{
        width: 100%;
    }
    
    #mainto{
        margin-top: -25px;
    }
    }

    .btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
}
    </style>
    
    
</head>

<body>
                         
<table class="table table-borderless table-data3" id="hi">
                                        <thead>


                                            <tr>
                                                <th>Caption Name</th>
                                                
                                                
                                                <th>View/Delete</th>
                                                
                                            </tr>
                                        </thead>
                                             <tbody  >
                                             	<?php include_once '../../database/config.php'; 
   $sql = mysqli_query($conn, "SELECT * FROM revenue");
  while($row = mysqli_fetch_assoc($sql)){
  ?>
                                            <tr >
                                                <td><?php echo $row['desc']; ?></td>
                                                
                                                <td>
                                                <button type="button" class="btn btn-primary btn-circle editing" data-datac='<?php echo $row['CID']; ?>' ><i class="fa fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-circle deleting" data-datac='<?php echo $row['CID']; ?>' ><i class="fa fa-trash"></i>
                            </button>

                                                </td>
                                            </tr>
                                        
<?php } ?>
                                        </tbody>
                                    </table>
                       



                      

    <script>
$(".editing").click(function () {
    var key = $(this).attr("data-datac");
    /*alert(key);*/
    $.ajax({  
        url: "php/editAddons.php",
        type: "POST",
        data: { album: key },
        cache: false,
        success: function(html) {
                    $("#modalView1").html(html).show();

                    $('#myModal11').modal('show');
                    //$("#docup").html(html);
                }
    
});

    

});

$(".deleting").click(function () {
    var key = $(this).attr("data-datac");
    
    if (confirm('Are you sure, You Want to delete?')) {
    		$.ajax({  
        url: "php/deleteAddons.php",
        type: "post",
        data: { album: key },
        cache: false,
        success: function(html) {
                   if(html==1){
                   	alert("The Adds has been removed");
                   	loadFirmwareData();
                   }else{
                   	alert("The unable to remove ADDS");
                   }
                }
    
});
		
	} 

});
</script>
    
       
</body>
<script>
	if (typeof(Storage) !== "undefined") {
  var elem=localStorage.getItem("programming");
  if(elem!=null){
    
    //alert(elem);
  }else{
    window.location.replace("login.html");
  }
} else {
  window.location.replace("login.html");
}
</script>
</html>
<!-- end document-->