<aside>
	<?php 
	if (logged_in() === true) {
		include '../../login and register/includes/includes/widgets/loggedin.php';
	} else {
	include '../../login and register/includes/includes/widgets/login.php';
	}
	include '../../login and register/includes/includes/widgets/user_count.php';
	?>
</aside>