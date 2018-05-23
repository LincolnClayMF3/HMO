<?php
$result = mysqli_query($con,"SELECT * FROM tblcoverage");
  while ($row = mysqli_fetch_array($result)) {

    $id = $row['coverageID'];
    $name = $row['coverageName'];
    $desc = $row['coverageDesc'];

     ?>
    <div class="modal fade" id="updateCoverage<?php echo $id ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content" style="margin-top: 5em; margin-left: 3em">
          <div class="modal-header">
            <button class="close" data-dismiss="modal" aria-hidden="true" onclick="reset()">&times;</button>
            <h4 class="modal-title">
              Edit Coverage
            </h4>
          </div>
          <div class="modal-body">
            <form class="updatecoverageform" role="form" method="post" autocomplete="off" onsubmit="Update()">

            <div class="form-group col-xs-12">
              <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Coverage Category</label>
              <?php
              $id = $row['coverageID'];
              $coverageName = $row['coverageName'];
              $type = mysqli_query($con, "SELECT c1.categoryID FROM tblcategory c1
                      INNER JOIN tblCoverageCategory c2 ON c1.categoryID = c2.intCategoryID WHERE c2.intCoverageID = $id");
              while ($r = mysqli_fetch_array($type)) {
                $categoryID = $r['categoryID'];
              }

              $sql = mysqli_query($con, "SELECT * FROM tblcategory ORDER BY categoryType ASC");
              echo "<select class=\"form-control\" name = category required>
              <option>--Select Category--</option>";
              while ($row = mysqli_fetch_array($sql)) {
                $temp = $row['categoryID'];
                if ($temp == $categoryID) {
                  $selected = "selected";
                }
                else {
                  $selected = "";
                }
                echo "<option $selected value = \"{$row['categoryID']}\">{$row['categoryType']}</option>";
              }
              echo "</select>";
              ?>
            </div>

            <div class="form-group col-xs-12">
              <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Coverage Name</label>
              <input type="text" value="<?php echo $coverageName?>" class="form-control" name="coverageName" placeholder="Enter Coverage Name" required maxlength="40" onkeypress="return validateName(event)">
            </div>

            <div class="form-group col-xs-6">
              <label>Description</label>
              <textarea class="form-control" rows="3" placeholder="Enter Description" name="coverageDesc" onkeypress="return validateName(event)"><?php echo $desc?></textarea>
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
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel">Close</button>
            <input type="hidden"  name="id" value="<?php echo $id?>">
            <input type="submit" class="btn btn-success" name="btnUpdate" value="Edit">
          </form>
          </div>
        </div>
      </div>
    </div>
<?php } ?>


<?php

if(isset($_POST['btnUpdate'])){
  require 'parts/php/post/coverage/btnUpdate.php';
}

?>
