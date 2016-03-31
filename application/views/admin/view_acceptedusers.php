<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Accepted users</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php if(isset($result) &&$result!=FALSE): ?>
			
	id : <?php echo $result['0']->id ?><br>
	name : <?php echo $result['0']->name ?><br>
	date of birth : <?php echo $result['0']->dob ?><br>
	gender : <?php echo $result['0']->gender ?><br>
	bloodgroup : <?php echo $result['0']->bloodgroup ?><br>
<?php endif; ?>		
<a href="<?php echo base_url('Hospital_Admin_Controller/') ?>">back</a>


</body>
</html>