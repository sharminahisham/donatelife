<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--  <meta charset="UTF-8">-->
<!--  <meta name="keywords" content="web design, web development, web site development, web site design, web design development, e-commerce, ecommerce, interactive, new media, development, Manjeri, hove, Manjeri web design, Manjeri ecommerce, Manjeri e-commerce, Manjeri web development, malappuram, content management, cms, web site, web sites, psybo, psybo technologies, psybotechnologies">-->
<!--  <meta name="description" content="Psybo technologies is a small web design &amp; development agency based in Manjeri, Malappuram, INDIA. We've made a reputation for building websites that look great and are easy-to-use.">-->
<!--  <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--  <link rel="icon" href="--><?php //echo base_url('img/ico.png');?><!--" type="image/png" sizes="47x54">-->
<!--	<title> donate life</title>-->
<!--  <link rel="stylesheet" href="--><?php //echo base_url('css/styleapp.css');?><!--">-->
<!--  <script type="text/javascript" src="--><?php //echo base_url('js/appjs.js');?><!--"></script>-->
<!--</head>-->
<!--<body>-->
<!--	<div class="page-wrapper">-->
<!--		<div class="left-wrapper">-->
<!--            --><?php //echo hospital_menu('dashboard');?>
<!--		</div>-->
<!--		<nav class="top-wrapper">-->
<!--			<div class="sidebar-top">-->
<!--				<button class="humburger pull-left">-->
<!--					<i class="fa fa-bars fa-2x center-block"></i>-->
<!--				</button>-->
<!--				<ul class="menu-top pull-right">-->
<!--					<li>-->
<!--						<a href="#"><i class="fa fa-envelope-o fa-lg"></i></a>-->
<!--					</li>-->
<!--					<li>-->
<!--						<a href="#"><i class="fa fa-bell-o fa-lg"></i></a>-->
<!--					</li>-->
<!--					<li class="dropdown">-->
<!--						<a href="#" class="dropdown-toggle" id="settings" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog fa-lg"></i></a>-->
<!--						<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="settings">-->
<!--					    <li><a href="#">Action</a></li>-->
<!--					    <li><a href="#">Another action</a></li>-->
<!--					    <li><a href="#">Something else here</a></li>-->
<!--					    <li role="separator" class="divider"></li>-->
<!--					    <li><a href="#">Separated link</a></li>-->
<!--					  </ul>-->
<!--					</li>-->
<!--					<li>-->
<!--						<a href="--><?php //echo base_url('hospital_dashboard/logout');?><!--">logout</a>-->
<!--					</li>-->
<!--				</ul>-->
<!--			</div>-->
<!--		</nav>-->
<!---->
<!--		<h2>welcome</h2>-->
<!--		<div class="col-md-8">-->
<!--		-->
<!--		</div>-->
<!--		<div class="col-md-3">-->
<!--			<div class="row">-->
<!--				<div id="widget">-->
<!--				  <div id="outline">-->
<!--				    <div class="date">-->
<!--				      <div id="month"></div>-->
<!--				      <div id="day"></div>-->
<!--				      <div id="week"></div>-->
<!--				    </div>-->
<!--				    <div class="time">-->
<!--				      <div id="hour"></div>-->
<!--				      <div id="minut"></div>-->
<!--				      <!-- <div id="second"></div> -->-->
<!--				      <div id="date"></div>-->
<!--				    </div>    -->
<!--				  </div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
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
            <!--                        <li><input type="search" class="searchBox" placeholder="Search.."/></li>-->
            <!--						<li><a href="#">Help Support</a></li>-->
            <!--						<li><a href="#">Settings</a></li>-->
            <li class="active"><img src="<?php echo base_url('images/pic1.jpg')?>"/><a href="#">hospital Admin</a></li>
            <li><a href="<?php echo base_url('dashboard/logout')?>"><i class="glyphicon glyphicon-off"></i></a></li>
        </ul>
    </div>
</header>



