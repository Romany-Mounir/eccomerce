<?php
	session_start();
	$noNavbar = '';
	if (isset($_SESSION['Username'])) {
		header('Location: dashboard.php'); // redirect to dashboard page 
	}	
	include 'init.php';
		//check if user coming from http post request
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$Username = $_POST['user'];
		$Password = $_POST['pass'];
		$hashedpass = sha1($Password);
 		//check if the user exist in database	
		$stmt = $con->prepare("SELECT Username, Password FROM `shop` . `users` WHERE Username=? AND Password=? AND  GroupId=1");
		$stmt->execute(array($Username, $hashedpass)) ;

		$count = $stmt->rowCount();
		// if count >0 this mean the database contain record about this user name
		if ($count > 0) {
			$_SESSION['Username'] = $Username; // register session name
			header('Location: dashboard.php'); // redirect to dashboard page 
			exit();
		}
		
	}
?>
	<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<h4 class="text-center">Admin login</h4>
		<input class="form-control input-lg" type="text" name="user" placeholder="Username" autocomplete="off">
		<input class="form-control input-lg"type="password" name="pass" placeholder="Password" autocomplete="new_password">
		<input class="btn btn-primary btn-block"type="submit" value="login">
		</form>

<?php include $tpl . 'footer.inc'; ?>