<?php
$result = mysqli_query($con,"SELECT * FROM tblpatientclaim");
  while ($row = mysqli_fetch_array($result)) {
    $date = $row['reimbursementDate'];
    $id = $row['reimbursementID'];
    $name = $row['reimbursementPatientName'];
    $card = $row['reimbursementCardID'];
    $contact = $row['reimbursementContact'];
    $hospital = $row['reimbursementHospital'];
    $reason = $row['reimbursementReason'];
    $treatment = $row['reimbursementTreatment'];
    $amount = $row['reimbursementAmount'];
    ?>
<div class="modal fade" id="viewPatientClaim<?php echo $id ?>" role="dialog" style="width: 100%" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top: 4em; margin-left: 3em">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
          View Patient Claim Request
        </h4>
      </div>
      <form method="post" autocomplete="off">
      <div class="modal-body tabbable tab-content form-group">

        <div class="tab-pane active fadeInDown animated" id="claimDetails<?php echo $id?>">
          <div class="form-group col-xs-12">
            <label>Date</label>
            <?php
            $convertDate = date("M jS, Y", strtotime("$date"));
            ?>
            <p><?php echo $convertDate?></p>
          </div>

          <div class="form-group col-xs-6">
            <label>Patient's Name</label>
            <p><?php echo $name?></p>
          </div>

          <div class="form-group col-xs-6">
            <label>Card/ID Number</label>
            <p><?php echo $card?></p>
          </div>


          <div class="form-group col-xs-6">
            <label>Contact Number</label>
            <p><?php echo $contact?></p>
          </div>


          <div class="form-group col-xs-6">
            <label>Hospital/Clinic</label>
            <p><?php echo $hospital?></p>
          </div>

          <div class="form-group col-xs-6">
            <label>Amount</label>
            <p>Php <?php echo number_format($amount,2)?></p>
          </div>

          <div class="form-group col-xs-6">
            <label>Treatment Date</label>
            <?php
            $convertTreatment = date("M jS, Y", strtotime("$treatment"));
            ?>
            <p><?php echo $convertTreatment?></p>
          </div>

          <div class="form-group col-xs-12">
            <label>Reason for Reimbursement</label>
            <p><?php echo $reason?></p>
          </div>

          <a href="#requirements<?php echo $id?>" data-toggle="tab" class="btn btn pull-right">
            <button id="firstbutton" type="button" class="btn btn-primary pull-right">Next</button>
          </a>

        <a href="#" class="btn btn pull-left">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </a>
        </div>

        <div class="tab-pane fadeInDown animated" id="requirements<?php echo $id?>">
          <div class="form-group col-xs-12" style="overflow:auto">
            <label>Requirements</label>
            <table class="table table-bordered table-striped table-hover table-responsive" style="width: 100%;">
            <tbody>
              <tr>
            <?php
                $counter2 = 0;
                $counter = 0;
                $reimbursement = mysqli_query($con, "SELECT * FROM tblpatientclaim WHERE reimbursementID = $id");
                $requirement = mysqli_query($con, "SELECT * FROM tblrequirement WHERE requirementType = 'Patient Claim'");


                                while($row = mysqli_fetch_array($reimbursement)){
                                  $id2 = $row['reimbursementID'];
                                  $filepath = $row['reimbursementreqPath'];
                                  $filepath = explode("|", $filepath);
                                  $counter++;
                                }

                while($row = mysqli_fetch_array($requirement)){
                  $id1 = $row['requirementID'];
                  $fileName = $row['requirementName'];
                  echo '<td>
                        <a href="#" class="pop" ><img id="imageresource" style="width: 200px; height: 200px" src="'.$filepath[$counter2].'"></a>
                        <p>'.$fileName.'</p>
                        </td>';
                  $counter2++;
                }


            ?>
          </tr>
          </tbody>
          </table>
          </div>

          <a href="#claimDetails<?php echo $id?>" data-toggle="tab" class="btn btn pull-left">
            <button id="secondbutton" type="button" class="btn btn-danger pull-right">Back</button>
          </a>

          <!-- <a href="#" class="btn btn pull-right"> -->
            <!-- <button id="thirdbutton" type="button" name="btnApproved" class="btn btn-success pull-right">Approve</button> -->
          <!-- </a> -->

          <a class="btn btn pull-right">
            <input type="hidden"  name="id" value="<?php echo $id ?>">
            <input type="submit" class="btn btn-success" name="btnApproved" value="Approve">
          </a>

          <a href="#" data-toggle="modal" data-target="#disapprovePatientClaim<?php echo $id ?>" class="btn btn pull-right">
            <button id="fourthbutton" type="button" class="btn btn-warning pull-right">Disapprove</button>
          </a>

      </div>

      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
</form>

<?php

if (isset($_POST['btnApproved'])) {
  require 'parts/php/post/claims/patient/btnApproved.php';
}

  // require 'parts/modals/claims/patient/approved.php';
  require 'parts/modals/claims/patient/disapproved.php';

 ?>

<div class="modal fade" id="imagemodal" style="z-index:1051" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
        <h4 class="modal-title" id="myModalLabel">Image Preview</h4>
      </div>

      <div class="modal-body">
        <img src="" class="imagepreview" style="width: 100%; height: 500px">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php } ?>


<script>

$(".pop").on("click", function(){

  $(".imagepreview").attr('src',$(this).find('img').attr('src'));
  $("#imagemodal").modal('show');

});

</script>
