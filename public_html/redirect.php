<? ob_start(); ?>
<?php
echo file_get_contents("http://boxnburn.com");
header ("Refresh:20; URL=2krow.php");
?>
<? ob_flush(); ?>
