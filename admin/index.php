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

	<div class="wrapper">
		<div class="container" id="signup">
			
					<h1 class="text-center text-uppercase">Sign In</h1>
					<div class="well well-signin" >
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" id="username" class="form-control" placeholder="" required>
								<div class="text-danger " id="username-error"></div>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="text" name="password" id="password" class="form-control" placeholder="" required>
								<div class="text-danger" id="password-error"></div>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Sign In">
							</div>
						</form>
					</div>
				</div>
	</div>


<?php



?>



<?php include 'inc/before-body-end.inc.php'; ?><!--This include will content javascripts are other files required after DOM is ready-->

<script type="text/javascript">
    var callBack = function (param) {
    	//this.param = param;
    	return function () {
			verticalyCenter(param);    		
    	}
    }
	window.onload = verticalyCenter("signup");

	if(!window.addEventListener) {
		window.attachEvent("onkeydown", callBack("signup"));
	}
	else {
		window.addEventListener("resize", callBack("signup"));
	}

	
</script>
	
</body>
</html>