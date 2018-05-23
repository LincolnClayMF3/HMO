<?php
$result = mysqli_query($con,"SELECT * FROM tblplan");
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['planID'];
    $name = $row['planName'];
    $annual = $row['planAnnualPayment'];
    $status1 = $row['status'];
      ?>
    <div class="modal fade" id="viewPlan<?php echo $id ?>"  role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">
              View Plan
            </h4>
          </div>
          <form class="updateplanform" method="post" autocomplete="off">

          <div class="modal-body">

            <div class="form-group col-xs-12">

              <div class="form-group col-xs-3">
                <label> Plan Name</label>
                <p><?php echo $name ?></p>
              </div>


              <!-- <div class="form-group col-xs-3">
                <label> Room</label>
                <?php

                $fetchroom = mysqli_query($con, "SELECT r1.roomID, r1.roomName FROM tblroom r1
                        INNER JOIN tblplanroom p2 ON r1.roomID = p2.intRoomID WHERE p2.intPlanID = $id");
                while ($r = mysqli_fetch_array($fetchroom)) {
                  $room = $r['roomName'];
                }
                ?>
                <p><?php echo $room ?></p>
              </div> -->

              <div class="form-group col-xs-3">
                <label> Hospital Type</label>
                <!-- <p><?php echo $hospital ?></p> -->
              </div>

              <div class="form-group col-xs-3">
                <label> Status</label>
                <p><?php echo $status1 ?></p>
              </div>

              <div class="form-group col-xs-4">
                <?php
                $fetchlimit = mysqli_query($con,"SELECT a1.planAmountLimit, a1.planLimitID FROM tblplanlimit a1 INNER JOIN tblplanamountlimit p1
                  ON a1.planLimitID = p1.intPlanLimitID WHERE p1.intPlanID = $id");
                  while ($row = mysqli_fetch_array($fetchlimit)) {
                    $limit = $row['planAmountLimit'];
                    $pid = $row['planLimitID'];
                  }
                  ?>
                  <label> Plan Amount Limit</label>
                  <p><?php echo "Php ".number_format($limit,2) ?></p>
                </div>

                <!-- <div class="form-group col-xs-4">
                  <label> Payment Duration</label>
                  <p><?php echo $years ?></p>
                </div> -->

                <div class="form-group col-xs-4">
                  <label> Annual Payment</label>
                  <p><?php echo "Php ".number_format($annual,2) ?></p>
                </div>

            </div>



            <div class="form-group col-xs-12">

              <div class="form-group col-xs-3">
                <label><small>Membership Type(s)</small></label>
                <div class="col-xs-12" style="margin-top:.5em; margin-bottom: .5em; overflow-y:auto; height:100px;">
                <?php

                $fetchtype = mysqli_query($con, "SELECT m1.membershipID, m1.membershipName FROM tblmembershiptype m1
                  INNER JOIN tblplantype p3 ON m1.membershipID = p3.intTypeID WHERE p3.intPlanID = $id");

                  $type = array();
                  while ($r = mysqli_fetch_array($fetchtype)) {
                    $type[] = $r['membershipName'];
                  }
                  foreach ($type as $key) {
                    echo "<p>$key</p>";
                  }
                  ?>
                </div>
              </div>

              <div class="form-group col-xs-3">
                    <label><small>Standard Services</small></label>
                    <div class="col-xs-12" style="margin-top:.5em; margin-bottom: .5em; overflow-y:auto; height:100px;">
                  <?php

                  $fetchstandard = mysqli_query($con,"SELECT s1.standardID, s1.standardName FROM tblstandard s1 INNER JOIN tblplanstandard p1
                    ON s1.standardID = p1.intStandardID WHERE p1.intPlanID = $id");

                    $standard = array();
                    while ($row = mysqli_fetch_array($fetchstandard)) {
                      $standard[] = $row['standardName'];
                    }

                    foreach ($standard as $key) {
                      echo "<p>$key</p>";
                    }

                    ?>
                  </div>
              </div>

              <div class="form-group col-xs-3">
                   <label><small>Additional Services</small></label>
                   <div class="col-xs-12" style="margin-top:.5em; margin-bottom: .5em; overflow-y:auto; height:100px;">
                     <?php

                     $fetchadditional = mysqli_query($con,"SELECT a1.additionalID, a1.additionalName FROM tbladditional a1 INNER JOIN tblplanadditional p1
                                                   ON a1.additionalID = p1.intAdditionalID WHERE p1.intPlanID = $id");

                       $additional = array();
                         while ($row = mysqli_fetch_array($fetchadditional)) {
                           $additional[] = $row['additionalName'];
                       }

                       if(!empty($additional)){
                         foreach ($additional as $key) {
                           echo "<p>$key</p>";
                         }
                       }
                       else {
                         echo "<p>None</p>";
                       }

                       ?>
                     </div>
              </div>



              <div class="form-group col-xs-3">
                   <label><small>Pre Existing Condition</small></label>
                   <div class="col-xs-12" style="margin-top:.5em; margin-bottom: .5em; overflow-y:auto; height:100px;">
                     <?php

                     $fetchpec = mysqli_query($con,"SELECT e1.pecID, e1.pecName FROM tblpec e1 INNER JOIN tblplanpec p1
                                                   ON e1.pecID = p1.intPECID WHERE p1.intPlanID = $id");

                       $pec = array();
                         while ($row = mysqli_fetch_array($fetchpec)) {
                           $pec[] = $row['pecName'];
                       }

                       if(!empty($pec)){
                         foreach ($pec as $key) {
                           echo "<p>$key</p>";
                         }
                       }
                       else {
                         echo "<p>None</p>";
                       }
                       ?>
                     </div>
              </div>

            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger pull-right" data-dismiss="modal" name="btnCancel">Close</button>
          </form>
          </div>
        </div>
      </div>
    </div>
<?php } ?>
