
<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <?php

    if($display == "Statistical" && $frequency == "None" && $claimType == "None" && $status == "Approved"){

      echo "<div id=\"chartdivApproved\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "None" && $claimType == "None" && $status == "Disapproved"){

      echo "<div id=\"chartdivDisapproved\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Daily" && $claimType == "None" && $status == "Approved"){

      echo "<div id=\"chartdivApprovedDaily\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Daily" && $claimType == "None" && $status == "Disapproved"){

      echo "<div id=\"chartdivDisapprovedDaily\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Weekly" && $claimType == "None" && $status == "Approved"){

      echo "<div id=\"chartdivApprovedWeekly\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Weekly" && $claimType == "None" && $status == "Disapproved"){

      echo "<div id=\"chartdivDisapprovedWeekly\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Monthly" && $claimType == "None" && $status == "Approved"){

      echo "<div id=\"chartdivApprovedMonthly\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Monthly" && $claimType == "None" && $status == "Disapproved"){

      echo "<div id=\"chartdivDisapprovedMonthly\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Yearly" && $claimType == "None" && $status == "Approved"){

      echo "<div id=\"chartdivApprovedYearly\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Yearly" && $claimType == "None" && $status == "Disapproved"){

      echo "<div id=\"chartdivDisapprovedYearly\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Specific" && $claimType == "None" && $status == "Approved"){

      ?>
      <script>

      $("input[name=fromDate]").prop('disabled', false);
      $("input[name=toDate]").prop('disabled', false);

      </script>
      <?php

      $fromDate = $_POST['fromDate'];
      $toDate = $_POST['toDate'];

      echo "<div id=\"chartdivApprovedSpec\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Specific" && $claimType == "None" && $status == "Disapproved"){

      ?>
      <script>

      $("input[name=fromDate]").prop('disabled', false);
      $("input[name=toDate]").prop('disabled', false);

      </script>
      <?php

      $fromDate = $_POST['fromDate'];
      $toDate = $_POST['toDate'];

      echo "<div id=\"chartdivDisapprovedSpec\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "None" && $claimType == "Doctor" && $status == "Approved"){

      echo "<div id=\"chartdivApprovedDoctor\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "None" && $claimType == "Doctor" && $status == "Disapproved"){

      echo "<div id=\"chartdivDisapprovedDoctor\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Daily" && $claimType == "Doctor" && $status == "Approved"){

      echo "<div id=\"chartdivApprovedDoctorDaily\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Daily" && $claimType == "Doctor" && $status == "Disapproved"){

      echo "<div id=\"chartdivDisapprovedDoctorDaily\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Weekly" && $claimType == "Doctor" && $status == "Approved"){

      echo "<div id=\"chartdivApprovedDoctorWeekly\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Weekly" && $claimType == "Doctor" && $status == "Disapproved"){

      echo "<div id=\"chartdivDisapprovedDoctorWeekly\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Monthly" && $claimType == "Doctor" && $status == "Approved"){

      echo "<div id=\"chartdivApprovedDoctorMonthly\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Monthly" && $claimType == "Doctor" && $status == "Disapproved"){

      echo "<div id=\"chartdivDisapprovedDoctorMonthly\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Yearly" && $claimType == "Doctor" && $status == "Approved"){

      echo "<div id=\"chartdivApprovedDoctorYearly\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Yearly" && $claimType == "Doctor" && $status == "Disapproved"){

      echo "<div id=\"chartdivDisapprovedDoctorYearly\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "None" && $claimType == "Patient" && $status == "Approved"){

      echo "<div id=\"chartdivApprovedPatient\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "None" && $claimType == "Patient" && $status == "Disapproved"){

      echo "<div id=\"chartdivDisapprovedPatient\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Daily" && $claimType == "Patient" && $status == "Approved"){

      echo "<div id=\"chartdivApprovedPatientDaily\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Daily" && $claimType == "Patient" && $status == "Disapproved"){

      echo "<div id=\"chartdivDisapprovedPatientDaily\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Weekly" && $claimType == "Patient" && $status == "Approved"){

      echo "<div id=\"chartdivApprovedPatientWeekly\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Weekly" && $claimType == "Patient" && $status == "Disapproved"){

      echo "<div id=\"chartdivDisapprovedPatientWeekly\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Monthly" && $claimType == "Patient" && $status == "Approved"){

      echo "<div id=\"chartdivApprovedPatientMonthly\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Monthly" && $claimType == "Patient" && $status == "Disapproved"){

      echo "<div id=\"chartdivDisapprovedPatientMonthly\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Yearly" && $claimType == "Patient" && $status == "Approved"){

      echo "<div id=\"chartdivApprovedPatientYearly\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Yearly" && $claimType == "Patient" && $status == "Disapproved"){

      echo "<div id=\"chartdivDisapprovedPatientYearly\" style=\"width:100%; height:450px\"></div>";
    }


    elseif($display == "Statistical" && $frequency == "Specific" && $claimType == "Doctor" && $status == "Approved"){

      ?>
      <script>

      $("input[name=fromDate]").prop('disabled', false);
      $("input[name=toDate]").prop('disabled', false);

      </script>
      <?php

      $fromDate = $_POST['fromDate'];
      $toDate = $_POST['toDate'];

      echo "<div id=\"chartdivApprovedSpecDoctor\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Specific" && $claimType == "Patient" && $status == "Approved"){

      ?>
      <script>

      $("input[name=fromDate]").prop('disabled', false);
      $("input[name=toDate]").prop('disabled', false);

      </script>
      <?php

      $fromDate = $_POST['fromDate'];
      $toDate = $_POST['toDate'];

      echo "<div id=\"chartdivApprovedSpecPatient\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Specific" && $claimType == "Doctor" && $status == "Disapproved"){

      ?>
      <script>

      $("input[name=fromDate]").prop('disabled', false);
      $("input[name=toDate]").prop('disabled', false);

      </script>
      <?php

      $fromDate = $_POST['fromDate'];
      $toDate = $_POST['toDate'];

      echo "<div id=\"chartdivDisapprovedSpecDoctor\" style=\"width:100%; height:450px\"></div>";
    }

    elseif($display == "Statistical" && $frequency == "Specific" && $claimType == "Patient" && $status == "Disapproved"){

      ?>
      <script>

      $("input[name=fromDate]").prop('disabled', false);
      $("input[name=toDate]").prop('disabled', false);

      </script>
      <?php

      $fromDate = $_POST['fromDate'];
      $toDate = $_POST['toDate'];

      echo "<div id=\"chartdivDisapprovedSpecPatient\" style=\"width:100%; height:450px\"></div>";
    }

    elseif ($display == "Tabular") {

    ?>
    <table id="example2" class="table table-bordered table-striped table-hover table-responsive" width="100%">
    <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Claim Type</th>
        <th>Claimant</th>
        <th>Date Submit</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $currentDate = date('Y-m-d');

      if($display == "Tabular" && $frequency == "None" && $claimType == "None" && $status == "Approved"){

        $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                       WHERE status = 'Approved' ORDER By claimDoctorName ASC");

        while ($row = mysqli_fetch_array($fetchDoctor)) {

          $claimName = $row['claimDoctorName'];
          $claimDate = $row['claimDate'];
          $claimStatus = $row['status'];
          $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

          echo '<tr>';
          echo '<td>Doctor Claim</td>';
          echo '<td>'.$claimName.'</td>';
          echo '<td>'.$convertDateDoctor.'</td>';
          echo '<td>'.$claimStatus.'</td>';
          echo '</tr>';
        }

        $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                        WHERE status = 'Approved' ORDER By reimbursementPatientName ASC");

        while ($row = mysqli_fetch_array($fetchPatient)) {

          $patientName = $row['reimbursementPatientName'];
          $patientDate = $row['reimbursementDate'];
          $patientStatus = $row['status'];
          $convertDatePatient = date("M jS, Y", strtotime("$patientDate"));

          echo '<tr>';
          echo '<td>Patient Claim</td>';
          echo '<td>'.$patientName.'</td>';
          echo '<td>'.$convertDatePatient.'</td>';
          echo '<td>'.$patientStatus.'</td>';
          echo '</tr>';
        }

      }

      if(isset($_POST['btnSearch'])){

        if($frequency == "Specific"){

          $fromDate = $_POST['fromDate'];
          $toDate = $_POST['toDate'];

        }

        if($display == "Tabular" && $frequency == "None" && $claimType == "None" && $status == "Approved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         WHERE status = 'Approved' ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDate.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE status = 'Approved' ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDate.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Daily" && $claimType == "None" && $status == "Approved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         WHERE status = 'Approved' AND claimDate > DATE_SUB(CURDATE(), INTERVAL 1 DAY)
                         ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDate.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE status = 'Approved' AND reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 DAY)
                          ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDate.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Weekly" && $claimType == "None" && $status == "Approved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         WHERE status = 'Approved' AND claimDate > DATE_SUB(CURDATE(), INTERVAL 1 WEEK)
                         ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDate.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE status = 'Approved' AND reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 WEEK)
                          ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDate.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Monthly" && $claimType == "None" && $status == "Approved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         WHERE status = 'Approved' AND claimDate > DATE_SUB(CURDATE(), INTERVAL 1 MONTH)
                         ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE status = 'Approved' AND reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 MONTH)
                          ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDatePatient = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDatePatient.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Yearly" && $claimType == "None" && $status == "Approved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         WHERE status = 'Approved' AND claimDate > DATE_SUB(CURDATE(), INTERVAL 1 YEAR)
                         ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE status = 'Approved' AND reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 YEAR)
                          ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDatePatient = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDatePatient.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Specific" && $claimType == "None" && $status == "Approved"){

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         WHERE status = 'Approved' AND
                         claimDate BETWEEN '$fromDate' AND '$toDate'
                         ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE status = 'Approved' AND
                          reimbursementDate BETWEEN '$fromDate' AND '$toDate'
                          ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDatePatient = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDatePatient.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }


        elseif($display == "Tabular" && $frequency == "None" && $claimType == "None" && $status == "Disapproved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         WHERE status = 'Disapproved' ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDateDoctor = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDateDoctor"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE status = 'Disapproved' ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDatePatient = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDatePatient.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Daily" && $claimType == "None" && $status == "Disapproved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         WHERE status = 'Disapproved' AND claimDate > DATE_SUB(CURDATE(), INTERVAL 1 DAY)
                         ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE status = 'Disapproved' AND reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 DAY)
                          ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDatePatient = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDatePatient.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Weekly" && $claimType == "None" && $status == "Disapproved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         WHERE status = 'Disapproved' AND claimDate > DATE_SUB(CURDATE(), INTERVAL 1 WEEK)
                         ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE status = 'Disapproved' AND reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 WEEK)
                          ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDatePatient = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDatePatient.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Monthly" && $claimType == "None" && $status == "Disapproved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         WHERE status = 'Disapproved' AND claimDate > DATE_SUB(CURDATE(), INTERVAL 1 MONTH)
                         ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE status = 'Disapproved' AND reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 MONTH)
                          ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDatePatient = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDatePatient.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Yearly" && $claimType == "None" && $status == "Disapproved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         WHERE status = 'Disapproved' AND claimDate > DATE_SUB(CURDATE(), INTERVAL 1 YEAR)
                         ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE status = 'Disapproved' AND reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 YEAR)
                          ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDatePatient = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDatePatient.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Specific" && $claimType == "None" && $status == "Disapproved"){

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         WHERE status = 'Disapproved' AND
                         claimDate BETWEEN '$fromDate' AND '$toDate'
                         ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE status = 'Disapproved' AND
                          reimbursementDate BETWEEN '$fromDate' AND '$toDate'
                          ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDatePatient = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDatePatient.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "None" && $claimType == "Doctor" && $status == "Approved") {

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         WHERE status = 'Approved' ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDate.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Daily" && $claimType == "Doctor" && $status == "Approved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         wHERE claimDate > DATE_SUB(CURDATE(), INTERVAL 1 DAY) AND
                         status = 'Approved' ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Weekly" && $claimType == "Doctor" && $status == "Approved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         wHERE claimDate > DATE_SUB(CURDATE(), INTERVAL 1 WEEK) AND
                         status = 'Approved' ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Monthly" && $claimType == "Doctor" && $status == "Approved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         wHERE claimDate > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND
                         status = 'Approved' ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Yearly" && $claimType == "Doctor" && $status == "Approved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         wHERE claimDate > DATE_SUB(CURDATE(), INTERVAL 1 YEAR) AND
                         status = 'Approved' ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Specific" && $claimType == "Doctor" && $status == "Approved"){

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         wHERE claimDate BETWEEN '$fromDate' AND '$toDate'
                         AND status = 'Approved' ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "None" && $claimType == "Doctor" && $status == "Disapproved") {

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         WHERE status = 'Disapproved' ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDate.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Daily" && $claimType == "Doctor" && $status == "Disapproved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         wHERE claimDate > DATE_SUB(CURDATE(), INTERVAL 1 DAY) AND
                         status = 'Disapproved' ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Weekly" && $claimType == "Doctor" && $status == "Disapproved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         wHERE claimDate > DATE_SUB(CURDATE(), INTERVAL 1 WEEK) AND
                         status = 'Disapproved' ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Monthly" && $claimType == "Doctor" && $status == "Disapproved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         wHERE claimDate > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND
                         status = 'Disapproved' ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Yearly" && $claimType == "Doctor" && $status == "Disapproved"){

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         wHERE claimDate > DATE_SUB(CURDATE(), INTERVAL 1 YEAR) AND
                         status = 'Disapproved' ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif($display == "Tabular" && $frequency == "Specific" && $claimType == "Doctor" && $status == "Disapproved"){

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchDoctor = mysqli_query($con, "SELECT * FROM tbldoctorclaim
                         wHERE claimDate BETWEEN '$fromDate' AND '$toDate'
                         AND status = 'Disapproved' ORDER By claimDoctorName ASC");

          while ($row = mysqli_fetch_array($fetchDoctor)) {

            $claimName = $row['claimDoctorName'];
            $claimDate = $row['claimDate'];
            $claimStatus = $row['status'];
            $convertDateDoctor = date("M jS, Y", strtotime("$claimDate"));

            echo '<tr>';
            echo '<td>Doctor Claim</td>';
            echo '<td>'.$claimName.'</td>';
            echo '<td>'.$convertDateDoctor.'</td>';
            echo '<td>'.$claimStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "None" && $claimType == "Patient" && $status == "Approved") {

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE status = 'Approved' ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDatePatient = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDatePatient.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Daily" && $claimType == "Patient" && $status == "Approved") {

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 DAY)
                          AND status = 'Approved' ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDatePatient = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDatePatient.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Weekly" && $claimType == "Patient" && $status == "Approved") {

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 WEEK)
                          AND status = 'Approved' ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDatePatient = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDatePatient.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Monthly" && $claimType == "Patient" && $status == "Approved") {

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 MONTH)
                          AND status = 'Approved' ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDatePatient = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDatePatient.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Yearly" && $claimType == "Patient" && $status == "Approved") {

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 YEAR)
                          AND status = 'Approved' ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDatePatient = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDatePatient.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Specific" && $claimType == "Patient" && $status == "Approved") {

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate BETWEEN '$fromDate' AND '$toDate'
                          AND status = 'Approved' ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDatePatient = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDatePatient.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "None" && $claimType == "Patient" && $status == "Disapproved") {

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE status = 'Disapproved' ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDate.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Daily" && $claimType == "Patient" && $status == "Disapproved") {

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 DAY)
                          AND status = 'Disapproved' ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDate.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Weekly" && $claimType == "Patient" && $status == "Disapproved") {

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 WEEK)
                          AND status = 'Disapproved' ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDate.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Monthly" && $claimType == "Patient" && $status == "Disapproved") {

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 MONTH)
                          AND status = 'Disapproved' ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDate.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Yearly" && $claimType == "Patient" && $status == "Disapproved") {

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate > DATE_SUB(CURDATE(), INTERVAL 1 YEAR)
                          AND status = 'Disapproved' ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDate.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Specific" && $claimType == "Patient" && $status == "Disapproved") {

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchPatient = mysqli_query($con, "SELECT * FROM tblpatientclaim
                          WHERE reimbursementDate BETWEEN '$fromDate' AND '$toDate'
                          AND status = 'Disapproved' ORDER By reimbursementPatientName ASC");

          while ($row = mysqli_fetch_array($fetchPatient)) {

            $patientName = $row['reimbursementPatientName'];
            $patientDate = $row['reimbursementDate'];
            $patientStatus = $row['status'];
            $convertDate = date("M jS, Y", strtotime("$patientDate"));

            echo '<tr>';
            echo '<td>Patient Claim</td>';
            echo '<td>'.$patientName.'</td>';
            echo '<td>'.$convertDate.'</td>';
            echo '<td>'.$patientStatus.'</td>';
            echo '</tr>';
          }

        }


      }


    $_SESSION['frequency'] = $frequency;

      if($frequency == "Specific"){
        $_SESSION['fromDate'] = $fromDate;
        $_SESSION['toDate'] = $toDate;
      }
