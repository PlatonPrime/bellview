<?php 
session_start();
    error_reporting(E_ALL & ~E_NOTICE);

	if(isset($_POST['token'])) {
		$Rid="";
    $Rid=$_SESSION['RIDDaSH'];
		require '../database/config.php';
		$db = new DbConnect;
		$conn = $db->connect();
		$cdate = date('Y-m-d');
		$stmt = $conn->prepare('INSERT INTO tokens VALUES(null, :token, :cdate, :rid)');
		$stmt->bindParam(':token', $_POST['token']);
		$stmt->bindParam(':cdate', $cdate);
		$stmt->bindParam(':rid', $Rid);
		if($stmt->execute()) {
			echo 'Token Saved..';
		} else {
			echo 'Failed to saved token..';
		}
	}

 ?>
