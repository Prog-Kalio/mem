<?php 
/*
Author: Mr. Kalio Tamunotonye
Program: Medical Equipment Market
Date: 14th November, 2021
*/


// Including constant
include_once("constants.php");

// start MyRetailers Class Diagram

// create class
class MyRetailers {

	// create variables/properties/attributes 
	public $retailer_firstname;
	public $retailer_lastname;
	public $retailer_phone;
	public $retailer_email;
	public $retailer_username;
	public $retailer_password;
	public $retailer_gender;
	public $retailer_address;
	public $dbcon; //database connection handler

	// create method/function/operation
	function __construct() {
		$this->dbcon = new MySqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

		if ($this->dbcon->connect_error) {
			die("connection failed".$this->dbcon->connect_error)."<br>";
		}
		else {
			echo "Connection successful";
		}
	}

	function addRetailers($retailer_firstname, $retailer_lastname, $retailer_phone, $retailer_email, $retailer_username, $retailer_password, $retailer_gender, $retailer_address) {

		// encrypt pasword
		$encr_pswd = md5($retailer_password);

		$sql = "INSERT INTO retailers(retailer_firstname, retailer_lastname, retailer_phone, retailer_email, retailer_username, retailer_password, retailer_gender, retailer_address) VALUES('$retailer_firstname', '$retailer_lastname', '$retailer_phone', '$retailer_email', '$retailer_username', '$encr_pswd', '$retailer_gender', '$retailer_address')";

		$result = $this->dbcon->query($sql);

		if ($this->dbcon->affected_rows == 1) {
			return true;
		}
		else {
			return "Contact could not be added".$this->dbcon->error."<br>";
		}
	}

}
// End MyRetailers Class Diagram

// Start My Customers Class Diagram

// create class
	class MyCustomers {

		// create variables/properties/attributes
		public $cust_firstname;
		public $cust_lastname;
		public $cust_phone;
		public $cust_email;
		public $cust_username;
		public $cust_password;
		public $cust_gender;
		public $cust_address;
		public $dbcon; //database connection handler


		//create method/function/operation
		function __construct() {
			$this->dbcon = new MySqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

			if ($this->dbcon->connect_error){
				die("Connection failed".$this->dbcon->connect_error)."<br>";
			}
			// else {
			// 	echo "Connection successful";
			// }
		}


		function addCustomers($cust_firstname, $cust_lastname, $cust_phone, $cust_email, $cust_username, $cust_password, $cust_gender, $cust_address) {

		// encrypt password
		$encr_pswd = md5($cust_password);

		$sql = "INSERT INTO customers(cust_firstname, cust_lastname, cust_phone, cust_email, cust_username, cust_password, cust_gender, cust_address) VALUES('$cust_firstname', '$cust_lastname', '$cust_phone', '$cust_email', '$cust_username', '$encr_pswd', '$cust_gender', '$cust_address')";

		// check result
		$result = $this->dbcon->query($sql);

			if ($this->dbcon->affected_rows == 1) {
				// instead of returning true, let's create session since we want to proceed to dashboard
				// so create session variables
				
				// $_SESSION['userid'] = $this->dbcon->insert_id;
				// $_SESSION['newUsername'] = $cust_username;
				// $_SESSION['newUsrpswd'] = $cust_password;
				// // to go a step further, add a special ket to authenticate who is in session.
				// $_SESSION['memyek'] = "@@Exec2090";

				// next is to redirect to dashboard
				return true;
			}
			else {
				return "Contact could not be added <br>";
			}

		}


		// check if email address exists
		function checkemailaddress($cust_email) {

			// write query
			$sql = "SELECT cust_email FROM customers WHERE cust_email='$cust_email'";
			 // run the query
			$result = $this->dbcon->query($sql);
			if ($this->dbcon->affected_rows == 1) {
				return false;
			}
			else {
				return false;
			}
		}


		// Get all Users information
		function getCustomers() {
			$sql = "SELECT * FROM customers";

			$result = $this->dbcon->query($sql);
			$rows = array();

			if ($this->dbcon->affected_rows > 0) {
				while ($row = $result->fetch_array()) {
					$rows[] = $row;
				}
				return $rows;
			}
			else {
				return $rows;
			}
			
		}


		function login($cust_email, $cust_password) {

			$encr_pswd = md5($cust_password);
			$sql = "SELECT cust_email FROM customers WHERE cust_email='$cust_email' AND cust_password='$cust_password'";
			$result = $this->dbcon->query($sql);
			
			if ($result->num_rows==1) {
				return true;
			} 
			else {
				return false;
			}
			
		}


	}

// End  MyCustomers Class Diagram




// Start MyEquipment Class Diagram

// create class
	class MyEquipment {

		// create variables/properties/attributes
		public $equip_name;
		public $equip_brand;
		public $equip_model;
		public $equip_manuf;
		public $equip_price;
		public $equip_rep;
		public $equip_avail;
		public $dbcon; //database coonection handler

		// create method/functions/operations

		function __construct() {
			$this->dbcon = new MySqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

			if ($this->dbcon->connect_error) {
				die("Connection failed".$this->dbcon->connect_error)."<br>";
			}
			else {
				echo "Connection Successful";
			}
		}


		function addEquipment($equip_name, $equip_brand, $equip_model, $equip_manuf, $equip_price, $equip_rep, $equip_avail) {

			$sql = "INSERT INTO equipment(equip_name, equip_brand, equip_model, equip_manuf, equip_price, equip_avail) VALUES('$equip_name', '$equip_brand', '$equip_model', '$equip_manuf', '$equip_price', '$equip_rep', '$equip_avail')";

			// check result
			$result = $this->dbcon->query($sql);

			if ($this->dbcon->affected_rows == 1) {
				return true;
			}
			else {
				return "Contact could not be added".$this->dbcon->error."<br>";
			}
		}


	}


// End MyEquipment Class Diagram



// Start MyLogistics Class Diagram


// create class diagram
	class MyLogistics {

		// create variables/properties/attributes
		public $logistics_name;
		public $logistics_phone;
		public $logistics_email;
		public $logistics_password;
		public $logistics_bank;
		public $logistics_acount_no;
		public $logistics_address;
		public $dbcon; //database connection handler


		// create methods/functions/operation

		function __construct() {
			$this->dbcon = new MySqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

			if ($this->dbcon->connect_error) {
				die("Connection failed".$this->dbcon->conect_error)."<br>";
			}
			else {
				echo "Connection Successful <br>";
			}
		}


		function addLogistics($logistics_name, $logistics_phone, $logistics_email, $logistics_password, $logistics_bank, $logistics_acount_no, $logistics_address) {

			// encrypt password
			$encr_pswd = md5($logistics_password);

			$sql = "INSERT INTO logistics(logistics_name, logistics_phone, logistics_email, logistics_password, logistics_bank, logistics_account_no, logistics_address) VALUES('$logistics_name', '$logistics_phone', '$logistics_email', '$encr_pswd', '$logistics_bank', '$logistics_acount_no', '$logistics_address')";

			// check result
			$result = $this->dbcon->query($sql);

			if ($this->dbcon->affected_rows == 1) {
				return true;
			}
			else {
				return "Contact could not be added".$this->dbcon->error."<br>";
			}
		}

	}

// End MyLogistics Class Diagram

?>