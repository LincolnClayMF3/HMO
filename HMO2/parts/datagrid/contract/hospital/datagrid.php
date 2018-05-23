<?php

require 'parts/modals/contract/hospital/view.php';
require 'parts/modals/contract/hospital/update.php';
// require 'parts/modals/contract/hospital/delete.php';
// require 'parts/modals/contract/hospital/retrieve.php';
require 'parts/modals/contract/hospital/renew.php';
require 'parts/modals/contract/hospital/openRenewal.php';

?>

<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" style="width: 100%">
      <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <?php

        if($regionFilter == "None" && $specsFilter == "None" && $statusFilter == "Inactive" ||
           $specsFilter == "None" && $statusFilter == "Inactive"){

             echo '<th>Hospital Name</th>';
             echo '<th>Region</th>';
             echo '<th>Entry Date</th>';
             echo '<th>Date Terminated</th>';
             echo '<th>Action</th>';

        }
        elseif($regionFilter == "None" && $specsFilter == "None" && $statusFilter == "Expired" ||
           $specsFilter == "None" && $statusFilter == "Expired"){

             echo '<th>Hospital Name</th>';
             echo '<th>Region</th>';
             echo '<th>Entry Date</th>';
             echo '<th>End of Contract</th>';
             echo '<th>Status</th>';
             echo '<th>Action</th>';

        }
        else{
          echo '<th>Hospital Name</th>';
          echo '<th>Region</th>';
          echo '<th>End of Contract</th>';
          echo '<th>Before End of Contract</th>';
          echo '<th>Status</th>';
          echo '<th>Action</th>';

        }

        ?>
      </tr>
    </thead>
    <tbody>
      <?php

    if($regionFilter == "None" && $specsFilter == "None" && $statusFilter == "Active"){

      $result = mysqli_query($con,"SELECT h1.hospitalMainName, h1.hospitalEffectivityDate, h1.hospitalEndContract,
                h1.status, h1.hospitalMainID, h1.hospitalRegion, r1.regionName, r1.regionID FROM tblhospitalmaintenance h1
                INNER JOIN tblregion r1 ON r1.regionID = h1.hospitalRegion
                WHERE h1.status = 'Active' ORDER by h1.hospitalMainName ASC");

      $num = mysqli_num_rows($result);

      if($num > 0){
          while ($row = mysqli_fetch_array($result)) {

            $name = $row['hospitalMainName'];
            $region = $row['regionName'];
            $entry = $row['hospitalEffectivityDate'];
            $end = $row['hospitalEndContract'];
            $date = strtotime($end);
            $convertEnd = date("M jS, Y", strtotime("$end"));
            $convertEntry = date("M jS, Y", strtotime("$entry"));
            $diff = $date - time();
            $years = floor($diff/(60 * 60 * 24 * 365));
            $months = floor(($diff-$years*60*60*24*365)/(60 * 60 * 24 * 365 / 12));
            $days = floor(($diff-$years*60*60*24*365-$months*60 * 60 * 24 * 365 / 12)/(60*60*24));

            $status = $row['status'];
            $id = $row['hospitalMainID'];

              echo '<tr>';
              echo '<td>' . $name . '</td>';
              echo '<td>' . $region . '</td>';
              // echo '<td>' . $convertEntry . '</td>';
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
                      <a href="#" data-toggle="modal" data-target="#viewHospital'.$id.'" >
                            <button class="btn  btn-warning btn-xs">
                            View <span class="glyphicon glyphicon-eye-open"></button>
                      </a>

                      <a href="#" data-toggle="modal" data-target="#editHospital'.$id.'" >
                            <button class="btn  btn-primary btn-xs">
                            Edit <span class="glyphicon glyphicon-pencil"></button>
                      </a>

                    </td>';
              echo '</tr>';
            }
        }
      }

      if(isset($_POST['btnSearch'])){

        if($regionFilter == "None" && $specsFilter == "Open End" && $statusFilter == "Active"){

          $result = mysqli_query($con,"SELECT h1.hospitalMainName, h1.hospitalEffectivityDate, h1.hospitalEndContract,
                    h1.status, h1.hospitalMainID, h1.hospitalRegion, r1.regionName, r1.regionID FROM tblhospitalmaintenance h1
                    INNER JOIN tblregion r1 ON r1.regionID = h1.hospitalRegion
                    WHERE h1.status = 'Active' AND hospitalEndContract = 'Open End' ORDER by h1.hospitalMainName ASC");

          $num = mysqli_num_rows($result);

          if($num > 0){
              while ($row = mysqli_fetch_array($result)) {

                $name = $row['hospitalMainName'];
                $region = $row['regionName'];
                $entry = $row['hospitalEffectivityDate'];
                $end = $row['hospitalEndContract'];
                $convertEntry = date("M jS, Y", strtotime("$entry"));
                $status = $row['status'];
                $id = $row['hospitalMainID'];

                  echo '<tr>';
                  echo '<td>' . $name . '</td>';
                  echo '<td>' . $region . '</td>';
                  // echo '<td>' . $convertEntry . '</td>';
                  echo '<td>Open End</td>';
                  echo '<td>--</td>';
                  echo '<td>' . $status. '</td>';
                  echo '<td>
                          <a href="#" data-toggle="modal" data-target="#viewHospital'.$id.'" >
                                <button class="btn  btn-warning btn-xs">
                                View <span class="glyphicon glyphicon-eye-open"></button>
                          </a>

                          <a href="#" data-toggle="modal" data-target="#editHospital'.$id.'" >
                                <button class="btn  btn-primary btn-xs">
                                Edit <span class="glyphicon glyphicon-pencil"></button>
                          </a>


                        </td>';
                  echo '</tr>';
                }
            }
          }

          elseif($regionFilter == "None" && $specsFilter == "Specific" && $statusFilter == "Active"){

            $result = mysqli_query($con,"SELECT h1.hospitalMainName, h1.hospitalEffectivityDate, h1.hospitalEndContract,
                      h1.status, h1.hospitalMainID, h1.hospitalRegion, r1.regionName, r1.regionID FROM tblhospitalmaintenance h1
                      INNER JOIN tblregion r1 ON r1.regionID = h1.hospitalRegion
                      WHERE h1.status = 'Active' AND hospitalEndContract != 'Open End' ORDER by h1.hospitalMainName ASC");

            $num = mysqli_num_rows($result);

            if($num > 0){
                while ($row = mysqli_fetch_array($result)) {

                  $name = $row['hospitalMainName'];
                  $region = $row['regionName'];
                  $entry = $row['hospitalEffectivityDate'];
                  $end = $row['hospitalEndContract'];
                  // $convertEntry = date("M jS, Y", strtotime("$entry"));
                  $date = strtotime($end);
                  $convertEnd = date("M jS, Y", strtotime("$end"));
                  $diff = $date - time();
                  $years = floor($diff/(60 * 60 * 24 * 365));
                  $months = floor(($diff-$years*60*60*24*365)/(60 * 60 * 24 * 365 / 12));
                  $days = floor(($diff-$years*60*60*24*365-$months*60 * 60 * 24 * 365 / 12)/(60*60*24));
                  $status = $row['status'];
                  $id = $row['hospitalMainID'];

                    echo '<tr>';
                    echo '<td>' . $name . '</td>';
                    echo '<td>' . $region . '</td>';
                    // echo '<td>' . $convertEntry . '</td>';
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
                            <a href="#" data-toggle="modal" data-target="#viewHospital'.$id.'" >
                                  <button class="btn  btn-warning btn-xs">
                                  View <span class="glyphicon glyphicon-eye-open"></button>
                            </a>

                            <a href="#" data-toggle="modal" data-target="#editHospital'.$id.'" >
                                  <button class="btn  btn-primary btn-xs">
                                  Edit <span class="glyphicon glyphicon-pencil"></button>
                            </a>

                          </td>';
                    echo '</tr>';
                  }
              }
            }

            elseif($specsFilter == "Open End" && $statusFilter == "Active"){

              $result = mysqli_query($con,"SELECT h1.hospitalMainName, h1.hospitalEffectivityDate, h1.hospitalEndContract,
                        h1.status, h1.hospitalMainID, h1.hospitalRegion, r1.regionName, r1.regionID FROM tblhospitalmaintenance h1
                        INNER JOIN tblregion r1 ON r1.regionID = h1.hospitalRegion
                        WHERE h1.status = 'Active' AND hospitalEndContract = 'Open End'
                        AND r1.regionName = '$regionFilter' ORDER by h1.hospitalMainName ASC");

              $num = mysqli_num_rows($result);

              if($num > 0){
                  while ($row = mysqli_fetch_array($result)) {

                    $name = $row['hospitalMainName'];
                    $region = $row['regionName'];
                    $entry = $row['hospitalEffectivityDate'];
                    $end = $row['hospitalEndContract'];
                    $convertEntry = date("M jS, Y", strtotime("$entry"));
                    $status = $row['status'];
                    $id = $row['hospitalMainID'];

                      echo '<tr>';
                      echo '<td>' . $name . '</td>';
                      echo '<td>' . $region . '</td>';
                      // echo '<td>' . $convertEntry . '</td>';
                      echo '<td>Open End</td>';
                      echo '<td>--</td>';
                      echo '<td>' . $status. '</td>';
                      echo '<td>
                              <a href="#" data-toggle="modal" data-target="#viewHospital'.$id.'" >
                                    <button class="btn  btn-warning btn-xs">
                                    View <span class="glyphicon glyphicon-eye-open"></button>
                              </a>

                              <a href="#" data-toggle="modal" data-target="#editHospital'.$id.'" >
                                    <button class="btn  btn-primary btn-xs">
                                    Edit <span class="glyphicon glyphicon-pencil"></button>
                              </a>


                            </td>';
                      echo '</tr>';
                    }
                }
              }

              elseif($specsFilter == "Specific" && $statusFilter == "Active"){

                $result = mysqli_query($con,"SELECT h1.hospitalMainName, h1.hospitalEffectivityDate, h1.hospitalEndContract,
                          h1.status, h1.hospitalMainID, h1.hospitalRegion, r1.regionName, r1.regionID FROM tblhospitalmaintenance h1
                          INNER JOIN tblregion r1 ON r1.regionID = h1.hospitalRegion
                          WHERE h1.status = 'Active' AND hospitalEndContract != 'Open End'
                          AND r1.regionName = '$regionFilter' ORDER by h1.hospitalMainName ASC");

                $num = mysqli_num_rows($result);

                if($num > 0){
                    while ($row = mysqli_fetch_array($result)) {

                      $name = $row['hospitalMainName'];
                      $region = $row['regionName'];
                      $entry = $row['hospitalEffectivityDate'];
                      $end = $row['hospitalEndContract'];
                      // $convertEntry = date("M jS, Y", strtotime("$entry"));
                      $date = strtotime($end);
                      $convertEnd = date("M jS, Y", strtotime("$end"));
                      $diff = $date - time();
                      $years = floor($diff/(60 * 60 * 24 * 365));
                      $months = floor(($diff-$years*60*60*24*365)/(60 * 60 * 24 * 365 / 12));
                      $days = floor(($diff-$years*60*60*24*365-$months*60 * 60 * 24 * 365 / 12)/(60*60*24));
                      $status = $row['status'];
                      $id = $row['hospitalMainID'];

                        echo '<tr>';
                        echo '<td>' . $name . '</td>';
                        echo '<td>' . $region . '</td>';
                        // echo '<td>' . $convertEntry . '</td>';
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
                                <a href="#" data-toggle="modal" data-target="#viewHospital'.$id.'" >
                                      <button class="btn  btn-warning btn-xs">
                                      View <span class="glyphicon glyphicon-eye-open"></button>
                                </a>

                                <a href="#" data-toggle="modal" data-target="#editHospital'.$id.'" >
                                      <button class="btn  btn-primary btn-xs">
                                      Edit <span class="glyphicon glyphicon-pencil"></button>
                                </a>

                              </td>';
                        echo '</tr>';
                      }
                  }
                }

        elseif($specsFilter == "None" && $statusFilter == "Active"){

          $result = mysqli_query($con,"SELECT h1.hospitalMainName, h1.hospitalEffectivityDate, h1.hospitalEndContract,
                    h1.status, h1.hospitalMainID, h1.hospitalRegion, r1.regionName, r1.regionID FROM tblhospitalmaintenance h1
                    INNER JOIN tblregion r1 ON r1.regionID = h1.hospitalRegion
                    WHERE h1.status = 'Active' AND r1.regionName = '$regionFilter' ORDER by h1.hospitalMainName ASC");

          $num = mysqli_num_rows($result);

          if($num > 0){
              while ($row = mysqli_fetch_array($result)) {

                $name = $row['hospitalMainName'];
                $region = $row['regionName'];
                $entry = $row['hospitalEffectivityDate'];
                $end = $row['hospitalEndContract'];
                $date = strtotime($end);
                $convertEnd = date("M jS, Y", strtotime("$end"));
                $convertEntry = date("M jS, Y", strtotime("$entry"));
                $diff = $date - time();
                $years = floor($diff/(60 * 60 * 24 * 365));
                $months = floor(($diff-$years*60*60*24*365)/(60 * 60 * 24 * 365 / 12));
                $days = floor(($diff-$years*60*60*24*365-$months*60 * 60 * 24 * 365 / 12)/(60*60*24));

                $status = $row['status'];
                $id = $row['hospitalMainID'];

                  echo '<tr>';
                  echo '<td>' . $name . '</td>';
                  echo '<td>' . $region . '</td>';
                  // echo '<td>' . $convertEntry . '</td>';
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
                          <a href="#" data-toggle="modal" data-target="#viewHospital'.$id.'" >
                                <button class="btn  btn-warning btn-xs">
                                View <span class="glyphicon glyphicon-eye-open"></button>
                          </a>

                          <a href="#" data-toggle="modal" data-target="#editHospital'.$id.'" >
                                <button class="btn  btn-primary btn-xs">
                                Edit <span class="glyphicon glyphicon-pencil"></button>
                          </a>

                        </td>';
                  echo '</tr>';
                }
            }
          }


       elseif($regionFilter == "None" && $specsFilter == "None" && $statusFilter == "Inactive"){
         ?>
         <script>

         $("select[name=specs]").prop('disabled', true);

         </script>
         <?php
         $result = mysqli_query($con,"SELECT h1.hospitalMainName, h1.hospitalEffectivityDate, h1.hospitalDateTerminated,
                   h1.status, h1.hospitalMainID, h1.hospitalRegion, r1.regionName, r1.regionID FROM tblhospitalmaintenance h1
                   INNER JOIN tblregion r1 ON r1.regionID = h1.hospitalRegion
                   WHERE h1.status = 'Inactive' ORDER by h1.hospitalMainName ASC");

             while ($row = mysqli_fetch_array($result)) {

               $name = $row['hospitalMainName'];
               $region = $row['regionName'];
               $end = $row['hospitalDateTerminated'];
               $entry = $row['hospitalEffectivityDate'];
               $convertEntry = date("M jS, Y", strtotime("$entry"));
               $convertEnd = date("M jS, Y", strtotime("$end"));
               $status = $row['status'];
               $id = $row['hospitalMainID'];

                 echo '<tr>';
                 echo '<td>' . $name . '</td>';
                 echo '<td>' . $region . '</td>';
                 echo '<td>' . $convertEntry . '</td>';
                 echo '<td>' . $convertEnd . '</td>';
                 echo '<td>

                 <a href="#" data-toggle="modal" data-target="#openRenewHospital'.$id.'" >
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
      $result = mysqli_query($con,"SELECT h1.hospitalMainName, h1.hospitalEffectivityDate, h1.hospitalEndContract,
                h1.status, h1.hospitalMainID, h1.hospitalRegion, r1.regionName, r1.regionID FROM tblhospitalmaintenance h1
                INNER JOIN tblregion r1 ON r1.regionID = h1.hospitalRegion
                WHERE h1.status = 'Inactive' AND r1.regionName = '$regionFilter' ORDER by h1.hospitalMainName ASC");

          while ($row = mysqli_fetch_array($result)) {

            $name = $row['hospitalMainName'];
            $region = $row['regionName'];
            $end = $row['hospitalEndContract'];
            $entry = $row['hospitalEffectivityDate'];
            $convertEntry = date("M jS, Y", strtotime("$entry"));
            $convertEnd = date("M jS, Y", strtotime("$end"));
            $status = $row['status'];
            $id = $row['hospitalMainID'];

              echo '<tr>';
              echo '<td>' . $name . '</td>';
              echo '<td>' . $region . '</td>';
              echo '<td>' . $convertEntry . '</td>';
              echo '<td>' . $end . '</td>';
              echo '<td>

              <a href="#" data-toggle="modal" data-target="#openRenewHospital'.$id.'" >
                    <button class="btn  btn-success btn-xs">
                    Renew <span class="glyphicon glyphicon-list"></button>
              </a>

                    </td>';
              echo '</tr>';
  }

 }

 elseif($regionFilter == "None" && $specsFilter == "None" && $statusFilter == "Expired"){
   ?>
   <script>

   $("select[name=specs]").prop('disabled', true);

   </script>
   <?php
   $result = mysqli_query($con,"SELECT h1.hospitalMainName, h1.hospitalEffectivityDate, h1.hospitalEndContract,
             h1.status, h1.hospitalMainID, h1.hospitalRegion, r1.regionName, r1.regionID FROM tblhospitalmaintenance h1
             INNER JOIN tblregion r1 ON r1.regionID = h1.hospitalRegion
             WHERE h1.status = 'Expired' ORDER by h1.hospitalMainName ASC");

       while ($row = mysqli_fetch_array($result)) {

         $name = $row['hospitalMainName'];
         $region = $row['regionName'];
         $end = $row['hospitalEndContract'];
         $entry = $row['hospitalEffectivityDate'];
         $convertEntry = date("M jS, Y", strtotime("$entry"));
         $convertEnd = date("M jS, Y", strtotime("$end"));
         $status = $row['status'];
         $id = $row['hospitalMainID'];

           echo '<tr>';
           echo '<td>' . $name . '</td>';
           echo '<td>' . $region . '</td>';
           echo '<td>' . $convertEntry . '</td>';
           echo '<td>' . $convertEnd . '</td>';
           echo '<td>' . $status. '</td>';
           echo '<td>

           <a href="#" data-toggle="modal" data-target="#renewHospital'.$id.'" >
                 <button class="btn  btn-success btn-xs">
                 Renew <span class="glyphicon glyphicon-list"></button>
           </a>

                 </td>';
           echo '</tr>';
}

}

elseif($specsFilter == "None" && $statusFilter == "Expired"){
  ?>
  <script>

  $("select[name=specs]").prop('disabled', true);

  </script>
  <?php
  $result = mysqli_query($con,"SELECT h1.hospitalMainName, h1.hospitalEffectivityDate, h1.hospitalEndContract,
            h1.status, h1.hospitalMainID, h1.hospitalRegion, r1.regionName, r1.regionID FROM tblhospitalmaintenance h1
            INNER JOIN tblregion r1 ON r1.regionID = h1.hospitalRegion
            WHERE h1.status = 'Expired' AND r1.regionName = '$regionFilter' ORDER by h1.hospitalMainName ASC");

      while ($row = mysqli_fetch_array($result)) {

        $name = $row['hospitalMainName'];
        $region = $row['regionName'];
        $end = $row['hospitalEndContract'];
        $entry = $row['hospitalEffectivityDate'];
        $convertEntry = date("M jS, Y", strtotime("$entry"));
        $convertEnd = date("M jS, Y", strtotime("$end"));
        $status = $row['status'];
        $id = $row['hospitalMainID'];

          echo '<tr>';
          echo '<td>' . $name . '</td>';
          echo '<td>' . $region . '</td>';
          echo '<td>' . $convertEntry . '</td>';
          echo '<td>' . $convertEnd . '</td>';
          echo '<td>' . $status. '</td>';
          echo '<td>

          <a href="#" data-toggle="modal" data-target="#renewHospital'.$id.'" >
                <button class="btn  btn-success btn-xs">
                Renew <span class="glyphicon glyphicon-list"></button>
          </a>

                </td>';
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
