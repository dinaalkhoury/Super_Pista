
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">

<?php

$user_id	=$_SESSION['user_id'];

if(isset($_POST['submit'])){
	$date	 			=strtotime($_POST['date']);
	$exercise1_1 		=$_POST['exercise1_1'];
	$exercise2_1	 	=$_POST['exercise2_1'];
	$exercise3_1		=$_POST['exercise3_1'];
	$exercise4_1	 	=$_POST['exercise4_1'];
	$exercise5_1 		=$_POST['exercise5_1'];
	$exercise1_2		=$_POST['exercise1_2'];
	$exercise2_2	 	=$_POST['exercise2_2'];
	$exercise3_2		=$_POST['exercise3_2'];
	$exercise4_2	 	=$_POST['exercise4_2'];
	$exercise5_2 		=$_POST['exercise5_2'];
	$exercise1_3 		=$_POST['exercise1_3'];
	$exercise2_3	 	=$_POST['exercise2_3'];
	$exercise3_3		=$_POST['exercise3_3'];
	$exercise4_3	 	=$_POST['exercise4_3'];
	$exercise5_3 		=$_POST['exercise5_3'];
	$exercise1_4 		=$_POST['exercise1_4'];
	$exercise2_4	 	=$_POST['exercise2_4'];
	$exercise3_4		=$_POST['exercise3_4'];
	$exercise4_4	 	=$_POST['exercise4_4'];
	$exercise5_4 		=$_POST['exercise5_4'];
	$exercise1_5 		=$_POST['exercise1_5'];
	$exercise2_5	 	=$_POST['exercise2_5'];
	$exercise3_5		=$_POST['exercise3_5'];
	$exercise4_5	 	=$_POST['exercise4_5'];
	$exercise5_5 		=$_POST['exercise5_5'];
	$total		=intval($exercise1_1) + intval($exercise2_1) + intval($exercise3_1) + intval($exercise4_1) + intval($exercise5_1)  + intval($exercise1_2) + intval($exercise2_2) + intval($exercise3_2) + intval($exercise4_2) + intval($exercise5_2)  + intval($exercise1_3) + intval($exercise2_3) + intval($exercise3_3) + intval($exercise4_3) + intval($exercise5_3)  + intval($exercise1_4) + intval($exercise2_4) + intval($exercise3_4) + intval($exercise4_4) + intval($exercise5_4)  + intval($exercise1_5) + intval($exercise2_5) + intval($exercise3_5) + intval($exercise4_5) + intval($exercise5_5) ;

mysql_query("INSERT INTO Workout4 (`user_id`,`Date`, `exercise1_1`, `exercise2_1`, `exercise3_1`, `exercise4_1`, `exercise5_1`, `exercise1_2`, `exercise2_2`, `exercise3_2`, `exercise4_2`, `exercise5_2`, `exercise1_3`, `exercise2_3`, `exercise3_3`, `exercise4_3`, `exercise5_3`, `exercise1_4`, `exercise2_4`, `exercise3_4`, `exercise4_4`, `exercise5_4`, `exercise1_5`, `exercise2_5`, `exercise3_5`, `exercise4_5`, `exercise5_5`, `total`) VALUES ($user_id, $date, $exercise1_1, $exercise2_1, $exercise3_1, $exercise4_1, $exercise5_1, $exercise1_2, $exercise2_2, $exercise3_2, $exercise4_2, $exercise5_2, $exercise1_3, $exercise2_3, $exercise3_3, $exercise4_3, $exercise5_3, $exercise1_4, $exercise2_4, $exercise3_4, $exercise4_4, $exercise5_4, $exercise1_5, $exercise2_5, $exercise3_5, $exercise4_5, $exercise5_5, $total)");

}

if ($total >= 200) {
mysql_query("UPDATE users SET `Workout4` = 1 WHERE `user_id` = $user_id");
}
 
?>


$(function() {
	$('#aside2').hide();
	$('#aside3').hide();
	$('#aside4').hide();
	$('#aside5').hide();
	});
