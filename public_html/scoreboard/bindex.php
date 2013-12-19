<? ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<h1>Tadaaaa!</h1>
<?php 
echo file_get_contents("http://samofit.com");
header ("Refresh:10; URL=workout.php");?>
<? ob_flush(); ?>

</body>
</html>
<? ob_flush(); ?>
