<?php
include 'core/init.php';
include 'includes/overall/noasideheader.php';

//if (($user_data['workout'])  < 5) {
	//	header('Location: protected2.php');
		//exit();
	//}

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
        	<div class= "center"><br>ROUND 1</div>Squat<br>
            <input type="number" name="exercise1_1">
        </li>
        <li>
        	Db press<br>
            <input type="number" name="exercise2_1">
        </li>
        <li>
        	PUP lateral walk<br>
            <input type="number" name="exercise3_1">
        </li>
        <li>
        	Mat shuffle<br>
        	<input type="number" name="exercise4_1">
        </li>
       <li>
        	<div class= "center"><br>ROUND 2</div>Squat<br>
            <input type="number" name="exercise1_2">
        </li>
        <li>
        	Db press<br>
            <input type="number" name="exercise2_2">
        </li>
        <li>
        	PUP lateral walk<br>
            <input type="number" name="exercise3_2">
        </li>
        <li>
        	Mat shuffle<br>
        	<input type="number" name="exercise4_2">
        </li>
        <li>
        	<div class= "center"><br>ROUND 3</div>Squat<br>
            <input type="number" name="exercise1_3">
        </li>
        <li>
        	Db press<br>
            <input type="number" name="exercise2_3">
        </li>
        <li>
        	PUP lateral walk<br>
            <input type="number" name="exercise3_3">
        </li>
        <li>
        	Mat shuffle<br>
        	<input type="number" name="exercise4_3">
        </li>
        <li>
        	<div class= "center"><br>ROUND 4</div>Squat<br>
            <input type="number" name="exercise1_4">
        </li>
        <li>
        	Db press<br>
            <input type="number" name="exercise2_4">
        </li>
        <li>
        	PUP lateral walk<br>
            <input type="number" name="exercise3_4">
        </li>
        <li>
        	Mat shuffle<br>
        	<input type="number" name="exercise4_4">
        </li>
        <li>
        	<div class= "center"><br>ROUND 5</div>Squat<br>
            <input type="number" name="exercise1_5">
        </li>
        <li>
        	Db press<br>
            <input type="number" name="exercise2_5">
        </li>
        <li>
        	PUP lateral walk<br>
            <input type="number" name="exercise3_5">
        </li>
        <li>
        	Mat shuffle<br>
        	<input type="number" name="exercise4_5">
        </li>
        <li>
        	<input type="submit" name="submit" />
        </li>
    </ul>
</form>
</div>
	<?php 
	if (logged_in() === true) {
	include 'includes/widgets/repcounter5.php';
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
<?php include 'includes/workouts/workout5_results.php'; ?>
</div>

<?php include 'includes/overall/footer.php'; ?>
