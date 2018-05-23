<?php
$result = mysqli_query($con,"SELECT * FROM tbldoctorclaim");
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['claimID'];
    $name = $row['claimDoctorName'];
    $reason = $row['claimReason'];
    $gracePeriod = $row['claimGracePeriod'];
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
            <input type="hidden"  name="id" value="<?php echo $id ?>">
            <input type="submit" class="btn btn-success" name="btnResubmit" value="Resubmit">
        </div>

      </form>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
