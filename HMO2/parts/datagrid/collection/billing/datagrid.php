<?php

require 'parts/modals/collection/billing/bill.php';

?>

<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <table id="example1" class="table table-bordered  table-striped table-hover table-responsive" width="100%">
      <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Member ID</th>
        <th>Member Name</th>
        <th>Plan</th>
        <th>Total Plan Amount</th>
        <th>Payment Frequency</th>
        <th>Amount To be Paid</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $result = mysqli_query($con, "SELECT m1.memberTransID, m1.memberTransName, m1.memberTransAmountToPay, m1.memberFrequency,
                p1.planName, m1.memberTransPlanAmount, m1.memberEffectivityDate, m1.status FROM tblmembertransaction m1
                INNER JOIN tblmemberplan m3 ON m3.intMemberID = m1.memberTransID
                INNER JOIN tblplan p1 ON p1.planID = m3.intPlanID WHERE m1.status = 'Active'");

      $num = mysqli_num_rows($result);

        if($num > 0){
          while ($row = mysqli_fetch_array($result)) {

            $id = $row['memberTransID'];
            $name = $row['memberTransName'];
            $planAmount = $row['memberTransPlanAmount'];
            $plan = $row['planName'];
            $freq = $row['memberFrequency'];
            $amount = $row['memberTransAmountToPay'];
            $entry = $row['memberEffectivityDate'];

              echo '<tr>';
              echo '<td>' . $entry.'-'.$id . '</td>';
              echo '<td>' . $name . '</td>';
              echo '<td>' . $plan . '</td>';
              echo '<td>Php ' . number_format($planAmount,2) . '</td>';
              echo '<td>' . $freq . '</td>';
              echo '<td>Php ' . number_format($amount,2) . '</td>';
              echo '<td>
                      <a href="#" data-toggle="modal" data-target="#billMember'.$id.'" >
                      <button class="btn  btn-success btn-sm">
                      Bill&nbsp;&nbsp;<span class="glyphicon glyphicon-credit-card"></button>
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
    "lengthChange": false,
  }
);


</script>
