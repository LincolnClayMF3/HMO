<?php

require 'parts/modals/claims/patient/resubmit.php';

$result = mysqli_query($con,"SELECT * FROM tblpatientclaim");
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['reimbursementID'];
    $reason = $row['reimbursementDisapproved'];
    $gracePeriod = $row['reimbursementGracePeriod'];
     ?>
  <div class="modal fade" id="viewReason<?php echo $id ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top: 10em; margin-left: 3em">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Claim Disapproved</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="post">

          <div class="form-group col-xs-6">
            <label>Reason of Disapprovement</label>
            <textarea class="form-control" name="reason" style="height: 150px"><?php echo $reason ?></textarea>
          </div>

          <div class="form-group col-xs-6">
            <label>Grace Period</label>
            <input type="text" class="form-control" name="gracePeriod" value="<?php echo $gracePeriod?>">
          </div>

        </div>
        <div class="modal-footer">

          <div class="col-xs-12">
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel">Close</button>
            <a href="#" data-toggle="modal" data-target="#resubmitPatientClaim<?php echo $id?>" >
            <button data-dismiss="modal" class="btn  btn-success">
            Resubmit</button>
            </a>
        </div>

      </form>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
