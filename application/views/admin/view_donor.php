<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--  <meta charset="UTF-8">-->
<!--  <meta name="keywords" content="web design, web development, web site development, web site design, web design development, e-commerce, ecommerce, interactive, new media, development, Manjeri, hove, Manjeri web design, Manjeri ecommerce, Manjeri e-commerce, Manjeri web development, malappuram, content management, cms, web site, web sites, psybo, psybo technologies, psybotechnologies">-->
<!--  <meta name="description" content="Psybo technologies is a small web design &amp; development agency based in Manjeri, Malappuram, INDIA. We've made a reputation for building websites that look great and are easy-to-use.">-->
<!--  <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--  <link rel="icon" href="--><?php //echo base_url('img/ico.png');?><!--" type="image/png" sizes="47x54">-->
<!--  <title>dashboard/Donate</title>-->
<!--  <link rel="stylesheet" href="--><?php //echo base_url('css/styleapp.css');?><!--">-->
<!--  <script type="text/javascript" src="--><?php //echo base_url('js/appjs.js');?><!--"></script>-->
<!--  <style>-->
<!--      #img{-->
<!--          width: 10px;-->
<!--          height: 10px;-->
<!--      }-->
<!--  </style>-->
<!--</head>-->
<!--<body>-->
<!--  <div class="page-wrapper">-->
<!--    <div class="left-wrapper">-->
<!--      --><?php //echo hospital_menu('donors');?>
<!--    </div>-->
<!--  -->
<!--    <nav class="top-wrapper">-->
<!--      <div class="sidebar-top">-->
<!--        <button class="humburger pull-left">-->
<!--          <i class="fa fa-bars fa-2x center-block"></i>-->
<!--        </button>-->
<!--        <ul class="menu-top pull-right">-->
<!--          <li><a href="#"><i class="fa fa-envelope-o fa-lg"></i></a></li>-->
<!--          <li><a href="#"><i class="fa fa-bell-o fa-lg"></i></a></li>-->
<!--          <li><a href="#"><i class="fa fa-cog fa-lg"></i></a></li>-->
<!--          <li>-->
<!--            <a href="--><?php //echo base_url('hospital_dashboard/logout');?><!--">logout</a>-->
<!--          </li>-->
<!--        </ul>-->
<!--      </div>-->
<!--    </nav>-->
<?php //if(isset($result))
//
//{?>
<!--<br>-->
<!--	Id : --><?php //echo $result['0']->id ?><!--<br>-->
<!--	Name : --><?php //echo $result['0']->name ?><!--<br>-->
<!--	Bloodgroup : --><?php //echo $result['0']->bloodgroup ?><!--<br>-->
<!--	 --><?php //echo form_open(base_url('Admin_Controller/accept'), ['id' => 'acceptform','name' => 'acceptform']) ?>
<!--		--><?php //echo validation_errors() ;?>
<!--	    Opinion: <input type="text" name="opinion" id="opinion">	-->
<!--		 <input type="hidden" name="id" value="--><?php //echo $result['0']->id ?><!--" >-->
<!--		<button type="submit"> Submit</button>-->
<!--	</form>-->
<!--	</div>-->
<!--	--><?php //
//}
//	if (isset($error)): ?>
<!--		echo $error;-->
<!--	--><?php //endif ?>
<!--</body>-->
<!--</html>-->



<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="OIPULES admin panel" />
    <meta name="abstract" content="OIPULES admin panel" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('admin/fav_icon.ico')?>" rel="shortcut icon" type="image/x-icon" />

    <title>Donate life-admin</title>

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
            Donate Life Admin Panel
        </p>


        <ul class="menu">
            <li class="active"><img src="<?php echo base_url('images/pic1.jpg')?>"/><a href="#">Admin</a></li>
            <li><a href="<?php echo base_url('dashboard/logout')?>"><i class="glyphicon glyphicon-off"></i></a></li>
        </ul>
    </div>
</header>



<div id="main" class="row">
    <?php echo dashboard_menu('dashboard')?>
    <div id="content" class="col-md-9 red-content">

        <!-- title panel -->
        <div id="title_panel">
            <h3>Dashboard</h3>
        </div>

        <!-- content -->
        <div>

            <div class="panel panel-default">
                <div class="panel-heading">Donor information</div>
            </div>
            <div class="row">
                <!-- states charts -->
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <?php if(isset($result))
                        { ?>
                        <table class="stats">
                            <tr>
                                <td>Id</td>
                                <td><span class=""><?php echo $result[0]->id?></span></td>
                            </tr>

                            <tr>
                                <td>Name</td><td><span class=""><?php echo $result[0]->name?></span></td>
                            </tr>

                            <tr>
                                <td>Blood Groupe</td><td><span class=""><?php echo $result[0]->bloodgroup?></span></td>
                            </tr>

                        </table>
                        <div>
                            <?php echo form_open(base_url('Admin_Controller/accept'), ['id' => 'acceptform','name' => 'acceptform']) ?>
                                <div class="col-sm-6">
                                    <label for="opinion">Opinion</label>
                                    <input type="text" name="opinion" id="opinion" class="form-control">
                                </div>
                                <input type="hidden" name="id" value="<?php echo $result['0']->id ?>" >
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-default"> Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php
                    }
                    if (isset($error)): ?>
                        echo $error;
                    <?php endif ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<footer>
    Designed  <a href="">Me</a>
</footer>



<script>



    Morris.Area({
        element: 'area-example',
        data: [
            { y: '2006', a: 25, b: 10 },
            { y: '2007', a: 50,  b: 40 },
            { y: '2008', a: 55,  b: 40 },
            { y: '2009', a: 75,  b: 65 },
            { y: '2010', a: 50,  b: 40 },
            { y: '2011', a: 75,  b: 65 },
            { y: '2012', a: 100, b: 90 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        resize: true

    });

</script>

</body>

</html>





