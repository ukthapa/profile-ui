<?php include 'inc/site-url.inc.php'; ?><!--This include will content constant like - site url, CDN url and other constants-->
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'inc/before-meta.inc.php'; ?><!--This include will content meta which are common for all pages-->

	<title>Profile Admin</title>

	<?php include 'inc/after-meta.inc.php'; ?><!--This include will content base style sheets-->

	<!-- Put page based css here -->

    <?php include 'inc/before-head-end.inc.php'; ?><!--This include will content IE Fallback css and fallbacks-->

</head>


<body>







    <?php include 'inc/after-body-start.inc.php'; ?>
    <header>
    	<?php include 'inc/header.inc.php'; ?>
    </header>

	<div class="wrapper">
		<div class="container">

<?php

	$fNameError = $mNameError = $lNameError = $emailError = $passwordError = $password2Error = $pmatchError = "";

	$fName = $mName = $lName = $email = $password = $password2 = "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if(empty($_POST["fname"])) {
			$fNameError = "First name is required";
		}
		else {

			$fName = secureData($_POST["fname"]); 
		}


		$mName = secureData($_POST["mname"]);


		if(empty($_POST["lname"])){
			$lNameError = "Last Name is required";
		}
		else {
			$lName = secureData($_POST["lname"]); 
		}

		if(empty($_POST["email"])){
			$emailError = "Email is required";
		}
		else {
			$email = secureData($_POST["email"]); 
		}


		if(empty($_POST["password"])){
			$passwordError = "Password is required";
		}
		else {
			$password = secureData($_POST["password"]); 
		}


		if(empty($_POST["password2"])){
			$password2Error = "Retype Password is required";
		}
		else {
			$password2 = secureData($_POST["password2"]); 
		}
		
		if($password !== $password2) {
			$pmatchError = "Password retype not matched.";
		}
	}

	function secureData($data){
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
	}
?>
			
					<h1 class="text-center text-uppercase">Register</h1>
					<div class="well well-signin" >
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							<div class="form-group">
								<label for="fname">First Name <span>*</span></label>
								<input type="text" name="fname" id="fname" class="form-control" value ="<?php echo $fName ?>" placeholder="" >
								<div class="text-danger " id="fname-error"><?php echo $fNameError ?> </div>
							</div>
							<div class="form-group">
								<label for="mname">Middle Name</label>
								<input type="text" name="mname" id="mname" class="form-control" value =""  placeholder="">
								<div class="text-danger " id="mname-error"></div>
							</div>
							<div class="form-group">
								<label for="lname">Last Name <span>*</span></label>
								<input type="text" name="lname" id="lname" class="form-control" value ="<?php echo $lName ?>"  placeholder="" >
								<div class="text-danger " id="lname-error"><?php echo$lNameError ?></div>
							</div>
							<div class="form-group">
								<label for="email">Email <span>*</span></label>
								<input type="text" name="email" id="email" class="form-control" value ="<?php echo $email ?>"  placeholder="" >
								<div class="text-danger" id="email-error"><?php echo $emailError ?></div>
							</div>
							<div class="form-group">
								<label for="password">Password <span>*</span></label>
								<input type="text" name="password" id="password" class="form-control" placeholder="" >
								<div class="text-danger" id="password-error"><?php echo $passwordError ?></div>
							</div>

							<div class="form-group">
								<label for="password2">Retype Password <span>*</span></label>
								<input type="text" name="password2" id="password2" class="form-control" placeholder="" >
								<div class="text-danger" id="password2-error"><?php echo $password2Error ?>  <?php echo $pmatchError ?></div>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Register Now">
							</div>
						</form>
					</div>
				</div>
	</div>

	<footer>
		<?php include 'inc/footer.inc.php'; ?>
	</footer>





<?php include 'inc/before-body-end.inc.php'; ?><!--This include will content javascripts are other files required after DOM is ready-->

	
</body>
</html>