<?php
$result = mysqli_query($con,"SELECT * FROM tblpatientclaim");
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['reimbursementID'];
    $name = $row['reimbursementPatientName']; ?>
  <div class="modal fade" id="receiveClaim<?php echo $id ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top: 10em; margin-left: 3em">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Receive Claim</h4>
        </div>
        <div class="modal-body">

          <form role="form" method="post" autocomplete="off">

          <div class="col-xs-12" align="center">
            <p style="color: blue; font-style: italic">Receive the Requested Claim of <?php echo $name ?> ?</p>
          </div>

        </div>
        <div class="modal-footer">

          <div class="col-xs-12">
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel">Close</button>
            <input type="hidden"  name="id" value="<?php echo $id ?>">
            <input type="submit" class="btn btn-success" name="btnReceive" value="Receive">
        </div>

      </form>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

  <?php

  if(isset($_POST['btnReceive'])){
    require 'parts/php/post/claims/patient/btnReceive.php';
  }

  ?>
