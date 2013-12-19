<? ob_start(); ?>
<?php
include '../login and register/core/init.php';
protect_page();


if (empty($_POST) === false) {
	$required_fields = array('current_password', 'password', 'password_again');
	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
		$errors[] = 'Fields marked with an asterisk are required';
		break 1;
		}
	}
	
	if (md5($_POST['current_password']) === $user_data['password']) {
		if (trim($_POST['password']) !== trim($_POST['password_again'])) {
			$errors[] = 'your new passwords do not match';
		} else if (strlen($_POST['password']) < 6) {
			$errors[] = 'Your password must be at least 6 characters';
		}
	} else {
		$errors[] = 'your current password is incorrect';
	}
	
}

include '../login and register/includes/overall/header.php';
?>



<?php
if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
	echo "Your password has been changed.";
} else {
	
	if (isset($_GET['force']) === true && empty($_GET['force']) === true){ 
	?>
    	<p>You must change your password.</p>
    <?php
	}
	if (empty($_POST) === false && empty($errors) === true) {
		 change_password($session_user_id, $_POST['password']);
		 header('Location: changepassword.php?success');
		 exit();
	}
		else if (empty($errors) === false) {
			echo output_errors($errors);
	}
	
	?>
    <H1>Change Password</H1>
    
	<form action="" method="post">
		<ul>
			<li>
				Current password*:<br>
				<input type="password" name="current_password">
			</li>
			<li>
				New password*:<br>
				<input type="password" name="password">
			</li>
			<li>
				New password again*:<br>
				<input type="password" name="password_again">
			</li>
			<li>
				<input type="submit" value="Change password">
			</li>
		</ul>
	</form>
<?php 
include '../login and register/includes/overall/footer.php'; 
}
?>
<? ob_flush(); ?>
