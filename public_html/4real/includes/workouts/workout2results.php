<div class="video">
			<?php
			
           // if (empty($user_data['profile']) === false) {
               // echo '<img src="', $user_data['profile'], '" alt= "', $user_data['first_name'], '\'s Profile Image">';
            //}
	
	
	
$user_id	= $_SESSION['user_id'];
$data 		= mysql_query("SELECT * FROM `Workout2` WHERE `user_id` = '$user_id'");

//$cast = array();

$i = 0;
while($info = mysql_fetch_array($data)){

	
		$round1 = 'ROUND1';
		$round2 = 'ROUND2';
		$round3 = 'ROUND3';
		$round4 = 'ROUND4';
		$round5 = 'ROUND5';
		
		$Deadlift 	= 'DEADLIFT';
		$Row		= 'ROW';
		$Plank		= 'UP-DOWN PLANK';
		$JR			= 'ROPE JUMPS';
		
		$id = $info['user_id'];
		$Date= $info['Date'];
		
		$Deadlift1 = $info['Deadlift1'];
		$Row1	= $info['Row1'];
		$Plank1 = $info['p2p1'];
		$JR1 = $info['Jumprope1'];
		
		$Deadlift2 = $info['Deadlift2'];
		$Row2	= $info['Row2'];
		$Plank2 = $info['p2p2'];
		$JR2 = $info['Jumprope2'];
		
		$Deadlift3 = $info['Deadlift3'];
		$Row3	= $info['Row3'];
		$Plank3 = $info['p2p3'];
		$JR3 = $info['Jumprope3'];
		
		$Deadlift4 = $info['Deadlift4'];
		$Row4	= $info['Row4'];
		$Plank4 = $info['p2p4'];
		$JR4 = $info['Jumprope4'];
		
		$Deadlift5 = $info['Deadlift5'];
		$Row5	= $info['Row5'];
		$Plank5 = $info['p2p5'];
		$JR5 = $info['Jumprope5'];
		
		$TR = $info['Total'];
		$TOTAL = 'TOTAL REPS';
		
		$cast[] = array('user_id' 	 => $id,
						'Date'		 => $Date,
						'ROUND1'	 => $round1,	   'ROUND2'=>$round2, 	'ROUND3' => $round3,	'ROUND4' => $round4, 'ROUND5' => $round5,
						'DEADLIFT'	 => $Deadlift,  'ROW'  => $Row,  	'P2P'  => $Plank,  		'JUMPROPE'  => $JR,	
						'Deadlift1'  => $Deadlift1, 'Row1' => $Row1, 	'p2p1' => $Plank1, 		'Jumprope1' => $JR1, 
						'Deadlift2'  => $Deadlift2, 'Row2' => $Row2, 	'p2p2' => $Plank2, 		'Jumprope2' => $JR2,
						'Deadlift3'  => $Deadlift3, 'Row3' => $Row3, 	'p2p3' => $Plank3, 		'Jumprope3' => $JR3, 
						'Deadlift4'  => $Deadlift4, 'Row4' => $Row4, 	'p2p4' => $Plank4, 		'Jumprope4' => $JR4, 
						'Deadlift5'	 => $Deadlift5, 'Row5' => $Row5, 	'p2p5' => $Plank5, 		'Jumprope5' => $JR5,
						'TOTAL REPS' => $TOTAL,		'Total'=> $TR		
						);
						
					
				
			 $i++;	
	
}
//print_r ($cast);
 





   foreach($cast as $k=>$v) {
		echo '</br></br></br></br></br>';
		echo '<h3>' . date('m/d/Y', $v['Date']) . '</h3>';
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
		            echo '<th scope="row">' . $v['DEADLIFT'] . '</th>';
					echo '<td>' . $v['Deadlift1'] . '</td>';
					echo '<td>' . $v['Deadlift2'] . '</td>';
					echo '<td>' . $v['Deadlift3'] . '</td>';
					echo '<td>' . $v['Deadlift4'] . '</td>';
					echo '<td>' . $v['Deadlift5'] . '</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<th scope="row">' . $v['ROW'] . '</th>';
					echo '<td>' . $v['Row1'] . '</td>';
					echo '<td>' . $v['Row2'] . '</td>';
					echo '<td>' . $v['Row3'] . '</td>';
					echo '<td>' . $v['Row4'] . '</td>';
					echo '<td>' . $v['Row5'] . '</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<th scope="row">' . $v['P2P'] . '</th>';
					echo '<td>' . $v['p2p1'] . '</td>';
					echo '<td>' . $v['p2p2'] . '</td>';
					echo '<td>' . $v['p2p3'] . '</td>';
					echo '<td>' . $v['p2p4'] . '</td>';
					echo '<td>' . $v['p2p5'] . '</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<th scope="row">' . $v['JUMPROPE'] . '</th>';
					echo '<td>' . $v['Jumprope1'] . '</td>';
					echo '<td>' . $v['Jumprope2'] . '</td>';
					echo '<td>' . $v['Jumprope3'] . '</td>';
					echo '<td>' . $v['Jumprope4'] . '</td>';
					echo '<td>' . $v['Jumprope5'] . '</td>';
					echo '</tr>';
					echo '</table>';
					echo '<h3>' . $v['TOTAL REPS'] . '</h3>'; 
					echo str_repeat('&nbsp;', 5); 
					echo $v['Total'];
					
			}
?>
</div>  