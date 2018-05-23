<?php
$additional = mysqli_query($con,"SELECT * FROM tbladditional");
  while ($row = mysqli_fetch_array($additional)) {
    $id = $row['additionalID'];
    $name = $row['additionalName'];
    ?>
<div class="modal fade" id="updateAdditional<?php echo "$id"; ?>" role="dialog" style="width: 100%" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top: 3em; margin-left: 3em">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
          Edit Additional Service
        </h4>
      </div>
      <div class="modal-body">
        <form class="updateadditionalform" role="form" method="post" autocomplete="off" onsubmit="return check2(<?php echo $id?>);">

          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Service Name</label>
            <input type="text" value="<?php echo $name?>" class="form-control"
                   name="additionalName" placeholder="Enter Additional Service Name" required maxlength="40" >
          </div>

          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Status</label>
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

          <div class="form-group col-xs-12" align="center" style="margin-top: 2em">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Select Coverage(s)</label>
          </div>

          <div class="form-group col-xs-12" style="overflow:auto; height: 300px">
            <table id="example3" class="table table-bordered table-striped table-hover table-responsive" width="100%">
              <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
                <tr>
                  <th>Coverage Category</th>
                  <th>Coverage</th>
                  <th>Classification</th>
                  <th>Add</th>
                </tr>
              </thead>
              <tbody>
            <?php
            $add = $row['additionalID'];

            $coverage = mysqli_query($con,"SELECT c1.coverageID FROM tblcoverage c1 INNER JOIN tbladditionalcoverage a1
                                          ON c1.coverageID = a1.intcoverageid WHERE a1.intadditionalid = $add");

              $coverageID = array();
                while ($row = mysqli_fetch_array($coverage)) {
                  $coverageID[] = $row['coverageID'];
              }

              $result = mysqli_query($con,"SELECT c1.coverageID, c3.categoryType, c1.coverageName, c3.classification, c1.status
                        FROM tblcoverage c1
                        INNER JOIN tblCoverageCategory c2 ON c1.coverageID=c2.intCoverageID
                        INNER JOIN tblcategory c3 ON c2.intCategoryID=c3.categoryID WHERE c3.classification = 'Additional'
                        AND c1.status = 'Active' ORDER by c3.categoryType ASC;");

              $num = mysqli_num_rows($result);


              if($num > 0){
                  while ($row = mysqli_fetch_array($result)) {

                    $name =  $row['coverageName'];
                    $category =  $row['categoryType'];
                    $class = $row['classification'];
                    $cvg = $row['coverageID'];

                      echo "<tr>";
                      echo "<td>" . $category . "</td>";
                      echo "<td>" . $name . "</td>";
                      echo "<td>" . $class . "</td>";
                      echo "<td>";
                      echo  "<input  type = \"checkbox\" value = \"$cvg\" name=\"coverageArray[]\" ";
                      foreach($coverageID as $key){
                              if($cvg == $key){
                                echo "checked";
                              }
                            }
                      echo  ">";
                      echo "</td>";
                      echo "</tr>";

                }
              }
            ?>
          </tbody>
          </table>
          </div>

      </div>
      <div class="modal-footer">
        <p style="color: red; font-style: italic">Note: All fields with <span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> are Required</p>
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel">Close</button>
        <input type="hidden"  name="id" value="<?php echo $id ?>">
        <input type="submit" class="btn btn-success" name="btnUpdate" value="Edit">
      </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>


<?php

if (isset($_POST['btnUpdate'])) {
  require 'parts/php/post/service/additional/btnUpdate.php';
}

?>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>

function Update() {
   alert("Updated Successfully");
}

$(function () {
  $(".example3").DataTable(
    {
      "lengthChange": false
    }
  );
});
</script>
