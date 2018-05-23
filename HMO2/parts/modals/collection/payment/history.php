<?php

$results = mysqli_query($con, "SELECT * FROM tblmembertransaction");

while ($row = mysqli_fetch_array($results)) {

  $id = $row['memberTransID'];
  $memberName = $row['memberTransName'];

    ?>
<div class="modal fade" id="historyMemberRecord<?php echo $id ?>" role="dialog" style="width: 100%" aria-hidden="true">
  <div class="modal-dialog" style="width: 80%">
    <div class="modal-content" style="margin-top: 6em; margin-left: 3em">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
          View Payment History
        </h4>
      </div>
      <div class="modal-body">
        <div class="box" style="overflow:auto; height: 400px">
          <div class="box-body">
            <table id="example2<?php echo $id?>" class="table table-bordered  table-striped table-hover table-responsive" width="100%">
              <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
                <tr>
                  <th>Date</th>
                  <th>Plan</th>
                  <th>Mode of Payment</th>
                  <th>Amount Paid</th>
                  <th>Remaining Balance</th>
                </tr>
              </thead>
              <tbody>
                <?php

                $result = mysqli_query($con, "SELECT * FROM  tblpaymenthistory WHERE paymentMemberName = '$memberName'
                          ORDER BY paymentMemberName ASC");

                $num = mysqli_num_rows($result);

                if($num > 0){
                  while ($row = mysqli_fetch_array($result)) {

                    $date = $row['paymentDate'];
                    $amountPaid = $row['paymentAmountPaid'];
                    $mode = $row['paymentMode'];
                    $balance = $row['paymentBalance'];
                    $plan = $row['paymentPlan'];
                    $convertDate = date("M jS, Y", strtotime("$date"));

                    echo '<tr>';
                    echo '<td>' . $convertDate . '</td>';
                    echo '<td>' . $plan . '</td>';
                    echo '<td>' . $mode . '</td>';
                    echo '<td>Php ' . $amountPaid . '</td>';
                    echo '<td>Php ' . $balance . '</td>';
                    echo '</tr>';

                  }
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>

$("#example2<?php echo $id?>").DataTable(
  {
    "lengthChange": true,
  }
);


</script>

<?php } ?>
