<?php
$user_id	=$_SESSION['user_id'];

if(isset($_POST['submit'])){
	$date	 	=strtotime($_POST['date']);
	$pushup1 	=$_POST['pushup1'];
	$squat1	 	=$_POST['squat1'];
	$inchworm1	=$_POST['inchworm1'];
	$march1	 	=$_POST['march1'];
	$pushup2	=$_POST['pushup2'];
	$squat2	 	=$_POST['squat2'];
	$inchworm2	=$_POST['inchworm2'];
	$march2	 	=$_POST['march2'];
	$pushup3 	=$_POST['pushup3'];
	$squat3	 	=$_POST['squat3'];
	$inchworm3	=$_POST['inchworm3'];
	$march3	 	=$_POST['march3'];
	$pushup4 	=$_POST['pushup4'];
	$squat4	 	=$_POST['squat4'];
	$inchworm4	=$_POST['inchworm4'];
	$march4	 	=$_POST['march4'];
	$pushup5 	=$_POST['pushup5'];
	$squat5	 	=$_POST['squat5'];
	$inchworm5	=$_POST['inchworm5'];
	$march5	 	=$_POST['march5'];
	$total		=intval($pushup1) + intval($squat1) + intval($inchworm1) + intval($march1) + intval($pushup2) + intval($squat2) + intval($inchworm2) + intval($march2) + intval($pushup3) + intval($squat3) + intval($inchworm3) + intval($march3) + intval($pushup4) + intval($squat4) + intval($inchworm4) + intval($march4) + intval($pushup5) + intval($squat5) + intval($inchworm5) + intval($march5);

mysql_query("INSERT INTO Workout1 (`user_id`,`Date`, `Pushup1`, `Squat1`, `Inchworm1`, `March1`, `Pushup2`, `Squat2`, `Inchworm2`, `March2`, `Pushup3`, `Squat3`, `Inchworm3`, `March3`, `Pushup4`, `Squat4`, `Inchworm4`, `March4`, `Pushup5`, `Squat5`, `Inchworm5`, `March5`, `Total`) VALUES ($user_id, $date, $pushup1, $squat1, $inchworm1, $march1, $pushup2, $squat2, $inchworm2, $march2, $pushup3, $squat3, $inchworm3, $march3, $pushup4, $squat4, $inchworm4, $march4, $pushup5, $squat5, $inchworm5, $march5, $total)");

}

if ($total >= 200){
mysql_query("UPDATE users SET `workout4` = 1 WHERE `user_id` = $user_id");
}
echo $date;


 
?>
