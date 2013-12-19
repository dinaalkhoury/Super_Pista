<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
<head>
<title>home</title>
<link href="css/phptemplate2.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php
include 'core/init.php';
include 'includes/overall/header.php';
?>

<H1>Home</H1>
<p>Just a template.</p>

<?php
if (has_access($session_user_id, 1) === true) {
	echo 'Admin!';	
}
if (has_access($session_user_id, 2) === true) {
	echo 'Moderator!';	
}
?>


<?php include 'includes/overall/footer.php'; 
?>


</body>
</html>