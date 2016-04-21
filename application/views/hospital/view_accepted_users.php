<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="OIPULES admin panel" />
    <meta name="abstract" content="OIPULES admin panel" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('admin/fav_icon.ico')?>" rel="shortcut icon" type="image/x-icon" />

    <title>Donate life-hospital admin</title>

    <!-- load css -->
    <!--		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo base_url('admin/css/bootstrap.min.css')?>"/>
    <!--        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">-->
    <link rel="stylesheet" href="<?php echo base_url('admin/css/morris.css') ?>">
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo base_url('admin/css/style.css') ?>" />
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo base_url('admin/css/gridview.css') ?>" />


    <!-- load fonts -->
    <!--        <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>-->
    <link href='<?php echo base_url('admin/css/font-ubuntu.css') ?>' rel='stylesheet' type='text/css'>

    <!-- Latest compiled and minified JavaScript -->

    <!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
    <script src="<?php echo base_url('admin/js/jquery.min.js')?>"></script>
    <!--        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>-->
    <script src="<?php echo base_url('admin/js/raphael-min.js')?>"></script>
    <!--        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>-->
    <script src="<?php echo base_url('admin/js/morris.min.js')?>"></script>
    <!--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
    <script src="<?php echo base_url('admin/js/bootstrap.min.js')?>"></script>
</head>

<body style="background-image: url(<?php echo base_url('admin/images/header.jpg')?>)">


<header>
    <div id="index_menu">

    </div>

    <div id="tool_bar">
        <p class="title">
            Donate Life Hospital Admin Panel
        </p>


        <ul class="menu">
            <li class="active"><img src="<?php echo base_url('images/pic1.jpg')?>"/><a href="#">hospital Admin</a></li>
            <li><a href="<?php echo base_url('dashboard/logout')?>"><i class="glyphicon glyphicon-off"></i></a></li>
        </ul>
    </div>
</header>



<div id="main" class="row">
    <?php echo hospital_menu('donors')?>
    <div id="content" class="col-md-9 red-content">

        <!-- title panel -->
        <div id="title_panel">
            <h3>Dashboard</h3>
        </div>

        <!-- content -->
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">Employees information</div>
                <div class="panel-body">

                    <!-- table grid view -->
                    <div class="grid">
<?php
if(isset($result) && $result != FALSE)
{
  if($result[0]->tockenno != null) { ?>
      Id : <?php echo $result['0']->id ?><br>
      Name : <?php echo $result['0']->name ?><br>
      Date of birth : <?php echo $result['0']->dob ?><br>
      Gender : <?php echo $result['0']->gender ?><br>
      Bloodgroup : <?php echo $result['0']->bloodgroup ?><br>
      <?php echo "ALREADY GOT TOCKEN";?> <br>
      <a href="<?php echo base_url('Hospital_Admin_Controller/') ?>">back</a>
<?php } else {?>
      Id : <?php echo $result['0']->id ?><br>
      Name : <?php echo $result['0']->name ?><br>
      Date of birth : <?php echo $result['0']->dob ?><br>
      Gender : <?php echo $result['0']->gender ?><br>
      Bloodgroup : <?php echo $result['0']->bloodgroup ?><br>


      <?php echo form_open(base_url('Hospital_Admin_Controller/add_tocken'), ['id' => 'acceptform','method' => 'POST' , 'name' => 'acceptform']) ?>
            <input type="hidden" name="donor_id" value='<?php /*echo $result['0']->id */?>'>
            <input type="hidden" name="hospital_id" value='<?php /*echo $result['0']->hospital_id */?>'>
            <label for="testdate">testdate</label>
            <input type="text" name="testdate" id="testdate" required><br>
            <label for="testtime">testtime</label>
            <input type="text" name="testtime" id="testtime"required ><br>
            <label for="tockenno">tockenno</label>
            <input type="text" name="tockenno" id="tockenno"required><br>
            <label for="verificationcode">verification code</label>
            <input type="text" value="<?php echo (random_string('numeric',7)) ?>" name="verificationcode" id="verificationcode"required><br>

            <button name="submit" id="submit">Submit</a></button>

            <a href="<?php /*echo base_url('Hospital_Admin_Controller/') */?>">back</a>
            <input type="hidden" name="donor_id" id="donor_id" value="<?php echo $result[0]->id ?>">
            <input type="hidden" name="hospital_id" id="hospital_id" value="<?php echo $result[0]->hospital_id ?>">
        </form>
  <?php }
}?>


<!--
<br>
Id : <?php /*echo $result['0']->id */?><br>
Name : <?php /*echo $result['0']->name */?><br>
Date of birth : <?php /*echo $result['0']->dob */?><br>
Gender : <?php /*echo $result['0']->gender */?><br>
Bloodgroup : <?php /*echo $result['0']->bloodgroup */?><br>
<?php /*echo "ALREADY GOT TOCKEN";*/?> <br>
<a href="<?php /*echo base_url('Hospital_Admin_Controller/') */?>">back</a>
<?php /*} */?>
    <br>
    Id : <?php /*echo $result['0']->id */?><br>
    Name : <?php /*echo $result['0']->name */?><br>
    Date of birth : <?php /*echo $result['0']->dob */?><br>
    Gender : <?php /*echo $result['0']->gender */?><br>
    Bloodgroup : <?php /*echo $result['0']->bloodgroup */?><br>

<?php /*echo form_open(base_url('Hospital_Admin_Controller/add_tocken'), ['id' => 'acceptform','method' => 'POST' , 'name' => 'acceptform']) */?>
<input type="hidden" name="donor_id" value='<?php /*echo $result['0']->id */?>'>
<input type="hidden" name="hospital_id" value='<?php /*echo $result['0']->hospital_id */?>'>
<?php /*//if($result[0]->tockenno == null){*/?>
    ALREADY GOT TOCKEN
<?php /*} */?>
<label for="testdate">testdate</label>
<input type="text" name="testdate" id="testdate" required><br>
<label for="testtime">testtime</label>
<input type="text" name="testtime" id="testtime"required ><br>
<label for="tockenno">tockenno</label>
<input type="text" name="tockenno" id="tockenno"required><br>
<label for="verificationcode">verification code</label>
<input type="text" value="<?php /*echo (random_string('numeric',7)) */?>" name="verificationcode" id="verificationcode"required><br>

<button name="submit" id="submit">Submit</a></button>

<a href="<?php /*echo base_url('Hospital_Admin_Controller/') */?>">back</a>
<input type="hidden" name="donor_id" id="donor_id" value="<?php /*echo $result[0]->id */?>">
<input type="hidden" name="hospital_id" id="hospital_id" value="<?php /*echo $result[0]->hospital_id */?>">
</form>-->