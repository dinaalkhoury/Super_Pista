<html>
<head>
</head>
<body>
<form action="" method="post">
	<ul>
    	<li>
        	Push-up<br>
            <input type="number" name="pushup">
            <?php echo $_POST['pushup'] ."|" ;?>
        </li>
        <li>
        	Squat<br>
            <input type="number" name="squat">
            <?php echo $_POST['squat'] ."|" ;?>
        </li>
        <li>
        	Inchworm<br>
            <input type="number" name="inchworm">
            <?php echo $_POST['inchworm'] ."|" ;?>
        </li>
        <li>
        	March<br>
        	<input type="number" name="march">
        	<?php echo $_POST['march'] ."|" ;?>
        </li>
        <li>
        	<input type="submit" name="submit" />
        </li>
    </ul>
</form>
<?php
if(isset($_POST['submit'])){

$con = mysql_connect('localhost', 'samofitc_Q', '322300');
if (!$con){
	die("cannot connect: " . mysql_error());
}
mysql_select_db('samofitc_wc', $con);

$pushup 	=$_POST['pushup'];
$squat	 	=$_POST['squat'];
$inchworm	=$_POST['inchworm'];
$march	 	=$_POST['march'];
$total		=intval($pushup) + intval($squat) + intval($inchworm) + intval($march);

$sql = "INSERT INTO workout1 (pushup, squat, inchworm, march, total) VALUES ($pushup, $squat, $inchworm, $march, $total)";

mysql_query($sql,$con);

}
?>
</body>
</html>