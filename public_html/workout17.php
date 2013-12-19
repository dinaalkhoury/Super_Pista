<?php
include 'core/init.php';
include 'includes/overall/noasideheader.php';

	/*if (($user_data['workout'])  < 3) {
		header('Location: protected.php');
	exit();
	}
	
$workout = 8;	
protect_user($workout, $user_data);*/
?>





<div class= "video">
	<iframe src="//www.youtube.com/embed/HLFv2P5_tLk" frameborder="0" allowfullscreen></iframe>
	<aside class="counter">
		<?php 
		if (logged_in() === true) {
		include 'includes/widgets/repcounter17.php';
		} else {
		include 'includes/widgets/login.php';
		}
		//include 'includes/widgets/user_count.php';
		?>
	</aside>
	<div class= "description">
		This is where the written description goes for the workout... blah blah blah
	</div>

</div>
<?php include 'includes/workouts/workout17_results.php';?>


<div class="clear"></div>
<?php include 'includes/overall/footer.php'; ?>



