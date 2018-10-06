<?php
	include_once 'app/header.php';
	
	include_once 'app/components/loader.php';

	if (isset($_SESSION['token'])) {
		include_once 'app/app.php';
	} else {
		include_once 'app/sign/sign.php';
	}
?>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/loading.js"></script>
<?php
	if (isset($_SESSION['token'])) {
?>
	<script src="js/header.js"></script>
<?php
		} else {
?>
	<script src="js/tabs.js"></script>
<?php
	}

	include_once 'app/footer.php';
?>