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
<?php if(isset($result))

{?>
<br>
	Id : <?php echo $result['0']->id ?><br>
	Name : <?php echo $result['0']->name ?><br>
	Bloodgroup : <?php echo $result['0']->bloodgroup ?><br>
	 <?php echo form_open(base_url('Admin_Controller/accept'), ['id' => 'acceptform','name' => 'acceptform']) ?>
		<?php echo validation_errors() ;?>
	    Opinion: <input type="text" name="opinion" id="opinion">	
		 <input type="hidden" name="id" value="<?php echo $result['0']->id ?>" >
		<button type="submit"> Submit</button>
	</form>
	</div>
	<?php 
}
	if (isset($error)): ?>
		echo $error;
	<?php endif ?>
</body>
</html>