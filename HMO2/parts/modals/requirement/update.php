<?php
$result = mysqli_query($con,"SELECT * FROM tblrequirement");
while ($row = mysqli_fetch_array($result)) {

  $name = $row['requirementName'];
  $type = $row['requirementType'];
  $desc = $row['requirementDesc'];
  $id = $row['requirementID'];

   ?>
  <div class="modal fade" id="updateRequirement<?php echo $id ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top: 6em; margin-left: 3em">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" aria-hidden="true" onclick="reset()">&times;</button>
          <h4 class="modal-title">
            Edit Requirement
          </h4>
        </div>
        <div class="modal-body">
          <form class="updaterequirementform" role="form" method="post" autocomplete="off" onsubmit="Update()">
            <div class="form-group col-xs-6">
              <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Requirement Name</label>
              <input type="text" value="<?php echo $name ?>" class="form-control"
              name="requirementName" placeholder="Enter Requirement Name" required maxlength="40" >
            </div>

            <div class="form-group col-xs-6">
              <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Requirement Type</label>
              <?php
                if ($type == "Doctor Claim") {
                  $doctor = "selected";
                  $patient = "";
                }
                else {
                  $doctor = "";
                  $patient = "selected";
                }
              ?>
              <select class="form-control" name="requirementType" required>
                <option value="">--Select Requirement Type--</option>

                <option <?php echo $doctor ?> value="Doctor Claim">Doctor Claim</option>
                <option <?php echo $patient ?> value="Patient Claim">Patient Claim</option>
              </select>
            </div>


          <div class="form-group col-xs-6">
            <label>Description</label>
            <textarea class="form-control" rows="3" placeholder="Enter Requirement Description"
                      name="requirementDesc" ><?php echo $desc ?></textarea>
          </div>

          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Status</label>
            <div class="radio">
              <label>
                <input type="radio" name="status" value="Active" checked>
                Active
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  name="status"  value="Inactive">
                Inactive
              </label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <p style="color: red; font-style: italic">Note: All fields with <span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> are Required</p>
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel" onclick="reset()">Close</button>
          <input type="hidden"  name="id" value="<?php echo $id ?>">
          <input type="submit" class="btn btn-success" name="btnUpdate" value="Edit">
        </form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<?php

if(isset($_POST['btnUpdate'])){

  require 'parts/php/post/requirement/btnUpdate.php';

}

?>
