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
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
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
    <?php echo hospital_menu('lab')?>
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
                      <?php echo form_open(base_url('Lab_Controller/add_report_submit'),['id' => 'addform', 'method' => 'POST','name' => 'addform'])
                      	?>
                      		<h2>MEDICAL REPORT</h2>
                              <br><br>
                          <?php if(isset($result) && $result!=FALSE)
                          //if($result[0]->report== null)
                           {
                               // if ($result[0]->report == null) { //this line willl be uncomment after check actual database
                               if ($result[0] != false) {
                                   ?>
                                   <div class="col-md-4">
                                      <!-- usage stats -->
                                      <div class="row">
                                          <div class="panel panel-default ">
                                              <div class="panel-heading">Donor status</div>
                                              <!-- <div class="panel-body" style="height:230px;"> -->
                                                  <table class="stats">
                                                      <tr>
                                                          <td>id</td><td><span ><?php echo $result['0']->donor_id ?></span></td>
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
                                                      <tr>
                                                          <td>Hospital id</td><td><span ><?php echo $result['0']->hospital_id ?></span></td>
                                                      </tr>
                                                      <tr>
                                                          <td>Test date </td><td><span ><?php echo $result['0']->testdate ?></span></td>
                                                      </tr>
                                                      <tr>
                                                          <td>test time</td><td><span ><?php echo $result['0']->testtime ?></span></td>
                                                      </tr>
                                                  </table>
                                                  <a href="<?php echo base_url('hospital_dashboard/lab') ?>" class="btn btn-danger">back</a>
                                              <!-- </div> end of panel body -->
                                          </div> <!-- end of panel -->
                                      </div> <!-- end of column -->
                                  </div> <!-- end of row -->
                              <br>
                              <!-- Id : <?php echo $result['0']->donor_id ?><br>
                              Name : <?php echo $result['0']->name ?><br>
                              Date of birth : <?php echo $result['0']->dob ?><br>
                              Gender : <?php echo $result['0']->gender ?><br>
                              Bloodgroup : <?php echo $result['0']->bloodgroup ?><br> -->
                              <!-- <?php// if(isset($result) &&$result!=FALSE): 
                                   ?> -->
                              <!-- Hospital_Id : <?php echo $result['0']->hospital_id ?><br>
                              Testdate : <?php echo $result['0']->testdate ?><br>
                              Testtime : <?php echo $result['0']->testtime ?><br> -->
                              <input type="hidden" name="donor_id" value='<?php echo $result['0']->donor_id ?>'>
                              <input type="hidden" name="hospital_id" value='<?php echo $result['0']->hospital_id ?>'> 
                             <!--  <input type="hidden" name="testdate" value='<?php //echo $result['0']->testdate ?>'>
                             <input type="hidden" name="testtime" value='<?php //echo $result['0']->testtime?>'> -->
                              
                        <div class="form-group col-sm-6">
                          <label for="verifiedby">Verified By</label>
                      		<input class="form-control" type="text" name="verifiedby" id="verifiedby" value="<?php echo set_value('verifiedby'); ?>" required><br><br>
                        </div>
                        <div class="form-group col-sm-6">
                          <label for="medicalreport">report</label>
                      	  <textarea class="form-control" name="medicalreport" id="medicalreport" value="<?php echo set_value('medicalreport'); ?>" required></textarea><br><br>
                        </div>
                        <div class="form-group col-sm-6">
                      		<input class="btn btn-default" type="submit" value="FORWARD">
                        </div>
                         <input type="hidden" name="donor_id" id="donor_id" value="<?php echo $result[0]->donor_id ?>">
                         <input type="hidden" name="hospital_id" id="hospital_id" value="<?php echo $result[0]->hospital_id ?>">
                         <!-- <input type="hidden" name="testdate" id="testdate" value="<?php //echo $result[0]->testdate ?>">
                         <input type="hidden" name="testtime" id="testtime" value="<?php //echo $result[0]->testtime ?>"> -->
                         </form> 
                         <?php
                               } else {
                                  echo "ALREADY FORWADED";?> <br>
                                  <a href="<?php echo base_url('hospital_dashboard/lab/') ?>">back</a>
                               <?php }
                          } ?>
 
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


