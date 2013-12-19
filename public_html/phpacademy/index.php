<?php
include 'core/init.php';
include 'includes/overall/header2.php';
?>

<p>WTF?</p>

<?php
if (has_access($session_user_id, 1) === true) {
	echo 'Admin!';	
}
if (has_access($session_user_id, 2) === true) {
	echo 'Moderator!';	
}
?>


<?php include '../login and register/includes/overall/footer.php'; 
?>