<div id="main" class="row">
    <!--<nav class="col-md-3">
        <ul>
            <li class="active"><a href="#"><i class="glyphicon glyphicon-dashboard"></i>Dashboard</a></li>
            <li class=""><a href="#"><i class="glyphicon glyphicon-calendar"></i>Schedule</a> </li>
            <li class=""><a href="#"><i class="glyphicon glyphicon-book"></i>Charts</a></li>
            <li class=""><a href="#"><i class="glyphicon glyphicon-picture"></i>Tables</a></li>
            <li class=""><a href="#"><i class="glyphicon glyphicon-list-alt"></i>Forms</a> </li>
            <li class=""><a href="#"><i class="glyphicon glyphicon-user"></i>Users</a></li>
        </ul>
    </nav>-->
    <?php echo hospital_menu('dashboard')?>
    <div id="content" class="col-md-9 red-content">

        <!-- title panel -->
        <div id="title_panel">
            <h3>Dashboard</h3>
        </div>

        <!-- content -->
        <div>

            <!-- Sales stats & usage stats -->
            <div class="row">
                <!-- states charts -->
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">Sales Stats</div>
                        <div class="panel-body">
                            <!-- area chart -->
                            <div id="area-example" style="height:200px;"></div>
                        </div>
                    </div>
                </div>


                <!-- usage stats -->
                <div class="col-md-4">
                    <div class="panel panel-default ">
                        <div class="panel-heading">Usage stats</div>
                        <div class="panel-body" style="height:230px;">
                            <table class="stats">
                                <tr>
                                    <td>Google chrome</td><td><span class="label label-success">42.8%</span></td>
                                </tr>

                                <tr>
                                    <td>Firefox</td><td><span class="label label-primary">17.2%</span></td>
                                </tr>

                                <tr>
                                    <td>Safari</td><td><span class="label label-info">15.5%</span></td>
                                </tr>

                                <tr>
                                    <td>Internet Explorer</td><td><span class="label label-warning">15.5%</span></td>
                                </tr>

                                <tr>
                                    <td>Others</td><td><span class="label label-danger">9%</span></td>
                                </tr>
                            </table>
                        </div> <!-- end of panel body -->
                    </div> <!-- end of panel -->
                </div> <!-- end of column -->
            </div> <!-- end of row -->


            <div class="panel panel-default">
                <div class="panel-heading">Employees information</div>
                <div class="panel-body">

                    <!-- table grid view -->
                    <div class="grid">
                        <table width="100%">
                            <tr>
                                <th>#</th>
                                <th>Employee Name</th>
                                <th>Age</th>
                                <th>Salary</th>
                                <th>Hire date</th>
                                <th>Details</th>
                            </tr>

                            <tr>
                                <td align="center">1</td>
                                <td>Mohanad Kaleia</td>
                                <td>26</td>
                                <td>800$</td>
                                <td>01/08/2014</td>
                                <td align="center">
                                    <a title="view" class="btn btn-default btn-xs" href="#">
                                        <i class="glyphicon glyphicon-file"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td align="center">2</td>
                                <td>Rami Aqqad</td>
                                <td>27</td>
                                <td>850$</td>
                                <td>01/01/2015</td>
                                <td align="center">
                                    <a title="view" class="btn btn-default btn-xs" href="#">
                                        <i class="glyphicon glyphicon-file"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td align="center">3</td>
                                <td>Mohanad Kaleia</td>
                                <td>26</td>
                                <td>800$</td>
                                <td>01/08/2014</td>
                                <td align="center">
                                    <a title="view" class="btn btn-default btn-xs" href="#">
                                        <i class="glyphicon glyphicon-file"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td align="center">4</td>
                                <td>Jone Doe</td>
                                <td>41</td>
                                <td>1200$</td>
                                <td>01/08/2014</td>
                                <td align="center">
                                    <a title="view" class="btn btn-default btn-xs" href="#">
                                        <i class="glyphicon glyphicon-file"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td align="center">5</td>
                                <td>Mohanad Kaleia</td>
                                <td>26</td>
                                <td>800$</td>
                                <td>01/08/2014</td>
                                <td align="center">
                                    <a title="view" class="btn btn-default btn-xs" href="#">
                                        <i class="glyphicon glyphicon-file"></i>
                                    </a>
                                </td>
                            </tr>
                        </table>
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

