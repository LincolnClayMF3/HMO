<?php
$result = mysqli_query($con,"SELECT * FROM tblcategory");
  while ($row = mysqli_fetch_array($result)) {

    $id = $row['categoryID'];
    $name = $row['categoryType'];
    $desc = $row['categoryDesc'];
    $class = $row['classification'];
    $specs = $row['specification'];

     ?>
<div class="modal fade" id="updateCategory<?php echo $id ?>" role="dialog" style="width: 100%" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content" style="margin-top: 5em; margin-left: 3em">
    <div class="modal-header">
      <button class="close" data-dismiss="modal" aria-hidden="true" onclick="reset()">&times;</button>
      <h4 class="modal-title">
        Edit Coverage Category
      </h4>
    </div>
    <div class="modal-body">
      <form class="updatecategoryform" role="form" method="post" autocomplete="off" onsubmit="Update()">

        <div class="row">
        <div class="form-group col-xs-12">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Category Name</label>
          <input type="text" value="<?php echo $name ?>" class="form-control" name="categoryType" placeholder="Enter Coverage Type" required maxlength="40" onkeypress="return validateName(event)">
        </div>
      </div>

        <div class="row">
          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Category Classification</label>
            <?php

            $standard = "";
            $additional = "";

            if($class == "Standard"){
              $standard = "checked";
            }
            else {
              $additional = "checked";
            }

            ?>
            <div class="radio">
              <label>
                <input  type="radio" name="class" value="Standard" <?php  echo $standard ?> required >
                Standard
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  name="class"  value="Additional" <?php  echo $additional ?> required>
                Additional
              </label>
            </div>
          </div>
          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Category Specification</label>
            <?php

            if($specs == "Per Year"){
              $year = "checked";
              $illness = "";
              $both = "";
            }
            elseif ($specs == "Per Illness") {
              $year = "";
              $illness = "checked";
              $both = "";
            }
            else {
              $year = "";
              $illness = "";
              $both = "checked";
            }

            ?>
            <div class="radio">
              <label>
                <input  type="radio" name="specs" value="Per Year" <?php  echo $year ?> required >
                Per Year
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  name="specs"  value="Per Illness" <?php  echo $illness ?> required>
                Per Illness
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio"  name="specs" value="Per Year Per Illness" <?php  echo $both ?> required>
                Per Year Per Illness
              </label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-xs-6">
            <label>Category Description</label>
            <textarea class="form-control" rows="3" name="categoryDesc" placeholder="Enter Description" onkeypress="return validateName(event)"><?php echo $desc ?></textarea>
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


    </div>
    <div class="modal-footer">
      <p style="color: red; font-style: italic">Note: All fields with <span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> are Required</p>
      <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel" onclick="reset()">Close</button>
      <input type="hidden"  name="id" value="<?php echo $row['categoryID']?>">
      <input type="submit" class="btn btn-success" name="btnUpdate" value="Edit">
    </form>
    </div>
  </div>
</div>
</div>
<?php } ?>

<?php

if(isset($_POST['btnUpdate'])){
  require 'parts/php/post/category/btnUpdate.php';

}

?>
