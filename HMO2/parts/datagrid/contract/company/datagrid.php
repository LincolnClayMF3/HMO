<?php

require 'parts/modals/contract/company/view.php';
require 'parts/modals/contract/company/update.php';
// require 'parts/modals/contract/company/delete.php';
require 'parts/modals/contract/company/renew.php';
require 'parts/modals/contract/company/openRenewal.php';
// require 'parts/modals/contract/company/retrieve.php';

?>

<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <table id="example1" class="table table-bordered  table-striped table-hover table-responsive" style="width: 100%">
      <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <?php

      if($statusFilter == "Active"){

        echo '<tr>';
        echo '<th>Company Name</th>';
        echo '<th>Plan(s)</th>';
        echo '<th>Entry Date</th>';
        echo '<th>End of Contract</th>';
        echo '<th>Before End of Contract</th>';
        echo '<th>Status</th>';
        echo '<th>Action</th>';
        echo '</tr>';

      }

      elseif($statusFilter == "Inactive"){

        echo '<tr>';
        echo '<th>Company Name</th>';
        echo '<th>Plan(s)</th>';
        echo '<th>Entry Date</th>';
        echo '<th>Status</th>';
        echo '<th>Action</th>';
        echo '</tr>';

      }

      elseif($statusFilter == "Expired"){

        echo '<tr>';
        echo '<th>Company Name</th>';
        echo '<th>Plan(s)</th>';
        echo '<th>Entry Date</th>';
        echo '<th>End of Contract</th>';
        echo '<th>Status</th>';
        echo '<th>Action</th>';
        echo '</tr>';

      }

      ?>
    </thead>
    <tbody>
      <?php

      if($specsFilter == "None" && $statusFilter == "Active"){

      $result = mysqli_query($con,"SELECT * FROM tblcompanymaintenance WHERE status = 'Active' ORDER by companyMainName");

      $num = mysqli_num_rows($result);

      if($num > 0){
          while ($row = mysqli_fetch_array($result)) {

            $name = $row['companyMainName'];
            $address = $row['companyMainAddress'];
            $entry = $row['companyEffectivityDate'];
            $end = $row['companyEndContract'];
            $date = strtotime($end);
            $convertEnd = date("M jS, Y", strtotime("$end"));
            $convertEntry = date("M jS, Y", strtotime("$entry"));
            $diff = $date - time();
            $years = floor($diff/(60 * 60 * 24 * 365));
            $months = floor(($diff-$years*60*60*24*365)/(60 * 60 * 24 * 365 / 12));
            $days = floor(($diff-$years*60*60*24*365-$months*60 * 60 * 24 * 365 / 12)/(60*60*24));

            $status = $row['status'];
            $id = $row['companyMainID'];

            $arrayPlan = array();

            $result2 = mysqli_query($con, "SELECT p1.planName, p1.status FROM tblplan p1
                       INNER JOIN tblcompanyplan c1 ON c1.intPlanID=p1.planID WHERE c1.intCompanyID=$id AND p1.status = 'Active'");

            while ($row=mysqli_fetch_array($result2)) {
              $arrayPlan[]=$row['planName'];
            }

            // if($status == "Active"){
              echo '<tr>';
              echo '<td>' . $name . '</td><td>';
              foreach ($arrayPlan as $key) {
                echo "$key </br>";
              }
              echo '</td>';
              echo '<td>' . $convertEntry . '</td>';
              if($end == "Open End"){
                echo '<td>' . $end . '</td>';
              }
              else {
                echo '<td>' . $convertEnd . '</td>';
              }
              if($end == "Open End"){
                echo '<td>--</td>';
              }
              elseif ($years <= 0 && $days <= 0) {
                echo '<td>' . $months .' month(s)</td>';
              }
              elseif($years <= 0 && $months <= 0) {
                echo '<td>'.$days.' day(s)</td>';
              }
              elseif($years <= 0) {
                echo '<td>' . $months .' month(s) '.$days.' day(s)</td>';
              }
              elseif($months <= 0 && $days <= 0) {
                echo '<td>'.$years.' year(s)</td>';
              }
              elseif ($days <= 0) {
                echo '<td>' . $years .' years(s) '.$months.' months(s)</td>';
              }
              else {
                echo '<td>'.$years.' year(s) ' . $months .' month(s) '.$days.' day(s)</td>';
              }
              echo '<td>' . $status. '</td>';
              echo '<td>
                      <a href="#" data-toggle="modal" data-target="#viewCompany'.$id.'" >
                            <button class="btn  btn-warning btn-xs">
                            View <span class="glyphicon glyphicon-eye-open"></button>
                      </a>

                      <a href="#" data-toggle="modal" data-target="#editCompany'.$id.'" >
                            <button class="btn  btn-primary btn-xs">
                            Edit <span class="glyphicon glyphicon-pencil"></button>
                      </a>';

                      // if($end != "Open End"){
                      //   echo '<a href="#" data-toggle="modal" data-target="#editCompany'.$id.'" >
                      //         <button class="btn  btn-primary btn-xs">
                      //         Renew <span class="glyphicon glyphicon-pencil"></button>
                      //   </a>';
                      // }

              echo '</td>';
              echo '</tr>';
            // }
        }
      }
    }

      if(isset($_POST['btnSearch'])){

        if($specsFilter == "Open End" && $statusFilter == "Active"){

        $result = mysqli_query($con,"SELECT * FROM tblcompanymaintenance
                  WHERE status = 'Active' AND companyEndContract = 'Open End'
                  ORDER by companyMainName");

        $num = mysqli_num_rows($result);

        if($num > 0){
            while ($row = mysqli_fetch_array($result)) {

              $name = $row['companyMainName'];
              $address = $row['companyMainAddress'];
              $entry = $row['companyEffectivityDate'];
              $end = $row['companyEndContract'];
              $convertEntry = date("M jS, Y", strtotime("$entry"));
              $status = $row['status'];
              $id = $row['companyMainID'];

              $arrayPlan = array();

              $result2 = mysqli_query($con, "SELECT p1.planName, p1.status FROM tblplan p1
                         INNER JOIN tblcompanyplan c1 ON c1.intPlanID=p1.planID
                         WHERE c1.intCompanyID=$id AND p1.status = 'Active'");

              while ($row=mysqli_fetch_array($result2)) {
                $arrayPlan[]=$row['planName'];
              }


              // if($status == "Active"){
                echo '<tr>';
                echo '<td>' . $name . '</td><td>';
                foreach ($arrayPlan as $key) {
                  echo "$key </br>";
                }
                echo '</td>';
                echo '<td>' . $convertEntry . '</td>';
                echo '<td>' . $end . '</td>';
                echo '<td>--</td>';
                echo '<td>' . $status. '</td>';
                echo '<td>
                        <a href="#" data-toggle="modal" data-target="#viewCompany'.$id.'" >
                              <button class="btn  btn-warning btn-xs">
                              View <span class="glyphicon glyphicon-eye-open"></button>
                        </a>

                        <a href="#" data-toggle="modal" data-target="#editCompany'.$id.'" >
                              <button class="btn  btn-primary btn-xs">
                              Edit <span class="glyphicon glyphicon-pencil"></button>
                        </a>

                      </td>';
                echo '</tr>';
              // }
          }
        }
      }

      elseif($specsFilter == "Specific" && $statusFilter == "Active"){

      $result = mysqli_query($con,"SELECT * FROM tblcompanymaintenance WHERE status = 'Active'
                AND companyEndContract != 'Open End' ORDER by companyMainName");

      $num = mysqli_num_rows($result);

      if($num > 0){
          while ($row = mysqli_fetch_array($result)) {

            $name = $row['companyMainName'];
            $address = $row['companyMainAddress'];
            $entry = $row['companyEffectivityDate'];
            $end = $row['companyEndContract'];
            $date = strtotime($end);
            $convertEnd = date("M jS, Y", strtotime("$end"));
            $convertEntry = date("M jS, Y", strtotime("$entry"));
            $diff = $date - time();
            $years = floor($diff/(60 * 60 * 24 * 365));
            $months = floor(($diff-$years*60*60*24*365)/(60 * 60 * 24 * 365 / 12));
            $days = floor(($diff-$years*60*60*24*365-$months*60 * 60 * 24 * 365 / 12)/(60*60*24));

            $status = $row['status'];
            $id = $row['companyMainID'];

            $arrayPlan = array();

            $result2 = mysqli_query($con, "SELECT p1.planName, p1.status FROM tblplan p1
                       INNER JOIN tblcompanyplan c1 ON c1.intPlanID=p1.planID WHERE c1.intCompanyID=$id AND p1.status = 'Active'");

            while ($row=mysqli_fetch_array($result2)) {
              $arrayPlan[]=$row['planName'];
            }

            // if($status == "Active"){
              echo '<tr>';
              echo '<td>' . $name . '</td><td>';
              foreach ($arrayPlan as $key) {
                echo "$key </br>";
              }
              echo '</td>';
              echo '<td>' . $convertEntry . '</td>';
              echo '<td>' . $convertEnd . '</td>';

              if ($years <= 0 && $days <= 0) {
                echo '<td>' . $months .' month(s)</td>';
              }
              elseif($years <= 0 && $months <= 0) {
                echo '<td>'.$days.' day(s)</td>';
              }
              elseif($years <= 0) {
                echo '<td>' . $months .' month(s) '.$days.' day(s)</td>';
              }
              elseif($months <= 0 && $days <= 0) {
                echo '<td>'.$years.' year(s)</td>';
              }
              elseif ($days <= 0) {
                echo '<td>' . $years .' years(s) '.$months.' months(s)</td>';
              }
              else {
                echo '<td>'.$years.' year(s) ' . $months .' month(s) '.$days.' day(s)</td>';
              }
              echo '<td>' . $status. '</td>';
              echo '<td>
                      <a href="#" data-toggle="modal" data-target="#viewCompany'.$id.'" >
                            <button class="btn  btn-warning btn-xs">
                            View <span class="glyphicon glyphicon-eye-open"></button>
                      </a>

                      <a href="#" data-toggle="modal" data-target="#editCompany'.$id.'" >
                            <button class="btn  btn-primary btn-xs">
                            Edit <span class="glyphicon glyphicon-pencil"></button>
                      </a>

                    </td>';
              echo '</tr>';
            // }
        }
      }
    }

    elseif($specsFilter == "None" && $statusFilter == "Expired"){
      ?>
      <script>

      $("select[name=specs]").prop('disabled', true);

      </script>
      <?php
      $result2 = mysqli_query($con,"SELECT * FROM tblcompanymaintenance WHERE status = 'Expired'
                 ORDER by companyMainName ASC");

          while ($row = mysqli_fetch_array($result2)) {

            $name = $row['companyMainName'];
            $address = $row['companyMainAddress'];
            $entry = $row['companyEffectivityDate'];
            $end = $row['companyEndContract'];
            $status2 = $row['status'];
            $id = $row['companyMainID'];
            $convertEntry = date("M jS, Y", strtotime("$entry"));
            $convertEnd = date("M jS, Y", strtotime("$end"));

            $arrayPlan = array();

            $result3 = mysqli_query($con, "SELECT p1.planName FROM tblplan p1
                       INNER JOIN tblcompanyplan c1 ON c1.intPlanID=p1.planID WHERE c1.intCompanyID=$id");

            while ($row=mysqli_fetch_array($result3)) {
              $arrayPlan[]=$row['planName'];
            }

              echo '<tr>';
              echo '<td>' . $name . '</td><td>';
              foreach ($arrayPlan as $key) {
                echo "$key </br>";
              }
              echo '</td>';
              echo '<td>' . $convertEntry . '</td>';
              echo '<td>' . $convertEnd . '</td>';
              echo '<td>'.$status2.'</td>';
              echo '<td>

              <a href="#" data-toggle="modal" data-target="#renewCompany'.$id.'" >
                    <button class="btn  btn-success btn-xs">
                    Renew <span class="glyphicon glyphicon-list"></button>
              </a>


                    </td>';
              echo '</tr>';
  }

  }

       elseif($specsFilter == "None" && $statusFilter == "Inactive"){
         ?>
         <script>

         $("select[name=specs]").prop('disabled', true);

         </script>
         <?php
         $result2 = mysqli_query($con,"SELECT * FROM tblcompanymaintenance WHERE status = 'Inactive'
                    ORDER by companyMainName ASC");

             while ($row = mysqli_fetch_array($result2)) {

               $name = $row['companyMainName'];
               $address = $row['companyMainAddress'];
               $entry = $row['companyEffectivityDate'];
               $end = $row['companyEndContract'];
               $status2 = $row['status'];
               $id = $row['companyMainID'];
               $convertEntry = date("M jS, Y", strtotime("$entry"));

               $arrayPlan = array();

               $result3 = mysqli_query($con, "SELECT p1.planName FROM tblplan p1
                          INNER JOIN tblcompanyplan c1 ON c1.intPlanID=p1.planID WHERE c1.intCompanyID=$id");

               while ($row=mysqli_fetch_array($result3)) {
                 $arrayPlan[]=$row['planName'];
               }

                 echo '<tr>';
                 echo '<td>' . $name . '</td><td>';
                 foreach ($arrayPlan as $key) {
                   echo "$key </br>";
                 }
                 echo '</td>';
                 echo '<td>' . $convertEntry . '</td>';
                 echo '<td>Terminated</td>';
                 echo '<td><a href="#" data-toggle="modal" data-target="#openRenewCompany'.$id.'" >
                       <button class="btn  btn-success btn-xs">
                       Renew <span class="glyphicon glyphicon-list"></button>
                 </a></td>';
                 echo '</tr>';
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

$(function () {
  $("#example1").DataTable({
    "lengthChange": false
  });
});

</script>
