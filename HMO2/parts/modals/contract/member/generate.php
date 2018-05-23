<?php

$member = mysqli_query($con, "SELECT * FROM tblmembertransaction");

while ($row = mysqli_fetch_array($member)) {
  $id = $row['memberTransID'];
  $memberName = $row['memberTransName'];
  $age = $row['memberTransAge'];
  $bday = $row['memberTransBday'];
  $mode = $row['memberMode'];
  $freq = $row['memberFrequency'];
  $height = $row['memberTransHeight'];
  $weight = $row['memberTransWeight'];
  $address = $row['memberTransAddress'];
  $gender = $row['memberGender'];
  $telephone = $row['memberTransTelephone'];
  $mobile = $row['memberTransMobile'];
  $specs = $row['memberSpecification'];
  $civil = $row['memberCivilStatus'];
  $annual = $row['memberAnnualPayment'];
  $email = $row['memberTransEmail'];
  $occupation = $row['memberTransOccupation'];
  $end = $row['memberEndContract'];
  $entry = $row['memberEffectivityDate'];
  $viewStatus = $row['status'];
  $amount = $row['memberTransAmountToPay'];
  $limit = $row['memberTransPlanAmount'];

?>
<div class="modal fade" id="viewMember<?php echo $id ?>" role="dialog" style="width: 100%" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content" style="margin-top: 4em; margin-left: -5em; margin-right: -7em">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
          View Member
        </h4>
      </div>
      <form method="get" target="_blank" action="parts/modals/contract/member/contract.php">
      <div class="modal-body tabbable tab-content form-group">
      <div class="tab-pane active fadeInDown animated" id="member1<?php echo $id ?>">
        <div class="form-group col-xs-6">
          <p style="font-style: italic" class="pull-left">Member Details</p>
        </div>

        <div class="form-group col-xs-6">
          <p style="font-style: italic" class="pull-left">Plan Details</p>
        </div>

        <div class="form-group col-xs-6">
          <div class="form-group col-xs-4">
          <p><strong>Name: </strong></p>
          <p><strong>Birthdate: </strong></p>
          <p><strong>Age: </strong></p>
          <p><strong>Height: </strong></p>
          <p><strong>Weight: </strong></p>
          <p><strong>Gender: </strong></p>
          <p><strong>Civil Status: </strong></p>
          <p><strong>Address: </strong></p>
          <p><strong>Occupation: </strong></p>
          <p><strong>Telephone: </strong></p>
          <p><strong>Mobile: </strong></p>
          <p><strong>Email: </strong></p>
          </div>

          <div class="form-group col-xs-6">
            <p><?php echo $memberName ?></p>
            <p><?php echo $bday ?></p>
            <p><?php echo $age ?></p>
            <p><?php echo $height ?></p>
            <p><?php echo $weight ?></p>
            <p><?php echo $gender ?></p>
            <p><?php echo $civil ?></p>
            <p><?php echo $address ?></p>
            <p><?php echo $occupation ?></p>
            <p><?php echo $telephone ?></p>
            <p><?php echo $mobile ?></p>
            <p><?php echo $email ?></p>
          </div>
        </div>

        <div class="form-group col-xs-6">
          <div class="form-group col-xs-6">
          <p><strong>Principal: </strong></p>
          <p><strong>Membership Type: </strong></p>
          <p><strong>Company: </strong></p>
          <p><strong>Plan: </strong></p>
          <p><strong>Plan Amount: </strong></p>
          <p><strong>Annual Payment: </strong></p>
          <p><strong>Frequency: </strong></p>
          <p><strong>Amount to be Paid: </strong></p>
          <p><strong>Mode of Payment: </strong></p>
          <p><strong>Status: </strong></p>
          <p><strong>Entry Date: </strong></p>
          <p><strong>End of Contract: </strong></p>
          </div>

          <div class="form-group col-xs-6">
            <p><?php echo $specs ?></p>

            <?php
            $type = mysqli_query($con, "SELECT m1.membershipName FROM tblmembershiptype m1
                    INNER JOIN tblmembertype m2 ON m1.membershipID = m2.intMembershipID WHERE m2.intMemberID = $id");
            while ($r = mysqli_fetch_array($type)) {
              $membershipName = $r['membershipName'];
            }
            ?>
            <p><?php echo $membershipName ?></p>

            <?php
            $company = mysqli_query($con, "SELECT cm1.companyMainName FROM tblcompanymaintenance cm1
                    INNER JOIN tblmembercompany cm2 ON cm1.companyMainID = cm2.intCompanyID WHERE cm2.intMemberID = $id");
            while ($r = mysqli_fetch_array($company)) {
              $memberCompany = $r['companyMainName'];
            }

            if(!empty($memberCompany)){
              $company = $memberCompany;
              echo "<p>$company</p>";
            }
            else {
              $company = "None";
              echo "<p>$company</p>";
            }
            ?>

            <?php
            $plan = mysqli_query($con, "SELECT p1.planName FROM tblplan p1
                    INNER JOIN tblmemberplan p2 ON p1.planID = p2.intPlanID WHERE p2.intMemberID = $id");
            while ($r = mysqli_fetch_array($plan)) {
              $memberPlan = $r['planName'];
            }
            ?>
            <p><?php echo $memberPlan ?></p>

            <p>Php <?php echo number_format($limit,2) ?></p>
            <p>Php <?php echo number_format($annual,2) ?></p>
            <p><?php echo $freq ?></p>
            <p>Php <?php echo number_format($amount,2) ?></p>
            <p><?php echo $mode ?></p>
            <p><?php echo $viewStatus ?></p>

            <?php
            $convertEnd = date("M jS, Y", strtotime("$end"));
            $convertEntry = date("M jS, Y", strtotime("$entry"));
            ?>
            <p><?php echo $convertEntry ?></p>
            <p><?php echo $convertEnd ?></p>
          </div>
        </div>


        <a href="#plan1<?php echo $id ?>" data-toggle="tab" class="btn btn pull-right">
          <button type="button" class="btn btn-primary pull-right">Next</button>
        </a>

      <a href="#" class="btn btn pull-left">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </a>
  </div>


<div class="tab-pane fadeInDown animated" id="plan1<?php echo $id ?>">
  <div class="form-group col-xs-6">
    <p style="font-style: italic" class="pull-left">Payment Schedule (<?php echo $freq?>)</p>
  </div>

  <div class="form-group col-xs-6">
    <p style="font-style: italic" class="pull-left">Pre Existing Condition</p>
  </div>

  <div class="form-group col-xs-6">
    <?php
    $frequency = "";

    if($freq == "Monthly"){
      $frequency = "1";
    }
    elseif ($freq == "Quarterly") {
      $frequency = "3";
    }
    elseif ($freq == "Semi-Annual") {
      $frequency = "6";
    }
    else {
      $frequency = "12";
    }

    $start = $month = strtotime($entry);
    $last = strtotime($end);
    ?>
    <div style="overflow-y:auto; height: 150px">
      <?php
      while($month < $last){
      echo  date('F Y', $month).'</br>';
        $month = strtotime("+$frequency month", $month);
      }
      ?>
    </div>

  </div>

  <div class="form-group col-xs-6">
    <div style="overflow-y:auto; height: 150px">
      <table class="table table-bordered table-striped table-hover table-responsive"  align= "center">
      <?php
      $pec = mysqli_query($con, "SELECT pec1.pecName, pec1.pecDesc FROM tblpec pec1
              INNER JOIN tblmemberpec pec2 ON pec1.pecID = pec2.intPECMemberID WHERE pec2.intMemberID = $id");

        while ($row = mysqli_fetch_array($pec)) {
          $name = $row['pecName'];
          $desc = $row['pecDesc'];

          if(!empty($name) && !empty($desc)){
            echo "<tr>
                      <td>$name</td>
                      <td>$desc</td>
                  </tr>";
            }
        }
      ?>
    </table>
    </div>
  </div>

  <div class="form-group col-xs-12">
    <p style="font-style: italic" align="center">Dependents</p>
  </div>

  <div class="form-group col-xs-12">
    <div style="overflow-y:auto; height: 150px">
      <table class="table table-bordered table-striped table-hover table-responsive"  align= "center">
        <tr>
          <th>Name</th>
          <th>Birthday</th>
          <th>Relationship</th>
          <th>Civil Status</th>
        </tr>
        <?php
        $dependent = mysqli_query($con, "SELECT d1.dependentName, d1.dependentBday, d1.dependentRelationship, d1.dependentCivilStatus FROM tbldependents d1
          INNER JOIN tblmemberdependents d2 ON d1.dependentID = d2.intDependentID WHERE d2.intMemberID = $id");

          while ($row = mysqli_fetch_array($dependent)) {
            $dependentName = $row['dependentName'];
            $dependentBday = $row['dependentBday'];
            $relationship = $row['dependentRelationship'];
            $dependentCivil = $row['dependentCivilStatus'];
            $convertBday = date("M jS, Y", strtotime("$dependentBday"));

            echo "<tr>
            <td>$dependentName</td>
            <td>$convertBday</td>
            <td>$relationship</td>
            <td>$dependentCivil</td>
            </tr>";
          }
          ?>
        </table>
    </div>
  </div>

  <a href="#member1<?php echo $id ?>" data-toggle="tab" class="btn btn pull-left">
    <button type="button" class="btn btn-danger pull-left">Back</button>
  </a>

    <input type="submit" id="generate<?php echo $id?>" class="btn btn-primary pull-right" name="btnGenerate" value="Generate Contract">

    <input type="hidden" value="<?php echo $memberName?>" name="name">
    <input type="hidden" value="<?php echo $bday?>" name="bday">
    <input type="hidden" value="<?php echo $age?>" name="age">
    <input type="hidden" value="<?php echo $height?>" name="height">
    <input type="hidden" value="<?php echo $weight?>" name="weight">
    <input type="hidden" value="<?php echo $gender?>" name="gender">
    <input type="hidden" value="<?php echo $civil?>" name="civil">
    <input type="hidden" value="<?php echo $address?>" name="address">
    <input type="hidden" value="<?php echo $occupation?>" name="occupation">
    <input type="hidden" value="<?php echo $telephone?>" name="telephone">
    <input type="hidden" value="<?php echo $mobile?>" name="mobile">
    <input type="hidden" value="<?php echo $email?>" name="email">
    <input type="hidden" value="<?php echo $specs ?>" name="specs">
    <input type="hidden" value="<?php echo $membershipName ?>" name="type">
    <input type="hidden" value="<?php echo $company?>" name="company">
    <input type="hidden" value="<?php echo $memberPlan?>" name="plan">
    <input type="hidden" value="<?php echo $limit ?>" name="limit">
    <input type="hidden" value="<?php echo $annual ?>" name="annual">
    <input type="hidden" value="<?php echo $freq ?>" name="frequency">
    <input type="hidden" value="<?php echo $mode ?>" name="mode">
    <input type="hidden" value="<?php echo $amount ?>" name="amount">
    <input type="hidden" value="<?php echo $viewStatus ?>" name="status">
    <input type="hidden" value="<?php echo $entry ?>" name="entry">
    <input type="hidden" value="<?php echo $end ?>" name="end">
    <input type="hidden" value="<?php echo $id ?>" name="id">

</div>
</form>
</div>
      <div class="modal-footer">
      </div>
  </div>
</div>
</div>
<?php } ?>


<script>
jQuery(function(){
   jQuery('#generate<?php echo $id?>').click();
});
</script>
