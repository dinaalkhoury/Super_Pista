<?php
if (empty($_POST) === false && empty($errors) === true) {
		 change_password($session_user_id, $_POST['password']);
		 header('Location: changepassword.php?success');
		 exit();
	}
?>