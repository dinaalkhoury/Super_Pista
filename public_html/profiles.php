<? ob_start(); ?>
<?php
include 'core/init.php';
protect_page();
include 'includes/profile_header.php';
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
                
                

<div id="profile">
<h2>Hello,<?php echo $user_data['first_name'] ?>!</h2>

	
	<?php 
	$user_id	=$_SESSION['user_id'];
	$data 		=  mysql_query ("SELECT workout from users WHERE user_id = '$user_id';");
	
	$info = mysql_fetch_array($data);
	$level = $info[0];
	
	  
	//if (($user_data['workout1']) == 1) { 
		//echo '<a href="workout1.php" ><h1>X</h1></a>'; }  
			//else { 
				//echo '<a href="workout1.php" >1</a>' ; }
	
	//echo '<a href="workout' . $level .'.php" style="display:block;">' . $level . '</a>' ;
	?>
    
    
    <div class="wrap">
        <div class="cubes">
            <div class="front"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="back"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="top"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="bottom"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="left"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="right"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
        </div>
    </div>
    <div class="wrap">
        <div class="cubes">
            <div class="front"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="back"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="top"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="bottom"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="left"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="right"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
        </div>
    </div>
    <div class="wrap">
        <div class="cubes">
            <div class="front"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="back"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="top"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="bottom"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="left"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="right"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
        </div>
    </div>
    <div class="wrap">
        <div class="cubes">
            <div class="front"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="back"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="top"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="bottom"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="left"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="right"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
        </div>
    </div>
    <div class="wrap">
        <div class="cubes">
            <div class="front"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="back"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="top"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="bottom"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="left"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="right"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
        </div>
    </div>
    <?php if  (($user_data['workout1']) == 1 and ($user_data['workout2']) == 1 and ($user_data['workout3']) == 1 and ($user_data['workout4']) == 1 and ($user_data['workout5']) == 1) { ?>
    <div class="wrap">
        <div class="cubes">
            <div class="front"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="back"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="top"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="bottom"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="left"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="right"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
        </div>
    </div>
 <? } ?>  
 	<?php if  (($user_data['workout1']) == 1 and ($user_data['workout2']) == 1 and ($user_data['workout3']) == 1 and ($user_data['workout4']) == 1 and ($user_data['workout5']) == 1) { ?>
    <div class="wrap">
        <div class="cubes">
            <div class="front"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="back"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="top"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="bottom"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="left"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="right"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
        </div>
    </div>
 <? } ?>  
 	<?php if  (($user_data['workout1']) == 1 and ($user_data['workout2']) == 1 and ($user_data['workout3']) == 1 and ($user_data['workout4']) == 1 and ($user_data['workout5']) == 1) { ?>
    <div class="wrap">
        <div class="cubes">
            <div class="front"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="back"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="top"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="bottom"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="left"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="right"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
        </div>
    </div>
 <? } ?>  
 	<?php if  (($user_data['workout1']) == 1 and ($user_data['workout2']) == 1 and ($user_data['workout3']) == 1 and ($user_data['workout4']) == 1 and ($user_data['workout5']) == 1) { ?>
    <div class="wrap">
        <div class="cubes">
            <div class="front"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="back"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="top"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="bottom"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="left"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="right"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
        </div>
    </div>
 <? } ?>  
</div>   
	
	
	
	
    <?
	
	//while($info = mysql_fetch_array($data)){
		//$Workout = $info['workout'];
		//}
	
	
	//include '4real/includes/workouts/workout2results.php';
	//include '4real/includes/workouts/workout1results.php';
	
	?>



<?php include 'includes/overall/footer.php'; ?>
<? ob_flush(); ?>