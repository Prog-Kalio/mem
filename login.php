<?php session_start();

include_once("classes.php");
include_once("memheader.php");



	
?>


	<div class="title-div"><h3>REGISTRATION</h3></div>
	<div class="row cnt-row" id="loginrow">
		<div class="col-md-4 loginclass" id="loginrow1">
			<div id="div-reg">
				<h5>No one is left out... <span><button class="btn btn-info" id="fa-times" style="display:none"><i class="fa fa-times"></i></button></span></h5>
				<input type="radio" class="user" name="user" id="existingUser"> Existing Buyer?
				<input type="radio" class="user" name="user" id="newUser"> New Buyer?<br>
				<input type="radio" class="retailer" name="retailer" id="existingSeller"> Existing Seller?
				<input type="radio" class="retailer" name="retailer" id="newSeller"> New Seller?<br>
			</div>

			<div id="PicsDiv">
				<img src="images/security.png" class="img-fluid" alt="registration pics" id="regPics" width="200" height="250">
			</div>

		</div>

		<div class="col-md-4 loginclass" id="loginrow2">

			<div id="regPicsDiv">
				<img src="images/reg.png" class="img-fluid" alt="registration pics" id="regPics" width="480" height="400">
			</div>


			<div id="div-ExtUser" style="display:none" class="animate__animated animate__bounceInDown">
				<h6>Existing Buyer</h6>

				<form name="form-ExtUser" action="" method="post" class="form-group">
					<!-- Login for customers -->
			<?php  

					if ($_SERVER['REQUEST_METHOD'] == 'POST') {

						$newerrors = array();

						if (empty($_POST['extUsrmail'])) {
							$newerrors[] = "Email field is required";
						}

						if (empty($_POST['extUsrpswd'])) {
							$newerrors[]= "Password field is required";
						}

						if (!empty($newerrors)) {
							foreach ($newerrors as $key => $value) {
								echo "<div class='alert alert-danger'>$value</div>";
							}
							
						}
						
						$objlogin = new MyCustomers;

						if ($objlogin->login($_POST['extUsrmail'], $_POST['extUsrpswd']) == true) {

							header("Location: dashboard.php");
							exit;
						}

					}

			?>

					<input type="text" name="extUsrmail" class="form-control" placeholder="Email address" value="
						<?php
								if (isset($_POST['extUsrmail'])) {
									echo $_POST['extUsrmail'];
								}
							?>
					">
					<input type="password" name="extUsrpswd" class="form-control" placeholder="Password">
					<input type="submit" name="extUser-btn" class="btn btn-block btn-dark" value="Sign In">
				</form>
			</div>



			<div id="div-NewUser" style="display:none" class="animate__animated animate__rotateIn">
				<h6>New Buyer</h6>
						<form id="form-newUser" action="" method="post" class="form-group" name="NewUser-Form">
										<?php  

			// to check if Method is post
			// echo "<pre>";
			// print_r($_SERVER);
			// echo "</pre>";

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				// next we validate the fields, but first let's open an array to store all received feedback or errors

				$errors = array();

				if (empty($_POST['newFName'])) {
					$errors[] = "Firstname field cannot be empty!";
				}
				if (empty($_POST['newLName'])) {
					$errors[] = "Lastname field cannot be empty!";
				}
				if (empty($_POST['newPhone'])) {
					$errors[] = "Phone Number field cannot be empty!";
				}
				if (empty($_POST['newEmail'])) {
					$errors[] = "Email Address field cannot be empty!";
				}
				if (empty($_POST['newUsername'])) {
					$errors[] = "Username field cannot be empty!";
				}
				if (empty($_POST['newUsrpswd'])) {
					$errors[] = "Password field cannot be empty!";
				}
				elseif (strlen(trim($_POST['newUsrpswd'])) < 6) {
					$errors[] = "Password must be more than six characters!";
				}
				if (empty($_POST['newUsrCFpswd'])) {
					$errors[] = "Password Confirmation field cannot be empty!";
				}
				if (($_POST['newUsrpswd']) !== ($_POST['newUsrCFpswd'])) {
					$errors[] = "Passwords do not match!";
				}
				if (empty($_POST['usrgender'])) {
					$errors[] = "Please select Gender!";
				}
				if (empty($_POST['usraddress'])) {
					$errors[] = "Please fill your address!";
				}
				if (empty($_POST['usrterms'])) {
					$errors[] = "You are yet to agree to our Terms!";
				}


				// next we alert the errors found

				if (!empty($errors)) {

					echo "<ul class='alert alert-danger'>";
             		foreach ($errors as $key => $value) {
                	echo "<li>$value</li>";
              			}
              		echo "</ul>";

              		// print_r($errors);
				}
				else {
					$objuser = new MyCustomers;

				// check if email address exists
	              if ($objuser->checkemailaddress($_POST['newEmail']) == true) {
	                echo "<div class='alert alert-danger'>Email Address already taken!</div>";
	              }
	              else {
	              	// register
					$new_User = $objuser->addCustomers($_POST['newFName'], $_POST['newLName'], $_POST['newPhone'], $_POST['newEmail'], $_POST['newUsername'], $_POST['newUsrpswd'], $_POST['usrgender'], $_POST['usraddress']);

					header("Location: dashboard.php");
				
				}

			}

		}
			?>
							<label>Firstname</label>
							<input type="text" name="newFName" class="form-control" placeholder="Firstname" value="
							<?php
								if (isset($_POST['newFName'])) {
									echo $_POST['newFName'];
								}
							?>
							">
							<label>Lastname</label>
							<input type="text" name="newLName" class="form-control" placeholder="Lastname" value="
							<?php
								if (isset($_POST['newLName'])) {
									echo $_POST['newLName'];
								}
							?>
							">
							<label>Phone Number</label>
							<input type="text" name="newPhone" class="form-control" placeholder="Phone Number" value="
							<?php
								if (isset($_POST['newPhone'])) {
									echo $_POST['newPhone'];
								}
							?>
							">
							<label>Email Address</label>
							<input type="text" name="newEmail" class="form-control" placeholder="Email Address" value="
							<?php
								if (isset($_POST['newEmail'])) {
									echo $_POST['newEmail'];
								}
							?>
							">
							<label>Username</label>
							<input type="text" name="newUsername" class="form-control" placeholder="Username" value="
							<?php
								if (isset($_POST['newUsername'])) {
									echo $_POST['newUsername'];
								}
							?>
							">
							<label>Password</label>
							<input type="password" name="newUsrpswd" class="form-control" placeholder="Password">
							<label>Confirm Password</label>
							<input type="password" name="newUsrCFpswd" class="form-control" placeholder="Confirm Password">
							<label>Select Gender</label>
							<input type="radio" name="usrgender" id="usrmale" value="male"> Male
							<input type="radio" name="usrgender" id="usrfemale" value="female"> Female
							<label>Address</label>
							<textarea id="usraddress" placeholder="Enter Address" name="usraddress" class="form-control" rows="3">
							<?php
								if (isset($_POST['usraddress'])) {
									echo $_POST['usraddress'];
								}
							?>
							</textarea>
							<input type="checkbox" name="usrterms" id="termsCond"> I agree to <a href="#" data-toggle="modal" data-target="#staticBackdrop">Terms & Conditions</a>
							<input type="submit" id="newUser-btn" class="btn btn-block btn-dark" name="newuser_btn" value="Sign In">
						</form>
			</div>


			<div id="div-ExtSeller" style="display:none" class="animate__animated animate__fadeInBottomLeft" >
				<h6>Existing Seller</h6>
				<form id="form-ExtSler" action="" method="post" class="form-group">
					<input type="text" id="extSlnm" class="form-control" placeholder="Username" required>
					<input type="password" id="extSlpswd" class="form-control" placeholder="Password" required>
					<button id="extSeller-btn" class="btn btn-block btn-dark">Sign In</button>
				</form>
			</div>

			<div id="div-NewSeller" style="display:none" class="animate__animated animate__backInUp">
				<h6>New Seller</h6>
				<form id="form-newSeller" action="" method="post" class="form-group">
					<input type="text" id="newSlName" class="form-control" placeholder="Firstname" required>
					<input type="text" id="newSlNames" class="form-control" placeholder="Lastname" required>
					<input type="text" id="newSlPhone" class="form-control" placeholder="Phone Number" required>
					<input type="text" id="newSlEmail" class="form-control" placeholder="Email Address" required>
					<input type="text" id="newSlUsrnme" class="form-control" placeholder="Username" required>
					<input type="password" id="newSlpswd" class="form-control" placeholder="Password" required>
					<input type="password" id="newSlCFpswd" class="form-control" placeholder="Confirm Password" required>
					<input type="radio" name="sllrgender" id="sllrmale" value="male"> Male
					<input type="radio" name="sllrgender" id="sllrfemale" value="female"> Female
					<textarea id="sllraddress" placeholder="Enter Address" name="sllraddress" class="form-control" rows="3"></textarea>

					<input type="checkbox" name="terms" id="termsCond2"> I agree to <a href="#" data-toggle="modal" data-target="#staticBackdrop">Terms & Conditions</a>
					<button id="newSeller-btn" class="btn btn-block btn-dark">Sign In</button>
				</form>
			</div>
				
		</div>

		<div class="col-md-4 loginclass" id="loginrow3">

			<p style="color:midnightblue; padding: 10px;">“A customer is the most important visitor on our premises, he is not dependent on us. We are dependent on him. He is not an interruption in our work. He is the purpose of it. He is not an outsider in our business. He is part of it. We are not doing him a favor by serving him. He is doing us a favor by giving us an opportunity to do so.” – Mahatma Gandhi</p>

		</div>
	</div>
	

<?php include_once("memfooter.php") ?>