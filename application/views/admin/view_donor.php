<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view Donor</title>
</head>
<body>
<?php if(isset($result))

{?>
	id : <?php echo $result['0']->id ?><br>
	name : <?php echo $result['0']->name ?><br>
	bloodgroup : <?php echo $result['0']->bloodgroup;

	 ?><br>
	 <?php echo form_open(base_url('Admin_Controller/accept'), ['id' => 'acceptform','name' => 'acceptform']) ?>
		<?php echo validation_errors() ;?>
	    opinion: <input type="text" name="opinion" id="opinion">	
		 <input type="hidden" name="id" value="<?php echo $result['0']->id ?>" />
		<button type="submit"> Submit</button>
	</form>
	<?php 
}
	if (isset($error)): ?>
		echo $error;
	<?php endif ?>
</body>
</html>