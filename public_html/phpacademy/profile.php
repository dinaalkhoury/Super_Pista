<? ob_start(); ?>
<?php
include '../login and register/core/init.php';
include '../login and register/includes/overall/header.php';
?>
<?php	
	
	if (isset($_GET['username']) === true && empty($_GET['username']) === false) {
		$username     = $_GET['username'];
	
	if(user_exists($username) === true) {
		$user_id  	  = user_id_from_username($username);
		$profile_data = user_data($user_id, 'first_name', 'last_name', 'email', 'workout');
	?>
    	
        <h1><?php echo $profile_data['first_name']; ?>'s Profile</h1>
        <h2><?php echo $profile_data['email']; ?></h2>
        <h2><?php echo $profile_data['workout']; ?></h2>
        
<div id="profile">
    <h2>Hello, <?php echo $user_data['first_name'] ?>!</h2>
     <div class="inner">
    	<!--<div class="profile">-->
			<?php
			
            //if (empty($user_data['profile']) === false) {
            //    echo '<img src="', $user_data['profile'], '" alt= "', $user_data['first_name'], '\'s Profile Image">';
            //}
			
            ?>
            
            <?php
            if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
	echo 'Your details have been updated';	
} else {
if (empty($_POST) === false && empty($errors) === true) {
	
	
	$update_data = array(
		'workout'	 	 => $_POST['workout'],
		'comment'		 => $_POST['comment'], 
		'workout_2'	 	 => $_POST['workout_2'],
		//'email' 		 => $_POST['email'],
		//'allow_email'	 => ($_POST['allow_email'] == 'on') ? 1 : 0
		
	);
	
	update_user($session_user_id, $update_data);
	//header('Location: profile.php?success');
	
	
}
 else if (empty($errors) === false) {
	echo output_errors($errors);
	exit();
}}
//if (($_POST['workout']) === 12) {
			//echo 'Sorry that user doesn\'t exist!';
	//}
		?>
        
     	</div>
        <div id="video"><video width="500" height="350" controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.
</video> </div>
        
    	<form action="" method="post">
	<ul>
    	 <li>
        	Submit your reps!<br />
        	<input type="text" name="workout" />
         <li>
         	<input type="text" name="comment" />
         </li>
         <li>
        	<input type="submit" value="submit" />
    	 </li>
    </ul>
</form>
        <div id="video"><video width="500" height="350" controls>
      <source src="movie.mp4" type="video/mp4">
      <source src="movie.ogg" type="video/ogg">
    Your browser does not support the video tag.
    </video> </div>
<form action="" method="post">
	<ul>
    	 <li>
        	Submit your reps!<br />
        	<input type="text" name="workout_2" />
         <li>
         	<input type="text" name="comment" />
         </li>
         <li>
        	<input type="submit" value="submit" />
    	 </li>
    </ul>
</form>

    
    
    
    <?php

	}
	
//} else {
	//header('Location: index.php');
	exit();
}

include '../login and register/includes/overall/footer.php'; 
?>
<? ob_flush(); ?>