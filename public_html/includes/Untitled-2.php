<div class="video">
			<?php
			
           // if (empty($user_data['profile']) === false) {
               // echo '<img src="', $user_data['profile'], '" alt= "', $user_data['first_name'], '\'s Profile Image">';
            //}
		
	
	
$user_id	= $_SESSION['user_id'];
$data 		= mysql_query("SELECT * FROM Workout2 WHERE user_id = $user_id");
$info		= mysql_fetch_array( $data );
?> 



<h3>Workout 1.1 <?php echo date('m/d/Y', $info[1]);  ?></h3>
<table class="results" width="200" border="1">
  <tr>
  	<th scope="col"></th>
    <th scope="col">ROUND 1</th>
    <th scope="col">ROUND 2</th>
    <th scope="col">ROUND 3</th>
    <th scope="col">ROUND 4</th>
    <th scope="col">ROUND 5</th>
  </tr>
  <tr>
    <th scope="row">PUSH-UP</th>
    <td><?php echo $info [2];?></td>
    <td><?php echo $info [6];?></td>
    <td><?php echo $info [10];?></td>
    <td><?php echo $info [14];?></td>
    <td><?php echo $info [18];?></td>
  </tr>
  <tr>
    <th scope="row">SQUAT</th>
    <td><?php echo $info [3];?></td>
    <td><?php echo $info [7];?></td>
    <td><?php echo $info [11];?></td>
    <td><?php echo $info [15];?></td>
    <td><?php echo $info [19];?></td>
  </tr>
  <tr>
    <th scope="row">INCHWORM</th>
    <td><?php echo $info [4];?></td>
    <td><?php echo $info [8];?></td>
    <td><?php echo $info [12];?></td>
    <td><?php echo $info [16];?></td>
    <td><?php echo $info [20];?></td>
  </tr>
  <tr>
    <th scope="row">MARCH</th>
    <td><?php echo $info [5];?></td>
    <td><?php echo $info [9];?></td>
    <td><?php echo $info [13];?></td>
    <td><?php echo $info [17];?></td>
    <td><?php echo $info [21];?></td>
  </tr>
</table>
<h3>Total reps  	<?php echo $info [22];?></h3>

</div>  