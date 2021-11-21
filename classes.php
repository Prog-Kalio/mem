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
	public $retailers_firstname;
	public $retailers_lastname;
	public $retailers_phone;
	public $retailers_company;
	public $retailers_email;
	public $retailers_password;
	public $retailers_address;
	public $dbcon; //database connection handler

	// create method/function/operation
	function __construct() {
		$this->dbcon = new MySqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

		if ($this->dbcon->connect_error) {
			die("connection failed".$this->dbcon->connect_error)."<br>";
		}
		// else {
		// 	echo "Connection successful";
		// }
	}

	function addRetailers($retailers_firstname, $retailers_lastname, $retailers_phone, $retailers_company, $retailers_email, $retailers_password, $retailers_address) {

		// encrypt pasword
		$retailers_password = md5($retailers_password);

		$sql = "INSERT INTO retailers(retailers_firstname, retailers_lastname, retailers_phone, retailers_company, retailers_email, retailers_password, retailers_address) VALUES('$retailers_firstname', '$retailers_lastname', '$retailers_phone', '$retailers_company', '$retailers_email', '$retailers_password', '$retailers_address')";

		$result = $this->dbcon->query($sql);

		if ($this->dbcon->affected_rows == 1) {
			return true;
		}
		else {
			return "Contact could not be added".$this->dbcon->error."<br>";
		}
	}


	function loginRetailer($retailers_email, $retailers_password) {

		$retailers_password = md5($retailers_password);

		$sql = "SELECT retailers_email FROM retailers WHERE retailers_email='$retailers_email' AND retailers_password='$retailers_password'";

		$result = $this->dbcon->query($sql);

		if ($result->num_rows==1) {
			return true;
		}
		else {
			return false;
		}
	}


		// check if email address exists
		function checkEmail($retailers_email) {

			// write query
			$sql = "SELECT retailers_email FROM retailers WHERE retailers_email='$retailers_email'";
			 // run the query
			$result = $this->dbcon->query($sql);
			if ($this->dbcon->affected_rows == 1) {
				return false;
			}
			else {
				return false;
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


		function addEquipment($equip_name, $equip_brand, $equip_model, $equip_manuf, $equip_price, $equip_rep, $equip_avail, $equip_pix) {

			$sql = "INSERT INTO equipment(equip_name, equip_brand, equip_model, equip_manuf, equip_price, equip_avail, equip_pix) VALUES('$equip_name', '$equip_brand', '$equip_model', '$equip_manuf', '$equip_price', '$equip_rep', '$equip_avail', '$equip_pix')";

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


// Start My Admin Class Diagram

// create class
	class MyAdmin {

		// create variables/properties/attributes
		public $admin_fname;
		public $admin_lname;
		public $admin_phone;
		public $admin_email;
		public $admin_password;
		public $admin_gender;
		public $admin_staffno;
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


		function addAdmin($admin_fname, $admin_lname, $admin_phone, $admin_email, $admin_password, $admin_gender, $admin_staffno) {

		// encrypt password
		$encr_pswd = md5($admin_password);

		$sql = "INSERT INTO admintable(admin_fname, admin_lname, admin_phone, admin_email, admin_password, admin_gender, admin_staffno) VALUES('$admin_fname', '$admin_lname', '$admin_phone', '$admin_email', '$encr_pswd', '$admin_gender', '$admin_staffno')";

		// check result
		$result = $this->dbcon->query($sql);

			if ($this->dbcon->affected_rows == 1) {
				return true;
			}
			else {
				return false;
			}

		}



		// Get all Users information
		function getAdmin() {
			$sql = "SELECT * FROM admintable";

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


		function adminLogin($admin_email, $admin_password) {

			$admin_password = md5($admin_password);
			$sql = "SELECT admin_email FROM admintable WHERE admin_email='$admin_email' AND admin_password='$admin_password'";
			$result = $this->dbcon->query($sql);
			
			if ($result->num_rows==1) {
				return true;
			} 
			else {
				return false;
			}
			
		}


		// check if email address exists
		function confirmemailaddress($admin_email) {

			// write query
			$sql = "SELECT admin_email FROM admintable WHERE admin_email='$admin_email'";
			 // run the query
			$result = $this->dbcon->query($sql);
			if ($this->dbcon->affected_rows == 1) {
				return false;
			}
			else {
				return false;
			}
		}


	}

// End  My Admin Class Diagram



?>