?>
</tbody>
<tfoot>
<?php

if($display == "Tabular" && $frequency == "Daily" && $claimType == "Doctor" && $status == "Approved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="dailyDoctorApproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/doctorclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "None" && $claimType == "Doctor" && $status == "Approved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="weeklyDoctorApproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/doctorclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Weekly" && $claimType == "Doctor" && $status == "Approved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="weeklyDoctorApproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/doctorclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Monthly" && $claimType == "Doctor" && $status == "Approved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="monthlyDoctorApproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/doctorclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Yearly" && $claimType == "Doctor" && $status == "Approved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="yearlyDoctorApproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/doctorclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Specific" && $claimType == "Doctor" && $status == "Approved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="yearlyPatientDisapproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/doctorclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "None" && $claimType == "Doctor" && $status == "Disapproved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="weeklyDoctorApproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/doctorclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Daily" && $claimType == "Doctor" && $status == "Disapproved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="dailyDoctorDisapproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/doctorclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Weekly" && $claimType == "Doctor" && $status == "Disapproved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="weeklyDoctorDisapproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/doctorclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Monthly" && $claimType == "Doctor" && $status == "Disapproved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="monthlyDoctorDisapproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/doctorclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Yearly" && $claimType == "Doctor" && $status == "Disapproved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="yearlyDoctorDisapproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/doctorclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Specific" && $claimType == "Doctor" && $status == "Disapproved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="yearlyPatientDisapproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/doctorclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "None" && $claimType == "Patient" && $status == "Approved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="weeklyDoctorApproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/patientclaimsPdf.php\')"></th>';
  echo '</tr>';

}

