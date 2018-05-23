<div class="modal fade" id="newCompany" role="dialog" style="width: 100%" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top: -1em; margin-left: 3em">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
          New Company
        </h4>
      </div>
      <div class="modal-body">
        <form class="companyform" role="form" method="post" autocomplete="off">

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Company Name</label>
          <input type="text" class="form-control" name="companyName" placeholder="Enter Company Name"  required onkeypress="return validateName(event)">
        </div>

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Company Address</label>
          <input type="text" class="form-control" name="companyAddress" placeholder="Enter Company Address" required onkeypress="return validateName(event)">
        </div>

        <div class="col-xs-6">
         <div class="form-group">
           <div class="col-xs-12">
             <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Preferred Plan</label>
           </div>
           <div class="col-xs-12" style="margin-bottom: .5em; overflow-y:auto;
             box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444; height:100px;">
               <?php

                 $plan = mysqli_query($con, "SELECT p1.planID, p1.planName, p1.status,
                                            m1.membershipName, m1.membershipID FROM tblplan p1
                               INNER JOIN tblplantype p2 ON p1.planID = p2.intPlanID
                               INNER JOIN tblmembershiptype m1 ON m1.membershipID = p2.intTypeID
                               WHERE p1.status = 'Active' AND m1.membershipName = 'Corporate' ORDER BY planName ASC");

                   while($row = mysqli_fetch_array($plan)){

                     $id = $row['planID'];
                     $name = $row['planName'];

                     echo "<label><small>";
                     echo "<input type=\"checkbox\" name=\"planArray[]\"
                            value=\"$id\"/> $name ";

                     echo "</small></label></br>";
                   }

                 ?>
             </div>
           </div>
        </div>

        <div class="form-group col-xs-6">
          <label>Contact Details</label>
          <input type="text" class="form-control" name="companyTelephone" data-inputmask='"mask": "999-999-99"' data-mask placeholder="Enter Telephone No." maxlength="10" onkeypress="return validateNumber(event)">
          <input type="text" class="form-control" name="companyMobile" data-inputmask='"mask": "(9999) 999-9999"' data-mask placeholder="Enter Mobile No." maxlength="14" onkeypress="return validateNumber(event)">
          <input type="email" class="form-control" name="companyEmail" placeholder="Enter Email Address">
        </div>

        <div class="form-group col-xs-6">
          <?php
            $entry = date('Y-m-d');
          ?>
          <label>Entry Date</label>
          <input id="companyEffectivityDate" value="<?php echo $entry ?>" type="date" class="form-control" name="companyEffectivityDate" disabled>
        </div>


        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Status</label>
          <div class="radio">
            <label>
              <input type="radio" name="status" value="Active" checked>
              Active
            </label>
            <label>
              <input type="radio"  name="status"  value="Inactive"disabled>
              Inactive
            </label>
          </div>
        </div>

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Contract Specification</label>
          <div class="radio">
            <label>
              <input type="radio" class="open_ended" name="contract" value="Open End" checked>
              Open End
            </label>
          </div>
            <div class="radio">
            <label>
              <input type="radio" class="non_permanent" name="contract">
              Specific Date
            </label>
          </div>
        </div>

        <div class="form-group col-xs-6">
          <p>End of Contract</p>
          <input type="date" class="form-control" id="end" name="contract" disabled>
          <input type="hidden" name="notif" id="notify" value="5" disabled>
        </div>

      </div>
      <div class="modal-footer">
        <p style="color: red; font-style: italic">Note: All fields with <span class="glyphicon glyphicon-asterisk" style="color:red"></span> are Required</p>
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel" onclick="reset()">Close</button>
        <input type="submit" class="btn btn-success" name="btnCreate" value="Create">
      </form>
      </div>
    </div>
  </div>
</div>


<?php

if(isset($_POST['btnCreate'])){

  require 'parts/php/post/contract/company/btnCreate.php';
  require 'parts/modals/contract/company/generate.php';

}

?>

<script src="plugins/select2/select2.full.min.js"></script>
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script>

$("[data-mask]").inputmask();


$(".open_ended").click(function(){

    $("input[id=end]").prop('disabled', true);
    $("input[id=notify]").prop('disabled', true);


});

$(".non_permanent").click(function(){

    $("input[id=end]").prop('disabled', false);
    $("input[id=notify]").prop('disabled', false);


});

</script>
