<?php
include 'core/init.php';
include 'includes/overall/header2.php';
?>

<H1>Contact</H1>
<p>Just a template.</p>

<?php

$user_id	=$_SESSION['user_id'];

$data2 		=  mysql_query ("SELECT Workout2.user_id, Workout2.Row1, Workout2.p2p1, Workout2.user_id, Workout2.Row1, Workout2.p2p1
    from Workout2 
    WHERE Workout2.user_id = '$user_id';");
	
$info2		= mysql_fetch_array( $data2 );
print_r ($info2);
?>

<?php include 'includes/overall/footer.php'; ?>
    
    
    
