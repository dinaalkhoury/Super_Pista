<? ob_start(); ?>
<?php
include 'file:///Macintosh HD/Users/dinaalkhoury/login and register/core/init.php';
protect_page();
include 'file:///Macintosh HD/Users/dinaalkhoury/login and register/includes/overall/header.php';

if (empty($_POST) === false) {
		$required_fields = array('first_name', 'email');
	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
		$errors[] = 'Fields marked with an asterisk are required';
		break 1;
		}
	}
	
	if (empty($errors) === true) {
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'A valid email is required';
		} else if (email_exists($_POST['email']) === true  && $user_data['email'] !== $_POST['email']) {
			$errors[] = 'Sorry, the email \'' . $_POST['email'] .	'\' is already taken.';	
		}
	}
	
	
}

?>

<h1>Settings</h1>

<?php
if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
	echo 'Your details have been updated';	
} else {
if (empty($_POST) === false && empty($errors) === true) {
	
	
	$update_data = array(
		'first_name'	 => $_POST['first_name'], 
		'last_name'	 	 => $_POST['last_name'],
		'email' 		 => $_POST['email'],
		'allow_email'	 => ($_POST['allow_email'] == 'on') ? 1 : 0
		
	);
	
	update_user($session_user_id, $update_data);
	header('Location: settings.php?success');
	
	
} else if (empty($errors) === false) {
	echo output_errors($errors);
	exit();
}
?>



<form action="" method="post">
	<ul>
    	<li>
        	First name*:<br>
            <input type="text" name="first_name" value="<?php echo $user_data['first_name']; ?>">
        </li>
        <li>
        	Last name:<br>
            <input type="text" name="last_name" value="<?php echo $user_data['last_name']; ?>">
        </li>
        <li>
        	Email:<br>
            <input type="text" name="email" value="<?php echo $user_data['email']; ?>">
        </li>
        <li>
        	<input type="checkbox" name="allow_email"<?php if ($user_data['allow_email'] == 1) { echo 'checked="checked"'; } ?> /> Would you like to recieve email from us? 
        </li>
        <li>
        	<input type="checkbox" name="allow_email"<?php if ($user_data['allow_email'] == 1) { echo 'checked="checked"'; } ?> /> Would you like to recieve email from us? 
        </li>
        <li>
        	<input type="submit" value="update" />
        </li>
    </ul>
</form>
   
<div id="profile">
    <h2>Change your profile picture</h2>
    <div class="inner">
    	<div class="profile">
			<?php
			if (isset($_FILES['profile']) === true) {
				if (empty($_FILES['profile']['name']) === true) {
					echo 'Please choose a file!';
			}	else {
					$allowed = array('jpg', 'jpeg', 'gif', 'png',);
					
					$file_name = $_FILES['profile']['name'];
					$file_extn = strtolower(end(explode('.', $file_name)));
					$file_temp = $_FILES['profile']['tmp_name'];
					
					if (in_array($file_extn, $allowed) === true) {
						change_profile_image($session_user_id, $file_temp, $file_extn);
						header('Location: index.php');
						exit();
					} else {
						echo 'Incorrect file type. Allowed:';
						echo implode(', ', $allowed);
						}
				}
			}
			
            if (empty($user_data['profile']) === false) {
                echo '<img src="', $user_data['profile'], '" alt= "', $user_data['first_name'], '\'s Profile Image">';
            }
            ?>
            <form action="" method="post" enctype="multipart/form-data">
            	<input type="file" name="profile" /><input type="submit" value="submit"/>
            </form>
     	</div>
    </div>
    </div>
    
<?php 
}
include 'file:///Macintosh HD/Users/dinaalkhoury/login and register/includes/overall/footer.php'; 
?>
  <? ob_flush(); ?>   