if($display == "Tabular" && $frequency == "Daily" && $claimType == "Patient" && $status == "Approved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="dailyPatientApproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/patientclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Weekly" && $claimType == "Patient" && $status == "Approved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="weeklyPatientApproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/patientclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Monthly" && $claimType == "Patient" && $status == "Approved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="monthlyPatientApproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/patientclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Yearly" && $claimType == "Patient" && $status == "Approved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="yearlyPatientApproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/patientclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Specific" && $claimType == "Patient" && $status == "Approved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="yearlyPatientDisapproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/patientclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "None" && $claimType == "Patient" && $status == "Disapproved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="weeklyDoctorApproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/patientclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Daily" && $claimType == "Patient" && $status == "Disapproved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="dailyPatientDisapproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/patientclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Weekly" && $claimType == "Patient" && $status == "Disapproved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="weeklyPatientDisapproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/patientclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Monthly" && $claimType == "Patient" && $status == "Disapproved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="monthlyPatientDisapproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/patientclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Yearly" && $claimType == "Patient" && $status == "Disapproved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="yearlyPatientDisapproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/patientclaimsPdf.php\')"></th>';
  echo '</tr>';

}

elseif($display == "Tabular" && $frequency == "Specific" && $claimType == "Patient" && $status == "Disapproved"){

  echo '<tr>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th><input type = "submit" name="yearlyPatientDisapproved" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/patientclaimsPdf.php\')"></th>';
  echo '</tr>';

}
$_SESSION['status'] = $status;
?>
</tfoot>
</table>
<?php
}
?>
</div>
</div>

