<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LOGIN</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php echo form_open(base_url('Hospital_Admin_Controller/verify'),['method' => 'POST']) ?>
	USERNAME<input type="text" name="username"><br><br>
	PASSWORD<input type="password" name="password"><br><br>
	<input type="submit" value="LOGIN">
</form>

<?php if (isset($message)): ?>
	<?php echo $message; ?>
<?php endif ?>
</body>
</html>