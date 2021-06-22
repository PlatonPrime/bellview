<?php
  include_once '../../database/config.php';
  $name1=$_POST['resemail'];
  $name2=$_POST['respwd'];

  $sql = "SELECT bid FROM bellview_login where email='$name1' and password='$name2' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["bid"];
    }
} else {
    echo "0";
}
?>