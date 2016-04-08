<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>application form</title>
	<link rel="stylesheet" href="../../css/normalize.css">
	<link rel="stylesheet" href="../../css/style.css">
</head>
<body>
	<div class="page-wrapper">
		<div class="registration">
			<?php echo form_open(base_url('Home_Controller/add_donor'),['id' => 'addform', 'name' => 'addform'])
			?>
				<?php echo validation_errors();?>
				
				<h2>REGISTRATION FORM</h2>
				<div class="group width-100">
					<label for="name">NAME</label>
					<input type="text" name="name" id="name" value="<?php echo set_value('name');?>" required="">
					<div class="error">
						<?php echo form_error('name'); ?>
                    </div>
				</div>
				<div class="group width-50">
					<span>GENDER</span>
					<div class="gender-radio">
						<label for="male">Male</label>
						<input type="radio" id="male" name="gender" value="male" <?php echo set_radio('gender','male');?> >
					</div>
					<div class="gender-radio">
						<label for="female">Female</label>
						<input type="radio" name="gender" id="female" value="female" <?php echo set_radio('gender','female');?> >
					</div>
					<div class="error">
						<?php echo form_error('gender'); ?>
                    </div>
				</div>
				<div class="group width-50">
					<span>DATE OF BIRTH</span>
					<select name="date" id="date" class="dob" >
						<?php for ($i=1; $i<=31; $i++) {?>
						<option value="<?php echo $i ?>" <?php echo set_select('date',$i);?> ><?php echo $i ?></option>
						<?php } ?>
					</select>
					<select name="month" id="month" class="dob">
						<?php for ($i=1;$i<=12;$i++) {?>
						<option value="<?php echo $i ?>"<?php echo $i,set_select('month',$i) ?>><?php echo $i ?></option>
						<?php } ?>
					</select>
					<select name="year" id="year" class="dob">
						<?php for ($i=1975;$i<=2016;$i++) {?>
						<option value="<?php echo $i ?>"<?php echo $i,set_select('year',$i) ?>><?php echo $i ?></option>
						<?php } ?>
					</select>
					<div class="error">
						<?php echo form_error('dob'); ?>
					</div>
				</div>
				<div class="group width-100">
					<label for="ADDRESS">ADDRESS</label>
					<textarea name="address" id="ADDRESS" cols="10" rows="5" required="" ><?php echo set_value('address') ?></textarea>
					<div  class="error">
						<?php echo form_error('address'); ?>
					</div>
				</div>
				<div class="group width-33">
					<label for="">BLOOD GROUP</label>
					<select name="bloodgroup" >
						<option value="" selected="" disabled="">select</option>
						<option value="a+"<?php echo  set_select('bloodgroup', 'a+'); ?> >A+</option>
						<option value="b+"<?php echo  set_select('bloodgroup', 'b+'); ?> >B+</option>
						<option value="ab+"<?php echo  set_select('bloodgroup', 'ab+'); ?> >AB+</option>
						<option value="0+"<?php echo  set_select('bloodgroup', 'o+'); ?> >O+</option>
						<option value="a-"<?php echo  set_select('bloodgroup', 'a-'); ?> >A-</option>
						<option value="b-"<?php echo  set_select('bloodgroup', 'b-'); ?> >B-</option>
						<option value="ab-"<?php echo  set_select('bloodgroup', 'ab-'); ?> >AB-</option>
						<option value="o-"<?php echo  set_select('bloodgroup', 'o-'); ?> >O-</option>
						<option value="I Dont Know"<?php echo  set_select('bloodgroup', 'I Dont Know'); ?> >I Dont Know</option>
					</select>
					<div  class="error">
						<?php echo form_error('bloodgroup'); ?>
					</div>
				</div>
				<div class="group width-33">
					<label for="hospital">HOSPITALS</label>
					<select name="hospital" id="hospital" required="">
					<option value="" selected="" disabled="">select</option>
					<?php 
						if (isset($result) and $result != FALSE) {
							foreach ($result as $key => $value)
							{?>
								<option value="<?php echo $value->id ?>" <?php echo set_select('hospital',$value->name) ?>> <?php echo $value->name ?></option>
							<?php }
						}?>
						
					</select>
					<div  class="error">
						<?php echo form_error('hospital'); ?>
					</div>
				</div>
				<div class="group width-100">
					<label for="mobile">NUMBER</label>
					<input type="tell" name="mobile" id="mobile" value="<?php echo set_value('mobile'); ?>" required="">
					<div  class="error">
						<?php echo form_error('mobile'); ?>
					</div>
				</div>
				<div class="group width-100">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" value="<?php echo set_value('email'); ?>">
					<div  class="error">
						<?php echo form_error('email'); ?>
					</div>
				</div>
				<div class="group width-100">
					<input type="submit" name="usubmit" id="submit" value="SUBMIT">
					<input type="submit" name="ucancel" id="cancel" value="CANCEL">
				</div>
			</form>
		</div>
	</div>
	<?php if (isset($message))
	{
		echo $message;
	} 
	if (isset($error)) {
		echo $error;
		# code...
	}
	?>
</body>
</html>