
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
    <?php echo dashboard_menu('donors')?>
    <div id="content" class="col-md-9 red-content">

        <!-- title panel -->
        <div id="title_panel">
            <h3>Dashboard</h3>
        </div>

        <!-- content -->
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">Donors information</div>
                <div class="panel-body">

                    <!-- table grid view -->
                    <div class="grid">
                        <div class="col-md-4">
                            <!-- usage stats -->
                            <div class="row">
                                <?php if(isset($result) &&$result!=FALSE){ ?>
                                    <div class="panel panel-default ">
                                        <div class="panel-heading">Donor status</div>
                                        <div class="panel-body" style="height:230px;">
                                            <table class="stats">
                                                <tr>
                                                    <td>id</td><td><span ><?php echo $result['0']->id ?></span></td>
                                                </tr>

                                                <tr>
                                                    <td>name</td><td><span ><?php echo $result['0']->name ?></span></td>
                                                </tr>

                                                <tr>
                                                    <td>Date Of Birth</td><td><span ><?php echo $result['0']->dob ?></span></td>
                                                </tr>

                                                <tr>
                                                    <td>Gender</td><td><span ><?php echo $result['0']->gender ?></span></td>
                                                </tr>

                                                <tr>
                                                    <td>Blood Group</td><td><span ><?php echo $result['0']->bloodgroup ?></span></td>
                                                </tr>
                                            </table>
                                            <a href="<?php echo base_url('dashboard/view') ?>">back</a>
                                        </div> <!-- end of panel body -->
                                    </div> <!-- end of panel -->
                                <?php }?>
                            </div> <!-- end of column -->
                        </div>
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


