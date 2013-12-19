<div class="video">
			<?php
			
           // if (empty($user_data['profile']) === false) {
               // echo '<img src="', $user_data['profile'], '" alt= "', $user_data['first_name'], '\'s Profile Image">';
            //}
	
	
	
$user_id	= $_SESSION['user_id'];
$data 		= mysql_query("SELECT * FROM `workout6` WHERE `user_id` = '$user_id'");

//$cast = array();

$i = 0;
while($info = mysql_fetch_array($data)){

	
		$round1 = 'ROUND1';
		$round2 = 'ROUND2';
		$round3 = 'ROUND3';
		$round4 = 'ROUND4';
		$round5 = 'ROUND5';
		
		$squat	 	= 'SQUAT';
		$press		= 'DB PRESS';
		$puplw		= 'PUP LATERAL WALK';
		$lms		= 'LATERAL MAT SHUFFLE';
		
		$id 	= $info['user_id'];
		$date	= $info['date'];
		
		$exercise1_1 = $info['exercise1_1'];
		$exercise2_1 = $info['exercise2_1'];
		$exercise3_1 = $info['exercise3_1'];
		$exercise4_1 = $info['exercise4_1'];
		
		$exercise1_2 = $info['exercise1_2'];
		$exercise2_2 = $info['exercise2_2'];
		$exercise3_2 = $info['exercise3_2'];
		$exercise4_2 = $info['exercise4_2'];
		
		$exercise1_3 = $info['exercise1_3'];
		$exercise2_3 = $info['exercise2_3'];
		$exercise3_3 = $info['exercise3_3'];
		$exercise4_3 = $info['exercise4_3'];
		
		$exercise1_4 = $info['exercise1_4'];
		$exercise2_4 = $info['exercise2_4'];
		$exercise3_4 = $info['exercise3_4'];
		$exercise4_4 = $info['exercise4_4'];
		
		$exercise1_5 = $info['exercise1_5'];
		$exercise2_5	= $info['exercise2_5'];
		$exercise3_5 = $info['exercise3_5'];
		$exercise4_5 = $info['exercise4_5'];
		
		$TR = $info['total'];
		$TOTAL = 'TOTAL REPS';
		
		$cast[] = array('user_id' 	 => $id,
						'date'		 => $date,
						'ROUND1'	 => $round1,	   'ROUND2'=>$round2, 	'ROUND3' => $round3,	'ROUND4' => $round4, 'ROUND5' => $round5,
						'SQUAT'	 => $squat,  'DB PRESS'  => $press,  	'PUP LATERAL WALK'  => $puplw,  		'LATERAL MAT SHUFFLE'  => $lms,	
						'exercise1_1'  => $exercise1_1, 'exercise2_1' => $exercise2_1, 	'exercise3_1' => $exercise3_1, 		'exercise4_1' => $exercise4_1, 
						'exercise1_2'  => $exercise1_2, 'exercise2_2' => $exercise2_2, 	'exercise3_2' => $exercise3_2, 		'exercise4_2' => $exercise4_2,
						'exercise1_3'  => $exercise1_3, 'exercise2_3' => $exercise2_3, 	'exercise3_3' => $exercise3_3, 		'exercise4_3' => $exercise4_3, 
						'exercise1_4'  => $exercise1_4, 'exercise2_4' => $exercise2_4, 	'exercise3_4' => $exercise3_4, 		'exercise4_4' => $exercise4_4, 
						'exercise1_5'  => $exercise1_5, 'exercise2_5' => $exercise2_5, 	'exercise3_5' => $exercise3_5, 		'exercise4_5' => $exercise4_5,
						'TOTAL REPS' => $TOTAL,		'Total'=> $TR		
						);
						
					
				
			 $i++;	
	
}
//print_r ($cast);
 





   foreach($cast as $k=>$v) {
		echo '</br></br></br></br></br>';
		echo '<h3>' . date('m/d/Y', $v['date']) . '</h3>';
		echo '<table class="results">';
					echo '<tr>';
					echo '<th scope="col">' . '</th>';
					echo '<th scope="col">' . $v['ROUND1'] . '</th>';
					echo '<th scope="col">' . $v['ROUND2'] . '</th>';
					echo '<th scope="col">' . $v['ROUND3'] . '</th>';
					echo '<th scope="col">' . $v['ROUND4'] . '</th>';
					echo '<th scope="col">' . $v['ROUND5'] . '</th>';
				    echo '</tr>';
				    echo '<tr>';
		            echo '<th scope="row">' . $v['SQUAT'] . '</th>';
					echo '<td>' . $v['exercise1_1'] . '</td>';
					echo '<td>' . $v['exercise1_2'] . '</td>';
					echo '<td>' . $v['exercise1_3'] . '</td>';
					echo '<td>' . $v['exercise1_4'] . '</td>';
					echo '<td>' . $v['exercise1_5'] . '</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<th scope="row">' . $v['DB PRESS'] . '</th>';
					echo '<td>' . $v['exercise2_1'] . '</td>';
					echo '<td>' . $v['exercise2_2'] . '</td>';
					echo '<td>' . $v['exercise2_3'] . '</td>';
					echo '<td>' . $v['exercise2_4'] . '</td>';
					echo '<td>' . $v['exercise2_5'] . '</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<th scope="row">' . $v['PUP LATERAL WALK'] . '</th>';
					echo '<td>' . $v['exercise3_1'] . '</td>';
					echo '<td>' . $v['exercise3_2'] . '</td>';
					echo '<td>' . $v['exercise3_3'] . '</td>';
					echo '<td>' . $v['exercise3_4'] . '</td>';
					echo '<td>' . $v['exercise3_5'] . '</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<th scope="row">' . $v['LATERAL MAT SHUFFLE'] . '</th>';
					echo '<td>' . $v['exercise4_1'] . '</td>';
					echo '<td>' . $v['exercise4_2'] . '</td>';
					echo '<td>' . $v['exercise4_3'] . '</td>';
					echo '<td>' . $v['exercise4_4'] . '</td>';
					echo '<td>' . $v['exercise4_5'] . '</td>';
					echo '</tr>';
					echo '</table>';
					echo '<h3>' . $v['TOTAL REPS'] . '</h3>'; 
					echo str_repeat('&nbsp;', 5); 
					echo $v['total'];
					
			}
?>
</div>  