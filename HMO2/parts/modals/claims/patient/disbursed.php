<?php

$date = date('Y-m-d');

$result1 = mysqli_query($con,"SELECT * FROM tblpatientclaim WHERE status = 'Approved'");
  while ($row = mysqli_fetch_array($result1)) {

    $id = $row['reimbursementID'];
    $patient = $row['reimbursementPatientName'];
    $amount = $row['reimbursementAmount'];
    $coordinator = $row['reimbursementCoordinator'];

     ?>
  <div class="modal fade" id="disbursePatientClaim<?php echo $id ?>" style="z-index:1051" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top: 7em; margin-left: 3em">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Disburse Patient Claim Request</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="post">
            <div class="col-xs-12" style="margin-top:.5em; margin-bottom: .5em; overflow-y:auto;
              box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444; height:300px;">

              <p style="font-style: italic">Check Preview</p>
              <p><strong>HEALTH MAINTENANCE ORGANIZATION</strong></p>
              <p>Sta. Mesa Manila</p>
              <p class="pull-right">Date: <?php echo $date ?></p></br>
              <p>Hospital Coordinator: <?php echo $coordinator?></p>
              <p>Disbursed By: <?php echo $fullName?> (Administrator)</p>
              <p>the amount of: Php <?php echo $amount ?></p>
              <p>Recipient: <?php echo $patient ?></p></br></br>


            </div>
          <!-- <p>Do You Want To Approve the Claims <?php echo $name ?> ?</p> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel">Close</button>
          <input type="hidden"  name="id" value="<?php echo $id ?>">
          <input type="submit" class="btn btn-success" name="btnDisburse" value="Send Claim" >
        </form>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

  <?php

  if(isset($_POST['btnDisburse'])){
    require 'parts/php/post/claims/patient/btnDisburse.php';
  }

  ?>
