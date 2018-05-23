<?php

require 'parts/modals/membership/update.php';
require 'parts/modals/membership/delete.php';
require 'parts/modals/membership/retrieve.php';

?>

<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body" style="overflow-x: hidden">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
      <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Membership Type Name</th>
        <th>Additional</br>Plan Mark-Up</br>Interest</th>
        <th>Description</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php

$result = mysqli_query($con,"SELECT * FROM tblmembershiptype WHERE status='$status'
          ORDER by membershipName ASC");

    $num = mysqli_num_rows($result);

if($num > 0 ){
    while ($row = mysqli_fetch_array($result)) {

        $name = $row['membershipName'];
        $percentage = $row['membershipPercentage'];
        $desc = $row['membershipDesc'];
        $status = $row['status'];
        $id = $row['membershipID'];

        if($status == "Active"){
        echo '<tr>';
        echo '<td>' . $name . '</td>';
        echo '<td>' . $percentage . '%</td>';
        echo '<td>' . $desc . '</td>';
        echo '<td>' . $status . '</td>';
        echo '<td>
              <a href="#" data-toggle="modal" data-target="#updateMembership'.$id.'" >
                    <button class="btn  btn-primary btn-xs">
                    Edit <span class="glyphicon glyphicon-pencil"></button>
              </a>

              <a href="#" data-toggle="modal" data-target="#deleteMembership'.$id.'" >
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

       $result = mysqli_query($con,"SELECT * FROM tblmembershiptype WHERE status='Inactive' ORDER by membershipName ASC");

           while ($row = mysqli_fetch_array($result)) {

             $name = $row['membershipName'];
             $percentage = $row['membershipPercentage'];
             $desc = $row['membershipDesc'];
             $status = $row['status'];
             $id = $row['membershipID'];

             if($status == "Inactive"){
               echo '<tr>';
               echo '<td>' . $name . '</td>';
               echo '<td>' . $percentage . '%</td>';
               echo '<td>' . $desc . '</td>';
               echo '<td>' . $status . '</td>';
               echo '<td>
                       <a href="#" data-toggle="modal" data-target="#retrieveMembership'.$id.'" >
                             <button class="btn  btn-warning btn-xs">
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
