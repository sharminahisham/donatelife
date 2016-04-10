<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>admin login</title>
	<link rel="stylesheet" href="<?php echo base_url('css/loginstyle.css') ?>">
</head>
<body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Admin Login</h1>
			</div>

			<div class="login-form">
			<?php echo form_open(base_url('login/verify'),['method' => 'POST']) ?>
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="username" id="login-name" name="username">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="password" id="login-pass" name="password">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

				<input type="submit" value="login" class="btn btn-primary btn-large btn-block">
				<!-- <a class="btn btn-primary btn-large btn-block" href="#">login</a> -->
			</div>
		</div>
	</div>

<!-- 


	USERNAME<input type="text" name="username"><br><br>
	PASSWORD<input type="password" name="password"><br><br>
	<input type="submit" value="LOGIN"> -->
</form>
<?php if (isset($message)): ?>
	<?php echo $message ?>
<?php endif ?>
</body>
</html>