<div class="box" style="overflow:auto; height: 650px; margin-top: 2em">
  <div class="box-body">
    <?php
    if($display == "Statistical" && $frequency == "None" && $contract == "None" && $status == "Active"){
      echo "<div id=\"chartdiv\" style=\"width:100%; height:450px\"></div>";

    }
    elseif($display == "Statistical" && $frequency == "None" && $contract == "None" && $status == "Terminated"){
      echo "<div id=\"chartdivTerminated\" style=\"width:100%; height:450px\"></div>";

    }
    elseif($display == "Statistical" && $frequency == "Daily" && $contract == "None" && $status == "Active"){
      echo "<div id=\"chartdivToday\" style=\"width:100%; height:450px\"></div>";

    }
    elseif($display == "Statistical" && $frequency == "Weekly" && $contract == "None" && $status == "Active"){
      echo "<div id=\"chartdivWeek\" style=\"width:100%; height:450px\"></div>";

    }
    elseif($display == "Statistical" && $frequency == "Monthly" && $contract == "None" && $status == "Active"){
      echo "<div id=\"chartdivMonth\" style=\"width:100%; height:450px\"></div>";

    }
      elseif($display == "Statistical" && $frequency == "Yearly" && $contract == "None" && $status == "Active"){
        echo "<div id=\"chartdivYear\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "None" && $contract == "Member" && $status == "Active"){
        echo "<div id=\"chartdivAllMember\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "Daily" && $contract == "Member" && $status == "Active"){
        echo "<div id=\"chartdivMemberToday\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "Weekly" && $contract == "Member" && $status == "Active"){
        echo "<div id=\"chartdivMemberWeek\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "Monthly" && $contract == "Member" && $status == "Active"){
        echo "<div id=\"chartdivMemberMonth\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "Yearly" && $contract == "Member" && $status == "Active"){
        echo "<div id=\"chartdivMemberYear\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "None" && $contract == "Company" && $status == "Active"){
        echo "<div id=\"chartdivAllCompany\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "Daily" && $contract == "Company" && $status == "Active"){
        echo "<div id=\"chartdivCompanyToday\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "Weekly" && $contract == "Company" && $status == "Active"){
        echo "<div id=\"chartdivCompanyWeek\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "Monthly" && $contract == "Company" && $status == "Active"){
        echo "<div id=\"chartdivCompanyMonth\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "Yearly" && $contract == "Company" && $status == "Active"){
        echo "<div id=\"chartdivCompanyYear\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "None" && $contract == "Hospital" && $status == "Active"){
        echo "<div id=\"chartdivAllHospital\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "Daily" && $contract == "Hospital" && $status == "Active"){
        echo "<div id=\"chartdivHospitalToday\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "Weekly" && $contract == "Hospital" && $status == "Active"){
        echo "<div id=\"chartdivHospitalWeek\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "Monthly" && $contract == "Hospital" && $status == "Active"){
        echo "<div id=\"chartdivHospitalMonth\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "Yearly" && $contract == "Hospital" && $status == "Active"){
        echo "<div id=\"chartdivHospitalYear\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "Daily" && $contract == "None" && $status == "Terminated"){
        echo "<div id=\"chartdivTodayTerminated\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "Weekly" && $contract == "None" && $status == "Terminated"){
        echo "<div id=\"chartdivWeekTerminated\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "Monthly" && $contract == "None" && $status == "Terminated"){
        echo "<div id=\"chartdivMonthTerminated\" style=\"width:100%; height:450px\"></div>";

      }
        elseif($display == "Statistical" && $frequency == "Yearly" && $contract == "None" && $status == "Terminated"){
          echo "<div id=\"chartdivYearTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "None" && $contract == "Member" && $status == "Terminated"){
          echo "<div id=\"chartdivAllMemberTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Daily" && $contract == "Member" && $status == "Terminated"){
          echo "<div id=\"chartdivMemberTodayTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Weekly" && $contract == "Member" && $status == "Terminated"){
          echo "<div id=\"chartdivMemberWeekTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Monthly" && $contract == "Member" && $status == "Terminated"){
          echo "<div id=\"chartdivMemberMonthTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Yearly" && $contract == "Member" && $status == "Terminated"){
          echo "<div id=\"chartdivMemberYearTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "None" && $contract == "Company" && $status == "Terminated"){
          echo "<div id=\"chartdivAllCompanyTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Daily" && $contract == "Company" && $status == "Terminated"){
          echo "<div id=\"chartdivCompanyTodayTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Weekly" && $contract == "Company" && $status == "Terminated"){
          echo "<div id=\"chartdivCompanyWeekTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Monthly" && $contract == "Company" && $status == "Terminated"){
          echo "<div id=\"chartdivCompanyMonthTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Yearly" && $contract == "Company" && $status == "Terminated"){
          echo "<div id=\"chartdivCompanyYearTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "None" && $contract == "Hospital" && $status == "Terminated"){
          echo "<div id=\"chartdivAllHospitalTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Daily" && $contract == "Hospital" && $status == "Terminated"){
          echo "<div id=\"chartdivHospitalTodayTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Weekly" && $contract == "Hospital" && $status == "Terminated"){
          echo "<div id=\"chartdivHospitalWeekTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Monthly" && $contract == "Hospital" && $status == "Terminated"){
          echo "<div id=\"chartdivHospitalMonthTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Yearly" && $contract == "Hospital" && $status == "Terminated"){
          echo "<div id=\"chartdivHospitalYearTerminated\" style=\"width:100%; height:450px\"></div>";

        }


        //Expired

        elseif($display == "Statistical" && $frequency == "Daily" && $contract == "None" && $status == "Expired"){
        echo "<div id=\"chartdivTodayTerminated\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "Weekly" && $contract == "None" && $status == "Expired"){
        echo "<div id=\"chartdivWeekTerminated\" style=\"width:100%; height:450px\"></div>";

      }
      elseif($display == "Statistical" && $frequency == "Monthly" && $contract == "None" && $status == "Expired"){
        echo "<div id=\"chartdivMonthTerminated\" style=\"width:100%; height:450px\"></div>";

      }
        elseif($display == "Statistical" && $frequency == "Yearly" && $contract == "None" && $status == "Expired"){
          echo "<div id=\"chartdivYearTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "None" && $contract == "Member" && $status == "Expired"){
          echo "<div id=\"chartdivAllMemberTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Daily" && $contract == "Member" && $status == "Expired"){
          echo "<div id=\"chartdivMemberTodayTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Weekly" && $contract == "Member" && $status == "Expired"){
          echo "<div id=\"chartdivMemberWeekTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Monthly" && $contract == "Member" && $status == "Expired"){
          echo "<div id=\"chartdivMemberMonthTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Yearly" && $contract == "Member" && $status == "Expired"){
          echo "<div id=\"chartdivMemberYearTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "None" && $contract == "Company" && $status == "Expired"){
          echo "<div id=\"chartdivAllCompanyTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Daily" && $contract == "Company" && $status == "Expired"){
          echo "<div id=\"chartdivCompanyTodayTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Weekly" && $contract == "Company" && $status == "Expired"){
          echo "<div id=\"chartdivCompanyWeekTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Monthly" && $contract == "Company" && $status == "Expired"){
          echo "<div id=\"chartdivCompanyMonthTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Yearly" && $contract == "Company" && $status == "Expired"){
          echo "<div id=\"chartdivCompanyYearTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "None" && $contract == "Hospital" && $status == "Expired"){
          echo "<div id=\"chartdivAllHospitalTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Daily" && $contract == "Hospital" && $status == "Expired"){
          echo "<div id=\"chartdivHospitalTodayTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Weekly" && $contract == "Hospital" && $status == "Expired"){
          echo "<div id=\"chartdivHospitalWeekTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Monthly" && $contract == "Hospital" && $status == "Expired"){
          echo "<div id=\"chartdivHospitalMonthTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Yearly" && $contract == "Hospital" && $status == "Expired"){
          echo "<div id=\"chartdivHospitalYearTerminated\" style=\"width:100%; height:450px\"></div>";

        }

        //End


        elseif($display == "Statistical" && $frequency == "Specific" && $contract == "None" && $status == "Active"){

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fromDate = $_POST['fromDate'];
          $toDate = $_POST['toDate'];


          $allContractMemberSpecific = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Active'
                                       AND memberEffectivityDate BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractMemberSpecific = mysqli_num_rows($allContractMemberSpecific);

          $allContractCompanySpecific = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Active'
                                       AND companyEffectivityDate BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractCompanySpecific = mysqli_num_rows($allContractCompanySpecific);

          $allContractHospitalSpecific = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Active'
                                       AND hospitalEffectivityDate BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractHospitalSpecific = mysqli_num_rows($allContractHospitalSpecific);

          echo "<div id=\"chartdivSpec\" style=\"width:100%; height:450px\"></div>";

        }

        //Expired
        elseif($display == "Statistical" && $frequency == "Specific" && $contract == "None" && $status == "Expired"){

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fromDate = $_POST['fromDate'];
          $toDate = $_POST['toDate'];


          $allContractMemberSpecific = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Expired'
                                       AND memberEffectivityDate BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractMemberSpecific = mysqli_num_rows($allContractMemberSpecific);

          $allContractCompanySpecific = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Expired'
                                       AND companyEffectivityDate BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractCompanySpecific = mysqli_num_rows($allContractCompanySpecific);

          $allContractHospitalSpecific = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Expired'
                                       AND hospitalEffectivityDate BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractHospitalSpecific = mysqli_num_rows($allContractHospitalSpecific);

          echo "<div id=\"chartdivSpec\" style=\"width:100%; height:450px\"></div>";

        }
        //End

        elseif($display == "Statistical" && $frequency == "Specific" && $contract == "None" && $status == "Terminated"){

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fromDate = $_POST['fromDate'];
          $toDate = $_POST['toDate'];

          $allContractMemberTerminatedSpecific = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Inactive'
                                                 AND memberEndContract BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractMemberTerminatedSpecific = mysqli_num_rows($allContractMemberTerminatedSpecific);

          $allContractCompanyTerminatedSpecific = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Inactive'
                                                 AND companyEndContract BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractCompanyTerminatedSpecific = mysqli_num_rows($allContractCompanyTerminatedSpecific);

          $allContractHospitalTerminatedSpecific = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Inactive'
                                                 AND hospitalEndContract BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractHospitalTerminatedSpecific = mysqli_num_rows($allContractHospitalTerminatedSpecific);

          echo "<div id=\"chartdivSpecTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Specific" && $contract == "Member" && $status == "Active"){

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fromDate = $_POST['fromDate'];
          $toDate = $_POST['toDate'];

          $allContractMemberSpecific = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Active'
                                       AND memberEffectivityDate BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractMemberSpecific = mysqli_num_rows($allContractMemberSpecific);

          echo "<div id=\"chartdivSpecMember\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Specific" && $contract == "Company" && $status == "Active"){

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fromDate = $_POST['fromDate'];
          $toDate = $_POST['toDate'];

          $allContractCompanySpecific = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Active'
                                       AND companyEffectivityDate BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractCompanySpecific = mysqli_num_rows($allContractCompanySpecific);

          echo "<div id=\"chartdivSpecCompany\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Specific" && $contract == "Hospital" && $status == "Active"){

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fromDate = $_POST['fromDate'];
          $toDate = $_POST['toDate'];

          $allContractHospitalSpecific = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Active'
                                       AND hospitalEffectivityDate BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractHospitalSpecific = mysqli_num_rows($allContractHospitalSpecific);

          echo "<div id=\"chartdivSpecHospital\" style=\"width:100%; height:450px\"></div>";

        }

        //Expired
        elseif($display == "Statistical" && $frequency == "Specific" && $contract == "Member" && $status == "Expired"){

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fromDate = $_POST['fromDate'];
          $toDate = $_POST['toDate'];

          $allContractMemberSpecific = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Expired'
                                       AND memberEffectivityDate BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractMemberSpecific = mysqli_num_rows($allContractMemberSpecific);

          echo "<div id=\"chartdivSpecMember\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Specific" && $contract == "Company" && $status == "Expired"){

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fromDate = $_POST['fromDate'];
          $toDate = $_POST['toDate'];

          $allContractCompanySpecific = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Expired'
                                       AND companyEffectivityDate BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractCompanySpecific = mysqli_num_rows($allContractCompanySpecific);

          echo "<div id=\"chartdivSpecCompany\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Specific" && $contract == "Hospital" && $status == "Expired"){

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fromDate = $_POST['fromDate'];
          $toDate = $_POST['toDate'];

          $allContractHospitalSpecific = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Expired'
                                       AND hospitalEffectivityDate BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractHospitalSpecific = mysqli_num_rows($allContractHospitalSpecific);

          echo "<div id=\"chartdivSpecHospital\" style=\"width:100%; height:450px\"></div>";

        }
        //End
        elseif($display == "Statistical" && $frequency == "Specific" && $contract == "Member" && $status == "Terminated"){

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fromDate = $_POST['fromDate'];
          $toDate = $_POST['toDate'];

          $allContractMemberTerminatedSpecific = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Inactive'
                                                 AND memberEndContract BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractMemberTerminatedSpecific = mysqli_num_rows($allContractMemberTerminatedSpecific);

          echo "<div id=\"chartdivSpecMemberTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Specific" && $contract == "Company" && $status == "Terminated"){

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fromDate = $_POST['fromDate'];
          $toDate = $_POST['toDate'];

          $allContractCompanyTerminatedSpecific = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Inactive'
                                                 AND companyEndContract BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractCompanyTerminatedSpecific = mysqli_num_rows($allContractCompanyTerminatedSpecific);

          echo "<div id=\"chartdivSpecCompanyTerminated\" style=\"width:100%; height:450px\"></div>";

        }
        elseif($display == "Statistical" && $frequency == "Specific" && $contract == "Hospital" && $status == "Terminated"){

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fromDate = $_POST['fromDate'];
          $toDate = $_POST['toDate'];

          $allContractHospitalTerminatedSpecific = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Inactive'
                                                 AND hospitalEndContract BETWEEN '$fromDate' AND '$toDate'");
          $numbersOfContractHospitalTerminatedSpecific = mysqli_num_rows($allContractHospitalTerminatedSpecific);

          echo "<div id=\"chartdivSpecHospitalTerminated\" style=\"width:100%; height:450px\"></div>";

        }
    elseif ($display == "Tabular") {
      ?>
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
    <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <?php

      if($contract == "None" && $status == "None" || $contract == "None" && $status == "Active" || $contract == "None" && $status == "Terminated" || $contract == "None" && $status == "Expired"){
        echo '<tr>';
        echo '<th>Contract Name</th>';
        echo '<th>End Of Contract</th>';
        echo '<th>Status</th>';
        echo '</tr>';
      }

      elseif ($contract == "Member" && $status == "None" || $contract == "Member" && $status == "Active" || $contract == "Member" && $status == "Terminated" || $contract == "Member" && $status == "Expired"){
        echo '<tr>';
        echo '<th>Member Name</th>';
        echo '<th>End Of Contract</th>';
        echo '<th>Status</th>';
        echo '</tr>';
      }
      elseif ($contract == "Company" && $status == "None" || $contract == "Company" && $status == "Active" || $contract == "Company" && $status == "Terminated" || $contract == "Company" && $status == "Expired"){
        echo '<tr>';
        echo '<th>Company Name</th>';
        echo '<th>End Of Contract</th>';
        echo '<th>Status</th>';
        echo '</tr>';
      }
      elseif ($contract == "Hospital" && $status == "None" || $contract == "Hospital" && $status == "Active" || $contract == "Hospital" && $status == "Terminated" || $contract == "Hospital" && $status == "Expired"){
        echo '<tr>';
        echo '<th>Hospital Name</th>';
        echo '<th>End Of Contract</th>';
        echo '<th>Status</th>';
        echo '</tr>';
      }

      ?>
    </thead>
    <tbody>
      <?php

      $currentDate = date('Y-m-d');

      if($contract == "None" && $status == "None"){

        $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Active' ORDER By memberTransName ASC");

        while ($row = mysqli_fetch_array($fetchMember)) {

          $memberName = $row['memberTransName'];
          $memberEndContract = $row['memberEndContract'];
          $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

          echo '<tr>';
          echo '<td>'.$memberName.'</td>';
          echo '<td>'.$convertMember.'</td>';
          if($memberEndContract >= $currentDate){
            echo '<td>'.$status.'</td>';
          }
          else {
            echo '<td>'.$status.'</td>';
          }
          echo '</tr>';
        }

        $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                        status = 'Active' ORDER By companyMainName ASC");

        while ($row = mysqli_fetch_array($fetchCompany)) {

          $companyName = $row['companyMainName'];
          $companyEndContract = $row['companyEndContract'];

          if($companyEndContract != "Open Ended Contract"){
            $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
          }
          elseif ($companyEndContract == "Open Ended Contract") {
            $endOfContract = "Open Ended Contract";
          }

          echo '<tr>';
          echo '<td>'.$companyName.'</td>';
          echo '<td>'.$endOfContract.'</td>';
          if($companyEndContract != "Open Ended Contract"){
            if($companyEndContract >= $currentDate){
              echo '<td>'.$status.'</td>';
            }
            elseif ($companyEndContract <= $currentDate) {
              echo '<td>'.$status.'</td>';
            }
          }
          elseif ($companyEndContract == "Open Ended Contract"){
            echo '<td>'.$status.'</td>';
          }
          echo '</tr>';
        }

        $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                        status = 'Active' ORDER By hospitalMainName ASC");

        while ($row = mysqli_fetch_array($fetchHospital)) {

          $hospitalName = $row['hospitalMainName'];
          $hospitalEndContract = $row['hospitalEndContract'];

          if($hospitalEndContract != "Open Ended Contract"){
            $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
          }
          elseif ($hospitalEndContract == "Open Ended Contract") {
            $endOfContract = "Open Ended Contract";
          }

          echo '<tr>';
          echo '<td>'.$hospitalName.'</td>';
          echo '<td>'.$endOfContract.'</td>';
          if($hospitalEndContract != "Open Ended Contract"){
            if($hospitalEndContract >= $currentDate){
              echo '<td>'.$status.'</td>';
            }
            elseif ($hospitalEndContract <= $currentDate) {
              echo '<td>'.$status.'</td>';
            }
          }
          elseif ($hospitalEndContract == "Open Ended Contract"){
            echo '<td>'.$status.'</td>';
          }
          echo '</tr>';
        }

      }

      if(isset($_POST['btnSearch'])){

      if($frequency == "Specific"){
        $fromDate = $_POST['fromDate'];
        $toDate = $_POST['toDate'];

      }

        if($display == "Tabular" && $frequency == "None" && $contract == "Member" && $status == "Active"){

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE status = 'Active' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            if($memberEndContract >= $currentDate){
              echo '<td>'.$status.'</td>';
            }
            else {
              echo '<td>'.$status.'</td>';
            }
            echo '</tr>';
          }
        }

        elseif ($display == "Tabular" && $frequency == "Daily" && $contract == "Member" && $status == "Active") {

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 DAY)
                         AND status = 'Active' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Weekly" && $contract == "Member" && $status == "Active") {

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)
                         AND status = 'Active' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Monthly" && $contract == "Member" && $status == "Active") {

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)
                         AND status = 'Active' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Yearly" && $contract == "Member" && $status == "Active") {

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)
                         AND status = 'Active' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Specific" && $contract == "Member" && $status == "Active") {

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE memberEffectivityDate BETWEEN '$fromDate' AND '$toDate'
                         AND status = 'Active' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }


        //Expired

        if($display == "Tabular" && $frequency == "None" && $contract == "Member" && $status == "Expired"){

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE status = 'Expired' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            if($memberEndContract >= $currentDate){
              echo '<td>'.$status.'</td>';
            }
            else {
              echo '<td>'.$status.'</td>';
            }
            echo '</tr>';
          }
        }

        elseif ($display == "Tabular" && $frequency == "Daily" && $contract == "Member" && $status == "Expired") {

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 DAY)
                         AND status = 'Expired' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Weekly" && $contract == "Member" && $status == "Expired") {

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)
                         AND status = 'Expired' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Monthly" && $contract == "Member" && $status == "Expired") {

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)
                         AND status = 'Expired' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Yearly" && $contract == "Member" && $status == "Expired") {

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)
                         AND status = 'Expired' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Specific" && $contract == "Member" && $status == "Expired") {

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE memberEffectivityDate BETWEEN '$fromDate' AND '$toDate'
                         AND status = 'Expired' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        //End
        elseif ($display == "Tabular" && $frequency == "None" && $contract == "Member" && $status == "Terminated") {

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE status = 'Inactive' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Daily" && $contract == "Member" && $status == "Terminated") {

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE memberEndContract > DATE_SUB(NOW(), INTERVAL 1 DAY)
                         AND status = 'Inactive' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Weekly" && $contract == "Member" && $status == "Terminated") {

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE memberEndContract > DATE_SUB(NOW(), INTERVAL 1 WEEK)
                         AND status = 'Inactive' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Monthly" && $contract == "Member" && $status == "Terminated") {

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE memberEndContract > DATE_SUB(NOW(), INTERVAL 1 MONTH)
                         AND status = 'Inactive' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Yearly" && $contract == "Member" && $status == "Terminated") {

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE memberEndContract > DATE_SUB(NOW(), INTERVAL 1 YEAR)
                         AND status = 'Inactive' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Specific" && $contract == "Member" && $status == "Terminated") {

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction
                         WHERE memberEndContract BETWEEN '$fromDate' AND '$toDate'
                         AND status = 'Inactive' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "None" && $contract == "Company" && $status == "Active") {

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          status = 'Active' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }
            elseif ($companyEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';

            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Daily" && $contract == "Company" && $status == "Active") {

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 DAY)
                          AND status = 'Active' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }
            elseif ($companyEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Weekly" && $contract == "Company" && $status == "Active") {

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)
                          AND status = 'Active' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }
            elseif ($companyEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Monthly" && $contract == "Company" && $status == "Active") {

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)
                          AND status = 'Active' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }
            elseif ($companyEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Yearly" && $contract == "Company" && $status == "Active") {

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)
                          AND status = 'Active' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }
            elseif ($companyEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Specific" && $contract == "Company" && $status == "Active") {

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          companyEffectivityDate BETWEEN '$fromDate' AND '$toDate'
                          AND status = 'Active' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }
            elseif ($companyEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        //Expired
        elseif ($display == "Tabular" && $frequency == "None" && $contract == "Company" && $status == "Expired") {

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          status = 'Expired' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }
            elseif ($companyEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';

            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Daily" && $contract == "Company" && $status == "Expired") {

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 DAY)
                          AND status = 'Expired' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }
            elseif ($companyEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Weekly" && $contract == "Company" && $status == "Expired") {

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)
                          AND status = 'Expired' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }
            elseif ($companyEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Monthly" && $contract == "Company" && $status == "Expired") {

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)
                          AND status = 'Expired' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }
            elseif ($companyEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Yearly" && $contract == "Company" && $status == "Expired") {

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)
                          AND status = 'Expired' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }
            elseif ($companyEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Specific" && $contract == "Company" && $status == "Expired") {

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          companyEffectivityDate BETWEEN '$fromDate' AND '$toDate'
                          AND status = 'Expired' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }
            elseif ($companyEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        //End
        elseif ($display == "Tabular" && $frequency == "None" && $contract == "Company" && $status == "Terminated") {

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance
                          WHERE status = 'Inactive'
                          ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];
            $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Daily" && $contract == "Company" && $status == "Terminated") {

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          companyEndContract > DATE_SUB(NOW(), INTERVAL 1 DAY)
                          AND status = 'Inactive' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Weekly" && $contract == "Company" && $status == "Terminated") {

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          companyEndContract > DATE_SUB(NOW(), INTERVAL 1 WEEK)
                          AND status = 'Inactive' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Monthly" && $contract == "Company" && $status == "Terminated") {

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          companyEndContract > DATE_SUB(NOW(), INTERVAL 1 MONTH)
                          AND status = 'Inactive' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Yearly" && $contract == "Company" && $status == "Terminated") {

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          companyEndContract > DATE_SUB(NOW(), INTERVAL 1 YEAR)
                          AND status = 'Inactive' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Specific" && $contract == "Company" && $status == "Terminated") {

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          companyEndContract BETWEEN '$fromDate' AND '$toDate'
                          AND status = 'Inactive' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "None" && $contract == "Hospital" && $status == "Active") {

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           status = 'Active' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Daily" && $contract == "Hospital" && $status == "Active") {

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 DAY) AND
                           status = 'Active' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Weekly" && $contract == "Hospital" && $status == "Active") {

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK) AND
                           status = 'Active' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Monthly" && $contract == "Hospital" && $status == "Active") {

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH) AND
                           status = 'Active' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Yearly" && $contract == "Hospital" && $status == "Active") {

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR) AND
                           status = 'Active' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Specific" && $contract == "Hospital" && $status == "Active") {

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           hospitalEffectivityDate BETWEEN '$fromDate' AND '$toDate' AND
                           status = 'Expired' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }
        
        //Expired
        elseif ($display == "Tabular" && $frequency == "None" && $contract == "Hospital" && $status == "Expired") {

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           status = 'Expired' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Daily" && $contract == "Hospital" && $status == "Expired") {

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 DAY) AND
                           status = 'Expired' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Weekly" && $contract == "Hospital" && $status == "Expired") {

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK) AND
                           status = 'Expired' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Monthly" && $contract == "Hospital" && $status == "Expired") {

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH) AND
                           status = 'Expired' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Yearly" && $contract == "Hospital" && $status == "Expired") {

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR) AND
                           status = 'Expired' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Specific" && $contract == "Hospital" && $status == "Expired") {

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           hospitalEffectivityDate BETWEEN '$fromDate' AND '$toDate' AND
                           status = 'Expired' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        //End


        elseif ($display == "Tabular" && $frequency == "None" && $contract == "Hospital" && $status == "Terminated") {

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           status = 'Inactive' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Manually Terminated";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Daily" && $contract == "Hospital" && $status == "Terminated") {

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           hospitalEndContract > DATE_SUB(NOW(), INTERVAL 1 DAY) AND
                           status = 'Inactive' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Manually Terminated";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Weekly" && $contract == "Hospital" && $status == "Terminated") {

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           hospitalEndContract > DATE_SUB(NOW(), INTERVAL 1 WEEK) AND
                           status = 'Inactive' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Manually Terminated";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Monthly" && $contract == "Hospital" && $status == "Terminated") {

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           hospitalEndContract > DATE_SUB(NOW(), INTERVAL 1 MONTH) AND
                           status = 'Inactive' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Manually Terminated";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Yearly" && $contract == "Hospital" && $status == "Terminated") {

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           hospitalEndContract > DATE_SUB(NOW(), INTERVAL 1 YEAR) AND
                           status = 'Inactive' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Manually Terminated";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Specific" && $contract == "Hospital" && $status == "Terminated") {

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           hospitalEndContract BETWEEN '$fromDate' AND '$toDate' AND
                           status = 'Inactive' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Manually Terminated";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "None" && $contract == "None" && $status == "Active") {

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                         status = 'Active' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          status = 'Active' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }
            elseif ($companyEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           status = 'Active' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        //Expired
        elseif ($display == "Tabular" && $frequency == "None" && $contract == "None" && $status == "Expired") {

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                         status = 'Expired' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          status = 'Expired' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }
            elseif ($companyEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           status = 'Expired' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }
        //End

        elseif ($display == "Tabular" && $frequency == "None" && $contract == "None" && $status == "Terminated") {

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                         status = 'Inactive' ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }
          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          status = 'Inactive' ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];
            $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }
          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           status = 'Inactive' ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];
            $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

        elseif ($display == "Tabular" && $frequency == "Specific" && $contract == "None" && $status == "Active") {

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                         status = 'Active' AND memberEffectivityDate BETWEEN '$fromDate' AND '$toDate'
                         ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          status = 'Active'AND companyEffectivityDate BETWEEN '$fromDate' AND '$toDate'
                          ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }
            elseif ($companyEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           status = 'Active'AND  hospitalEffectivityDate BETWEEN '$fromDate' AND '$toDate'
                           ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }
        //Expired
        elseif ($display == "Tabular" && $frequency == "Specific" && $contract == "None" && $status == "Expired") {

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                         status = 'Expired' AND memberEffectivityDate BETWEEN '$fromDate' AND '$toDate'
                         ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          status = 'Expired'AND companyEffectivityDate BETWEEN '$fromDate' AND '$toDate'
                          ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }
            elseif ($companyEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           status = 'Expired'AND  hospitalEffectivityDate BETWEEN '$fromDate' AND '$toDate'
                           ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Open Ended Contract";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }
        //End

        elseif ($display == "Tabular" && $frequency == "Specific" && $contract == "None" && $status == "Terminated") {

          ?>
          <script>

          $("input[name=fromDate]").prop('disabled', false);
          $("input[name=toDate]").prop('disabled', false);

          </script>
          <?php

          $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                         status = 'Inactive' AND memberEndContract BETWEEN '$fromDate' AND '$toDate'
                         ORDER By memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberName = $row['memberTransName'];
            $memberEndContract = $row['memberEndContract'];
            $convertMember = date("M jS, Y", strtotime("$memberEndContract"));

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$convertMember.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

          $fetchCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                          status = 'Inactive'AND companyEndContract BETWEEN '$fromDate' AND '$toDate'
                          ORDER By companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCompany)) {

            $companyName = $row['companyMainName'];
            $companyEndContract = $row['companyEndContract'];

            if($companyEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$companyEndContract"));
            }
            elseif ($companyEndContract == "Open Ended Contract") {
              $endOfContract = "Manually Terminated";
            }

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                           status = 'Inactive'AND hospitalEndContract BETWEEN '$fromDate' AND '$toDate'
                           ORDER By hospitalMainName ASC");

          while ($row = mysqli_fetch_array($fetchHospital)) {

            $hospitalName = $row['hospitalMainName'];
            $hospitalEndContract = $row['hospitalEndContract'];

            if($hospitalEndContract != "Open Ended Contract"){
              $endOfContract = date("M jS, Y", strtotime("$hospitalEndContract"));
            }
            elseif ($hospitalEndContract == "Open Ended Contract") {
              $endOfContract = "Manually Terminated";
            }

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$endOfContract.'</td>';
            echo '<td>'.$status.'</td>';
            echo '</tr>';
          }

        }

      $_SESSION['frequency'] = $frequency;
      
      if($frequency == "Specific"){
        $_SESSION['fromDate'] = $fromDate;
        $_SESSION['toDate'] = $toDate;
      }
  }
