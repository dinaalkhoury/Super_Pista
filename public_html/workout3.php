<?php
include 'core/init.php';
include 'includes/overall/noasideheader.php';
?>





<div class= "video">
<h1>WORKOUT 3 - 40:20</h1>
<iframe src="//www.youtube.com/embed/HLFv2P5_tLk" frameborder="0" allowfullscreen></iframe>
<aside class="counter">
	<?php 
	if (logged_in() === true) {
	include 'includes/widgets/repcounter3.php';
	} else {
	include 'includes/widgets/login.php';
	}
	//include 'includes/widgets/user_count.php';
	?>
</aside>
<div class= "description">This is where the written description goes for the workout... blah blah blah
blah blah
blah blah
</div>

</div>
<?php include 'includes/workouts/workout3_results.php';?>


<div class="clear"></div>
<?php include 'includes/overall/footer.php'; ?>



