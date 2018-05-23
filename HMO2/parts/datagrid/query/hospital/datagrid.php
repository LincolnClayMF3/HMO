
<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
    <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Hospital Name</th>
        <th>Region</th>
        <th>Address</th>
        <th>Hospital Coordinator</th>
        <th>Email</th>
        <th>Status</th>
        <th>Contract Specification</th>
      </tr>
    </thead>
    <tbody>
      <?php

      if($region == "None" && $specs == "None"){

        $allHospital = mysqli_query($con, "SELECT h1.hospitalMainName, h1.hospitalMainAddress, h1.hospitalEndContract,
                  h1.status, h1.hospitalMainID, h1.hospitalRegion, r1.regionName, r1.regionID,
                  h1.hospitalMainCoordinator, h1.hospitalMainEmail FROM tblhospitalmaintenance h1
                  INNER JOIN tblregion r1 ON r1.regionID = h1.hospitalRegion
                  WHERE h1.status = 'Active' ORDER by h1.hospitalMainName ASC");

        while ($row = mysqli_fetch_array($allHospital)) {
          $hospitalName = $row['hospitalMainName'];
          $hospitalRegion = $row['regionName'];
          $hospitalAddress = $row['hospitalMainAddress'];
          $hospitalCoordinator = $row['hospitalMainCoordinator'];
          $hospitalEmail = $row['hospitalMainEmail'];
          $hospitalStatus = $row['status'];
          $hospitalContract = $row['hospitalEndContract'];

          echo '<tr>';
          echo '<td>'.$hospitalName.'</td>';
          echo '<td>'.$hospitalRegion.'</td>';
          echo '<td>'.$hospitalAddress.'</td>';
          echo '<td>'.$hospitalCoordinator.'</td>';
          echo '<td>'.$hospitalEmail.'</td>';
          echo '<td>'.$hospitalStatus.'</td>';
          if($hospitalContract == "Open Ended Contract"){
            echo '<td>Open Ended</td>';
          }
          else {
            echo '<td>Non-Permanent</td>';
          }
          echo '</tr>';
        }
  }

    if(isset($_POST['btnSearch'])){

      $region = $_POST['region'];

      if($region == "None" && $specs == "Open Ended") {

        $allHospital = mysqli_query($con, "SELECT h1.hospitalMainName, h1.hospitalMainAddress, h1.hospitalEndContract,
          h1.status, h1.hospitalMainID, h1.hospitalRegion, r1.regionName, r1.regionID,
          h1.hospitalMainCoordinator, h1.hospitalMainEmail FROM tblhospitalmaintenance h1
          INNER JOIN tblregion r1 ON r1.regionID = h1.hospitalRegion
          WHERE h1.hospitalEndContract = 'Open Ended Contract'
          AND h1.status = 'Active' ORDER by h1.hospitalMainName ASC");

          while ($row = mysqli_fetch_array($allHospital)) {
            $hospitalName = $row['hospitalMainName'];
            $hospitalRegion = $row['regionName'];
            $hospitalAddress = $row['hospitalMainAddress'];
            $hospitalCoordinator = $row['hospitalMainCoordinator'];
            $hospitalEmail = $row['hospitalMainEmail'];
            $hospitalStatus = $row['status'];
            $hospitalContract = $row['hospitalEndContract'];

            echo '<tr>';
            echo '<td>'.$hospitalName.'</td>';
            echo '<td>'.$hospitalRegion.'</td>';
            echo '<td>'.$hospitalAddress.'</td>';
            echo '<td>'.$hospitalCoordinator.'</td>';
            echo '<td>'.$hospitalEmail.'</td>';
            echo '<td>'.$hospitalStatus.'</td>';
            echo '<td>Open Ended</td>';
            echo '</tr>';
          }
        }

        elseif ($region == "None" && $specs == "Non Permanent") {

          $allHospital = mysqli_query($con, "SELECT h1.hospitalMainName, h1.hospitalMainAddress, h1.hospitalEndContract,
            h1.status, h1.hospitalMainID, h1.hospitalRegion, r1.regionName, r1.regionID,
            h1.hospitalMainCoordinator, h1.hospitalMainEmail FROM tblhospitalmaintenance h1
            INNER JOIN tblregion r1 ON r1.regionID = h1.hospitalRegion
            WHERE h1.hospitalEndContract != 'Open Ended Contract'
            AND h1.status = 'Active' ORDER by h1.hospitalMainName ASC");

            while ($row = mysqli_fetch_array($allHospital)) {
              $hospitalName = $row['hospitalMainName'];
              $hospitalRegion = $row['regionName'];
              $hospitalAddress = $row['hospitalMainAddress'];
              $hospitalCoordinator = $row['hospitalMainCoordinator'];
              $hospitalEmail = $row['hospitalMainEmail'];
              $hospitalStatus = $row['status'];
              $hospitalContract = $row['hospitalEndContract'];

              echo '<tr>';
              echo '<td>'.$hospitalName.'</td>';
              echo '<td>'.$hospitalRegion.'</td>';
              echo '<td>'.$hospitalAddress.'</td>';
              echo '<td>'.$hospitalCoordinator.'</td>';
              echo '<td>'.$hospitalEmail.'</td>';
              echo '<td>'.$hospitalStatus.'</td>';
              echo '<td>Non Permanent</td>';
              echo '</tr>';
            }
          }

    elseif ($specs == "None"){

      $allHospital = mysqli_query($con, "SELECT h1.hospitalMainName, h1.hospitalMainAddress, h1.hospitalEndContract,
                h1.status, h1.hospitalMainID, h1.hospitalRegion, r1.regionName, r1.regionID,
                h1.hospitalMainCoordinator, h1.hospitalMainEmail FROM tblhospitalmaintenance h1
                INNER JOIN tblregion r1 ON r1.regionID = h1.hospitalRegion
                WHERE r1.regionName = '$region' AND h1.status = 'Active' ORDER by h1.hospitalMainName ASC");

      while ($row = mysqli_fetch_array($allHospital)) {
        $hospitalName = $row['hospitalMainName'];
        $hospitalRegion = $row['regionName'];
        $hospitalAddress = $row['hospitalMainAddress'];
        $hospitalCoordinator = $row['hospitalMainCoordinator'];
        $hospitalEmail = $row['hospitalMainEmail'];
        $hospitalStatus = $row['status'];
        $hospitalContract = $row['hospitalEndContract'];

        echo '<tr>';
        echo '<td>'.$hospitalName.'</td>';
        echo '<td>'.$hospitalRegion.'</td>';
        echo '<td>'.$hospitalAddress.'</td>';
        echo '<td>'.$hospitalCoordinator.'</td>';
        echo '<td>'.$hospitalEmail.'</td>';
        echo '<td>'.$hospitalStatus.'</td>';
        if($hospitalContract == "Open Ended Contract"){
          echo '<td>Open Ended</td>';
        }
        else {
          echo '<td>Non-Permanent</td>';
        }
        echo '</tr>';
      }
    }

    elseif ($specs == "Open Ended") {
      $allHospital = mysqli_query($con, "SELECT h1.hospitalMainName, h1.hospitalMainAddress, h1.hospitalEndContract,
                h1.status, h1.hospitalMainID, h1.hospitalRegion, r1.regionName, r1.regionID,
                h1.hospitalMainCoordinator, h1.hospitalMainEmail FROM tblhospitalmaintenance h1
                INNER JOIN tblregion r1 ON r1.regionID = h1.hospitalRegion
                WHERE r1.regionName = '$region' AND h1.hospitalEndContract = 'Open Ended Contract'
                AND h1.status = 'Active' ORDER by h1.hospitalMainName ASC");

      while ($row = mysqli_fetch_array($allHospital)) {
        $hospitalName = $row['hospitalMainName'];
        $hospitalRegion = $row['regionName'];
        $hospitalAddress = $row['hospitalMainAddress'];
        $hospitalCoordinator = $row['hospitalMainCoordinator'];
        $hospitalEmail = $row['hospitalMainEmail'];
        $hospitalStatus = $row['status'];
        $hospitalContract = $row['hospitalEndContract'];

        echo '<tr>';
        echo '<td>'.$hospitalName.'</td>';
        echo '<td>'.$hospitalRegion.'</td>';
        echo '<td>'.$hospitalAddress.'</td>';
        echo '<td>'.$hospitalCoordinator.'</td>';
        echo '<td>'.$hospitalEmail.'</td>';
        echo '<td>'.$hospitalStatus.'</td>';
        echo '<td>Open Ended</td>';
        echo '</tr>';
      }
    }

    elseif ($specs == "Non Permanent") {
      $allHospital = mysqli_query($con, "SELECT h1.hospitalMainName, h1.hospitalMainAddress, h1.hospitalEndContract,
                h1.status, h1.hospitalMainID, h1.hospitalRegion, r1.regionName, r1.regionID,
                h1.hospitalMainCoordinator, h1.hospitalMainEmail FROM tblhospitalmaintenance h1
                INNER JOIN tblregion r1 ON r1.regionID = h1.hospitalRegion
                WHERE r1.regionName = '$region' AND h1.hospitalEndContract != 'Open Ended Contract'
                AND h1.status = 'Active' ORDER by h1.hospitalMainName ASC");

      while ($row = mysqli_fetch_array($allHospital)) {
        $hospitalName = $row['hospitalMainName'];
        $hospitalRegion = $row['regionName'];
        $hospitalAddress = $row['hospitalMainAddress'];
        $hospitalCoordinator = $row['hospitalMainCoordinator'];
        $hospitalEmail = $row['hospitalMainEmail'];
        $hospitalStatus = $row['status'];
        $hospitalContract = $row['hospitalEndContract'];

        echo '<tr>';
        echo '<td>'.$hospitalName.'</td>';
        echo '<td>'.$hospitalRegion.'</td>';
        echo '<td>'.$hospitalAddress.'</td>';
        echo '<td>'.$hospitalCoordinator.'</td>';
        echo '<td>'.$hospitalEmail.'</td>';
        echo '<td>'.$hospitalStatus.'</td>';
        echo '<td>Non Permanent</td>';
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

$("#example1").DataTable(
  {
    "ordering": true
  }
);

</script>
