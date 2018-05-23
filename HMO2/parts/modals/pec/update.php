<?php
$result = mysqli_query($con,"SELECT * FROM tblpec");
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['pecID'];
    $name = $row['pecName'];
    $desc = $row['pecDesc'];
    ?>
<div class="modal fade" id="updatePEC<?php echo $id ?>" role="dialog" style="width: 100%" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content" style="margin-top: 8em; margin-left: 3em">
    <div class="modal-header">
      <button class="close" data-dismiss="modal" aria-hidden="true" onclick="reset()">&times;</button>
      <h4 class="modal-title">
        Edit Pre Existing Condition (PEC)
      </h4>
    </div>
    <div class="modal-body">
      <form class="updatepecform" role="form" method="post" autocomplete="off" onsubmit="Update()">

        <div class="form-group col-xs-12">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Pre Existing Condition</label>
          <input type="text" value="<?php echo $name ?>" class="form-control" name="pecName"
                 placeholder="Enter Pre Existing Condition" required maxlength="40" onkeypress="return validateName(event)">
        </div>

        <div class="form-group col-xs-6">
          <label>Description</label>
          <textarea class="form-control" rows="3" placeholder="Enter Description" name="pecDesc" onkeypress="return validateName(event)"><?php echo $desc ?></textarea>
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

  require 'parts/php/post/pec/btnUpdate.php';

}

?>
