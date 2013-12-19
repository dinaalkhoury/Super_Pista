<div class="results">
<?php

// if (empty($user_data['profile']) === false) {
// echo '<img src="', $user_data['profile'], '" alt= "', $user_data['first_name'], '\'s Profile Image">';
//}	


$user_id	= $_SESSION['user_id'];
$data 		= mysql_query("SELECT * FROM `Workout3` WHERE `user_id` = '$user_id'");


$i = 0;
while($info = mysql_fetch_array($data)){
	
		$round1 = 'ROUND1';
		$round2 = 'ROUND2';
		$round3 = 'ROUND3';
		$round4 = 'ROUND4';
		$round5 = 'ROUND5';
		
		$SQ 	= 'SQUAT';
		$PU		= 'PUSH-UP';
		$DL		= 'DEADLIFT';
		$BOR	= 'BENT-OVER ROW';
		$PR		= 'PRESS';
		
		$id = $info['user_id'];
		$Date= $info['Date'];
		
		$exercise1_1 	= $info['exercise1_1'];
		$exercise2_1 	= $info['exercise2_1'];
		$exercise3_1 	= $info['exercise3_1'];
		$exercise4_1 	= $info['exercise4_1'];
		$exercise5_1	= $info['exercise5_1'];
		
		$exercise1_2 	= $info['exercise1_2'];
		$exercise2_2 	= $info['exercise2_2'];
		$exercise3_2 	= $info['exercise3_2'];
		$exercise4_2 	= $info['exercise4_2'];
		$exercise5_2	= $info['exercise5_2'];
		
		$exercise1_3 	= $info['exercise1_3'];
		$exercise2_3 	= $info['exercise2_3'];
		$exercise3_3 	= $info['exercise3_3'];
		$exercise4_3 	= $info['exercise4_3'];
		$exercise5_3	= $info['exercise5_3'];
		
		$exercise1_4 	= $info['exercise1_4'];
		$exercise2_4 	= $info['exercise2_4'];
		$exercise3_4 	= $info['exercise3_4'];
		$exercise4_4 	= $info['exercise4_4'];
		$exercise5_4	= $info['exercise5_4'];
		
		$exercise1_5 	= $info['exercise1_5'];
		$exercise2_5 	= $info['exercise2_5'];
		$exercise3_5 	= $info['exercise3_5'];
		$exercise4_5 	= $info['exercise4_5'];
		$exercise5_5	= $info['exercise5_5'];
		
		$TR = $info['Total'];
		$TOTAL = 'TOTAL REPS';
		
		$cast[] = array('user_id' 	 => $id,
						'Date'		 => $Date,
						'ROUND1'	 => $round1,   		'ROUND2'=> $round2, 	'ROUND3' 	=> $round3,   		'ROUND4' 	=> $round4, 'ROUND5' => $round5,
						'SQUAT'	 => $SQ,   		'PUSH-UP' => $PU,  	'DEADLIFT' 	=> $DL,   	'BENT-OVER ROW'  	=> $BOR,		'PRESS'		=>$PR,	
						'exercise1_1'  => $exercise1_1, 	'exercise2_1' 	=> $exercise2_1, 		'exercise3_1' 		=> $exercise3_1, 		'exercise4_1' => $exercise4_1,		'exercise5_1' => $exercise5_1, 
						'exercise1_2'  => $exercise1_2, 	'exercise2_2' 	=> $exercise2_2, 		'exercise3_2' 		=> $exercise3_2, 		'exercise4_2' => $exercise4_2,		'exercise5_2' => $exercise5_2,
						'exercise1_3'  => $exercise1_3, 	'exercise2_3' 	=> $exercise2_3, 		'exercise3_3' 		=> $exercise3_3, 		'exercise4_3' => $exercise4_3, 		'exercise5_3' => $exercise5_3,
						'exercise1_4'  => $exercise1_4, 	'exercise2_4' 	=> $exercise2_4, 		'exercise3_4' 		=> $exercise3_4, 		'exercise4_4' => $exercise4_4, 		'exercise5_4' => $exercise5_4,
						'exercise1_5'  => $exercise1_5, 	'exercise2_5' 	=> $exercise2_5, 		'exercise3_5' 		=> $exercise3_5, 		'exercise4_5' => $exercise4_5,		'exercise5_5' => $exercise5_5,
						'TOTAL REPS' => $TOTAL,		'Total'=> $TR		
						);
						
					
				
			 $i++;	
	
}
//print_r ($cast);
 


   foreach($cast as $k=>$v) {
		echo '</br></br>';
		//echo '<h3>' . date('m/d/Y', $v['Date']) . '</h3>';
		echo '<table class="workoutResults">';
					echo '<tr>';
					echo '<th scope="col" class="date">' . date('m/d/Y', $v['Date']) . '</th>';
					echo '<th scope="col" class="col">' . $v['ROUND1'] . '</th>';
					echo '<th scope="col" class="col">' . $v['ROUND2'] . '</th>';
					echo '<th scope="col" class="col">' . $v['ROUND3'] . '</th>';
					echo '<th scope="col" class="col">' . $v['ROUND4'] . '</th>';
					echo '<th scope="col" class="col">' . $v['ROUND5'] . '</th>';
				    echo '</tr>';
				    echo '<tr>';
		            echo '<th class="row" scope="row">' . $v['SQUAT'] . '</th>';
					echo '<td>' . $v['exercise1_1'] . '</td>';
					echo '<td>' . $v['exercise1_2'] . '</td>';
					echo '<td>' . $v['exercise1_3'] . '</td>';
					echo '<td>' . $v['exercise1_4'] . '</td>';
					echo '<td>' . $v['exercise1_5'] . '</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<th class="row" scope="row">' . $v['PUSH-UP'] . '</th>';
					echo '<td>' . $v['exercise2_1'] . '</td>';
					echo '<td>' . $v['exercise2_2'] . '</td>';
					echo '<td>' . $v['exercise2_3'] . '</td>';
					echo '<td>' . $v['exercise2_4'] . '</td>';
					echo '<td>' . $v['exercise2_5'] . '</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<th class="row" scope="row">' . $v['DEADLIFT'] . '</th>';
					echo '<td>' . $v['exercise3_1'] . '</td>';
					echo '<td>' . $v['exercise3_2'] . '</td>';
					echo '<td>' . $v['exercise3_3'] . '</td>';
					echo '<td>' . $v['exercise3_4'] . '</td>';
					echo '<td>' . $v['exercise4_5'] . '</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<th class="row" scope="row">' . $v['BENT-OVER ROW'] . '</th>';
					echo '<td>' . $v['exercise4_1'] . '</td>';
					echo '<td>' . $v['exercise4_2'] . '</td>';
					echo '<td>' . $v['exercise4_3'] . '</td>';
					echo '<td>' . $v['exercise4_4'] . '</td>';
					echo '<td>' . $v['exercise4_5'] . '</td>';
					echo '</tr>';
					echo '</table>';
					echo '<div class="totals">';
					echo '<h3>' . $v['Total'] . $v['TOTAL REPS'] . '</h3>'; 
					echo str_repeat('&nbsp;', 5); 
					echo $v['Total'];
					echo '</div>';
					
			}
?>
</div>  