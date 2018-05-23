<?php

require 'parts/modals/contract/company/delete.php';
require 'parts/modals/contract/company/earlyRenewal.php';

$result = mysqli_query($con,"SELECT * FROM tblcompanymaintenance");
  while ($row = mysqli_fetch_array($result)) {

    $id = $row['companyMainID'];
    $name = $row['companyMainName'];
    $address = $row['companyMainAddress'];
    $telephone = $row['companyMainTelephone'];
    $mobile = $row['companyMainMobile'];
    $email = $row['companyMainEmail'];
    $effectivity = $row['companyEffectivityDate'];
    $end = $row['companyEndContract'];

     ?>
  <div class="modal fade" id="editCompany<?php echo $id ?>" role="dialog" style="width: 100%" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top: -2em; margin-left: 3em">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">
            Update Company
          </h4>
        </div>
        <div class="modal-body">
          <form class="updatecompanyform" role="form" method="post" autocomplete="off">

          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Company Name</label>
            <input type="text" value="<?php echo $name ?>" class="form-control" name="companyName" placeholder="Enter Company Name" required onkeypress="return validateName(event)"> <!-- dadagdagan ng tuldok at apostrophe -->
          </div>

          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Company Address</label>
            <input type="text" value="<?php echo $address ?>" class="form-control" name="companyAddress" placeholder="Enter Company Address" required onkeypress="return validateNameAndNumber(event)"> <!-- dadagdagan ng dash palang -->
          </div>

          <div class="col-xs-6">
           <div class="form-group">
             <div class="col-md-12">
               <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Preferred Plan</label>
             </div>
             <div class="col-xs-12" style="margin-bottom: .5em; overflow-y:auto;
               box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444; height:100px;">
                 <?php

                 $fetchplan = mysqli_query($con, "SELECT p1.planID FROM tblplan p1
                         INNER JOIN tblcompanyplan c2 ON p1.planID = c2.intPlanID WHERE c2.intCompanyID = $id");

                   $planID = array();
                     while ($row = mysqli_fetch_array($fetchplan)) {
                       $planID[] = $row['planID'];
                   }

                   $plan = mysqli_query($con, "SELECT p1.planID, p1.planName, p1.status,
                                              m1.membershipName, m1.membershipID FROM tblplan p1
                                 INNER JOIN tblplantype p2 ON p1.planID = p2.intPlanID
                                 INNER JOIN tblmembershiptype m1 ON m1.membershipID = p2.intTypeID
                                 WHERE p1.status = 'Active' AND m1.membershipName = 'Corporate' ORDER BY planName ASC");

                     while($row = mysqli_fetch_array($plan)){

                       $pid = $row['planID'];
                       $name = $row['planName'];

                       echo "<label><small>";
                       echo "<input type=\"checkbox\" name=\"planArray[]\"
                              value=\"$pid\"";

                              foreach ($planID as $key) {
                                if($pid == $key){
                                  echo "checked";

                                }
                              }
                      echo "> $name";
                      echo "</small></label></br>";
                     }

                   ?>
               </div>
             </div>
          </div>

          <div class="form-group col-xs-6">
            <label>Contact Details</label>
            <input type="text" value="<?php echo $telephone ?>" class="form-control" name="companyTelephone" data-inputmask='"mask": "999-999-99"' data-mask placeholder="Enter Telephone No." maxlength="10" onkeypress="return validateNumber(event)">
            <input type="text" value="<?php echo $mobile ?>" class="form-control" name="companyMobile" data-inputmask='"mask": "(9999) 999-9999"' data-mask placeholder="Enter Mobile No." maxlength="14" onkeypress="return validateNumber(event)">
            <input type="text" value="<?php echo $email ?>" class="form-control" name="companyEmail" placeholder="Enter Email Address"> <!-- Gagawin palang -->
          </div>

          <div class="form-group col-xs-6">
            <label>Entry Date</label>
            <input id="companyEffectivityDate1" type="date" value="<?php echo $effectivity ?>" class="form-control" name="companyEffectivityDate" disabled>
          </div>

          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Status</label>
            <div class="radio">
              <label>
                <input type="radio" name="status" value="Active" checked>
                Active
              </label>
              <label>
                <input type="radio"  name="status"  value="Inactive">
                Inactive
              </label>
            </div>
          </div>

          <?php

          $contract = mysqli_query($con, "SELECT companyEndContract, companyNotify, companyMainID FROM tblcompanymaintenance WHERE companyMainID = '$id'");

          while ($row = mysqli_fetch_array($contract)) {
            $specs = $row['companyEndContract'];
            $notif = $row['companyNotify'];
          }

          if($specs == "Open End"){

            echo "
            <div class=\"form-group col-xs-6\">
              <label><span class=\"glyphicon glyphicon-asterisk\" style=\"color:red\"></span> Contract Specification</label>
              <div class=\"radio\">
                <label>
                  <input type=\"radio\" class=\"open_ended\" name=\"contract\" value=\"Open End\" checked>
                  Open End
                </label>
                </div>
                <div class=\"radio\">
                <label>
                  <input type=\"radio\" class=\"non_permanent\" name=\"contract\">
                  Specific Date
                </label>
              </div>
            </div>

            <div class=\"form-group col-xs-6\">
              <p>End of Contract</p>
              <input type=\"date\" class=\"form-control\" id=\"end\" name=\"contract\" disabled>
            </div>";

          }
          else {
            echo "<div class=\"form-group col-xs-6\">
              <label><span class=\"glyphicon glyphicon-asterisk\" style=\"color:red\"></span> Contract Specification</label>
              <div class=\"radio\">
                <label>
                  <input type=\"radio\" class=\"open_ended\" name=\"contract\" value=\"Open End\">
                  Open End
                </label>
                </div>
                <div class=\"radio\">
                <label>
                  <input type=\"radio\" class=\"non_permanent\" name=\"contract\" checked>
                  Specific Date
                </label>
              </div>
            </div>

            <div class=\"form-group col-xs-6\">
              <p>End of Contract</p>
              <input type=\"date\" class=\"form-control\" id=\"end\" name=\"contract\" value=\"$specs\">
            </div>";
          }

          ?>

        </div>
        <div class="modal-footer">
          <p style="color: red; font-style: italic">Note: All fields with asterisk are Required</p>
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel" onclick="reset()">Close</button>
          <input type="hidden"  name="id" value="<?php echo $id ?>">
          <input type="submit" class="btn btn-success pull-right" name="btnUpdate" value="Edit">
          <a href="#" data-toggle="modal" data-target="#terminateCompany<?php echo $id ?>">
            <button type="button" class="btn btn-warning pull-right" style="margin-right: 2em">Early Termination</button>
          </a>

          <?php
            if($end != "Open End"){
              $display = "";
            }
            else {
              $display = "none";
            }
          ?>

          <a href="#" data-toggle="modal" data-target="#earlyRenewCompany<?php echo $id ?>" style="display: <?php echo $display?>">
            <button type="button" class="btn btn-info pull-right" style="margin-right: 2em">Early Renewal</button>
          </a>
        </form>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>


<?php

if(isset($_POST['btnUpdate'])){

  require 'parts/php/post/contract/company/btnUpdate.php';

}

?>

<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script>

$(function () {

  $("[data-mask]").inputmask();

});

$(".open_ended").click(function(){

    $("input[id=end]").prop('disabled', true);
    $("input[id=notify]").prop('disabled', true);


});

$(".non_permanent").click(function(){

    $("input[id=end]").prop('disabled', false);
    $("input[id=notify]").prop('disabled', false);


});

</script>
