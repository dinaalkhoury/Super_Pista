<?php
$user_id	=$_SESSION['user_id'];

if(isset($_POST['submit'])){
	$date	 			=strtotime($_POST['date']);
	$exercise1_1 		=$_POST['exercise1_1'];
	$exercise2_1	 	=$_POST['exercise2_1'];
	$exercise3_1		=$_POST['exercise3_1'];
	$exercise4_1	 	=$_POST['exercise4_1'];
	$exercise1_2		=$_POST['exercise1_2'];
	$exercise2_2	 	=$_POST['exercise2_2'];
	$exercise3_2		=$_POST['exercise3_2'];
	$exercise4_2	 	=$_POST['exercise4_2'];
	$exercise1_3 		=$_POST['exercise1_3'];
	$exercise2_3	 	=$_POST['exercise2_3'];
	$exercise3_3		=$_POST['exercise3_3'];
	$exercise4_3	 	=$_POST['exercise4_3'];
	$exercise1_4 		=$_POST['exercise1_4'];
	$exercise2_4	 	=$_POST['exercise2_4'];
	$exercise3_4		=$_POST['exercise3_4'];
	$exercise4_4	 	=$_POST['exercise4_4'];
	$exercise1_5 		=$_POST['exercise1_5'];
	$exercise2_5	 	=$_POST['exercise2_5'];
	$exercise3_5		=$_POST['exercise3_5'];
	$exercise4_5	 	=$_POST['exercise4_5'];
	$total		=intval($exercise1_1) + intval($exercise2_1) + intval($exercise3_1) + intval($exercise4_1) + intval($exercise1_2) + intval($exercise2_2) + intval($exercise3_2) + intval($exercise4_2) + intval($exercise1_3) + intval($exercise2_3) + intval($exercise3_3) + intval($exercise4_3) + intval($exercise1_4) + intval($exercise2_4) + intval($exercise3_4) + intval($exercise4_4) + intval($exercise1_5) + intval($exercise2_5) + intval($exercise3_5) + intval($exercise4_5);

mysql_query("INSERT INTO workout3 (`user_id`,`date`, `exercise1_1`, `exercise2_1`, `exercise3_1`, `exercise4_1`, `exercise1_2`, `exercise2_2`, `exercise3_2`, `exercise4_2`, `exercise1_3`, `exercise2_3`, `exercise3_3`, `exercise4_3`, `exercise1_4`, `exercise2_4`, `exercise3_4`, `exercise4_4`, `exercise1_5`, `exercise2_5`, `exercise3_5`, `exercise4_5`, `total`) VALUES ($user_id, $date, $exercise1_1, $exercise2_1, $exercise3_1, $exercise4_1, $exercise1_2, $exercise2_2, $exercise3_2, $exercise4_2, $exercise1_3, $exercise2_3, $exercise3_3, $exercise4_3, $exercise1_4, $exercise2_4, $exercise3_4, $exercise4_4, $exercise1_5, $exercise2_5, $exercise3_5, $exercise4_5, $total)");

}

if ($total >= 200) {
mysql_query("UPDATE users SET `workout3` = 1 WHERE `user_id` = $user_id");
}
echo $date;


 
?>
