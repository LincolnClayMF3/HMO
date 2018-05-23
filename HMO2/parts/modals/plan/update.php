<?php
$result = mysqli_query($con,"SELECT * FROM tblplan");
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['planID'];
    $name = $row['planName'];
    $annual = $row['planAnnualPayment'];
      ?>
    <div class="modal fade" id="updatePlan<?php echo $id ?>"  role="dialog" aria-hidden="true">
      <div class="modal-dialog" style="margin-top: 1em; width: 80%">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">
              Edit Plan
            </h4>
          </div>
          <form class="updateplanform" method="post" autocomplete="off">

            <div class="modal-body tabbable tab-content form-group">

            <div class="tab-pane active fadeInDown animated" id="pageOne<?php echo $id?>">

              <div class="form-group col-xs-12">
                <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Plan Name</label>
                <input type="text" value="<?php echo $name ?>" class="form-control"
                       name="planName" placeholder="Enter Plan Name">
              </div>

              <div class="form-group col-xs-12" align="center">
                <label>Choose Service(s)</label>
              </div>

              <div class="form-group col-xs-6">
                <div class="form-group col-xs-12" align="center">
                  <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Standard Service</label>
                </div>
              <div class="box" style="overflow:auto; height: 270px">
                <div class="box-body" style="overflow-x: hidden">
                  <table class="table table-bordered table-striped table-hover table-responsive standard" width="100%">
                    <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
                    <tr>
                      <th>Standard Service</th>
                      <th>Coverage(s)</th>
                      <th>Select</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    $fetchstandard = mysqli_query($con,"SELECT s1.standardID FROM tblstandard s1 INNER JOIN tblplanstandard p1
                      ON s1.standardID = p1.intStandardID WHERE p1.intPlanID = $id");

                      $standardID = array();
                      while ($row = mysqli_fetch_array($fetchstandard)) {
                        $standardID[] = $row['standardID'];
                      }

                      $standard = mysqli_query($con, "SELECT * FROM tblstandard WHERE status = 'Active' ORDER BY standardName");

                      while($row = mysqli_fetch_array($standard)){

                        $stnd = $row['standardID'];
                        $name = $row['standardName'];

                        $arrayCoverage = array();

                        $result2 = mysqli_query($con, "SELECT c1.coverageName, c1.status FROM tblcoverage c1
                                   INNER JOIN tblStandardCoverage s1 ON s1.intCoverageID=c1.coverageID WHERE s1.intStandardID=$stnd
                                   AND c1.status = 'Active'");

                        while ($row=mysqli_fetch_array($result2)) {
                          $arrayCoverage[]=$row['coverageName'];
                        }

                        echo '<tr>';
                        echo '<td>' . $name . '</td><td>';
                        foreach ($arrayCoverage as $key) {
                          echo "$key </br>";
                        }
                        echo '<td>
                                <input type="checkbox" name="standard[]" value="'.$stnd.'"';

                                foreach ($standardID as $key2) {
                                  if($stnd == $key2){
                                    echo "checked";

                                  }
                                }

                        echo      '>
                              </td>';
                        echo '</tr>';
                      }
              ?>

              </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="form-group col-xs-6">
              <div class="form-group col-xs-12" align="center">
                <label>Additional Service</label>
              </div>
              <div class="box" style="overflow:auto; height: 270px">
                <div class="box-body" style="overflow-x: hidden">
                  <table class="table table-bordered table-striped table-hover table-responsive additional" width="100%">
                  <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
                    <tr>
                      <th>Additional Service</th>
                      <th>Coverage(s)</th>
                      <th>Select</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    $fetchadditional = mysqli_query($con,"SELECT a1.additionalID FROM tbladditional a1 INNER JOIN tblplanadditional p1
                                                  ON a1.additionalID = p1.intAdditionalID WHERE p1.intPlanID = $id");

                      $additionalID = array();
                        while ($row = mysqli_fetch_array($fetchadditional)) {
                          $additionalID[] = $row['additionalID'];
                      }

                      $additional = mysqli_query($con, "SELECT * FROM tbladditional WHERE status = 'Active' ORDER BY additionalName ASC");

                        while($row = mysqli_fetch_array($additional)){

                          $add = $row['additionalID'];
                          $name = $row['additionalName'];

                          $arrayCoverage = array();

                          $result2 = mysqli_query($con, "SELECT c1.coverageName FROM tblcoverage c1
                                     INNER JOIN tbladditionalcoverage a1 ON a1.intCoverageID=c1.coverageID WHERE a1.intAdditionalID=$add");

                          while ($row=mysqli_fetch_array($result2)) {
                            $arrayCoverage[]=$row['coverageName'];
                          }

                            echo '<tr>';
                            echo '<td>' . $name . '</td><td>';
                            foreach ($arrayCoverage as $key) {
                              echo "$key </br>";
                            }
                            echo '<td>
                                    <input type="checkbox" name="addon[]" value="'.$add.'"';

                                    foreach ($additionalID as $key) {
                                      if($add == $key){
                                        echo "checked";

                                      }
                                    }

                            echo      '>
                                  </td>';
                            echo '</tr>';
                        }
              ?>
              </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="form-group col-xs-12">
              <p class="pull-right" style="color: red; font-size: 15px; font-style: italic">
                Note: All fields with <span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> are Required</p>
            </div>

              <a href="#pageTwo<?php echo $id?>" data-toggle="tab" class="btn btn pull-right">
                <button type="button" class="btn btn-primary pull-right">Next</button>
              </a>

            <a href="#" class="btn btn pull-left">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </a>

            </div>

            <div class="tab-pane  fadeInDown animated" id="pageTwo<?php echo $id?>">

              <div class="form-group col-xs-12" align="center">
                <label>Pre Existing Condition</label>
              </div>

              <div class="form-group col-xs-12">
                <div class="box" style="overflow:auto; height: 300px">
                  <div class="box-body" style="overflow-x: hidden">
                    <table class="table table-bordered table-striped table-hover table-responsive pec" width="100%">
                      <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
                      <tr>
                        <th>Pre Existing Condition</th>
                        <th>Description</th>
                        <th>Select</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      $fetchpec = mysqli_query($con,"SELECT e1.pecID FROM tblpec e1 INNER JOIN tblplanpec p1
                                                    ON e1.pecID = p1.intPECID WHERE p1.intPlanID = $id");

                        $pecID = array();
                          while ($row = mysqli_fetch_array($fetchpec)) {
                            $pecID[] = $row['pecID'];
                        }

                        $pec = mysqli_query($con, "SELECT * FROM tblpec WHERE status = 'Active' ORDER BY pecName ASC");

                          while($row = mysqli_fetch_array($pec)){

                            $pre = $row['pecID'];
                            $name = $row['pecName'];
                            $desc = $row['pecDesc'];

                            echo '<tr>';
                            echo '<td>' . $name . '</td>';
                            echo '<td>' . $desc . '</td>';
                            echo '<td>
                                    <input type="checkbox" name="pec[]" value="'.$pre.'"';

                                    foreach ($pecID as $key) {
                                      if($pre == $key){
                                        echo "checked";

                                      }
                                    }

                            echo      '>
                                  </td>';
                            echo '</tr>';
                          }
                ?>
                </tbody>
                    </table>
                  </div>
                </div>

              </div>

              <div class="form-group col-xs-12">
                <p class="pull-right" style="color: red; font-size: 15px; font-style: italic">Note: This field is Optional</p>
              </div>

              <a href="#pageThree<?php echo $id?>" data-toggle="tab" class="btn btn pull-right">
                <button type="button" class="btn btn-primary pull-right">Next</button>
              </a>

            <a href="#pageOne<?php echo $id?>" data-toggle="tab" class="btn btn pull-left">
              <button type="button" class="btn btn-danger">Back</button>
            </a>

            </div>

            <div class="tab-pane  fadeInDown animated" id="pageThree<?php echo $id?>">

              <div class="form-group col-xs-12">
                <div class="form-group col-xs-12" align="center">
                  <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Membership Type</label>
                </div>
                <div class="box" style="overflow:auto; height: 240px">
                  <div class="box-body" style="overflow-x: hidden">
                    <table class="table table-bordered table-striped table-hover table-responsive membership" width="100%">
                      <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
                      <tr>
                        <th>Membership Type Name</th>
                        <th>Description</th>
                        <th>Select</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      $fetchtype = mysqli_query($con, "SELECT m1.membershipID FROM tblmembershiptype m1
                        INNER JOIN tblplantype p3 ON m1.membershipID = p3.intTypeID WHERE p3.intPlanID = $id");

                        $typeID = array();
                        while ($r = mysqli_fetch_array($fetchtype)) {
                          $typeID[] = $r['membershipID'];
                        }

                        $type = mysqli_query($con, "SELECT * FROM tblmembershiptype WHERE status = 'Active' ORDER by membershipName");

                        while($row = mysqli_fetch_array($type)){

                          $member = $row['membershipID'];
                          $name = $row['membershipName'];
                          $desc = $row['membershipDesc'];

                          echo '<tr>';
                          echo '<td>' . $name . '</td>';
                          echo '<td>' . $desc . '</td>';
                          echo '<td>
                                  <input type="checkbox" name="membership[]" value="'.$member.'"';

                                  foreach ($typeID as $key) {
                                    if($member == $key){
                                      echo "checked";

                                    }
                                  }

                          echo      '>
                                </td>';
                          echo '</tr>';
                        }
                ?>
                </tbody>
                </table>
                </div>
                </div>
            </div>

            <div class="form-group col-xs-12">

              <div class="form-group col-xs-6">
                <?php
                $fetchlimit = mysqli_query($con,"SELECT a1.planAmountLimit, a1.planLimitID FROM tblplanlimit a1 INNER JOIN tblplanamountlimit p1
                                              ON a1.planLimitID = p1.intPlanLimitID WHERE p1.intPlanID = $id");
                        while ($row = mysqli_fetch_array($fetchlimit)) {
                          $limit = $row['planAmountLimit'];
                          $pid = $row['planLimitID'];
                      }
                ?>
                <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Maximum Benefit Limit</label>
                <input type="text" value="<?php echo number_format($limit,2) ?>" class="form-control planMaximum" name="planMaximum" id="planMaximum<?php echo $id?>" onclick="commaformat(<?php echo $id?>);">
                <input type="hidden"  name="pid" value="<?php echo $pid ?>">
              </div>

              <div class="form-group col-xs-6">
                <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Annual Payment</label>
                <input type="text" value="<?php echo number_format($annual,2) ?>" class="form-control planAnnual" id="planAnnual<?php echo $id ?>" name="planAnnual" onclick="commaformat(<?php echo $id?>)">
              </div>

              <div class="col-xs-6">
              <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Hospital Type</label>
              <div class="radio">
                <?php

                    $fetchtype = mysqli_query($con, "SELECT h1.hospitalTypeID FROM tblhospitaltype h1
                            INNER JOIN tblplanhospitaltype h2 ON h1.hospitalTypeID = h2.intHospitalTypeID WHERE h2.intPlanID = $id");

                      $hospitalTypeID = array();
                        while ($row = mysqli_fetch_array($fetchtype)) {
                          $hospitalTypeID[] = $row['hospitalTypeID'];
                      }

                      $type = mysqli_query($con,"SELECT * FROM tblhospitaltype");

                        while($row = mysqli_fetch_array($type)){

                          $hospitalType = $row['hospitalType'];
                          $hid = $row['hospitalTypeID'];

                          echo "<label>";
                          echo "<input type=\"checkbox\" name=\"hospital[]\"
                                 value=\"$hid\"";

                                 foreach ($hospitalTypeID as $key2) {
                                   if($hid == $key2){
                                     echo "checked";

                                   }
                                 }
                         echo "> $hospitalType";
                         echo "</label>";
                        }
                ?>
              </div>
            </div>

              <div class="form-group col-xs-6">
                <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Status</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="status" value="Active" checked>
                    Active
                  </label>&nbsp;&nbsp;&nbsp;
                  <label>
                    <input type="radio"  name="status"  value="Inactive">
                    Inactive
                  </label>
                </div>
              </div>

            </div>

            <div class="form-group col-xs-12">
              <p class="pull-right" style="color: red; font-size: 15px; font-style: italic">
                Note: All fields with <span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> are Required</p>
            </div>

            <a href="#" class="btn btn pull-right">
              <input type="submit" class="btn btn-success" name="btnUpdate" value="Edit">
              <input type="hidden"  name="id" value="<?php echo $id ?>">
            </a>

          <a href="#pageTwo<?php echo $id?>" data-toggle="tab" class="btn btn pull-left">
            <button type="button" class="btn btn-danger">Back</button>
          </a>

            </div>


          </div>
          <div class="modal-footer">
          </form>
          </div>
        </div>
      </div>
    </div>
<?php } ?>

<?php

if(isset($_POST['btnUpdate'])){

  require 'parts/php/post/plan/btnUpdate.php';

}

?>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>

$(function () {

  $(".standard").DataTable({
    "lengthChange": true
  });

  $(".additional").DataTable({
    "lengthChange": true
  });

  $(".pec").DataTable({
    "lengthChange": true
  });

  $(".membership").DataTable({
    "lengthChange": true
  });

});

</script>

<!-- ADDING COMMAS IN INPUT FIELDS -->
    <script type="text/javascript" src="plugins/comma/jquery.number.js"></script>
    <script type="text/javascript">

    function commaformat(id){
        // Set up the number formatting.

        $('#number_container').slideDown('fast');

        $('#planMaximum'+id).on('change',function(){
          console.log('Change event.');
          var val = $('#planMaximum'+id).val();
          $('#the_number').text( val !== '' ? val : '(empty)' );
        });

        $('#planMaximum'+id).change(function(){
          console.log('Second change event...');
        });

        $('#planMaximum'+id).number( true, 2 );

      $('#planAnnual'+id).on('change',function(){
        console.log('Change event.');
        var val = $('#planAnnual'+id).val();
        $('#the_number').text( val !== '' ? val : '(empty)' );
      });

      $('#planAnnual'+id).change(function(){
        console.log('Second change event...');
      });

      $('#planAnnual'+id).number( true, 2 );
    }

</script>
    <!-- END -->
