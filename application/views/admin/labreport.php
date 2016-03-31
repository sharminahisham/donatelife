<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LABREPORT</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php echo form_open(base_url('Lab_Controller/add_report'),['id' => 'addform', 'name' => 'addform'])
	?>
			<?php echo validation_errors();?>
		<h2>MEDICAL REPORT</h2>
        <br><br>

		DATE<input type="date" name="testdate" id="testdate" value="<?php echo set_value('testdate'); ?>"><br><br>
		TIME<input type="time" name="testtime" id="testtime" value="<?php echo set_value('testtime'); ?>"><br><br>
		TOKEN NO<input type="text" name="tokenno" id="tokenno" value="<?php echo set_value('tokenno'); ?>"><br><br>
		FORWADED BY<input type="text" name="forwadedby" id="forwadedby" value="<?php echo set_value('forwadedby'); ?>"><br><br>
		FORWADED TO<input type="text" name="forwadedto" id="forwadedto" value="<?php echo set_value('forwadedto'); ?>"><br><br>
		MEDICAL REPORT<textarea name="medicalreport" id="medicalreport" value="<?php echo set_value('medicalreport'); ?>"></textarea><br><br>
		<input type="submit" value="FORWARD">
</form>
	<?php  
       if(isset($message) and $message != null)
		{
			echo $message;
		}
	?>
	
</body>
</html>