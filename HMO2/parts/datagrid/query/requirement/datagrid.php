
<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
    <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Requirement Name</th>
        <th>Requirement Type</th>
        <th>Description</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php

      if($reqType == "None"){

        $fetchRequirement = mysqli_query($con, "SELECT * FROM tblrequirement WHERE status = 'Active' ORDER By requirementName ASC");

        while ($row = mysqli_fetch_array($fetchRequirement)) {

          $requirementName = $row['requirementName'];
          $requirementType = $row['requirementType'];
          $requirementDesc = $row['requirementDesc'];
          $requirementStatus = $row['status'];

          echo '<tr>';
          echo '<td>'.$requirementName.'</td>';
          echo '<td>'.$requirementType.'</td>';
          echo '<td>'.$requirementDesc.'</td>';
          echo '<td>'.$requirementStatus.'</td>';
          echo '</tr>';
        }
      }

      if(isset($_POST['btnSearch'])){

        if($reqType == "Application"){

          $fetchRequirement = mysqli_query($con, "SELECT * FROM tblrequirement WHERE status = 'Active'
                              AND requirementType = 'Application' ORDER By requirementName ASC");

          while ($row = mysqli_fetch_array($fetchRequirement)) {

            $requirementName = $row['requirementName'];
            $requirementType = $row['requirementType'];
            $requirementDesc = $row['requirementDesc'];
            $requirementStatus = $row['status'];

            echo '<tr>';
            echo '<td>'.$requirementName.'</td>';
            echo '<td>'.$requirementType.'</td>';
            echo '<td>'.$requirementDesc.'</td>';
            echo '<td>'.$requirementStatus.'</td>';
            echo '</tr>';
          }
        }

        elseif ($reqType == "Doctor"){

          $fetchRequirement = mysqli_query($con, "SELECT * FROM tblrequirement WHERE status = 'Active'
                              AND requirementType = 'Doctor Claim' ORDER By requirementName ASC");

          while ($row = mysqli_fetch_array($fetchRequirement)) {

            $requirementName = $row['requirementName'];
            $requirementType = $row['requirementType'];
            $requirementDesc = $row['requirementDesc'];
            $requirementStatus = $row['status'];

            echo '<tr>';
            echo '<td>'.$requirementName.'</td>';
            echo '<td>'.$requirementType.'</td>';
            echo '<td>'.$requirementDesc.'</td>';
            echo '<td>'.$requirementStatus.'</td>';
            echo '</tr>';
          }
        }

        elseif ($reqType == "Patient"){

          $fetchRequirement = mysqli_query($con, "SELECT * FROM tblrequirement WHERE status = 'Active'
                              AND requirementType = 'Patient Claim' ORDER By requirementName ASC");

          while ($row = mysqli_fetch_array($fetchRequirement)) {

            $requirementName = $row['requirementName'];
            $requirementType = $row['requirementType'];
            $requirementDesc = $row['requirementDesc'];
            $requirementStatus = $row['status'];

            echo '<tr>';
            echo '<td>'.$requirementName.'</td>';
            echo '<td>'.$requirementType.'</td>';
            echo '<td>'.$requirementDesc.'</td>';
            echo '<td>'.$requirementStatus.'</td>';
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
