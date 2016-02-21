<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view registered_user</title>
</head>
<body>
	<?php 
		if(isset($result) and $result != null)
		{
			echo $result;
		}
		if(isset($message) and $message != null)
		{
			echo $message;
		}
		if(isset($error) and $error != null)
		{
			echo $error;
		}
	?>
</body>
</html>