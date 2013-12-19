<?php
include 'core/init.php';
include 'includes/overall/header.php';
?>
     	</div>
        <div id="video"><video width="500" height="350" controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.
</video> </div>
        
    	<form action="" method="post">
	<ul>
    	 <li>
        	Submit your reps!<br />
        	<input type="text" name="workout" />
         <li>
         	<input type="text" name="comment" />
         </li>
         <li>
        	<input type="submit" value="submit" />
    	 </li>
    </ul>
</form>
        <div id="video"><video width="500" height="350" controls>
      <source src="movie.mp4" type="video/mp4">
      <source src="movie.ogg" type="video/ogg">
    Your browser does not support the video tag.
    </video> </div>
<form action="" method="post">
	<ul>
    	 <li>
        	Submit your reps!<br />
        	<input type="text" name="workout_2" />
         <li>
         	<input type="text" name="comment" />
         </li>
         <li>
        	<input type="submit" value="submit" />
    	 </li>
    </ul>
</form>

    
    
    
    <?php

	
	
//} else {
	//header('Location: index.php');
	exit();


include 'login and register/includes/overall/footer.php'; 
?>
