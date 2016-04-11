<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="web design, web development, web site development, web site design, web design development, e-commerce, ecommerce, interactive, new media, development, Manjeri, hove, Manjeri web design, Manjeri ecommerce, Manjeri e-commerce, Manjeri web development, malappuram, content management, cms, web site, web sites, psybo, psybo technologies, psybotechnologies">
  <meta name="description" content="Psybo technologies is a small web design &amp; development agency based in Manjeri, Malappuram, INDIA. We've made a reputation for building websites that look great and are easy-to-use.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo base_url('img/ico.png');?>" type="image/png" sizes="47x54">
  <title>dashboard/Donate</title>
  <link rel="stylesheet" href="<?php echo base_url('css/styleapp.css');?>">
  <script type="text/javascript" src="<?php echo base_url('js/appjs.js');?>"></script>
  <style>
      #img{
          width: 10px;
          height: 10px;
      }
  </style>
</head>
<body>
  <div class="page-wrapper">
    <div class="left-wrapper">
      <?php echo hospital_menu('donors');?>
    </div>

    <nav class="top-wrapper">
      <div class="sidebar-top">
        <button class="humburger pull-left">
          <i class="fa fa-bars fa-2x center-block"></i>
        </button>
        <ul class="menu-top pull-right">
          <li><a href="#"><i class="fa fa-envelope-o fa-lg"></i></a></li>
          <li><a href="#"><i class="fa fa-bell-o fa-lg"></i></a></li>
          <li><a href="#"><i class="fa fa-cog fa-lg"></i></a></li>
          <li>
            <a href="<?php echo base_url('hospital_dashboard/logout');?>">logout</a>
          </li>
        </ul>
      </div>
    </nav>

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

</div>
</body>
</html>

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