<?php

require 'parts/modals/claims/patient/view.php';
require 'parts/modals/claims/patient/disapproved.php';
require 'parts/modals/claims/patient/disbursed.php';

?>

<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <table id="example1" class="table table-bordered  table-striped table-hover table-responsive" width="100%">
      <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">

        <tr>
          <th>Date Filed</th>
          <th>Patient Name</th>
          <th>Amount</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        <?php

    //     if($status == "Pending" || $status == "Disapproved"){
    //
    //       echo '<tr>';
    //       echo '<th>Date Filed</th>';
    //       echo '<th>Patient Name</th>';
    //       echo '<th>Amount</th>';
    //       echo '<th>Status</th>';
    //       echo '<th>Action</th>';
    //       echo '</tr>';
    //
    //     }
    //
    // else if($status == "Approved"){
    //
    //   echo '<tr>';
    //   echo '<th>Date Filed</th>';
    //   echo '<th>Patient Name</th>';
    //   echo '<th>Amount</th>';
    //   echo '<th>Status</th>';
    //   echo '<th>Action</th>';
    //   echo '</tr>';
    //
    // }
    //
    // else if($status == "Disbursed"){
    //
    //   echo '<tr>';
    //   echo '<th>Date Filed</th>';
    //   echo '<th>Patient Name</th>';
    //   echo '<th>Amount</th>';
    //   echo '<th>Date Disbursed</th>';
    //   echo '<th>Status</th>';
    //   echo '<th>Action</th>';
    //   echo '</tr>';
    //
    // }

        ?>
    </thead>
    <tbody>
      <?php

      $result = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Pending'
                 ORDER by reimbursementPatientName ASC");

      $num = mysqli_num_rows($result);

        if($num > 0){
          while ($row = mysqli_fetch_array($result)) {

            $id = $row['reimbursementID'];
            $date = $row['reimbursementDate'];
            $amount = $row['reimbursementAmount'];
            $name = $row['reimbursementPatientName'];
            $status1 = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$date"));
            $convertTreatment = date("M jS, Y", strtotime("$treatment"));

            if($status == "Pending"){
              echo '<tr>';
              echo '<td>' . $convertDate . '</td>';
              echo '<td>' . $name . '</td>';
              echo '<td>Php ' . number_format($amount,2) . '</td>';
              echo '<td>' . $status1 . '</td>';
              echo '<td>
                      <a href="#" data-toggle="modal" data-target="#viewPatientClaim'.$id.'" >
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
      $result = mysqli_query($con, "SELECT * FROM tblpatientclaim
        WHERE status = 'Approved' ORDER by reimbursementPatientName");

        while ($row = mysqli_fetch_array($result)) {

          $id2 = $row['reimbursementID'];
          $date = $row['reimbursementDate'];
          $name = $row['reimbursementPatientName'];
          $amount = $row['reimbursementAmount'];
          $status2 = $row['status'];
          $convertDate = date("M jS, Y", strtotime("$date"));
          $convertTreatment = date("M jS, Y", strtotime("$treatment"));

          // if($status2 == "Approved"){
            echo '<tr>';
            echo '<td>' . $convertDate . '</td>';
            echo '<td>' . $name . '</td>';
            echo '<td>Php ' . number_format($amount,2) . '</td>';
            echo '<td>' . $status2 . '</td>';
            echo '<td>
                    <a href="#" data-toggle="modal" data-target="#disbursePatientClaim'.$id2.'" >
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

      if($status == "Disbursed"){
        $result = mysqli_query($con, "SELECT * FROM tblpatientclaim
          WHERE status = 'Disbursed' ORDER by reimbursementPatientName");

          while ($row = mysqli_fetch_array($result)) {

            $id2 = $row['reimbursementID'];
            $date = $row['reimbursementDate'];
            $name = $row['reimbursementPatientName'];
            $amount = $row['reimbursementAmount'];
            $status2 = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$date"));
            $convertTreatment = date("M jS, Y", strtotime("$treatment"));

            // if($status2 == "Approved"){
              echo '<tr>';
              echo '<td>' . $convertDate . '</td>';
              echo '<td>' . $name . '</td>';
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

      if($status == "Disapproved"){
        $result = mysqli_query($con, "SELECT * FROM tblpatientclaim
          WHERE status = 'Disapproved' ORDER by reimbursementPatientName");

          while ($row = mysqli_fetch_array($result)) {

            $date = $row['reimbursementDate'];
            $name = $row['reimbursementPatientName'];
            $amount = $row['reimbursementAmount'];
            $status3 = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$date"));
            $convertTreatment = date("M jS, Y", strtotime("$treatment"));

            // if($status3 == "Disapproved"){
              echo '<tr>';
              echo '<td>' . $convertDate . '</td>';
              echo '<td>' . $name . '</td>';
              echo '<td>Php ' . number_format($amount,2) . '</td>';
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
