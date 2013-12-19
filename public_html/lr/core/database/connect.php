<?php
$connect_error = 'sorry sucka!';
mysql_connect('localhost', 'root', 'root') or die ($connect_error);
mysql_select_db('lr') or die ($connect_error);
?>