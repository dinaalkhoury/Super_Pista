<? ob_start(); ?>
<?php
include 'core/init.php';
//protect_page();
include 'includes/profile_header.php';
?>
<script type="text/javascript" src="../css/cssfx.js"></script>
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
<script type="text/javascript" src="jquery-1.9.1.js"></script>
<script type="text/javascript" src="scripts/videopreview1.js"></script>
<script type="text/javascript" src="scripts/videopreview2.js"></script>
                
                




<!--<div class="row-fluid">
	  <div class="span3">
	  <h2>Hello,<?php echo $user_data['first_name'] ?>!</h2>
	  </div>-->
</div>

<div id="video-preview" class="row-fluid">
<div class="span2" id="photoShow">
        <div class="current">
            <a href="workout1.php"><img src="images/selfy.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="workout1.php"><img src="images/kicks5.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="workout1.php"><img src="images/kicks1.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="workout1.php"><img src="images/kicks2.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
    </div>
	
<div class="span2" id="photoShow2">
        <div class="current">
            <a href="workout2.php"><img src="images/kicks3.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="workout2.php"><img src="images/selfy.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="workout2.php"><img src="images/kicks1.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="workout2.php"><img src="images/kicks2.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
    </div>
	
<div class="span2" id="photoShow3">
        <div class="current">
            <a href="workout3.php"><img src="images/kicks5.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="workout3.php"><img src="images/kicks3.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="workout3.php"><img src="images/kicks1.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="workout3.php"><img src="images/kicks2.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
    </div>
<div class="span2" id="photoShow4">
        <div class="current">
            <a href="workout4.php"><img src="images/kicks2.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="workout4.php"><img src="images/selfy.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="workout4.php"><img src="images/kicks1.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="workout4.php"><img src="images/kicks4.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
    </div>
<div class="span2" id="photoShow5">
        <div class="current">
            <a href="workout5.php"><img src="images/kicks1.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="workout5.php"><img src="images/selfy.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="workout5.php"><img src="images/kicks3.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="workout5.php"><img src="images/kicks2.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
    </div>
<div class="span2" id="photoShow6">
        <div class="current">
            <a href="http://www.samofit.com/"><img src="images/kicks1.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="http://www.samofit.com/"><img src="images/selfy.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="http://www.samofit.com/"><img src="images/kicks3.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="http://www.samofit.com/"><img src="images/kicks2.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
    </div>	
<div class="span2" id="photoShow7">
        <div class="current">
            <?php echo '<a href="workout1.php" ><img src="images/kicks1.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>' ; ?>
        </div>
        <div>
            <a href="http://www.samofit.com/"><img src="images/selfy.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="http://www.samofit.com/"><img src="images/kicks2.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="http://www.samofit.com/"><img src="images/kicks3.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
    </div>
</div>

<div id="video-preview2" class="row-fluid">


<div class="span2" id="photoShow8">
        <div class="current">
            <?php echo '<a href="workout1.php" ><img src="images/kicks1.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>' ; ?>
        </div>
        <div>
            <a href="http://www.samofit.com/"><img src="images/selfy.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="http://www.samofit.com/"><img src="images/kicks2.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="http://www.samofit.com/"><img src="images/kicks3.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
    </div>
<div class="span2" id="photoShow9">
        <div class="current">
            <?php echo '<a href="workout1.php" ><img src="images/kicks1.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>' ; ?>
        </div>
        <div>
            <a href="http://www.samofit.com/"><img src="images/selfy.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="http://www.samofit.com/"><img src="images/kicks2.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
        <div>
            <a href="http://www.samofit.com/"><img src="images/kicks3.jpg" alt="Photo Gallery" width="100px" height="100px" class="gallery" /></a>
        </div>
    </div>
</div>
<div id="ad-box" class="row-fluid"></div>


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
    
    
    <!--<div class="wrap">
        <div class="cubes">
            <div class="front"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="back"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="top"></div>
            <div class="bottom"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="left"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="right"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
        </div>
    </div>
    <div class="wrap">
        <div class="cubes">
            <div class="front"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="back"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="top"></div>
            <div class="bottom"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="left"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="right"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
        </div>
    </div>
    <div class="wrap">
        <div class="cubes">
            <div class="front"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="back"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="top"></div>
            <div class="bottom"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="left"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="right"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
        </div>
    </div>
    <div class="wrap">
        <div class="cubes">
            <div class="front"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="back"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="top"></div>
            <div class="bottom"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="left"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="right"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
        </div>
    </div>
    <div class="wrap">
        <div class="cubes">
            <div class="front"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="back"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="top"></div>
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
            <div class="top"></div>
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
            <div class="top"></div>
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
            <div class="top"></div>
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
            <div class="top"></div>
            <div class="bottom"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="left"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
            <div class="right"><?php echo '<a href="workout1.php" >1</a>' ; ?></div>
        </div>
    </div>
 <? } ?>  
</div>-->   
	
	
	
	
    <?
	
	//while($info = mysql_fetch_array($data)){
		//$Workout = $info['workout'];
		//}
	
	
	//include '4real/includes/workouts/workout2results.php';
	//include '4real/includes/workouts/workout1results.php';
	
	?>



<?php include 'includes/overall/footer.php'; ?>
<? ob_flush(); ?>