?>
</tbody>
<tfoot>
  <?php

    if($contract == "Member" && $status == "Active"){
      echo '<tr>';
      echo '<th></th>';
      echo '<th></th>';
      echo '<th><input type = "submit" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/memberPdf.php\')"></th>';
      echo '</tr>';
    }

    elseif ($contract == "Member" && $status == "Terminated"){
      echo '<tr>';
      echo '<th></th>';
      echo '<th></th>';
      echo '<th><input type = "submit" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/memberPdf.php\')"></th>';
      echo '</tr>';
    }

    elseif ($contract == "Member" && $status == "Expired"){
      echo '<tr>';
      echo '<th></th>';
      echo '<th></th>';
      echo '<th><input type = "submit" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/memberPdf.php\')"></th>';
      echo '</tr>';
    }

    elseif ($contract == "Company" && $status == "Active"){
      echo '<tr>';
      echo '<th></th>';
      echo '<th></th>';
      echo '<th><input type = "submit" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/companyPdf.php\')"></th>';
      echo '</tr>';
    }

    elseif ($contract == "Company" && $status == "Terminated"){
      echo '<tr>';
      echo '<th></th>';
      echo '<th></th>';
      echo '<th><input type = "submit" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/companyPdf.php\')"></th>';
      echo '</tr>';
    }

    elseif ($contract == "Company" && $status == "Expired"){
      echo '<tr>';
      echo '<th></th>';
      echo '<th></th>';
      echo '<th><input type = "submit" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/companyPdf.php\')"></th>';
      echo '</tr>';
    }

    elseif ($contract == "Hospital" && $status == "Active"){
      echo '<tr>';
      echo '<th></th>';
      echo '<th></th>';
      echo '<th><input type = "submit" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/hospitalPdf.php\')"></th>';
      echo '</tr>';
    }

    elseif ($contract == "Hospital" && $status == "Terminated"){
      echo '<tr>';
      echo '<th></th>';
      echo '<th></th>';
      echo '<th><input type = "submit" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/hospitalPdf.php\')"></th>';
      echo '</tr>';
    }

    elseif ($contract == "Hospital" && $status == "Expired"){
      echo '<tr>';
      echo '<th></th>';
      echo '<th></th>';
      echo '<th><input type = "submit" value = "Generate Report" onclick = "window.open(\'parts/modals/contract/company/hospitalPdf.php\')"></th>';
      echo '</tr>';
    }
    $_SESSION['status'] = $status;
  ?>