$(function() {
            $("#round2").click(function() {
                $("#aside2").show("normal");
				$("#aside1").hide("normal");
				$("#aside3").hide("normal");
				$("#aside4").hide("normal");
				$("#aside5").hide("normal");
            });
			$("#round3").click(function() {
                $("#aside3").show("normal");
				$("#aside1").hide("normal");
				$("#aside2").hide("normal");
				$("#aside4").hide("normal");
				$("#aside5").hide("normal");
            });
			$("#round4").click(function() {
                $("#aside4").show("normal");
				$("#aside1").hide("normal");
				$("#aside3").hide("normal");
				$("#aside2").hide("normal");
				$("#aside5").hide("normal");
            });
			$("#round5").click(function() {
                $("#aside5").show("normal");
				$("#aside1").hide("normal");
				$("#aside3").hide("normal");
				$("#aside4").hide("normal");
				$("#aside2").hide("normal");
            });
        });
    </script>

<form class="ajax" action="" method="post">
<div id="aside1">
	<ul>
    	<li>
        	<br>
            <input type="text" name="date" value="<?php echo date("Y-m-d");?>">
        </li>
    	<li>
        	<div class= "center"><br><h3>ROUND 1</h3></div>Mountain climber<br>
            <input type="number" name="exercise1_1" value="0">
        </li>
        <li>
        	Fwd-bwd run<br>
            <input type="number" name="exercise2_1" value="0">
        </li>
        <li>
        	Push-up pos reach<br>
            <input type="number" name="exercise3_1" value="0">
        </li>
        <li>
        	March<br>
        	<input type="number" name="exercise4_1" value="0">
        </li>
		<li>
        	Inchworm<br>
        	<input type="number" name="exercise5_1" value="0">
        </li>
	</ul>
	<span onmouseover="" style="cursor: pointer;" class="button" id="round2">round2</span>
</div>

<div id="aside2">
	<ul>
    	<li>
        	<div class= "center"><br><h3>ROUND 2</h3></div>Mountain climber<br>
            <input type="number" name="exercise1_2" value="0">
        </li>
        <li>
        	Fwd-bwd run<br>
            <input type="number" name="exercise2_2" value="0">
        </li>
        <li>
        	Push-up pos reach<br>
            <input type="number" name="exercise3_2" value="0">
        </li>
        <li>
        	March<br>
        	<input type="number" name="exercise4_2" value="0">
        </li>
		<li>
        	Inchworm<br>
        	<input type="number" name="exercise5_2" value="0">
        </li>
	</ul>
	<span onmouseover="" style="cursor: pointer;" class="button" id="round3">round3</span>
</div>

<div id="aside3">
	<ul>
    	<li>
        	<div class= "center"><br><h3>ROUND 3</h3></div>Mountain climber<br>
            <input type="number" name="exercise1_3" value="0">
        </li>
        <li>
        	Fwd-bwd run<br>
            <input type="number" name="exercise2_3" value="0">
        </li>
        <li>
        	Push-up pos reach<br>
            <input type="number" name="exercise3_3" value="0">
        </li>
        <li>
        	March<br>
        	<input type="number" name="exercise4_3" value="0">
        </li>
		<li>
        	Inchworm<br>
        	<input type="number" name="exercise5_3" value="0">
        </li>
	</ul>
<span onmouseover="" style="cursor: pointer;" class="button" id="round4">round4</span>
</div>

<div id="aside4">
	<ul>
    	<li>
        	<div class= "center"><br><h3>ROUND 4</h3></div>Mountain climber<br>
            <input type="number" name="exercise1_4" value="0">
        </li>
        <li>
        	Fwd-bwd run<br>
            <input type="number" name="exercise2_4" value="0">
        </li>
        <li>
        	Push-up pos reach<br>
            <input type="number" name="exercise3_4" value="0">
        </li>
        <li>
        	March<br>
        	<input type="number" name="exercise4_4" value="0">
        </li>
		<li>
        	Inchworm<br>
        	<input type="number" name="exercise5_4" value="0">
        </li>
	</ul>
<span onmouseover="" style="cursor: pointer;" class="button" id="round5">round5</span>
</div>

<div id="aside5">
	<ul>
    	<li>
        	<div class= "center"><br><h3>ROUND 5</h3></div>Mountain climber<br>
            <input type="number" name="exercise1_5" value="0">
        </li>
        <li>
        	fwd-bwd run<br>
            <input type="number" name="exercise2_5" value="0">
        </li>
        <li>
        	Push-up pos reach<br>
            <input type="number" name="exercise3_5" value="0">
        </li>
        <li>
        	March<br>
        	<input type="number" name="exercise4_5" value="0">
        </li>
		<li>
        	Inchworm<br>
        	<input type="number" name="exercise5_5" value="0">
        </li>
		<li>
        	<input type="submit" name="submit" />
        </li>
	</ul>
</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!--<script src="main.js"></script>-->
</div>




