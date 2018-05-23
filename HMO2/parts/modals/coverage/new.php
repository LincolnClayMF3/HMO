<div class="modal fade" id="newCoverage" role="dialog" style="width: 100%" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top: 5em; margin-left: 3em">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
          New Coverage
        </h4>
      </div>
      <div class="modal-body">
        <form class="coverageform" role="form" method="post" autocomplete="off">

          <div class="form-group col-xs-12">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Coverage Category</label>
            <?php
            $type = mysqli_query($con, "SELECT * FROM tblcategory WHERE status = 'Active' ORDER BY categoryType ASC");
            echo "<select class=\"form-control\" name = category>
            <option value=''>--Select Category--</option>";
            while ($r = mysqli_fetch_array($type)) {
              echo "<option value = \"{$r['categoryID']}\">{$r['categoryType']}</option>";
            }
            echo "</select>";
            ?>
          </div>

          <div class="form-group col-xs-12">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Coverage Name</label>
            <input type="text" class="form-control" name="coverageName" placeholder="Enter Coverage Name" maxlength="40" onkeypress="return validateName(event)">
          </div>

          <div class="form-group col-xs-6">
            <label>Description</label>
            <textarea class="form-control" rows="3" placeholder="Enter Description" name="coverageDesc" onkeypress="return validateName(event)">
            </textarea>
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
        <input type="submit" class="btn btn-success" name="btnCreate" value="Create">
      </form>
      </div>
    </div>
  </div>
</div>

<?php

if(isset($_POST['btnCreate'])){
  require 'parts/php/post/coverage/btnCreate.php';
}

?>
