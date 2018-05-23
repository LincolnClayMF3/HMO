<?php

require 'parts/modals/contract/member/update.php';
// require 'parts/modals/contract/member/delete.php';
require 'parts/modals/contract/member/retrieve.php';
require 'parts/modals/contract/member/view.php';

?>

<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
      <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Member Name</th>
        <th>Preferred Plan</th>
        <th>Entry Date</th>
        <th>End of Contract</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $result = mysqli_query($con,"SELECT m1.memberTransName,m1.memberEffectivityDate, p1.planName, m1.status,
                            m1.memberTransID, m1.memberEndContract, m1.memberFrequency FROM tblmembertransaction m1
                            INNER JOIN tblmemberplan m5 ON m1.memberTransID=m5.intMemberID
                            INNER JOIN tblplan p1 ON m5.intPlanID=p1.planID WHERE m1.status = '$status' ORDER by m1.memberTransName ASC");

      $num = mysqli_num_rows($result);

        if($num > 0){
          while ($row = mysqli_fetch_array($result)) {

            $id = $row['memberTransID'];
            $name = $row['memberTransName'];
            $entry = $row['memberEffectivityDate'];
            $end = $row['memberEndContract'];
            $convertEnd = date("M jS, Y", strtotime("$end"));
            $convertEntry = date("M jS, Y", strtotime("$entry"));
            $frequency = $row['memberFrequency'];

            $plan = $row['planName'];
            $status = $row['status'];

            if($status == "Active"){

              echo '<tr>';
              echo '<td>' . $name . '</td>';
              echo '<td>' . $plan . '</td>';
              echo '<td>' . $convertEntry . '</td>';
              if($end == "Open Ended Contract"){
                echo '<td>' . $end . '</td>';
              }
              else {
                echo '<td>' . $convertEnd . '</td>';
              }
              echo '<td>' . $status . '</td>';
              echo '<td>

                    <a href="#" data-toggle="modal" data-target="#viewMember'.$id.'" >
                          <button class="btn  btn-warning btn-xs">
                          View <span class="glyphicon glyphicon-eye-open"></button>
                    </a>

                    <a href="#" data-toggle="modal" data-target="#updateMember'.$id.'" >
                          <button class="btn  btn-primary btn-xs">
                          Edit <span class="glyphicon glyphicon-transfer"></button>
                    </a>

                    </td>';
              echo '</tr>';

    }
  }
}


    if(isset($_POST['btnSearch'])){

     $status = $_POST['filter'];

     if($status == "Inactive"){

       $result = mysqli_query($con,"SELECT m1.memberTransName,m1.memberEffectivityDate, p1.planName,
                                    m1.memberTransID,m1.memberEndContract,m1.status FROM tblmembertransaction m1
                             INNER JOIN tblmemberplan m5 ON m1.memberTransID=m5.intMemberID
                             INNER JOIN tblplan p1 ON m5.intPlanID=p1.planID WHERE m1.status = 'Inactive'
                             AND m1.memberTransName LIKE '%$search%' ORDER by m1.memberTransName ASC");

           while ($row = mysqli_fetch_array($result)) {

             $id = $row['memberTransID'];
             $name = $row['memberTransName'];
             $effectivity = $row['memberEffectivityDate'];
             $end = $row['memberEndContract'];
             $plan = $row['planName'];
             $status = $row['status'];

             if($status == "Inactive"){
               echo '<tr>';
               echo '<td>' . $name . '</td>';
               echo '<td>' . $plan . '</td>';
               echo '<td>' . $effectivity . '</td>';
               echo '<td>' . $end . '</td>';
               echo '<td>' . $status . '</td>';
               echo '<td>
                       <a href="#" data-toggle="modal" data-target="#retrieveMember'.$id.'" >
                             <button class="btn  btn-warning btn-sm">Retrieve</button>
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
    "lengthChange": false,
  }
);


</script>
