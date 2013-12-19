<?php
include '../../core/init.php';
include 'includes/overall/noasideheader.php';

//if (($user_data['workout'])  < 3) {
		//header('Location: protected.php');
		//exit();
	//}
$workout = 14;	
protect_user($workout, $user_data);
?>


<aside>
	<?php 
	if (logged_in() === true) {
	include 'includes/widgets/repcounter14.php';
	} else {
	include 'includes/widgets/login.php';
	}
	include 'includes/widgets/user_count.php';
	?>
</aside>

<div class= "video">
<iframe width="600" height="400" src="http://www.youtube.com/embed/HLFv2P5_tLk" frameborder="0" allowfullscreen></iframe>
<div class= "description">This is where the written description goes for the workout... blah blah blah
blah blah
blah blah
</div>
<?php include 'includes/workouts/workout2results.php'; ?>
</div>

<?php include 'includes/overall/footer.php'; ?>
