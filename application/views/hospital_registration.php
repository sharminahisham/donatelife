<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hospital registration</title>
</head>
<body>
   <?php echo form_open(base_url('Hospital_Controller/add_hospital'),['id' => 'addform', 'name' => 'addform'])
	?>
			<?php echo validation_errors();?>

			<h1> HOSPITAL REGISTRATION</h1>
			<br><br>
			NAME:<input type="text" name="name" id="name" value="<?php echo set_value('name');?>"><br><br>
			CODE:<input type="text" name="code" id="code" value="<?php echo set_value('code');?>"><br><br>
			ADDRESS:<textarea name="address" id="address" ><?php echo set_value('address') ?></textarea><br><br>
			CONTACT:<input type="mobile" name="contact" id="contact" value="<?php echo set_value('contact'); ?>">
				<br><br>
			MAIL:<input type="email" name="email"id="email" value="<?php echo set_value('email'); ?>">
				<br><br>
			USER NAME:<input type="text" name="username"id="username" value="<?php echo set_value('username'); ?>">
				<br><br>
			PASSWORD:<input type="password" name="password"id="password" value="<?php echo set_value('password'); ?>">
				<br><br>	
			<input type="submit" name="usubmit" id="submit" value="SUBMIT">
			<input type="submit" name="ucancel" id="cancel" value="CANCEL">
	</form>
	<?php  
       if(isset($message) and $message != null)
		{
			echo $message;
		}
	?>

</body>
</html>