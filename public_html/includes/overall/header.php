
   <head>
    
    <title>TITLE</title>
    <meta charset="UTF-8">
  	<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>-->
    <link href="../css/phptemplate.css" rel="stylesheet" type="text/css">
    </head>
    <body>
<header>
  <nav>
    <ul>
    <li><a href="../login and register/includes/indexnew.php">Workouts</a></li>
    <li><a href="../login and register/includes/downloads.php">Downloads</a></li>
    <li><a href="../login and register/includes/forum.php">Forum</a></li>
    <li><a href="../login and register/includes/contact.php">Contact us</a></li>
    <li><a href="../login and register/includes/logout.php">Log out</a></li>
    <li><a href="<?php echo $user_data['username']; ?>"> Profile</a></li>
    </ul>
 </nav>
    <div class="clear"></div>
 </header>
    <div id="container">
<aside>
	<?php 
	if (logged_in() === true) {
		include 'includes/widgets/loggedin.php';
	} else {
	include 'includes/widgets/login.php';
	}
	include 'includes/widgets/user_count.php';
	?>
</aside>