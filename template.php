<?php include 'inc/site-url.inc.php'; ?><!--This include will content constant like - site url, CDN url and other constants-->
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'inc/before-meta.inc.php'; ?><!--This include will content meta which are common for all pages-->

	<title>Profile Template</title>

	<?php include 'inc/after-meta.inc.php'; ?><!--This include will content base style sheets-->

	<!-- Put page based css here -->

    <?php include 'inc/before-head-end.inc.php'; ?><!--This include will content IE Fallback css and fallbacks-->

</head>


<body>

    <?php include 'inc/after-body-start.inc.php'; ?>

	<header>
		<?php include 'inc/header.inc.php'; ?><!--This include will content header elements including navigation etc...-->
	</header>

	<div class="wrapper">
		<!-- Main Content wrapper -->
	</div>


	<footer>
		<?php include 'inc/footer.inc.php'; ?><!--This include will content footer elements-->
	</footer>


<?php include 'inc/before-body-end.inc.php'; ?><!--This include will content javascripts are other files required after DOM is ready-->

<!-- Put page based script here -->
	
</body>
</html>