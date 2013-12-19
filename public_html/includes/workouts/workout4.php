<?php
include 'core/init.php';
include 'includes/overall/noasideheader.php';

if (($user_data['workout'])  < 4) {
		header('Location: protected2.php');
		exit();
	}

?>


<aside>
<div>
<form action="" method="post">
	<ul>
    	<li>
        	<br>Date<br>
            <input type="text" name="date" value="<?php echo date("Y-m-d");?>">
        </li>
    	<li>
        	<div class= "center"><br>ROUND 1</div>Push-up<br>
            <input type="number" name="pushup1">
        </li>
        <li>
        	Squat<br>
            <input type="number" name="squat1">
        </li>
        <li>
        	Inchworm<br>
            <input type="number" name="inchworm1">
        </li>
        <li>
        	March<br>
        	<input type="number" name="march1">
        </li>
       <li>
        	<div class= "center"><br>ROUND 2</div>Push-up<br>
            <input type="number" name="pushup2">
        </li>
        <li>
        	Squat<br>
            <input type="number" name="squat2">
        </li>
        <li>
        	Inchworm<br>
            <input type="number" name="inchworm2">
        </li>
        <li>
        	March<br>
        	<input type="number" name="march2">
        </li>
        <li>
        	<div class= "center"><br>ROUND 3</div>Push-up<br>
            <input type="number" name="pushup3">
        </li>
        <li>
        	Squat<br>
            <input type="number" name="squat3">
        </li>
        <li>
        	Inchworm<br>
            <input type="number" name="inchworm3">
        </li>
        <li>
        	March<br>
        	<input type="number" name="march3">
        </li>
        <li>
        	<div class= "center"><br>ROUND 4</div>Push-up<br>
            <input type="number" name="pushup4">
        </li>
        <li>
        	Squat<br>
            <input type="number" name="squat4">
        </li>
        <li>
        	Inchworm<br>
            <input type="number" name="inchworm4">
        </li>
        <li>
        	March<br>
        	<input type="number" name="march4">
        </li>
        <li>
        	<div class= "center"><br>ROUND 5</div>Push-up<br>
            <input type="number" name="pushup5">
        </li>
        <li>
        	Squat<br>
            <input type="number" name="squat5">
        </li>
        <li>
        	Inchworm<br>
            <input type="number" name="inchworm5">
        </li>
        <li>
        	March<br>
        	<input type="number" name="march5">
        </li>
        <li>
        	<input type="submit" name="submit" />
        </li>
    </ul>
</form>
</div>
	<?php 
	if (logged_in() === true) {
	include 'includes/widgets/repcounter4.php';
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
<?php include 'includes/workouts/workout1results.php'; ?>
</div>

<?php include 'includes/overall/footer.php'; ?>
