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
    </nav><?php echo form_open(base_url('Lab_Controller/add_report'),['id' => 'addform', 'name' => 'addform'])
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
</div>
	<?php  
       if(isset($message) and $message != null)
		{
			echo $message;
		}
	?>
	
</body>
</html>