</tfoot>
</table>
</div>
</div>
<?php
}
?>

<?php

//All COntract Active
$allContractMember = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Active'");
$numbersOfContractMember = mysqli_num_rows($allContractMember);

$allContractCompany = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Active'");
$numbersOfContractCompany = mysqli_num_rows($allContractCompany);

$allContractHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Active'");
$numbersOfContractHospital = mysqli_num_rows($allContractHospital);

//Contract Today Active
$contractMemberToday = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Active'
                     AND memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 DAY)");
$memberToday = mysqli_num_rows($contractMemberToday);

$contractCompanyToday = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Active'
                     AND companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 DAY)");
$companyToday = mysqli_num_rows($contractCompanyToday);

$contractHospitalToday = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Active'
                     AND hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 DAY)");
$hospitalToday = mysqli_num_rows($contractHospitalToday);

//Contract This Week Active
$contractMemberWeek = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Active'
                     AND memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
$memberWeek = mysqli_num_rows($contractMemberWeek);

$contractCompanyWeek = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Active'
                     AND companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
$companyWeek = mysqli_num_rows($contractCompanyWeek);

$contractHospitalWeek = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Active'
                     AND hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
$hospitalWeek = mysqli_num_rows($contractHospitalWeek);

//Contract This Month Active
$contractMemberMonth = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Active'
                     AND memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
