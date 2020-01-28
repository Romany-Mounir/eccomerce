<?php
session_start();
	if (isset($_SESSION['Username'])) {
			include 'init.php';
			include $tpl . 'footer.inc';
	} else {
			header('Location: index.php'); // redirect to index page 
		exit();
	}
