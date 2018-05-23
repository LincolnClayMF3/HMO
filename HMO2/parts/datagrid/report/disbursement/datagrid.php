
<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
    <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Claim Type</th>
        <th>Claimant</th>
        <th>Date Request</th>
        <th>Request Amount</th>
        <th>Claim Status</th>
      </tr>
    </thead>
    <tbody>
      <?php

      if($claimType == "None"){

          $patient = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Approved'");

          while ($row = mysqli_fetch_array($patient)) {
            $patientName = $row['reimbursementPatientName'];
            $patientClaimDate = $row['reimbursementDate'];
            $patientClaimAmount = $row['reimbursementAmount'];
            $patientClaimeStatus = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$patientClaimDate"));

          echo '<tr>';
          echo '<td>Patient Claim</td>';
          echo '<td>' . $patientName . '</td>';
          echo '<td>' . $convertDate . '</td>';
          echo '<td>Php '. number_format($patientClaimAmount,2).'</td>';
          echo '<td>' . $patientClaimeStatus . '</td>';
          echo '</tr>';
      }

      $doctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                WHERE status = 'Approved' ORDER by claimDoctorName");

        while ($row = mysqli_fetch_array($doctor)) {

          $id = $row['claimID'];
          $date = $row['claimDate'];
          $name = $row['claimDoctorName'];
          $status2 = $row['status'];
          $convertDate = date("M jS, Y", strtotime("$date"));


          $arrayName = array();
          $arrayServices = array();
          $arrayAmount = array();

          $result2 = mysqli_query($con, "SELECT d1.patientID, d1.patientName, d1.patientServices, d1.patientAmount FROM tbldoctorpatient d1
                     INNER JOIN tbldoctorpatientclaim d2 ON d2.intPatientID=d1.patientID WHERE d2.intClaimID=$id");

          while ($row=mysqli_fetch_array($result2)) {
            $arrayName[]=$row['patientName'];
            $arrayServices[]=$row['patientServices'];
            $arrayAmount[]=$row['patientAmount'];
            $doctorID = $row['patientID'];
          }

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>' . $name . '</td>';
            echo '<td>' . $convertDate . '</td>';
            echo '<td>';
            foreach ($arrayAmount as $key3) {
              $nkey3 = number_format($key3,2);
              echo "Php $nkey3 </br>";
            }
            echo '<td>' . $status2 . '</td>';
            echo '</td>';
            echo '</tr>';
        }

      }

      if(isset($_POST['btnSearch'])){

        $claimType = $_POST['claimType'];
        $claimStatus = $_POST['claimStatus'];
        $status2 = "";

        if ($claimType == "Patient" && $claimStatus == "Approved") {

          $patient = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Approved'");

          while ($row = mysqli_fetch_array($patient)) {
            $patientName = $row['reimbursementPatientName'];
            $patientClaimDate = $row['reimbursementDate'];
            $patientClaimAmount = $row['reimbursementAmount'];
            $patientClaimeStatus = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$patientClaimDate"));


          echo '<tr>';
          echo '<td>Patient Claim</td>';
          echo '<td>' . $patientName . '</td>';
          echo '<td>' . $convertDate . '</td>';
          echo '<td>Php '. number_format($patientClaimAmount,2).'</td>';
          echo '<td>' . $patientClaimeStatus . '</td>';
          echo '</tr>';
          }
        }
        else if ($claimType == "Patient" && $claimStatus == "Disapproved") {

          $patient = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Disapproved'");

          while ($row = mysqli_fetch_array($patient)) {
            $patientName = $row['reimbursementPatientName'];
            $patientClaimDate = $row['reimbursementDate'];
            $patientClaimAmount = $row['reimbursementAmount'];
            $patientClaimeStatus = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$patientClaimDate"));


          echo '<tr>';
          echo '<td>Patient Claim</td>';
          echo '<td>' . $patientName . '</td>';
          echo '<td>' . $convertDate . '</td>';
          echo '<td>Php '. number_format($patientClaimAmount,2).'</td>';
          echo '<td>' . $patientClaimeStatus . '</td>';
          echo '</tr>';
          }
        }

        else if ($claimType == "Patient" && $claimStatus == "None") {

          $patient = mysqli_query($con, "SELECT * FROM tblpatientclaim");

          while ($row = mysqli_fetch_array($patient)) {
            $patientName = $row['reimbursementPatientName'];
            $patientClaimDate = $row['reimbursementDate'];
            $patientClaimAmount = $row['reimbursementAmount'];
            $patientClaimeStatus = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$patientClaimDate"));


          echo '<tr>';
          echo '<td>Patient Claim</td>';
          echo '<td>' . $patientName . '</td>';
          echo '<td>' . $convertDate . '</td>';
          echo '<td>Php '. number_format($patientClaimAmount,2).'</td>';
          echo '<td>' . $patientClaimeStatus . '</td>';
          echo '</tr>';
          }
        }

        elseif ($claimType == "Doctor" && $claimStatus == "Approved") {

          $result = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                    WHERE status = 'Approved' ORDER by claimDoctorName");

            while ($row = mysqli_fetch_array($result)) {

              $id = $row['claimID'];
              $date = $row['claimDate'];
              $name = $row['claimDoctorName'];
              //$received = $row['claimReceived'];
              $status2 = $row['status'];
              $convertDate = date("M jS, Y", strtotime("$date"));

              $arrayName = array();
              $arrayServices = array();
              $arrayAmount = array();

              $result2 = mysqli_query($con, "SELECT d1.patientID, d1.patientName, d1.patientServices, d1.patientAmount FROM tbldoctorpatient d1
                         INNER JOIN tbldoctorpatientclaim d2 ON d2.intPatientID=d1.patientID WHERE d2.intClaimID=$id");

              while ($row=mysqli_fetch_array($result2)) {
                $arrayName[]=$row['patientName'];
                $arrayServices[]=$row['patientServices'];
                $arrayAmount[]=$row['patientAmount'];
                $doctorID = $row['patientID'];
              }

              echo '<tr>';
              echo '<td>Doctor Claim</td>';
              echo '<td>' . $name . '</td>';
              echo '<td>' . $convertDate . '</td>';
              echo '<td>';
              foreach ($arrayAmount as $key3) {
                $nkey3 = number_format($key3,2);
                echo "Php $nkey3 </br>";
              }
              echo '<td>' . $status2 . '</td>';
              echo '</td>';
              echo '</tr>';
            }
        }
        elseif ($claimType == "Doctor" && $claimStatus == "Disapproved") {

          $result = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                    WHERE status = 'Disapproved' ORDER by claimDoctorName");

            while ($row = mysqli_fetch_array($result)) {

              $id = $row['claimID'];
              $date = $row['claimDate'];
              $name = $row['claimDoctorName'];
              //$received = $row['claimReceived'];
              $status2 = $row['status'];
              $convertDate = date("M jS, Y", strtotime("$date"));

              $arrayName = array();
              $arrayServices = array();
              $arrayAmount = array();

              $result2 = mysqli_query($con, "SELECT d1.patientID, d1.patientName, d1.patientServices, d1.patientAmount FROM tbldoctorpatient d1
                         INNER JOIN tbldoctorpatientclaim d2 ON d2.intPatientID=d1.patientID WHERE d2.intClaimID=$id");

              while ($row=mysqli_fetch_array($result2)) {
                $arrayName[]=$row['patientName'];
                $arrayServices[]=$row['patientServices'];
                $arrayAmount[]=$row['patientAmount'];
                $doctorID = $row['patientID'];
              }

              echo '<tr>';
              echo '<td>Doctor Claim</td>';
              echo '<td>' . $name . '</td>';
              echo '<td>' . $convertDate . '</td>';
              echo '<td>';
              foreach ($arrayAmount as $key3) {
                $nkey3 = number_format($key3,2);
                echo "Php $nkey3 </br>";
              }
              echo '<td>' . $status2 . '</td>';
              echo '</td>';
              echo '</tr>';
            }
        }
        elseif ($claimType == "Doctor" && $claimStatus == "None") {

          $result = mysqli_query($con, "SELECT * FROM tbldoctorclaim ORDER by claimDoctorName");

            while ($row = mysqli_fetch_array($result)) {

              $id = $row['claimID'];
              $date = $row['claimDate'];
              $name = $row['claimDoctorName'];
              $status2 = $row['status'];
              $convertDate = date("M jS, Y", strtotime("$date"));

              $arrayName = array();
              $arrayServices = array();
              $arrayAmount = array();

              $result2 = mysqli_query($con, "SELECT d1.patientID, d1.patientName, d1.patientServices, d1.patientAmount FROM tbldoctorpatient d1
                         INNER JOIN tbldoctorpatientclaim d2 ON d2.intPatientID=d1.patientID WHERE d2.intClaimID=$id");

              while ($row=mysqli_fetch_array($result2)) {
                $arrayName[]=$row['patientName'];
                $arrayServices[]=$row['patientServices'];
                $arrayAmount[]=$row['patientAmount'];
                $doctorID = $row['patientID'];
              }

              echo '<tr>';
              echo '<td>Doctor Claim</td>';
              echo '<td>' . $name . '</td>';
              echo '<td>' . $convertDate . '</td>';
              echo '<td>';
              foreach ($arrayAmount as $key3) {
                $nkey3 = number_format($key3,2);
                echo "Php $nkey3 </br>";
              }
              echo '<td>' . $status2 . '</td>';
              echo '</td>';
              echo '</tr>';
            }
        }
        $_SESSION['status'] = $status2;
        $_SESSION['claimType'] = $claimType;
}

?>
</tbody>
<tfoot>
  <tr>
    <?php
    $totalDisburse = 0;
    if($claimType == "Patient" && $claimStatus == "Approved"){

      $total = mysqli_query($con, "SELECT SUM(reimbursementAmount) as reimbursementAmount FROM tblpatientclaim WHERE status = 'Approved'");
      while ($row = mysqli_fetch_array($total)) {
        $totalDisburse = $row['reimbursementAmount'];
      }
      echo '<th></th>';
      echo '<th></th>';
      echo '<th></th>';
      if(!empty($totalDisburse)){
        echo '<th>Total Amount Disbursed: Php '.number_format($totalDisburse,2).'</th>';
        echo '<th><input type="submit" value="Generate Report" onclick = "window.open(\'parts/modals/contract/company/disbursementPdf.php\')"></th>';
      }
      else {
          echo '<th></th>';
          echo '<th></th>';
      }
    }
    else if($claimType == "Patient" && $claimStatus == "Disapproved"){

      $total = mysqli_query($con, "SELECT SUM(reimbursementAmount) as reimbursementAmount FROM tblpatientclaim WHERE status = 'Disapproved'");
      while ($row = mysqli_fetch_array($total)) {
        $totalDisburse = $row['reimbursementAmount'];
      }
      echo '<th></th>';
      echo '<th></th>';
      echo '<th></th>';
      if(!empty($totalDisburse)){
        echo '<th>Total Amount Disbursed: Php '.number_format($totalDisburse,2).'</th>';
        echo '<th><input type="submit" value="Generate Report" onclick = "window.open(\'parts/modals/contract/company/disbursementPdf.php\')"></th>';
      }
      else {
          echo '<th></th>';
          echo '<th></th>';
      }
    }
    elseif ($claimType == "Doctor" && $claimStatus == "Approved") {

      $result = mysqli_query($con, "SELECT * FROM tbldoctorclaim WHERE status = 'Approved'");

        while ($row = mysqli_fetch_array($result)) {

          $id = $row['claimID'];

          $result2 = mysqli_query($con, "SELECT SUM(patientAmount) as patientAmount, patientID FROM tbldoctorpatient
                     INNER JOIN tbldoctorpatientclaim  ON intPatientID = patientID where intClaimID = $id");

          while ($row = mysqli_fetch_array($result2)) {
          $totalDisburse = $row['patientAmount'];
          }
    }
    echo '<th></th>';
    echo '<th></th>';
    echo '<th></th>';
    if(!empty($totalDisburse)){
      echo '<th>Total Amount Disbursed: Php '.number_format($totalDisburse,2).'</th>';
      echo '<th><input type="submit" value="Generate Report" onclick = "window.open(\'parts/modals/contract/company/disbursementPdf.php\')"></th>';
    }
    else {
        echo '<th></th>';
        echo '<th></th>';
    }
  }
  elseif ($claimType == "Doctor" && $claimStatus == "Disapproved") {

      $result = mysqli_query($con, "SELECT * FROM tbldoctorclaim WHERE status = 'Disapproved'");

        while ($row = mysqli_fetch_array($result)) {

          $id = $row['claimID'];

          $result2 = mysqli_query($con, "SELECT SUM(patientAmount) as patientAmount, patientID FROM tbldoctorpatient
                     INNER JOIN tbldoctorpatientclaim  ON intPatientID = patientID where intClaimID = $id");

          while ($row = mysqli_fetch_array($result2)) {
          $totalDisburse = $row['patientAmount'];
          }
    }
    echo '<th></th>';
    echo '<th></th>';
    echo '<th></th>';
    if(!empty($totalDisburse)){
      echo '<th>Total Amount Disbursed: Php '.number_format($totalDisburse,2).'</th>';
      echo '<th><input type="submit" value="Generate Report" onclick = "window.open(\'parts/modals/contract/company/disbursementPdf.php\')"></th>';
    }
    else {
        echo '<th></th>';
        echo '<th></th>';
    }
  }

  $_SESSION['totalDisburse'] = $totalDisburse;
    ?>
  </tr>
</tfoot>
</table>
</div>
</div>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>

$("#example1").DataTable(
  {
    "lengthChange": true
  }
);

</script>
