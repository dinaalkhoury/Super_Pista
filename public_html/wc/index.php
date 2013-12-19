<?php 
require_once 'includes/login.php';
if (isset($_POST['delete']) && isset($_POST['date']))
{
	$date 	= get_post('date');
	$query  = "DELETE FROM workout1 WHERE date='$date'";
	
	if (!mysql_query($query, $db_server))
			echo "DELETE failed: $query<br />" .
			mysql_error() . "<br /><br />";
}
if (isset($_POST['date']) &&
		isset($_POST['workout'])&&
		isset($_POST['result'])&&
		isset($_POST['notes']))
{
		$date		= get_post('date');
		$workout	= get_post('workout');
		$result		= get_post('result');
		$notes		= get_post('notes');
		
		$query = "INSERT INTO workout1 VALUES" .
			"('$date', '$workout', '$result', '$notes')";
			
		if (!mysql_query($query, $db_server))
			echo "INSERT failed: $query<br />" .
			mysql_error() . "<br /><br />";
}

?>
<link href="css/wc.css" rel="stylesheet" type="text/css">

<form action="" method="post">
	<ul>
    	<li>
        	First name*:<br>
            <input type="text" name="first_name" value="<?php echo $user_data['first_name']; ?>">
        </li>
        <li>
        	Last name:<br>
            <input type="text" name="last_name" value="<?php echo $user_data['last_name']; ?>">
        </li>
        <li>
        	Email:<br>
            <input type="text" name="email" value="<?php echo $user_data['email']; ?>">
        </li>
        <li>
        	<input type="checkbox" name="allow_email"<?php if ($user_data['allow_email'] == 1) { echo 'checked="checked"'; } ?> /> Would you like to recieve email from us? 
        </li>
        <li>
        	<input type="checkbox" name="allow_email"<?php if ($user_data['allow_email'] == 1) { echo 'checked="checked"'; } ?> /> Would you like to recieve email from us? 
        </li>
        <li>
        	<input type="submit" value="update" />
        </li>
    </ul>
</form>
<?php

$query = "SELECT * FROM workout1";
$result = mysql_query($query);
	if (!$result) die ("Database access failed: " . mysql_error());

$rows = mysql_num_rows($result);
for ($j = 0 ; $j < $rows ; ++$j)
{
	$row = mysql_fetch_row($result);
	echo <<<_END
	<pre>	
	    Date $row[0] 
	 Workout $row[1]
	  Result $row[2] 
	   Notes $row[3] 
	</pre> 
	<form action="" method="post">
	<input type="hidden" name="delete" value="yes" />
	<input type="hidden" name="date" value="$row[0]" />
	<input type="submit" value="DELETE RECORD" /></form>
_END;
}

function get_post($var)
{
	return mysql_real_escape_string($_POST[$var]);
}
?>
this will be the home page