$memberMonth = mysqli_num_rows($contractMemberMonth);

$contractCompanyMonth = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Active'
                     AND companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
$companyMonth = mysqli_num_rows($contractCompanyMonth);

$contractHospitalMonth = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Active'
                     AND hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
$hospitalMonth = mysqli_num_rows($contractHospitalMonth);

//Contract This Year Active
$contractMemberYear = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Active'
                     AND memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)");
$memberYear = mysqli_num_rows($contractMemberYear);

$contractCompanyYear = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Active'
                     AND companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)");
$companyYear = mysqli_num_rows($contractCompanyYear);

$contractHospitalYear = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Active'
                     AND hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)");
$hospitalYear = mysqli_num_rows($contractHospitalYear);

//All Contract Expired

$allContractMemberExpired = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Expired'");
$numbersOfContractMemberExpired = mysqli_num_rows($allContractMemberExpired);

$allContractCompanyExpired = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Expired'");
$numbersOfContractCompanyExpired = mysqli_num_rows($allContractCompanyExpired);

$allContractHospitalExpired = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Expired'");
$numbersOfContractHospitalExpired = mysqli_num_rows($allContractHospitalExpired);

$contractMemberTodayExpired = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Expired'
                     AND memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 DAY)");
$memberTodayExpired = mysqli_num_rows($contractMemberTodayExpired);

$contractCompanyTodayExpired = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Expired'
                     AND companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 DAY)");
$companyTodayExpired = mysqli_num_rows($contractCompanyTodayExpired);

$contractHospitalTodayExpired = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Expired'
                     AND hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 DAY)");
$hospitalTodayExpired = mysqli_num_rows($contractHospitalTodayExpired);

//Contract This Week Active
$contractMemberWeekExpired = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Expired'
                     AND memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
$memberWeekExpired = mysqli_num_rows($contractMemberWeekExpired);

$contractCompanyWeekExpired = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Expired'
                     AND companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
$companyWeekExpired = mysqli_num_rows($contractCompanyWeekExpired);

$contractHospitalWeekExpired = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Expired'
                     AND hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
$hospitalWeekExpired = mysqli_num_rows($contractHospitalWeekExpired);

//Contract This Month Active
$contractMemberMonthExpired = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Expired'
                     AND memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
$memberMonthExpired = mysqli_num_rows($contractMemberMonthExpired);

$contractCompanyMonthExpired = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Expired'
                     AND companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
$companyMonthExpired = mysqli_num_rows($contractCompanyMonthExpired);

$contractHospitalMonthExpired = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Expired'
                     AND hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
$hospitalMonthExpired = mysqli_num_rows($contractHospitalMonthExpired);

//Contract This Year Active
$contractMemberYearExpired = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Expired'
                     AND memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)");
$memberYearExpired = mysqli_num_rows($contractMemberYearExpired);

$contractCompanyYearExpired = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Expired'
                     AND companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)");
$companyYearExpired = mysqli_num_rows($contractCompanyYearExpired);

