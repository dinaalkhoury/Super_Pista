<? ob_start(); ?>
<?php
include '../login and register/core/init.php';
logged_in_redirect();
if (empty($_POST) == false) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if (empty($username) == true || empty($password) == true) {
		$errors[] = 'You need to enter a username and password';
	} else if (user_exists($username) == false) {
		$errors[] = 'username aint work';
	} else if (user_active($username) == false) {
		$errors[] = "you haven't activated your account";
	} else {
		
		if (strlen($password) > 32) {
			$errors[] = 'password too long';
		}
		$login = login($username, $password);
		if ($login === false) {
			$errors[] = 'That username/password combination is incorrect';
	    } else {
			 $_SESSION['user_id'] = $login;
			 header('Location: indexnew.php');	
			 exit();
		}
	}
		
} else {
	$errors[] = 'No data recieved';
}
include '../login and register/includes/overall/header.php';
if (empty($errors) === false) {
?>
	<h2>We tried to log you in but...</h2>
    
 <?php
 echo output_errors($errors);
}
include '../login and register/includes/overall/footer.php';
?>
<? ob_flush(); ?>    
