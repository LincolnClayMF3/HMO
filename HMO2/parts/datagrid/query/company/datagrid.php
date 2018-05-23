
<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
    <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Company Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Status</th>
        <th>Contract Specification</th>
      </tr>
    </thead>
    <tbody>
      <?php

      if($specs == "None"){

        $fetchCategory = mysqli_query($con, "SELECT * FROM tblcompanymaintenance
                         WHERE status = 'Active' ORDER BY companyMainName ASC");

        while ($row = mysqli_fetch_array($fetchCategory)) {

          $companyName = $row['companyMainName'];
          $companyAddress = $row['companyMainAddress'];
          $companyEmail = $row['companyMainEmail'];
          $companyStatus = $row['status'];
          $companyContract = $row['companyEndContract'];

          echo '<tr>';
          echo '<td>'.$companyName.'</td>';
          echo '<td>'.$companyAddress.'</td>';
          echo '<td>'.$companyEmail.'</td>';
          echo '<td>'.$companyStatus.'</td>';
          if($companyContract == "Open Ended Contract"){
            echo '<td>Open Ended</td>';
          }
          else {
            echo '<td>Non-Permanent</td>';
          }
          echo '</tr>';
        }
      }

      if(isset($_POST['btnSearch'])){

        if($specs == "Open Ended"){

          $fetchCategory = mysqli_query($con, "SELECT * FROM tblcompanymaintenance
                           WHERE companyEndContract = 'Open Ended Contract' AND status = 'Active' ORDER BY companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCategory)) {

            $companyName = $row['companyMainName'];
            $companyAddress = $row['companyMainAddress'];
            $companyEmail = $row['companyMainEmail'];
            $companyStatus = $row['status'];
            $companyContract = $row['companyEndContract'];

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$companyAddress.'</td>';
            echo '<td>'.$companyEmail.'</td>';
            echo '<td>'.$companyStatus.'</td>';
            echo '<td>'.$companyContract.'</td>';
            echo '</tr>';
          }
        }

        elseif ($specs == "Non Permanent"){

          $fetchCategory = mysqli_query($con, "SELECT * FROM tblcompanymaintenance
                           WHERE companyEndContract != 'Open Ended Contract' AND status = 'Active' ORDER BY companyMainName ASC");

          while ($row = mysqli_fetch_array($fetchCategory)) {

            $companyName = $row['companyMainName'];
            $companyAddress = $row['companyMainAddress'];
            $companyEmail = $row['companyMainEmail'];
            $companyStatus = $row['status'];
            $companyContract = $row['companyEndContract'];

            echo '<tr>';
            echo '<td>'.$companyName.'</td>';
            echo '<td>'.$companyAddress.'</td>';
            echo '<td>'.$companyEmail.'</td>';
            echo '<td>'.$companyStatus.'</td>';
            echo '<td>Non-Permanent</td>';
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
