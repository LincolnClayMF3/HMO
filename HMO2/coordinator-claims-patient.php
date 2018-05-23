<?php

require 'parts/php/connection.php';

session_start();

if(isset($_SESSION['type'])){
$userName = $_SESSION['name'];
$fullName = $_SESSION['fullName'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HMO | Health Maintenance Organization</title>
    <?php

    require 'parts/functions/general2.php';

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
          <span  style=" font-size: 20px; text-shadow: 0px 0px 7px black; color: white; font-variant: small-caps;">
            Contract and Claims Management with Collections Monitoring System
          </span>

          <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

              <li>
                <a href="coordinator-claims.php">Home</a>
              </li>

              <li>
                <a href="coordinator-claims-doctor.php">Doctor</a>
              </li>

              <li class="active">
                <a href="#">Patient</a>
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
              <a>
                <img src="dist/img/claims.png" height="50px" width="50px">
                  Patient</a>
              <small>Hospital Coordinator</small>
            </h1>
            <ol class="breadcrumb" style="text-shadow: 2px 2px 3px white; margin-top: 10px; margin-right: 20px;">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active"><a href="#">Patient Claim</a></li>
            </ol>
          </section><br>

          <div align="left">

            <button data-target="#newPatientClaims" data-toggle="modal" class="btn btn-success btn-md">
              New <span class="glyphicon glyphicon-download-alt"></span></button>
              <?php
                require 'parts/modals/claims/patient/new.php';
                require 'parts/modals/claims/patient/viewReason.php';
                require 'parts/modals/claims/patient/receiveClaim.php';

               ?>
          </div>

          <div align="center">
            <form role="form" class="form-inline" method="post">
              <div class="form-group">
                        Status:&nbsp;
                            <select name="filter" class="form-control">
                              <?php

                              $status = isset($_POST['filter'])? $_POST['filter'] : "Pending";

                              if($status=="Pending"){
                                $pending = "selected";
                                $disapproved = "";
                                $approved = "";
                                $disbursed = "";
                              }
                              else if($status == "Approved"){
                                $pending = "";
                                $disapproved = "";
                                $disbursed = "";
                                $approved = "selected";
                              }
                              elseif ($status == "Disbursed") {
                                $pending = "";
                                $disapproved = "";
                                $disbursed = "selected";
                                $approved = "";
                              }
                              else {
                                $pending = "";
                                $disapproved = "selected";
                                $approved = "";
                                $disbursed = "";
                              }
                            ?>
                                <option value="Approved" <?php echo "$approved";?>>Approved</option>
                                <option value="Disapproved" <?php echo "$disapproved";?>>Disapproved</option>
                                <option value="Disbursed" <?php echo "$disbursed";?>>Disbursed</option>
                                <option value="Pending" <?php echo "$pending";?>>Pending</option>
                              </select>
                            </div>
                            <div class="form-group">                                            <!-- SEARCH -->
                              <div class="input-group">
                                <input type="submit" class="btn btn-primary" name="btnSearch" value="Go"/>
                              </div>
                            </div>
                          </form>
          </div></br>

          <div class="box" style="overflow:auto; height: 360px">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
              <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
                <tr>
                  <th>Date</th>
                  <th>Patient Name</th>
                  <th>Hospital</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php

                // require 'parts/modals/claims/patient/resubmit.php';

                $result = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Pending'
                          AND reimbursementCoordinator = '$fullName' ORDER by reimbursementPatientName ASC");

                $num = mysqli_num_rows($result);

                  if($num > 0){
                    while ($row = mysqli_fetch_array($result)) {

                      $id = $row['reimbursementID'];
                      $date = $row['reimbursementDate'];
                      $hospital = $row['reimbursementHospital'];
                      $amount = $row['reimbursementAmount'];
                      $name = $row['reimbursementPatientName'];
                      $treatment = $row['reimbursementTreatment'];
                      $status1 = $row['status'];
                      $convertDate = date("M jS, Y", strtotime("$date"));
                      $convertTreatment = date("M jS, Y", strtotime("$treatment"));

                      if($status == "Pending"){
                        echo '<tr>';
                        echo '<td>' . $convertDate . '</td>';
                        echo '<td>' . $name . '</td>';
                        echo '<td>' . $hospital . '</td>';
                        echo '<td>Php ' . number_format($amount,2) . '</td>';
                        echo '<td>' . $status1 . '</td>';
                        // echo '<td>
                        //         <a href="#" data-toggle="modal" data-target="#viewPatientClaim'.$id.'" >
                        //         <button class="btn  btn-warning btn-xs">
                        //         View&nbsp;<span class="glyphicon glyphicon-eye-open"></button>
                        //         </a>
                        //       </td>';
                        echo '<td>No Action available</td>';
                        echo '</tr>';
                      }
              }
            }

            if(isset($_POST['btnSearch'])){

              $status = $_POST['filter'];

              if($status == "Approved"){
                $result = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Approved'
                          AND reimbursementCoordinator = '$fullName' ORDER by reimbursementPatientName");

                  while ($row = mysqli_fetch_array($result)) {

                    $id = $row['reimbursementID'];
                    $date = $row['reimbursementDate'];
                    $hospital = $row['reimbursementHospital'];
                    $amount = $row['reimbursementAmount'];
                    $name = $row['reimbursementPatientName'];
                    $status2 = $row['status'];
                    $convertDate = date("M jS, Y", strtotime("$date"));
                    $convertTreatment = date("M jS, Y", strtotime("$treatment"));

                    // if($status2 == "Approved"){
                    echo '<tr>';
                    echo '<td>' . $convertDate . '</td>';
                    echo '<td>' . $name . '</td>';
                    echo '<td>' . $hospital . '</td>';
                    echo '<td>Php ' . number_format($amount,2) . '</td>';
                    echo '<td>' . $status2 . '</td>';
                    echo '<td>No Action Available</td>';
                    echo '</tr>';
                    // }
                  }
                }
              }

              if(isset($_POST['btnSearch'])){

                $status = $_POST['filter'];

                if($status == "Disbursed"){
                  $result = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Disbursed'
                            AND reimbursementCoordinator = '$fullName' ORDER by reimbursementPatientName");

                    while ($row = mysqli_fetch_array($result)) {

                      $id = $row['reimbursementID'];
                      $date = $row['reimbursementDate'];
                      $hospital = $row['reimbursementHospital'];
                      $amount = $row['reimbursementAmount'];
                      $name = $row['reimbursementPatientName'];
                      $status2 = $row['status'];
                      $convertDate = date("M jS, Y", strtotime("$date"));
                      $convertTreatment = date("M jS, Y", strtotime("$treatment"));

                      // if($status2 == "Approved"){
                      echo '<tr>';
                      echo '<td>' . $convertDate . '</td>';
                      echo '<td>' . $name . '</td>';
                      echo '<td>' . $hospital . '</td>';
                      echo '<td>Php ' . number_format($amount,2) . '</td>';
                      echo '<td>' . $status2 . '</td>';
                      echo '<td>

                      <a href="#" data-toggle="modal" data-target="#receiveClaim'.$id.'" >
                      <button class="btn  btn-primary btn-xs">
                      Receive&nbsp;<span class="glyphicon glyphicon-check"></button>
                      </a>

                            </td>';
                      echo '</tr>';
                      // }
                    }
                  }
                }

              if(isset($_POST['btnSearch'])){

                $status = $_POST['filter'];

                if($status == "Disapproved"){
                  $result = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Disapproved'
                            AND reimbursementCoordinator = '$fullName' ORDER by reimbursementPatientName");

                    while ($row = mysqli_fetch_array($result)) {

                      $id = $row['reimbursementID'];
                      $date = $row['reimbursementDate'];
                      $hospital = $row['reimbursementHospital'];
                      $amount = $row['reimbursementAmount'];
                      $name = $row['reimbursementPatientName'];
                      $convertDate = date("M jS, Y", strtotime("$date"));
                      $convertTreatment = date("M jS, Y", strtotime("$treatment"));
                      $status3 = $row['status'];

                      // if($status3 == "Disapproved"){
                      echo '<tr>';
                      echo '<td>' . $convertDate . '</td>';
                      echo '<td>' . $name . '</td>';
                      echo '<td>' . $hospital . '</td>';
                      echo '<td>Php ' . number_format($amount,2) . '</td>';
                      echo '<td>' . $status3 . '</td>';
                      echo '<td>

                            <a href="#" data-toggle="modal" data-target="#viewReason'.$id.'" >
                            <button class="btn  btn-warning btn-xs">
                            View&nbsp;<span class="glyphicon glyphicon-eye-open"></button>
                            </a>

                           </td>';
                      echo '</tr>';
                      // }
                    }
                  }
                }


          ?>
          </tbody>
          </table>
          </div>
          </div>

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

} else {
  ?>
  <div align="center" style="margin-top: 15em">
  <p>You need to Login first before you proceed</p>
  <a href="login.php">Go to Login Form</a>
  </div>
  <?php
}
?>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

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

$("#example1").DataTable(
  {
    "lengthChange": true
  }
);
</script>
