<?php
$result = mysqli_query($con,"SELECT * FROM tblcompanymaintenance");
  while ($row = mysqli_fetch_array($result)) {

    $contractEnded = $row['companyEndContract'];
    $id = $row['companyMainID'];

     ?>
  <div class="modal fade" id="earlyRenewCompany<?php echo $id ?>" style="z-index:1051" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top: 10em; margin-left: 3em">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Renew Company</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="post">

            <div class="col-xs-12">
             <div class="form-group">
               <div class="col-md-12">
                 <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Preferred Plan</label>
               </div>
               <div class="col-xs-12" style="margin-bottom: .5em; overflow-y:auto;
                 box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444; height:100px;">
                   <?php

                   $fetchplan = mysqli_query($con, "SELECT p1.planID FROM tblplan p1
                           INNER JOIN tblcompanyplan c2 ON p1.planID = c2.intPlanID WHERE c2.intCompanyID = $id");

                     $planID = array();
                       while ($row = mysqli_fetch_array($fetchplan)) {
                         $planID[] = $row['planID'];
                     }

                     $plan = mysqli_query($con, "SELECT p1.planID, p1.planName, p1.status,
                                                m1.membershipName, m1.membershipID FROM tblplan p1
                                   INNER JOIN tblplantype p2 ON p1.planID = p2.intPlanID
                                   INNER JOIN tblmembershiptype m1 ON m1.membershipID = p2.intTypeID
                                   WHERE p1.status = 'Active' AND m1.membershipName = 'Corporate' ORDER BY planName ASC");

                       while($row = mysqli_fetch_array($plan)){

                         $pid = $row['planID'];
                         $name = $row['planName'];

                         echo "<label><small>";
                         echo "<input type=\"checkbox\" name=\"planArray[]\"
                                value=\"$pid\"";

                                foreach ($planID as $key) {
                                  if($pid == $key){
                                    echo "checked";

                                  }
                                }
                        echo "> $name";
                        echo "</small></label></br>";
                       }

                     ?>
                 </div>
               </div>
            </div>

            <div class="form-group col-xs-6">
              <label>Contract Ended on</label>
              <input type="date" class="form-control" value="<?php echo $contractEnded ?>" readonly>
            </div>

            <div class="form-group col-xs-6">
              <label>New End of Contract</label>
              <input type="date" class="form-control" name="newEndContract" value="<?php echo $contractEnded ?>" min="<?php echo $contractEnded?>">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel">Close</button>
          <input type="hidden"  name="id" value="<?php echo $id?>">
          <input type="submit" class="btn btn-success" name="btnRenew" value="Renew">
        </form>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

<?php

if(isset($_POST['btnRenew'])){

  require 'parts/php/post/contract/company/btnRenew.php';

}

?>
