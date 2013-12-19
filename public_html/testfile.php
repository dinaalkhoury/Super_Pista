<?php 
$fh = fopen("testfile.txt", 'w') or die("Failed");
$text = <<<_END
Line 1
Line 2
Line 3

_END;
fwrite($fh, $text) or die("could not write");
fclose($fh);
echo "File 'testfile.txt' success";
?>