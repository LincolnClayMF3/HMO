<?php
$result = mysqli_query($con,"SELECT * FROM tblcompanymaintenance");
  while ($row = mysqli_fetch_array($result)) {

    $id = $row['companyMainID'];
    $names = $row['companyMainName'];
    $address = $row['companyMainAddress'];
    $telephone = $row['companyMainTelephone'];
    $mobile = $row['companyMainMobile'];
    $email = $row['companyMainEmail'];
    $entry = $row['companyEffectivityDate'];
    $end = $row['companyEndContract'];
    $status1 = $row['status'];

    ?>
  <div class="modal fade" id="viewCompany<?php echo $id ?>" role="dialog" style="width: 100%" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top: 3em; margin-left: 3em">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">
            View Company Details
          </h4>
        </div>
        <div class="modal-body">
          <form role="form" method="get" target="_blank" action="parts/modals/contract/company/contract.php">

          <div class="form-group col-xs-6">
            <label>Company Name</label>
            <p><?php echo $names ?></p>
          </div>

          <div class="form-group col-xs-6">
            <label>Company Address</label>
            <p><?php echo $address ?></p>
          </div>

          <div class="form-group col-xs-6">
               <label>Preferred Plan</label>
                 <?php

                 $fetchplan = mysqli_query($con, "SELECT p1.planID, p1.planName FROM tblplan p1
                         INNER JOIN tblcompanyplan c2 ON p1.planID = c2.intPlanID WHERE c2.intCompanyID = $id");

                   $planID = array();
                   $planName = array();
                     while ($row = mysqli_fetch_array($fetchplan)) {
                       $planID[] = $row['planID'];
                       $planName[] = $row['planName'];
                   }

                   $plans = mysqli_query($con, "SELECT * FROM tblplan WHERE status ='Active' ORDER BY planName ASC");

                     while($row = mysqli_fetch_array($plans)){

                       $pid = $row['planID'];
                       $plan = $row['planName'];

                              foreach ($planID as $key) {
                                if($pid == $key){
                                  echo "<p>$plan</p>";

                                }
                              }
                     }

                   ?>
          </div>

          <div class="form-group col-xs-6">
            <label>Contact Details</label>
            <p><?php echo $telephone ?></p>
            <p><?php echo $mobile ?></p>
            <p><?php echo $email ?></p>
          </div>

          <div class="form-group col-xs-4">
            <label>Entry Date</label>
            <?php

            $convertEntry = date("M jS, Y", strtotime("$entry"));

            ?>
            <p><?php echo $convertEntry ?></p>
          </div>

          <div class="form-group col-xs-4">
            <label>End of Contract</label>
            <?php

            if($end != "Open End"){
              $convertEnd = date("M jS, Y", strtotime("$end"));
            }
            else {
              $convertEnd = "Open End";
            }

            ?>
            <p><?php echo $convertEnd ?></p>
          </div>

          <div class="form-group col-xs-4">
            <label>Status</label>
            <p><?php echo $status1 ?></p>
          </div>

          <input type="hidden" value="<?php echo $names ?>" name="name">
          <input type="hidden" value="<?php echo $plan ?>" name="plan">
          <input type="hidden" value="<?php echo $employee ?>" name="employee">
          <input type="hidden" value="<?php echo $type ?>" name="type">
          <input type="hidden" value="<?php echo $mobile ?>" name="mobile">
          <input type="hidden" value="<?php echo $telephone ?>" name="telephone">
          <input type="hidden" value="<?php echo $email ?>" name="email">
          <input type="hidden" value="<?php echo $address ?>" name="address">
          <input type="hidden" value="<?php echo $entry ?>" name="entry">
          <input type="hidden" value="<?php echo $end ?>" name="end">
          <input type="hidden" value="<?php echo $id ?>" name="id">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel">Close</button>
          <input type="submit" class="btn btn-primary pull-right" name="btnGenerate" value="Generate Contract">
        </form>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