<?php

$allApprovedDoctorClaims = mysqli_query($con, "SELECT * FROM tbldoctorclaim WHERE status = 'Approved'");
  $approvedDoctorClaims = mysqli_num_rows($allApprovedDoctorClaims);

$allApprovedPatientClaims = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Approved'");
  $approvedPatientClaims = mysqli_num_rows($allApprovedPatientClaims);

$allDisapprovedDoctorClaims = mysqli_query($con, "SELECT * FROM tbldoctorclaim WHERE status = 'Disapproved'");
  $disapprovedDoctorClaims = mysqli_num_rows($allDisapprovedDoctorClaims);

$allDisapprovedPatientClaims = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Disapproved'");
  $disapprovedPatientClaims = mysqli_num_rows($allDisapprovedPatientClaims);


$allApprovedDoctorClaimsDaily = mysqli_query($con, "SELECT * FROM tbldoctorclaim WHERE status = 'Approved'
                                AND claimDate > DATE_SUB(NOW(), INTERVAL 1 DAY)");
  $approvedDoctorClaimsDaily = mysqli_num_rows($allApprovedDoctorClaimsDaily);

$allApprovedPatientClaimsDaily = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Approved'
                                 AND reimbursementDate > DATE_SUB(NOW(), INTERVAL 1 DAY)");
  $approvedPatientClaimsDaily = mysqli_num_rows($allApprovedPatientClaimsDaily);

$allDisapprovedDoctorClaimsDaily = mysqli_query($con, "SELECT * FROM tbldoctorclaim WHERE status = 'Disapproved'
                                   AND claimDate > DATE_SUB(NOW(), INTERVAL 1 DAY)");
  $disapprovedDoctorClaimsDaily = mysqli_num_rows($allDisapprovedDoctorClaimsDaily);

$allDisapprovedPatientClaimsDaily = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Disapproved'
                                    AND reimbursementDate > DATE_SUB(NOW(), INTERVAL 1 DAY)");
  $disapprovedPatientClaimsDaily = mysqli_num_rows($allDisapprovedPatientClaimsDaily);


$allApprovedDoctorClaimsWeekly = mysqli_query($con, "SELECT * FROM tbldoctorclaim WHERE status = 'Approved'
                                 AND claimDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
  $approvedDoctorClaimsWeekly = mysqli_num_rows($allApprovedDoctorClaimsWeekly);

$allApprovedPatientClaimsWeekly = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Approved'
                                  AND reimbursementDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
  $approvedPatientClaimsWeekly = mysqli_num_rows($allApprovedPatientClaimsWeekly);

$allDisapprovedDoctorClaimsWeekly = mysqli_query($con, "SELECT * FROM tbldoctorclaim WHERE status = 'Disapproved'
                                    AND claimDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
  $disapprovedDoctorClaimsWeekly = mysqli_num_rows($allDisapprovedDoctorClaimsWeekly);

$allDisapprovedPatientClaimsWeekly = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Disapproved'
                                     AND reimbursementDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
  $disapprovedPatientClaimsWeekly = mysqli_num_rows($allDisapprovedPatientClaimsWeekly);


$allApprovedDoctorClaimsMonthly = mysqli_query($con, "SELECT * FROM tbldoctorclaim WHERE status = 'Approved'
                                  AND claimDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
  $approvedDoctorClaimsMonthly = mysqli_num_rows($allApprovedDoctorClaimsMonthly);

$allApprovedPatientClaimsMonthly = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Approved'
                                   AND reimbursementDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
  $approvedPatientClaimsMonthly = mysqli_num_rows($allApprovedPatientClaimsMonthly);

$allDisapprovedDoctorClaimsMonthly = mysqli_query($con, "SELECT * FROM tbldoctorclaim WHERE status = 'Disapproved'
                                     AND claimDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
  $disapprovedDoctorClaimsMonthly = mysqli_num_rows($allDisapprovedDoctorClaimsMonthly);

$allDisapprovedPatientClaimsMonthly = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Disapproved'
                                      AND reimbursementDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
  $disapprovedPatientClaimsMonthly = mysqli_num_rows($allDisapprovedPatientClaimsMonthly);


$allApprovedDoctorClaimsYearly = mysqli_query($con, "SELECT * FROM tbldoctorclaim WHERE status = 'Approved'
                                 AND claimDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)");
  $approvedDoctorClaimsYearly = mysqli_num_rows($allApprovedDoctorClaimsYearly);

$allApprovedPatientClaimsYearly = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Approved'
                                  AND reimbursementDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)");
  $approvedPatientClaimsYearly = mysqli_num_rows($allApprovedPatientClaimsYearly);

$allDisapprovedDoctorClaimsYearly = mysqli_query($con, "SELECT * FROM tbldoctorclaim WHERE status = 'Disapproved'
                                    AND claimDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)");
  $disapprovedDoctorClaimsYearly = mysqli_num_rows($allDisapprovedDoctorClaimsYearly);

$allDisapprovedPatientClaimsYearly = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Disapproved'
                                     AND reimbursementDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)");
  $disapprovedPatientClaimsYearly = mysqli_num_rows($allDisapprovedPatientClaimsYearly);


  // $allApprovedDoctorClaimsSpec = mysqli_query($con, "SELECT * FROM tbldoctorclaim WHERE status = 'Approved'
  //                                  AND claimDate BETWEEN '$fromDate' AND '$toDate'");
  //   $approvedDoctorClaimsSpec = mysqli_num_rows($allApprovedDoctorClaimsSpec);
  //
  // $allApprovedPatientClaimsSpec = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Approved'
  //                                   AND reimbursementDate BETWEEN '$fromDate' AND '$toDate'");
  //   $approvedPatientClaimsSpec = mysqli_num_rows($allApprovedPatientClaimsYearly);
  //
  // $allDisapprovedDoctorClaimsSpec = mysqli_query($con, "SELECT * FROM tbldoctorclaim WHERE status = 'Disapproved'
  //                                     AND claimDate BETWEEN '$fromDate' AND '$toDate'");
  //   $disapprovedDoctorClaimsSpec = mysqli_num_rows($allDisapprovedDoctorClaimsSpec);
  //
  // $allDisapprovedPatientClaimsSpec = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE status = 'Disapproved'
  //                                      AND reimbursementDate BETWEEN '$fromDate' AND '$toDate'");
  //   $disapprovedPatientClaimsSpec = mysqli_num_rows($allDisapprovedPatientClaimsSpec);
?>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>

$("#example2").DataTable(
  {
    "ordering": true
  }
);

</script>

<script>

var chartApproved = AmCharts.makeChart( "chartdivApproved", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "All Approved Claims"
  },{
    "text": "as of: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Doctor",
    "visits": "<?php echo $approvedDoctorClaims ?>"
  }, {
    "country": "Patient",
    "visits": "<?php echo $approvedPatientClaims ?>"
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits",
    "autoColor": true
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },

  "export": {
    "enabled": true
  }

} );

</script>

<script>

var chartDisapproved = AmCharts.makeChart( "chartdivDisapproved", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "All Disapproved Claims"
  },{
    "text": "as of: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Doctor",
    "visits": "<?php echo $disapprovedDoctorClaims ?>"
  }, {
    "country": "Patient",
    "visits": "<?php echo $disapprovedPatientClaims ?>"
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits",
    "autoColor": true
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },

  "export": {
    "enabled": true
  }

} );
</script>

