<?php
include 'core/init.php';
include 'includes/overall/noasideheader.php';
?>


<aside>
	<?php 
	if (logged_in() === true) {
	include 'includes/widgets/repcounter1.php';
	} else {
	include 'includes/widgets/login.php';
	}
	include 'includes/widgets/user_count.php';
	?>
</aside>
<div>

</div>
<div class= "video">
<iframe width="600" height="400" src="http://www.youtube.com/embed/HLFv2P5_tLk" frameborder="0" allowfullscreen></iframe>
<div class= "description">This is where the written description goes for the workout... blah blah blah
blah blah
blah blah
</div>
<?php include 'includes/workouts/workout1results.php';?>
</div>








<?php include 'includes/overall/footer.php'; ?>



