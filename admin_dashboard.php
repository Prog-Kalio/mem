<?php session_start();
include_once("classes.php");	
include_once("memheader.php");	

if(!isset($_SESSION['admin_email'])) {
	header("Location: index.php?msg=Please login");
}
else {
	$success = "Welcome";
}
?>




<!-- Menu Row  -->
			<div class="row menu-row" id="menurow-id">


				<div class="col-md-3 menu-col" id="menucol1-id">

					<div class="alert alert-success" style="padding: 20px; font-weight: bold">
					<?php 
						if(isset($_SESSION['admin_email'])) {
							echo $success." ".$_SESSION['admin_email']."<br>";
						}
					?>
					</div>
					<a href="dashboard.php" class="btn btn-block btn-light text-left">DASHBOARD</a>
					<a href="orders.php" class="btn btn-block btn-light text-left">ORDERS</a>
					<a href="customers.php" class="btn btn-block btn-light text-left">CUSTOMERS</a>
					<a href="retailers.php" class="btn btn-block btn-light text-left">RETAILERS</a>
					<a href="equipment.php" class="btn btn-block btn-light text-left">EQUIPMENT</a>
					<a href="complaints.php" class="btn btn-block btn-light text-left">COMPLAINTS</a>
					<a href="transactions.php" class="btn btn-block btn-light text-left">TRANSACTIONS</a>
					<a href="settings.php" class="btn btn-block btn-light text-left">SETTINGS</a>
					<a href="logout.php" class="btn btn-block btn-light text-left">LOGOUT</a>
				</div>


			</div>

<?php include_once("memfooter.php") ?>
