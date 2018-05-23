<?php

require 'parts/modals/contract/hospital/delete.php';
require 'parts/modals/contract/hospital/earlyRenewal.php';


$result = mysqli_query($con,"SELECT * FROM tblhospitalmaintenance");
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['hospitalMainID'];
    $name = $row['hospitalMainName'];
    $region = $row['hospitalRegion'];
    $type = $row['hospitalSpecification'];
    $address = $row['hospitalMainAddress'];
    $coordinator = $row['hospitalMainCoordinator'];
    $telephone = $row['hospitalMainTelephone'];
    $mobile = $row['hospitalMainMobile'];
    $email = $row['hospitalMainEmail'];
    $end = $row['hospitalEndContract'];
     ?>
  <div class="modal fade" id="editHospital<?php echo $id ?>" role="dialog" style="width: 100%" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top: -2em; margin-left: 3em">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" aria-hidden="true" onclick="reset()">&times;</button>
          <h4 class="modal-title">
            Edit Hospital
          </h4>
        </div>
        <div class="modal-body">
          <form class="editHospitalform" role="form" method="post" autocomplete="off" onsubmit="Update()">
          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Hospital Name</label>
            <input type="text" value="<?php echo $name ?>" class="form-control" name="hospitalName" placeholder="Enter Hospital Name" required onkeypress="return validateName(event)">
          </div>

          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Hospital Address</label>
            <input type="text" value="<?php echo $address ?>" class="form-control" name="hospitalAddress" placeholder="Enter Hospital Address" required onkeypress="return validateNameAndNumber(event)">
          </div>

          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Region</label>

            <select class="form-control" name="hospitalRegion" required>
              <?php

              $selectedRegion = mysqli_query($con, "SELECT hospitalRegion FROM tblhospitalmaintenance
                                WHERE hospitalMainID = '$id'");

              while ($row = mysqli_fetch_array($selectedRegion)) {
                $hospitalRegion = $row['hospitalRegion'];
              }

              $allRegion = mysqli_query($con, "SELECT * FROM tblregion");

              while ($row = mysqli_fetch_array($allRegion)) {
                $regionID = $row['regionID'];
                $regionName = $row['regionName'];

                if ($regionID == $hospitalRegion) {
                  $selected = "selected";
                }
                else {
                  $selected = "";
                }
                echo "<option $selected value = \"$regionID\">$regionName</option>";
              }
              ?>
            </select>
          </div>

          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Hospital Coordinator</label>
            <input type="text" value="<?php echo $coordinator ?>" class="form-control" name="hospitalCoordinator" placeholder="Enter Hospital Coordinator" required onkeypress="return validateName(event)">
          </div>

          <div class="form-group col-xs-12">
            <label>Contact Details</label>
            <input type="text" value="<?php echo $telephone ?>" class="form-control" name="hospitalTelephone" data-inputmask='"mask": "999-999-99"' data-mask placeholder="Enter Telephone No." maxlength="10" onkeypress="return validateNumber(event)">
            <input type="text" value="<?php echo $mobile ?>" class="form-control" name="hospitalMobile" data-inputmask='"mask": "(9999) 999-9999"' data-mask placeholder="Enter Mobile No." maxlength="14" onkeypress="return validateNumber(event)">
            <input type="email" value="<?php echo $email ?>" class="form-control" name="hospitalEmail" placeholder="Enter Email Address" required> <!-- Gagawin palang ang validation -->
          </div>

          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Hospital Specification</label>
            <div class="radio">
              <?php

              if($type == "Major"){
                echo "<label>
                        <input type=\"radio\" name=\"hospitalSpecification\" value=\"Major\" checked>
                          Major
                      </label>&nbsp;&nbsp;
                      <label>
                        <input type=\"radio\"  name=\"hospitalSpecification\"  value=\"Minor\">
                          Minor
                      </label>";
              }
              else{
                echo "<label>
                        <input type=\"radio\" name=\"hospitalSpecification\" value=\"Major\">
                          Major
                      </label>&nbsp;&nbsp;
                      <label>
                        <input type=\"radio\"  name=\"hospitalSpecification\"  value=\"Minor\" checked>
                          Minor
                      </label>";
              }
              ?>
            </div>
          </div>
          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Status</label>
            <div class="radio">
              <label>
                <input type="radio" name="status" value="Active" checked>
                Active
              </label>&nbsp;&nbsp;
              <label>
                <input type="radio"  name="status"  value="Inactive">
                Inactive
              </label>
            </div>
          </div>

            <?php

            $contract = mysqli_query($con, "SELECT hospitalEndContract, hospitalNotify, hospitalMainID FROM tblhospitalmaintenance WHERE hospitalMainID = '$id'");

            while ($row = mysqli_fetch_array($contract)) {
              $specs = $row['hospitalEndContract'];
              $notif = $row['hospitalNotify'];
            }

            if($specs == "Open End"){

              echo "
              <div class=\"form-group col-xs-6\">
                <label><span class=\"glyphicon glyphicon-asterisk\" style=\"color:red\"></span> Contract Specification</label>
                <div class=\"radio\" align=\"center\">
                  <label>
                    <input type=\"radio\" class=\"open_ended\" name=\"contract\" value=\"Open Ended Contract\" checked>
                    Open End
                  </label>&nbsp;&nbsp;&nbsp;
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
                <div class=\"radio\" align=\"center\">
                  <label>
                    <input type=\"radio\" class=\"open_ended\" name=\"contract\" value=\"Open Ended Contract\">
                    Open End
                  </label>&nbsp;&nbsp;&nbsp;
                  <label>
                    <input type=\"radio\" class=\"non_permanent\" name=\"contract\" checked>
                    Specific Date
                  </label>
                </div>
              </div>

              <div class=\"form-group col-xs-6\">
                <p>End of Contract</p>
                <input type=\"date\" class=\"form-control\" id=\"end\" name=\"contract\" value=\"$specs\" readonly>
              </div>";
            }

          ?>

        </div>
        <div class="modal-footer">
          <p style="color: red; font-style: italic">Note: All fields with asterisk are Required</p>
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel" onclick="reset()">Close</button>
          <input type="hidden"  name="id" value="<?php echo $id ?>">
          <input type="submit" class="btn btn-success pull-right" name="btnUpdate" value="Edit">
          <a href="#" data-toggle="modal" data-target="#terminateHospital<?php echo $id ?>">
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

          <a href="#" data-toggle="modal" data-target="#earlyRenewHospital<?php echo $id ?>" style="display: <?php echo $display?>">
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

  require 'parts/php/post/contract/hospital/btnUpdate.php';

}

  ?>

  <script src="plugins/input-mask/jquery.inputmask.js"></script>
  <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>

  <script>

  $("[data-mask]").inputmask();

  $(".open_ended").click(function(){

      $("input[id=end]").prop('disabled', true);
      $("input[id=notify]").prop('disabled', true);


  });

  $(".non_permanent").click(function(){

      $("input[id=end]").prop('disabled', false);
      $("input[id=notify]").prop('disabled', false);

  });

  </script>
