<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ajax form</title>
</head>

<body>
<form class="ajax" action="contacts.php" method="post">
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
        	<input type="submit" value="update" />
        </li>
    </ul>
</form>

 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="main.js"></script>
</body>
</html>