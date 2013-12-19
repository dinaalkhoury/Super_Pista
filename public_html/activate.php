<?php
include 'core/init.php';
logged_in_redirect();
include 'includes/overall/header2.php';

if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
?>
	<h2>Thanks, your account has been activated!</h2>
<?php
} else if (isset($_GET['email'], $_GET['email_code']) === true) {
	$email		= trim($_GET['email']);
	$email_code = trim($_GET['email_code']);
	
	if (email_exists($email) === false) {
		$errors[] = 'oops';
	} else if (activate($email, $email_code) === false) {
		$errors[] = 'We had prob';
	}
	
	if (empty($errors) === false) {
	?>
    	<h2>Oops...</h2>
    <?php
		echo output_errors($errors);
	} else {
		header('Location: activate.php?success');	
	}
} else { 
	header('Location: index.php');
	exit();
}

include 'includes/overall/footer.php'; 
?>