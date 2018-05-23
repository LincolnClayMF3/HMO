<div class="modal fade" id="newStandard" role="dialog" style="width: 100%" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top: 3em; margin-left: 3em">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
          New Standard Service
        </h4>
      </div>
      <div class="modal-body">
        <form class="standardform" role="form" method="post" autocomplete="off">
          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Service Name</label>
            <input type="text" class="form-control" name="standardName" placeholder="Enter Standard Service Name" maxlength="40">
          </div>

          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Status</label>
            <div class="radio">
              <label>
                <input type="radio" name="status" value="Active" checked>
                Active
              </label>&nbsp;&nbsp;
              <label>
                <input type="radio"  name="status"  value="Inactive" disabled>
                Inactive
              </label>
            </div>
          </div>

          <div class="form-group col-xs-12" align="center" style="margin-top: 2em">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Select Coverage(s)</label>
          </div>

          <div class="form-group col-xs-12" style="overflow:auto; height: 300px;">
            <table id="example2" class="table table-bordered table-striped table-hover table-responsive" width="100%">
              <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
                <tr>
                  <th>Category</th>
                  <th>Coverage</th>
                  <th>Classification</th>
                  <th>Select</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $result = mysqli_query($con,"SELECT c1.coverageID, c3.categoryType, c3.classification, c1.coverageName, c1.status
                          FROM tblcoverage c1
                          INNER JOIN tblCoverageCategory c2 ON c1.coverageID=c2.intCoverageID
                          INNER JOIN tblcategory c3 ON c2.intCategoryID=c3.categoryID WHERE c3.classification = 'Standard'
                          AND c1.status = 'Active' ORDER by c3.categoryType ASC;");

                $num = mysqli_num_rows($result);


                if($num > 0){
                    while ($row = mysqli_fetch_array($result)) {

                      $name =  $row['coverageName'];
                      $category =  $row['categoryType'];
                      $class = $row['classification'];
                      $id = $row['coverageID'];

                        echo '<tr>';
                        echo '<td>' . $category . '</td>';
                        echo '<td>' . $name . '</td>';
                        echo '<td>' . $class . '</td>';
                        echo '<td>
                              <input type = "checkbox" class="checkbox_box" value = "'.$id.'" name="coverageArray[]">
                              </td>';
                        echo '</tr>';
                  }
                }
                ?>
              </tbody>
            </table>
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

if (isset($_POST['btnCreate'])) {
  require 'parts/php/post/service/standard/btnCreate.php';
}

?>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>

$(function () {
  $("#example2").DataTable(
    {
      "lengthChange": true
    }
  );
});
</script>
