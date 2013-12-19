<? ob_start(); ?>
<?PHP
function email($to, $subject, $body) {
	mail($to, $subject, $body, 'From: qmcgilvery05@yahoo.com');
}
function logged_in_redirect() {
	if (logged_in() === true) {
		header('Location: indexnew.php');
	}
}

function protect_page() {
	if (logged_in() === false) {
		header('Location: protected.php');
		exit();
	}
}

function protect_user($workout, $user_data) {
	if (($user_data['workout'])  < $workout) {
		header('Location: protected.php');
		exit();
	}
}

function admin_protect() {
	global $user_data;
	if (has_access($user_data['user_id'], 1) === false) {
		header('Location: index.php');
		exit();
	}
}
function array_sanitize(&$item) {
	$item = htmlentities(mysql_real_escape_string($item));
}
function sanitize($data) {
	return htmlentities(mysql_real_escape_string($data));
}

function output_errors($errors) {
	return '<ul><li>'. implode('</li><li>', $errors)  . '</ul>';
}
?>
