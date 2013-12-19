<? ob_start(); ?>
<?php
include 'core/init.php';
protect_page();
include 'includes/overall/header2.php';
?>
				
                <?php
                	//if (isset($_GET['username']) === true && empty($_GET['username']) === false) {
                    //$username     = $_GET['username'];
                
                	//if(user_exists($username) === true) {
                    //$user_id  	  = user_id_from_username($username);
                    //$profile_data = user_data($user_id, 'first_name', 'last_name', 'email');
					
					 //if (empty($user_data['profile']) === false) {
                 	//echo '<img src="', $user_data['profile'], '" alt= "', $user_data['first_name'], '\'s Profile Image">';
                	//}
        			//}
   				 	//}
            	?>
    	
</br></br>
<h2>Hello,<?php echo $user_data['first_name'] ?>!</h2>

	
	<?php 
	$user_id	=$_SESSION['user_id'];
	$data 		=  mysql_query ("SELECT workout from users WHERE user_id = '$user_id';");
	
	$info = mysql_fetch_array($data);
	$level = $info[0];
	
	//echo '<a href="workout' . $level .'.php" style="display:block;">' . $level . '</a>' ;
	?>
    
	<table>
	<tr class="workouts">
	<td class="blank"></td>
    <td class="wider"><?php  if (($user_data['workout1']) == 1){
			 echo '<a href="workout1.php" style="display:block;"><h1>X</h1></a>';}  else{ echo '<a href="workout1.php" style="display:block;">1</a>' ;}?> </td>
    <td class="spacer"></td>
    <td class="wider"><?php echo '<a href="workout2.php" style="display:block;">2</a>' ; ?> </td>
	<td class="spacer"></td>
	<td class="wider"><?php echo '<a href="workout3.php" style="display:block;">3</a>' ; ?> </td>
	<td class="spacer"></td>
    <td class="wider"><?php echo '<a href="workout4.php" style="display:block;">4</a>' ; ?> </td>
    <td class="spacer"></td>
    <td class="wider"><?php echo '<a href="workout5.php" style="display:block;">5</a>' ; ?> </td>
    </tr>
    </table>
    
    <?
	
    if (($user_data['workout1']) == 1 and ($user_data['workout2']) == 1 and ($user_data['workout3']) == 1 and ($user_data['workout4']) == 1 and ($user_data['workout5']) == 1){
		?>
	<table>
	<tr class="workouts">
	<td class="blank"></td>
    <td class="wider"><?php echo '<a href="workout6.php" style="display:block;">6</a>' ; ?> </td>
    <td class="spacer"></td>
    <td class="wider"><?php echo '<a href="workout7.php" style="display:block;">7</a>' ; ?> </td>
	<td class="spacer"></td>
	<td class="wider"><?php echo '<a href="workout8.php" style="display:block;">8</a>' ; ?> </td>
	<td class="spacer"></td>
    <td class="wider"><?php echo '<a href="workout9.php" style="display:block;">9</a>' ; ?> </td>
    <td class="spacer"></td>
    <td class="wider"><?php echo '<a href="workout10.php" style="display:block;">10</a>' ; ?> </td>
    </tr>
    </table>
    
    <?
	
	}
	
	?>
    <?
	
	//while($info = mysql_fetch_array($data)){
		//$Workout = $info['workout'];
		//}
	
	
	//include 'includes/workouts/workout2results.php';
	//include 'includes/workouts/workout1results.php';
	
	?>



<?php include 'includes/overall/footer.php'; ?>
<? ob_flush(); ?>