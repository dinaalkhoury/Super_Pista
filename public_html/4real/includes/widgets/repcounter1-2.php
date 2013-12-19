 <div>
<form action="" method="post">
	<ul>
    	<li>
        	<br>Date<br>
            <input type="text" name="date" value="<?php echo date("Y-m-d");?>">
        </li>
    	<li>
        	<div class= "center"><br>ROUND 1</div>Deadlift<br>
            <input type="number" name="deadlift1">
        </li>
        <li>
        	Row<br>
            <input type="number" name="row1">
        </li>
        <li>
        	Up-down plank<br>
            <input type="number" name="p2p1">
        </li>
        <li>
        	Jump rope<br>
        	<input type="number" name="jumprope1">
        </li>
       <li>
        	<div class= "center"><br>ROUND 2</div>Deadlift<br>
            <input type="number" name="deadlift2">
        </li>
        <li>
        	Row<br>
            <input type="number" name="row2">
        </li>
        <li>
        	Up-down plank<br>
            <input type="number" name="p2p2">
        </li>
        <li>
        	Jump rope<br>
        	<input type="number" name="jumprope2">
        </li>
        <li>
        	<div class= "center"><br>ROUND 3</div>Deadlift<br>
            <input type="number" name="deadlift3">
        </li>
        <li>
        	Row<br>
            <input type="number" name="row3">
        </li>
        <li>
        	Up-down plank<br>
            <input type="number" name="p2p3">
        </li>
        <li>
        	Jump rope<br>
        	<input type="number" name="jumprope3">
        </li>
        <li>
        	<div class= "center"><br>ROUND 4</div>Deadlift<br>
            <input type="number" name="deadlift4">
        </li>
        <li>
        	Row<br>
            <input type="number" name="row4">
        </li>
        <li>
        	Up-down plank<br>
            <input type="number" name="p2p4">
        </li>
        <li>
        	Jump rope<br>
        	<input type="number" name="jumprope4">
        </li>
        <li>
        	<div class= "center"><br>ROUND 5</div>Deadlift<br>
            <input type="number" name="deadlift5">
        </li>
        <li>
        	Row<br>
            <input type="number" name="row5">
        </li>
        <li>
        	Up-down plank<br>
            <input type="number" name="p2p5">
        </li>
        <li>
        	Jump rope<br>
        	<input type="number" name="jumprope5">
        </li>
        <li>
        	<input type="submit" name="submit" />
        </li>
    </ul>
</form>
</div>
<div>

</div>
<?php
$user_id	=$_SESSION['user_id'];

if(isset($_POST['submit'])){
	$date	 	=strtotime($_POST['date']);
	$deadlift1 	=$_POST['deadlift1'];
	$row1	 	=$_POST['row1'];
	$p2p1		=$_POST['p2p1'];
	$jumprope1	=$_POST['jumprope2'];
	$deadlift2 	=$_POST['deadlift2'];
	$row2	 	=$_POST['row2'];
	$p2p2		=$_POST['p2p2'];
	$jumprope2	=$_POST['jumprope2'];
	$deadlift3 	=$_POST['deadlift3'];
	$row3	 	=$_POST['row3'];
	$p2p3		=$_POST['p2p3'];
	$jumprope3	=$_POST['jumprope3'];
	$deadlift4 	=$_POST['deadlift4'];
	$row4	 	=$_POST['row4'];
	$p2p4		=$_POST['p2p4'];
	$jumprope4	=$_POST['jumprope4'];
	$deadlift5 	=$_POST['deadlift5'];
	$row5	 	=$_POST['row5'];
	$p2p5		=$_POST['p2p5'];
	$jumprope5	=$_POST['jumprope5'];
	$total		=intval($deadlift1) + intval($row1) + intval($p2p1) + intval($jumprope1) + intval($deadlift2) + intval($row2) + intval($p2p2) + intval($jumprope2) + intval($deadlift3) + intval($row3) + intval($p2p3) + intval($jumprope3) + intval($deadlift4) + intval($row4) + intval($p2p4) + intval($jumprope4) + intval($deadlift5) + intval($row5) + intval($p2p5) + intval($jumprope5);

mysql_query("INSERT INTO Workout2 (`user_id`, `Date`, `Deadlift1`, `Row1`, `p2p1`, `Jumprope1`, `Deadlift2`, `Row2`, `p2p2`, `Jumprope2`, `Deadlift3`, `Row3`, `p2p3`, `Jumprope3`, `Deadlift4`, `Row4`, `p2p4`, `Jumprope4`, `Deadlift5`, `Row5`, `p2p5`, `Jumprope5`, `Total`) VALUES ($user_id, $date, $deadlift1, $row1, $p2p1, $jumprope1, $deadlift2, $row2, $p2p2, $jumprope2, $deadlift3, $row3, $p2p3, $jumprope3, $deadlift4, $row4, $p2p4, $jumprope4, $deadlift5, $row5, $p2p5, $jumprope5, $total)");

}


echo $date;


 
?>
