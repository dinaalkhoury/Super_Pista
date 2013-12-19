<?php
include 'core/init.php';
include 'includes/overall/landingheader.php';
?>

<div id= "landing">

<?php
if (has_access($session_user_id, 1) === true) {
	echo 'Admin!';	
}
if (has_access($session_user_id, 2) === true) {
	echo 'Moderator!';	
}
?>
</div>

<?php include 'includes/overall/footer.php'; 
?>



