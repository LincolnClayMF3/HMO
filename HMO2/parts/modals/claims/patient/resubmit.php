<?php

$result = mysqli_query($con,"SELECT * FROM tblpatientclaim");
  while ($row = mysqli_fetch_array($result)) {
    $date = $row['reimbursementDate'];
    $ids = $row['reimbursementID'];
    $name = $row['reimbursementPatientName'];
    $card = $row['reimbursementCardID'];
    $contact = $row['reimbursementContact'];
    $hospital = $row['reimbursementHospital'];
    $reason = $row['reimbursementReason'];
    $amount = $row['reimbursementAmount'];
    $treatment = $row['reimbursementTreatment'];
    ?>
<div class="modal fade" id="resubmitPatientClaim<?php echo $ids ?>" role="dialog" style="width: 100%" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top: 4em; margin-left: 3em">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
          Patient Claim Resubmit
        </h4>
      </div>
      <div class="modal-body tabbable tab-content form-group">
        <form role="form" method="post">

        <div class="tab-pane active fadeInDown animated" id="patientDetails<?php echo $ids?>">
          <div class="form-group col-xs-12">
            <label>Date</label>
            <?php

            $currentDate = date('Y-m-d');

            ?>
            <input style="width: 100px" type="text" value="<?php echo $currentDate?>" class="form-control" disabled></br>
          </div>

          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span>Patient's Name</label>
            <input type="text" value="<?php echo $name?>" class="form-control" name="patientName"></br>
          </div>

          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span>Card/ID Number</label>
            <input type="text" value="<?php echo $card?>" class="form-control" name="cardNumber"></br>
          </div>


          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span>Contact Number</label>
            <input type="text" value="<?php echo $contact?>" class="form-control" name="contactNumber"></br>
          </div>


          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span>Hospital/Clinic</label>
            <input type="text" value="<?php echo $hospital?>" class="form-control" name="hospitalName"></br>
          </div>

          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span>Treatment Date</label>
            <input type="date" value="<?php echo $treatment?>" class="form-control" name="treatmentDate"></br>
          </div>

          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span>Amount</label>
            <input type="text" value="<?php echo number_format($amount,2)?>" class="form-control" name="amount"></br>
          </div>

          <div class="form-group col-xs-12">
            <label>Reason for Reimbursement</label>
            <textarea class="form-control" rows="3" name="reason" ><?php echo $reason?></textarea>
          </div>

          <a href="#requirementTab<?php echo $ids?>" data-toggle="tab" class="btn btn pull-right">
            <button id="firstbutton" type="button" class="btn btn-primary">Next</button>
          </a>

        <a href="#" class="btn btn pull-left">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </a>

        </div>

        <div class="tab-pane fadeInDown animated" id="requirementTab<?php echo $ids?>">
          <div class="form-group col-xs-12">
            <label>Requirements</label>
            <?php
            require 'parts/php/connection.php';
            $requirement = mysqli_query($con, "SELECT * FROM tblrequirement WHERE requirementType = 'Patient Claim'");

            while($row = mysqli_fetch_array($requirement)){
              $name = $row['requirementName'];

              echo "</br><span class=\"glyphicon glyphicon-asterisk\" style=\"color:red\"></span> $name<input type=\"file\" class=\"form-control\" name=\"requirementFile\"></br>";
            }

            ?>
          </div>

          <div class="form-group col-xs-12">
            <p style="color: red; font-style: italic" class="pull-right">Note: All fields with asterisk are Required</p>
          </div>

          <a href="#patientDetails<?php echo $ids?>" data-toggle="tab" class="btn btn pull-left">
            <button id="secondbutton" type="button" class="btn btn-danger">Back</button>
          </a>

          <a class="btn btn pull-right">
            <input type="submit" class="btn btn-success" name="btnSend" value="Submit">
          </a>

        </div>

      </div>
      <div class="modal-footer">
      </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>
