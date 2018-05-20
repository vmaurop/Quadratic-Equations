<?php
//Κλάσση η οποία χρειάζεται μοναχά για την εγγραφή νέου χρήστη
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "1234";
	private $database = "phppot_examples";
	private $conn;
	
	//Κονστράκτορας
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	//Συνάρτηση σύνδεσης στη βάση
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	//Συνάρτηση Ερωτήματος προς τη βάση (Το Ερώτημα (query) γίνεται στο άλλο αρχείο)
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	//Συνάρτηση ερωτήματος για το πόσες φορές εμφανίζεται ένα αποτέλεσμα στις γραμμες του πίνακα
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
	
	//Συνάρτηση ενημέρωσης της βάσης
	function updateQuery($query) {
		$result = mysqli_query($this->conn,$query);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		} else {
			return $result;
		}
	}
	
	//Συνάρτηση πρόσθεσης στη βάση δεδομένων
	function insertQuery($query) {
		//Ελληνικοί χαρακτήρες για τη βάση
			mysqli_query($this->conn, "SET NAMES 'utf8'");
		$result = mysqli_query($this->conn,$query);
			
		if (!$result) {
			$error_message = "Αυτή η εγγραφή υπάρχει ήδη. Προσπάθησε ξανά!";
		} else {
			return $result;
		}
	}
	
	//Συνάρτηση διαγραφής από την βάση δεδομένων
	function deleteQuery($query) {
		$result = mysqli_query($this->conn,$query);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		} else {
			return $result;
		}
	}
}
?>