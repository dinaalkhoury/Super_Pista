<aside>
	<?php 
	if (logged_in() === true) {
	include 'widgets/repcounter1-1.php';
	} else {
	include 'widgets/login.php';
	}
	include 'widgets/user_count.php';
	?>
</aside>