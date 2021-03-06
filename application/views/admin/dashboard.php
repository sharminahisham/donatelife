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
<!--                        <li><input type="search" class="searchBox" placeholder="Search.."/></li>-->
<!--						<li><a href="#">Help Support</a></li>-->
<!--						<li><a href="#">Settings</a></li>-->
						<li class="active"><img src="<?php echo base_url('images/pic1.jpg')?>"/><a href="#">Admin</a></li>
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
                <?php echo dashboard_menu('dashboard')?>
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
                                      <span>Welcome to Admin.</span><br/><br/>
                                      <span>click hospital tab and check the hospitals, </span><br/>
                                      <span>click Donors tab and check the donors status, new requests,etc</span>
<!--                                      <div id="area-example" style="height:200px;"></div>-->
                                  </div>
                                </div>
                            </div>

                        </div> <!-- end of row -->

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
