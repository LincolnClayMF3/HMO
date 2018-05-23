<?php
$result = mysqli_query($con,"SELECT * FROM tblhospitalmaintenance");
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['hospitalMainID'];
    $name = $row['hospitalMainName'];
    $address = $row['hospitalMainAddress'];
    $coordinator = $row['hospitalMainCoordinator'];
    $type = $row['hospitalSpecification'];
    $telephone = $row['hospitalMainTelephone'];
    $mobile = $row['hospitalMainMobile'];
    $email = $row['hospitalMainEmail'];
    $entry = $row['hospitalEffectivityDate'];
    $end = $row['hospitalEndContract'];
    $status1 = $row['status'];

     ?>
  <div class="modal fade" id="viewHospital<?php echo $id ?>" role="dialog" style="width: 100%" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top: 1em; margin-left: 3em">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" aria-hidden="true" onclick="reset()">&times;</button>
          <h4 class="modal-title">
            View Hospital
          </h4>
        </div>
        <div class="modal-body">
          <form role="form" method="get" target="_blank" action="parts/modals/contract/hospital/contract.php">
          <div class="form-group col-xs-6">
            <label>Hospital Name</label>

            <p><?php echo $name ?></p>
          </div>

          <div class="form-group col-xs-6">
            <label>Region</label>
            <?php
            $allRegion = mysqli_query($con, "SELECT h1.hospitalRegion, h1.hospitalMainID,
                         r1.regionName, r1.regionID FROM tblhospitalmaintenance h1
                         INNER JOIN tblregion r1 ON r1.regionID = h1.hospitalRegion
                         WHERE h1.hospitalMainID = '$id'");
              while ($row = mysqli_fetch_array($allRegion)) {
                $region = $row['regionName'];
              }
            ?>
            <p><?php echo $region ?></p>
          </div>

          <div class="form-group col-xs-6">
            <label>Hospital Address</label>
            <p><?php echo $address ?></p>
          </div>


          <div class="form-group col-xs-6">
            <label>Hospital Coordinator</label>
            <p><?php echo $coordinator ?></p>
          </div>

          <div class="form-group col-xs-12">
            <div class="col-xs-4">
              <label style="font-style: italic">Telephone</label>
            <p><?php echo $telephone ?></p>
          </div>
          <div class="col-xs-4">
            <label style="font-style: italic">Mobile</label>
            <p><?php echo $mobile ?></p>
          </div>
            <div class="col-xs-4">
              <label style="font-style: italic">Email</label>
            <p><?php echo $email ?></p>
          </div>
          </div>

          <div class="form-group col-xs-4">
            <label>Entry Date</label>
            <?php
            $convertEntry = date("M jS, Y", strtotime("$entry"));
            ?>
            <p><?php echo $convertEntry ?></p>
          </div>

          <div class="form-group col-xs-4">
            <label>Hospital Specification</label>
            <p><?php echo $type ?></p>
          </div>

          <div class="form-group col-xs-4">
            <label>Status</label>
            <p><?php echo $status1 ?></p>
          </div>

          <div class="form-group col-xs-12">
            <label>Contract Specification</label>
            <?php
            $contract = mysqli_query($con, "SELECT hospitalEndContract, hospitalMainID FROM tblhospitalmaintenance WHERE hospitalMainID = '$id'");

            while ($row = mysqli_fetch_array($contract)) {
              $specs = $row['hospitalEndContract'];
            }

            if($specs == "Open Ended Contract"){
              echo "<p align=\"center\">Open Ended Contract</p>";
            }
            else {
              echo "<p align=\"center\">Non-Permanent Basis</p>";
              echo "<p align=\"center\">End of Contract</p>";
              $convertEnd = date("M jS, Y", strtotime("$specs"));
              echo "<p align=\"center\">$convertEnd</p>";
            }


            ?>

          </div>

          <input type="hidden" value="<?php echo $name ?>" name="name">
          <input type="hidden" value="<?php echo $region ?>" name="region">
          <input type="hidden" value="<?php echo $coordinator ?>" name="coordinator">
          <input type="hidden" value="<?php echo $type ?>" name="type">
          <input type="hidden" value="<?php echo $mobile ?>" name="mobile">
          <input type="hidden" value="<?php echo $telephone ?>" name="telephone">
          <input type="hidden" value="<?php echo $email ?>" name="email">
          <input type="hidden" value="<?php echo $address ?>" name="address">
          <input type="hidden" value="<?php echo $entry ?>" name="entry">
          <input type="hidden" value="<?php echo $specs ?>" name="end">
          <input type="hidden" value="<?php echo $id ?>" name="id">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel" >Close</button>
          <input type="submit" class="btn btn-primary pull-right" name="btnGenerate" value="Generate Contract">
        </form>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
