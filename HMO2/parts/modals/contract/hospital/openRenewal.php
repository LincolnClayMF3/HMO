<?php
$result = mysqli_query($con,"SELECT * FROM tblhospitalmaintenance");
  while ($row = mysqli_fetch_array($result)) {

    $contractEnded = $row['hospitalDateTerminated'];
    $id = $row['hospitalMainID'];

    ?>
  <div class="modal fade" id="openRenewHospital<?php echo $id ?>"  role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top: 10em; margin-left: 3em">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Renew Hospital</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="post">
            <div class="form-group col-xs-6">
              <label>Contract Ended on</label>
              <input type="date" class="form-control" value="<?php echo $contractEnded ?>" readonly>
            </div>

            <div class="form-group col-xs-6">
              <label>New End of Contract</label>
              <?php
              $new = date('Y-m-d', strtotime('+1 year'));
              ?>
              <input type="date" class="form-control" name="newEndContract" value="<?php echo $new ?>" min="<?php echo $new?>">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel">Close</button>
          <input type="hidden"  name="id" value="<?php echo $id?>">
          <input type="submit" class="btn btn-success" name="btnRenew" value="Renew">
        </form>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

<?php

if(isset($_POST['btnRenew'])){

  require 'parts/php/post/contract/hospital/btnRenew.php';

}

?>
