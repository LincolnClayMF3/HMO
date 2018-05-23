<?php

require 'parts/php/connection.php'

?>

<section class="content-header">
<h1 style="text-shadow: 2px 2px 3px white; border: 1px solid #bce0ff; border-radius: 3px; background-color: #bce0ff; box-shadow: 3px 3px 3px gray">
  <img src="dist/img/home.ico" height="50px" width="50px">
  Home
  <small>Admin</small>
</h1>
<ol class="breadcrumb" style="text-shadow: 2px 2px 3px white; margin-top: 10px; margin-right: 20px;">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active"><a href="#">Dashboard</a></li>
</ol>
</section></br>

<div class="row">
  <div class="col-md-4 col-sm-6 col-xs-12">
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
  <div class="col-md-4 col-sm-6 col-xs-12">
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

  <div class="col-md-4 col-sm-6 col-xs-12">
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