<script>
var chartApprovedDaily = AmCharts.makeChart( "chartdivApprovedDaily", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Daily Report"
  },{
    "text": "All Approved Claims: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Doctor",
    "visits": "<?php echo $approvedDoctorClaimsDaily ?>"
  }, {
    "country": "Patient",
    "visits": "<?php echo $approvedPatientClaimsDaily ?>"
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits",
    "autoColor": true
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },

  "export": {
    "enabled": true
  }

} );
</script>

<script>
var chartDisapprovedDaily = AmCharts.makeChart( "chartdivDisapprovedDaily", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Daily Report"
  },{
    "text": "All Disapproved Claims: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Doctor",
    "visits": "<?php echo $disapprovedDoctorClaimsDaily ?>"
  }, {
    "country": "Patient",
    "visits": "<?php echo $disapprovedPatientClaimsDaily ?>"
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits",
    "autoColor": true
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },

  "export": {
    "enabled": true
  }

} );
</script>

<script>
var chartApprovedWeekly = AmCharts.makeChart( "chartdivApprovedWeekly", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Weekly Report"
  },{
    "text": "All Approved Claims: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Doctor",
    "visits": "<?php echo $approvedDoctorClaimsWeekly ?>"
  }, {
    "country": "Patient",
    "visits": "<?php echo $approvedPatientClaimsWeekly ?>"
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits",
    "autoColor": true
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },

  "export": {
    "enabled": true
  }

} );
</script>

