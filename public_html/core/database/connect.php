<?php

$connect_error = 'sorry sucka!';
mysql_connect('localhost', 'samofitc_Q', '322300') or die ($connect_error);
mysql_select_db('samofitc_lr') or die ($connect_error);

?>