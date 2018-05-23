
<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
    <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Room Type</th>
        <th>Description</th>
        <th>Room Amount</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php


      if(isset($_POST['btnSearch'])){

        $room = $_POST['roomType'];

        $fetchRoom = mysqli_query($con, "SELECT * FROM tblroom WHERE roomType = '$room' AND status = 'Active'");

        while ($row = mysqli_fetch_array($fetchRoom)) {
          $roomType = $row['roomType'];
          $roomDesc = $row['roomDesc'];
          $roomAmount = $row['roomAmount'];
          $status = $row['status'];

          echo '<tr>';
          echo '<td>'.$roomType.'</td>';
          echo '<td>'.$roomDesc.'</td>';
          echo '<td>'.$roomAmount.'</td>';
          echo '<td>'.$status.'</td>';
          echo '</tr>';
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