$contractHospitalYearExpired = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Expired'
                     AND hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)");
$hospitalYearExpired = mysqli_num_rows($contractHospitalYearExpired);

//All Contract Terminated

$allContractMemberTerminated = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Inactive'");
$numbersOfContractMemberTerminated = mysqli_num_rows($allContractMemberTerminated);

$allContractCompanyTerminated = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Inactive'");
$numbersOfContractCompanyTerminated = mysqli_num_rows($allContractCompanyTerminated);

$allContractHospitalTerminated = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Inactive'");
$numbersOfContractHospitalTerminated = mysqli_num_rows($allContractHospitalTerminated);

//Contract Today Terminated
$contractMemberTodayTerminated = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Inactive'
                     AND memberEndContract > DATE_SUB(NOW(), INTERVAL 1 DAY)");
$memberTodayTerminated = mysqli_num_rows($contractMemberTodayTerminated);

$contractCompanyTodayTerminated = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Inactive'
                     AND companyEndContract > DATE_SUB(NOW(), INTERVAL 1 DAY)");
$companyTodayTerminated = mysqli_num_rows($contractCompanyTodayTerminated);

$contractHospitalTodayTerminated = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Inactive'
                     AND hospitalEndContract > DATE_SUB(NOW(), INTERVAL 1 DAY)");
$hospitalTodayTerminated = mysqli_num_rows($contractHospitalTodayTerminated);

//Contract This Week Terminated
$contractMemberWeekTerminated = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Inactive'
                     AND memberEndContract > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
$memberWeekTerminated = mysqli_num_rows($contractMemberWeekTerminated);

$contractCompanyWeekTerminated = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Inactive'
                     AND companyEndContract > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
$companyWeekTerminated = mysqli_num_rows($contractCompanyWeekTerminated);

$contractHospitalWeekTerminated = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Inactive'
                     AND hospitalEndContract > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
$hospitalWeekTerminated = mysqli_num_rows($contractHospitalWeekTerminated);

//Contract This Month Terminated
$contractMemberMonthTerminated = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Inactive'
                     AND memberEndContract > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
$memberMonthTerminated = mysqli_num_rows($contractMemberMonthTerminated);

$contractCompanyMonthTerminated = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Inactive'
                     AND companyEndContract > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
$companyMonthTerminated = mysqli_num_rows($contractCompanyMonthTerminated);

$contractHospitalMonthTerminated = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Inactive'
                     AND hospitalEndContract > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
$hospitalMonthTerminated = mysqli_num_rows($contractHospitalMonthTerminated);

//Contract This Year Terminated
$contractMemberYearTerminated = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Inactive'
                     AND memberEndContract > DATE_SUB(NOW(), INTERVAL 1 YEAR)");
$memberYearTerminated = mysqli_num_rows($contractMemberYearTerminated);

$contractCompanyYearTerminated = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Inactive'
                     AND companyEndContract > DATE_SUB(NOW(), INTERVAL 1 YEAR)");
$companyYearTerminated = mysqli_num_rows($contractCompanyYearTerminated);

$contractHospitalYearTerminated = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Inactive'
                     AND hospitalEndContract > DATE_SUB(NOW(), INTERVAL 1 YEAR)");
$hospitalYearTerminated = mysqli_num_rows($contractHospitalYearTerminated);


?>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>

$("#example1").DataTable(
  {
    "ordering": true
  }
);

</script>

<script>

