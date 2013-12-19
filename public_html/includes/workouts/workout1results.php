<div class="results">
			<?php
			
			
			
           // if (empty($user_data['profile']) === false) {
               // echo '<img src="', $user_data['profile'], '" alt= "', $user_data['first_name'], '\'s Profile Image">';
            //}
		
	
	
$user_id	= $_SESSION['user_id'];
$data 		= mysql_query("SELECT * FROM `Workout1` WHERE `user_id` = '$user_id'");

//$cast = array();

$i = 0;
while($info = mysql_fetch_array($data)){
	
		$round1 = 'ROUND1';
		$round2 = 'ROUND2';
		$round3 = 'ROUND3';
		$round4 = 'ROUND4';
		$round5 = 'ROUND5';
		
		$Pushup 	= 'PUSH-UP';
		$Squat		= 'SQUAT';
		$Inchworm	= 'INCHWORM';
		$March		= 'MARCH';
		
		$id = $info['user_id'];
		$Date= $info['Date'];
		
		$exercise1_1 	= $info['Pushup1'];
		$exercise2_1 	= $info['Squat1'];
		$exercise3_1 	= $info['Inchworm1'];
		$exercise4_1 	= $info['March1'];
		
		$exercise1_2 	= $info['Pushup2'];
		$exercise2_2 	= $info['Squat2'];
		$exercise3_2 	= $info['Inchworm2'];
		$exercise4_2 	= $info['March2'];
		
		$exercise1_3 	= $info['Pushup3'];
		$exercise2_3 	= $info['Squat3'];
		$exercise3_3 	= $info['Inchworm3'];
		$exercise4_3 	= $info['March3'];
		
		$exercise1_4 	= $info['Pushup4'];
		$exercise2_4	= $info['Squat4'];
		$exercise3_4 	= $info['Inchworm4'];
		$exercise4_4 	= $info['March4'];
		
		$exercise1_5 	= $info['Pushup5'];
		$exercise2_5 	= $info['Squat5'];
		$exercise3_5 	= $info['Inchworm5'];
		$exercise4_5 	= $info['March5'];
		
		$TR = $info['Total'];
		$TOTAL = 'TOTAL REPS';
		
		$cast[] = array('user_id' 	 => $id,
						'Date'		 => $Date,
						'ROUND1'	 => $round1,   		'ROUND2'=> $round2, 	'ROUND3' 	=> $round3,   		'ROUND4' 	=> $round4, 'ROUND5' => $round5,
						'PUSH-UP'	 => $Pushup,   		'SQUAT' => $Squat,  	'INCHWORM' 	=> $Inchworm,   	'MARCH'  	=> $March,	
						'Pushup1'  => $exercise1_1, 	'Squat1' 	=> $exercise2_1, 		'Inchworm1' 		=> $exercise3_1, 		'March1' => $exercise4_1, 
						'Pushup2'  => $exercise1_2, 	'Squat2' 	=> $exercise2_2, 		'Inchworm2' 		=> $exercise3_2, 		'March2' => $exercise4_2,
						'Pushup3'  => $exercise1_3, 	'Squat3' 	=> $exercise2_3, 		'Inchworm3' 		=> $exercise3_3, 		'March3' => $exercise4_3, 
						'Pushup4'  => $exercise1_4, 	'Squat4' 	=> $exercise2_4, 		'Inchworm4' 		=> $exercise3_4, 		'March4' => $exercise4_4, 
						'Pushup5'  => $exercise1_5, 	'Squat5' 	=> $exercise2_5, 		'Inchworm5' 		=> $exercise3_5, 		'March5' => $exercise4_5,
						'TOTAL REPS' => $TOTAL,		'Total'=> $TR		
						);
						
					
				
			 $i++;	
	
}
//print_r ($cast);
 





   foreach($cast as $k=>$v) {
		echo '</br></br></br></br></br>';
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
		            echo '<th class="row" scope="row">' . $v['PUSH-UP'] . '</th>';
					echo '<td>' . $v['Pushup1'] . '</td>';
					echo '<td>' . $v['Pushup2'] . '</td>';
					echo '<td>' . $v['Pushup3'] . '</td>';
					echo '<td>' . $v['Pushup4'] . '</td>';
					echo '<td>' . $v['Pushup5'] . '</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<th class="row" scope="row">' . $v['SQUAT'] . '</th>';
					echo '<td>' . $v['Squat1'] . '</td>';
					echo '<td>' . $v['Squat2'] . '</td>';
					echo '<td>' . $v['Squat3'] . '</td>';
					echo '<td>' . $v['Squat4'] . '</td>';
					echo '<td>' . $v['Squat5'] . '</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<th class="row" scope="row">' . $v['INCHWORM'] . '</th>';
					echo '<td>' . $v['Inchworm1'] . '</td>';
					echo '<td>' . $v['Inchworm2'] . '</td>';
					echo '<td>' . $v['Inchworm3'] . '</td>';
					echo '<td>' . $v['Inchworm4'] . '</td>';
					echo '<td>' . $v['Inchworm5'] . '</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<th class="row" scope="row">' . $v['MARCH'] . '</th>';
					echo '<td>' . $v['March1'] . '</td>';
					echo '<td>' . $v['March2'] . '</td>';
					echo '<td>' . $v['March3'] . '</td>';
					echo '<td>' . $v['March4'] . '</td>';
					echo '<td>' . $v['March5'] . '</td>';
					echo '</tr>';
					echo '</table>';
					echo '<h3>' . $v['TOTAL REPS'] . '</h3>'; 
					echo str_repeat('&nbsp;', 5); 
					echo $v['Total'];
					
			}
?>
</div>  