<script>
var chartDisapprovedWeekly = AmCharts.makeChart( "chartdivDisapprovedWeekly", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Weekly Report"
  },{
    "text": "All Disapproved Claims: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Doctor",
    "visits": "<?php echo $disapprovedDoctorClaimsWeekly ?>"
  }, {
    "country": "Patient",
    "visits": "<?php echo $disapprovedPatientClaimsWeekly ?>"
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits",
    "autoColor": true
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },

  "export": {
    "enabled": true
  }

} );

</script>

<script>
var chartApprovedMonthly = AmCharts.makeChart( "chartdivApprovedMonthly", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentMonth = date('Y-m');
    $convertMonth = date("M, Y", strtotime("$currentMonth"));

    ?>
    {
    "text": "Monthly Report"
  },{
    "text": "All Approved Claims: <?php echo $convertMonth?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Doctor",
    "visits": "<?php echo $approvedDoctorClaimsMonthly ?>"
  }, {
    "country": "Patient",
    "visits": "<?php echo $approvedPatientClaimsMonthly ?>"
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits",
    "autoColor": true
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },

  "export": {
    "enabled": true
  }

} );
</script>

<script>
var chartDisapprovedMonthly = AmCharts.makeChart( "chartdivDisapprovedMonthly", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentMonth = date('Y-m');
    $convertMonth = date("M, Y", strtotime("$currentMonth"));

    ?>
    {
    "text": "Monthly Report"
  },{
    "text": "All Disapproved Claims: <?php echo $convertMonth?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Doctor",
    "visits": "<?php echo $disapprovedDoctorClaimsMonthly ?>"
  }, {
    "country": "Patient",
    "visits": "<?php echo $disapprovedPatientClaimsMonthly ?>"
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits",
    "autoColor": true
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },

  "export": {
    "enabled": true
  }

} );
</script>

