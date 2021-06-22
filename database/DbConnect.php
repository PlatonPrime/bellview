<?php 
	class DbConnect {
	    
	   // $conn = mysqli_connect("localhost","u144959055_bellview","bellview","u144959055_bellview");
		private $host = 'localhost';
		private $dbName = 'u144959055_bellview';
		private $user = 'u144959055_bellview';
		private $pass = 'bellview';

		public function connect() {
			try {
				$conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->user, $this->pass);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
			} catch( PDOException $e) {
				echo 'Database Error: ' . $e->getMessage();
			}
		}
	}
 ?>