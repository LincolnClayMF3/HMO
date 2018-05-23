<div class="modal fade" id="newDoctorClaims"  role="dialog" style="width: 100%" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content" style="margin-top: 1em; margin-left: 1em">
    <div class="modal-header">
      <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">
        New Doctor's Claim
      </h4>
    </div>
    <form class="doctorclaimform" id="doctorclaimform" role="form" method="post" autocomplete="off" >
    <div class="modal-body tabbable tab-content form-group">

    <div class="tab-pane active fadeInDown animated" id="doctorDetails">
        <div class="form-group col-xs-12">
          <?php
          $current = date('Y-m-d');

          $checkCoordinator = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance
                              WHERE hospitalMainCoordinator = '$fullName'");

                              while($row = mysqli_fetch_array($checkCoordinator)) {
                                $hospitalName = $row['hospitalMainName'];
                                $hospitalAddress = $row['hospitalMainAddress'];
                              }
          ?>
          <label>Date</label>
          <input style="width: 50%" type="date" class="form-control" name="dateSubmit" value="<?php echo $current ?>" readonly>
        </div>

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Doctor's Name</label>
          <input type="text" class="form-control" name="doctorName" placeholder="Enter Doctor's Name">
        </div>

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Business Phone Number</label>
          <input type="text" class="form-control" name="phoneNumber" placeholder="Enter Phone Number">
        </div>

        <div class="form-group col-xs-12">
          <label>Hospital Name</label>
          <input type="text" class="form-control" name="hospitalName" value="<?php echo $hospitalName ?>" readonly>
        </div>

        <div class="form-group col-xs-12">
          <label>Hospital Coordinator</label>
          <input type="text" class="form-control" name="hospitalCoordinator" value="<?php echo $fullName?>" readonly>
        </div>

        <div class="form-group col-xs-12">
          <label>Hospital Address</label>
          <input type="text" class="form-control" name="hospitalAddress" value="<?php echo $hospitalAddress ?>" readonly>
        </div>

        <a href="#patientList" data-toggle="tab" class="btn btn pull-right">
          <button id="firstbutton" type="button" class="btn btn-primary firstbutton5">Next</button>
        </a>

      <a href="#" class="btn btn pull-left">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </a>

      </div>

      <div class="tab-pane fadeInDown animated" id="patientList">
        <div class="form-group col-xs-12">
          <label style="font-style: italic"><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Patient List</label>
        </div>
        <div class="form-group col-xs-12" style="overflow:auto; height: 250px">
          <table class="table table-bordered" id="tableClaims" >
            <tr>
              <td>Patient Name</td>
              <td>Service Done</td>
              <td>Amount</td>
              <!-- <td>Requirement</td> -->
            </tr>
            <tr>
              <!-- <td><select class="form-control" name="patientName[]">
                <option></option>
                <?php
                require 'parts/php/connection.php';
                $fetchMember = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Active'");
                while ($row = mysqli_fetch_array($fetchMember)) {
                  $name = $row['memberTransName'];

                  echo "<option value=\"$name\">$name</option>";
                }
                ?>
              </select></td> -->
              <td><input type="text" name="patientName[]" id="services" placeholder="Patient Name" class="form-control"></td>
              <td><input type="text" name="claimServices[]" id="services" placeholder="Service Done" class="form-control"></td>
              <td><input type="text" name="claimAmount[]" id="amount" placeholder="Amount" class="form-control"></td>
              <!-- <td><input type="file" name="claimRequirement[]" id="requirement" placeholder="Requirement" class="form-control"></td> -->
              <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>
            </tr>
          </table>
        </div>

        <a href="#doctorDetails" data-toggle="tab" class="btn btn pull-left">
          <button id="secondbutton" type="button" class="btn btn-danger firstback5">Back</button>
        </a>

        <a class="btn btn pull-right">
          <input type="submit" class="btn btn-success" name="btnSend" value="Submit">
        </a>

      </div>

    </div>
  </form>
    <div class="modal-footer">
    </div>
  </div>
</div>
</div>

<?php

if(isset($_POST['btnSend'])){

	require 'parts/php/post/claims/doctor/btnSend.php';

}

?>

<script>

$(document).ready(function(){

  var i = 1;

  $('#add').click(function(){
    i++;
    $('#tableClaims').append('<tr id="row'+i+'"><td><input type="text" name="patientName[]" id="services" placeholder="Patient Name" class="form-control"></td><td><input type="text" name="claimServices[]" id="services" placeholder="Service Done" class="form-control name-list"></td><td><input type="text" name="claimAmount[]" id="amount" placeholder="Amount" class="form-control name-list"></td><td><button name="remove" id="'+i+'" class="btn-danger btn-sm btn_remove">X</button></td></tr>');
  });

  $(document).on('click','.btn_remove', function(){
    var button_id = $(this).attr("id");
    $('#row'+button_id+'').remove();
  });
});

</script>