<script>
var chartApprovedSpec = AmCharts.makeChart( "chartdivApprovedSpec", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $convertFrom = date("M jS, Y", strtotime("$fromDate"));
    $convertTo = date("M jS, Y", strtotime("$toDate"));

    ?>
    {
    "text": "All Approved Claims"
  },{
    "text": "From <?php echo $convertFrom?> To <?php echo $convertTo?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Doctor",
    "visits": "<?php echo $approvedDoctorClaimsSpec ?>"
  }, {
    "country": "Patient",
    "visits": "<?php echo $approvedPatientClaimsSpec ?>"
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits",
    "autoColor": true
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },

  "export": {
    "enabled": true
  }

} );

</script>

<script>

var chartDisapprovedSpec = AmCharts.makeChart( "chartdivDisapprovedSpec", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $convertFrom = date("M jS, Y", strtotime("$fromDate"));
    $convertTo = date("M jS, Y", strtotime("$toDate"));

    ?>
    {
    "text": "All Disapproved Claims"
  },{
    "text": "From <?php echo $convertFrom?> To <?php echo $convertTo?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Doctor",
    "visits": "<?php echo $disapprovedDoctorClaimsSpec ?>"
  }, {
    "country": "Patient",
    "visits": "<?php echo $disapprovedPatientClaimsSpec ?>"
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits",
    "autoColor": true
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },

  "export": {
    "enabled": true
  }

} );
</script>

<script>

var chartApprovedYearly = AmCharts.makeChart( "chartdivApprovedYearly", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentYear = date('Y');

    ?>
    {
    "text": "Yearly Report"
  },{
    "text": "All Approved Claims: <?php echo $currentYear?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Doctor",
    "visits": "<?php echo $approvedDoctorClaimsYearly ?>"
  }, {
    "country": "Patient",
    "visits": "<?php echo $approvedPatientClaimsYearly ?>"
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits",
    "autoColor": true
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },

  "export": {
    "enabled": true
  }

} );
</script>

<script>

var chartDisapprovedYearly = AmCharts.makeChart( "chartdivDisapprovedYearly", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentYear = date('Y');

    ?>
    {
    "text": "Yearly Report"
  },{
    "text": "All  Disapproved Claims: <?php echo $currentYear?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Doctor",
    "visits": "<?php echo $disapprovedDoctorClaimsYearly ?>"
  }, {
    "country": "Patient",
    "visits": "<?php echo $disapprovedPatientClaimsYearly ?>"
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits",
    "autoColor": true
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },

  "export": {
    "enabled": true
  }

} );

</script>
