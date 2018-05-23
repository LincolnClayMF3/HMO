<?php

require 'parts/modals/pec/update.php';
require 'parts/modals/pec/delete.php';
require 'parts/modals/pec/retrieve.php';

?>

<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body" style="overflow-x: hidden">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
      <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Pre Existing Condition</th>
        <th>Description</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php

$result = mysqli_query($con,"SELECT * FROM tblpec
          WHERE status='$status' ORDER by pecName ASC");

$num = mysqli_num_rows($result);

if($num > 0){
    while ($row = mysqli_fetch_array($result)) {

      $name =  $row['pecName'];
      $desc =  $row['pecDesc'];
      $status = $row['status'];
      $id = $row['pecID'];

      if($status == "Active"){
        echo '<tr>';
        echo '<td>' . $name . '</td>';
        echo '<td>' . $desc . '</td>';
        echo '<td>' . $status . '</td>';
        echo '<td>
                <a href="#" data-toggle="modal" data-target="#updatePEC'.$id.'" >
                      <button class="btn  btn-primary btn-xs">
                      Edit <span class="glyphicon glyphicon-pencil"></button>
                </a>

                <a href="#" data-toggle="modal" data-target="#deletePEC'.$id.'" >
                      <button class="btn  btn-danger btn-xs">
                      Delete <span class="glyphicon glyphicon-remove"></button>
                </a>

              </td>';
        echo '</tr>';
      }
    }
  }

    if(isset($_POST['btnSearch'])){

     $status = $_POST['filter'];

     if($status == "Inactive"){

       $result = mysqli_query($con,"SELECT * FROM tblpec WHERE status='Inactive'
                 AND pecName LIKE '%$search%' ORDER by pecName ASC");

           while ($row = mysqli_fetch_array($result)) {

             $name =  $row['pecName'];
             $desc =  $row['pecDesc'];
             $status = $row['status'];
             $id = $row['pecID'];

             if($status == "Inactive"){
               echo '<tr>';
               echo '<td>' . $name . '</td>';
               echo '<td>' . $desc . '</td>';
               echo '<td>' . $status . '</td>';
               echo '<td>
                       <a href="#" data-toggle="modal" data-target="#retrievePEC'.$id.'" >
                             <button class="btn btn-warning btn-xs">
                             Retrieve <span class="glyphicon glyphicon-download"></button>
                       </a>
                     </td>';
               echo '</tr>';
     }
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
    "lengthChange": true
  }
);

</script>
