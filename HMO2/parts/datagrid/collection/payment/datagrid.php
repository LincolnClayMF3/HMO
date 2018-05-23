<?php

require 'parts/modals/collection/payment/payment.php';
require 'parts/modals/collection/payment/history.php';

?>

<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <table id="example1" class="table table-bordered  table-striped table-hover table-responsive" width="100%">
      <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Member Name</th>
        <th>Plan</th>
        <th>Plan Amount</th>
        <th>Remaining Balance</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $result = mysqli_query($con, "SELECT m1.memberTransID, m1.memberBalance, m1.memberTransName, m1.memberAnnualPayment, m1.memberFrequency, m1.status,
                m1.memberTransAmountToPay, m4.membershipName, p1.planName, m1.memberTransPlanAmount FROM tblmembertransaction m1
                INNER JOIN tblmemberplan m3 ON m3.intMemberID = m1.memberTransID
                INNER JOIN tblplan p1 ON p1.planID = m3.intPlanID
                INNER JOIN tblmembertype m2 ON m2.intMemberID = m1.memberTransID
                INNER JOIN tblmembershiptype m4 ON m4.membershipID = m2.intMembershipID WHERE m1.status = 'Active'");



      $num = mysqli_num_rows($result);

        if($num > 0){

            while ($row = mysqli_fetch_array($result)) {
              $id = $row['memberTransID'];
              $name = $row['memberTransName'];
              $plan = $row['planName'];
              $annual = $row['memberAnnualPayment'];
              $freq = $row['memberFrequency'];
              $type = $row['membershipName'];
              $balance =$row['memberBalance'];
              $amount = $row['memberTransPlanAmount'];
              $amountToPay  = $row['memberTransAmountToPay'];

              echo '<tr>';
              echo '<td>' . $name . '</td>';
              echo '<td>' . $plan . '</td>';
              echo '<td>Php ' . number_format($amount,2) . '</td>';
              echo '<td>Php ' . number_format($balance,2) . '</td>';
              echo '<td>
                      <a href="#" data-toggle="modal" data-target="#viewMemberRecord'.$id.'" >
                      <button class="btn  btn-success btn-xs">
                      Update <span class="glyphicon glyphicon-transfer"></button>
                      </a>

                      <a href="#" data-toggle="modal" data-target="#historyMemberRecord'.$id.'" >
                      <button class="btn  btn-warning btn-xs">
                      History <span class="glyphicon glyphicon-transfer"></button>
                      </a>
                    </td>';
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
    "lengthChange": true,
  }
);


</script>
