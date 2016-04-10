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
      <?php echo hospital_menu('lab');?>
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
    </nav><?php echo form_open(base_url('Lab_Controller/add_report_submit'),['id' => 'addform', 'method' => 'POST','name' => 'addform'])
	?>
			<?php echo validation_errors();?>
		<h2>MEDICAL REPORT</h2>
        <br><br>
    <?php if(isset($result) && $result!=FALSE):
    //if($result[0]->report== null)
     {
 
     ?> 

        <br>
        Id : <?php echo $result['0']->donor_id ?><br>
        Name : <?php echo $result['0']->name ?><br>
        Date of birth : <?php echo $result['0']->dob ?><br>
        Gender : <?php echo $result['0']->gender ?><br>
        Bloodgroup : <?php echo $result['0']->bloodgroup ?><br>
        <!-- <?php// if(isset($result) &&$result!=FALSE): 
             ?> -->
        Hospital_Id : <?php echo $result['0']->hospital_id ?><br>
        Testdate : <?php echo $result['0']->testdate ?><br>
        Testtime : <?php echo $result['0']->testtime ?><br>
        <input type="hidden" name="donor_id" value='<?php echo $result['0']->donor_id ?>'>
        <input type="hidden" name="hospital_id" value='<?php echo $result['0']->hospital_id ?>'> 
       <!--  <input type="hidden" name="testdate" value='<?php //echo $result['0']->testdate ?>'>
       <input type="hidden" name="testtime" value='<?php //echo $result['0']->testtime?>'> -->
        
  
		VERIFIED BY<input type="text" name="verifiedby" id="verifiedby" value="<?php echo set_value('verifiedby'); ?>" required><br><br>
	  MEDICAL REPORT<textarea name="medicalreport" id="medicalreport" value="<?php echo set_value('medicalreport'); ?>" required></textarea><br><br>
		<input type="submit" value="FORWARD">
   <input type="hidden" name="donor_id" id="donor_id" value="<?php echo $result[0]->donor_id ?>">
   <input type="hidden" name="hospital_id" id="hospital_id" value="<?php echo $result[0]->hospital_id ?>">
   <!-- <input type="hidden" name="testdate" id="testdate" value="<?php //echo $result[0]->testdate ?>">
   <input type="hidden" name="testtime" id="testtime" value="<?php //echo $result[0]->testtime ?>"> -->
   </form> 
   <?php 
}
/*else
{
?>
  <?php echo "ALREADY FORWADED";?> <br>
   <a href="<?php echo base_url('hospital_dashboard/lab/') ?>">back</a>
<?php
} */
endif; ?> 
 

</div>  
	<?php  
       if(isset($message) and $message != null)
		{
			echo $message;
		}
	?>

</body>
</html>