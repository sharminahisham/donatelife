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
    <?php echo form_open(base_url('Hospital_Controller/add_hospital'),['id' => 'addform', 'name' => 'addform']) ?>
        <div class="form-reg ">
			<h1> HOSPITAL REGISTRATION</h1>
            <div class="col-md-6 form-group">
                <label for="">NAME</label>
                <input class="form-control" type="text" name="name" id="name" value="<?php echo set_value('name');?>">
            </div>
            <div class="col-md-6 form-group">
                <label for="">CODE</label>
                <input class="form-control" type="text" name="code" id="code" value="<?php echo set_value('code');?>">
            </div>
            <div class="col-md-6 form-group">
                <label for="">USER NAME</label>
                <input class="form-control" type="text" name="username"id="username" value="<?php echo set_value('username'); ?>">
            </div>
            <div class="col-md-6 form-group">
                <label for="">PASSWORD</label>
                <input class="form-control" type="password" name="password"id="password" value="<?php echo set_value('password'); ?>">
            </div>

            <div class="col-md-6 form-group">
                <label for="">MAIL</label>
                <input class="form-control" type="email" name="email"id="email" value="<?php echo set_value('email'); ?>">
            </div>
            <div class="col-md-6 form-group">
                <label for="">CONTACT</label>
                <input class="form-control" type="mobile" name="contact" id="contact" value="<?php echo set_value('contact'); ?>">
            </div>
            <div class="col-md-12 form-group">
                <label for="">ADDRESS</label>
                <textarea name="address" class="form-control" id="address" ><?php echo set_value('address') ?></textarea>
            </div>
            <div class="col-md-12 form-group">
                <input class="btn btn-default" type="submit" name="usubmit" id="submit" value="SUBMIT">
                <input class="btn btn-danger" type="submit" name="ucancel" id="cancel" value="CANCEL">
            </div>
        </div>
    </form>
</div>
	<?php
       if(isset($message) and $message != null)
		{
			echo $message;
		}
	?>

</body>
</html>

