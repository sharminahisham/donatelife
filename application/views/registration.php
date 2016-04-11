<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Donate life</title> 
<link href="<?php echo base_url('css/tooplate_style.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('css/bootstrap.css') ?>" rel="stylesheet" type="text/css" />

</head>
<body> 

<div id="tooplate_header_wrapper">

    <div id="tooplate_header" style="background: url(<?php echo base_url('images/tooplate_header.png')?>);">
    
        <div id="site_title">
        
        	<h1><a href="#"><img src="<?php echo base_url('images/pic2.jpg') ?>" alt="business template" /><span>donate organs</span></a></h1>
        
        </div> <!-- end of site_title -->
        
        <div id="header_phone_no">

			Toll Free: <span>08 324 552 409</span>
        
        </div>
        
        <div class="cleaner_h10"></div>
        
        <div id="tooplate_menu" style="background:url( <?php echo base_url('images/tooplate_menu.png');?>);">
        	
            <div id="home_menu"><a href="#"></a></div>
            <!-- <div id="home_menu" style="background: url(<?php echo base_url('images/tooplate_home.png')?>);"><a href="#"></a></div> -->

                
            <ul>
                <li><a href="<?php echo base_url('index') ?>" class="current">Home</a></li>
                <!--<li><a href="<?php echo base_url('about') ?>">About Us</a></li>-->
                <li><a href="<?php echo base_url('hospital') ?>">Hospital</a></li>
                <li><a href="<?php echo base_url('login') ?>">Admin</a></li>
                <li><a href="<?php echo base_url('hospital-login') ?>">hospital-login</a></li>
                <li><a href="<?php echo base_url('registration') ?>">registration</a></li>
            </ul>
        
        </div> <!-- end of tooplate_menu -->
        
    </div>	  
</div> <!-- end of header_wrapper -->

		<div>
			<?php echo form_open(base_url('Home_Controller/add_donor'),['id' => 'addform', 'name' => 'addform']) ?>
            <div class="form-reg">
				<h2 class="text-center">REGISTRATION FORM</h2>
				<div class="col-md-6 form-group">
                    <label for="name" >NAME</label>
                    <input class="form-control" type="text" name="name" id="name" value="<?php echo set_value('name');?>" required="">
                    <div class="error">
                        <?php echo form_error('name'); ?>
                    </div>
				</div>
                <div class="col-md-2 form-group">
                    <div class="checkbox"><label for=""><input type="radio" name="gender" value="male"/> Male</label></div>
                </div>
                <div class="col-md-2 form-group">
                    <div class="checkbox"><label for=""><input type="radio" name="gender" value="female"/> Female</label></div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="ADDRESS" >ADDRESS</label>
                    <textarea name="address" class="form-control" id="ADDRESS" cols="10" rows="5" required="" ><?php echo set_value('address') ?></textarea>
                    <div  class="error">
                        <?php echo form_error('address'); ?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label>DATE OF BIRTH</label>
                    <select class="" name="date" id="date" class="dob" >
						<?php for ($i=1; $i<=31; $i++) {?>
						<option value="<?php echo $i ?>" <?php echo set_select('date',$i);?> ><?php echo $i ?></option>
						<?php } ?>
					</select>
                    <select class="" name="month" id="month" class="dob">
						<?php for ($i=1;$i<=12;$i++) {?>
						<option value="<?php echo $i ?>"<?php echo $i,set_select('month',$i) ?>><?php echo $i ?></option>
						<?php } ?>
					</select>
                    <select class="" name="year" id="year" class="dob">
						<?php for ($i=1975;$i<=2016;$i++) {?>
						<option value="<?php echo $i ?>"<?php echo $i,set_select('year',$i) ?>><?php echo $i ?></option>
						<?php } ?>
					</select>
                    <div class="error">
						<?php echo form_error('dob'); ?>
                    </div>
                </div>
				<div class="col-md-6 form-group">
					<label for="">BLOOD GROUP</label>
					<select class="form-control" name="bloodgroup" >
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
				<div class="col-md-6 form-group">
					<label for="hospital">HOSPITALS</label>
					<select class="form-control" name="hospital" id="hospital" required="">
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
				<div class="col-md-6 form-group">
					<label for="mobile">NUMBER</label>
					<input class="form-control" type="tell" name="mobile" id="mobile" value="<?php echo set_value('mobile'); ?>" required="">
					<div  class="error">
						<?php echo form_error('mobile'); ?>
					</div>
				</div>
				<div class="col-md-6 form-group">
					<label for="email">Email</label>
					<input class="form-control" type="email" name="email" id="email" value="<?php echo set_value('email'); ?>">
					<div  class="error">
						<?php echo form_error('email'); ?>
					</div>
				</div>
				<div class="col-md-12 form-group">
					<input class="btn btn-default" type="submit" name="usubmit" id="submit" value="SUBMIT">
					<input class="btn btn-danger" type="submit" name="ucancel" id="cancel" value="CANCEL">
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