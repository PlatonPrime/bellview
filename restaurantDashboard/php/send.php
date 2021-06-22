<?php 
	$rid=$_GET['rid'];
	echo $rid;
	define('SERVER_API_KEY', 'AIzaSyAAN7lQMIuCbwbpevBTWOYiUiZ3cEWjm-Y');
	require '../../database/DbConnect.php';
	$db = new DbConnect;
	$conn = $db->connect();
	$stmt = $conn->prepare("SELECT * FROM tokens WHERE RID = :rid");
	$stmt->bindParam(':rid', $rid);
	$stmt->execute();
	$tokens = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach ($tokens as $token) {
		$registrationIds[] = $token['token'];
	}

	// $tokens = ['cCLA1_8Inic:APA91bGhuCksjWEETYWVOh04scsZInxdWmXekEr5F9-1zJuTDZDw3It_tNmpA__PmoxDTISZzplD_ciXvsuw2pMtYSzdfIUAUfcTLnghvJS0CVkYW9sVx2HnF1rqnxsFgSdYmcXpHKLs'];
	
	$header = [
		'Authorization: Key=' . SERVER_API_KEY,
		'Content-Type: Application/json'
	];

	$msg = [
		'title' => 'BellView',
		'body' => 'New Order is appeared',
		'icon' => 'img/icon.png',
		'image' => 'img/d.png',
		'click_action' => 'https://platon.co.in/bellviewNew/restaurantDashboard'
	];

	$payload = [
		'registration_ids' 	=> $registrationIds,
		'data'				=> $msg
	];

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => json_encode( $payload ),
	  CURLOPT_HTTPHEADER => $header
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {

		//header('Location: cod/index.php');
	 echo $response;
	}
 ?>