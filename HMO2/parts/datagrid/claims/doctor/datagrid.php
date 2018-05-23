<?php

require 'parts/modals/claims/doctor/view.php';
// require 'parts/modals/claims/doctor/disapproved.php';
require 'parts/modals/claims/doctor/disburse.php';

?>

<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <table id="example1" class="table table-bordered  table-striped table-hover table-responsive" width="100%">
      <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Date Filed</th>
        <th>Doctor Name</th>
        <th>Patient Name</th>
        <th>Service Done</th>
        <th>Amount</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $result = mysqli_query($con, "SELECT * FROM tbldoctorclaim WHERE status = 'Pending'
                 ORDER by claimDoctorName");

      $num = mysqli_num_rows($result);

        if($num > 0){
          while ($row = mysqli_fetch_array($result)) {

            $id = $row['claimID'];
            $date = $row['claimDate'];
            $name = $row['claimDoctorName'];
            $status1 = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$date"));

            $arrayName = array();
            $arrayServices = array();
            $arrayAmount = array();

            $result2 = mysqli_query($con, "SELECT d1.patientName, d1.patientServices, d1.patientAmount FROM tbldoctorpatient d1
                       INNER JOIN tbldoctorpatientclaim d2 ON d2.intPatientID=d1.patientID WHERE d2.intClaimID=$id");

            while ($row=mysqli_fetch_array($result2)) {
              $arrayName[]=$row['patientName'];
              $arrayServices[]=$row['patientServices'];
              $arrayAmount[]=$row['patientAmount'];
            }

            if($status == "Pending"){
              echo '<tr>';
              echo '<td>' . $convertDate . '</td>';
              echo '<td>' . $name . '</td>';
              echo '<td>';
              foreach ($arrayName as $key) {
                echo "$key </br>";
              }
              echo '</td><td>';
              foreach ($arrayServices as $key2) {
                echo "$key2 </br>";
              }
              echo '</td><td>';

              foreach ($arrayAmount as $key3) {
                $nkey3 = number_format($key3,2);
                echo "Php $nkey3 </br>";
              }
              $total = mysqli_query($con, "SELECT SUM(d2.patientAmount) as patientAmount, d2.patientID FROM tbldoctorpatient d2
                        inner join tbldoctorpatientclaim d3 ON d3.intPatientID = d2.patientID
                        inner join tbldoctorclaim d1 ON d1.claimID = d3.intClaimID
                        where d1.claimID = '$id'");
                while ($row = mysqli_fetch_array($total)) {
                  $fetchAmount = $row['patientAmount'];
                  $totalAmount = number_format($fetchAmount,2);
                  echo "</br><strong>Total</strong>: Php $totalAmount";
                }
              echo '</td>';
              echo '<td>' . $status1 . '</td>';
              echo '<td>

                      <a href="#" data-toggle="modal" data-target="#viewDoctorClaim'.$id.'" >
                      <button class="btn  btn-warning btn-xs">
                      View&nbsp;<span class="glyphicon glyphicon-eye-open"></button>
                      </a>

                    </td>';
              echo '</tr>';
            }
    }
  }
  if(isset($_POST['btnSearch'])){

    $status = $_POST['filter'];

    if($status == "Approved"){

      $result = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                WHERE status = 'Approved' ORDER by claimDoctorName");

        while ($row = mysqli_fetch_array($result)) {

          $id = $row['claimID'];
          $date = $row['claimDate'];
          $name = $row['claimDoctorName'];
          $status2 = $row['status'];
          $convertDate = date("M jS, Y", strtotime("$date"));

          $arrayName = array();
          $arrayServices = array();
          $arrayAmount = array();

          $result2 = mysqli_query($con, "SELECT d1.patientName, d1.patientServices, d1.patientAmount FROM tbldoctorpatient d1
                     INNER JOIN tbldoctorpatientclaim d2 ON d2.intPatientID=d1.patientID WHERE d2.intClaimID=$id");

          while ($row=mysqli_fetch_array($result2)) {
            $arrayName[]=$row['patientName'];
            $arrayServices[]=$row['patientServices'];
            $arrayAmount[]=$row['patientAmount'];
          }

          // if($status == "Approved"){
            echo '<tr>';
            echo '<td>' . $convertDate . '</td>';
            echo '<td>' . $name . '</td>';
            echo '<td>';
            foreach ($arrayName as $key) {
              echo "$key </br>";
            }
            echo '</td><td>';
            foreach ($arrayServices as $key2) {
              echo "$key2 </br>";
            }
            echo '</td><td>';

            foreach ($arrayAmount as $key3) {
              $nkey3 = number_format($key3,2);
              echo "Php $nkey3 </br>";
            }
            echo '</td>';
            echo '<td>' . $status2 . '</td>';
            echo '<td>

            <a href="#" data-toggle="modal" data-target="#disburseDoctorClaim'.$id.'" >
            <button class="btn  btn-success btn-xs">
            Disburse&nbsp;<span class="glyphicon glyphicon-list"></button>
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

        $result = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                  WHERE status = 'Disapproved' ORDER by claimDoctorName");

          while ($row = mysqli_fetch_array($result)) {

            $id = $row['claimID'];
            $date = $row['claimDate'];
            $name = $row['claimDoctorName'];
            $status3 = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$date"));

            $arrayName = array();
            $arrayServices = array();
            $arrayAmount = array();

            $result2 = mysqli_query($con, "SELECT d1.patientName, d1.patientServices, d1.patientAmount FROM tbldoctorpatient d1
                       INNER JOIN tbldoctorpatientclaim d2 ON d2.intPatientID=d1.patientID WHERE d2.intClaimID=$id");

            while ($row=mysqli_fetch_array($result2)) {
              $arrayName[]=$row['patientName'];
              $arrayServices[]=$row['patientServices'];
              $arrayAmount[]=$row['patientAmount'];
            }

            // if($status == "Disapproved"){
              echo '<tr>';
              echo '<td>' . $convertDate . '</td>';
              echo '<td>' . $name . '</td>';
              echo '<td>';
              foreach ($arrayName as $key) {
                echo "$key </br>";
              }
              echo '</td><td>';
              foreach ($arrayServices as $key2) {
                echo "$key2 </br>";
              }
              echo '</td><td>';

              foreach ($arrayAmount as $key3) {
                $nkey3 = number_format($key3,2);
                echo "Php $nkey3 </br>";
              }
              echo '</td>';
              echo '<td>' . $status3 . '</td>';
              echo '<td>No action available</td>';
              echo '</tr>';
            // }
          }
        }
      }

      if(isset($_POST['btnSearch'])){

        $status = $_POST['filter'];

        if($status == "Disbursed"){

          $result = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                    WHERE status = 'Disbursed' ORDER by claimDoctorName");

            while ($row = mysqli_fetch_array($result)) {

              $id = $row['claimID'];
              $date = $row['claimDate'];
              $name = $row['claimDoctorName'];
              $status3 = $row['status'];
              $convertDate = date("M jS, Y", strtotime("$date"));

              $arrayName = array();
              $arrayServices = array();
              $arrayAmount = array();

              $result2 = mysqli_query($con, "SELECT d1.patientName, d1.patientServices, d1.patientAmount FROM tbldoctorpatient d1
                         INNER JOIN tbldoctorpatientclaim d2 ON d2.intPatientID=d1.patientID WHERE d2.intClaimID=$id");

              while ($row=mysqli_fetch_array($result2)) {
                $arrayName[]=$row['patientName'];
                $arrayServices[]=$row['patientServices'];
                $arrayAmount[]=$row['patientAmount'];
              }

              // if($status == "Disapproved"){
                echo '<tr>';
                echo '<td>' . $convertDate . '</td>';
                echo '<td>' . $name . '</td>';
                echo '<td>';
                foreach ($arrayName as $key) {
                  echo "$key </br>";
                }
                echo '</td><td>';
                foreach ($arrayServices as $key2) {
                  echo "$key2 </br>";
                }
                echo '</td><td>';

                foreach ($arrayAmount as $key3) {
                  $nkey3 = number_format($key3,2);
                  echo "Php $nkey3 </br>";
                }
                echo '</td>';
                echo '<td>' . $status3 . '</td>';
                echo '<td>No action available</td>';
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

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>

$("#example1").DataTable(
  {
    "lengthChange": false,
  }
);


</script>
