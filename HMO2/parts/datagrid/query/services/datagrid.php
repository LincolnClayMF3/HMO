
<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
    <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Service Name</th>
        <th>Coverage(s)</th>
        <th>Service Type</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php

      if($type == "None"){

        $allStandard = mysqli_query($con, "SELECT * FROM tblstandard
                  WHERE status = 'Active'");
                  while ($row = mysqli_fetch_array($allStandard)) {
                    $standardName = $row['standardName'];
                    $standardID = $row['standardID'];
                    $standardStatus = $row['status'];

              $allCoverage = mysqli_query($con, "SELECT c1.coverageName, c1.status FROM tblcoverage c1
                         INNER JOIN tblStandardCoverage s1 ON s1.intCoverageID=c1.coverageID WHERE s1.intStandardID=$standardID
                         AND c1.status = 'Active'");

              $arrayStandard = array();

              while ($row=mysqli_fetch_array($allCoverage)) {
                $arrayStandard[]=$row['coverageName'];
              }


          echo '<tr>';
          echo '<td>' . $standardName . '</td>';
          echo '<td>';
          foreach ($arrayStandard as $key) {
            echo "$key </br>";
          }
          echo '</td>';
          echo '<td>Standard</td>';
          echo '<td>'.$standardStatus.'</td>';
          echo '</tr>';
        }

        $allAdditional = mysqli_query($con, "SELECT * FROM tbladditional
                  WHERE status = 'Active'");

        while ($row = mysqli_fetch_array($allAdditional)) {

          $additionalID = $row['additionalID'];
          $additionalName =  $row['additionalName'];
          $additionalStatus = $row['status'];


          $allCoverage = mysqli_query($con, "SELECT c1.coverageName FROM tblcoverage c1
                     INNER JOIN tbladditionalcoverage a1 ON a1.intCoverageID=c1.coverageID WHERE a1.intAdditionalID=$additionalID");

          $arrayAdditional = array();

          while ($row=mysqli_fetch_array($allCoverage)) {
            $arrayAdditional[]=$row['coverageName'];
          }


            echo '<tr>';
            echo '<td>' . $additionalName . '</td><td>';
            foreach ($arrayAdditional as $key) {
              echo "$key </br>";
            }
            echo '</td>';
            echo '<td>Additional</td>';
            echo '<td>' . $additionalStatus . '</td>';
            echo '</tr>';

      }
  }

    if(isset($_POST['btnSearch'])){

      if($type == "Standard"){

        $allStandard = mysqli_query($con, "SELECT * FROM tblstandard
                  WHERE status = 'Active' ORDER By standardName ASC");
                  while ($row = mysqli_fetch_array($allStandard)) {
                    $standardName = $row['standardName'];
                    $standardID = $row['standardID'];
                    $standardStatus = $row['status'];

              $allCoverage = mysqli_query($con, "SELECT c1.coverageName, c1.status FROM tblcoverage c1
                         INNER JOIN tblStandardCoverage s1 ON s1.intCoverageID=c1.coverageID WHERE s1.intStandardID=$standardID
                         AND c1.status = 'Active'");

              $arrayStandard = array();

              while ($row=mysqli_fetch_array($allCoverage)) {
                $arrayStandard[]=$row['coverageName'];
              }


          echo '<tr>';
          echo '<td>' . $standardName . '</td>';
          echo '<td>';
          foreach ($arrayStandard as $key) {
            echo "$key </br>";
          }
          echo '</td>';
          echo '<td>Standard</td>';
          echo '<td>'.$standardStatus.'</td>';
          echo '</tr>';
        }
      }

      elseif ($type == "Additional"){

        $allAdditional = mysqli_query($con, "SELECT * FROM tbladditional
                  WHERE status = 'Active' ORDER By additionalName ASC");

        while ($row = mysqli_fetch_array($allAdditional)) {

          $additionalID = $row['additionalID'];
          $additionalName =  $row['additionalName'];
          $additionalStatus = $row['status'];


          $allCoverage = mysqli_query($con, "SELECT c1.coverageName FROM tblcoverage c1
                     INNER JOIN tbladditionalcoverage a1 ON a1.intCoverageID=c1.coverageID WHERE a1.intAdditionalID=$additionalID");

          $arrayAdditional = array();

          while ($row=mysqli_fetch_array($allCoverage)) {
            $arrayAdditional[]=$row['coverageName'];
          }


            echo '<tr>';
            echo '<td>' . $additionalName . '</td><td>';
            foreach ($arrayAdditional as $key) {
              echo "$key </br>";
            }
            echo '</td>';
            echo '<td>Additional</td>';
            echo '<td>' . $additionalStatus . '</td>';
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
