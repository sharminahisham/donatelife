<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view registered_users</title>
</head>
<body>
		<table border="2px">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>bloodgroup</th>
		    <th>statuscode</th>
		    <th>check</th>
		</tr>
	<?php 
		if($result != null)
		{
			foreach ($result as $key => $value) {
		?>
		<tr>
			<td><?php echo $value->id ?></td>
			<td><?php echo $value->name ?></td>
			<td><?php echo $value->bloodgroup ?></td>
			<td><?php echo $value->statuscode?></td>
			<td><a href="<?php echo base_url('/index.php/Admin_Controller/view_donor/'.$value->id); ?>">accept</a>/
			<a href="<?php echo base_url('index.php/Admin_Controller/reject/'.$value->id); ?>">Reject</a></td>
		</tr>
<?php }} ?> 
</table>


</body>
</html>