<?php

require 'parts/modals/plan/view.php';
require 'parts/modals/plan/update.php';
require 'parts/modals/plan/delete.php';
require 'parts/modals/plan/retrieve.php';

?>

<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body" style="overflow-x: hidden">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" style="width: 100%">
      <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Plan Name</th>
        <th>Applicable For</th>
        <th>Service(s) Included</th>
        <th>Plan Amount Limit</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $result = mysqli_query($con,"SELECT p1.planID, p1.planName, l1.planAmountLimit,
                                  p1.status FROM tblplan p1
                                  INNER JOIN tblplanamountlimit p4 ON p1.planID=p4.intPlanID
                                  INNER JOIN tblplanlimit l1 ON p4.intPlanLimitID=l1.planLimitID
                                  WHERE p1.status = '$status' ORDER by p1.planName ASC");

      $num = mysqli_num_rows($result);

      if($num > 0){
          while ($row = mysqli_fetch_array($result)) {

            $name = $row['planName'];
            $limit = $row['planAmountLimit'];
            $status = $row['status'];
            $id = $row['planID'];

            $arrayStandard = array();
            $result2 = mysqli_query($con, "SELECT s1.standardName FROM tblstandard s1
                       INNER JOIN tblplanstandard s2 ON s2.intStandardID=s1.standardID WHERE s2.intPlanID=$id");

            while ($row=mysqli_fetch_array($result2)) {
              $arrayStandard[]=$row['standardName'];
            }

            $arrayMembership = array();
            $result3 = mysqli_query($con, "SELECT m1.membershipName FROM tblmembershiptype m1
                       INNER JOIN tblplantype m2 ON m2.intTypeID = m1.membershipID WHERE m2.intPlanID=$id");

            while ($row=mysqli_fetch_array($result3)) {
              $arrayMembership[]=$row['membershipName'];
            }

            if($status == "Active"){
              echo '<tr>';
              echo '<td>' . $name . '</td>';
              echo '<td>';
              foreach ($arrayMembership as $key) {
                echo "$key </br>";
              }
              echo '</td>';
              echo '<td>';
              foreach ($arrayStandard as $key2) {
                echo "$key2 </br>";
              }
              echo '</td>';
              echo '<td>Php ' .number_format($limit,2). '</td>';
              echo '<td>' . $status . '</td>';
              echo '<td>
                      <a href="#" data-toggle="modal" data-target="#viewPlan'.$id.'" >
                            <button class="btn  btn-warning btn-xs">
                            View <span class="glyphicon glyphicon-eye-open"></button>
                      </a>

                      <a href="#" data-toggle="modal" data-target="#updatePlan'.$id.'" >
                            <button class="btn  btn-primary btn-xs">
                            Edit <span class="glyphicon glyphicon-pencil"></button>
                      </a>

                      <a href="#" data-toggle="modal" data-target="#deletePlan'.$id.'" >
                            <button class="btn  btn-danger btn-xs">
                            Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-remove"></button>
                      </a>

                    </td>';
              echo '</tr>';
            }
        }
      }

    if(isset($_POST['btnSearch'])){

     $status = $_POST['filter'];

     if($status == "Inactive"){

       $result = mysqli_query($con,"SELECT p1.planID, p1.planName, l1.planAmountLimit, r1.roomName, p1.status FROM tblplan p1
                                   INNER JOIN tblplanroom p3 ON p1.planID=p3.intPlanID
                                   INNER JOIN tblroom r1 ON p3.intRoomID=r1.roomID
                                   INNER JOIN tblplanamountlimit p4 ON p1.planID=p4.intPlanID
                                   INNER JOIN tblplanlimit l1 ON p4.intPlanLimitID=l1.planLimitID WHERE p1.status = 'Inactive'
                                   ORDER by p1.planName ASC");

           while ($row = mysqli_fetch_array($result)) {

             $name = $row['planName'];
             $limit = $row['planAmountLimit'];
             $status = $row['status'];
             $id = $row['planID'];

             $arrayService = array();
             $result2 = mysqli_query($con, "SELECT s1.standardName FROM tblstandard s1
                        INNER JOIN tblplanstandard s2 ON s2.intStandardID=s1.standardID WHERE s2.intPlanID=$id");

             while ($row=mysqli_fetch_array($result2)) {
               $arrayService[]=$row['standardName'];
             }

             $arrayMembership = array();
             $result3 = mysqli_query($con, "SELECT m1.membershipName FROM tblmembershiptype m1
                        INNER JOIN tblplantype m2 ON m2.intTypeID = m1.membershipID WHERE m2.intPlanID=$id");

             while ($row=mysqli_fetch_array($result3)) {
               $arrayMembership[]=$row['membershipName'];
             }

           if($status == "Inactive"){
             echo '<tr>';
             echo '<td>' . $name . '</td>';
             echo '<td>';
             foreach ($arrayMembership as $key) {
               echo "$key </br>";
             }
             echo '</td>';
             echo '<td>';
             foreach ($arrayStandard as $key2) {
               echo "$key2 </br>";
             }
             echo '</td>';
             echo '<td>' .number_format($limit,2). '</td>';
             echo '<td>' . $status . '</td>';
               echo '<td>
                       <a href="#" data-toggle="modal" data-target="#retrievePlan'.$id.'" >
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

$(function () {
  $("#example1").DataTable({
    "lengthChange": false
  });
});

</script>
