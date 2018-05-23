<?php
$result = mysqli_query($con,"SELECT * FROM tblmembershiptype");
while ($row = mysqli_fetch_array($result)) {

  $id = $row['membershipID'];
  $name = $row['membershipName'];
  $desc = $row['membershipDesc'];
  $percentage = $row['membershipPercentage'];

   ?>
<div class="modal fade" id="updateMembership<?php echo $id ?>" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top: 7em; margin-left: 3em">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-hidden="true" onclick="reset()">&times;</button>
        <h4 class="modal-title">
          Edit Membership Type
        </h4>

      </div>
      <div class="modal-body">
        <form class="updatemembershipform" role="form" method="post" autocomplete="off" onsubmit="Update()">

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Membership Type Name</label>
          <input type="text" value="<?php echo $name ?>" class="form-control" name="membershipName" placeholder="Enter Membership Type Name" required maxlength="40" onkeypress="return validateName(event)">
        </div>

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Added Percentage</label>
          <input type="text" value="<?php echo $percentage ?>" class="form-control" name="membershipPercentage" placeholder="Enter Percentage">
        </div>

        <div class="form-group col-xs-6">
          <label>Description</label>
          <textarea class="form-control" rows="3" placeholder="Enter Membership Type Description" name="membershipDesc" onkeypress="return validateName(event)"><?php echo $desc ?></textarea>
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
              <input type="radio"  name="status"  value="Inactive" disabled>
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

  require 'parts/php/post/membership/btnUpdate.php';

}

?>
