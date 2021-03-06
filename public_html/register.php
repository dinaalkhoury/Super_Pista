<?php
include 'core/init.php';
logged_in_redirect();
include 'includes/overall/header2.php';

if (empty($_POST) === false) {
	$required_fields = array('username', 'password', 'password_again', 'first_name', 'email');
	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
		$errors[] = 'Fields marked with an asterisk are required';
		break 1;
		}
	}
	
	if (empty($errors) === true) {
		if (user_exists($_POST['username']) === true) {
			$errors[] = 'Sorry, the username \'' . $_POST['username'] .	'\' is already taken.';
		}
		if (preg_match("/\\s/", $_POST['username']) == true) {
			$errors[] = 'Your username cannot contain any space';
		}
		if (strlen($_POST['password']) < 6) {
			$errors[] = 'Your password must be at least 6 cahracters';
		}
		if ($_POST['password'] !== $_POST['password_again']) {
			$errors[] = 'Your passwords do not match';
		}
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'A valid email is required';
		}
		if (email_exists($_POST['email']) === true) {
			$errors[] = 'Sorry, the email \'' . $_POST['email'] .	'\' is already taken.';	
		}
	}
}



?>
<H1>Register</H1>

<?php

if (isset($_GET['success']) && empty($_GET['success'])) {
	echo "You've been successfully registered! Check your email to complete your activation.";
} else {
	if (empty($_POST) === false && empty($errors) === true) {
		$register_data = array(
			'username' 		=> $_POST['username'],
			'password' 		=> $_POST['password'],
			'first_name' 	=> $_POST['first_name'],
			'last_name' 	=> $_POST['last_name'],
			'email' 		=> $_POST['email'],
			'email_code'	=> md5($_POST['username'] + microtime())
		);	
		
		register_user($register_data);
		header('location: register.php?success');
		exit();
	
	} else if (empty($errors) === false) {
		echo output_errors($errors);
	}

?>
<script>

	function validate(f)
	{ 
		if (f.username.value == "")
		{
			 alert("You must provide a username.");
			 return false;
		}
		else if (f.password.value == "")
		{
			 alert("You must provide a password.");
			 return false;
		}
		else if (f.password_again.value != f.password.value)
		{
			 alert("Your passwords did not match.");
			 return false;
		}
		else if (f.first_name.value == "")
		{
			 alert("You must provide a first name.");
			 return false;
		}
		else if (f.email.value == "")
		{
			 alert("You must provide an email adddress.");
			 return false;
		}
		return true;
	}
</script>

<form action="" method="post" onsubmit="return validate(this);">
	<ul>
    	<li>
        	Username*:<br />
        	<input type="text" name="username" />
    	</li>
        <li>
        	Password*:<br />
            <input type="password" name="password" />
    	</li>
        <li>
        	Password again*:<br />
            <input type="password" name="password_again" />
    	</li>
        <li>
        	First name*:<br />
        	<input type="text" name="first_name" />
    	</li>
        <li>
        	Last name:<br />
        	<input type="text" name="last_name" />
    	</li>
        <li>
        	Email*:<br />
        	<input type="text" name="email" />
    	</li>
        <li>
        	<input type="submit" value="Register" />
    	</li>
    </ul>
</form>
<?php
}
include 'includes/overall/footer.php';
?>
    