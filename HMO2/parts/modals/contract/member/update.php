<?php

require 'parts/modals/contract/member/delete.php';

$member = mysqli_query($con, "SELECT * FROM tblmembertransaction");

while ($row = mysqli_fetch_array($member)) {
  $id = $row['memberTransID'];
  $specs = $row['memberSpecification'];
  $age = $row['memberTransAge'];
  $freq = $row['memberFrequency'];
  $annual = $row['memberAnnualPayment'];
  $name = $row['memberTransName'];
  $gender = $row['memberGender'];
  $civil = $row['memberCivilStatus'];
  $mode = $row['memberMode'];
  $bday = $row['memberTransBday'];
  $height = $row['memberTransHeight'];
  $weight = $row['memberTransWeight'];
  $address = $row['memberTransAddress'];
  $telephone = $row['memberTransTelephone'];
  $mobile = $row['memberTransMobile'];
  $email = $row['memberTransEmail'];
  $occupation = $row['memberTransOccupation'];
  $end = $row['memberEndContract'];
  $effectivity = $row['memberEffectivityDate'];
  $viewStatus = $row['status'];
  $amount = $row['memberTransAmountToPay'];
  $limit = $row['memberTransPlanAmount'];

?>
<div class="modal fade" id="updateMember<?php echo $id ?>" role="dialog" style="width: 100%" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content" style="margin-top: 7em; margin-left: -5em; margin-right: -7em">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
          Update Member
        </h4>
      </div>
      <div class="modal-body tabbable tab-content form-group">

      <div class="tab-pane active fadeInDown animated" id="member<?php echo $id ?>">
        <div class="form-group col-xs-12">
          <p style="font-style: italic" class="pull-left">Update Member Details</p>
        </div>

        <div class="form-group col-xs-4">
          <label>Member Name</label>
          <input type="text" class="form-control" value="<?php echo $name ?>" >
        </div>

        <div class="form-group col-xs-4">
          <label>Date of Birth</label>
          <input type="text" class="form-control" value="<?php echo $bday ?>" >
        </div>

        <div class="form-group col-xs-4">
          <label>Age</label>
          <input type="text" class="form-control" value="<?php echo $name ?>" >
        </div>

        <div class="form-group col-xs-4">
          <label>Height</label>
          <input type="text" class="form-control" value="<?php echo $height ?>" >
        </div>

        <div class="form-group col-xs-4">
          <label>Weight</label>
          <input type="text" class="form-control" value="<?php echo $weight ?>" >
        </div>

        <div class="form-group col-xs-4">
          <label><span style="color: red">* </span>Gender</label>
          <div class="radio">
            <label>
              <?php

              if($gender == "Male"){
                $male = "checked";
                $female = "";
              }
              else {
                $male = "";
                $female = "checked";
              }
              ?>

              <div class="radio">
                <label>
                  <input type="radio" name="gender" value="Male" <?php echo $male ?>>
                  <!-- <?php echo $gender ?> -->
                  Male
                </label>

                <label>
                  <input type="radio" name="gender" value="Female" <?php echo $female ?>>
                  Female
                </label>
              </div>


            <!-- <input type="text" value="<?php echo $gender ?>"> -->

        </label>
        </div>
      </div>

        <div class="form-group col-xs-4">
          <label>Civil Status</label>
          <?php

          if($civil == "Single"){
            $single = "selected";
            $widowed = "";
            $married = "";
            $separated = "";
          }
          elseif ($civil == "Married") {
            $single = "";
            $widowed = "";
            $married = "selected";
            $separated = "";
          }
          elseif ($civil == "widowed") {
            $single = "";
            $widowed = "selected";
            $married = "";
            $separated = "";
          }
          else {
            $single = "";
            $widowed = "";
            $married = "";
            $separated = "selected";
          }

          ?>
          <select class="form-control" name="memberCivil">
            <option <?php echo $single ?> value="Single">Single</option>
            <option <?php echo $married ?> value="Married">Married</option>
            <option <?php echo $widowed ?> value="Widowed">Widowed</option>
            <option <?php echo $separated ?> value="Separated">Separated</option>
          </select>
        </div>

        <div class="form-group col-xs-4">
          <label>Address</label>
          <input type="text" class="form-control" value="<?php echo $address ?>" >
        </div>

        <div class="form-group col-xs-4">
          <label>Occupation</label>
          <input type="text" class="form-control" value="<?php echo $occupation ?>" >
        </div>

        <div class="form-group col-xs-4">
          <label>Telephone</label>
          <input type="text" class="form-control" value="<?php echo $telephone ?>" >
        </div>

        <div class="form-group col-xs-4">
          <label>Mobile</label>
          <input type="text" class="form-control" value="<?php echo $mobile ?>" >
        </div>

        <div class="form-group col-xs-4">
          <label>Email</label>
          <input type="text" class="form-control" value="<?php echo $email ?>" >
        </div>

        <a href="#plan<?php echo $id ?>" data-toggle="tab" class="btn btn pull-right">
          <button type="button" class="btn btn-primary pull-right">Next</button>
        </a>

      <a href="#" class="btn btn pull-left">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </a>
  </div>


<div class="tab-pane fadeInDown animated" id="plan<?php echo $id ?>">
  <div class="form-group col-xs-12">
    <p style="font-style: italic" class="pull-left">View Plan Details</p>
  </div>

  <div class="form-group col-xs-4">
    <label>Specification</label>
    <input type="text" class="form-control" value="<?php echo $specs ?>" disabled>
  </div>

  <div class="form-group col-xs-4">
    <label>Membership Type</label>
    <?php
    $type = mysqli_query($con, "SELECT m1.membershipName FROM tblmembershiptype m1
            INNER JOIN tblmembertype m2 ON m1.membershipID = m2.intMembershipID WHERE m2.intMemberID = $id");
    while ($r = mysqli_fetch_array($type)) {
      $membershipName = $r['membershipName'];
    }

    ?>
    <input type="text" class="form-control" value="<?php echo $membershipName ?>" disabled>
  </div>

  <div class="form-group col-xs-4">
    <label>Company</label>
    <?php
    $company = mysqli_query($con, "SELECT cm1.companyMainName FROM tblcompanymaintenance cm1
            INNER JOIN tblmembercompany cm2 ON cm1.companyMainID = cm2.intCompanyID WHERE cm2.intMemberID = $id");
    while ($r = mysqli_fetch_array($company)) {
      $memberCompany = $r['companyMainName'];
    }

    if(!empty($memberCompany)){
      echo "<input type=\"text\" class=\"form-control\" value=\"$memberCompany\" disabled>";
    }
    else {
      echo "<input type=\"text\" class=\"form-control\" value=\"None\" disabled>";
    }
    ?>
  </div>

  <div class="form-group col-xs-4">
    <label>Preferred Plan</label>
    <?php
    $plan = mysqli_query($con, "SELECT p1.planName FROM tblplan p1
            INNER JOIN tblmemberplan p2 ON p1.planID = p2.intPlanID WHERE p2.intMemberID = $id");
    while ($r = mysqli_fetch_array($plan)) {
      $memberPlan = $r['planName'];
    }
    ?>
    <input type="text" class="form-control" value="<?php echo $memberPlan ?>" disabled>
  </div>

  <div class="form-group col-xs-4">
    <label>Plan Amount</label>
    <input type="text" class="form-control" value="<?php echo "Php $limit"; ?>" disabled>
  </div>

  <div class="form-group col-xs-4">
    <label>Annual Payment</label>
    <input type="text" class="form-control" value="<?php echo "Php $annual"; ?>" disabled>
  </div>

  <div class="form-group col-xs-4">
    <label>Payment Frequency</label>
    <?php

    if($freq == "Semi Annual"){
      $semi = "selected";
      $quarter = "";
      $monthly = "";
    }
    elseif ($freq == "Quarter") {
      $semi = "";
      $quarter = "selected";
      $monthly = "";
    }
    else {
      $semi = "";
      $quarter = "";
      $monthly = "selected";
    }

    ?>
    <select class="form-control" name="memberFrequency">
      <option value="">--Select Frequency--</option>
      <option <?php echo $semi ?> value="Semi Annual">Semi Annual</option>
      <option <?php echo $quarter ?> value="Quarterly">Quarterly</option>
      <option <?php echo $monthly ?> value="Monthly">Monthly</option>
    </select>
  </div>

  <div class="form-group col-xs-4">
    <label>Amount to be Paid</label>
    <input type="text" class="form-control" value="<?php echo "Php $amount"; ?>" disabled>
  </div>

  <div class="form-group col-xs-4">
    <label>Mode of Payment</label>
    <?php
    if($mode == "Cash"){
      $cash = "checked";
      $credit = "";
    }
    else {
      $cash = "";
      $credit = "checked";
    }
    ?>
    <div class="radio">
    <label>
    <input type="radio" name="mode" value="Cash" <?php echo $cash ?>>
    Cash
  </label>

    <label>
    <input type="radio" name="mode" value="Credit" <?php echo $credit ?>>
    Credit
  </label>
  </div>

  </div>

  <div class="form-group col-xs-4">
    <label>Status</label>
    <input type="text" class="form-control" value="<?php echo $viewStatus ?>" disabled>
  </div>

  <div class="form-group col-xs-4">
    <label>Effectivity Date</label>
    <input type="text" class="form-control" value="<?php echo $effectivity ?>" disabled>
  </div>

  <div class="form-group col-xs-4">
    <label>End of Contract</label>
    <input type="text" class="form-control" value="<?php echo $end ?>" disabled>
  </div>

  <a href="#pec<?php echo $id ?>" data-toggle="tab" class="btn btn pull-right">
    <button type="button" class="btn btn-primary pull-right">Next</button>
  </a>

  <a href="#member<?php echo $id ?>" data-toggle="tab" class="btn btn pull-left">
    <button type="button" class="btn btn-danger pull-right">Back</button>
  </a>
</div>

<div class="tab-pane fadeInDown animated" id="pec<?php echo $id ?>">
  <div class="form-group col-xs-12">
    <p style="font-style: italic" class="pull-left">View Pre Existing Condition</p>
  </div>

  <div class="form-group col-xs-12">
    <div class="box" style="overflow:auto; height: 250px">
    <table class="table table-bordered"  align= "center">
      <tr>
        <th>Pre Existing Condition</th>
        <th>Description</th>
      </tr>
      <?php
      $pec = mysqli_query($con, "SELECT pec1.pecName, pec1.pecDesc FROM tblpec pec1
              INNER JOIN tblmemberpec pec2 ON pec1.pecID = pec2.intPECMemberID WHERE pec2.intMemberID = $id");

        while ($row = mysqli_fetch_array($pec)) {
          $name = $row['pecName'];
          $desc = $row['pecDesc'];

        echo "<tr>
                  <td>$name</td>
                  <td>$desc</td>
              </tr>";
        }
      ?>
    </table>
  </div>
</div>
  <a href="#dependents<?php echo $id ?>" data-toggle="tab" class="btn btn pull-right">
    <button type="button" class="btn btn-primary">Next</button>
  </a>

  <a href="#plan<?php echo $id ?>" data-toggle="tab" class="btn btn pull-left">
    <button type="button" class="btn btn-danger">Back</button>
  </a>
</div>

<div class="tab-pane fadeInDown animated" id="dependents<?php echo $id ?>">
  <div class="form-group col-xs-12">
    <p style="font-style: italic" class="pull-left">View Dependents</p>
  </div>

<div class="form-group col-xs-12" style="overflow:auto; height: 250px">

  <div class="form-group">
    <table class="table table-bordered"  align= "center">
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
          $name = $row['dependentName'];
          $bday = $row['dependentBday'];
          $relationship = $row['dependentRelationship'];
          $dependentCivil = $row['dependentCivilStatus'];

        echo "<tr>
                  <td>$name</td>
                  <td>$bday</td>
                  <td>$relationship</td>
                  <td>$dependentCivil</td>
              </tr>";
        }
      ?>
    </table>
  </div>

</div>

<a href="#pec<?php echo $id ?>" data-toggle="tab" class="btn btn pull-left">
  <button type="button" class="btn btn-danger">Back</button>
</a>

<a href="#" data-toggle="modal" data-target="#terminateMember<?php echo $id ?>">
  <button type="button" class="btn btn-warning pull-right" style="margin-right: 2em">Early Termination</button>
</a>

</div>

</div>
      <div class="modal-footer">
      </div>
  </div>
</div>
</div>
<?php } ?>
