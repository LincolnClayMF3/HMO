<?php

require 'parts/php/connection.php';

session_start();

if(isset($_SESSION['type'])){
$userName = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HMO | Health Maintenance Organization</title>
    <?php

    require 'parts/functions/general.php';

    ?>
  </head>
  <?php
  $result = mysqli_query($con,"SELECT * FROM tblskins");
    while ($row = mysqli_fetch_array($result)) {

      $id = $row['utilitiesID'];
      $name = $row['utilitiesskin'];
    }
       ?>
  <body class="hold-transition <?php echo $name?> layout-top-nav">
    <div class="wrapper">

      <header class="main-header">
        <nav class="navbar navbar-static-top" role="navigation">

          <a href="#" class="logo">
            <span><small style="color: white; font-size: 11px; font-style: italic" id="timeAndDate"></small></span>
          </a>

        <div align="center">
          <span style="font-size: 20px; text-shadow: 0px 0px 7px black; color: white; font-variant: small-caps;">
            Contract and Claims Management with Collections Monitoring System
          </span>

          <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

              <li class="active">
                <a href="#">Home</a>
              </li>

              <li>
                <a href="coordinator-claims-doctor.php">Doctor</a>
              </li>

              <li>
                <a href="coordinator-claims-patient.php">Patient</a>
              </li>


              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/coordinator.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $userName?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="dist/img/coordinator.jpg" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $userName?>
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </div>

        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <section class="content-header" style="margin-top: 1em">
          <h1 style="text-shadow: 2px 2px 3px white; border: 1px solid #bce0ff; border-radius: 3px; background-color: #bce0ff; box-shadow: 3px 3px 3px gray">
            <img src="dist/img/home.ico" height="50px" width="50px">
            Home
            <small>Hospital Coordinator</small>
          </h1>
          <ol class="breadcrumb" style="text-shadow: 2px 2px 3px white; margin-top: 10px; margin-right: 20px;">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="#">Dashboard</a></li>
          </ol>
        </section>
          <?php

          require 'parts/php/connection.php'

          ?>

          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top: 2em">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
                <div class="info-box-content">
                  <?php
                  $company = mysqli_query($con, "SELECT * FROM tblcompanymaintenance");
                  $num_rows = mysqli_num_rows($company);

                  ?>
                  <span class="info-box-text">Companies</span>
                  <span class="info-box-number"><?php echo $num_rows ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top: 2em">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
                <div class="info-box-content">
                  <?php

                  $hospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance");
                  $num_rows2 = mysqli_num_rows($hospital);


                  ?>
                  <span class="info-box-text">Accredited</br>Hospitals</span>
                  <span class="info-box-number"><?php echo $num_rows2 ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top: 2em">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <?php

                  $member = mysqli_query($con, "SELECT * FROM tblmembertransaction");
                  $num_rows3 = mysqli_num_rows($member);


                  ?>
                  <span class="info-box-text">Members</span>
                  <span class="info-box-number"><?php echo $num_rows3 ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-6">
              <!-- MAP & BOX PANE -->

              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Plan Subscription (Company)</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body" style="height: 250px; overflow: auto">
                  <div class="table-responsive">
                    <table  class="table no-margin">
                      <thead>
                        <tr>
                          <!-- <th>Plan ID</th> -->
                          <th>Plan Name</th>
                          <th>Status</th>
                          <th>Plan Holder</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $subscriber = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Active'");

                          while ($row = mysqli_fetch_array($subscriber)) {
                            $subsciberName = $row['companyMainName'];
                            $id = $row['companyMainID'];

                            $arrayPlan = array();

                            $result2 = mysqli_query($con, "SELECT p1.planName FROM tblplan p1
                                       INNER JOIN tblcompanyplan c1 ON c1.intPlanID=p1.planID WHERE c1.intCompanyID=$id");

                            while ($row=mysqli_fetch_array($result2)) {
                              $arrayPlan[]=$row['planName'];
                            }

                            echo '<tr>';
                            echo '<td>';
                            foreach ($arrayPlan as $key) {
                              echo "$key </br>";
                            }
                            echo '</td>';
                            echo '<td><span class="label label-success">Acquired</td>';
                            echo '<td>' . $subsciberName . '</td>';
                            echo '</tr>';
                          }

                          ?>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Acquire New Plan</a>
                  <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Plans</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-6">
              <!-- MAP & BOX PANE -->

              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Plan Subscription (Individual)</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body" style="height: 250px; overflow: auto">
                  <div class="table-responsive">
                    <table  class="table no-margin">
                      <thead>
                        <tr>
                          <!-- <th>Plan ID</th> -->
                          <th>Plan Name</th>
                          <th>Status</th>
                          <th>Plan Holder</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                          $subscriber2 = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Active'");

                            while ($row = mysqli_fetch_array($subscriber2)) {
                              $subsciberName2 = $row['memberTransName'];
                              $id = $row['memberTransID'];

                              $arrayPlan = array();

                              $result2 = mysqli_query($con, "SELECT p1.planName FROM tblplan p1
                                         INNER JOIN tblmemberplan m1 ON m1.intPlanID=p1.planID WHERE m1.intMemberID=$id");

                              while ($row=mysqli_fetch_array($result2)) {
                                $arrayPlan[]=$row['planName'];
                              }

                              echo '<tr>';
                              echo '<td>';
                              foreach ($arrayPlan as $key) {
                                echo "$key </br>";
                              }
                              echo '</td>';
                              echo '<td><span class="label label-success">Acquired</td>';
                              echo '<td>' . $subsciberName2 . '</td>';
                              echo '</tr>';
                            }

                          ?>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Acquire New Plan</a>
                  <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Plans</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->

          </div>

          <script src="plugins/datatables/jquery.dataTables.min.js"></script>
          <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

          <script>

          $("#example1").DataTable(
            {
              "lengthChange": false
            }
          );

          </script>

        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container">
          <strong>Copyright &copy; 2016 <a href="#">Health Maintenance Organization</a>.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
  </body>
</html>
<?php
}
else {
  ?>
  <div align="center" style="margin-top: 15em">
  <p>You need to Login first before you proceed</p>
  <a href="login.php">Go to Login Form</a>
  </div>
  <?php
}
?>

<script>

tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
  var d=new Date();
  var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
  if(nyear<1000) nyear+=1900;
  var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

  if(nhour==0){ap=" AM";nhour=12;}
  else if(nhour<12){ap=" AM";}
  else if(nhour==12){ap=" PM";}
  else if(nhour>12){ap=" PM";nhour-=12;}

  if(nmin<=9) nmin="0"+nmin;
  if(nsec<=9) nsec="0"+nsec;

  document.getElementById('timeAndDate').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
  GetClock();
  setInterval(GetClock,1000);
}
</script>