var chart = AmCharts.makeChart( "chartdiv", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "All Active Contracts as of <?php echo $convertDate?>"
  }],
  "dataProvider": [ {
    "country": "Member",
    "visits": "<?php echo $numbersOfContractMember ?>"
  }, {
    "country": "Company",
    "visits": "<?php echo $numbersOfContractCompany ?>"
  },  {
    "country": "Hospital",
    "visits": "<?php echo $numbersOfContractHospital ?>"
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
var charvAllMember = AmCharts.makeChart( "chartdivAllMember", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "All Active Members as of <?php echo $convertDate?>"
  }],
  "dataProvider": [

    <?php

    $allContractMember = mysqli_query($con, "SELECT DISTINCT YEAR(memberEffectivityDate) as year
                         FROM tblmembertransaction WHERE status = 'Active'");

    while ($row = mysqli_fetch_array($allContractMember)) {
      $years = $row['year'];

      $memberByYear = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                      YEAR(memberEffectivityDate) = '$years'");

      $numRows = mysqli_num_rows($memberByYear);

                  echo    "{";
                  echo    "country: $years,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

 ],
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
    "valueField": "visits"
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
var charvAllCompany = AmCharts.makeChart( "chartdivAllCompany", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "All Active Companies as of <?php echo $convertDate?>"
  }],
  "dataProvider": [

    <?php

    $allContractCompany = mysqli_query($con, "SELECT DISTINCT YEAR(companyEffectivityDate) as year
                         FROM tblcompanymaintenance WHERE status = 'Active'");

    while ($row = mysqli_fetch_array($allContractCompany)) {
      $years = $row['year'];

      $companyByYear = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                      YEAR(companyEffectivityDate) = '$years'");

      $numRows = mysqli_num_rows($companyByYear);

                  echo    "{";
                  echo    "country: $years,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var charvAllHospital = AmCharts.makeChart( "chartdivAllHospital", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "All Active Hospitals as of <?php echo $convertDate?>"
  }],
  "dataProvider": [

    <?php

    $allContractHospital = mysqli_query($con, "SELECT DISTINCT YEAR(hospitalEffectivityDate) as year
                           FROM tblhospitalmaintenance WHERE status = 'Active'");

    while ($row = mysqli_fetch_array($allContractHospital)) {
      $years = $row['year'];

      $hospitalByYear = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                      YEAR(hospitalEffectivityDate) = '$years'");

      $numRows = mysqli_num_rows($hospitalByYear);

                  echo    "{";
                  echo    "country: $years,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartToday = AmCharts.makeChart( "chartdivToday", {
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
    "text": "Active Contracts: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Member",
    "visits": "<?php echo $memberToday ?>"
  }, {
    "country": "Company",
    "visits": "<?php echo $companyToday ?>"
  },  {
    "country": "Hospital",
    "visits": "<?php echo $hospitalToday ?>"
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
    "valueField": "visits"
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
var chartWeek = AmCharts.makeChart( "chartdivWeek", {
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
    "text": "Active Contracts: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Member",
    "visits": "<?php echo $memberWeek ?>"
  }, {
    "country": "Company",
    "visits": "<?php echo $companyWeek ?>"
  },  {
    "country": "Hospital",
    "visits": "<?php echo $hospitalWeek ?>"
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
    "valueField": "visits"
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
var chartMonth = AmCharts.makeChart( "chartdivMonth", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Monthly Report"
  },{
    "text": "Active Contracts: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Member",
    "visits": "<?php echo $memberMonth ?>"
  }, {
    "country": "Company",
    "visits": "<?php echo $companyMonth ?>"
  },  {
    "country": "Hospital",
    "visits": "<?php echo $hospitalMonth ?>"
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
    "valueField": "visits"
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
var chartYear = AmCharts.makeChart( "chartdivYear", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Yearly Report"
  },{
    "text": "Active Contracts: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Member",
    "visits": "<?php echo $memberYear ?>"
  }, {
    "country": "Company",
    "visits": "<?php echo $companyYear ?>"
  },  {
    "country": "Hospital",
    "visits": "<?php echo $hospitalYear ?>"
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
    "valueField": "visits"
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
var chartMemberToday = AmCharts.makeChart( "chartdivMemberToday", {
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
    "text": "Active Members: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Member",
    "visits": "<?php echo $memberToday ?>"
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
    "valueField": "visits"
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
var chartMemberWeek = AmCharts.makeChart( "chartdivMemberWeek", {
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
    "text": "Active Members: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractMember = mysqli_query($con, "SELECT DISTINCT DAY(memberEffectivityDate) as day FROM tblmembertransaction
                         WHERE status = 'Active' AND memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)
                         ORDER BY DAY(memberEffectivityDate) ASC");

    while ($row = mysqli_fetch_array($allContractMember)) {
      $days = $row['day'];

      $memberByWeek = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                       DAY(memberEffectivityDate) = '$days'");

      $numRows = mysqli_num_rows($memberByWeek);

                  echo    "{";
                  echo    "country: $days,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartMemberMonth = AmCharts.makeChart( "chartdivMemberMonth", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Monthly Report"
  },{
    "text": "Active Members: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractMember = mysqli_query($con, "SELECT DISTINCT WEEK(memberEffectivityDate) as week,
                         DAY(memberEffectivityDate) as day FROM tblmembertransaction
                         WHERE status = 'Active' AND memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)
                         ORDER BY WEEK(memberEffectivityDate) ASC");

    while ($row = mysqli_fetch_array($allContractMember)) {
      $weeks = $row['week'];
      $days = $row['day'];

      $memberByMonth = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                      WEEK(memberEffectivityDate) = '$weeks' AND DAY(memberEffectivityDate) = '$days'");

      $numRows = mysqli_num_rows($memberByMonth);

                  echo    "{";
                  echo    "country: $weeks.$days,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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

var chartMemberYear = AmCharts.makeChart( "chartdivMemberYear", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Yearly Report"
  },{
    "text": "Active Members: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractMember = mysqli_query($con, "SELECT DISTINCT YEAR(memberEffectivityDate) as year,
                         MONTH(memberEffectivityDate) as month FROM tblmembertransaction
                         WHERE status = 'Active' AND memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)
                         ORDER BY YEAR(memberEffectivityDate) ASC");

    while ($row = mysqli_fetch_array($allContractMember)) {
      $years = $row['year'];
      $months = $row['month'];

      $memberByYear = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                      YEAR(memberEffectivityDate) = '$years' AND MONTH(memberEffectivityDate) = '$months'");

      $numRows = mysqli_num_rows($memberByYear);

                  echo    "{";
                  echo    "country: $years.$months,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartMemberTodayExpired = AmCharts.makeChart( "chartdivMemberTodayExpired", {
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
    "text": "Active Members: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Member",
    "visits": "<?php echo $memberToday ?>"
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
    "valueField": "visits"
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
var chartMemberWeekExpired = AmCharts.makeChart( "chartdivMemberWeekExpired", {
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
    "text": "Active Members: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractMember = mysqli_query($con, "SELECT DISTINCT DAY(memberEffectivityDate) as day FROM tblmembertransaction
                         WHERE status = 'Expired' AND memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)
                         ORDER BY DAY(memberEffectivityDate) ASC");

    while ($row = mysqli_fetch_array($allContractMember)) {
      $days = $row['day'];

      $memberByWeek = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                       DAY(memberEffectivityDate) = '$days'");

      $numRows = mysqli_num_rows($memberByWeek);

                  echo    "{";
                  echo    "country: $days,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartMemberMonthExpired = AmCharts.makeChart( "chartdivMemberMonthExpired", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Monthly Report"
  },{
    "text": "Active Members: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractMember = mysqli_query($con, "SELECT DISTINCT WEEK(memberEffectivityDate) as week,
                         DAY(memberEffectivityDate) as day FROM tblmembertransaction
                         WHERE status = 'Expired' AND memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)
                         ORDER BY WEEK(memberEffectivityDate) ASC");

    while ($row = mysqli_fetch_array($allContractMember)) {
      $weeks = $row['week'];
      $days = $row['day'];

      $memberByMonth = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                      WEEK(memberEffectivityDate) = '$weeks' AND DAY(memberEffectivityDate) = '$days'");

      $numRows = mysqli_num_rows($memberByMonth);

                  echo    "{";
                  echo    "country: $weeks.$days,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartMemberYearExpired = AmCharts.makeChart( "chartdivMemberYearExpired", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Yearly Report"
  },{
    "text": "Active Members: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractMember = mysqli_query($con, "SELECT DISTINCT YEAR(memberEffectivityDate) as year,
                         MONTH(memberEffectivityDate) as month FROM tblmembertransaction
                         WHERE status = 'Expired' AND memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)
                         ORDER BY YEAR(memberEffectivityDate) ASC");

    while ($row = mysqli_fetch_array($allContractMember)) {
      $years = $row['year'];
      $months = $row['month'];

      $memberByYear = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                      YEAR(memberEffectivityDate) = '$years' AND MONTH(memberEffectivityDate) = '$months'");

      $numRows = mysqli_num_rows($memberByYear);

                  echo    "{";
                  echo    "country: $years.$months,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartCompanyToday = AmCharts.makeChart( "chartdivCompanyToday", {
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
    "text": "Active Companies: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Company",
    "visits": "<?php echo $companyToday ?>"
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
    "valueField": "visits"
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
var chartCompanyWeek = AmCharts.makeChart( "chartdivCompanyWeek", {
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
    "text": "Active Companies: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractCompany = mysqli_query($con, "SELECT DISTINCT DAY(companyEffectivityDate) as day FROM tblcompanymaintenance
                         WHERE status = 'Active' AND companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)
                         ORDER BY DAY(companyEffectivityDate) ASC");

    while ($row = mysqli_fetch_array($allContractCompany)) {
      $days = $row['day'];

      $companyByWeek = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                       DAY(companyEffectivityDate) = '$days'");

      $numRows = mysqli_num_rows($companyByWeek);

                  echo    "{";
                  echo    "country: $days,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartCompanyMonth = AmCharts.makeChart( "chartdivCompanyMonth", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Monthly Report"
  },{
    "text": "Active Companies: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractCompany = mysqli_query($con, "SELECT DISTINCT WEEK(companyEffectivityDate) as week,
                         DAY(companyEffectivityDate) as day FROM tblcompanymaintenance
                         WHERE status = 'Active' AND companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)
                         ORDER BY WEEK(companyEffectivityDate) ASC");

    while ($row = mysqli_fetch_array($allContractCompany)) {
      $weeks = $row['week'];
      $days = $row['day'];

      $companyByMonth = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                      WEEK(companyEffectivityDate) = '$weeks' AND DAY(companyEffectivityDate) = '$days'");

      $numRows = mysqli_num_rows($companyByMonth);

                  echo    "{";
                  echo    "country: $weeks.$days,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartCompanyYear = AmCharts.makeChart( "chartdivCompanyYear", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Yearly Report"
  },{
    "text": "Active Companies: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractCompany = mysqli_query($con, "SELECT DISTINCT YEAR(companyEffectivityDate) as year,
                         MONTH(companyEffectivityDate) as month FROM tblcompanymaintenance
                         WHERE status = 'Active' AND companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)
                         ORDER BY YEAR(companyEffectivityDate) ASC");

    while ($row = mysqli_fetch_array($allContractCompany)) {
      $years = $row['year'];
      $months = $row['month'];

      $companyByYear = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                      YEAR(companyEffectivityDate) = '$years' AND MONTH(companyEffectivityDate) = '$months'");

      $numRows = mysqli_num_rows($companyByYear);

                  echo    "{";
                  echo    "country: $years.$months,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartHospitalToday = AmCharts.makeChart( "chartdivHospitalToday", {
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
    "text": "Active Hospitals: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Hospital",
    "visits": "<?php echo $hospitalToday ?>"
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
    "valueField": "visits"
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
var chartHospitalWeek = AmCharts.makeChart( "chartdivHospitalWeek", {
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
    "text": "Active Hospitals: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractHospital = mysqli_query($con, "SELECT DISTINCT DAY(hospitalEffectivityDate) as day
                         FROM tblhospitalmaintenance
                         WHERE status = 'Active' AND hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)
                         ORDER BY DAY(hospitalEffectivityDate) ASC");

    while ($row = mysqli_fetch_array($allContractHospital)) {
      $days = $row['day'];

      $hospitalByWeek = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                      DAY(hospitalEffectivityDate) = '$days'");

      $numRows = mysqli_num_rows($hospitalByWeek);

                  echo    "{";
                  echo    "country: $days,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartHospitalMonth = AmCharts.makeChart( "chartdivHospitalMonth", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Monthly Report"
  },{
    "text": "Active Hospitals: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractHospital = mysqli_query($con, "SELECT DISTINCT WEEK(hospitalEffectivityDate) as week,
                         DAY(hospitalEffectivityDate) as day FROM tblhospitalmaintenance
                         WHERE status = 'Active' AND hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)
                         ORDER BY WEEK(hospitalEffectivityDate) ASC");

    while ($row = mysqli_fetch_array($allContractHospital)) {
      $weeks = $row['week'];
      $days = $row['day'];

      $hospitalByMonth = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                      WEEK(hospitalEffectivityDate) = '$weeks' AND DAY(hospitalEffectivityDate) = '$days'");

      $numRows = mysqli_num_rows($hospitalByMonth);

                  echo    "{";
                  echo    "country: $weeks.$days,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartHospitalYear = AmCharts.makeChart( "chartdivHospitalYear", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Yearly Report"
  },{
    "text": "Active Hospitals: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractHospital = mysqli_query($con, "SELECT DISTINCT YEAR(hospitalEffectivityDate) as year,
                         MONTH(hospitalEffectivityDate) as month FROM tblhospitalmaintenance
                         WHERE status = 'Active' AND hospitalEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 YEAR)
                         ORDER BY YEAR(hospitalEffectivityDate) ASC");

    while ($row = mysqli_fetch_array($allContractHospital)) {
      $years = $row['year'];
      $months = $row['month'];

      $hospitalByYear = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                      YEAR(hospitalEffectivityDate) = '$years' AND MONTH(hospitalEffectivityDate) = '$months'");

      $numRows = mysqli_num_rows($hospitalByYear);

                  echo    "{";
                  echo    "country: $years.$months,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartTerminated = AmCharts.makeChart( "chartdivTerminated", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "All Terminated Contracts as of: <?php echo $convertDate?>"
  }],
  "dataProvider": [ {
    "country": "Member",
    "visits": "<?php echo $numbersOfContractMemberTerminated ?>"
  }, {
    "country": "Company",
    "visits": "<?php echo $numbersOfContractCompanyTerminated ?>"
  },  {
    "country": "Hospital",
    "visits": "<?php echo $numbersOfContractHospitalTerminated ?>"
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

var charvAllMemberTerminated = AmCharts.makeChart( "chartdivAllMemberTerminated", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "All Terminated Members as of: <?php echo $convertDate?>"
  }],
  "dataProvider": [

    <?php

    $allContractMember = mysqli_query($con, "SELECT DISTINCT YEAR(memberEndContract) as year
                         FROM tblmembertransaction WHERE status = 'Inactive'");

    while ($row = mysqli_fetch_array($allContractMember)) {
      $years = $row['year'];

      $memberByYear = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                      YEAR(memberEndContract) = '$years'");

      $numRows = mysqli_num_rows($memberByYear);

                  echo    "{";
                  echo    "country: $years,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var charvAllCompanyTerminated = AmCharts.makeChart( "chartdivAllCompanyTerminated", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "All Terminated Companies as of: <?php echo $convertDate?>"
  }],
  "dataProvider": [

    <?php

    $allContractCompany = mysqli_query($con, "SELECT DISTINCT YEAR(companyEndContract) as year,
                         MONTH(companyEndContract) as month, DAY(companyEndContract) as day
                         FROM tblcompanymaintenance WHERE status = 'Inactive'");

    while ($row = mysqli_fetch_array($allContractCompany)) {
      $years = $row['year'];
      $months = $row['month'];
      $days = $row['day'];

      $companyByYear = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                       YEAR(companyEndContract) = '$years'
                       AND MONTH(companyEndContract) = '$months'
                       AND DAY(companyEndContract) = '$days'
                       GROUP BY floor(companyEndContract/3600)");

      $numRows = mysqli_num_rows($companyByYear);

                  echo    "{";
                  echo    "country: $years,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var charvAllHospitalTerminated = AmCharts.makeChart( "chartdivAllHospitalTerminated", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "All Terminated Hospitals as of: <?php echo $convertDate?>"
  }],
  "dataProvider": [

    <?php

    $allContractHospital = mysqli_query($con, "SELECT DISTINCT YEAR(hospitalEndContract) as year,
                           MONTH(hospitalEndContract) as month, DAY(hospitalEndContract) as day
                           FROM tblhospitalmaintenance WHERE status = 'Inactive'");

    while ($row = mysqli_fetch_array($allContractHospital)) {
      $years = $row['year'];
      $months = $row['month'];
      $days = $row['day'];

      $hospitalByYear = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                      YEAR(hospitalEndContract) = '$years'
                      AND MONTH(hospitalEndContract) = '$months'
                      AND DAY(hospitalEndContract) = '$days'
                      GROUP BY floor(hospitalEndContract/3600)");

      $numRows = mysqli_num_rows($hospitalByYear);

                  echo    "{";
                  echo    "country: $years,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartMemberTodayTerminated = AmCharts.makeChart( "chartdivMemberTodayTerminated", {
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
    "text": "Terminated Members: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Member",
    "visits": "<?php echo $memberTodayTerminated ?>"
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
    "valueField": "visits"
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
var chartMemberWeekTerminated = AmCharts.makeChart( "chartdivMemberWeekTerminated", {
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
    "text": "Terminated Members: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractMember = mysqli_query($con, "SELECT DISTINCT DAY(memberEndContract) as day FROM tblmembertransaction
                         WHERE status = 'Inactive' AND memberEndContract > DATE_SUB(NOW(), INTERVAL 1 WEEK)
                         ORDER BY DAY(memberEndContract) ASC");

    while ($row = mysqli_fetch_array($allContractMember)) {
      $days = $row['day'];

      $memberByWeek = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                       DAY(memberEndContract) = '$days'");

      $numRows = mysqli_num_rows($memberByWeek);

                  echo    "{";
                  echo    "country: $days,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartMemberMonthTerminated = AmCharts.makeChart( "chartdivMemberMonthTerminated", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Monthly Report"
  },{
    "text": "Terminated Members: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractMember = mysqli_query($con, "SELECT DISTINCT WEEK(memberEffectivityDate) as week,
                         DAY(memberEffectivityDate) as day FROM tblmembertransaction
                         WHERE status = 'Inactive' AND memberEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 MONTH)
                         ORDER BY WEEK(memberEffectivityDate) ASC");

    while ($row = mysqli_fetch_array($allContractMember)) {
      $weeks = $row['week'];

      $memberByMonth = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                      WEEK(memberEffectivityDate) = '$weeks'");

      $numRows = mysqli_num_rows($memberByMonth);

                  echo    "{";
                  echo    "country: $weeks,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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

var chartMemberYearTerminated = AmCharts.makeChart( "chartdivMemberYearTerminated", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Yearly Report"
  },{
    "text": "Terminated Members: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractMember = mysqli_query($con, "SELECT DISTINCT YEAR(memberEndContract) as year,
                         MONTH(memberEndContract) as month FROM tblmembertransaction
                         WHERE status = 'Inactive' AND memberEndContract > DATE_SUB(NOW(), INTERVAL 1 YEAR)
                         ORDER BY YEAR(memberEndContract) ASC");

    while ($row = mysqli_fetch_array($allContractMember)) {
      $years = $row['year'];
      $months = $row['month'];

      $memberByYear = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                      YEAR(memberEndContract) = '$years' AND MONTH(memberEndContract) = '$months'");

      $numRows = mysqli_num_rows($memberByYear);

                  echo    "{";
                  echo    "country: $years.$months,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartCompanyTodayTerminated = AmCharts.makeChart( "chartdivCompanyTodayTerminated", {
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
    "text": "Terminated Companies: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Company",
    "visits": "<?php echo $companyTodayTerminated ?>"
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
    "valueField": "visits"
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
var chartCompanyWeekTerminated = AmCharts.makeChart( "chartdivCompanyWeekTerminated", {
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
    "text": "Terminated Companies: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractCompany = mysqli_query($con, "SELECT DISTINCT DAY(companyEffectivityDate) as day FROM tblcompanymaintenance
                         WHERE status = 'Inactive' AND companyEffectivityDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)
                         ORDER BY DAY(companyEffectivityDate) ASC");

    while ($row = mysqli_fetch_array($allContractCompany)) {
      $days = $row['day'];

      $companyByWeek = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                       DAY(companyEffectivityDate) = '$days'");

      $numRows = mysqli_num_rows($companyByWeek);

                  echo    "{";
                  echo    "country: $days,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

  ],
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
    "valueField": "visits"
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
var chartCompanyMonthTerminated = AmCharts.makeChart( "chartdivCompanyMonthTerminated", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Monthly Report"
  },{
    "text": "Terminated Companies: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractCompany = mysqli_query($con, "SELECT DISTINCT WEEK(companyEndContract) as week,
                         DAY(companyEndContract) as day FROM tblcompanymaintenance
                         WHERE status = 'Inactive' AND companyEndContract > DATE_SUB(NOW(), INTERVAL 1 MONTH)
                         ORDER BY WEEK(companyEndContract) ASC");

    while ($row = mysqli_fetch_array($allContractCompany)) {
      $weeks = $row['week'];
      $days = $row['day'];

      $companyByMonth = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                      WEEK(companyEndContract) = '$weeks' AND DAY(companyEndContract) = '$days'");

      $numRows = mysqli_num_rows($companyByMonth);

                  echo    "{";
                  echo    "country: $weeks.$days,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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

var chartCompanyYearTerminated = AmCharts.makeChart( "chartdivCompanyYearTerminated", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Yearly Report"
  },{
    "text": "Terminated Companies: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractCompany = mysqli_query($con, "SELECT DISTINCT YEAR(companyEndContract) as year,
                         MONTH(companyEndContract) as month FROM tblcompanymaintenance
                         WHERE status = 'Inactive' AND companyEndContract > DATE_SUB(NOW(), INTERVAL 1 YEAR)
                         ORDER BY YEAR(companyEndContract) ASC");

    while ($row = mysqli_fetch_array($allContractCompany)) {
      $years = $row['year'];
      $months = $row['month'];

      $companyByYear = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                      YEAR(companyEndContract) = '$years' AND MONTH(companyEndContract) = '$months'");

      $numRows = mysqli_num_rows($companyByYear);

                  echo    "{";
                  echo    "country: $years.$months,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

  ],
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
    "valueField": "visits"
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
var chartHospitalTodayTerminated = AmCharts.makeChart( "chartdivHospitalTodayTerminated", {
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
    "text": "Terminated Hospitals: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Hospital",
    "visits": "<?php echo $hospitalTodayTerminated ?>"
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
    "valueField": "visits"
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
var chartHospitalWeekTerminated = AmCharts.makeChart( "chartdivHospitalWeekTerminated", {
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
    "text": "Terminated Hospitals: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractHospital = mysqli_query($con, "SELECT DISTINCT DAY(hospitalEndContract) as day
                         FROM tblhospitalmaintenance
                         WHERE status = 'Inactive' AND hospitalEndContract > DATE_SUB(NOW(), INTERVAL 1 WEEK)
                         ORDER BY DAY(hospitalEndContract) ASC");

    while ($row = mysqli_fetch_array($allContractHospital)) {
      $days = $row['day'];

      $hospitalByWeek = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                      DAY(hospitalEndContract) = '$days'");

      $numRows = mysqli_num_rows($hospitalByWeek);

                  echo    "{";
                  echo    "country: $days,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartHospitalMonthTerminated = AmCharts.makeChart( "chartdivHospitalMonthTerminated", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Monthly Report"
  },{
    "text": "Terminated Hospitals: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractHospital = mysqli_query($con, "SELECT DISTINCT WEEK(hospitalEndContract) as week,
                         DAY(hospitalEndContract) as day FROM tblhospitalmaintenance
                         WHERE status = 'Inactive' AND hospitalEndContract > DATE_SUB(NOW(), INTERVAL 1 MONTH)
                         ORDER BY WEEK(hospitalEndContract) ASC");

    while ($row = mysqli_fetch_array($allContractHospital)) {
      $weeks = $row['week'];
      $days = $row['day'];

      $hospitalByMonth = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                      WEEK(hospitalEndContract) = '$weeks' AND DAY(hospitalEndContract) = '$days'");

      $numRows = mysqli_num_rows($hospitalByMonth);

                  echo    "{";
                  echo    "country: $weeks.$days,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartHospitalYearTerminated = AmCharts.makeChart( "chartdivHospitalYearTerminated", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $currentDate = date('Y-m-d');
    $convertDate = date("M jS, Y", strtotime("$currentDate"));

    ?>
    {
    "text": "Yearly Report"
  },{
    "text": "Terminated Hospitals: <?php echo $convertDate?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractHospital = mysqli_query($con, "SELECT DISTINCT YEAR(hospitalEndContract) as year,
                         MONTH(hospitalEndContract) as month FROM tblhospitalmaintenance
                         WHERE status = 'Inactive' AND hospitalEndContract > DATE_SUB(NOW(), INTERVAL 1 YEAR)
                         ORDER BY YEAR(hospitalEndContract) ASC");

    while ($row = mysqli_fetch_array($allContractHospital)) {
      $years = $row['year'];
      $months = $row['month'];

      $hospitalByYear = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                      YEAR(hospitalEndContract) = '$years' AND MONTH(hospitalEndContract) = '$months'");

      $numRows = mysqli_num_rows($hospitalByYear);

                  echo    "{";
                  echo    "country: $years.$months,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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

var chartAllSpecific = AmCharts.makeChart( "chartdivSpec", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $convertFrom = date("M jS, Y", strtotime("$fromDate"));
    $convertTo = date("M jS, Y", strtotime("$toDate"));

    ?>
    {
    "text": "All Active Contracts"
  },{
    "text": "From <?php echo $convertFrom ?> To <?php echo $convertTo ?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Member",
    "visits": "<?php echo $numbersOfContractMemberSpecific ?>"
  },{
    "country": "Company",
    "visits": "<?php echo $numbersOfContractCompanySpecific ?>"
  },{
    "country": "Hospital",
    "visits": "<?php echo $numbersOfContractHospitalSpecific ?>"
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
    "valueField": "visits"
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

var chartAllMemberSpecific = AmCharts.makeChart( "chartdivSpecMember", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $convertFrom = date("M jS, Y", strtotime("$fromDate"));
    $convertTo = date("M jS, Y", strtotime("$toDate"));

    ?>
    {
    "text": "All Active Members"
  },{
    "text": "From <?php echo $convertFrom ?> To <?php echo $convertTo ?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractMember = mysqli_query($con, "SELECT DISTINCT YEAR(memberEffectivityDate) as year
                         FROM tblmembertransaction WHERE status = 'Active' AND memberEffectivityDate
                         BETWEEN '$fromDate' AND '$toDate'");

    while ($row = mysqli_fetch_array($allContractMember)) {
      $years = $row['year'];

      $memberByYear = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                      YEAR(memberEffectivityDate) = '$years'");

      $numRows = mysqli_num_rows($memberByYear);

                  echo    "{";
                  echo    "country: $years,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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

var chartAllCompanySpecific = AmCharts.makeChart( "chartdivSpecCompany", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $convertFrom = date("M jS, Y", strtotime("$fromDate"));
    $convertTo = date("M jS, Y", strtotime("$toDate"));

    ?>
    {
    "text": "All Active Companies"
  },{
    "text": "From <?php echo $convertFrom ?> To <?php echo $convertTo ?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractCompany = mysqli_query($con, "SELECT DISTINCT YEAR(companyEffectivityDate) as year
                         FROM tblcompanymaintenance WHERE status = 'Active' AND companyEffectivityDate
                         BETWEEN '$fromDate' AND '$toDate'");

    while ($row = mysqli_fetch_array($allContractCompany)) {
      $years = $row['year'];

      $companyByYear = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                      YEAR(companyEffectivityDate) = '$years'");

      $numRows = mysqli_num_rows($companyByYear);

                  echo    "{";
                  echo    "country: $years,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
var chartAllHospitalSpecific = AmCharts.makeChart( "chartdivSpecHospital", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $convertFrom = date("M jS, Y", strtotime("$fromDate"));
    $convertTo = date("M jS, Y", strtotime("$toDate"));

    ?>
    {
    "text": "All Active Hospitals"
  },{
    "text": "From <?php echo $convertFrom ?> To <?php echo $convertTo ?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractHospital = mysqli_query($con, "SELECT DISTINCT YEAR(hospitalEffectivityDate) as year
                           FROM tblhospitalmaintenance WHERE status = 'Active' AND hospitalEffectivityDate
                           BETWEEN '$fromDate' AND '$toDate'");

    while ($row = mysqli_fetch_array($allContractHospital)) {
      $years = $row['year'];

      $hospitalByYear = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                      YEAR(hospitalEffectivityDate) = '$years'");

      $numRows = mysqli_num_rows($hospitalByYear);

                  echo    "{";
                  echo    "country: $years,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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

var chartAllSpecificTerminated = AmCharts.makeChart( "chartdivSpecTerminated", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $convertFrom = date("M jS, Y", strtotime("$fromDate"));
    $convertTo = date("M jS, Y", strtotime("$toDate"));

    ?>
    {
    "text": "All Terminated Contracts"
  },{
    "text": "From <?php echo $convertFrom ?> To <?php echo $convertTo ?>",
    "bold": false
  }],
  "dataProvider": [ {
    "country": "Member",
    "visits": "<?php echo $numbersOfContractMemberTerminatedSpecific ?>"
  },{
    "country": "Company",
    "visits": "<?php echo $numbersOfContractCompanyTerminatedSpecific ?>"
  },{
    "country": "Hospital",
    "visits": "<?php echo $numbersOfContractHospitalTerminatedSpecific ?>"
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
    "valueField": "visits"
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

var chartAllMemberSpecificTerminated = AmCharts.makeChart( "chartdivSpecMemberTerminated", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $convertFrom = date("M jS, Y", strtotime("$fromDate"));
    $convertTo = date("M jS, Y", strtotime("$toDate"));

    ?>
    {
    "text": "All Terminated Members"
  },{
    "text": "From <?php echo $convertFrom ?> To <?php echo $convertTo ?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractMember = mysqli_query($con, "SELECT DISTINCT YEAR(memberEndContract) as year
                         FROM tblmembertransaction WHERE status = 'Inactive' AND memberEndContract
                         BETWEEN '$fromDate' AND '$toDate'");

    while ($row = mysqli_fetch_array($allContractMember)) {
      $years = $row['year'];

      $memberByYear = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE
                      YEAR(memberEndContract) = '$years'");

      $numRows = mysqli_num_rows($memberByYear);

                  echo    "{";
                  echo    "country: $years,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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

var chartAllCompanySpecificTerminated = AmCharts.makeChart( "chartdivSpecCompanyTerminated", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $convertFrom = date("M jS, Y", strtotime("$fromDate"));
    $convertTo = date("M jS, Y", strtotime("$toDate"));

    ?>
    {
    "text": "All Terminated Companies"
  },{
    "text": "From <?php echo $convertFrom ?> To <?php echo $convertTo ?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractCompany = mysqli_query($con, "SELECT DISTINCT YEAR(companyEndContract) as year,
                         MONTH(companyEndContract) as month, DAY(companyEndContract) as day
                         FROM tblcompanymaintenance WHERE status = 'Inactive' AND companyEndContract
                         BETWEEN '$fromDate' AND '$toDate'");

    while ($row = mysqli_fetch_array($allContractCompany)) {
      $years = $row['year'];
      $months = $row['month'];
      $days = $row['day'];

      $companyByYear = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE
                       YEAR(companyEndContract) = '$years'
                       AND MONTH(companyEndContract) = '$months'
                       AND DAY(companyEndContract) = '$days'
                       GROUP BY floor(companyEndContract/3600)");

      $numRows = mysqli_num_rows($companyByYear);

                  echo    "{";
                  echo    "country: $years,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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

var chartAllHospitalSpecificTerminated = AmCharts.makeChart( "chartdivSpecHospitalTerminated", {
  "type": "serial",
  "theme": "light",
  "titles":[
    <?php

    $convertFrom = date("M jS, Y", strtotime("$fromDate"));
    $convertTo = date("M jS, Y", strtotime("$toDate"));

    ?>
    {
    "text": "All Terminated Hospitals"
  },{
    "text": "From <?php echo $convertFrom ?> To <?php echo $convertTo ?>",
    "bold": false
  }],
  "dataProvider": [

    <?php

    $allContractHospital = mysqli_query($con, "SELECT DISTINCT YEAR(hospitalEndContract) as year,
                           MONTH(hospitalEndContract) as month, DAY(hospitalEndContract) as day
                           FROM tblhospitalmaintenance WHERE status = 'Inactive' AND hospitalEndContract
                           BETWEEN '$fromDate' AND '$toDate'");

    while ($row = mysqli_fetch_array($allContractHospital)) {
      $years = $row['year'];
      $months = $row['month'];
      $days = $row['day'];

      $hospitalByYear = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE
                      YEAR(hospitalEndContract) = '$years'
                      AND MONTH(hospitalEndContract) = '$months'
                      AND DAY(hospitalEndContract) = '$days'
                      GROUP BY floor(hospitalEndContract/3600)");

      $numRows = mysqli_num_rows($hospitalByYear);

                  echo    "{";
                  echo    "country: $years,";
                  echo    "visits: $numRows";
                  echo  "},";
    }

    ?>

   ],
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
    "valueField": "visits"
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
